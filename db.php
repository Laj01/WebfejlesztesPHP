<?php 

$s_name = "localhost";
$u_name = "root";
$password = "";
$database = "webfejlesztes";

$connection = mysqli_connect($s_name, $u_name, $password, $database);

if(!$connection){
    echo "CONNECTION FAILED";
}

?>