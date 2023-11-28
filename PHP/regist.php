<?php

//$hostName = "localhost";
//$log = "root";
//$password = "";
//// Create connection
//$conn = mysqli_connect($hostName, $log, $password);
//
//$UserName=$_POST['UserName'];
//$UserLastName=$_POST['UserLastName'];
//$UserPhone=$_POST['UserPhone'];
//$UserEmail=$_POST['UserEmail'];
//$UserPassword=$_POST['UserPassword'];
//$BirthDate=$_POST['BirthDate'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AUTOFIT";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$userName = $_POST['UserName'];
$userLastName = $_POST['UserLastName'];
$userPhone = $_POST['UserPhone'];
$userEmail = $_POST['UserEmail'];
$userPassword = $_POST['UserPassword'];
$birthDate = $_POST['BirthDate'];

// Проверка валидности email
if (!isValidEmail($userEmail)) {
    die("Некорректный адрес электронной почты");
}

// Проверка длины пароля
if (strlen($userPassword) < 6) {
    die("Пароль должен содержать не менее 6 символов");
}

// Хеширование пароля
$userPasswordHashed = password_hash($userPassword, PASSWORD_DEFAULT);

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO `User` (`UserName`, `UserLastName`, `UserPhone`, `UserEmail`, `UserPass`, `UserBirthday`)
        VALUES ('$userName', '$userLastName', '$userPhone', '$userEmail', '$userPasswordHashed', '$birthDate')";

// Выполнение запроса
if ($conn->query($sql) === TRUE) {
    echo "Регистрация успешна!";
    header("Location: http://coursach/Course_project/auth.html");
    exit();
} else {
    echo "Ошибка при регистрации: " . $conn->error;
}

// Закрытие соединения
$conn->close();