<?php
require_once 'libs/functions.php';
session_start();
if (!isset($_SESSION["user"])) {
  $_SESSION['user'] = array();
}
if(isset($_GET['deco']) && $_GET['deco'] == '1') {
    session_destroy();
    redirection();
}
?><!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
  </head>
  <div class="container">
   <?php// include 'layout/header.php'?>
        <?php if (empty($_SESSION['user'])): ?>
           <?php var_dump("Bonjour, bienvenue dans votre espace personnel"); ?>
            <a href="?deco=1" >disconnect</a>
        <?php else:
        redirection(); ?>
      <?php endif; ?>
    <?php include 'layout/footer.php'?>
  </div>
  </body>
</html>