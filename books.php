<?php

require 'classes/db.php';
require 'view/book-view.php';
require 'model/book-model.php';

$pdo = require 'partials/connect.php';

include 'partials/header.php';
include 'partials/nav.php';

$bookModel = new BookModel($pdo);
$bookView = new BookView();

$bookView->renderAllBooksAsList($bookModel->getAllBooks());

include 'partials/book-form.php';
include 'partials/footer.php';
?>