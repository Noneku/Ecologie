<?php
//Require the index of the page
require '../model/db.php';
require '../model/userManager.php';
require '../service/verifUserService.php';

//Connect to DB
$db = connectDataBase();

//Checked user information for connexion
verifUser($_POST, $db);

require '../view/indexView.php';

 ?>
