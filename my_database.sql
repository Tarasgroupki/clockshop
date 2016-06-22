-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2016 г., 17:22
-- Версия сервера: 5.5.25
-- Версия PHP: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `my_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(26) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `hash`) VALUES
(1, '7488e331b8b64e5794da3fa4eb10ad5d'),
(1, '7488e331b8b64e5794da3fa4eb10ad5d');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_menu`
--

CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `name`) VALUES
(1, 'Товар'),
(2, 'Категорії'),
(3, 'Коментарі'),
(4, 'Замовлення'),
(5, 'Користувачі'),
(1, 'Товар'),
(2, 'Категорії'),
(3, 'Коментарі'),
(4, 'Замовлення'),
(5, 'Користувачі');

-- --------------------------------------------------------

--
-- Структура таблицы `clocks`
--

CREATE TABLE IF NOT EXISTS `clocks` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `price` int(19) NOT NULL,
  `year` int(24) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `clocks`
--

INSERT INTO `clocks` (`id`, `image`, `title`, `mark`, `country`, `description`, `short_description`, `price`, `year`, `data`) VALUES
(1, 'images/clock1.png', 'OMEGA CHRONOGRAPH', 'Audemars Pique', 'USA', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1276, 2008, '2016-01-31'),
(2, 'images/clock2.png', 'OMEGA CHRONOGRAPH', 'Breitling', 'USA', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor\nLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1544, 2009, '2016-01-15'),
(3, 'images/clock3.png', 'OMEGA CHRONOGRAPH', 'Citizen', 'GB', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1400, 1997, '2016-01-28'),
(4, 'images/clock4.png', 'OMEGA CHRONOGRAPH', 'Movavo', 'Germany', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod temporvLorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1345, 2008, '2016-01-20'),
(5, 'images/explorer.jpg', 'Rolex Explorer', 'Audemars Pique', 'GB', 'Прогноз погоды\nВідомі годинники\nСьогодні в світі...', 'Сьогодні в світі годинникової індустрії існує величезна різноманітність годинниковихrolex-explorer компаній, що представляють увазі любителів цих механізмів широкий асортимент. Однак хронометрам певних марок відводиться центральне місце. Вони гарантують своєму власникові максимальну точність, бездоганна якість і неповторний стиль. Однією з найбільш відомих марок елітних годинників по праву можна назвати Rolex. У 1903 році Ганс Вілсдорф прибув до Лондона, де вирішив налагодити власне годинникове виробництво будучи впевненим, що майбутнє за наручними годинниками. І він не прогадав: сьогодні його відомі годинники вважаються кращими в світі. Однак ці хронометри є не просто одними з найбільш знаменитих у світі, вони синонім елегантного стилю, розкоші, високого становища в суспільстві та бездоганної якості. Ця відома марка є незамінним атрибутом успішної людини, її назва стала загальною: якщо у людини на зап’ясті красуються годинник марки Rolex, значить він багатий і успішний. Ця відома марка годинника є єдиною на сьогоднішній день, яка не робить знижки на свою продукцію. Філософія компанії Ролекс – «максимальна якість за максимальні гроші». Велика частина відданих за ці елітні годинники грошей – це плата за імідж. Крім своїх чудових успіхів на світовому ринку годинникової індустрії, цим відомим годинах належить і ряд інших досягнень. Наприклад, в 1927 році годинник Rolex Oyster на зап’ясті англійської спортсменки Мерседес Гляйтце за 15 годин 15 хвилин перепливли протоку Ла-Манш. Глава компанії Ганс Вілсдорф витратив 40 тис. франків на щогодинне повідомлення публіки про самопочуття плавчихи і годин протягом запливу. Фотографії усміхненої плавчихи супроводжувалися заголовками: «Найбільший тріумф Rolex Oyster». Після легендарного запливу годинник Rolex зайняли лідируючу позицію на годинному ринку і Rolex Oyster був зметений з прилавків. У фільмі «Агент 007», що вийшов на великий екран в 1950 – х, Джеймс Бонд долає різноманітні перешкоди з моделлю Rolex Submariner на руці. Спеціально розроблена і прикріплена до батискаф «Трієст» модель Rolex разом з французькими вченими Жаком Пікаром і Дональдом побувала на глибині 10915 м в Маріанської западини в 1960 році. Під час всієї підводної подорожі годинник показував точний час. Однак головним досягненням цієї елітної і відомої марки годинників є той факт, що про годинник Rolex знають всі, і навіть ті, хто не заглиблюється в специфіку годинникової індустрії.', 2499, 2014, '2016-01-04'),
(8, 'images/clock11.png', 'Omega Chronograph m2', 'Citizen', 'USA', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1345, 2004, '2016-03-30'),
(9, 'images/clock11.png', 'Omega Chronograph m2', 'Citizen', 'USA', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 1345, 2004, '2016-03-31'),
(12, 'images/explorer.jpg', 'Explorer m2', 'Magnit', 'USA', 'Годинник здатен працювати навіть на глибині 1.2км.', 'Годинник здатен працювати навіть на глибині 1.2км.', 1400, 2002, '2016-03-31'),
(13, 'images/clock3.png', 'Omega Chronograph m3', 'Kalvin', 'USA', 'Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor', 'KalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinvvvKalvinvvKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvinKalvin', 1345, 2009, '2016-03-31');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `category_id`, `nickname`, `text`, `data`) VALUES
(2, 1, 'Tarasgroupki', 'dwdw', '2016-04-01'),
(3, 5, 'Tarasgroupki', 'This clock is very\r\nqualitative', '2016-04-01'),
(5, 1, 'Tarasgroupki', 'Хороший годинник.', '2016-04-01'),
(6, 2, 'Terry123', 'Годинник служить вже 2 роки , побував у різних ситуаціях.\r\n', '2016-04-01'),
(7, 10, 'Tarasgroupki', 'Годинник', '2016-04-01'),
(8, 1, 'Tarasgroupki', '123', '2016-04-01'),
(11, 1, 'Tarasgroupki', '123', '2016-04-01'),
(14, 2, 'Tarasgroupki', '42', '2016-04-01'),
(18, 1, 'Tarasgroupki', '12454', '2016-04-03'),
(19, 1, 'Tarasgroupki', '32fecf', '2016-04-03'),
(20, 1, 'Tarasgroupki', '32fecf', '2016-04-03'),
(21, 1, 'Tarasgroupki', '1234532', '2016-03-12'),
(22, 1, 'Tarasgroupki', 'qweaszxc', '2016-03-25'),
(23, 1, 'Tarasgroupki', 'qweaszxc', '2016-03-25'),
(24, 1, 'Tarasgroupki', 'qweaszxc', '2016-03-25'),
(25, 1, 'Tarasgroupki', 'qwe', '2016-03-25'),
(29, 0, '', 'vgtfr', '2016-02-02'),
(32, 0, '', 'gtfr', '2016-02-02'),
(35, 0, '', 'n gbvfrfvrf', '2016-02-02'),
(37, 0, 'Tarasgroupki', '', '2016-02-02'),
(39, 0, '', 'rtrefrf', '2016-02-02'),
(40, 0, '', 'edcs', '2016-02-02'),
(41, 0, '', 'cdws', '2016-02-02'),
(42, 0, '', 'sc', '2016-02-02'),
(43, 0, '', 'grfed', '2016-02-02'),
(46, 0, '', '', '2016-02-02'),
(47, 1, 'Tarasgroupki', 'Good!', '2016-04-10');

