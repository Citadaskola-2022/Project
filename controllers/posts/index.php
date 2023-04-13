<?php

$heading = 'Blog posts';

$db = \App\Database::getInstance();

$posts = $db->query(<<<MySQL
    SELECT * FROM posts;
MySQL)->fetchAll();

view('/posts/index.view.php', [
    'heading' => $heading,
    'posts' => $posts
]);