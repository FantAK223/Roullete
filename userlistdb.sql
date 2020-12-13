-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2020 г., 18:41
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `userlistdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` text COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `balance` int(20) DEFAULT 10000
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_name`, `email`, `username`, `password`, `balance`) VALUES
(1, 'anton', 'max_tem@ngs.ru', 'fantak', 'fantaet233world', 1476400),
(2, 'Anton', 'fantaet233@gmail.com', 'Fanta', 'fantaet233world', NULL),
(3, 'liza', 'fafaf@gaega.com', 'lizynya', '123456', NULL),
(4, 'Anton', 'fantaaffat233@gmail.com', 'fant', 'fantaet2333', NULL),
(5, 'anyta', 'anna25@mail.ru', 'anyka228', 'tancuydorasveta', NULL),
(6, 'dwd', 'fanta@geag.ru', 'dawda', 'dwaa', NULL),
(7, 'oksana', 'oksna@mail.ru', 'oksik', 'oksanka', NULL),
(8, 'anya', 'anya2502@gmail.com', 'anya2502', '25022002', NULL),
(9, 'anton', 'melonmzfk@gmail.com', 'melon223', 'apple', NULL),
(10, 'sasha', 'sashaprostokvasha@gmail.com', 'sashok', 'sasha', 9998999),
(11, 'sasha', 'sashasahsa@mail.ru', 'sas', 'sas', -2800),
(12, 'Anna', 'anna@mail.ru', 'ana', 'ana', 7000),
(13, 'dima', 'dima@mail.ru', 'dimas', 'dimas', 10000),
(14, 'ulia', 'ulia@mail.ru', 'ula', 'ula', 10000),
(15, 'pi', 'pi@ma.ru', 'pi', 'pi', 10000),
(16, 'pa', 'pa@mail.ru', 'pa', 'pa', 9970),
(17, 'Антон Курилов', 'funtik@mail.ru', 'funtik', 'fun', 11300),
(18, 'ana', 'ana@mail.com', '123ana', '123', 10000),
(19, 'admin', 'admin@mail.ru', 'admin', '1234', 9500),
(20, 'antoshka', 'ana@mail.ru', 'anton123', '123', 10000),
(21, 'antonio gur', 'gurka@mail.com', 'melonchik', '$2y$10$QrbZm.tH6kOaQ.JgoSVh3.EyNu5w4C6iRr2Y1luzGIqvaiAmjg6DS', 10000),
(22, 'anna123', 'anna123@mail.ru', 'annka', '$2y$10$eEG7gDoUDIYOzm0y4y7AA.FVzFSmtT7SigLQIX62YRLuEJ93jD2gi', 10000),
(23, 'annya', 'annya@mail.ru', 'annya', '$2y$10$ajDXk2wo0d1DOr8FqDSBEee7./UNjBnQFGxHHmdvDnfsa42kTNQqy', 10000),
(24, 'diman123', 'diman123@mail.ru', 'diman123', '$2y$10$3ibo3jjeMOxE7m0JTX/Eq.TGNmc1HOF8P7MJzdSwdj/oGFCuEX7ZG', 0),
(25, 'mama123', 'mama123@mail.ru', 'mama123', '$2y$10$C6S7nrmPbtEmP4UPyG4wYeXXX1PLHKdjBG5ry8L3gZZF/pmm9gosu', 10000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