-- --------------------------------------------------------

--
-- Структура таблицы `header_menu`
--

CREATE TABLE IF NOT EXISTS `header_menu` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `header_menu`
--

INSERT INTO `header_menu` (`id`, `name`, `href`) VALUES
(1, 'Головна', '/#'),
(2, 'Нові продукти', '/index.php?new_products'),
(3, 'Мій акаунт', '/index.php?Login&account'),
(4, 'Карта сайту', 'www.spclock.ua/site_map.php');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `news` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `news`) VALUES
(1, 'Головна', 'images/ghi.jpeg', 'Ruby on Rails — об''єктно-орієнтований програмний каркас (фреймворк) для створення веб-додатків, написаний на мові програмування Ruby. Ruby on Rails надає каркас модель-вид-контролер (Model-View-Controller) для веб-додатків, а також забезпечує їхню інтеграцію з веб-сервером і сервером бази даних.\n\nRuby on Rails був створений Девідом Гайнемаєр Генссоном (англ. David Heinemeier Hansson) на основі його роботи над засобом керування проектами Basecamp і був випущений в липні 2004 року. Ruby on Rails є відкритим програмним забезпеченням і розповсюджується за ліцензією MIT.'),
(2, 'Python', 'images/python.jpg', 'Python (рекомендоване прочитання — «Па́йтон», запозичено назву[4] з британського шоу Монті Пайтон) — інтерпретована об''єктно-орієнтована мова програмування високого рівня з динамічною семантикою[en].[5] Розроблена в 1990 році Гвідо ван Россумом. Структури даних високого рівня разом із динамічною семантикою та динамічним зв''язуванням роблять її привабливою для швидкої розробки програм, а також як засіб поєднання існуючих компонентів. Python підтримує модулі та пакети модулів, що сприяє модульності та повторному використанню коду. Інтерпретатор Python та стандартні бібліотеки доступні як у скомпільованій так і у вихідній формі на всіх основних платформах. В мові програмування Python підтримується декілька парадигм програмування, зокрема: об''єктно-орієнтована, процедурна, функціональна та аспектно-орієнтована.'),
(3, 'PHP', 'images/php-elephant.png', 'PHP (англ. PHP: Hypertext Preprocessor — PHP: гіпертекстовий препроцесор), попередня назва: Personal Home Page Tools — скриптова мова програмування, була створена для генерації HTML-сторінок на стороні веб-сервера. PHP є однією з найпоширеніших мов, що використовуються у сфері веб-розробок (разом із Java, .NET, Perl, Python, Ruby). PHP підтримується переважною більшістю хостинг-провайдерів. PHP — проект відкритого програмного забезпечення.\r\n\r\nPHP інтерпретується веб-сервером у HTML-код, який передається на сторону клієнта. На відміну від скриптової мови JavaScript, користувач не бачить PHP-коду, бо браузер отримує готовий html-код. Це є перевага з точки зору безпеки, але погіршує інтерактивність сторінок. Але ніщо не забороняє використовувати PHP для генерування і JavaScript-кодів які виконуються вже на стороні клієнта.');

