<?php
function getMessages(){

  $db = connectDataBase();

  $query = $db->query('SELECT * FROM messages');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;

}

function getMessageUser(){

  $db = connectDataBase();

  $query = $db->query('SELECT m.id_getter, u.user_pseudo FROM messages AS m INNER JOIN users AS u ON m.id_getter = u.user_pseudo');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}

function sendMessage($form, $id_sender,$id_getter){

  $db = connectDataBase();

  $query = $db->prepare('INSERT INTO messages (id_sender, id_getter, message_object, message_content, message_time)
  VALUES (:id_sender, :id_getter, :message_object, :message_content, :dated)');
  $result = $query->execute([
    'id_sender' => $id_sender,
    'id_getter' => $id_getter,
    'message_object' => $form['message_object'],
    'message_content' => $form['message_content'],
    'dated' => date("Y-m-d H:i:s")
  ]);

  $query->closeCursor();

  return $result;
}

function deleteMessage(){

}
 ?>
