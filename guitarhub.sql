-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 09:48
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guitarhub`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Titleofalbum` varchar(100) NOT NULL,
  `Titleofvideo` varchar(100) NOT NULL,
  `Lyrics` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `Titleofalbum`, `Titleofvideo`, `Lyrics`) VALUES
(8, 'Hey', 'prosto.dastan@mail.ru', '42342423');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `url`) VALUES
(1, 'images/1_image.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `Titleofalbum` varchar(100) NOT NULL,
  `TitleofVideo` varchar(100) NOT NULL,
  `Lyrics` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `Titleofalbum`, `TitleofVideo`, `Lyrics`) VALUES
(16, 'Album', 'Tutor', 'Lyrics'),
(17, 'Album', 'Tutor', 'Lyrics'),
(18, 'Album', 'Tutor', 'Lyrics'),
(19, 'Album', 'Tutorial ', 'Lyrics'),
(20, 'Linkin', 'Tuto', 'Lyrics');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password1` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `surname`, `email`, `password1`, `password2`) VALUES
(1, 'Dastiw', 'Dastan', 'Akhmetov', 'prosto', '123345', '123345'),
(5, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(6, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(7, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(8, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(9, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(10, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(11, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(12, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(13, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(14, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(15, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(16, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(17, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(18, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(19, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(20, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(21, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(22, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(23, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(24, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(25, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(26, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(27, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(28, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(29, 'Login', 'Name', 'Surname', 'Email', 'Password', 'Password'),
(30, 'af', 'a', 'a', 'aa', 'a', 'a'),
(31, 'Login', 'Name', 'Surname', 'Email@pr', 'Password', 'Password'),
(32, 'Dastan', 'Dastan', 'Surname', 'Email@mail.ru', 'Password', 'Password');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
