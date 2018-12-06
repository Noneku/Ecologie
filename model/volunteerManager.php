<?php
//Fonction stock all volunteers
function getVolunteer($db)
{
 $query = $db->query('SELECT * FROM volunteers');
 $result = $query->fetchall(PDO::FETCH_ASSOC);
 $query->closeCursor();
 return $result;
}
// function that is used to search for a volunteer
// function getVolunteerID($id, $db)
// {
//  $query = $db->prepare("SELECT * FROM benevole WHERE id=?");
//  $query->execute([$id]);
//  $benevole = $query->fetch(PDO::FETCH_ASSOC);
//  return $benevole;
// }
//Fonction add Volunteers in DB
function addVolunteer($volunteer, $db){
  $query = $db->prepare('INSERT INTO volunteers (volunteer_name, volunteer_firstname, volunteer_age, volunteer_availability, volunteer_comment, volunteer_street, volunteer_city)
  VALUES (:volunteer_name, :volunteer_firstname, :volunteer_age, :volunteer_availability, :volunteer_comment, :volunteer_street, :volunteer_city)
  ');
  $result = $query->execute([
    'volunteer_name' => $volunteer['volunteer_name'],
    'volunteer_firstname' => $volunteer['volunteer_firstname'],
    'volunteer_age' => $volunteer['volunteer_age'],
    'volunteer_availability' => $volunteer['volunteer_availability'],
    'volunteer_comment' => $volunteer['volunteer_comment'],
    'volunteer_street' => $volunteer['volunteer_street'],
    'volunteer_city' => $volunteer['volunteer_city']

  ]);

  $query->closeCursor();
}
 ?>
