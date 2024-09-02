-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 21 2024 г., 00:28
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_tm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_tm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title_ru`, `title_en`, `title_tm`, `description_ru`, `description_en`, `description_tm`, `is_active`, `img`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; открытый</p>\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; глухой</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; open</p>\r\n<p>Bottom &ndash; closed</p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - a&ccedil;yk</p>\r\n<p>Aşakda - &yacute;apyk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-39.jpg', 0, '2024-08-16 11:10:07', '2024-08-18 12:42:12'),
(6, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\r\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\r\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\r\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; люк</p>\r\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; люк</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">filling</p>\r\n<p>Bottom &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">discharging spout </p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - a&ccedil;yk</p>\r\n<p>Aşakda - l&yacute;uk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-38.jpg', 1, '2024-08-16 11:10:07', '2024-08-18 12:36:59'),
(7, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\r\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\r\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\r\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; сборка(юбка)</p>\r\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; люк</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">skirt</p>\r\n<p>Bottom &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">discharging spout </p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - yubka</p>\r\n<p>Aşakda - l&yacute;uk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-37 (2).jpg', 2, '2024-08-16 11:10:07', '2024-08-18 12:36:23'),
(8, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\r\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\r\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\r\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; открытый</p>\r\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; люк</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; open</p>\r\n<p>Bottom &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">discharging spout </p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - a&ccedil;yk</p>\r\n<p>Aşakda - l&yacute;uk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-37.jpg', 2, '2024-08-16 11:10:07', '2024-08-18 12:39:18'),
(9, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\r\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\r\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\r\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; люк</p>\r\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; глухой</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; open</p>\r\n<p>Bottom &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">closed&nbsp;</p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - l&yacute;uk</p>\r\n<p>Aşakda - &yacute;apyk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-36.jpg', 5, '2024-08-16 11:10:07', '2024-08-18 12:40:37'),
(10, 'МКР (Биг Бэг)', 'SCD (Big Bag)', 'BUK (Big Bag)', '<p class=\"MsoNormal\">4 стропный &ndash; 30 см</p>\r\n<p class=\"MsoNormal\">Ширина &ndash; от 75 см </p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; 1,5%</p>\r\n<p class=\"MsoNormal\">Грузоподъёмность &ndash; от 1000 кг</p>\r\n<p class=\"MsoNormal\">Верх<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; сборка(юбка)</p>\r\n<p class=\"MsoNormal\">Низ<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\"> &ndash; глухой</p>', '<p>4 line &ndash; 30 cm</p>\r\n<p>Width &ndash; from 75 cm</p>\r\n<p>Density up to 200 g/m2</p>\r\n<p>UV &ndash; 1.5%</p>\r\n<p>Load capacity &ndash; from 1000 kg</p>\r\n<p>Top &ndash; skirt</p>\r\n<p>Bottom &ndash; <span lang=\"EN-US\" style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">closed&nbsp;</p>', '<p>4 setir - 30 sm</p>\r\n<p>Giňligi - 75 sm</p>\r\n<p>Dykyzlygy 200 g / m2 &ccedil;enli</p>\r\n<p>UV - 1,5%</p>\r\n<p>&Yacute;&uuml;k kuwwaty - 1000 kg-dan</p>\r\n<p>Topokarky - &yacute;ubka</p>\r\n<p>Aşakda - &yacute;apyk</p>', 1, 'http://nurplastik/storage/photos/1/photo_2024-07-29_10-54-35.jpg', 5, '2024-08-16 11:10:07', '2024-08-18 12:41:58'),
(11, 'Полипропиленовый рукав для МКР', 'Полипропиленовый рукав для МКР', 'Полипропиленовый рукав для МКР', '<p class=\"MsoNormal\">Фальцованный</p>\r\n<p class=\"MsoNormal\">Ширина от 80 см &ndash; 150 см</p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; от 1<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">% &ndash; 2<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">%</p>', '<p class=\"MsoNormal\">Фальцованный</p>\r\n<p class=\"MsoNormal\">Ширина от 80 см &ndash; 150 см</p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; от 1<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">% &ndash; 2<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">%</p>', '<p class=\"MsoNormal\">Фальцованный</p>\r\n<p class=\"MsoNormal\">Ширина от 80 см &ndash; 150 см</p>\r\n<p class=\"MsoNormal\">Плотность до 200 гр/м<sup>2</sup></p>\r\n<p class=\"MsoNormal\">УФ &ndash; от 1<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">% &ndash; 2<span lang=\"EN-US\" style=\"font-family: \'Times New Roman\',serif; mso-ansi-language: EN-US;\">%</p>', 1, 'http://nurplastik/storage/photos/1/7709a0654b7cfd65e2d92cc851fedc0b.jpg', 6, '2024-08-18 12:54:56', '2024-08-18 12:57:35'),
(12, 'Мешок полипропиленовый с полиэтиленовым вкладышем', 'Мешок полипропиленовый с полиэтиленовым вкладышем', 'Мешок полипропиленовый с полиэтиленовым вкладышем', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Вкладыш из ПНД, вшит в горловину мешка</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Вкладыш из ПНД, вшит в горловину мешка</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Вкладыш из ПНД, вшит в горловину мешка</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>', 1, 'http://nurplastik/storage/photos/1/dasdasdas-500x500.jpg', 6, '2024-08-18 12:54:56', '2024-08-18 13:10:38'),
(13, 'Полипропиленовое полотно', 'Полипропиленовое полотно', 'Полипропиленовое полотно', '<p>Ширина до 130 см</p>\r\n<p>Плотность до 200 гр/м2</p>\r\n<p>УФ &ndash; от 1% &ndash; 2%</p>\r\n<p>Ультразвуковая резка &ndash; сбоку, посередине</p>', '<p>Ширина до 130 см</p>\r\n<p>Плотность до 200 гр/м2</p>\r\n<p>УФ &ndash; от 1% &ndash; 2%</p>\r\n<p>Ультразвуковая резка &ndash; сбоку, посередине</p>', '<p>Ширина до 130 см</p>\r\n<p>Плотность до 200 гр/м2</p>\r\n<p>УФ &ndash; от 1% &ndash; 2%</p>\r\n<p>Ультразвуковая резка &ndash; сбоку, посередине</p>', 1, 'http://nurplastik/storage/photos/1/pp-fabric2.png', 6, '2024-08-18 12:54:56', '2024-08-18 13:06:20'),
(14, 'Полипропиленовый рукав', 'Полипропиленовое полотно', 'Полипропиленовый рукав', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Цвет &ndash; белый, с возможностью добавления полос разных цветов</p>', '<p>Ширина до 130 см</p>\r\n<p>Плотность до 200 гр/м2</p>\r\n<p>УФ &ndash; от 1% &ndash; 2%</p>\r\n<p>Ультразвуковая резка &ndash; сбоку, посередине</p>', '<p>Ширина до 130 см</p>\r\n<p>Плотность до 200 гр/м2</p>\r\n<p>УФ &ndash; от 1% &ndash; 2%</p>\r\n<p>Ультразвуковая резка &ndash; сбоку, посередине</p>', 1, 'http://nurplastik/storage/photos/1/beliy-polipropilenovyij-rukav-bez-laminaczii.jpg', 6, '2024-08-18 12:54:56', '2024-08-18 13:13:59'),
(15, 'Мешки полипропиленовые', 'Мешки полипропиленовые', 'Мешки полипропиленовые', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Цвет &ndash; белый, с возможностью добавления полос разных цветов</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>\r\n<p>Горловина &ndash; термообрез/подвернута и прошита</p>\r\n<p>Дно &ndash; двойной подгиб, одинарная строчка</p>', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Цвет &ndash; белый, с возможностью добавления полос разных цветов</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>\r\n<p>Горловина &ndash; термообрез/подвернута и прошита</p>\r\n<p>Дно &ndash; двойной подгиб, одинарная строчка</p>', '<p>Ширина от 35 см &ndash; 80 см</p>\r\n<p>Плотность от 45 гр/м2</p>\r\n<p>Цвет &ndash; белый, с возможностью добавления полос разных цветов</p>\r\n<p>Грузоподъёмность &ndash; от 25 кг</p>\r\n<p>Горловина &ndash; термообрез/подвернута и прошита</p>\r\n<p>Дно &ndash; двойной подгиб, одинарная строчка</p>', 1, 'http://nurplastik/storage/photos/1/meshki-polipropilenovie-50h90sm-belie_foto_largest.jpg', 6, '2024-08-18 12:54:56', '2024-08-18 13:18:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
