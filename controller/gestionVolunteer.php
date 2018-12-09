<?php
require '../model/db.php';
require '../model/volunteerManager.php';
require '../service/convertAvailablelityService.php';

$db = connectDataBase();

if(!empty($_POST)){
  $volunteers = sortsVolunteers($_POST,$db);
}
else
{
  $volunteers = getVolunteer($db);
}

require '../view/gestionVolunteerView.php';
 ?>
