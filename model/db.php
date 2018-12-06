<?php
function connectDataBase()
{
  try

  {

    $db = new PDO('mysql:host=localhost;dbname=Les_ecolos;charset=utf8', 'phpmyadmin', 'abcdef1996');

  }

  catch (Exception $e)

  {

        die('Erreur : ' . $e->getMessage());

  }

  return $db;
}

?>
