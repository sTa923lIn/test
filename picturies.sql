-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 08 2016 р., 14:06
-- Версія сервера: 5.5.48
-- Версія PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `uploadimage`
--

-- --------------------------------------------------------

--
-- Структура таблиці `picturies`
--

CREATE TABLE IF NOT EXISTS `picturies` (
  `id` int(10) unsigned NOT NULL,
  `nameimage` text NOT NULL,
  `nameuser` text NOT NULL,
  `sizeimage` int(10) unsigned NOT NULL,
  `datetime` datetime NOT NULL,
  `image` text NOT NULL,
  `requested` int(11) NOT NULL,
  `thumb` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `picturies`
--

INSERT INTO `picturies` (`id`, `nameimage`, `nameuser`, `sizeimage`, `datetime`, `image`, `requested`, `thumb`) VALUES
(52, 'Lev', 'levcovsky', 545322, '2016-10-07 23:28:18', 'image/Lev.jpeg', 0, 'image/thumds/Lev_thumb.jpeg'),
(53, '1', 'Vasiliy', 457454, '2016-10-08 08:11:09', 'image/1.jpeg', 0, 'image/thumds/1_thumb.jpeg'),
(54, '2', 'Vasiliy', 280850, '2016-10-08 08:11:18', 'image/2.jpeg', 0, 'image/thumds/2_thumb.jpeg'),
(55, '3', 'Vasiliy', 108208, '2016-10-08 08:11:26', 'image/3.jpeg', 0, 'image/thumds/3_thumb.jpeg'),
(56, '4', 'Vasiliy', 68553, '2016-10-08 08:11:35', 'image/4.jpeg', 0, 'image/thumds/4_thumb.jpeg'),
(57, '5', 'Vasiliy', 1327481, '2016-10-08 08:11:47', 'image/5.jpeg', 0, 'image/thumds/5_thumb.jpeg'),
(58, '6', 'Vasiliy', 1266823, '2016-10-08 08:12:01', 'image/6.jpeg', 0, 'image/thumds/6_thumb.jpeg'),
(59, '7', 'Vasiliy', 1271911, '2016-10-08 08:12:32', 'image/7.jpeg', 0, 'image/thumds/7_thumb.jpeg'),
(60, '8', 'Vasiliy', 1265599, '2016-10-08 08:12:46', 'image/8.jpeg', 0, 'image/thumds/8_thumb.jpeg'),
(61, '9', 'Vasiliy', 1302072, '2016-10-08 08:12:58', 'image/9.jpeg', 0, 'image/thumds/9_thumb.jpeg'),
(62, '10', 'Vasiliy', 1109195, '2016-10-08 08:26:34', 'image/10.jpeg', 0, 'image/thumds/10_thumb.jpeg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `picturies`
--
ALTER TABLE `picturies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `picturies`
--
ALTER TABLE `picturies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
