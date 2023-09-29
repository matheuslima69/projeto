<?php

 // print_r($_REQUEST);
 if(isset($_POST['submit'])&&!empty($_POST['email']) && !empty($_POST['senha']))
 {
 //acessa
 include_once('config.php');
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 }
 else
 {
    // Não acessa
    header('location:login.php');
 }
?>
