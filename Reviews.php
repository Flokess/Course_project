<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/styleRiviews.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<header>

    <div class="header__title">
      <ul class="content_header">
        <li> <a href="main.html" class="mainAbtn">Главная</a></li>
        <li> <a href="">Услуги</a></li>
        <li><a href="#">О нас<i class="fa fa-angle-down"></i></a>
          <ul class="submenu">
            <li><a href="">Отзывы</a></li>
            <li><a href="Servises.html">Услуги</a></li>
            <li><a href="contacts.html">Контакты</a></li>
          </ul>
        </li>
        <li><a href="auth.html">Авторизоваться</a></li>
        <span>89004524343</span>
        <button class="callbtn">Заказать звонок</button>
      </ul>
    </div>
    </div>
    <main>

        <h1>Отзывы</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "AUTOFIT";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM Reviews";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных с использованием fetch_assoc()
            while ($row = $result->fetch_assoc()) {
                echo "<div class='mainReviewItem'>";
                echo "<img class='Ava' src='" . $row["Image"] . " ' alt=''>";
                echo "<div class='descReviewItem'>";
                echo "<div class='Title'>";
                echo "<h3>" . $row["User_Name"] . "</h3>";
                echo "</div>";
                echo  "<p>" . $row["review_text"] . "</p>";
                echo  "</div>";
                echo  "</div>";


            }
        } else {
            echo "Записей нет.";
        }


        ?>

        <button id="writeReviewButton" class="writeReviewButton">Написать отзыв</button>


        <form id="reviewForm" class="reviewForm" style="display: none;" action="/Course_project/PHP/Reviews_Script.php" method="post" enctype="multipart/form-data">
            <label for="userName">Имя:</label><br>
            <input type="text" id="userName" name="userName"><br><br>
            <label for="userName">Выбрать аватар:</label><br>
            <input type="file" name="image"> <br><br>

            <label for="review">Ваш отзыв:</label><br>
            <textarea id="review" name="review" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Отправить">
        </form>
    </main>


</header>
<script src="js.js"></script>
</body>
</html>