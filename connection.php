<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cloud_project_aust";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
