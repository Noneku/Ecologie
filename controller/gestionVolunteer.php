<?php
require '../model/db.php';
require '../model/volunteerManager.php';
$db = connectDataBase();
$volunteers = getVolunteer($db);

require '../service/convertAvailablelityService.php';
require '../view/gestionVolunteerView.php';
 ?>
