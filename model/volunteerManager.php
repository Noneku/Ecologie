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
  $param = [];

  //Vérifie si volunteer_city n'est pas vide et n'est pas NULL
  if(!empty($form['volunteer_city']) || isset($form['availability']))
  {
    //Alors je rajoute un WHERE
    $sql .= ' WHERE ';

    //Sorts city
    if(!empty($form['volunteer_city']))
    {
      $sql .= ' volunteer_city = ? ';
      array_push($param, $form['volunteer_city']);

    // Sorts Availablelity
    if($form['availability'] == 1 || $form['availability'] == 0)
    {
      $sql .= ' AND volunteer_availability = ? ';
      array_push($param, $form['availability']);
    }
  }
  else
  //Autrement si volunteer_city est vide je change la requete
      {
        if(isset($form['availability'])){
          $sql .= " volunteer_availability = ? ";
          array_push($param, $form["availability"]);
      }
    }
  }

  // Sorts Name and Age
  if(!empty($form['sorts'])){
    $sql .= ' ORDER BY ' .$form['sorts'];
  }


  $query = $db->prepare($sql);
  $query->execute($param);

  $result = $query->fetchall(PDO::FETCH_ASSOC);

  $query->closeCursor();

  return $result;
}
 ?>
