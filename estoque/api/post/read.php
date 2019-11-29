<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    include_once ("estoque/config/Database.php");
    include_once ("estoque/models/Post.php");

    $database = new Database();
    $db = $database->connect();

    $post = new Post($db);
                                                                                                                                                                                                                                                                                                                                  
    $result = $post->read();
    $num = $result->rowCount();

    if($num > 0){
        
        $posts_arr = array();
        $post_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $post_item = array(
                'id' => $id,
                'name'=> $name,
                'qtd' => $qtd,
                "valor" => $valor
            );

            array_push($posts_arr['data'],$post_item);
        }

        echo json_encode($posts_arr);

    }else{
        
        echo json_enconde(array(
            "message" => "nenhuma postagem encontrada"
        ));
    }

    ?>