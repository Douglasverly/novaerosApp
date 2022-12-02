<?php 
require '../vendor/autoload.php';
session_start();
try {
    $data=router();
    

    if (!isset($data['data'])) {
       throw new Exception('O indice data está faltando');
    }

    if (!isset($data['view'])) {
        throw new Exception('Esta view não existe');
    }

    if (!file_exists(VIEWS.$data['view'])) {
        throw new Exception('Pagina não encontrada');
    }

    extract($data['data']);

    $view=$data['view'];

    require VIEWS.'master.php';

} catch (Exception $e) {
    var_dump($e->getMessage());
}


?>