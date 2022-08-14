<?php
session_start();

require_once "./functions/helpers.php"; //тут важно написать путь, учитывая что mail.php подключается в index.php. Т.е. путь строим так, как будто мы находимся в нем
require_once "./functions/Message.php";
$page = $_GET['page'] ?? 'home';

$action = $_POST['action'] ?? null; //при отправке формы сюда записывает название функции (из параметра value кнопки отправки) в виде строки - 'sendMail'
if (!empty($action) && function_exists($action)) {
    $action(); //если в переменной находится строка, то ее можно вызвать как функцию просто добавив круглые скобки после нее
}

//===========================||==================



function sendSignUp()
{
    $login = $_POST['login'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = password_hash($_POST['password'], null) ?? null;

    if (!$login || !$email || !$password) {
        Message::set('All fields required', 'danger');
        redirect('signup');
    }

    if (file_exists('users.txt')) {
        $lines = file('users.txt');
        foreach ($lines as $line) {
            list($currentLogin, $currentEmail, $currentPassword) = explode('|', $line);
            if ($currentEmail === $email) {
                Message::set("User with email $currentEmail already exist!", 'danger');
                redirect('signup');
            }
        }
    }

    $f = fopen('users.txt', 'a');
    fwrite($f, "$login|$email|$password" . "\r\n");
    fclose($f);
    Message::set('Congratulation! You had been registered');
    redirect('login');
}

function login()
{
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (file_exists('users.txt')) {
        $lines = file('users.txt');
        foreach ($lines as $line) {
            list($currentLogin, $currentEmail, $currentPassword) = explode('|', $line);
            if (password_verify(clear($password), clear($currentPassword)) && ($currentEmail === $email)) {
                $_SESSION['user'] = [
                    "login" => $currentLogin,
                    "email" => $currentEmail,
                ];
                Message::set("You have been successfully logged in");
                redirect('profile');
            }
        }
        Message::set("Your email or password incorrect", "danger");
        redirect('login');
    }
}
