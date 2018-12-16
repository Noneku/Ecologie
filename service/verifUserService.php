<?php
function verifUser($form, $db){
  if(!empty($form)){
    $user = $form;
    $db_user = getUser($db);

    foreach ($db_user as $key => $value) {
    if($user['user_name'] === $value['user_name'] && $user['user_password'] === $value['user_password']){
      session_start();
      $_SESSION['user'] = $value;
      header('Location: ../controller/gestionVolunteer.php');
      exit;
    }
  }
 }
}

 ?>