-- --------------------------------------------------------

--
-- Структура таблицы `new_table`
--

CREATE TABLE IF NOT EXISTS `new_table` (
  `id` int(11) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `things` varchar(255) NOT NULL,
  `price_of_order` int(15) NOT NULL,
  `count` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `E-mail`, `address`, `things`, `price_of_order`, `count`) VALUES
(1, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(2, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(3, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(4, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(5, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(6, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(7, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(8, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(9, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(10, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1400, 3),
(12, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH', 1276, 3),
(13, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'Rolex Explorer', 2499, 2),
(19, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 2820, 0),
(20, 'Taras', 'taras2andry@mail.ru', 'Kalush', '', 2820, 0),
(21, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH,OMEGA CHRONOGRAPH', 2820, 0),
(22, 'Taras', 'taras2andry@mail.ru', 'Kalush', 'OMEGA CHRONOGRAPH,OMEGA CHRONOGRAPH,Explorer m2', 9860, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `sidebar_menu`
--

CREATE TABLE IF NOT EXISTS `sidebar_menu` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `sidebar_menu`
--

INSERT INTO `sidebar_menu` (`id`, `name`, `href`) VALUES
(1, 'Audemars Pique', '/index.php?mark=Audemars Pique'),
(2, 'Bretling', '/category.php?id=2'),
(3, 'Citizen', '/category.php?id=3'),
(4, 'Movavo', '/category.php?id=4'),
(19, 'Magnit', ''),
(22, 'Magnetto', ''),
(23, 'Kalvin', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visit_cart` varchar(255) NOT NULL,
  `status` varchar(22) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sales` int(25) NOT NULL,
  `price` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Login`, `Password`, `name`, `visit_cart`, `status`, `image`, `sales`, `price`) VALUES
(1, 'Hanter1', '1234sstr', 'Taras', 'Visa', 'active', 'images/ghi.jpeg', 4, 6000),
(2, 'Terry123', 'e669d9cd6115bc0810ae58bb0cd0604e', 'Taras', 'Master Cart', 'active', '', 0, 0),
(3, 'Terry123', 'e669d9cd6115bc0810ae58bb0cd0604e', 'Taras', 'Master Cart', 'active', '', 0, 0),
(4, 'Tarasgroupki', '8045dd14a13da621b69595be6923dc85', 'Тарас', 'Master Cart', 'active', '', 0, 0),
(5, 'Taras123', '1979add6f1632bfb470f4fbea5e833f1', 'Taras', 'Cart', 'active', '', 0, 0),
(6, 'Taras123', '1979add6f1632bfb470f4fbea5e833f1', 'Taras', 'Cart', 'active', 'images/no_image.jpg', 0, 0),
(7, 'Taras123', '81dc9bdb52d04dc20036dbd8313ed055', 'Taras1996', 'Visa', 'banned', 'images/ghi.jpeg', 0, 0),
(8, 'Taras', '1979add6f1632bfb470f4fbea5e833f1', 'Taras', 'Visa', 'active', 'images/ghi.jpeg', 0, 0),
(9, 'Tarasgroupki', '1979add6f1632bfb470f4fbea5e833f1', 'Taras', 'Visa', 'active', 'images/ghi.jpeg', 0, 0),
(10, 'Hanter2', '33a3192ba92b5a4803c9a9ed70ea5a9c', 'tfd', 'Visa', 'active', 'images/', 0, 0),
(11, 'Hanter2', '33a3192ba92b5a4803c9a9ed70ea5a9c', 'tfd', 'Visa', 'active', 'images/', 0, 0),
(12, 'Tye', '092f6730da5163c65854043707418425', 'Taras', 'Visa', 'active', 'images/Znachok.png', 0, 0),
(13, 'Tye', '092f6730da5163c65854043707418425', 'Taras', 'Visa', 'active', 'images/Znachok.png', 0, 0),
(14, 'Taras1996', '81dc9bdb52d04dc20036dbd8313ed055', 'Taras', 'Visa', 'banned', 'images/index.psd', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
