<?php

   include_once('db.php');

   $method = $_SERVER['REQUEST_METHOD'];

   if ($method === "GET") {
      
      $bordasQuery = $conn->query("SELECT * FROM bordas;");
      $bordas = $bordasQuery->fetchAll();

      $massasQuery = $conn->query("SELECT * FROM massas;");
      $massas = $massasQuery->fetchAll();

      $saboresQuery = $conn->query("SELECT * FROM sabores;");
      $sabores = $saboresQuery->fetchAll();

   } elseif ($method === "POST") {
      
      $data = $_POST;

      $borda = $data['borda'];
      $massa = $data['massa'];
      $sabores = $data['sabores'];

      if (count($sabores) > 3){
         $_SESSION['msg'] = "Selecione no máximo 3 sabores!";
         $_SESSION['status'] = "warning";

      } else {

         
      }

      header("Location: ..");
   }
?>