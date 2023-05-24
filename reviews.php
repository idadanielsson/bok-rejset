<?php

require 'view/user-view.php';
require 'model/user-model.php';

$pdo = require 'partials/connect.php';

$userModel = new UserModel($pdo);
$userView = new UserView();


include 'partials/header.php';
include 'partials/nav.php';

$userView->renderAllUsersAsList($userModel->getAllUsers());

include 'partials/review-form.php';

include 'partials/footer.php';
?>