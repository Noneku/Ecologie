<?php
require '../model/db.php';
require '../model/volunteerManager.php';
require '../service/convertAvailablelityService.php';
$db = connectDataBase();

//Update
if(!empty($_GET)){
  $id = htmlspecialchars($_GET['id']);
  $volunteer = getVolunteerID($id ,$db);
    if(!empty($_POST)){
      updateVolunteer($_POST, $id, $db);
      header('Location: gestionVolunteer.php');
      exit;
    }
}
require '../view/updateVolunteerView.php';
 ?>
