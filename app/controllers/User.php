<?php

namespace app\controllers;

class User{
	public function show($params){

		if (!isset($params['user'])) {
			return redirect('/');
		}
		
		$user=findBy('contas','id',$params['user'],'nome,email');
		
	}
	public function panel($params){
		if (!logged()) {

			return redirect('/');
		  }
		return[
			'view'=>'panel.php',
			'data'=>['title'=>'Painel de Usuário','user'=>$_SESSION[LOGGED]]
			];
	}

	public function createAccount($params){

		if (logged()) {

        	return redirect('/');
      	}

		return[
			'view'=>'createAccount.php',
			'data'=>['title'=>'Criar Conta']
			];
	}

	public function create(){
		
		$validate=validate([
			'name'=>'required|maxlen:20|minlen:4',
			'email'=>'email|unique:contas',
			'login'=>'required|minlen:4|maxlen:10|unique:contas',
			'password'=>'required|minlen:6'
			]);

		if (!$validate) {
			return redirect('/user/create');
		}

		$validate['password']=password_hash($validate['password'],PASSWORD_DEFAULT);

		$created=createDb('contas',$validate);
		
		if (!$created) {
			setFlash('createAccount','Ocorreu um erro ao cadastrar tente novamente');
			return redirect('/user/create');
		}

		setFlash('createAccount','Conta criada com Sucesso!');
		return redirect('/login');

	}
}