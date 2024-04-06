<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "KamaljitSingh";
$database = 'KamaljitSingh';
// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

?>
