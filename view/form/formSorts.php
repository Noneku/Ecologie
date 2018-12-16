<form class="d-flex align-items-center justify-content-around mt-6" method="post">
  <p>Trier par :</p>
  <label for="">Nom/Age :</label>
  <select class="form-control ml-2 col-2" name="sorts">
    <option selected disabled>Choisir ---</option>
    <option value = "volunteer_name">Nom</option>
    <option value = "volunteer_age">Age</option>
  </select>
  <label for="">Ville :</label>
  <input type="text" name="volunteer_city" value="" placeholder="Ville"></input>
  <label for="">Disponibilité :</label>
  <select class="form-control ml-2 col-2" name="availability">
    <option selected disabled>Choisir ---</option>
    <option value = "1">Disponible</option>
    <option value = "0">Indisponible</option>
  </select>
  <button type="submit" class="btn btn-info ml-2">Trier !</button>
</form>
