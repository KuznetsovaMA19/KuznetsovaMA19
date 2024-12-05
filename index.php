<?php
// Подключение файла соединения с БД
include_once 'db.class.php';

// хост БД
define('db_host','localhost:3306');

// Имя БД
define('db_name','kuznetsovama');

// Пользователь БД
define('db_user','admin');

// Пароль БД
define('db_pass','admin_password');

// Обявление класса для подключения к бд
$db = new DB_class('localhost','kuznetsovama','admin','admin_password');

$query = $db->select(true,'*',"kuznetsovama","task_id='1'");
print_r($query);
?>
