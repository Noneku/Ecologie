<?php
//Require the index of the page
require '../model/db.php';
require '../model/userManager.php';
require '../service/verifUserService.php';

//Connect to DB
$db = connectDataBase();

//Checked if user_name and user_password exist in DB
if(!empty($_POST)){
  //Stock entry of form
  $user = $_POST;
  //Stock data of users table
  $db_user = getUser($user['user_name'], $db);
  //Check password
  if(verifPassword($user, $db_user)){
    header('Location: gestionVolunteer.php');
    exit;
  }
}

require '../view/indexView.php';

 ?>
