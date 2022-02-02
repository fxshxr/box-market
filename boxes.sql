-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2022 at 05:57 PM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxes`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `title`, `par`, `date`, `path`, `price`) VALUES
(8, 'GREEN BOX', '\r\n\r\nВ состав бокса входит:\r\n\r\n-Крем для рук\r\n-Носки с авокадо\r\n-Напиток Aloe vera\r\n-Масло для кутикулы\r\n-Сладкие палочки Pocky\r\n', '2022-02-02', 'lavande_box_256088311_1299689620536742_2618522072561268272_n.jpg', 1100),
(9, 'PURPLE BOX', 'В состав бокса входит:\r\n\r\n-Крем для рук\r\n-Напиток Aloe vera\r\n-Повязка на голову\r\n-Масло для кутикулы\r\n-Соль для ванны с ароматом лаванды ', '2022-02-02', 'lavande_box_248000839_638222844225855_4083616555217840096_n.jpg', 1100),
(10, 'WHITE BOX', '-Крем для рук\r\n-Повязка на голову\r\n-Шоколадные чипсы\r\n-Сладкие палочки Pocky\r\n-Соль для ванны с ароматом лаванды\r\n\r\nЦена:1100 рублей', '2022-02-02', 'lavande_box_258883673_270224914937333_4361156385819255852_n.jpg', 1100),
(11, 'NEW YEAR BOX', '\r\n\r\nВ состав набора входит:\r\n-Кружка\r\n-Бурлящий шар для ванны\r\n-Соль для ванны\r\n-Крем для рук\r\n-Палочки Pocky со вкусом OREO\r\n', '2022-02-02', 'lavande_box_257224418_436437814761602_7361497029448267297_n.jpg', 1500),
(12, 'NEW YEAR BOX 2', 'В состав набора входит:\r\n-Новогодние носочки\r\n-Мёд-суфле\r\n-Шоколад Schogetten\r\n-Бомбочка для ванны\r\n-Чай чёрный, ароматизированный маслами малины\r\n-Открытка\r\n\r\n', '2022-02-02', 'lavande_box_259099248_370610184857818_8497187761535151640_n.jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `par`, `date`, `path`) VALUES
(4, 'Подарочный набор - это отличный способ порадовать близкого человека. Такой подарок придётся каждому по душе. ', '\r\nЕсли вам трудно найти подходящий подарок для родных и близких, то наши наборы станут решением этой непростой задачи.\r\n\r\nМы подготовили на ваш выбор несколько оригинальных коробочек с интересным содержанием.', '2022-02-02', 'lavande_box_254442882_173343705009514_8422245926352851438_n.jpg'),
(5, 'Оплата', 'Самовывоз, доставка до метро - оплата производится банковским переводом или наличными при получение заказа.\r\n\r\nДоставка по России - 100% оплата заказа банковским переводом.', '2022-02-02', 'lavande_box_255456762_1203797500142882_8580164739414755835_n.jpg'),
(6, 'Доставка', 'Доставка по Москве:\r\n\r\nСамовывоз - бесплатно (м.Преображенская площадь).\r\nДоставка до станции метро - 300 рублей.\r\n\r\nПри покупке от 2000 рублей доставка бесплатная.', '2022-02-02', 'lavande_box_255907389_1228485170984825_2486295218089178913_n.jpg'),
(7, 'Упаковка', '\r\n\r\n🌿Приятная крафтовая коробочка\r\n🌿Стильная наклейка\r\n\r\nВсё это сделает подарок по-настоящему особенным и незабываемым.\r\nА открывать наши праздничные коробочки это отдельное наслаждение, которое навсегда останется в памяти близкого человека', '2022-02-02', 'lavande_box_254767426_4375461729168903_3687460404026641722_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
