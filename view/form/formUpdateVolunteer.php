<form class="mx-auto w-50 my-5" method="POST">
   <div class="form-group">
       <label for="userName">Nom : </label>
       <input type="text" class="form-control" name="volunteer_name" id="volunteer_name" value = '<?php echo $volunteer['volunteer_name']; ?>'>
   </div>
   <div class="form-group">
       <label for="userFirstname">Prénom : </label>
       <input type="text" class="form-control" name="volunteer_firstname" id="volunteer_firstname" value = '<?php echo $volunteer['volunteer_firstname']; ?>'>
   </div>
   <div class="form-group">
       <label for="user_age">Age : </label>
       <input type="number" class="form-control" name="volunteer_age" id="volunteer_age" value = '<?php echo $volunteer['volunteer_age']; ?>'>
   </div>
   <div class="form-group">
       <label for="disponible">Disponibilité: </label>
       <select class="form-control" id="volunteer_availability" name="volunteer_availability">
         <option value = "0"><?php convertAvailablelity($volunteer); ?></option>
         <option value = "1" >Disponible</option>
      </select>
   </div>
   <div class="form-group">
       <label for="commentaire">Commentaire : </label>
       <textarea class="form-control" id="volunteer_comment" name ="volunteer_comment"rows="3"><?php echo $volunteer['volunteer_comment']; ?></textarea>
   </div>
   <div class="form-group">
       <label for="userStreet">Rue : </label>
       <input type="text" class="form-control" name="volunteer_street" id="volunteer_street" value = '<?php echo $volunteer['volunteer_street']; ?>'>
   </div>
   <div class="form-group">
       <label for="userCity">Ville : </label>
       <input type="text" class="form-control" name="volunteer_city" id="volunteer_city" value = '<?php echo $volunteer['volunteer_city']; ?>'>
   </div>    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
   <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
