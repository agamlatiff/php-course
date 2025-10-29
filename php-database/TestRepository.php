<?php

use Model\Comment;
use Repository\CommentRepository;

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

$connection = getConnection();
$repository = new CommentRepository($connection);

$comment = new Comment(email: "repository@test.com", comment: "Test Repository");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

$comment = $repository->findById(1);
var_dump($comment);

// $comment = $repository->findAll();

// var_dump($comment);

// $connection = null;