-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.0.148:3306
-- Время создания: Май 14 2022 г., 18:27
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pws_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'AntonPAPA', '276df22f1a12f0769100f2d05d71708a');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `menu_title` varchar(50) NOT NULL,
  `drop-down` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `menu_title`, `drop-down`) VALUES
(1, 'Товары и Услуги', 1),
(2, 'Цены', 1),
(3, 'Конструктор заказа', 0),
(4, 'Наши работы', 0),
(5, 'Главная', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `my_works`
--

CREATE TABLE `my_works` (
  `id` int NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `photo_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `my_works`
--

INSERT INTO `my_works` (`id`, `photo_url`, `photo_title`) VALUES
(13, 'https://i.yapx.ru/RYzi4.jpg', 'Остекление балкона'),
(14, 'https://i.yapx.ru/RYzi5.jpg', 'Остекление балкона'),
(15, 'https://i.yapx.ru/RYzi7.jpg', 'Пластиковое окно'),
(16, 'https://i.yapx.ru/RYzjA.jpg', 'Двери'),
(17, 'https://i.yapx.ru/RYzjF.jpg', 'Пластиковое окно'),
(18, 'https://i.yapx.ru/RYzjG.jpg', 'Пластиковое'),
(19, 'https://i.yapx.ru/RYzjJ.jpg', 'Пластиковые окна'),
(20, 'https://i.yapx.ru/RYzjP.jpg', 'Балкон и балконный блок'),
(21, 'https://i.yapx.ru/RYzjQ.jpg', 'Балкон снаружи '),
(22, 'https://i.yapx.ru/RYzjV.jpg', 'Балкон снаружи'),
(23, 'https://i.yapx.ru/RYzjW.jpg', 'Балкон изнутри'),
(24, 'https://i.yapx.ru/RYzjY.jpg', 'Балкон без отделки'),
(25, 'https://i.yapx.ru/RYzja.jpg', 'Балкон с отделкой'),
(26, 'https://i.yapx.ru/RYzje.jpg', 'Остекление балкона'),
(27, 'https://i.yapx.ru/RYzjf.jpg', 'Остекление балкона сложной формы без отделки'),
(28, 'https://i.yapx.ru/RYzjk.jpg', 'Пластиковое окно с отделкой'),
(29, 'https://i.yapx.ru/RYzjn.jpg', 'Остекление балкона без отделки'),
(30, 'https://i.yapx.ru/RYzjo.jpg', 'Балкон снаружи'),
(31, 'https://i.yapx.ru/RYzjq.jpg', 'Остекление балкона'),
(32, 'https://i.yapx.ru/RYzju.jpg', 'Остекление балкона'),
(33, 'https://i.yapx.ru/RYzjw.jpg', 'Пластиковое окно');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `Page_title` varchar(50) NOT NULL,
  `file_url` varchar(50) NOT NULL,
  `show_url` varchar(50) NOT NULL,
  `menu_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `Page_title`, `file_url`, `show_url`, `menu_id`) VALUES
(1, 'Главная страница', './index.php', './?page=main_page', NULL),
(2, 'Конструктор заказа', './Constructor/Order_Constructor.php', './?page=constructor', NULL),
(3, 'Наши работы', './my_works.php', './?page=my_works', NULL),
(6, 'Остекление балконов', './menu_page/services/3.php', './?page=3&menu=services', 1),
(7, 'Регулировка и ремонт окон ПВХ', './menu_page/services/4.php', './?page=4&menu=services', 1),
(8, 'Замена стеклопакетов', './menu_page/services/5.php', './?page=5&menu=services', 1),
(9, 'Цены на пластиковые окна', './menu_page/prices/1.php', './?page=1&menu=prices', 2),
(10, 'Цены на остекление балконов', './menu_page/prices/2.php', './?page=2&menu=prices', 2),
(11, 'Цены на регулировку и ремонт', './menu_page/prices/3.php', './?page=3&menu=prices', 2),
(31, 'Москитные сетки', './menu_page/services/1.php', './?page=1&menu=services', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `price_rate`
--

CREATE TABLE `price_rate` (
  `Price_MosquitoNet_Ordinary` int NOT NULL,
  `Price_MosquitoNet_Antikoshka` int NOT NULL,
  `Price_Double-glazed_Single-chamber_24mm` int NOT NULL,
  `Price_Double-glazed_Two-chamber_32mm` int NOT NULL,
  `Rate_MosquitoNet_Color` float NOT NULL,
  `Rate_Sunscreens_Glass` float NOT NULL,
  `Rate_Energy-saving_Glass` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `price_rate`
--

INSERT INTO `price_rate` (`Price_MosquitoNet_Ordinary`, `Price_MosquitoNet_Antikoshka`, `Price_Double-glazed_Single-chamber_24mm`, `Price_Double-glazed_Two-chamber_32mm`, `Rate_MosquitoNet_Color`, `Rate_Sunscreens_Glass`, `Rate_Energy-saving_Glass`) VALUES
(1300, 2600, 3500, 4000, 1.5, 1.15, 1.075);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `slider_img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `slider_img_url`) VALUES
(6, '../img/slider_img/slide5.jpg'),
(7, '../img/slider_img/slide4.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `my_works`
--
ALTER TABLE `my_works`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id-page_id` (`menu_id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `my_works`
--
ALTER TABLE `my_works`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `menu_id-page_id` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
