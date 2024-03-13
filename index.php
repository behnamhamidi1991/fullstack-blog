<?php 

class Article {
    public $title;
    public $content;
    private $published = false;


    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this-> published = true;
    }

    public function isPublished () {
        return $this->published;
    }
}


$article1 = new Article("My first post", "Lorem ipsum dolor sit amet . The graphic and typographic operators know this well, in reality all the professions dealing with the universe of communication have a stable relationship with these words, but what is it? Lorem ipsum is a dummy text without any sense. Lorem ipsum dolor sit amet . The graphic and typographic operators know this well, in reality all the professions dealing with the universe of communication have a stable relationship with these words, but what is it? Lorem ipsum is a dummy text without any sense.");


var_dump($article1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css" />
    <title>PHP</title>
</head>

<body class="">
    <h1 class="course-title">PHP From Scratch</h1>
    <p>I am learning OOP right now and I will learn it like it is a piece of cake!</p>
    <p>I will be the best computer engineer and developer the world has ever seen!</p>
    <p>Just wait and watch!</p>
</body>

</html>