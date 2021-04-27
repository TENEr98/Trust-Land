<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ecommerce";
session_start();
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	die("failed to connect!");
}