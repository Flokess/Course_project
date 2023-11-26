<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AUTOFIT";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$userEmail = $_POST['login-email'];
$userPassword = $_POST['login-password'];


// Поиск пользователя в базе данных
$sql = "SELECT * FROM `User` WHERE `UserEmail` = '$userEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Пользователь найден, проверка пароля
    $row = $result->fetch_assoc();
    $hashedPassword = $row['UserPass'];

    if (password_verify($userPassword, $hashedPassword)) {
        // Пароль верный, авторизация успешна
        echo "Авторизация успешна!";
        header("Location: http://coursach/Course_project/main.html");
    } else {
        // Пароль неверный
        echo "Неверный пароль. Попробуйте еще раз.";
    }
} else {
    // Пользователь не найден
    echo "Пользователь с таким email не зарегистрирован.";
}

// Закрытие соединения
$conn->close();