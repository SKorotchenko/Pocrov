-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 14 2015 г., 07:33
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pokrov`
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
  `content` mediumtext COLLATE utf8_unicode_ci,
  `ua_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ua_prew` text CHARACTER SET utf8 NOT NULL,
  `ua_content` mediumtext CHARACTER SET utf8 NOT NULL,
  `en_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `en_prew` text CHARACTER SET utf8 NOT NULL,
  `en_content` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `img`, `name`, `date`, `prew`, `content`, `ua_name`, `ua_prew`, `ua_content`, `en_name`, `en_prew`, `en_content`) VALUES
(27, 'images/articles/ArticleImg.jpg', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА', '05.01.2015', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(UA)', '', '', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(EN)', '', ''),
(26, 'images/articles/ArticleImg.jpg', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА', '05.01.2015', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(UA)', '', '', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(EN)', '', ''),
(28, 'images/articles/ArticleImg.jpg', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА', '07.01.2015', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa leo, convallis at posuere id, tincidunt eu quam. Donec id sagittis metus. Proin egestas ante vel tellus cursus, tincidunt volutpat turpis condimentum. Aenean suscipit ultricies orci, non congue leo sollicitudin eu. Nunc est nibh, posuere a sapien posuere, aliquet finibus libero. Pellentesque quam tortor, convallis sit amet tincidunt et, egestas at tortor. Nullam pellentesque commodo semper. Vivamus rhoncus tempus viverra. Vivamus gravida, nisi in blandit sollicitudin, diam velit condimentum turpis, id maximus risus ante at purus. Proin tincidunt dolor nec urna efficitur fermentum. Ut pellentesque, neque vel sollicitudin imperdiet, metus velit scelerisque purus, ac sagittis dolor turpis vitae ipsum. Morbi blandit quam enim. Quisque mi quam, aliquam vitae orci in, pretium lacinia tortor. Ut ultricies justo eu ligula malesuada congue.</p>\r\n', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(UA)', '<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n', '<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n\r\n<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n\r\n<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n', 'ОСВЯЩЕНИЕ И ПОДНЯТИЕ КРЕСТОВ НА КУПОЛА СВЯТО-ИЛЬИНСКОГО ХРАМА(EN)', '<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n', '<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n\r\n<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n\r\n<p>Donec sit amet tellus sollicitudin, vestibulum massa vel, posuere metus. Pellentesque quis sem et sem pharetra pulvinar. Duis consectetur cursus ante, sit amet faucibus diam gravida eget. Donec aliquam varius nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin neque magna, cursus eu porta et, cursus id metus. Etiam eget leo et magna accumsan feugiat. Mauris accumsan sapien pharetra, ornare odio sed, tristique sapien. Ut eu molestie elit. Ut tincidunt blandit leo id blandit. Curabitur non vehicula ligula. Quisque malesuada ac tortor et iaculis. Pellentesque congue nibh ac tincidunt scelerisque. In dignissim porta dolor eget tempus. Ut bibendum varius diam in dignissi</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slides` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `name`, `logo`, `slides`) VALUES
(25, 'Декоративная нержавеющая сталь', 'images/categories/1.jpg', ',images/gallery/1/002.jpg,images/gallery/1/003.jpg,images/gallery/1/004.jpg'),
(26, 'Изготовление накупольных крест', 'images/categories/2.jpg', 'images/gallery/2/001.jpg,images/gallery/2/002.jpg,images/gallery/2/003.jpg,images/gallery/2/004.jpg,images/gallery/2/005.jpg,images/gallery/2/006.jpg,images/gallery/2/007.jpg,images/gallery/2/008.jpg,images/gallery/2/009.jpg,images/gallery/2/010.jpg,images/gallery/2/011.jpg,images/gallery/2/012.jpg,images/gallery/2/013.jpg,images/gallery/2/014.jpg,images/gallery/2/015.jpg,images/gallery/2/016.jpg,images/gallery/2/017.jpg,images/gallery/2/018.jpg,images/gallery/2/019.jpg,images/gallery/2/020.jpg,images/gallery/2/021.jpg,images/gallery/2/022.jpg,images/gallery/2/023.jpg,images/gallery/2/024.jpg,images/gallery/2/025.jpg,images/gallery/2/026.jpg,images/gallery/2/027.jpg,images/gallery/2/028.jpg,images/gallery/2/029.jpg,images/gallery/2/030.jpg,images/gallery/2/031.jpg'),
(27, 'Проектирование и изготовление куполов', 'images/categories/3.jpg', 'images/gallery/3/001.jpg,images/gallery/3/002.jpg,images/gallery/3/003.jpg,images/gallery/3/004.jpg,images/gallery/3/005.jpg,images/gallery/3/006.jpg,images/gallery/3/007.jpg,images/gallery/3/008.jpg,images/gallery/3/009.jpg,images/gallery/3/010.jpg,images/gallery/3/011.jpg,images/gallery/3/012.jpg,images/gallery/3/013.jpg,images/gallery/3/014.jpg,images/gallery/3/015.jpg,images/gallery/3/016.jpg,images/gallery/3/017.jpg,images/gallery/3/018.jpg,images/gallery/3/019.jpg,images/gallery/3/020.jpg,images/gallery/3/021.jpg,images/gallery/3/022.jpg,images/gallery/3/023.jpg,images/gallery/3/024.jpg,images/gallery/3/025.jpg,images/gallery/3/026.jpg,images/gallery/3/027.jpg,images/gallery/3/028.jpg,images/gallery/3/029.jpg,images/gallery/3/030.jpg'),
(28, 'Декоративные элементы из нержавеющей стали', 'images/categories/4.jpg', 'images/gallery/4/001.jpg,images/gallery/4/002.jpg,images/gallery/4/003.jpg,images/gallery/4/004.jpg,images/gallery/4/005.jpg,images/gallery/4/006.jpg,images/gallery/4/007.jpg,images/gallery/4/008.jpg,images/gallery/4/009.jpg,images/gallery/4/010.jpg,images/gallery/4/011.jpg,images/gallery/4/012.jpg,images/gallery/4/013.jpg,images/gallery/4/014.jpg,images/gallery/4/015.jpg,images/gallery/4/016.jpg,images/gallery/4/017.jpg,images/gallery/4/018.jpg,images/gallery/4/019.jpg,images/gallery/4/020.jpg,images/gallery/4/021.jpg,images/gallery/4/022.jpg,images/gallery/4/023.jpg');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
