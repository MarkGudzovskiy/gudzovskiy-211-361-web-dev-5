<?php 
    define('DB_HOST', 'std-mysql'); //Адрес
    define('DB_USER', 'std_1971_lab5'); //Имя пользователя
    define('DB_PASSWORD', 'root1234'); //Пароль
    define('DB_NAME', 'std_1971_lab5'); //Имя БД

    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>
