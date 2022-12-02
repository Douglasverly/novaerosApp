<?php

namespace app\controllers;


class Panel
{
	public function User($params){

		if (!logged()) {

			return redirect('/');
		  }
		  
		return[
			'view'=>'panel.php',
			'data'=>['title'=>'Painel de Usuário','activeUser'=>'style=\'color:rgb(150, 50, 255);\'','subTitle'=>'Configurações de Usuário','subView'=>'panelPartials/userPanel.php']
			];
	}

	public function Table($params){

		if (!logged()) {

			return redirect('/');
		  }
		  
		return[
			'view'=>'panel.php',
			'data'=>['title'=>'Painel de Usuário','activeMesa'=>'style=\'color:rgb(150, 50, 255);\'','subTitle'=>'Mesa','subView'=>'panelPartials/mesaPanel.php']
			];
	}

}