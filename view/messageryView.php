<?php
require 'template/header.php';
require '../model/db.php';
require '../model/messagesManager.php';
$messages = getMessages();
var_dump($messages);
 ?>
<h2 clas  = "text-center">Ma messagerie</h2>
<a href="../controller/createMessages.php">Créer un message</a>
<a href="../service/sessionLogoutService.php" class = 'mr-2'>[Déconnexion]</a>
<aside class="">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Envoyer à :</th>
      <th scope="col">Objet :</th>
      <th scope="col">Date :</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($messages as $key => $value) {?>
    <tr>
      <td><?php echo $value['id_getter'];  ?></td>
      <td><?php echo $value['message_object'];  ?></td>
      <td><?php echo $value['message_time'];  ?></td>
    </tr>
  <?php } ?>
  </tbody>
 </table>
</aside>
 <?php
 require 'template/footer.php';
  ?>
