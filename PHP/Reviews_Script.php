<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AUTOFIT";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обработка формы при отправке
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $reviewText = $_POST["review"];

    // Обработка загрузки файла (аватара)
    $targetDir = "img/uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    // SQL-запрос для добавления отзыва в базу данных
    $sql = "INSERT INTO Reviews (User_Name,Image,review_text) VALUES ('$userName', '$targetFile', '$reviewText')";

    if ($conn->query($sql) === TRUE) {
        echo "Отзыв успешно добавлен в базу данных";
        header("location: http://localhost/course_melekhin/Course_project/Reviews.php");
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
