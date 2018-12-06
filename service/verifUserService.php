<?php
//Function check if user exist
function verifPassword($user, $db_user){
  if($user['user_password'] === $db_user['user_password']){
    return true;
  }
  else{
    return false;
  }
}
 ?>
