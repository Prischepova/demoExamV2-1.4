-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 09 2023 г., 04:39
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `demo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Струнные'),
(2, 'Клавишные'),
(3, 'Смычковые');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `status` set('Новая','Решена','Отклонена') COLLATE utf8mb4_unicode_ci DEFAULT 'Новая',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `idCategory`, `title`, `slug`, `content`, `img`, `price`) VALUES
(1, 3, 'Скрипка', '', 'Strunal-22', '1.jpeg', '1999.00'),
(2, 1, 'Электрогитара', '', 'DMX-2', '2.jpeg', '4999.00'),
(3, 1, 'Акустическая гитара', '', 'M-4', '3.jpeg', '5999.00'),
(4, 1, 'Акустическая гитара', '', 'D-6', '4.jpeg', '3599.00'),
(5, 3, 'Скрипка', '', 'Strunal-DM', '5.jpeg', '2999.00'),
(6, 2, 'Синтезатор', '', 'F-2', '6.jpeg', '8999.00'),
(7, 3, 'Скрипка', '', 'Strunal-8', '7.jpeg', '5999.00'),
(8, 3, 'Скрипка', '', 'Strunal FX-4', '8.jpeg', '8599.00'),
(9, 2, 'Синтезатор', '', 'SD-46', '9.jpeg', '2999.00'),
(10, 2, 'Синтезатор', '', 'GH-34', '10.jpeg', '5999.00'),
(11, 1, 'Электрогитара', '', 'N-66', '11.jpeg', '6599.00'),
(12, 3, 'Скрипка', '', 'Strunal TX-34', '12.jpeg', '3599.00'),
(13, 2, 'Синтезатор', '', 'GF-68', '13.jpeg', '8999.00'),
(14, 3, 'Скрипка', '', 'W-22', '14.jpeg', '6999.00'),
(15, 1, 'Акустическая гитара', '', 'PTW-68', '15.jpeg', '9599.00'),
(16, 1, 'Акустическая гитара', '', 'D-24', '16.jpeg', '3599.00'),
(17, 2, 'Синтезатор', '', 'GJ-92', '17.jpeg', '2999.00'),
(18, 1, 'Электрогитара', '', 'V-44', '18.jpeg', '5999.00'),
(19, 2, 'Синтезатор', '', 'T-26', '19.png', '8999.00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `admin`) VALUES
(1, 'Ксения', 'Прищепова', 'Александровна', 'kseniya', 'k@k.k', '000000', 0),
(2, 'Ксения', 'Прищепова', 'Александровна', 'demo', 'd@d.d', '000000', 0),
(3, 'Ксения', 'Прищепова', 'Александровна', 'www', 'w@w.w', '111111', 0),
(4, 'Прищепова', 'Ксения', 'Александровна', 'admin', 'admin@a.a', 'adminWSR', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
