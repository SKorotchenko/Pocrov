-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 21 2014 г., 21:41
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `rossery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `hash` varchar(33) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `hash`, `email`) VALUES
(1, 'ec15d79e36e14dd258cfff3d48b73d35', 'bladetm13@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `prew` text COLLATE utf8_unicode_ci,
  `content` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `name`, `date`, `prew`, `content`) VALUES
(25, 'images/Category_1.jpg', 'gfxnfnfxnfx', '21.12.2014', '<p>gbxgfbxf</p>\r\n', '<p>xnfgxnfxnf</p>\r\n'),
(24, 'images/More_info.png', 'Test', '21.12.2014', '<p>Test description</p>\r\n', '<p>Test content</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subname` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slides` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `subname`, `logo`, `slides`) VALUES
(23, 'New', 'Test', '../', '../images/ArticleImg.jpg'),
(15, 'Vicoustic Stand ', 'Украина, Киев - 2013 год', '../../imgs/05_Vicoustic_Stand.jpg', '../images/3.jpg'),
(17, 'Vicoustic Stand', 'Выставка промышленных материалов - 2014 ', 'imgs/07_Vicoustic_Stand.jpg', 'imgs/07_Vicoustic_Stand.jpg,imgs/VSINDUSTRIAL_0001.jpg,imgs/VSINDUSTRIAL_0002.jpg,imgs/VSINDUSTRIAL_0003.jpg'),
(18, 'Vicoustic Stand NAMM', 'США, Анахайм - 2014 год', '../imgs/08_Vicoustic_Stand.jpg', 'imgs/08_Vicoustic_Stand.jpg,imgs/VSNAMM_0001.jpg,imgs/VSNAMM_0002.jpg,imgs/VSNAMM_0003.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `field` tinyint(4) NOT NULL,
  `preview` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `back_color` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `timestamp`, `name`, `content`, `field`, `preview`, `image`, `back_color`) VALUES
(1, 1419087483, 'Azimut 86S', '<p>Web design</p>\r\n', 0, 'img/proj1.jpg', 'img/1stImg.jpg', 'black'),
(4, 1415367351, 'kartinko', '<p>image</p>\r\n', 2, 'img/3.jpeg', 'img/3.jpeg', 'black'),
(6, 1419175516, 'укупупк', '<p>пукукпупу</p>\r\n', 0, 'укпу', 'пукпуп', 'black'),
(7, 1419183536, 'fewfwe', '<p>wefewfew</p>\r\n', 0, 'images/2.jpg', 'images/Slide_1.jpg', 'black');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
