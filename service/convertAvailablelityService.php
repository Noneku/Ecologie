<?php

function convertAvailablelity($value){
  if($value['volunteer_availability'] == 1){
    echo "<p class = 'bg-success text-center'>Disponible</p>";
  }
  else {
    {
      echo "<p class = 'bg-danger text-center'>Indisponible</p>";
    }
  }
} ?>
