<?php
session_start();
session_unset();
session_destroy();

header('Location: ../controller/index.php');
exit;
 ?>
