<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Базы данных</title>
  <link rel="stylesheet" href="css/css.css">
</head>
<?php
function getDBConnection() {
    $servername = "localhost";
    $username = "root"; //логин
    $password = "";//пароль
    $dbname = "bd1";//база данных

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
