<?php

$host = "Localhost" ;
$user = "root";
$pass = "#Ph42013537";
$base = "astrocars";


$con = new mysqli($host, $user, $pass, $base);
$banco = mysqli_select_db($con, $base);

//if($con->connect_errno)
//
//{
//    echo "Erro";
//}
//else
//{
//    echo "Conexão efetuada";
//}
?>