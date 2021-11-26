<?php

   include_once('db.php');

   $method = $_SERVER['REQUEST_METHOD'];

   if ($method === "GET") {

      $pedidosQuery = $conn->query("SELECT * FROM pedidos;");
      $pedidos = $pedidosQuery->fetchAll();

      $pizzas = [];

      foreach ($pedidos as $pedido ) {
         $pizza = [];

         $pizza['id'] = $pedido['pizza_id'];

         /*Pizza*/
         $pizzaQuery = $conn->prepare("SELECT * FROM pizzas WHERE id = :pizza_id");
         $pizzaQuery->bindParam(":pizza_id", $pizza['id']);
         $pizzaQuery->execute();
         $pizzaData = $pizzaQuery->fetch(PDO::FETCH_ASSOC);

         /*Borda*/
         $bordaQuery = $conn->prepare("SELECT * FROM bordas WHERE id = :borda_id");
         $bordaQuery->bindParam(":borda_id", $pizzaData['borda_id']);
         $bordaQuery->execute();
         $borda = $bordaQuery->fetch(PDO::FETCH_ASSOC);
         $pizza['borda'] = $borda['tipo'];

         /*Massa*/
         $massaQuery = $conn->prepare("SELECT * FROM massas WHERE id = :massa_id");
         $massaQuery->bindParam(":massa_id", $pizzaData['massa_id']);
         $massaQuery->execute();
         $massa = $massaQuery->fetch(PDO::FETCH_ASSOC);
         $pizza['massa'] = $massa['tipo'];

         /*Sabores*/
         $saboresQuery = $conn->prepare("SELECT * FROM pizza_sabor WHERE pizza_id = :pizza_id");
         $saboresQuery->bindParam(":pizza_id", $pizza['id']);
         $saboresQuery->execute();
         $sabores = $saboresQuery->fetchAll(PDO::FETCH_ASSOC);

         /*Nomes sabores*/
         $saboresDaPizza = [];
         $saborQuery = $conn->prepare("SELECT * FROM sabores WHERE id = :sabor_id");
         foreach ($sabores as $sabor ) {
            $saborQuery->bindParam(":sabor_id", $sabor['sabor_id']);
            $saborQuery->execute();
            $saborPizza = $saborQuery->fetch(PDO::FETCH_ASSOC);
            array_push($saboresDaPizza, $saborPizza['nome']);
         }

         $pizza['sabores'] = $saboresDaPizza;

         $pizza['status'] = $pedido['status_id'];

         array_push($pizzas, $pizza);
      }

      $statusQuery = $conn->query("SELECT * FROM status;");
      $status = $statusQuery->fetchAll();
      
   } elseif ($method === "POST"){

   }

?>