<?php
function restrictToAdmin($value){
  if($value['user_status'] === 'ADMIN'){

  }
  else
  {
    header('Location: ../controller/messagery.php?');
    exit;
  }
}
 ?>
