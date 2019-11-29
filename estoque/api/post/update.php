<?php
  
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

  include_once 'estoque/config/Database.php';
  include_once 'estoque/models/Category.php';

  $database = new Database();
  $db = $database->connect();

  $category = new Category($db);

  $data = json_decode(file_get_contents("php://input"));

  $category->id = $data->id;
  $category->name = $data->name;

  if($category->update()) {
    echo json_encode(
      array('message' => 'Categoria Atualizada')
    );
  } else {
    echo json_encode(
      array('message' => 'Falha ao Atualizar')
    );
  }

  ?>