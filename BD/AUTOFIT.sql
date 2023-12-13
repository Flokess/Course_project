-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2023 г., 16:05
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `AUTOFIT`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `ID` int NOT NULL,
  `User_Name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `review_text` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`ID`, `User_Name`, `Image`, `review_text`) VALUES
(1, 'Антон', 'img/uploads/maxresdefault.jpg', 'Подобрали топ, буду ещё обращаться!'),
(5, 'Егор', 'img/uploads/7acdfe8b-eb83-450b-ad99-daad293d417c.jpg', 'После обращения к ним, мои поездки выглядят так как на аве'),
(6, 'Эрик Давидович', 'img/uploads/630b45a9872961d567bd7494653f565a.jpeg', 'Сказали что подбор займёт 90 дней, а подобрали идеальную золотую БМВ за 10 дней! Красавцы, за первый месяц по вложениям доволен, только мотор и коробку поменял'),
(7, 'Евгений', 'img/uploads/ZAR9Y8vWre81.jpg', 'Всё просто супер.');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `ID` int NOT NULL,
  `UserName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserLastName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserPhone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserEmail` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserPass` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserBirthday` date NOT NULL,
  `UserStatus` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`ID`, `UserName`, `UserLastName`, `UserPhone`, `UserEmail`, `UserPass`, `UserBirthday`, `UserStatus`) VALUES
(1, 'Егор', 'Мелехин', '89201553915', 'egor210269@icloud.com', '$2y$10$Ju9pIdY6AS1ZC3EzAmJlt.zazlynnQMLysIikJctWXmpLfwKpqEI6', '2004-06-16', NULL),
(2, 'Александр', 'Разаренов', '89012345284', 'alex@gmail.com', '$2y$10$n6ievWILInBz4Rh9MtCOf.dTBtkHngixC5.97RqHKhNRLNfMykinu', '2023-11-30', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
