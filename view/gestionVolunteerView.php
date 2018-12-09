<?php
include 'template/header.php';
?>
<div class="d-flex justify-content-between mb-2">
  <h2 class = "">Panel de gestion des bénévoles</h2>
  <a href="../controller/addVolunteer.php" class="btn btn-primary btn-lg active mr-3" role="button">Ajouter +</a>
</div>
<div class="mb-1 ">
  <?php require "form/formSorts.php"; ?>
</div>
<aside class="">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Age</th>
        <th scope="col">Ville</th>
        <th scope="col">Disponibilité</th>
        <th scope="col">Informations</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($volunteers as $key => $value){ ?>
      <tr>
        <th scope="row"><?php echo $value['volunteer_id']; ?></th>
        <td><?php echo $value['volunteer_name']; ?></td>
        <td><?php echo $value['volunteer_firstname'];?></td>
        <td><?php echo $value['volunteer_age'];?></td>
        <td><?php echo $value['volunteer_city'];?></td>
        <td><?php convertAvailablelity($value);?></td>

        <td><a href = "">Plus d'infos</a></td>
        <td>
          <a href='../controller/updateVolunteer.php?id=<?php echo $value['volunteer_id']; ?>' class="btn  active bg-warning text-dark" role="button" aria-pressed="true">Modifier</a>
          <a href='../controller/deleteVolunteer.php?id=<?php echo $value['volunteer_id']; ?>' class="btn  active bg-danger text-dark" role="button" aria-pressed="true">Supprimer</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</aside>

<?php
include 'template/footer.php';
 ?>
