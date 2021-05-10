<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app=new \Slim\App;

//GET TODOS LOS CLIENTES
$app->get('/api/clientes',function(Request $request,Response $response){
    $sql="SELECT * FROM clientes";
    try{
        $db=new db();
        $db=$db->conectDB();
        $resultado=$db->query($sql);

        if($resultado->rowCount()>0){
            $clientes=$resultado->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($clientes);
        }else{
            echo json_encode("NO EXISTEN LA DB");
        }
        $resultado=null;
        $db=null;
    }catch(PDOException $e){
       echo '{"error" : {"text":'.$e->getMessage().'}';
       echo 'noo';
    }
});
?>