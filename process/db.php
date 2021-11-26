<?php

   session_start();

   $user = "root";
   $pass = "123456";
   $db = "db_pizzaria";
   $host = "localhost";

   try {
      ini_set('default_charset', 'UTF-8');
      $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $conn->query("SET NAMES utf8");
   } catch (PDOException $e) {
      print "Erro: " . $e->getMessage() . "<br/>";
      die();
   }
?>