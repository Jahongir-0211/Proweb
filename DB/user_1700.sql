-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2021 г., 12:27
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_1700`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `img_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_select` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`img_id`, `user_id`, `img_path`, `img_select`) VALUES
(17, 54, './img/users/user_1700-626f1d34088d0a2faaa5131d5a876eef.png', 1),
(21, 58, './img/users/Adm123456-e938ec9cbf02a43bd23eb8afb3d8bbf5.png', 1),
(22, 59, './img/users/Max123456-91891b8a25cbea54bb515d6224b56a06.png', 1),
(23, 60, './img/users/test5555-772bf8e9b296c9c70a4a76e4348976b7.png', 1),
(24, 60, './img/users/test5555-ad0e92d41bfe91445a5f251606be4864_0.', 0),
(25, 60, './img/users/test5555-ad0e92d41bfe91445a5f251606be4864_1.', 0),
(26, 60, './img/users/test5555-ad0e92d41bfe91445a5f251606be4864_2.', 0),
(27, 60, './img/users/test5555-ad0e92d41bfe91445a5f251606be4864_3.', 0),
(28, 60, './img/users/test5555-ad0e92d41bfe91445a5f251606be4864_4.', 0),
(29, 60, './img/users/test5555-f261b2e3e0777606be417498b8f4e9d7_0.', 0),
(30, 60, './img/users/test5555-f261b2e3e0777606be417498b8f4e9d7_1.', 0),
(31, 60, './img/users/test5555-f261b2e3e0777606be417498b8f4e9d7_2.', 0),
(32, 60, './img/users/test5555-f261b2e3e0777606be417498b8f4e9d7_3.', 0),
(33, 60, './img/users/test5555-f261b2e3e0777606be417498b8f4e9d7_4.', 0),
(34, 60, './img/users/test5555-38ea7f1268383d7189218f3fa64862d4_0.jpg', 0),
(35, 60, './img/users/test5555-38ea7f1268383d7189218f3fa64862d4_1.jpg', 0),
(36, 60, './img/users/test5555-38ea7f1268383d7189218f3fa64862d4_2.jpg', 0),
(37, 60, './img/users/test5555-38ea7f1268383d7189218f3fa64862d4_3.jpg', 0),
(38, 60, './img/users/test5555-38ea7f1268383d7189218f3fa64862d4_4.jpg', 0),
(39, 60, './img/users/test5555-9bf81119345f55b8f70b2f304e3c8fd8_0.jpg', 0),
(40, 60, './img/users/test5555-9bf81119345f55b8f70b2f304e3c8fd8_1.jpg', 0),
(41, 60, './img/users/test5555-9bf81119345f55b8f70b2f304e3c8fd8_2.jpg', 0),
(42, 60, './img/users/test5555-9bf81119345f55b8f70b2f304e3c8fd8_3.jpg', 0),
(43, 60, './img/users/test5555-9bf81119345f55b8f70b2f304e3c8fd8_4.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `name`, `login`, `password`) VALUES
(53, 'user_170055', 'user_1700555', '$2y$10$5s8MeVu.2x8hNnuBe39UNOv99CZZe3s7/GlA.RXIQGXHQ1Lmhe3I2'),
(58, 'saidbro', '55555', '$2y$10$xP6P0JZPi1BIF0gs0Z4pyeNRVkImoSLW55SCh2zCV7aHZkl13RNQa'),
(59, 'Max123456', 'Max123456', '$2y$10$Yo7Pk0JvlQGaMjSiNtH9gOpGJHd63KpCbZYxCwLDZ9hrmPcnoXj5a'),
(60, 'test5555', 'test5555', '$2y$10$78Vkb8gzibmF7AJloXv4ZOTyULZQQUpfoHQewUywdUQOXdh3L3MCG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
