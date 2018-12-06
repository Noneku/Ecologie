<form class="mx-auto w-50 my-5" method="POST">
   <div class="form-group">
       <label for="userName">Nom : </label>
       <input type="text" class="form-control" name="volunteer_name" id="volunteer_name" placeholder="Nom">
   </div>
   <div class="form-group">
       <label for="userFirstname">Prénom : </label>
       <input type="text" class="form-control" name="volunteer_firstname" id="volunteer_firstname" placeholder="Prénom">
   </div>
   <div class="form-group">
       <label for="user_age">Age : </label>
       <input type="number" class="form-control" name="volunteer_age" id="volunteer_age" placeholder="Age">
   </div>
   <div class="form-group">
       <label for="disponible">Disponibilité: </label>
       <select class="form-control" id="volunteer_availability" name="volunteer_availability">
         <option value = "1">Disponible</option>
         <option value = "0">Non Disponible</option>
      </select>
   </div>
   <div class="form-group">
       <label for="commentaire">Commentaire : </label>
       <textarea class="form-control" id="volunteer_comment" name ="volunteer_comment"rows="3" placeholder="Votre description"></textarea>
   </div>
   <div class="form-group">
       <label for="userStreet">Rue : </label>
       <input type="text" class="form-control" name="volunteer_street" id="volunteer_street" placeholder="Rue">
   </div>
   <div class="form-group">
       <label for="userCity">Ville : </label>
       <input type="text" class="form-control" name="volunteer_city" id="volunteer_city" placeholder="Ville">
   </div>    <!--Envoie les données du formulaire selon si c'est un ajout ou une modification-->
   <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
