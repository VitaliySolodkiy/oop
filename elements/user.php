<?php
if ($_SESSION['user']) {
    $user_login = $_SESSION['user']['login'];
    $user_email = $_SESSION['user']['email'];
}
