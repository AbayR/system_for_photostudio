<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$bonus = $_POST['bonus'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price',`bonus` = '$bonus', `description` = '$description' WHERE `products`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../../dashboard.php?cat=website-content&subcat=calculator');