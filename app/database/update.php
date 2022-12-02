<?php
function updateDb($table,$data,$param)
{
try {

    $connect=connect();

    $sql="UPDATE {$table} SET ";
    foreach ($data as $key => $value) {
       $sql.= $key." = '".$value;
    }
    $sql.="' WHERE login = '{$param}'";

    $prepare =$connect->prepare($sql);

    return $prepare->execute();

} catch (\PDOException $e) {
    var_dump($e->getMessage());
}
}