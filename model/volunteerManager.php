<?php
//Fonction stock all volunteers
function getVolunteer($db)
{
 $query = $db->query('SELECT * FROM volunteers');
 $result = $query->fetchall(PDO::FETCH_ASSOC);
 $query->closeCursor();
 return $result;
}

function getVolunteerID($id ,$db)
{
  $query = $db->prepare('SELECT * FROM volunteers WHERE volunteer_id = ?');
  $query->execute([$id]);
  $result = $query->fetch(PDO::FETCH_ASSOC);

  $query->closeCursor();
  return $result;
}

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

//Fonction delete volunteer
function deleteVolunteer($id, $db){
  $query = $db->prepare('DELETE FROM volunteers WHERE volunteer_id = ?');
  $result = $query->execute([$id]);

  return $query;

  $query->closeCursor();
}

//Fonction update volunteer
function updateVolunteer($value, $id, $db){
  $query = $db->prepare('UPDATE volunteers
  SET volunteer_name = :name, volunteer_firstname = :firstname, volunteer_age = :age, volunteer_availability = :availability, volunteer_comment = :comment, volunteer_street = :street, volunteer_city = :city
  WHERE volunteer_id = :id');
  $result = $query->execute([
    'id' => $id,
    'name' => $value['volunteer_name'],
    'firstname' => $value['volunteer_firstname'],
    'age' => $value['volunteer_age'],
    'availability' => $value['volunteer_availability'],
    'comment' => $value['volunteer_comment'],
    'street' => $value['volunteer_street'],
    'city' => $value['volunteer_city']
  ]);

  $query->closeCursor();
  return $result;
}
//Function sorts
function sortsVolunteers($form, $db){
  $sql = 'SELECT * FROM volunteers';

  //Sorts Name and Age
  if(!empty($form['sorts'])){
    $sql .= ' ORDER BY ' .$form['sorts'];
  }
  elseif(!empty($form['sorts'])){
    $sql .= ' ORDER BY ' .$form['sorts'];
  }
  else{

  }

  //Sorts Availablelity

  if(!empty($form['availablelity'] == 1)){
    $sql .= ' WHERE volunteer_availability = 1 ';
  }
  elseif(!empty($form['availablelity'] == 0)){
    $sql .= ' WHERE volunteer_availability = 0 ';
  }
  else {

  }

  // //Sorts city
  // if(!empty($form['volunteer_city'])){
  //   $sql .= ' WHERE volunteer_city = ' .$form['volunteer_city'];
  // }

  $query = $db->prepare($sql);
  $query->execute();

  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}
 ?>
