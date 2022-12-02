<?php
namespace app\controllers;

class Manutencao{

public function manutencao(){
	return[
			'view'=>'maintenance/manutencao.php',
			'data'=>['title'=>'Algo deu errado!']
			];
}
}