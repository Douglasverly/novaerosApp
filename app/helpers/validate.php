<?php 
date_default_timezone_set('America/Sao_Paulo');
function validate(array $validations){
$result=[];
$param='';
foreach ($validations as $field => $validate) {

	if (!strpos($validate,'|')) {
		$result[$field]=singleValidate($validate,$field,$param);

	}else{
		$result[$field]=multipleValidations($validate,$field,$param);
	}
}

if (in_array(false, $result)) {
	return false;
}
$result['data_inicio']=date('Y-m-d H:i:s');
$result['data_logged']=date('Y-m-d H:i:s');
return $result;

}

function singleValidate($validate,$field,$param){
	$result=[];
	if (strpos($validate,':')) {
		[$validate,$param]=explode(':',$validate);

	}
	$result=[$field]=$validate($field,$param);
	return $result;
}

function multipleValidations($validate,$field,$param){
	$explodePipeValidate=explode('|', $validate);
		foreach($explodePipeValidate as $validate){
			if (strpos($validate,':')) {

			[$validate,$param]=explode(':',$validate);

		}
			$result=$validate($field,$param);
		}
		return $result;
}

function required($field){

	if ($_POST[$field]==='') {
		setFlash($field,"O campo é obrigatóio!");
		return false;
	}
	return filter_input(INPUT_POST, $field,FILTER_SANITIZE_STRING);
}

function email($field){

	$emailIsValid=filter_input(INPUT_POST,$field,FILTER_VALIDATE_EMAIL);

	if (!$emailIsValid) {
		setFlash($field,"O campo tem que ser um E-mail Válido!");
		return false;
	}

return filter_input(INPUT_POST,$field,FILTER_SANITIZE_STRING);

}

function unique($field,$param){

	$data=filter_input(INPUT_POST, $field,FILTER_SANITIZE_STRING);
	$user=findBy($param,$field,$data);

	if ($user) {
		setFlash($field,"O ".$field." já está em uso!");
		return false;
	}
	return $data;
}

function maxlen($field,$param){
	$data=filter_input(INPUT_POST, $field,FILTER_SANITIZE_STRING);

	if (strlen($data)>$param) {
		setFlash($field,"O campo não pode ter mais de {$param} caracteres!");
		return false;
	}
	
 return $data;
}

function minlen($field,$param){
	$data=filter_input(INPUT_POST, $field,FILTER_SANITIZE_STRING);

	if (strlen($data)<$param) {
		setFlash($field,"O campo não pode ter menos de {$param} caracteres!");
		return false;
	}

 return $data;
}
