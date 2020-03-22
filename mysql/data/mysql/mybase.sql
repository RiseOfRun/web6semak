-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 22 2020 г., 03:12
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `d` date NOT NULL,
  `stext` text NOT NULL,
  `ftext` text NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `id_user`, `title`, `d`, `stext`, `ftext`, `img`) VALUES
(1, 1, 'Леди Гага вернулась к танцам', '2020-02-28', 'Первый за последние 3 года видеоклип выпустила певица Lady Gaga - он абсолютно танцевальный, такой, каким мы когда-то привыкли видеть клипы певицы.\r\n\r\nВ последнее время Леди Гага практически не занималась музыкой, сконцентрировавшись на актерской карьере, Напомним, недавно она снялась в фильме \"Звезда родилась\".', 'Первый за последние 3 года видеоклип выпустила певица Lady Gaga - он абсолютно танцевальный, такой, каким мы когда-то привыкли видеть клипы певицы.\r\n\r\nВ последнее время Леди Гага практически не занималась музыкой, сконцентрировавшись на актерской карьере, Напомним, недавно она снялась в фильме \"Звезда родилась\".\r\n\r\nУникальность видео в том, что снято оно на смартфон - iPhone последнем модели. А сам трек певица записала вместе с Максом Мартином.', 'news1.jpg'),
(2, 1, 'ЧЕМ ВАС УДИВИТ PRO-AM MOSCOW DANCE HOLIDAYS: 12 ПРИЧИН ПОСЕТИТЬ ТУРНИР', '2020-02-27', '4-5 апреля впервые пройдёт международный танцевальный фестиваль Pro-Am Moscow Dance Holidays, - одно из самых необычных танцевальных событий нового сезона.', '4-5 апреля впервые пройдёт международный танцевальный фестиваль Pro-Am Moscow Dance Holidays, - одно из самых необычных танцевальных событий нового сезона.', 'news2.jpg'),
(4, 2, 'GALLADANCE - SHOWCASE GRAND PRIX: впечатления судей, результаты и фоторепортаж', '2020-02-26', '23 февраля уже в третий раз состоялось одно из самых ярких мероприятий танцевальных клубов GallaDance - Showcase Grand Prix, - конкурс шоу-номеров, в котором принимают участие ученики и преподаватели клубов GallaDance.', '23 февраля уже в третий раз состоялось одно из самых ярких мероприятий танцевальных клубов GallaDance - Showcase Grand Prix, - конкурс шоу-номеров, в котором принимают участие ученики и преподаватели клубов GallaDance.23 февраля уже в третий раз состоялось одно из самых ярких мероприятий танцевальных клубов GallaDance - Showcase Grand Prix, - конкурс шоу-номеров, в котором принимают участие ученики и преподаватели клубов GallaDance.', 'news3.jpg'),
(5, 0, 'ЩАС СДОХНУ', '2020-03-22', 'не спала', 'не спала, собака', 'img2.jpg'),
(8, 2, 'оооооо', '2020-03-11', 'моя', 'моя оборона', 'img2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `fio` varchar(128) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `fio`, `password`) VALUES
(1, 'marina', 'Дьячкова Марина Сергеевна', '12345'),
(2, 'antoha', 'Антоха, помоги с лабами', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
