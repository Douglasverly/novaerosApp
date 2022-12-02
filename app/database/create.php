<?php
function createDb($table,$data)
{
try {
    //INSERT INTO {$table} nome,email,login,senha values=
    $connect=connect();
    $sql="INSERT INTO {$table}(";
    $sql.=implode(',',array_keys($data)).") VALUES(";
    $sql.=':'.implode(',:',array_keys($data)).")";

    $prepare =$connect->prepare($sql);
    return $prepare->execute($data);
} catch (\PDOException $e) {
    var_dump($e->getMessage());
}
}
