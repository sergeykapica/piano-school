-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 24 2019 г., 22:10
-- Версия сервера: 10.1.29-MariaDB
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pianoschool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles_list`
--

CREATE TABLE `articles_list` (
  `ID` int(10) NOT NULL,
  `SUBJECT` varchar(500) NOT NULL,
  `CONTENT` varchar(10000) NOT NULL,
  `SECTION_SYMBOL_CODE` varchar(100) NOT NULL,
  `ELEMENT_SYMBOL_CODE` varchar(100) NOT NULL,
  `CREATE_DATE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles_list`
--

INSERT INTO `articles_list` (`ID`, `SUBJECT`, `CONTENT`, `SECTION_SYMBOL_CODE`, `ELEMENT_SYMBOL_CODE`, `CREATE_DATE`) VALUES
(9, 'Как научиться читать ноты для фортепиано', '<p>\r\n                            <img src=\"/images/articles/article-img-1.jpg\" class=\"article-img-top mb-3 mr-3 float-left\"/>\r\n                            Если гитаристы-любители могут ещё играть, не зная нот (по табулатурам), то пианисту без них не обойтись. Кое-что, конечно, вспоминается из школьных уроков музыки:\r\n\r\n                            <ul class=\"float-left\">\r\n                                <li>названия нот (до-ре-ми-фа-соль-ля-си);</li>\r\n                                <li>нотный стан (линеечки, на которых ноты записаны);</li>\r\n                                <li>ключи (басовый и скрипичный);</li>\r\n                                <li>длительности нот (целая, половинная, четвертная, восьмая – и так до шестьдесятчетвёртой);</li>\r\n                                <li>размер тактов (стандартный – 4/4, вальсовый – ¾ и т.д.).</li>\r\n                            </ul>\r\n                            <div class=\"w-100 float-left\">\r\n                                <p>\r\n                                    Останавливаться на них нет смысла – эту информацию легко найти в других статьях нашего сайта. Но нотные записи пестрят ещё множеством непонятных новичку значков и чёрточек:\r\n                                </p>\r\n\r\n                                <ul>\r\n                                    <li>знаки альтерации;</li>\r\n                                    <li>точка;</li>\r\n                                    <li>триоль;</li>\r\n                                    <li>лига.</li>\r\n                                </ul>\r\n                                <p>Разберёмся, как они учитываются при игре на фортепиано.</p>\r\n                                <b class=\"d-inline-block mt-2 mb-2\">Знаки альтерации</b>\r\n                                <p>\r\n                                    Знаки альтерации записываются рядом с нотой и указывают на повышение/понижение высоты звука на полтона. Полутона - это те самые ноты, которые играются на чёрных клавишах. Возможно, у вас возник вопрос, почему белых клавиш больше, чем чёрных. Ответим сразу – потому что некоторые ноты отличаются между собой только на полутон. Это ми и фа, а также си и до.\r\n                                </p>\r\n                                <p>Взгляните на рисунок.</p>\r\n                                <div class=\"w-100 float-left\">\r\n                                    <img src=\"/images/articles/mnote-1.jpg\" class=\"article-img-top\"/>\r\n                                </div>\r\n                                <p>\r\n                                На рисунке последовательно указаны ноты си диез, си бемоль и си с бекаром.<br/><br/>\r\n\r\n                                Диез означает, что высота ноты увеличена на полтона. Чтобы её сыграть, найдите на клавиатуре фортепиано ноту си и нажмите на следующую за ней БЕЛУЮ клавишу - до.<br/><br/>\r\n\r\n                                Бемоль показывает, что ноту нужно играть на полтона ниже, поэтому нужная клавиша теперь чёрная и она будет слева от ноты си.<br/><br/>\r\n\r\n                                Необходимость бекара вытекает из того, что знаки альтерации действуют не на одну ноту, а на все ноты на линейке (си в нашем случае) до конца такта или до смены знака. Но если композитор хочет, чтобы музыканты в начале такта сыграли си диез, а в конце си, перед нотой си он ставит бекар, означающий отмену до конца такта знаков альтерации для этой ноты.<br/><br/>\r\n\r\n                                Кроме этого, знаки альтерации можно увидеть в начале пьесы, рядом с ключом. Они указывают тональность, в которой записано произведение и действуют до самого конца либо до смены тональности. Это означает, что ноты, на чьих линейках указаны знаки, нужно играть на полтона выше или ниже (причём во всех октавах) – если рядом с ними не указаны бекар (отменяет знак), дубль-диез (нота играется на тон выше указанной) или дубль-бемоль (на тон ниже указанной).\r\n                                </p>\r\n                                <b class=\"d-inline-block mt-2 mb-2\">Триоль, точка, лига</b>\r\n                                <p>\r\n                                Обозначения триоли (рисунок слева), точки (посередине) и лиги (справа) влияют на длительность играемых нот.\r\n                                </p>\r\n                                <div class=\"w-100 float-left\">\r\n                                    <img src=\"/images/articles/mnote-2.jpg\" class=\"article-img-top\"/>\r\n                                </div>\r\n                                <p>\r\n                                Триоль показывает музыканту, что сумма длительностей трёх обозначенных нот равна только сумме длительности двух из них. Другими словами, суммарная длительность уменьшается на треть.<br/><br/>\r\n\r\n                                Одна точка, стоящая рядом с нотой, увеличивает звучание наполовину, две – на три четверти, три – на семь восьмых. Т.е., четвертная нота с точкой по длительности равна четвертной и восьмой вместе взятым.<br/><br/>\r\n\r\n                                Лига показывает, что две ноты нужно сыграть как одну. Это значит, что две четвертные ноты, соединённые лигой, играются как одна половинная. Применяют лигу в тех случаях, когда нужно, чтобы нота звучала и в следующем такте.<br/><br/>\r\n\r\n                                Это только краткий ликбез по нотной грамоте. Узнать больше можно у преподавателей, записавшись на занятия по фортепиано.\r\n                                </p>\r\n                            </div>\r\n                        </p>', 'about_musical_instruments', 'study_notes_for_fortepiano', 1577028773),
(10, 'Как научиться играть на фортепиано с нуля: пошаговая инструкция для начинающих', '<p>\r\n                            <img src=\"/images/articles/article-img-1.jpg\" class=\"article-img-top mb-3 mr-3 float-left\"/>\r\n                            Умение хорошо играть на клавишных инструментах - дело нелегкое и требует огромного количества затраченного времени. Тогда как же научиться играть на фортепиано с нуля? Следуя элементарным правилам можно быстро научиться играть на пианино в домашних условиях.\r\n                        </p>\r\n                        <h5 class=\"mb-3 float-left\">Искусство игры на фортепиано: Механика и принцип извлечения звука</h5>\r\n                        <p class=\"float-left\">Детально знакомимся с механикой инструмента, чтобы понять физические особенности извлечения звука и процесс:</p>\r\n                        <ol class=\"float-left w-100\">\r\n                            <li>Нажим клавиши - молоточек ударяется в три идентичных струны;</li>\r\n                            <li>От физического воздействия струны вибрируют (звучат);</li>\r\n                            <li>Если клавишу отпустить - специальный механизм заглушит струну;</li>\r\n                            <li>В случае если клавишу придержать, струны будут звучать, пока не перестанут вибрировать.</li>\r\n                        </ol>\r\n                        <p class=\"float-left\">Демонстрацию механики фортепиано следует проводить на рояле, поскольку там наглядно просматривается внутреннее строение инструмента.</p>', 'about_musical_instruments', 'study_fortepiano_start', 1577028773),
(11, 'Как выбрать пианино советы настройщика', '<div class=\"article-img-fluid mb-3\" style=\"background-image: url(/images/articles/article-img-2.jpg);\"></div>\r\n                        <p>\r\n                            Выбор пианино – это нелегкое дело. Этот громоздкий инструмент не так просто обменять, перепродать или выбросить, поэтому стоит учитывать некоторые нюансы при выборе. Если нет возможности позвать настройщика или мастера для помощи в выборе, то есть общеизвестные вещи, на которые стоит обратить внимание.\r\n                        </p>\r\n                        <h5>Возраст пианино</h5>\r\n                        <p>\r\n                            Теоретически, \"рабочими\" считаются даже пианино конца 19-начала 20 века или пианино 50-70-ых годов. Однако эти модели считаются антиквариатом и требуют больших финансовых вложений.<br/><br/>\r\n\r\n                            Зачастую выбор падает на пианино «Беларусь» 70-90-ых годов. Даже в состоянии б/у, такие инструменты подходят для обучения игре на пианино, хотя, конечно, многое зависит от состояния пианино. Также хорошим выбором считается пианино «Беларусь» 90-00-ых годов, но в этом случае было бы не лишним, чтобы с выбором помогал грамотный мастер, потому что не все инструменты этого периода хорошо звучат.\r\n                        </p>\r\n                        <h5>Критерии выбора пианино</h5>\r\n                        <p>\r\n                            Даже если вы не профессиональный настройщик, обратите внимание на некоторые детали при выборе пианино. Это поможет избежать неудачной покупки.\r\n                        </p>\r\n                        <h5>Состояния шпона</h5>\r\n                        <p>\r\n                            Если шпон набух или отслаивается, это признак того, что пианино неправильно хранилось, или в него попала влага. Разумеется, пианино может оказаться пригодным, но будет разумно в таком случае будет не рисковать и не приобретать инструмент с дефектом.\r\n                        </p>\r\n                        <h5>Клавиатура и педали</h5>\r\n                        <p>\r\n                            В идеале, чтобы проверить состояние клавиатуры, нужно снять верхний щит и вынуть клавиатурный клап. Однако, это требует присутствия настройщика. Тем не менее, можно оценить состояние клавиатуры по внешнему виду и звучанию. На клавишах не должно быть трещин, сколов и прочих видимых внешних дефектов. Поиграйте на пианино для оценки звука, сперва используя правую и левую педали поочередно, потом обе. Внимательно оцените звучание инструмента. Нажатие на педаль должно быть мягким, при этом звучание меняется: ослабевает и возрастает.\r\n                        </p>\r\n                        <h5>Дефекты, при которых не стоит покупать пианино</h5>\r\n                        <p>\r\n                            Вот перечень тех видимых дефектов, которые считаются верным признаком, что инструмент в нерабочем состоянии:\r\n\r\n                            <ul class=\"w-100\">\r\n                                <li>глухие звуки;</li>\r\n                                <li>посторонние звуки;</li>\r\n                                <li>сколы, царапины и трещины на поверхности;</li>\r\n                                <li>застревание или западание клавиш;</li>\r\n                                <li>слишком свободное движение клавиш;</li>\r\n                                <li>набухший или отслоившийся шпон.</li>\r\n                            </ul>\r\n\r\n                            Разумеется, для выбора пианино надежнее будет пригласить настройщика или мастера со стажем, чтобы наверняка избежать неудачной покупки, однако даже эти простые советы могут помочь избежать покупки неисправного инструмента.\r\n                        </p>', 'about_musical_properties', 'select_piano', 1577028773);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_sections_list`
--

