<h1>Home page</h1>
<?php
echo 'Task #1';
$tag1 = new Classes\Tag('h1');
$tag1->setText('Hello');
$tag1->setStyle([
    'color' => 'red',
    'font-size' => '1.2em'
]);
$tag1->show();

//================
echo 'Task #2' . '<br>';
$student1 = new Classes\Student('Bob', 'test@gmail.com', 'web12', [10, 11]);

$student1->addMark(3);
$student1->addMark(5);
$student1->addMark(12);
$student1->addMark(8);
echo 'Class Student:';
$student1->show();

$teacher = new Classes\Teacher('John', 'johns@gmail.com', ['web01']);
$teacher->addGroup('web02');
$teacher->addGroup('web05');
echo 'Class Teacher:' . '<br>';
$teacher->show();
?>