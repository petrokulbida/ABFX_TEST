-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 23 2016 г., 18:49
-- Версия сервера: 5.5.25
-- Версия PHP: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `abfx_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(10) unsigned NOT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent`, `category`) VALUES
(1, 0, 'item'),
(2, 0, 'item'),
(3, 0, 'item'),
(4, 0, 'item'),
(5, 1, 'item'),
(6, 1, 'item'),
(7, 6, 'item '),
(8, 6, 'item '),
(9, 8, 'item'),
(10, 1, 'item'),
(11, 2, 'item'),
(12, 3, 'item'),
(13, 4, 'item'),
(14, 5, 'item'),
(15, 9, 'item'),
(16, 10, 'item');

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) DEFAULT NULL,
  `position_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `pos_idx` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id`, `fio`, `position_id`) VALUES
(1, 'Степан Иванович Клюев', 2),
(2, 'Василий Романович Сом', 3),
(3, 'Илья Романович Лок', 5),
(4, 'Леонид Петрович Ме', 1),
(5, 'Сергей Андреевич Пат', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `doc_pat`
--

CREATE TABLE IF NOT EXISTS `doc_pat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_id` int(10) unsigned NOT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `doc_idx` (`doctor_id`),
  KEY `pat_idx` (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `doc_pat`
--

INSERT INTO `doc_pat` (`id`, `doctor_id`, `patient_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 5),
(5, 3, 6),
(6, 5, 7),
(7, 4, 8),
(8, 3, 4),
(9, 5, 3),
(10, 2, 2),
(11, 4, 1),
(12, 3, 1),
(13, 1, 4),
(14, 5, 5),
(15, 4, 6),
(16, 5, 7),
(17, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `patient`
--

INSERT INTO `patient` (`id`, `fio`, `dob`) VALUES
(1, 'Пациент 1', '1983-12-31'),
(2, 'Пациент 2', '1934-00-00'),
(3, 'Пациент 3', '1945-00-00'),
(4, 'Пациент 4', '1990-00-00'),
(5, 'Пациент 5', '1960-00-00'),
(6, 'Пациент 6', '1967-00-00'),
(7, 'Пациент 7', '1987-00-00'),
(8, 'Пациент 8', '1995-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id`, `position`) VALUES
(1, 'Терапевт'),
(2, 'ЛОР'),
(3, 'Хирург'),
(4, 'Окулист'),
(5, 'Уролог');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `pos` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `doc_pat`
--
ALTER TABLE `doc_pat`
  ADD CONSTRAINT `doc` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pat` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
