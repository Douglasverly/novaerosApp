<?php
  namespace app\controllers;

  class Login
  {

  	public function index(){

      if (logged()) {

        return redirect('/');
      }

  		return[
			'view'=>'login.php',
			'data'=>['title'=>'Login']
			];
  	}

    public function store(){


      $login=filter_input(INPUT_POST, 'login',FILTER_SANITIZE_STRING);

      $password=filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);

      $message='Usuário ou senha estão Incorretos!';

      if (empty($login) || empty($password)) {

       return setMessageAndRedirect('message',$message,'/login');
      }

      $user=findBy('contas','login',$login);


      if (!$user) {

        return setMessageAndRedirect('message',$message,'/login');
      }


      if (!password_verify(
        $password, $user->password)) {
        return setMessageAndRedirect('message',$message,'/login');
      }

      vip_validate($user);

      $user=findBy('contas','login',$login);
      
      $_SESSION[LOGGED]=$user;

      updateDb('contas',['data_logged'=>date('Y-m-d H:i:s')],$login);

      return redirect('/panel');
    }

public function destroy(){
  unset($_SESSION[LOGGED]);
  return redirect('/');
}

  }