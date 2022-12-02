<?php

function vip_validate($data){
    $vip_inicio=new DateTime($data->vip_inicio);
    $vip_fim=new DateTime($data->vip_fim);

    $vencimento=$vip_inicio->diff($vip_fim);

    $vencimento=$vencimento->days;


    if ($vencimento<=0) {

        updateDb('contas',['status'=>'Free'],$data->login);
    }
    if($vencimento>0) {
        updateDb('contas',['status'=>'Vip'],$data->login);
    }
    
    return $vencimento;
}