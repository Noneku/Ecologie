<?php
 //Fonction for stock data of users table
function getUser($db){
  $query = $db->query('SELECT user_id, user_name, user_password, user_status FROM users');
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}

//Fonction search id with pseudo
function getIDbyPseudo($form){

  $db = connectDataBase();

  $query = $db->prepare('SELECT user_id FROM users WHERE user_pseudo = ?');
  $query->execute([$form]);
  $result = $query->fetch(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}

?>
