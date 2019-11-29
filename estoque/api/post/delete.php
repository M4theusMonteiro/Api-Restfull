<?php 
 
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  require_once 'estoque/config/Database.php';
  require_once 'estoque/models/Post.php';
  
  $database = new Database();
  $db = $database->connect();

  $post = new Post($db);

  $data = json_decode(file_get_contents("php://input"));

  $post->id = $data->id;
  
  if($post->delete()) {
    echo json_encode(
      array('message' => 'Excluido com Sucesso')
    );
  } else {
    echo json_encode(
      array('message' => 'Falha ao Deletar')
    );
  }

  ?>