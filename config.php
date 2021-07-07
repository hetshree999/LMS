<?php

$database = "userinfo";
$server = "localhost";
$pass = "";
$user = "root";

$conn = new mysqli($server, $user, $pass);
if($conn -> connect_error){
    die("Connection failed: ". $conn -> connect_error);
}
$createdb = "CREATE DATABASE userinfo";
$sql = mysqli_query($conn,$createdb);

$connect = mysqli_connect($server, $user, $pass, $database);
if($connect -> connect_error)
{
    die("Sorry, Something went wrong: ");
}

$query = "CREATE TABLE `registration`(
    `userID` INT(10) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(10) NOT NULL,
    `lastname` varchar(10) NOT NULL,
    `username` varchar(10) NOT NULL,
    `password` varchar(10) NOT NULL,
    `email` varchar(50) NOT NULL,
    `profile` varchar(100) NOT NULL,
    `mobileno` int(10) NOT NULL,
    `token` varchar(50) NOT NULL UNIQUE, PRIMARY KEY(`userID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT = 1";

$sql2 = mysqli_query($connect, $query);

$tablef = "CREATE TABLE `feedback`(
    `Sr` INT(10) NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(20) NOT NULL,
    `username` VARCHAR(20) NOT NULL,
    `feedback` VARCHAR(100) NOT NULL, PRIMARY KEY(`Sr`)
    )
    ENGINE=InnoDB AUTO_INCREMENT = 1";
$query1 = mysqli_query($connect, $tablef);



?>