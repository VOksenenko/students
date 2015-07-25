-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 14 2015 г., 16:44
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `students`
--

-- --------------------------------------------------------

--
-- Структура таблицы `the_expendables`
--

CREATE TABLE IF NOT EXISTS `the_expendables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL,
  `surname` char(30) NOT NULL,
  `sex` char(1) NOT NULL,
  `birth_year` smallint(4) NOT NULL,
  `department` char(30) NOT NULL,
  `eie` smallint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `the_expendables`
--

INSERT INTO `the_expendables` (`id`, `name`, `surname`, `sex`, `birth_year`, `department`, `eie`) VALUES
(1, 'Антонио', 'Бандерас', 'м', 1960, 'Drama', 174),
(3, 'Виктор', 'Ортис', 'м', 1987, 'Action', 178),
(4, 'Глен', 'Пауэлл', 'м', 1988, 'Drama', 183),
(5, 'Джейсон', 'Стейтем', 'м', 1967, 'Action', 178),
(6, 'Джет', 'Ли', 'м', 1963, 'Action', 168),
(7, 'Дольф', 'Лундгрен', 'м', 1957, 'Action', 198),
(8, 'Келлан', 'Латс', 'м', 1985, 'Drama', 185),
(9, 'Келси', 'Грэммер', 'м', 1955, 'Drama', 185),
(10, 'Мел', 'Гибсон', 'м', 1956, 'Action', 177),
(11, 'Роберт', 'Дави', 'м', 1954, 'Thriller', 188),
(12, 'Ронда', 'Раузи', 'ж', 1987, 'Action', 170),
(13, 'Рэнди', 'Кутюр', 'м', 1963, 'Thriller', 185),
(14, 'Сарай', 'Гивати', 'ж', 1982, 'Thriller', 171),
(15, 'Сильвестр', 'Сталлоне', 'м', 1946, 'Action', 177),
(16, 'Терри', 'Крюс', 'м', 1968, 'Comedy', 189),
(17, 'Уэсли', 'Снайпс', 'м', 1962, 'Action', 178),
(18, 'Харрисон', 'Форд', 'м', 1942, 'Adventure', 185);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
