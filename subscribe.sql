-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2021 г., 21:01
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `subscribe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `polzovateli`
--

CREATE TABLE `polzovateli` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `polzovateli`
--

INSERT INTO `polzovateli` (`id`, `name`, `telephone`, `email`, `photo`, `password`, `status`) VALUES
(1, 'Peter', '+9574832934', 'peter@i.ua', 'images/user2.png', 'peter', 1),
(2, 'Ivan', '+9624567896', 'ivan@i.ua', 'images/user.png', 'ivan', 1),
(3, 'Kate', '+9345674342', 'kate@i.ua', 'images/user2.png', 'kate', 1),
(4, 'Vika', '+8599583021', 'vika@i.ua', 'images/user.png', 'vika', 0),
(5, 'David', '+795432106', 'david@i.ua', 'images/user.png', 'david', 0),
(6, 'Mike', '+950978213', 'mike@i.ua', 'images/user2.png', 'mike', 0),
(7, 'Jack', '+9574852698', 'jack@i.ua', 'images/user.png', 'jack', 0),
(8, 'Nik', '', 'nik@i.ua', '', 'nik', 1),
(21, 'Jackie', '', 'jackie@i.ua', '', 'jackie', 1),
(22, 'Big', '', 'big@i.ua', '', 'big', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `polzovateli`
--
ALTER TABLE `polzovateli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
