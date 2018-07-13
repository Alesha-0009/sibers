-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 13 2018 г., 11:55
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sibers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_r` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `name`, `surname`, `gender`, `date_r`) VALUES
(8, 'kjaskdaksdd', 'jsdjkfsdfsdfsd', 'sdfksdfksdfsdf', 'skdjfksdfsdf', 'мужчина', '2018-07-19'),
(9, 'sjdjfksdklfsldf', 'sjdfksdfjksdjfksdfks', 'uirnfnkfklfl', 'ksdkfksdfkfsdklsfd;', 'женщина', '2018-07-24'),
(10, 'jksdkfsdklfsdlsd;l', 'jdsjksdksdksdflsf', 'isdiisdfiosdfpodfsp', 'jsisadioasdiosad', 'женщина', '2018-07-01'),
(13, 'aleksey.azorabekov', 'cc03e747a6afbbcbf8be7668acfebee5', 'Алексей', 'Азорабеков', 'мужчина', '2011-02-21'),
(14, 'petr.sidorov', '9cd3acb851a21717cc51c213015eb7a7', 'Петр', 'Кроликов', 'мужчина', '1992-03-24'),
(17, 'Alesha-0009', '098f6bcd4621d373cade4e832627b4f6', 'Алексей', 'Навальный', 'мужчина', '1991-07-30'),
(18, 'saha', '098f6bcd4621d373cade4e832627b4f6', 'Саша', 'Саньков', 'мужчина', '1992-03-21'),
(19, 'krol', '098f6bcd4621d373cade4e832627b4f6', 'Крол', 'Кроликов', 'мужчина', '1992-03-21'),
(20, 'psix', 'cc48162c36ace56bdd546d4751dbb0c3', 'Psix', 'Psixov', 'женщина', '1991-07-30'),
(21, 'chop', 'c5c2df792f008f6fa3fa335c921ba65e', 'Chop', 'Chopov', 'женщина', '2010-04-11'),
(22, 'chop', 'c5c2df792f008f6fa3fa335c921ba65e', 'Trololo', 'Trololo', 'мужчина', '1993-02-21'),
(23, 'holo', '34a60f45f25e51d62180e34fbfbf57ad', 'holo', 'holo', 'женщина', '1999-12-22'),
(24, 'role', '29a7e96467b69a9f5a93332e29e9b0de', 'role', 'role', 'мужчина', '1888-09-22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
