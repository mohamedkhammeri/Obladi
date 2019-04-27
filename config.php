<?php
/*
session_start();
if (!isset($_SESSION['signOn'])) {
  header('location: sign-in.php');
}*/

class config {
  private static $instance = NULL;
  public static function getConnexion() {
    if (!isset(self::$instance)) {
      try{
        self::$instance = new PDO('mysql:host=localhost;dbname=obladi', 'root', '');
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }catch(Exception $e){
        die('Erreur: '.$e->getMessage());
      }
    }
    return self::$instance;
  }
}
?>
