<?php

$db['db_host'] = "localhost";
$db['db_name'] = "cmsproject";
$db['db_user'] = "root";
$db['db_pass'] = "Lisboa.1755!??";

foreach($db as $key => $value){
    define (strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if($connection){
    echo "We are connected";
}



?>