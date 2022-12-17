<?php
session_start();
$DbHost = 'Localhost';
$DbUser = 'root';
$DbPass =  '';
$DbName  = 'ALSTATH';

$connect = mysqli_connect ($DbHost,$DbUser,$DbPass,$DbName);

if (mysqli_connect_errno() > 0 ){

die('no connect db');

}


mysqli_query($connect,'SET NAMES UTF8');

?>
