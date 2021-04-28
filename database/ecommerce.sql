-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2021 г., 10:29
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ecommerce`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `checked_out` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `checked_out`) VALUES
(1, 120796461, 29, 14, 1),
(2, 120796461, 33, 3, 1),
(4, 120796461, 30, 4, 1),
(5, 120796461, 30, 4, 1),
(6, 120796461, 29, 14, 1),
(7, 120796461, 29, 14, 1),
(8, 120796461, 32, 1, 1),
(9, 120796461, 32, 1, 1),
(10, 120796461, 32, 1, 1),
(11, 120796461, 32, 1, 1),
(12, 120796461, 32, 1, 1),
(13, 120796461, 29, 14, 1),
(14, 120796461, 30, 4, 1),
(15, 120796461, 31, 4, 1),
(16, 120796461, 29, 14, 1),
(38, 120796461, 31, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `category` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `product_image`, `category`) VALUES
(28, 'Nike Air Max 2090', 76.5, 'Nike-Air-Max-2090.png', 'shoe'),
(29, 'Nike Air Max 720', 90.99, 'nike-air-max-720-818.png', 'shoe'),
(30, 'Nike Air Max React', 55.5, 'Nike-Air-Max-270-React-SE.png', 'shoe'),
(31, 'Nike NSW Down Fill Parka', 176.5, '4043004.png', 'jacket'),
(32, 'NIKE COAT', 590.99, 'NIKE-FC-BARCELONA-STRIKE-SDF-BN-CL-2020-2021-COAT.png', 'jacket'),
(33, 'Nike Sportswear Windrunner', 396.5, 'Nike_Sportswear_Windrunner_Down_Fill_Men_s_Hooded_Puffer_Parka.png', 'jacket'),
(34, 'Nike Dry', 76.5, 'Dry.png', 'tshirt'),
(35, 'Nike Kids', 90.99, 'Kids.png', 'tshirt'),
(36, 'Nike Court', 55.5, 'NikeCourt_Boys_Dri-FIT_GFX_Shortsleeve.png', 'tshirt');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `email`, `password`) VALUES
(1, 120796461, 'levon', 'levon@gmail.com', 'levon'),
(2, 4431457944468159641, 'tener', 'tener@gmail.com', 'tener'),
(8, 478481417649863, 'tener', 'n@gmail.com', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
