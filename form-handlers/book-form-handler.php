<?php
require '../classes/db.php';
require '../model/book-model.php';

$bookModel = new BookModel(require '../partials/connect.php');

if (isset($_POST['name'], $_POST['year'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $authorId = filter_var($_POST['author-id'], FILTER_SANITIZE_NUMBER_INT);
    $bookModel->addBook($name, $year, $authorId);}

header("Location: ../books.php");
?>