<?php
require '../model/db.php';
require '../model/volunteerManager.php';

$db = connectDataBase();

if(!empty($_POST)){
  $volunteer = $_POST;
  addVolunteer($volunteer, $db);
  header('Location: gestionVolunteer.php');
  exit;
}

require '../view/addVolunteerView.php';
 ?>
