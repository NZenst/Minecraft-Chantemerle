<?php
try {
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=mcc', 'root', '');
} catch (PDOException $e) {
  print "Error !: " . $e->getMessage() . "<br/>";
  die();
}