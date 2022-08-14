<h1>Posts Page</h1>
<?php Message::get();

require_once './classes/Post.php';
require_once './classes/Lesson.php';

Post::$tagTitle = 'h3';

$post1 = new Post('First post', 123);

echo $post1->getPost() . "<br>";

echo $post1; //__toString()

echo "<hr>";

$lesson1 = new Lesson('First Lesson', 'lesson text', 'DZ text');
echo $lesson1->getPost();
?>