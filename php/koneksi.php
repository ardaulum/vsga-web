<?php
$server    = "localhost";
$user      = "root";
$password  = "";
$db        = "vsga";

$db = mysqli_connect($server, $user, $password, $db);
if (!$db){
    die("gagal terhubung dengan database: " . mysqli_connect_error());
}
    else{
        echo "terhubung";
    }

?>