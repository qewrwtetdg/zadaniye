<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Заказ</title>
  <link rel="stylesheet" href="css/css.css">
</head>
<?php
include 'db_connection.php';
$conn = getDBConnection();
$order_id = $_POST['order_id'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

$sql = "INSERT INTO order_items (order_id, item_name, item_price) VALUES ('$order_id', '$item_name', '$item_price')";

if ($conn->query($sql) === TRUE) {
    echo "Товар успешно добавлен в заказ";
    echo '<a href="123.html" class="button">Назад</a>';
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
    echo '<a href="add_order_item.html" class="button">Назад</a>';
}

$conn->close();
?>
