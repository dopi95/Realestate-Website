<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gift_realestatedb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
