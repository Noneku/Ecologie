<?php
 //Fonction for stock data of users table
function getUser($name, $db){
  $query = $db->prepare('SELECT * FROM users WHERE user_name = ? ');
  $query->execute([$name]);
  $result = $query->fetch(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}
?>
