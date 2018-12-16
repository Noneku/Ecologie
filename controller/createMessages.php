<?php
require '../model/db.php';
require '../model/messagesManager.php';
require '../model/userManager.php';

session_start();

if(!empty($_POST)){
  $id_sender = $_SESSION['user']['user_id'];
  $id_getter = getIDbyPseudo($_POST['message_getter']);
  var_dump($id_getter);
  if(!empty($id_sender) && !empty($id_getter))
  {
    sendMessage($_POST, $id_sender, $id_getter['user_id']);
  }
}
require '../view/createMessagesView.php';
 ?>
