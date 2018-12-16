<?php
require '../model/db.php';
require '../model/volunteerManager.php';
require '../service/convertAvailablelityService.php';
require '../service/restrictToAdminService.php';

session_start();
$db = connectDataBase();

// This page is restricted to admin !
restrictToAdmin($_SESSION['user']);

//Checked the form
if(!empty($_POST)){
  //Can sorts the Volunteers
  $volunteers = sortsVolunteers($_POST,$db);
}
else
{
  //Display Volunteers
  $volunteers = getVolunteer($db);
}

require '../view/gestionVolunteerView.php';
 ?>
