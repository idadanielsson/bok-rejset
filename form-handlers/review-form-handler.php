<?php
    require_once "../classes/db.php";
    require '../model/review-model.php';

    $reviewModel = new ReviewModel(require '../partials/connect.php');

    if(isset($_POST['review'])){
        $review = filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);
        $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT); 
        $bookId = filter_var($_POST['bookId'], FILTER_SANITIZE_NUMBER_INT);

        $reviewModel->addReview($review, $userId, $bookId);

    }

    header("Location: ../reviews.php");
?>