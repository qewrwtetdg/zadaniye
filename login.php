<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Вход</title>
  <link rel="stylesheet" href="css/css.css">
</head>
<?php
include 'db_connection.php';// подключение к бд
$conn = getDBConnection();
$login = $_POST['login'];// из базы данных логин 
$password = $_POST['password'];// из базы данных пароль
$role_id = $_POST['role_id'];

$sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";// из базы данных логин и пароль
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    header ('Location: 123.html');  // перенаправление на нужную страницу
    exit();    // прерываем работу скрипта, чтобы забыл о прошлом
} else {
    echo "Неверный логин или парольㅤㅤ";
    echo '<a href="login.html" class="button">Назад</a>';// кнопка назад на страницу входа
}

$conn->close();
?>
