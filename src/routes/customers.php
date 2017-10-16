<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  $app = new \Slim\App;

  //Ruta para obtener todos los customers 
  $app->get('/api/customers',function(Request $request, Response $response){

    $sql = "select * from customers;";

    try {
      //Get DB object

      $db = new db();

      $db = $db->connect();

      $stmt = $db->query($sql);

      $customers = $stmt->fetchAll(PDO::FETCH_OBJ);

      $db = null;

      echo json_encode($customers); 
      
    } catch (PDOException $e) {
      echo '{"error":{"text":'.$e->getMessage().'}}';
    }

  });

  //Ruta para obtener un customer
  $app->get('/api/customer/{id}',function(Request $request, Response $response){

    $id = $request->getAttribute('id');

    $sql = "select * from customers where id = $id;";

    try {
      //Get DB object

      $db = new db();

      $db = $db->connect();

      $stmt = $db->query($sql);

      $customer = $stmt->fetchAll(PDO::FETCH_OBJ);

      $db = null;

      echo json_encode($customer); 
      
    } catch (PDOException $e) {
      echo '{"error":{"text":'.$e->getMessage().'}}';
    }

  });

