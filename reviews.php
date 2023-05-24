<?php

require 'classes/db.php';

require 'view/user-view.php';
require 'model/user-model.php';
require 'view/review-view.php';
require 'model/review-model.php';

$pdo = require 'partials/connect.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

$userModel = new UserModel($pdo);

include 'partials/header.php';
include 'partials/nav.php';


$users = $userModel->getAllUsers(); // Anropa getAllUsers() på userModel-instansen

    foreach ($users as $user) {
        $userId = $user['id'];
        $books = $reviewModel->getBooksByUserId($userId);
        $reviewView->renderAllUserBooksAsList($books);
    }

include 'partials/review-form.php';
include 'partials/footer.php';
?>