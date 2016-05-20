-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 19:13
-- Версия сервера: 5.5.25
-- Версия PHP: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `cities_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cities_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`cities_id`, `name`) VALUES
(7, 'Ереван'),
(8, 'Минск'),
(9, 'София'),
(10, 'Берлин'),
(11, 'Каир'),
(12, 'Нью-Дели');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `countries_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`countries_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`countries_id`, `name`) VALUES
(9, 'Армения'),
(10, 'Белоруссия'),
(11, 'Болгария'),
(12, 'Германия'),
(13, 'Египет'),
(14, 'Индия');

-- --------------------------------------------------------

--
-- Структура таблицы `countries_cities`
--

CREATE TABLE IF NOT EXISTS `countries_cities` (
  `c_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  PRIMARY KEY (`c_c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `countries_cities`
--

INSERT INTO `countries_cities` (`c_c_id`, `countries_id`, `cities_id`) VALUES
(1, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 8, 2),
(9, 9, 7),
(10, 10, 8),
(11, 11, 9),
(12, 12, 10),
(13, 13, 11),
(14, 14, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `countries_lang_id`
--

CREATE TABLE IF NOT EXISTS `countries_lang_id` (
  `c_l_id` int(255) NOT NULL AUTO_INCREMENT,
  `countries_id` int(255) NOT NULL,
  `lang_id` int(255) NOT NULL,
  PRIMARY KEY (`c_l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `countries_lang_id`
--

INSERT INTO `countries_lang_id` (`c_l_id`, `countries_id`, `lang_id`) VALUES
(1, 1, 4),
(2, 2, 2),
(3, 5, 3),
(4, 6, 1),
(5, 8, 2),
(6, 9, 5),
(7, 10, 6),
(8, 11, 7),
(9, 12, 8),
(10, 13, 9),
(11, 14, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`lang_id`, `name`) VALUES
(5, 'армянский'),
(6, 'белорусский, русский'),
(7, 'болгарский'),
(8, 'немецкий'),
(9, 'арабский'),
(10, 'хинди, английский');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
