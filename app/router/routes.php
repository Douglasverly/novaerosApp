<?php
return [

    'POST'=>[
        "/login"=>"Login@store",
        "/user/create"=>"User@create"
    ],
    'GET'=>[
    "/home"=>"Home@index",
    "/"=>"Home@index",
    "/user/create"=>"User@createAccount",
    "/login"=>"Login@index",
    "/logout"=>"Login@destroy",
    "/user/[0-9]+"=>"User@show",
    "/user/[0-9]+/name/[a-zA-Z]+"=>"User@create",
    "/panel"=>"User@panel",
    "/panel/user"=>"Panel@User",
    "/panel/table"=>"Panel@Table",
    "/maintenance"=>"Manutencao@manutencao"
]
];
?>