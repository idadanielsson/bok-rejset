<?php

require 'view/user-view.php';

require 'classes/db.php';
require 'model/user-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new UserModel($pdo);
$userView = new UserView();


include 'partials/header.php';
include 'partials/nav.php';

include 'partials/footer.php';
?>