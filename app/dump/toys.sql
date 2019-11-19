-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2019 г., 16:55
-- Версия сервера: 5.6.41-log
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `toys`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `titlekaz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `titlekaz`) VALUES
(1, 'Спорт - это здорово!', 'Спорт - денсаулық кепілі'),
(2, 'Новый год - волшебный праздник!', 'Жаңа жыл - ғажайып мереке! Қыс қызығы'),
(3, 'В мире животных', 'Жануарлар әлемінде'),
(4, 'Зимние забавы', 'Қыс мезгілі');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(12) NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `catP` varchar(255) NOT NULL,
  `arc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `header`, `text`, `src`, `catP`, `arc`) VALUES
(3, '123', '123', 'C:UsersunixDownloads1OSPaneldomains	oys/files/36e53586715127.5da1f4267338f.png', '123123 / 123fdsfsadf', '1'),
(4, 'Тестовый заголовок для спорта', 'Тестовый заголовок для спорта Тестовый заголовок для спорта Тестовый заголовок для спорта Тестовый заголовок для спорта Тестовый заголовок для спорта Тестовый заголовок для спорта', 'C:UsersunixDownloads1OSPaneldomains	oys/files/36e53586715127.5da1f4267338f.png', 'Спорт - денсаулық кепілі / Спорт - это здорово!', '1'),
(5, 'Тестовый заголовок для нового года', 'Тестовый заголовок для нового года Тестовый заголовок для нового года Тестовый заголовок для нового года Тестовый заголовок для нового года Тестовый заголовок для нового года Тестовый заголовок для нового года Тестовый заголовок для нового года', 'files/36e53586715127.5da1f4267338f.png', 'Жаңа жыл - ғажайып мереке! Қыс қызығы / Новый год - волшебный праздник!', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
