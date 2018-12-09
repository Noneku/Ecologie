<?php

function convertAvailablelity($value){
  //Convert number to string
  if($value['volunteer_availability'] == 1){
    echo "<p class = 'bg-success text-center'>Disponible</p>";
  }
  else
    {
      echo "<p class = 'bg-danger text-center'>Indisponible</p>";
    }
    //Convert string on number
    if($value['volunteer_availability'] === 'Disponible'){
      $value['volunteer_availability'] === 1;
    }
    elseif($value['volunteer_availability'] === 'Indisponible'){
      $value['volunteer_availability'] === 0;
    }
  }
 ?>
