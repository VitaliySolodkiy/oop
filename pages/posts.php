<h1>Posts Page</h1>
<?php Message::get();



Classes\Post::$tagTitle = 'h3'; //указываем namespace, затем через обратный слэш \ указываем имя класса

/* $post1 = new Post('First post', 123);

echo $post1->getPost() . "<br>";

echo $post1; //__toString()

echo "<hr>"; */

$lesson1 = new Classes\Lesson('First Lesson', 'lesson text', 'DZ text');
echo $lesson1->getPost() . "<br>";

echo $lesson1->setMark(1);

echo $lesson1->getMark();

?>