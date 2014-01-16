-- phpMyAdmin SQL Dump
-- version 4.1.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 16 2014 г., 13:12
-- Версия сервера: 5.5.34-MariaDB-log
-- Версия PHP: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) DEFAULT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `preview` text,
  `content` text NOT NULL,
  `html_title` varchar(255) DEFAULT NULL,
  `html_description` varchar(255) DEFAULT NULL,
  `html_keywords` varchar(255) DEFAULT NULL,
  `html_template` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `owner`, `pubDate`, `title`, `preview`, `content`, `html_title`, `html_description`, `html_keywords`, `html_template`) VALUES
(1, 0, '0000-00-00 00:00:00', 'Заголовок', 'Текст', 'Полный текст', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `html_title` varchar(255) DEFAULT NULL,
  `html_description` varchar(255) DEFAULT NULL,
  `htm_keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `owner`, `order`, `title`, `slug`, `content`, `html_title`, `html_description`, `htm_keywords`) VALUES
(1, 0, 0, 'Страничечка', 'stranichechka', '<p>Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое.</p>\n\n<p>Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло. Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед глазами.</p>\n\n<p>«Что со мной случилось? » – подумал он. Это не было сном. Его комната, настоящая, разве что слишком маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах. Над столом, где были разложены распакованные образцы сукон – Замза был коммивояжером, – висел портрет, который он недавно вырезал из иллюстрированного журнала и вставил в красивую золоченую рамку.</p>\n\n<p>На портрете была изображена дама в меховой шляпе и боа, она сидела очень прямо и протягивала зрителю тяжелую меховую муфту, в которой целиком исчезала ее рука. Затем взгляд Грегора устремился в окно, и пасмурная погода – слышно было, как по жести подоконника стучат капли дождя – привела его и вовсе в грустное настроение. «Хорошо бы еще немного поспать и забыть всю эту чепуху», – подумал он, но это было совершенно неосуществимо, он привык спать на правом боку, а в теперешнем своем</p>', '', '', ''),
(2, 0, 1, 'О нас', 'Onas', ' a SA ASDasd  ads sda', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `profile`) VALUES
(1, 'silago', '$2a$13$RMfne6Oww2kJaGqyXcKs9u/HnHoeNDYU1f67edfZK40aW6wQNIr3q', 'sialgo.nevermind@gmail.com', 'hui');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