CREATE TABLE `articles_sections_list` (
  `ID` int(10) NOT NULL,
  `SYMBOL_CODE` varchar(100) NOT NULL,
  `TITLE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `articles_sections_list`
--

INSERT INTO `articles_sections_list` (`ID`, `SYMBOL_CODE`, `TITLE`) VALUES
(1, 'about_musical_instruments', 'О музыкальных инструментах'),
(2, 'about_musical_properties', 'О свойствах инструмента');

-- --------------------------------------------------------

--
-- Структура таблицы `services_list`
--

CREATE TABLE `services_list` (
  `ID` int(10) NOT NULL,
  `TITLE` varchar(500) NOT NULL,
  `DESCRIPTION` varchar(2000) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `PRICE` float NOT NULL,
  `LESSONS_COUNT` int(5) NOT NULL,
  `LESSON_DURATION` int(10) NOT NULL,
  `IMAGE_URL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `services_list`
--

INSERT INTO `services_list` (`ID`, `TITLE`, `DESCRIPTION`, `TYPE`, `PRICE`, `LESSONS_COUNT`, `LESSON_DURATION`, `IMAGE_URL`) VALUES
(1, 'Групповые занятия', 'Занятия в группе людей с одним преподавателем. Является прекрасным источником обмена опытом друг друга.', 'subscription', 1000, 4, 50, '/images/services/service-1.jpg'),
(3, 'Групповые занятия', 'Занятия в группе людей с одним преподавателем. Является прекрасным источником обмена опытом друг друга.', 'subscription', 2000, 8, 50, '/images/services/service-1.jpg'),
(4, 'Индивидуальные занятия', 'Занятия с преподавателем наедине. Отличная подготовка имеющая большую эффективность в разы.', 'subscription', 1600, 4, 50, '/images/services/service-2.jpg'),
(5, 'Индивидуальные занятия', 'Занятия с преподавателем наедине. Отличная подготовка имеющая большую эффективность в разы.', 'subscription', 3200, 8, 50, '/images/services/service-2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services_type_list`
--

CREATE TABLE `services_type_list` (
  `ID` int(10) NOT NULL,
  `SYMBOL_CODE` varchar(100) NOT NULL,
  `TITLE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `services_type_list`
--

INSERT INTO `services_type_list` (`ID`, `SYMBOL_CODE`, `TITLE`) VALUES
(1, 'subscription', 'Абонемент');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers_list`
--

CREATE TABLE `teachers_list` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `MIDDLE_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `DIRECTION` varchar(100) NOT NULL,
  `IMAGE_URL` varchar(500) NOT NULL,
  `REFERENCE_BIOGRAPHY` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `teachers_list`
--

INSERT INTO `teachers_list` (`ID`, `NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DIRECTION`, `IMAGE_URL`, `REFERENCE_BIOGRAPHY`) VALUES
(1, 'Игорь', 'Яковлевич ', 'Крутой', 'Преподаватель фортепиано', '/images/teachers/krutoy.jpg', 'https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D1%83%D1%82%D0%BE%D0%B9,_%D0%98%D0%B3%D0%BE%D1%80%D1%8C_%D0%AF%D0%BA%D0%BE%D0%B2%D0%BB%D0%B5%D0%B2%D0%B8%D1%87'),
(2, 'Юрий', 'Михайлович ', 'Антонов', 'Преподаватель фортепиано', '/images/teachers/antonov.jpg', 'https://ru.wikipedia.org/wiki/%D0%90%D0%BD%D1%82%D0%BE%D0%BD%D0%BE%D0%B2,_%D0%AE%D1%80%D0%B8%D0%B9_%D0%9C%D0%B8%D1%85%D0%B0%D0%B9%D0%BB%D0%BE%D0%B2%D0%B8%D1%87'),
(3, 'Александра', 'Николаевна ', 'Пахмутова', 'Преподаватель фортепиано', '/images/teachers/pahmutova.jpg', 'https://ru.wikipedia.org/wiki/%D0%9F%D0%B0%D1%85%D0%BC%D1%83%D1%82%D0%BE%D0%B2%D0%B0,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%B0_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B5%D0%B2%D0%BD%D0%B0'),
(4, 'Раймонд', 'Вольдемарович ', 'Паулс', 'Преподаватель фортепиано', '/images/teachers/pauls.jpg', 'https://ru.wikipedia.org/wiki/%D0%9F%D0%B0%D1%83%D0%BB%D1%81,_%D0%A0%D0%B0%D0%B9%D0%BC%D0%BE%D0%BD%D0%B4_%D0%92%D0%BE%D0%BB%D1%8C%D0%B4%D0%B5%D0%BC%D0%B0%D1%80%D0%BE%D0%B2%D0%B8%D1%87');

-- --------------------------------------------------------

--
-- Структура таблицы `videos_list`
--

CREATE TABLE `videos_list` (
  `ID` int(10) NOT NULL,
  `TITLE` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(2000) NOT NULL,
  `URL` varchar(500) NOT NULL,
  `PREVIEW_IMAGE_URL` varchar(500) NOT NULL,
  `DURATION` varchar(10) NOT NULL,
  `CREATE_DATE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `videos_list`
--

INSERT INTO `videos_list` (`ID`, `TITLE`, `DESCRIPTION`, `URL`, `PREVIEW_IMAGE_URL`, `DURATION`, `CREATE_DATE`) VALUES
(1, 'Игорь Крутой - Танцующие Эвридики', 'Игорь Крутой - Танцующие Эвридики', 'https://www.youtube.com/watch?v=9_Pz6J9YuQY', 'https://i.ytimg.com/vi/9_Pz6J9YuQY/mqdefault.jpg', '3:58', 1577038956),
(2, 'Игорь Крутой - Когда я закрываю глаза', 'Игорь Крутой - Когда я закрываю глаза', 'https://www.youtube.com/watch?v=qRYLCP-IX3c', 'https://i.ytimg.com/vi/qRYLCP-IX3c/mqdefault.jpg', '5:19', 1577038956),
(3, 'Игорь Крутой - Ты в моём сентябре', 'Игорь Крутой - Ты в моём сентябре', 'https://www.youtube.com/watch?v=qAHNq584mfg', 'https://i.ytimg.com/vi/qAHNq584mfg/mqdefault.jpg', '5:45', 1577038956),
(4, 'Раймонд Паулс и Андрей Миронов - Старые друзья', 'Раймонд Паулс и Андрей Миронов - Старые друзья', 'https://www.youtube.com/watch?v=cmoz_Psga-I', 'https://i.ytimg.com/vi/cmoz_Psga-I/default.jpg', '4:03', 1577038956),
(5, 'Раймонд Паулс - Долгая дорога в дюнах', 'Раймонд Паулс - Долгая дорога в дюнах', 'https://www.youtube.com/watch?v=wQ21ytXFuYo', 'https://i.ytimg.com/vi/wQ21ytXFuYo/mqdefault.jpg', '4:08', 1577038956),
(6, 'Валерий Леонтьев - Полюбите пианиста', 'Валерий Леонтьев - Полюбите пианиста', 'https://www.youtube.com/watch?v=sjDmX-J_yx0', 'https://i.ytimg.com/vi/sjDmX-J_yx0/mqdefault.jpg', '3:31', 1577038956);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles_list`
--
ALTER TABLE `articles_list`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SECTION_SYMBOL_CODE` (`SECTION_SYMBOL_CODE`),
  ADD KEY `ELEMENT_SYMBOL_CODE` (`ELEMENT_SYMBOL_CODE`);

--
-- Индексы таблицы `articles_sections_list`
--
ALTER TABLE `articles_sections_list`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SYMBOL_CODE` (`SYMBOL_CODE`);

--
-- Индексы таблицы `services_list`
--
ALTER TABLE `services_list`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE` (`TYPE`);

--
-- Индексы таблицы `services_type_list`
--
ALTER TABLE `services_type_list`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `SYMBOL_CODE` (`SYMBOL_CODE`);

--
-- Индексы таблицы `teachers_list`
--
ALTER TABLE `teachers_list`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `videos_list`
--
ALTER TABLE `videos_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles_list`
--
ALTER TABLE `articles_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `articles_sections_list`
--
ALTER TABLE `articles_sections_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services_list`
--
ALTER TABLE `services_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `services_type_list`
--
ALTER TABLE `services_type_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `teachers_list`
--
ALTER TABLE `teachers_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `videos_list`
--
ALTER TABLE `videos_list`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles_list`
--
ALTER TABLE `articles_list`
  ADD CONSTRAINT `articles_list_ibfk_1` FOREIGN KEY (`SECTION_SYMBOL_CODE`) REFERENCES `articles_sections_list` (`SYMBOL_CODE`);

--
-- Ограничения внешнего ключа таблицы `services_list`
--
ALTER TABLE `services_list`
  ADD CONSTRAINT `services_list_ibfk_1` FOREIGN KEY (`TYPE`) REFERENCES `services_type_list` (`SYMBOL_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
