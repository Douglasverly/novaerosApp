<?php

namespace app\controllers;


class Home
{
	public function index($params){
		$users=all('contas');

		
		return[
			'view'=>'home.php',
			'data'=>['title'=>'Home','users'=>$users]
			];
	}
}
