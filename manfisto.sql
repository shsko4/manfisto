-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 04:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manfisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manfisto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `penalty_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `recipt_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `model`, `manfisto_id`, `penalty_id`, `name`, `user_id`, `office_id`, `recipt_no`, `total`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'منفستو', 1, NULL, 'حسين خالد الحاج', 4, 1, '123', '95000.00', NULL, '2022-08-31 11:12:57', '2022-08-31 11:12:57'),
(2, 'منفستو', 4, NULL, 'السلام', 4, 1, '00123', '2850.00', NULL, '2022-08-31 12:07:34', '2022-08-31 12:07:34'),
(3, 'مخالفه', NULL, 1, 'عمر عبد الباقي حبيب', 4, 1, '11101', '200.00', NULL, '2022-08-31 12:09:33', '2022-08-31 12:09:33'),
(4, 'مخالفه', NULL, 2, 'صالح مختار سعد', 4, 1, '1234', '10000.00', NULL, '2022-09-01 09:45:51', '2022-09-01 09:45:51'),
(5, 'مخالفه', NULL, 3, 'حسين خالد الحاج', 4, 1, '124778', '21000.00', NULL, '2022-09-01 09:50:52', '2022-09-01 09:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `locality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `locality_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'الخرطوم بحرى', NULL, NULL, NULL),
(2, 1, 2, 'ام درمان', NULL, NULL, NULL),
(3, 1, 3, 'كرري', NULL, NULL, NULL),
(4, 1, 4, 'امبدة', NULL, NULL, NULL),
(5, 1, 5, 'شرق النيل', NULL, NULL, NULL),
(6, 1, 6, 'الخرطوم', NULL, NULL, NULL),
(7, 1, 7, 'سوبا', NULL, NULL, NULL),
(8, 1, 7, 'الكلاكلة', NULL, NULL, NULL),
(9, 2, 8, 'حلايب', NULL, NULL, NULL),
(10, 2, 9, 'بورتسودان', NULL, NULL, NULL),
(11, 2, 10, 'سنكات', NULL, NULL, NULL),
(12, 2, 11, 'سواكن', NULL, NULL, NULL),
(13, 2, 12, 'عقيق', NULL, NULL, NULL),
(14, 2, 13, 'هيا', NULL, NULL, NULL),
(15, 2, 14, 'درديب', NULL, NULL, NULL),
(16, 2, 15, 'القنب والاوليب', NULL, NULL, NULL),
(17, 2, 16, 'كلالايت', NULL, NULL, NULL),
(18, 2, 17, 'طوكر', NULL, NULL, NULL),
(19, 2, 18, 'جبيت المعادن', NULL, NULL, NULL),
(20, 3, 19, 'نهر عطبرة', NULL, NULL, NULL),
(21, 3, 20, 'كسلا', NULL, NULL, NULL),
(22, 3, 21, 'همشكوريب', NULL, NULL, NULL),
(23, 3, 22, 'ريفي كسلا', NULL, NULL, NULL),
(24, 3, 23, 'اروما', NULL, NULL, NULL),
(25, 3, 24, 'حمداييت', NULL, NULL, NULL),
(26, 3, 24, 'ودالحليو', NULL, NULL, NULL),
(27, 3, 25, 'تلكوك', NULL, NULL, NULL),
(28, 3, 26, 'حلفا الجديدة', NULL, NULL, NULL),
(29, 3, 27, 'القربة', NULL, NULL, NULL),
(30, 3, 28, 'غرب كسلا', NULL, NULL, NULL),
(31, 3, 29, 'شمال الدلتا', NULL, NULL, NULL),
(32, 4, 30, 'الفاو', NULL, NULL, NULL),
(33, 4, 31, 'الشواك', NULL, NULL, NULL),
(34, 4, 32, 'القضارف', NULL, NULL, NULL),
(35, 11, 93, 'الحواتة', NULL, NULL, NULL),
(36, 4, 33, 'الحواتة', NULL, NULL, NULL),
(37, 11, 93, 'الرهد', NULL, NULL, NULL),
(38, 4, 33, 'الرهد', NULL, NULL, NULL),
(39, 11, 93, 'بازورا', NULL, NULL, NULL),
(40, 4, 33, 'بازورا', NULL, NULL, NULL),
(41, 4, 34, 'ابو رخم', NULL, NULL, NULL),
(42, 4, 34, 'المفاوة', NULL, NULL, NULL),
(43, 4, 35, 'القلابات الغربية', NULL, NULL, NULL),
(44, 4, 35, 'باندغيو', NULL, NULL, NULL),
(45, 4, 35, 'ام الخير', NULL, NULL, NULL),
(46, 4, 35, 'الحوري', NULL, NULL, NULL),
(47, 4, 36, 'قلع النحل', NULL, NULL, NULL),
(48, 4, 37, 'الصباغ', NULL, NULL, NULL),
(49, 4, 38, 'باسندا', NULL, NULL, NULL),
(50, 4, 39, 'وسط القضارف', NULL, NULL, NULL),
(51, 4, 40, 'القلابات', NULL, NULL, NULL),
(52, 4, 41, 'القريشة', NULL, NULL, NULL),
(53, 5, 42, 'عبري', NULL, NULL, NULL),
(54, 5, 42, 'اشكيت', NULL, NULL, NULL),
(55, 5, 42, 'وادي حلفا', NULL, NULL, NULL),
(56, 5, 43, 'السليم', NULL, NULL, NULL),
(57, 5, 43, 'دنقلا', NULL, NULL, NULL),
(58, 5, 44, 'مروى', NULL, NULL, NULL),
(59, 5, 45, 'ارقو', NULL, NULL, NULL),
(60, 5, 45, 'كنار', NULL, NULL, NULL),
(61, 5, 45, 'البرقيق', NULL, NULL, NULL),
(62, 5, 45, 'كرمة', NULL, NULL, NULL),
(63, 5, 46, 'الغدار', NULL, NULL, NULL),
(64, 5, 46, 'القولد', NULL, NULL, NULL),
(65, 5, 47, 'الملتقي', NULL, NULL, NULL),
(66, 5, 47, 'الغابة', NULL, NULL, NULL),
(67, 5, 47, 'الدبة', NULL, NULL, NULL),
(68, 5, 48, 'الترعة', NULL, NULL, NULL),
(69, 5, 48, 'دلقو', NULL, NULL, NULL),
(70, 5, 49, 'كريمة', NULL, NULL, NULL),
(71, 6, 50, 'ابوحمد', NULL, NULL, NULL),
(72, 6, 51, 'بربر', NULL, NULL, NULL),
(73, 6, 52, 'الدامر', NULL, NULL, NULL),
(74, 6, 53, 'المتمه', NULL, NULL, NULL),
(75, 6, 54, 'البحيرة', NULL, NULL, NULL),
(76, 6, 55, 'عطبره', NULL, NULL, NULL),
(77, 6, 56, 'شندى', NULL, NULL, NULL),
(78, 7, 57, 'الجديد الثورة', NULL, NULL, NULL),
(79, 7, 57, 'الكاملين', NULL, NULL, NULL),
(80, 7, 58, 'رفاعة', NULL, NULL, NULL),
(81, 7, 58, 'تمبول', NULL, NULL, NULL),
(82, 7, 59, 'المناقل', NULL, NULL, NULL),
(83, 7, 60, 'مدنى', NULL, NULL, NULL),
(84, 7, 61, 'ام القري', NULL, NULL, NULL),
(85, 7, 62, 'العزازي', NULL, NULL, NULL),
(86, 7, 63, 'ابوقوتة', NULL, NULL, NULL),
(87, 7, 63, 'طابت', NULL, NULL, NULL),
(88, 7, 63, 'الحصاحيصا', NULL, NULL, NULL),
(89, 7, 64, 'الحاج عبدالله', NULL, NULL, NULL),
(90, 7, 64, 'المدينة عرب', NULL, NULL, NULL),
(91, 7, 64, 'الحوش', NULL, NULL, NULL),
(92, 8, 65, 'القطينة', NULL, NULL, NULL),
(93, 8, 66, 'كوستى', NULL, NULL, NULL),
(94, 8, 67, 'الجبلين', NULL, NULL, NULL),
(95, 8, 68, 'ام رمته', NULL, NULL, NULL),
(96, 8, 69, 'الدويم', NULL, NULL, NULL),
(97, 8, 70, 'تندلتى', NULL, NULL, NULL),
(98, 8, 71, 'ربك', NULL, NULL, NULL),
(99, 9, 72, 'سنجة', NULL, NULL, NULL),
(100, 9, 73, 'الدندر', NULL, NULL, NULL),
(101, 9, 74, 'شرق سنار', NULL, NULL, NULL),
(102, 9, 75, 'كركوج', NULL, NULL, NULL),
(103, 9, 75, 'السوكى', NULL, NULL, NULL),
(104, 9, 76, 'ود النيل', NULL, NULL, NULL),
(105, 9, 77, 'سنار', NULL, NULL, NULL),
(106, 9, 78, 'المزموم', NULL, NULL, NULL),
(107, 10, 79, 'النهود', NULL, NULL, NULL),
(108, 10, 80, 'السلام', NULL, NULL, NULL),
(109, 10, 81, 'غبيش', NULL, NULL, NULL),
(110, 10, 82, 'ابيي', NULL, NULL, NULL),
(111, 10, 82, 'الميرم', NULL, NULL, NULL),
(112, 10, 82, 'المجلد', NULL, NULL, NULL),
(113, 10, 83, 'بابنوسة', NULL, NULL, NULL),
(114, 10, 84, 'المفرية', NULL, NULL, NULL),
(115, 10, 84, 'الدودية', NULL, NULL, NULL),
(116, 10, 84, 'الخوي', NULL, NULL, NULL),
(117, 10, 85, 'الاضية', NULL, NULL, NULL),
(118, 10, 86, 'كيلك', NULL, NULL, NULL),
(119, 10, 86, 'ام عدارة', NULL, NULL, NULL),
(120, 10, 87, 'ام رسوم', NULL, NULL, NULL),
(121, 10, 88, 'ابو زبد', NULL, NULL, NULL),
(122, 10, 89, 'السلام', NULL, NULL, NULL),
(123, 11, 90, 'جبرة الشيخ', NULL, NULL, NULL),
(124, 11, 91, 'بارا', NULL, NULL, NULL),
(125, 11, 92, 'ام روابه', NULL, NULL, NULL),
(126, 11, 93, 'الرهد', NULL, NULL, NULL),
(127, 4, 33, 'الرهد', NULL, NULL, NULL),
(128, 11, 94, 'سودرى', NULL, NULL, NULL),
(129, 11, 95, 'ام دم حاج احمد', NULL, NULL, NULL),
(130, 11, 96, 'الابيض', NULL, NULL, NULL),
(131, 11, 97, 'غرب بارا', NULL, NULL, NULL),
(132, 12, 98, 'كادقلى', NULL, NULL, NULL),
(133, 12, 99, 'تلودى', NULL, NULL, NULL),
(134, 12, 100, 'رشاد', NULL, NULL, NULL),
(135, 12, 101, 'الدلنج', NULL, NULL, NULL),
(136, 12, 102, 'الدبيبات', NULL, NULL, NULL),
(137, 12, 103, 'دلامي', NULL, NULL, NULL),
(138, 12, 104, 'ام دورين', NULL, NULL, NULL),
(139, 12, 105, 'هيبان', NULL, NULL, NULL),
(140, 12, 106, 'العباسية', NULL, NULL, NULL),
(141, 12, 107, 'ابو نوارة', NULL, NULL, NULL),
(142, 12, 107, 'ابو جبيهة', NULL, NULL, NULL),
(143, 12, 108, 'ابو كرشولا', NULL, NULL, NULL),
(144, 12, 109, 'كلوقي', NULL, NULL, NULL),
(145, 12, 110, 'طوطاح ', NULL, NULL, NULL),
(146, 12, 111, 'الترتر', NULL, NULL, NULL),
(147, 17, 168, 'السلام', NULL, NULL, NULL),
(148, 12, 112, 'السلام', NULL, NULL, NULL),
(149, 12, 113, 'كرتالا', NULL, NULL, NULL),
(150, 12, 113, 'هبيلا', NULL, NULL, NULL),
(151, 12, 114, 'الشعير', NULL, NULL, NULL),
(152, 12, 114, 'برنو', NULL, NULL, NULL),
(153, 17, 176, 'كتم', NULL, NULL, NULL),
(154, 13, 115, 'كتم', NULL, NULL, NULL),
(155, 13, 116, 'ام كداده', NULL, NULL, NULL),
(156, 13, 117, 'مليط', NULL, NULL, NULL),
(157, 13, 118, 'جابر', NULL, NULL, NULL),
(158, 13, 118, 'عيال امين', NULL, NULL, NULL),
(159, 13, 118, 'بطاطا', NULL, NULL, NULL),
(160, 13, 118, 'ام ساعونة', NULL, NULL, NULL),
(161, 13, 118, 'حسكنيتة', NULL, NULL, NULL),
(162, 13, 118, 'اندراب', NULL, NULL, NULL),
(163, 13, 118, 'ابو سفيان', NULL, NULL, NULL),
(164, 13, 118, 'التوم بشارة', NULL, NULL, NULL),
(165, 13, 118, 'دليل بابكر', NULL, NULL, NULL),
(166, 13, 118, 'اللعيت', NULL, NULL, NULL),
(167, 13, 119, 'الطويشة', NULL, NULL, NULL),
(168, 13, 120, 'الطينة', NULL, NULL, NULL),
(169, 13, 121, 'ام برو', NULL, NULL, NULL),
(170, 13, 122, 'ودعة', NULL, NULL, NULL),
(171, 13, 123, 'الكومه', NULL, NULL, NULL),
(172, 13, 124, 'كورناي', NULL, NULL, NULL),
(173, 13, 125, 'الواحة', NULL, NULL, NULL),
(174, 13, 126, 'طويلة', NULL, NULL, NULL),
(175, 13, 127, 'المالحة', NULL, NULL, NULL),
(176, 13, 128, 'سرف عمره', NULL, NULL, NULL),
(177, 13, 129, 'الفاشر', NULL, NULL, NULL),
(178, 13, 130, 'كبكابية', NULL, NULL, NULL),
(179, 13, 131, 'السريف', NULL, NULL, NULL),
(180, 13, 132, 'دار السلام', NULL, NULL, NULL),
(181, 14, 133, 'الضعين', NULL, NULL, NULL),
(182, 14, 134, 'شعيرية', NULL, NULL, NULL),
(183, 14, 135, 'ابو مطارق', NULL, NULL, NULL),
(184, 14, 136, 'عسلاية', NULL, NULL, NULL),
(185, 14, 137, 'الفردوس', NULL, NULL, NULL),
(186, 14, 138, 'ياسين', NULL, NULL, NULL),
(187, 14, 139, 'ابو جابرة', NULL, NULL, NULL),
(188, 14, 140, 'عديلة', NULL, NULL, NULL),
(189, 14, 141, 'ابو كارنكا ', NULL, NULL, NULL),
(190, 15, 142, 'كلبس', NULL, NULL, NULL),
(191, 15, 143, 'هبيلا', NULL, NULL, NULL),
(192, 15, 144, 'سربا', NULL, NULL, NULL),
(193, 15, 145, 'كرينك', NULL, NULL, NULL),
(194, 15, 146, 'جبل مون', NULL, NULL, NULL),
(195, 15, 147, 'فور برنقا', NULL, NULL, NULL),
(196, 15, 148, 'مورني', NULL, NULL, NULL),
(197, 15, 149, 'بيضة', NULL, NULL, NULL),
(198, 15, 150, 'الجنينة', NULL, NULL, NULL),
(199, 16, 151, 'نرتتي', NULL, NULL, NULL),
(200, 16, 152, 'قارسلا', NULL, NULL, NULL),
(201, 16, 153, 'زالنجي', NULL, NULL, NULL),
(202, 16, 154, 'ام دخن', NULL, NULL, NULL),
(203, 16, 155, 'مكجر', NULL, NULL, NULL),
(204, 16, 156, 'أزوم', NULL, NULL, NULL),
(205, 16, 157, 'بندسي', NULL, NULL, NULL),
(206, 16, 158, 'روكورو', NULL, NULL, NULL),
(207, 16, 159, 'جبل مرة', NULL, NULL, NULL),
(208, 16, 160, 'وادي صالح', NULL, NULL, NULL),
(209, 17, 161, 'الردوم', NULL, NULL, NULL),
(210, 17, 162, 'نتيقا', NULL, NULL, NULL),
(211, 17, 163, 'شاطايا', NULL, NULL, NULL),
(212, 17, 164, 'السنطة', NULL, NULL, NULL),
(213, 17, 165, 'الوحدة', NULL, NULL, NULL),
(214, 17, 166, 'بليل', NULL, NULL, NULL),
(215, 17, 167, 'جوغانة', NULL, NULL, NULL),
(216, 17, 167, 'قريضة', NULL, NULL, NULL),
(217, 17, 168, 'السلام', NULL, NULL, NULL),
(218, 12, 112, 'السلام', NULL, NULL, NULL),
(219, 17, 169, 'كتيلا', NULL, NULL, NULL),
(220, 17, 169, 'خور شمام', NULL, NULL, NULL),
(221, 17, 170, 'برام', NULL, NULL, NULL),
(222, 17, 171, 'كاس', NULL, NULL, NULL),
(223, 17, 172, 'تلس', NULL, NULL, NULL),
(224, 17, 173, 'ام لباسة', NULL, NULL, NULL),
(225, 17, 173, 'ديري', NULL, NULL, NULL),
(226, 17, 173, 'كيم', NULL, NULL, NULL),
(227, 17, 173, 'ام زعيفة', NULL, NULL, NULL),
(228, 17, 173, 'عدالفرسان', NULL, NULL, NULL),
(229, 17, 174, 'نيالا ', NULL, NULL, NULL),
(230, 17, 175, 'طوال', NULL, NULL, NULL),
(231, 17, 176, 'كتم', NULL, NULL, NULL),
(232, 13, 115, 'كتم', NULL, NULL, NULL),
(233, 17, 177, 'الملم', NULL, NULL, NULL),
(234, 17, 178, 'ابو ري', NULL, NULL, NULL),
(235, 17, 178, 'رهيد البردي', NULL, NULL, NULL),
(236, 17, 179, 'نيالا', NULL, NULL, NULL),
(237, 17, 180, 'كبم', NULL, NULL, NULL),
(238, 17, 181, 'انتيكينا', NULL, NULL, NULL),
(239, 17, 182, 'ام دافوق', NULL, NULL, NULL),
(240, 17, 183, 'دمسو', NULL, NULL, NULL),
(241, 17, 184, 'مرشنج', NULL, NULL, NULL),
(242, 17, 185, 'نيالا ', NULL, NULL, NULL),
(243, 17, 186, 'ود هجام', NULL, NULL, NULL),
(244, 18, 187, 'التضامن', NULL, NULL, NULL),
(245, 18, 188, 'الروصيرص', NULL, NULL, NULL),
(246, 18, 189, 'الدمازين', NULL, NULL, NULL),
(247, 18, 190, 'قيسان', NULL, NULL, NULL),
(248, 18, 191, 'باو', NULL, NULL, NULL),
(249, 18, 192, 'الكرمك', '2022-08-31 08:13:53', NULL, '2022-08-31 08:13:53'),
(250, 18, 192, 'الكرمك', NULL, '2022-08-31 08:13:42', '2022-08-31 08:13:42'),
(251, 18, 192, 'الكرمك', '2022-08-31 08:15:39', '2022-08-31 08:15:27', '2022-08-31 08:15:39'),
(252, 18, 191, 'باو', '2022-08-31 08:20:09', '2022-08-31 08:17:14', '2022-08-31 08:20:09'),
(253, 2, 15, 'dd', '2022-08-31 08:20:20', '2022-08-31 08:19:10', '2022-08-31 08:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lds`
--

CREATE TABLE `lds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `localities`
--

CREATE TABLE `localities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `localities`
--

INSERT INTO `localities` (`id`, `state_id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'محلية بحري', NULL, NULL, NULL),
(2, 1, 'محلية أمدرمان', NULL, NULL, NULL),
(3, 1, 'محلية كرري', NULL, NULL, NULL),
(4, 1, 'محلية أمبدة', NULL, NULL, NULL),
(5, 1, 'محلية شرق النيل', NULL, NULL, NULL),
(6, 1, 'محلية الخرطوم', NULL, NULL, NULL),
(7, 1, 'محلية جبل أولياء', NULL, NULL, NULL),
(8, 2, 'محلية حلايب', NULL, NULL, NULL),
(9, 2, 'محلية بورتسودان', NULL, NULL, NULL),
(10, 2, 'محلية سنكات', NULL, NULL, NULL),
(11, 2, 'محلية سواكن', NULL, NULL, NULL),
(12, 2, 'محلية عقيق', NULL, NULL, NULL),
(13, 2, ' محلية هيا', NULL, NULL, NULL),
(14, 2, 'محلية درديب', NULL, NULL, NULL),
(15, 2, 'محلية القنب والاوليب', NULL, NULL, NULL),
(16, 2, 'محلية ريف البلك', NULL, NULL, NULL),
(17, 2, 'محلية طوكر', NULL, NULL, NULL),
(18, 2, 'محلية جبيت المعادن', NULL, NULL, NULL),
(19, 3, 'محلية نهر عطبرة', NULL, NULL, NULL),
(20, 3, 'محلية كسلا', NULL, NULL, NULL),
(21, 3, 'محلية همشكوريب', NULL, NULL, NULL),
(22, 3, 'محلية ريفي كسلا', NULL, NULL, NULL),
(23, 3, 'محلية اروما', NULL, NULL, NULL),
(24, 3, 'محلية ود الحليو', NULL, NULL, NULL),
(25, 3, 'محلية تلكوك', NULL, NULL, NULL),
(26, 3, 'محلية حلفا الجديدة', NULL, NULL, NULL),
(27, 3, 'محلية خشم القربة', NULL, NULL, NULL),
(28, 3, 'محلية غرب كسلا', NULL, NULL, NULL),
(29, 3, 'محلية شمال الدلتا', NULL, NULL, NULL),
(30, 4, 'محلية الفاو', NULL, NULL, NULL),
(31, 4, 'محلية الفشقة', NULL, NULL, NULL),
(32, 4, 'محلية بلدية القضارف', NULL, NULL, NULL),
(33, 4, 'محلية الرهد', NULL, NULL, NULL),
(34, 4, 'محلية المفازة', NULL, NULL, NULL),
(35, 4, 'محلية القلابات الغربية', NULL, NULL, NULL),
(36, 4, 'محلية قلع النحل', NULL, NULL, NULL),
(37, 4, 'محلية البطانة', NULL, NULL, NULL),
(38, 4, 'محلية باسندا', NULL, NULL, NULL),
(39, 4, 'محلية وسط القضارف', NULL, NULL, NULL),
(40, 4, 'محلية القلابات الشرقية', NULL, NULL, NULL),
(41, 4, 'محلية القريشة', NULL, NULL, NULL),
(42, 5, 'محلية وادي حلفا', NULL, NULL, NULL),
(43, 5, 'محلية دنقلا', NULL, NULL, NULL),
(44, 5, 'محلية مروي', NULL, NULL, NULL),
(45, 5, 'محلية البرقيق', NULL, NULL, NULL),
(46, 5, 'محلية القولد', NULL, NULL, NULL),
(47, 5, 'محلية الدبة', NULL, NULL, NULL),
(48, 5, 'محلية دلقو', NULL, NULL, NULL),
(49, 5, 'محلية كريمة', NULL, NULL, NULL),
(50, 6, 'محلية أبو حمد', NULL, NULL, NULL),
(51, 6, 'محلية بربر', NULL, NULL, NULL),
(52, 6, 'محلية الدامر', NULL, NULL, NULL),
(53, 6, 'محلية المتمة', NULL, NULL, NULL),
(54, 6, 'محلية البحيرة', NULL, NULL, NULL),
(55, 6, 'محلية عطبرة', NULL, NULL, NULL),
(56, 6, 'محلية شندي', NULL, NULL, NULL),
(57, 7, 'محلية الكاملين', NULL, NULL, NULL),
(58, 7, 'محلية شرق الجزيرة', NULL, NULL, NULL),
(59, 7, 'محلية المناقل', NULL, NULL, NULL),
(60, 7, 'محلية مدني الكبري', NULL, NULL, NULL),
(61, 7, 'محلية ام القرى', NULL, NULL, NULL),
(62, 7, 'محلية القرشي', NULL, NULL, NULL),
(63, 7, 'محلية الحصاحيصا', NULL, NULL, NULL),
(64, 7, 'محلية جنوب الجزيرة', NULL, NULL, NULL),
(65, 8, 'محلية القطينة', NULL, NULL, NULL),
(66, 8, 'محلية كوستي', NULL, NULL, NULL),
(67, 8, 'محلية الجبلين', NULL, NULL, NULL),
(68, 8, 'محلية ام رمته', NULL, NULL, NULL),
(69, 8, 'محلية الدويم', NULL, NULL, NULL),
(70, 8, 'محلية تندلتي', NULL, NULL, NULL),
(71, 8, 'محلية ربك', NULL, NULL, NULL),
(72, 9, 'محلية سنجة', NULL, NULL, NULL),
(73, 9, 'محلية الدندر', NULL, NULL, NULL),
(74, 9, 'محلية شرق سنار', NULL, NULL, NULL),
(75, 9, 'محلية السوكي', NULL, NULL, NULL),
(76, 9, 'محلية ابو حجار', NULL, NULL, NULL),
(77, 9, 'محلية سنار', NULL, NULL, NULL),
(78, 9, 'محلية الدالي والمزموم', NULL, NULL, NULL),
(79, 10, 'محلية النهود', NULL, NULL, NULL),
(80, 10, 'محلية الفولة', NULL, NULL, NULL),
(81, 10, 'محلية غبيش', NULL, NULL, NULL),
(82, 10, 'محلية ابيي', NULL, NULL, NULL),
(83, 10, ' محلية بابنوسة', NULL, NULL, NULL),
(84, 10, ' محلية الخوي', NULL, NULL, NULL),
(85, 10, 'محلية الاضية', NULL, NULL, NULL),
(86, 10, 'كيلك', NULL, NULL, NULL),
(87, 10, 'الشنوط', NULL, NULL, NULL),
(88, 10, 'محلية أبوزبد', NULL, NULL, NULL),
(89, 10, 'السلام ', NULL, NULL, NULL),
(90, 11, 'محلية جبرة الشيخ', NULL, NULL, NULL),
(91, 11, 'محلية بارا', NULL, NULL, NULL),
(92, 11, 'محلية أم روابة', NULL, NULL, NULL),
(93, 11, 'محلية الرهد', NULL, NULL, NULL),
(94, 11, 'محلية سودري', NULL, NULL, NULL),
(95, 11, 'محلية ام دم حاج احمد', NULL, NULL, NULL),
(96, 11, 'محلية شيكان', NULL, NULL, NULL),
(97, 11, 'محلية غرب بارا', NULL, NULL, NULL),
(98, 12, 'محلية كادقلي', NULL, NULL, NULL),
(99, 12, 'محلية تلودي', NULL, NULL, NULL),
(100, 12, 'محلية رشاد', NULL, NULL, NULL),
(101, 12, 'محلية الدلنج', NULL, NULL, NULL),
(102, 12, 'محلية القوز', NULL, NULL, NULL),
(103, 12, 'محلية دلامي', NULL, NULL, NULL),
(104, 12, 'محلية ام دورين', NULL, NULL, NULL),
(105, 12, 'محلية هيبان', NULL, NULL, NULL),
(106, 12, 'محلية العباسية', NULL, NULL, NULL),
(107, 12, 'ابو جبيهه', NULL, NULL, NULL),
(108, 12, 'ابو كرشولا', NULL, NULL, NULL),
(109, 12, 'كلوقي', NULL, NULL, NULL),
(110, 12, 'طوطاح', NULL, NULL, NULL),
(111, 12, 'التضامن', NULL, NULL, NULL),
(112, 12, 'محلية السلام', NULL, NULL, NULL),
(113, 12, 'محلية هبيلا', NULL, NULL, NULL),
(114, 12, 'محلية الريف الشرقي', NULL, NULL, NULL),
(115, 13, 'محلية كتم', NULL, NULL, NULL),
(116, 13, 'محلية ام كدادة', NULL, NULL, NULL),
(117, 13, 'محلية مليط', NULL, NULL, NULL),
(118, 13, 'محلية اللعيت', NULL, NULL, NULL),
(119, 13, 'محلية الطويشة', NULL, NULL, NULL),
(120, 13, 'محلية الطينة', NULL, NULL, NULL),
(121, 13, 'محلية ام برو', NULL, NULL, NULL),
(122, 13, 'محلية كلمندو', NULL, NULL, NULL),
(123, 13, 'محلية الكومة', NULL, NULL, NULL),
(124, 13, 'محلية كورناي', NULL, NULL, NULL),
(125, 13, 'محلية الواحة', NULL, NULL, NULL),
(126, 13, 'محلية طويلة', NULL, NULL, NULL),
(127, 13, 'محلية المالحة', NULL, NULL, NULL),
(128, 13, 'محلية سرف عمرة', NULL, NULL, NULL),
(129, 13, 'محلية الفاشر', NULL, NULL, NULL),
(130, 13, 'محلية كبكابية', NULL, NULL, NULL),
(131, 13, 'محلية السريف', NULL, NULL, NULL),
(132, 13, 'محلية دار السلام', NULL, NULL, NULL),
(133, 14, 'محلية الضعين', NULL, NULL, NULL),
(134, 14, 'محلية شعيرية', NULL, NULL, NULL),
(135, 14, 'محلية بحر العرب', NULL, NULL, NULL),
(136, 14, 'محلية عسلاية', NULL, NULL, NULL),
(137, 14, 'محلية الفردوس', NULL, NULL, NULL),
(138, 14, 'محلية ياسين', NULL, NULL, NULL),
(139, 14, 'محلية أبو جابرة', NULL, NULL, NULL),
(140, 14, 'محلية عديلة', NULL, NULL, NULL),
(141, 14, 'محلية أبو كارنكا', NULL, NULL, NULL),
(142, 15, 'محلية كلبس', NULL, NULL, NULL),
(143, 15, 'محلية هبيلة', NULL, NULL, NULL),
(144, 15, 'محلية سربا', NULL, NULL, NULL),
(145, 15, 'محلية كرينك', NULL, NULL, NULL),
(146, 15, 'محلية جبل مون', NULL, NULL, NULL),
(147, 15, 'محلية فور برنقا', NULL, NULL, NULL),
(148, 15, 'محلية مورني', NULL, NULL, NULL),
(149, 15, 'محلية بيضة', NULL, NULL, NULL),
(150, 15, 'محلية الجنينة', NULL, NULL, NULL),
(151, 16, 'محلية نرتتي', NULL, NULL, NULL),
(152, 16, 'قارسلا', NULL, NULL, NULL),
(153, 16, 'محلية زالنجي', NULL, NULL, NULL),
(154, 16, 'محلية أم دخن', NULL, NULL, NULL),
(155, 16, 'محلية مكجر', NULL, NULL, NULL),
(156, 16, 'محلية أزوم', NULL, NULL, NULL),
(157, 16, 'محلية بندسي', NULL, NULL, NULL),
(158, 16, 'محلية روكورو', NULL, NULL, NULL),
(159, 16, 'محلية جبل مرة', NULL, NULL, NULL),
(160, 16, 'محلية وادي صالح', NULL, NULL, NULL),
(161, 17, 'محلية الردوم', NULL, NULL, NULL),
(162, 17, 'محلية نتيقا', NULL, NULL, NULL),
(163, 17, 'محلية شاطايا', NULL, NULL, NULL),
(164, 17, 'محلية السنطة', NULL, NULL, NULL),
(165, 17, 'محلية الوحدة', NULL, NULL, NULL),
(166, 17, 'محلية بليل', NULL, NULL, NULL),
(167, 17, 'محلية قريضة', NULL, NULL, NULL),
(168, 17, 'محلية السلام', NULL, NULL, NULL),
(169, 17, 'محلية كتيلا', NULL, NULL, NULL),
(170, 17, 'محلية برام', NULL, NULL, NULL),
(171, 17, 'محلية كاس', NULL, NULL, NULL),
(172, 17, 'محلية تلس', NULL, NULL, NULL),
(173, 17, 'محلية عد الفرسان', NULL, NULL, NULL),
(174, 17, 'محلية نيالا شمال', NULL, NULL, NULL),
(175, 17, 'طوال', NULL, NULL, NULL),
(176, 17, 'محلية كتم', NULL, NULL, NULL),
(177, 17, 'محلية شرق الجبل', NULL, NULL, NULL),
(178, 17, 'محلية رهيد البردي', NULL, NULL, NULL),
(179, 17, 'محلية نيالا', NULL, NULL, NULL),
(180, 17, 'كبم', NULL, NULL, NULL),
(181, 17, 'انتكينا', NULL, NULL, NULL),
(182, 17, 'محلية أم دافوق', NULL, NULL, NULL),
(183, 17, 'محلية دمسو', NULL, NULL, NULL),
(184, 17, 'محلية مرشنج', NULL, NULL, NULL),
(185, 17, 'نيالا جنوب', NULL, NULL, NULL),
(186, 17, 'ود هجام', NULL, NULL, NULL),
(187, 18, 'محلية التضامن', NULL, NULL, NULL),
(188, 18, 'محلية الروصيرص', NULL, NULL, NULL),
(189, 18, 'محلية الدمازين', '2022-08-31 09:37:23', NULL, '2022-08-31 09:37:23'),
(190, 18, 'محلية قيسان', NULL, NULL, NULL),
(191, 18, 'محلية باو', NULL, NULL, NULL),
(192, 18, 'محلية الكرمك', '2022-08-31 09:03:17', NULL, '2022-08-31 09:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `manfistos`
--

CREATE TABLE `manfistos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `man_no` int(10) UNSIGNED NOT NULL,
  `transporter_id` bigint(20) UNSIGNED NOT NULL,
  `car_no` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nolon` decimal(8,2) NOT NULL,
  `vat` decimal(8,2) NOT NULL,
  `bpt` decimal(8,2) NOT NULL,
  `bpt2` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `recipt_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manfistos`
--

INSERT INTO `manfistos` (`id`, `man_no`, `transporter_id`, `car_no`, `dest`, `city_id`, `size`, `nolon`, `vat`, `bpt`, `bpt2`, `status`, `recipt_no`, `acc_user_id`, `user_id`, `office_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 213, 1, '533 خ', 'امدرمان', 1, '20 طن', '500000.00', '85000.00', '5000.00', '5000.00', 2, '123', 1, 1, 1, NULL, '2022-08-31 07:34:33', '2022-08-31 11:12:57'),
(2, 222, 2, '533 خ', 'بحري', 60, '25 طن', '30000.00', '5100.00', '300.00', '300.00', 1, NULL, 1, 2, 2, NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(3, 333, 3, '533 خ', 'الخرطوم', 66, '25 طن', '30000.00', '5100.00', '300.00', '300.00', 1, NULL, 1, 3, 3, NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(4, 223, 2, '10 ح ل', 'من الداخل', 9, NULL, '15000.00', '2550.00', '150.00', '150.00', 2, '00123', NULL, 1, 1, NULL, '2022-08-31 12:07:07', '2022-08-31 12:07:34'),
(5, 334, 3, '12', 'من الداخل', 9, NULL, '15000.00', '2550.00', '150.00', '150.00', 1, NULL, NULL, 5, 1, NULL, '2022-09-01 09:52:31', '2022-09-01 09:52:31'),
(6, 1, 148, '123', 'من الداخل', 19, NULL, '2000.00', '340.00', '20.00', '20.00', 1, NULL, NULL, 5, 1, NULL, '2022-09-01 10:46:45', '2022-09-01 10:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_31_150314_create_permission_tables', 1),
(6, '2022_08_01_154403_create_notifications_table', 1),
(7, '2022_08_02_103645_create_transporters_table', 1),
(8, '2022_08_04_105850_create_manfistos_table', 1),
(9, '2022_08_11_090402_create_offices_table', 1),
(10, '2022_08_13_112321_create_accounts_table', 1),
(11, '2022_08_16_064423_create_lds_table', 1),
(12, '2022_08_18_081913_create_penalty_types_table', 1),
(13, '2022_08_21_070923_create_penalty_owners_table', 1),
(14, '2022_08_21_092122_create_type_of_ids_table', 1),
(15, '2022_08_22_112020_create_penalties_table', 1),
(16, '2022_08_27_105008_create_states_table', 1),
(17, '2022_08_27_105604_create_localities_table', 1),
(18, '2022_08_27_105629_create_cities_table', 1),
(19, '2022_08_31_151740_create_q_r_s_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'نافذة امدرمان', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(2, 'نافذة بحري', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(3, 'نافذة الخرطوم', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penalties`
--

CREATE TABLE `penalties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penalty_owner_id` bigint(20) UNSIGNED NOT NULL,
  `penalty_type_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` decimal(8,2) NOT NULL DEFAULT 0.00,
  `penalty_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `stamp` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax3` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax4` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recipt_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penalties`
--

INSERT INTO `penalties` (`id`, `penalty_owner_id`, `penalty_type_id`, `location`, `car_no`, `vat`, `penalty_amount`, `stamp`, `tax3`, `tax4`, `total`, `note`, `recipt_no`, `status`, `user_id`, `office_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'السوق الشعبي امدرمان', NULL, '170.00', '20.00', '10.00', '0.00', '0.00', '200.00', 'عربة كارو', '11101', 2, 1, 1, NULL, '2022-08-31 07:34:35', '2022-08-31 12:09:33'),
(2, 2, 2, 'سوق ليبيا', NULL, '2000.00', '7000.00', '1000.00', '0.00', '0.00', '10000.00', 'حاول الهرب', '1234', 2, 1, 1, NULL, '2022-08-31 07:34:35', '2022-09-01 09:45:51'),
(3, 5, 1, 'الشعبي', '23 خ ب', '15000.00', '4000.00', '2000.00', '0.00', '0.00', '21000.00', NULL, '124778', 2, 5, 1, NULL, '2022-09-01 09:48:22', '2022-09-01 09:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `penalty_owners`
--

CREATE TABLE `penalty_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_id_id` bigint(20) UNSIGNED NOT NULL,
  `id_no` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penalty_owners`
--

INSERT INTO `penalty_owners` (`id`, `name`, `type_of_id_id`, `id_no`, `address`, `phone`, `office_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'عمر عبد الباقي حبيب', 1, '12045784561', 'الحتانة جنوب', '0910786474', 1, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(2, 'صالح مختار سعد', 2, 'P025024177', 'المناقل', '0911753691', 2, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(3, 'صهيب كرار علي احمد', 3, '1203214501', 'الكلاكلة اللفه', '0910857987', 3, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(4, 'ود رملي للنقل', 4, '110000000087', 'السوق الشعبي', '0118623410', 1, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(5, 'حسين خالد الحاج', 1, '11031110441', 'ee', '0912423521', 1, NULL, '2022-09-01 09:47:57', '2022-09-01 09:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `penalty_types`
--

CREATE TABLE `penalty_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penalty_types`
--

INSERT INTO `penalty_types` (`id`, `name`, `office_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'بدون فاتوره', 1, NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(2, 'فاقد ضريبي', 1, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(3, 'بدون إستيفاء', 1, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(4, 'بدون فاتوره', 2, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(5, 'فاقد ضريبي', 2, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(6, 'بدون إستيفاء', 2, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(7, 'بدون فاتوره', 3, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(8, 'فاقد ضريبي', 3, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(9, 'بدون إستيفاء', 3, NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'المستخدمين', 'web', '2022-08-31 07:34:26', '2022-08-31 07:34:26'),
(2, 'قائمة المستخدمين', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(3, 'صلاحيات المستخدمين', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(4, 'تصدير EXCEL', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(5, 'اضافة مستخدم', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(6, 'تعديل مستخدم', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(7, 'حذف مستخدم', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(8, 'عرض صلاحية', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(9, 'اضافة صلاحية', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(10, 'تعديل صلاحية', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(11, 'حذف صلاحية', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(12, 'الإشعارات', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(13, 'المرحلين', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(14, 'المنفستو', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(15, 'تقارير المنفستو', 'web', '2022-08-31 07:34:27', '2022-08-31 07:34:27'),
(16, 'المخالفات', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(17, 'تقارير المخالفات', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(18, 'تقارير الحسابات', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(19, 'اضافة مرحل', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(20, 'تعديل مرحل', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(21, 'حذف مرحل', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(22, 'عرض مرحل', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(23, 'اضافة منفستو', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(24, 'تعديل منفستو', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(25, 'حذف منفستو', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(26, 'عرض منفستو', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(27, 'نوع مخالفة', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(28, 'اضافة مخالفة', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(29, 'تعديل مخالفة', 'web', '2022-08-31 07:34:28', '2022-08-31 07:34:28'),
(30, 'حذف مخالفة', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(31, 'تسجيل مخالف', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(32, 'التقارير', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(33, 'الاعدادات', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(34, 'العمليات', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(35, 'المحليات', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(36, 'المدن', 'web', '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(37, 'محاسب', 'web', '2022-08-31 07:34:30', '2022-08-31 07:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `q_r_s`
--

CREATE TABLE `q_r_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qr` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `q_r_s`
--

INSERT INTO `q_r_s` (`id`, `qr`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Tax-Workshop-0001', NULL, NULL, NULL),
(2, 'Tax-Workshop-0002', NULL, NULL, NULL),
(3, 'Tax-Workshop-0003', NULL, NULL, NULL),
(4, 'Tax-Workshop-0004', NULL, NULL, NULL),
(5, 'Tax-Workshop-0005', NULL, NULL, NULL),
(6, 'Tax-Workshop-0006', NULL, NULL, NULL),
(7, 'Tax-Workshop-0007', NULL, NULL, NULL),
(8, 'Tax-Workshop-0008', NULL, NULL, NULL),
(9, 'Tax-Workshop-0009', NULL, NULL, NULL),
(10, 'Tax-Workshop-0010', NULL, NULL, NULL),
(11, 'Tax-Workshop-0011', NULL, NULL, NULL),
(12, 'Tax-Workshop-0012', NULL, NULL, NULL),
(13, 'Tax-Workshop-0013', NULL, NULL, NULL),
(14, 'Tax-Workshop-0014', NULL, NULL, NULL),
(15, 'Tax-Workshop-0015', NULL, NULL, NULL),
(16, 'Tax-Workshop-0016', NULL, NULL, NULL),
(17, 'Tax-Workshop-0017', NULL, NULL, NULL),
(18, 'Tax-Workshop-0018', NULL, NULL, NULL),
(19, 'Tax-Workshop-0019', NULL, NULL, NULL),
(20, 'Tax-Workshop-0020', NULL, NULL, NULL),
(21, 'Tax-Workshop-0021', NULL, NULL, NULL),
(22, 'Tax-Workshop-0022', NULL, NULL, NULL),
(23, 'Tax-Workshop-0023', NULL, NULL, NULL),
(24, 'Tax-Workshop-0024', NULL, NULL, NULL),
(25, 'Tax-Workshop-0025', NULL, NULL, NULL),
(26, 'Tax-Workshop-0026', NULL, NULL, NULL),
(27, 'Tax-Workshop-0027', NULL, NULL, NULL),
(28, 'Tax-Workshop-0028', NULL, NULL, NULL),
(29, 'Tax-Workshop-0029', NULL, NULL, NULL),
(30, 'Tax-Workshop-0030', NULL, NULL, NULL),
(31, 'Tax-Workshop-0031', NULL, NULL, NULL),
(32, 'Tax-Workshop-0032', NULL, NULL, NULL),
(33, 'Tax-Workshop-0033', NULL, NULL, NULL),
(34, 'Tax-Workshop-0034', NULL, NULL, NULL),
(35, 'Tax-Workshop-0035', NULL, NULL, NULL),
(36, 'Tax-Workshop-0036', NULL, NULL, NULL),
(37, 'Tax-Workshop-0037', NULL, NULL, NULL),
(38, 'Tax-Workshop-0038', NULL, NULL, NULL),
(39, 'Tax-Workshop-0039', NULL, NULL, NULL),
(40, 'Tax-Workshop-0040', NULL, NULL, NULL),
(41, 'Tax-Workshop-0041', NULL, NULL, NULL),
(42, 'Tax-Workshop-0042', NULL, NULL, NULL),
(43, 'Tax-Workshop-0043', NULL, NULL, NULL),
(44, 'Tax-Workshop-0044', NULL, NULL, NULL),
(45, 'Tax-Workshop-0045', NULL, NULL, NULL),
(46, 'Tax-Workshop-0046', NULL, NULL, NULL),
(47, 'Tax-Workshop-0047', NULL, NULL, NULL),
(48, 'Tax-Workshop-0048', NULL, NULL, NULL),
(49, 'Tax-Workshop-0049', NULL, NULL, NULL),
(50, 'Tax-Workshop-0050', NULL, NULL, NULL),
(51, 'Tax-Workshop-0051', NULL, NULL, NULL),
(52, 'Tax-Workshop-0052', NULL, NULL, NULL),
(53, 'Tax-Workshop-0053', NULL, NULL, NULL),
(54, 'Tax-Workshop-0054', NULL, NULL, NULL),
(55, 'Tax-Workshop-0055', NULL, NULL, NULL),
(56, 'Tax-Workshop-0056', NULL, NULL, NULL),
(57, 'Tax-Workshop-0057', NULL, NULL, NULL),
(58, 'Tax-Workshop-0058', NULL, NULL, NULL),
(59, 'Tax-Workshop-0059', NULL, NULL, NULL),
(60, 'Tax-Workshop-0060', NULL, NULL, NULL),
(61, 'Tax-Workshop-0061', NULL, NULL, NULL),
(62, 'Tax-Workshop-0062', NULL, NULL, NULL),
(63, 'Tax-Workshop-0063', NULL, NULL, NULL),
(64, 'Tax-Workshop-0064', NULL, NULL, NULL),
(65, 'Tax-Workshop-0065', NULL, NULL, NULL),
(66, 'Tax-Workshop-0066', NULL, NULL, NULL),
(67, 'Tax-Workshop-0067', NULL, NULL, NULL),
(68, 'Tax-Workshop-0068', NULL, NULL, NULL),
(69, 'Tax-Workshop-0069', NULL, NULL, NULL),
(70, 'Tax-Workshop-0070', NULL, NULL, NULL),
(71, 'Tax-Workshop-0071', NULL, NULL, NULL),
(72, 'Tax-Workshop-0072', NULL, NULL, NULL),
(73, 'Tax-Workshop-0073', NULL, NULL, NULL),
(74, 'Tax-Workshop-0074', NULL, NULL, NULL),
(75, 'Tax-Workshop-0075', NULL, NULL, NULL),
(76, 'Tax-Workshop-0076', NULL, NULL, NULL),
(77, 'Tax-Workshop-0077', NULL, NULL, NULL),
(78, 'Tax-Workshop-0078', NULL, NULL, NULL),
(79, 'Tax-Workshop-0079', NULL, NULL, NULL),
(80, 'Tax-Workshop-0080', NULL, NULL, NULL),
(81, 'Tax-Workshop-0081', NULL, NULL, NULL),
(82, 'Tax-Workshop-0082', NULL, NULL, NULL),
(83, 'Tax-Workshop-0083', NULL, NULL, NULL),
(84, 'Tax-Workshop-0084', NULL, NULL, NULL),
(85, 'Tax-Workshop-0085', NULL, NULL, NULL),
(86, 'Tax-Workshop-0086', NULL, NULL, NULL),
(87, 'Tax-Workshop-0087', NULL, NULL, NULL),
(88, 'Tax-Workshop-0088', NULL, NULL, NULL),
(89, 'Tax-Workshop-0089', NULL, NULL, NULL),
(90, 'Tax-Workshop-0090', NULL, NULL, NULL),
(91, 'Tax-Workshop-0091', NULL, NULL, NULL),
(92, 'Tax-Workshop-0092', NULL, NULL, NULL),
(93, 'Tax-Workshop-0093', NULL, NULL, NULL),
(94, 'Tax-Workshop-0094', NULL, NULL, NULL),
(95, 'Tax-Workshop-0095', NULL, NULL, NULL),
(96, 'Tax-Workshop-0096', NULL, NULL, NULL),
(97, 'Tax-Workshop-0097', NULL, NULL, NULL),
(98, 'Tax-Workshop-0098', NULL, NULL, NULL),
(99, 'Tax-Workshop-0099', NULL, NULL, NULL),
(100, 'Tax-Workshop-0100', NULL, NULL, NULL),
(101, 'Tax-Workshop-0101', NULL, NULL, NULL),
(102, 'Tax-Workshop-0102', NULL, NULL, NULL),
(103, 'Tax-Workshop-0103', NULL, NULL, NULL),
(104, 'Tax-Workshop-0104', NULL, NULL, NULL),
(105, 'Tax-Workshop-0105', NULL, NULL, NULL),
(106, 'Tax-Workshop-0106', NULL, NULL, NULL),
(107, 'Tax-Workshop-0107', NULL, NULL, NULL),
(108, 'Tax-Workshop-0108', NULL, NULL, NULL),
(109, 'Tax-Workshop-0109', NULL, NULL, NULL),
(110, 'Tax-Workshop-0110', NULL, NULL, NULL),
(111, 'Tax-Workshop-0111', NULL, NULL, NULL),
(112, 'Tax-Workshop-0112', NULL, NULL, NULL),
(113, 'Tax-Workshop-0113', NULL, NULL, NULL),
(114, 'Tax-Workshop-0114', NULL, NULL, NULL),
(115, 'Tax-Workshop-0115', NULL, NULL, NULL),
(116, 'Tax-Workshop-0116', NULL, NULL, NULL),
(117, 'Tax-Workshop-0117', NULL, NULL, NULL),
(118, 'Tax-Workshop-0118', NULL, NULL, NULL),
(119, 'Tax-Workshop-0119', NULL, NULL, NULL),
(120, 'Tax-Workshop-0120', NULL, NULL, NULL),
(121, 'Tax-Workshop-0121', NULL, NULL, NULL),
(122, 'Tax-Workshop-0122', NULL, NULL, NULL),
(123, 'Tax-Workshop-0123', NULL, NULL, NULL),
(124, 'Tax-Workshop-0124', NULL, NULL, NULL),
(125, 'Tax-Workshop-0125', NULL, NULL, NULL),
(126, 'Tax-Workshop-0126', NULL, NULL, NULL),
(127, 'Tax-Workshop-0127', NULL, NULL, NULL),
(128, 'Tax-Workshop-0128', NULL, NULL, NULL),
(129, 'Tax-Workshop-0129', NULL, NULL, NULL),
(130, 'Tax-Workshop-0130', NULL, NULL, NULL),
(131, 'Tax-Workshop-0131', NULL, NULL, NULL),
(132, 'Tax-Workshop-0132', NULL, NULL, NULL),
(133, 'Tax-Workshop-0133', NULL, NULL, NULL),
(134, 'Tax-Workshop-0134', NULL, NULL, NULL),
(135, 'Tax-Workshop-0135', NULL, NULL, NULL),
(136, 'Tax-Workshop-0136', NULL, NULL, NULL),
(137, 'Tax-Workshop-0137', NULL, NULL, NULL),
(138, 'Tax-Workshop-0138', NULL, NULL, NULL),
(139, 'Tax-Workshop-0139', NULL, NULL, NULL),
(140, 'Tax-Workshop-0140', NULL, NULL, NULL),
(141, 'Tax-Workshop-0141', NULL, NULL, NULL),
(142, 'Tax-Workshop-0142', NULL, NULL, NULL),
(143, 'Tax-Workshop-0143', NULL, NULL, NULL),
(144, 'Tax-Workshop-0144', NULL, NULL, NULL),
(145, 'Tax-Workshop-0145', NULL, NULL, NULL),
(146, 'Tax-Workshop-0146', NULL, NULL, NULL),
(147, 'Tax-Workshop-0147', NULL, NULL, NULL),
(148, 'Tax-Workshop-0148', NULL, NULL, NULL),
(149, 'Tax-Workshop-0149', NULL, NULL, NULL),
(150, 'Tax-Workshop-0150', NULL, NULL, NULL),
(151, 'Tax-Workshop-0151', NULL, NULL, NULL),
(152, 'Tax-Workshop-0152', NULL, NULL, NULL),
(153, 'Tax-Workshop-0153', NULL, NULL, NULL),
(154, 'Tax-Workshop-0154', NULL, NULL, NULL),
(155, 'Tax-Workshop-0155', NULL, NULL, NULL),
(156, 'Tax-Workshop-0156', NULL, NULL, NULL),
(157, 'Tax-Workshop-0157', NULL, NULL, NULL),
(158, 'Tax-Workshop-0158', NULL, NULL, NULL),
(159, 'Tax-Workshop-0159', NULL, NULL, NULL),
(160, 'Tax-Workshop-0160', NULL, NULL, NULL),
(161, 'Tax-Workshop-0161', NULL, NULL, NULL),
(162, 'Tax-Workshop-0162', NULL, NULL, NULL),
(163, 'Tax-Workshop-0163', NULL, NULL, NULL),
(164, 'Tax-Workshop-0164', NULL, NULL, NULL),
(165, 'Tax-Workshop-0165', NULL, NULL, NULL),
(166, 'Tax-Workshop-0166', NULL, NULL, NULL),
(167, 'Tax-Workshop-0167', NULL, NULL, NULL),
(168, 'Tax-Workshop-0168', NULL, NULL, NULL),
(169, 'Tax-Workshop-0169', NULL, NULL, NULL),
(170, 'Tax-Workshop-0170', NULL, NULL, NULL),
(171, 'Tax-Workshop-0171', NULL, NULL, NULL),
(172, 'Tax-Workshop-0172', NULL, NULL, NULL),
(173, 'Tax-Workshop-0173', NULL, NULL, NULL),
(174, 'Tax-Workshop-0174', NULL, NULL, NULL),
(175, 'Tax-Workshop-0175', NULL, NULL, NULL),
(176, 'Tax-Workshop-0176', NULL, NULL, NULL),
(177, 'Tax-Workshop-0177', NULL, NULL, NULL),
(178, 'Tax-Workshop-0178', NULL, NULL, NULL),
(179, 'Tax-Workshop-0179', NULL, NULL, NULL),
(180, 'Tax-Workshop-0180', NULL, NULL, NULL),
(181, 'Tax-Workshop-0181', NULL, NULL, NULL),
(182, 'Tax-Workshop-0182', NULL, NULL, NULL),
(183, 'Tax-Workshop-0183', NULL, NULL, NULL),
(184, 'Tax-Workshop-0184', NULL, NULL, NULL),
(185, 'Tax-Workshop-0185', NULL, NULL, NULL),
(186, 'Tax-Workshop-0186', NULL, NULL, NULL),
(187, 'Tax-Workshop-0187', NULL, NULL, NULL),
(188, 'Tax-Workshop-0188', NULL, NULL, NULL),
(189, 'Tax-Workshop-0189', NULL, NULL, NULL),
(190, 'Tax-Workshop-0190', NULL, NULL, NULL),
(191, 'Tax-Workshop-0191', NULL, NULL, NULL),
(192, 'Tax-Workshop-0192', NULL, NULL, NULL),
(193, 'Tax-Workshop-0193', NULL, NULL, NULL),
(194, 'Tax-Workshop-0194', NULL, NULL, NULL),
(195, 'Tax-Workshop-0195', NULL, NULL, NULL),
(196, 'Tax-Workshop-0196', NULL, NULL, NULL),
(197, 'Tax-Workshop-0197', NULL, NULL, NULL),
(198, 'Tax-Workshop-0198', NULL, NULL, NULL),
(199, 'Tax-Workshop-0199', NULL, NULL, NULL),
(200, 'Tax-Workshop-0200', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'web', '2022-08-31 07:34:30', '2022-08-31 07:34:30'),
(2, 'accountant', 'web', '2022-08-31 07:34:30', '2022-08-31 07:34:30'),
(3, 'مفتش', 'web', '2022-08-31 07:34:30', '2022-08-31 07:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 2),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 2),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 2);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ولاية الخرطوم', NULL, NULL, NULL),
(2, 'ولاية البحر الاحمر', NULL, NULL, NULL),
(3, 'ولاية كسلا', NULL, NULL, NULL),
(4, 'ولاية القضارف', NULL, NULL, NULL),
(5, 'ولاية الشمالية', NULL, NULL, NULL),
(6, 'ولاية نهر النيل', NULL, NULL, NULL),
(7, 'ولاية الجزيرة', NULL, NULL, NULL),
(8, 'ولاية النيل الابيض', NULL, NULL, NULL),
(9, 'ولاية سنار', NULL, NULL, NULL),
(10, 'ولاية غرب كردفان', NULL, NULL, NULL),
(11, 'ولاية شمال كردفان', NULL, NULL, NULL),
(12, 'ولاية جنوب كردفان', NULL, NULL, NULL),
(13, 'ولاية شمال دارفور', NULL, NULL, NULL),
(14, 'ولاية شرق دارفور', NULL, NULL, NULL),
(15, 'ولاية غرب دارفور', NULL, NULL, NULL),
(16, 'ولاية وسط دارفور', NULL, NULL, NULL),
(17, 'ولاية جنوب دارفور', NULL, NULL, NULL),
(18, 'ولاية النيل الازرق', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tin` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`id`, `tin`, `name`, `phone`, `email`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '110000000011', 'حسين خالد الحاج', '0910786474', 'shsko4@gmail.com', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(2, '110000000087', 'السلام', '0910786474', 'shsko4@gmail.com', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(3, '300000000002', 'أولاد نميجة', '0910786474', 'shsko4@gmail.com', NULL, '2022-08-31 07:34:33', '2022-08-31 07:34:33'),
(4, '300000012697', 'اعمال بقل للترحيلات', '249-0912129136-', NULL, NULL, NULL, NULL),
(5, '300000473946', 'ترحيلات أوقر', '249-128912254-', NULL, NULL, NULL, NULL),
(6, '300000449446', 'ابن عيسى للترحيلات', '249-09124326167-', 'osman.essa11@gmail.com', NULL, NULL, NULL),
(7, '300000459662', 'ترحيلات النخوة', '249-915615128-', NULL, NULL, NULL, NULL),
(8, '300000440691', 'اعمال خاطر محمود نيل للتجارة والترحيل', '249-0999836164-', NULL, NULL, NULL, NULL),
(9, '300000457182', 'ترحيلات فى كل خطوة سلامة', '249-912391147-', NULL, NULL, NULL, NULL),
(10, '110004203200', 'شركة انكرينجو للنقل و الترحيل المحدودة', '912330651', NULL, NULL, NULL, NULL),
(11, '110000001900', 'شركة الجبيرة للترحيلات والاستثمار المحدوده', '249-912920198-', NULL, NULL, NULL, NULL),
(12, '110004644900', 'المجازون للتسويق والترحيل', '249-999999999-', NULL, NULL, NULL, NULL),
(13, '110012222800', 'شركة ام . اس . ال . للتجارة والمقاولات والترحيل المحدودة', '912230660', NULL, NULL, NULL, NULL),
(14, '300000458163', 'مكتب ود احمد للترحيلات', '249-0912698859-', NULL, NULL, NULL, NULL),
(15, '300000442505', 'ميشن للترحيلات', '249-128155849-', NULL, NULL, NULL, NULL),
(16, '300000437520', 'ترحيلات ابو عبد الرحمن للنقل البرى', '249-0912645126-', NULL, NULL, NULL, NULL),
(17, '110005041300', 'شركة بولي للترحيلات المحدودة', '249-183778511-', NULL, NULL, NULL, NULL),
(18, '300000440635', 'المعراج للترحيلات', '249-012358218-', NULL, NULL, NULL, NULL),
(19, '300000830571', 'ترحيلات ود الشكري', '249-912461241-', NULL, NULL, NULL, NULL),
(20, '300000787779', 'ترحيلات ابو عبد العزيز', '249-998877030-', NULL, NULL, NULL, NULL),
(21, '300000454022', 'ترحيلات اليورو للنقل', '249-0912287501-', NULL, NULL, NULL, NULL),
(22, '300000772655', 'اعمال عماد خميس للتجارة والترحيل', '249-912345140-', NULL, NULL, NULL, NULL),
(23, '300000793430', 'اعمال بلو بيرد للترحيلات', '249-912252011-', NULL, NULL, NULL, NULL),
(24, '300000450481', 'اعمال ابو جاسم للترحيل', '249-0912417714-', NULL, NULL, NULL, NULL),
(25, '300000830293', 'ترحيلات ايفان', '249-916445102-', NULL, NULL, NULL, NULL),
(26, '110004080500', 'شركة ملياس للترحيلات المحدوده', '999999999', '471453', NULL, NULL, NULL),
(27, '300000621269', 'ترحيلات المراد ويسين', '249-917194444-', NULL, NULL, NULL, NULL),
(28, '300000612766', 'ترحيلات اولاد خيري', '249-918183771-', NULL, NULL, NULL, NULL),
(29, '300000622701', 'ترحيلات عبدالعظيم كمال الدين', '249-0912326383-', NULL, NULL, NULL, NULL),
(30, '300000607077', 'ترحيلات عبد القادر عبد الرازق عبد القادر بانقا', '249-912429958-', NULL, NULL, NULL, NULL),
(31, '300000609942', 'ترحيلات ابراهيم زوزو', '249-915888547-', NULL, NULL, NULL, NULL),
(32, '300000610273', 'ترحيلات نسايم', '249-123893409-', NULL, NULL, NULL, NULL),
(33, '300000620724', 'الجودة كلاس للترحيلات', '249-912354671-', NULL, NULL, NULL, NULL),
(34, '300000610074', 'المشد للتجارة و الترحيل', '249-912384497-', NULL, NULL, NULL, NULL),
(35, '300000606971', 'ترحيلات ود السكر', '249-912363278-', NULL, NULL, NULL, NULL),
(36, '300000613591', 'يسن طه بابكر لخدمات الترحيلات', '249-918151178-', NULL, NULL, NULL, NULL),
(37, '300000658202', 'اباى للترحيلات', '249-0969060620-', NULL, NULL, NULL, NULL),
(38, '110010098900', 'شركة برايمر للتغليف و الترحيل المحدوده', '999999999', NULL, NULL, NULL, NULL),
(39, '300000659423', 'اعمال تالية للترحيلات', '249-0911302719-', NULL, NULL, NULL, NULL),
(40, '110004239500', 'شركة سيدو للترحيل و الخدمات', '912377481', NULL, NULL, NULL, NULL),
(41, '300000660959', 'المتحدة للترحيلات', '249-0123990999-', 'kerma97@yahoo.com', NULL, NULL, NULL),
(42, '110005448400', 'تراجد للتسويق والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(43, '300000666334', 'ترحيلات ابومروة', '249-915122994-', NULL, NULL, NULL, NULL),
(44, '300000666163', 'ابوانس للترحيلات', '249-912788075-', NULL, NULL, NULL, NULL),
(45, '300000664502', 'البنا العظيم للترحيلات', '249-912411650-', NULL, NULL, NULL, NULL),
(46, '300000641326', 'ترحيلات الميرغني', '249-912362396-', NULL, NULL, NULL, NULL),
(47, '110005335900', 'كهلان للتجارة والاستثمار والترحيل', '2147483647', NULL, NULL, NULL, NULL),
(48, '300000639828', 'اعمال طارق عبدالله للترحيلات', '249-0912614710-', NULL, NULL, NULL, NULL),
(49, '300000655719', 'هوادج للترحيل', '249-964244393-', 'hmadebusnass@gmail.com', NULL, NULL, NULL),
(50, '300000655257', 'شمس ارض النيل للترحيل', '249-124444979-', NULL, NULL, NULL, NULL),
(51, '300000655974', 'ترحيلات ابو على وروان', '249-0121588766-', NULL, NULL, NULL, NULL),
(52, '110004190800', 'شركة عبد الشكور للترحيل و الخدمات المحدودة', '249-918238631-', 'shakoor198@gmail.com', NULL, NULL, NULL),
(53, '300000458071', 'ترحيلات هاشم الزعيم', '249-901708666-', NULL, NULL, NULL, NULL),
(54, '300000473165', 'مكتب ترحيلات الصديق البشري علي للبضائع', '249-904325100-', NULL, NULL, NULL, NULL),
(55, '110004439800', 'سلطان لنقل والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(56, '300000537899', 'ترحيلات مهدى ادم الشريف', '249-912282699-', NULL, NULL, NULL, NULL),
(57, '300000529953', 'ترحيلات ذاندا المميز', '249-0915065193-', NULL, NULL, NULL, NULL),
(58, '300000537036', 'ترحيلات اي تي ترانس', '249-912947148-', NULL, NULL, NULL, NULL),
(59, '300000531117', 'انفيستر للترحيل', '249-0121000100-', 'alesbah_co.ltd@yahoo.com', NULL, NULL, NULL),
(60, '300000530759', 'عبد الله عبادي للترحيلات', '249-0911243830-', NULL, NULL, NULL, NULL),
(61, '300000536586', 'ضفاف الشمال للترحيل', '249-915513530-', NULL, NULL, NULL, NULL),
(62, '300000443448', 'اسمار للنقل والترحيل', '249-0912381557-', NULL, NULL, NULL, NULL),
(63, '300000529198', 'ترحيلات الساجدين', '249-0912375155-', NULL, NULL, NULL, NULL),
(64, '300000537023', 'درباب للترحيلات', '249-912839094-', NULL, NULL, NULL, NULL),
(65, '300000444181', 'ترحيلات السيال', '249-0122185223-', NULL, NULL, NULL, NULL),
(66, '300000541241', 'تساهيل للترحيلات', '249-912677337-', NULL, NULL, NULL, NULL),
(67, '110004344200', 'شركة ترحيلات العوض المحدودة', '999999999', NULL, NULL, NULL, NULL),
(68, '300000542235', 'ترحيلات ياسر حبيب', '249-912623364-', NULL, NULL, NULL, NULL),
(69, '110005592100', 'شركة غريب للنقل والترحيل المحدودة', '249-311824183-', NULL, NULL, NULL, NULL),
(70, '300000544187', 'اعمال سلطان عمر بابكر للترحيلات', '249-0912954667-', NULL, NULL, NULL, NULL),
(71, '300000540337', 'نهال ونضال للترحيلات', '249-0912246005-', NULL, NULL, NULL, NULL),
(72, '300000542911', 'سلسبيل للترحيلات', '249-0123219248-', NULL, NULL, NULL, NULL),
(73, '300000475936', 'اعمال ابو ميسون للترحيلات', '249-910298887-', NULL, NULL, NULL, NULL),
(74, '300000545829', 'ترحيلات ابوعابدين', '249-912638953-', NULL, NULL, NULL, NULL),
(75, '300000544026', 'اونتى للترحيلات', '249-0912122113-', NULL, NULL, NULL, NULL),
(76, '300000449566', 'السريع للترحيلات', '249-0123392604-', NULL, NULL, NULL, NULL),
(77, '300000539651', 'ابو مزن الجديد للترحيلات', '249-915869199-', NULL, NULL, NULL, NULL),
(78, '300000540431', 'ود الصول للترحيلات', '249-0927490597-', NULL, NULL, NULL, NULL),
(79, '300000574629', 'الشهب الحديث للترحيل', '249-918241713-', NULL, NULL, NULL, NULL),
(80, '110005615800', 'الشركة الافريقيه للملاحة والترحيل', '249-311785997-', 'African@Sudanmail.net', NULL, NULL, NULL),
(81, '300000576647', 'ابومؤمن للترحيلات', '249-912663341-', 'Abbas5050@gmail.com', NULL, NULL, NULL),
(82, '300000580321', 'ترحيلات كميل', '249-0911279965-', NULL, NULL, NULL, NULL),
(83, '300000580439', 'مرسكو للترحيلات', '249-0912122509-', NULL, NULL, NULL, NULL),
(84, '300000455228', 'ترحيلات أبوالسيد', '249-918558534-', NULL, NULL, NULL, NULL),
(85, '300000579383', 'اعمال الطرفه للنقل والترحيل', '249-0123083213-', NULL, NULL, NULL, NULL),
(86, '300000574195', 'دعاء المستخر للترحيلات', '249-912375964-', NULL, NULL, NULL, NULL),
(87, '300000581688', 'اعمال  ابوعادل للترحيلات', '249-011107331-', NULL, NULL, NULL, NULL),
(88, '300000580426', 'خالد كلفان للترحيلات', '249-0912866127-', NULL, NULL, NULL, NULL),
(89, '300000463893', 'مندرى للترحيل', '249-912182481-', NULL, NULL, NULL, NULL),
(90, '300000575097', 'الركابى للترحيلات', '249-912615789-', 'BaDERELDEEN5O@miaL.com', NULL, NULL, NULL),
(91, '300000572363', 'اعمال البادرى للتقل والترحيل', '249-0125952222-', NULL, NULL, NULL, NULL),
(92, '300000573783', 'جلال للترحيلات', '249-0123258440-', NULL, NULL, NULL, NULL),
(93, '110011885200', 'هاشم مالك واخوانه للتجارة والترحيل والاستثمار المحدودة', '999999999', NULL, NULL, NULL, NULL),
(94, '110010036600', 'الثقفي للتسويق والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(95, '300000578599', 'ترحيلات الايمان الاسلامية', '249-912477067-', NULL, NULL, NULL, NULL),
(96, '110005462300', 'الكافاب للتسويق والترحيلات', '912251141', NULL, NULL, NULL, NULL),
(97, '300000841860', 'ترحيلات ود ارباب', '249-912877262-', NULL, NULL, NULL, NULL),
(98, '300000833407', 'ابو راني لخدمات الترحيلات', '249-0122948697-', NULL, NULL, NULL, NULL),
(99, '110004884100', 'شركة باتروس للتسويق والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(100, '300000779754', 'عبد الله عباس محمد للترحيلات', '249-0912317494-', 'abballaabas@yahoo.com', NULL, NULL, NULL),
(101, '130013669001', 'اعمال خيرالزاد للترحيلات', '912411446', NULL, NULL, NULL, NULL),
(102, '110004614800', 'شركة الشيماء للتسويق والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(103, '300000744147', 'ترحيلات حسان حمد', '249-912371566-', NULL, NULL, NULL, NULL),
(104, '300000462792', 'ترحيلات الفتى الهولندي', '249-912155432-', NULL, NULL, NULL, NULL),
(105, '300000784675', 'ترحيلات الغرة', '249-0123242567-', NULL, NULL, NULL, NULL),
(106, '120018074101', 'ترحيلات الصداقة العالمية', '999999999', NULL, NULL, NULL, NULL),
(107, '300000848439', 'جيزان للترحيل', '249-968080809-', NULL, NULL, NULL, NULL),
(108, '130015005801', 'جافيدان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(109, '130014186701', 'عهد  اكسبريس للترحيل', '999999999', NULL, NULL, NULL, NULL),
(110, '130016440401', 'النواجد للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(111, '110004681600', 'شركة طرانقه للتسويق والترحيل المحدوده', '999999999', NULL, NULL, NULL, NULL),
(112, '300000845588', 'زورينا للترحيلات', '249-912181437-', NULL, NULL, NULL, NULL),
(113, '110005013300', 'شركة البانذير  للترحيلات ولتسويق المحدودة', '999999999', NULL, NULL, NULL, NULL),
(114, '300000442214', 'ترحيلات أف حارين', '249-923109510-', NULL, NULL, NULL, NULL),
(115, '110004689300', 'شركة الروضة والسامر للتسويق والترحيلات المحدودة', '999999999', NULL, NULL, NULL, NULL),
(116, '110015142600', 'شركه جي ام اس للملاحة والترحيلات المحدودة', '912822177', 'jmssfco@gmail.com', NULL, NULL, NULL),
(117, '300000495728', 'الريال للترحيلات', '249-919784157-', NULL, NULL, NULL, NULL),
(118, '300000502281', 'اصف للترحيلات', '249-0912310942-', NULL, NULL, NULL, NULL),
(119, '300000435954', 'ترحيلات دواء', '249-912317829-', NULL, NULL, NULL, NULL),
(120, '110004086000', 'شركه قريل  ليموزين لتاجير السيارات والنقل والترحيل المحدوده', '249-912399974-', NULL, NULL, NULL, NULL),
(121, '110010469100', 'شركة محمد حماد الجلابى و اولاده للترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(122, '300000495608', 'نهال ونضال للترحيلات', '249-0912246005-', NULL, NULL, NULL, NULL),
(123, '300000478366', 'ابو مالك لخدمات الشحن والترحيل', '249-912403470-', NULL, NULL, NULL, NULL),
(124, '300000503196', 'ترحيلات ادماس', '249-912381692-', NULL, NULL, NULL, NULL),
(125, '300000453850', 'يوسف نهار للترحيلات', '249-0912679627-', NULL, NULL, NULL, NULL),
(126, '120015052601', '  دار السلام للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(127, '300000504746', 'اعمال ابوحليمه للترحيلات', '249-912786220-', NULL, NULL, NULL, NULL),
(128, '110014961101', 'ترحيلات عبر الحدود', '912299789', 'garabib14@gmail.com', NULL, NULL, NULL),
(129, '300000497825', 'ترحيلات عمار', '249-912672280-', NULL, NULL, NULL, NULL),
(130, '130012250201', 'مشعل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(131, '300000499034', 'وحيدة السفير للترحيلات', '249-911368930-', NULL, NULL, NULL, NULL),
(132, '110004768602', 'فشاركو للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(133, '110004292501', 'اعمال اوراسيا للترحيل', '999999999', NULL, NULL, NULL, NULL),
(134, '300000522017', 'ترحيلات سمر الشمال المميز', '249-0918085024-', NULL, NULL, NULL, NULL),
(135, '300000525098', 'ترحيلات الوعد الصادق ابو احمد', '249-915966918-', NULL, NULL, NULL, NULL),
(136, '300000522229', 'اعمال الصادق حسين عماره للترحيلات', '249-0912355044-', NULL, NULL, NULL, NULL),
(137, '130012631101', ' اعمال احساس للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(138, '300000516419', 'توب استوب للترحيلات', '249-912298708-', NULL, NULL, NULL, NULL),
(139, '300000522854', 'فريد للترحيلات', '249-0912901180-', NULL, NULL, NULL, NULL),
(140, '130010646401', 'ياسر الطيار للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(141, '300000526941', 'ترحيلات ابوخالد', '249-912450359-', NULL, NULL, NULL, NULL),
(142, '130007257302', 'دلوعة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(143, '130014455801', 'ترحيلات ادم يوسف جمعه', '999999999', NULL, NULL, NULL, NULL),
(144, '300000653545', 'الصدافه للترحيلات', '249-911122983-', NULL, NULL, NULL, NULL),
(145, '300000517392', 'ترحيلات ماماى', '249-116461564-', NULL, NULL, NULL, NULL),
(146, '110005510601', 'شركة المبارك للنقل والترحيل والتجارة والاستثمار المحدودة', '999999999', NULL, NULL, NULL, NULL),
(147, '300000521276', 'ترحيلات ابو فارس', '249-0911322518-', NULL, NULL, NULL, NULL),
(148, '110004064601', ' شركة نيلان العالمية -نيلان للنقل والترحيل - نيلان للسيارات', '000774308', NULL, NULL, NULL, NULL),
(149, '300000519829', 'الحلفاوية للترحيل', '249-965104010-', 'nawalcomstruction390@gmail.com', NULL, NULL, NULL),
(150, '130011094701', 'ترحيلات شلعى', '999999999', NULL, NULL, NULL, NULL),
(151, '130010986501', 'ترحيلات النيل الطاهر احمد سيار', '999999999', NULL, NULL, NULL, NULL),
(152, '130014254601', 'ترحيلات ود حولى للنقل', '999999999', NULL, NULL, NULL, NULL),
(153, '300000513397', 'اعمال ايثار للترحيل', '249-0912912000-', NULL, NULL, NULL, NULL),
(154, '130014394301', 'نلقا اخوان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(155, '130003741301', 'ترحيلات الهادى', '999999999', NULL, NULL, NULL, NULL),
(156, '130003703001', 'ترحيلات ابو الشريك', '999999999', NULL, NULL, NULL, NULL),
(157, '110005101202', 'سبيد للترحيل', '999999999', NULL, NULL, NULL, NULL),
(158, '300000507944', 'ترحيلات ابوالسيد البجاوي', '249-909739194-', NULL, NULL, NULL, NULL),
(159, '300000515637', 'ترحيلات العبابسه', '249-912258138-', NULL, NULL, NULL, NULL),
(160, '130003584801', 'ترحيلات عروس الجبال ', '999999999', NULL, NULL, NULL, NULL),
(161, '130015143401', ' ترحيلات ابو منتصر', '999999999', NULL, NULL, NULL, NULL),
(162, '300000513619', 'ترحيلات السقاي', '249-0912315729-', NULL, NULL, NULL, NULL),
(163, '130011634501', 'ابوعامر للترحيلات', '123007604', NULL, NULL, NULL, NULL),
(164, '300000486842', 'رغد للترحيلات', '249-0915495956-', NULL, NULL, NULL, NULL),
(165, '110012489401', 'الطائر العملاق للترحيلات وتاجير السيارات', '249-0912313601-', 'alshair82@hotmail.com', NULL, NULL, NULL),
(166, '300000494775', 'الشعبية للترحيلات', '249-919000420-', NULL, NULL, NULL, NULL),
(167, '300000476335', 'حصاد العمر للترحيلات', '249-912182143-', NULL, NULL, NULL, NULL),
(168, '130012422001', 'كارديف للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(169, '120012447301', 'ود البشير للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(170, '130014186702', ' ابو وعد العالمية للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(171, '300000485131', 'أعمال شقيفة للتجارة والترحيل والمقاولات', '249-0912643732-', NULL, NULL, NULL, NULL),
(172, '120014519601', 'الفرسان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(173, '130015316201', ' اعمال الخمري للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(174, '300000492190', 'ترحيلات الترياق الجديد', '249-0911848666-', NULL, NULL, NULL, NULL),
(175, '300000486776', 'ترحيلات ابراهيم محمد عثمان', '249-914240287-', NULL, NULL, NULL, NULL),
(176, '130016189701', 'ترحيلات مصطفى نمر', '999999999', NULL, NULL, NULL, NULL),
(177, '300000482571', 'وداعة جمال الدين وداعة الله للنقل و الترحيل', '249-912912136-', NULL, NULL, NULL, NULL),
(178, '130012139201', 'اعمال المناجي للتجارة والترحيل ', '999999999', NULL, NULL, NULL, NULL),
(179, '300000779302', 'ترحيلات مازن عمر', '249-0912858651-', NULL, NULL, NULL, NULL),
(180, '300000758805', 'ترحيلات جبل الدهب', '249-912527907-', NULL, NULL, NULL, NULL),
(181, '300000773955', 'ترحيلات ابواحمد', '249-0912520369-', NULL, NULL, NULL, NULL),
(182, '130009660301', 'بابكر حميدة محمد احمد للترحيلات', '912126771', NULL, NULL, NULL, NULL),
(183, '120014540401', 'ترحيلات عم نسمة', '999999999', NULL, NULL, NULL, NULL),
(184, '130012426601', 'صقر البرزن للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(185, '110004352101', 'القنطرة للترحيل', '999999999', NULL, NULL, NULL, NULL),
(186, '130015632401', 'عدن للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(187, '300000767670', 'مكتب اسناى للترحيلات', '249-0912318057-', NULL, NULL, NULL, NULL),
(188, '300000837627', 'ابو هنادى لترحيل المواشى', '249-0968688164-', NULL, NULL, NULL, NULL),
(189, '130011723401', 'ترحيلات ابواسماء', '121761120', NULL, NULL, NULL, NULL),
(190, '130003804401', 'ترحيلات الضوء الاخضر للنقل', '999999999', NULL, NULL, NULL, NULL),
(191, '110005398301', 'اعمال الشبيعات للترحيلات', '912245438', NULL, NULL, NULL, NULL),
(192, '300000812938', 'ترحيلات اولاد ادم الطاهر', '249-912295954-', NULL, NULL, NULL, NULL),
(193, '120011396601', 'اعمال الناصع للترحيل البرى', '249-912216752-', NULL, NULL, NULL, NULL),
(194, '300000847353', 'طه محمد احمد للترحيلات', '249-918988638-', NULL, NULL, NULL, NULL),
(195, '110005509601', 'نشوان للترحيلات', '249-183568899-', 'bm@ellarbarygroup.com', NULL, NULL, NULL),
(196, '130011565701', 'الخدارابى للتجارة والترحيل', '999999999', NULL, NULL, NULL, NULL),
(197, '130014662001', 'ترحيلات القدس', '999999999', NULL, NULL, NULL, NULL),
(198, '130013125801', 'المشورة لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(199, '130002512500', 'ترحيلات الهواري', '999999999', NULL, NULL, NULL, NULL),
(200, '110004314702', 'مشروع شركة بابكر سليمان للنقل والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(201, '120019067601', 'اولاد الشيخ للترحيل ', '999999999', NULL, NULL, NULL, NULL),
(202, '110004092201', 'مسلم للترحيل', '249-187454759-', NULL, NULL, NULL, NULL),
(203, '300000571446', 'اعمال اكرم مرسال للترحيلات', '249-0912339327-', NULL, NULL, NULL, NULL),
(204, '130014487001', 'ترحيلات اسامه', '999999999', NULL, NULL, NULL, NULL),
(205, '110005373501', 'مالك عبد الحميد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(206, '120014699901', 'حساس للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(207, '300000566594', 'ربا ترانس للترحيلات', '249-0912374069-', NULL, NULL, NULL, NULL),
(208, '130015014801', '  الصداقه للترحيلات المميزة', '912380917', NULL, NULL, NULL, NULL),
(209, '130015668801', 'منن للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(210, '300000565437', 'اعمال ابومالك للترحيلات', '249-915510779-', NULL, NULL, NULL, NULL),
(211, '130001374101', 'اعمال فتحي محجوب بشير للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(212, '300000564918', 'ترحيلات الفاتح علي محمد البشير', '249-912156455-', NULL, NULL, NULL, NULL),
(213, '130017813701', 'نجم السعد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(214, '130015016301', ' ترحيلات عدن', '999999999', NULL, NULL, NULL, NULL),
(215, '110005012700', 'الدليب للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(216, '300000584659', 'ترانسيت الصفاء للترحيلات', '249-912237203-', '0912237203az@gmaiL.com', NULL, NULL, NULL),
(217, '130013090801', 'ترحيلات احمد المصطفى الخير حامد', '249-906236663-', NULL, NULL, NULL, NULL),
(218, '300000587433', 'اعمال الحمدابي لترحيل المحاصيل', '249-0118817444-', NULL, NULL, NULL, NULL),
(219, '300000589477', 'ترحيلات نايس', '249-918475192-', NULL, NULL, NULL, NULL),
(220, '110011885300', 'شركة المغيرات للاستثمار والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(221, '300000588202', 'هان لان للترحيلات', '249-0123836669-', NULL, NULL, NULL, NULL),
(222, '130015111001', 'ترحيلات المسلمي', '999999999', NULL, NULL, NULL, NULL),
(223, '300000582643', 'اعمال ود امونه للترحيلات', '249-0994509194-', NULL, NULL, NULL, NULL),
(224, '300000587724', 'شيكاى للترحيلات', '249-912858141-', NULL, NULL, NULL, NULL),
(225, '110014308901', 'سوداجيت لترحيل المواد البترولية', '249-0912345313-', NULL, NULL, NULL, NULL),
(226, '110005359701', 'بنسل لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(227, '300000475525', 'سمر للترحيل', '249-908618888-', NULL, NULL, NULL, NULL),
(228, '120014473801', 'ترحيلات البينة التجارية', '249-912893822-', NULL, NULL, NULL, NULL),
(229, '110014901602', 'ودارسو للنقل والترحيل ', '999999999', NULL, NULL, NULL, NULL),
(230, '110014901603', 'الأمير للتخليص والترحيل وخدمات الترانزيت ', '999999999', NULL, NULL, NULL, NULL),
(231, '300000551016', 'بير د يم للترحيلات', '249-915698340-', NULL, NULL, NULL, NULL),
(232, '300000555129', 'اوبك للترحيلات', '249-912936518-', NULL, NULL, NULL, NULL),
(233, '110004721801', 'الصادق جمعه محمد جمعه للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(234, '300000557494', 'الهلالى للترحيلات', '249-114534198-', NULL, NULL, NULL, NULL),
(235, '110004167501', 'استرانس للترحيل والصوامع', '999999999', NULL, NULL, NULL, NULL),
(236, '300000550553', 'ابونفحات للترحيلات', '249-912660661-', NULL, NULL, NULL, NULL),
(237, '130011476301', 'اعمال النور عبد الرحمن سبيل للترحيل', '999999999', NULL, NULL, NULL, NULL),
(238, '130018177101', 'ودالساير للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(239, '120014502301', 'كى ايه للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(240, '300000551812', 'الاصيل الجديد المميز الحديث للترحيلات', '249-0912858421-', NULL, NULL, NULL, NULL),
(241, '300000781040', 'اعمال الصداقة  استيت للترحيلات', '249-0917612650-', NULL, NULL, NULL, NULL),
(242, '110010709101', 'ترحيلات هواري رضوان', '999999999', 'hwaryrd@hotmail.com', NULL, NULL, NULL),
(243, '300000878794', 'ترحيلات ايه جي اف', '249-912303088-', NULL, NULL, NULL, NULL),
(244, '120015118201', 'اعمال الفاتح ابراهيم ومكاوي عبد المولى للمقاولات والترحيلات', '249-0912901689-', NULL, NULL, NULL, NULL),
(245, '130014813301', 'المستخير للترحيلات', '912374198', NULL, NULL, NULL, NULL),
(246, '130014665901', 'اعمال يحى ادم للترحيل', '999999999', NULL, NULL, NULL, NULL),
(247, '170014303201', 'صاعين للمقاولات و الترحيل', '999999999', NULL, NULL, NULL, NULL),
(248, '170014960001', 'ترحيلات الاتحاد', '999999999', '0', NULL, NULL, NULL),
(249, '110011547600', 'شركة المرسلات للتسويق والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(250, '170014917000', 'جمعية الهاي لاند للنقل والترحيل التعاونية', '917790280', NULL, NULL, NULL, NULL),
(251, '170016322101', 'اعمال الفشقه للترحيل', '999999999', NULL, NULL, NULL, NULL),
(252, '300000860033', 'المميز للترحيلات', '249-0918284954-', NULL, NULL, NULL, NULL),
(253, '110005416103', 'اعمال البربري للترحيل', '249-0183483728-', NULL, NULL, NULL, NULL),
(254, '130011405901', 'ترحيلات احمد عمر على', '999999999', NULL, NULL, NULL, NULL),
(255, '110004127001', 'ابو دقيله للتجاره و الترحيل', '999999999', NULL, NULL, NULL, NULL),
(256, '300000632731', 'ترحيلات الايثار', '249-912799725-', NULL, NULL, NULL, NULL),
(257, '300000634351', 'صلاح احمد محمد احمد للترحيلات', '249-0912525474-', NULL, NULL, NULL, NULL),
(258, '300000632320', 'نهار للترحيلات', '249-0912285806-', NULL, NULL, NULL, NULL),
(259, '300000634987', 'الفيصل للترحيلات', '249-912346343-', NULL, NULL, NULL, NULL),
(260, '300000625210', 'ترحيلات  يقين', '249-0912881750-', NULL, NULL, NULL, NULL),
(261, '130015542301', 'اعمال عبدالرحيم حسين محمد على  للترحيل والنقل ', '999999999', NULL, NULL, NULL, NULL),
(262, '300000629045', 'كنش للترحيلات', '249-9181484903-', NULL, NULL, NULL, NULL),
(263, '300000031732', 'ترحيلات التعاون', '249-912576531-', NULL, NULL, NULL, NULL),
(264, '300000026520', 'نهر النيل للترحيل', '249-9127947537-', NULL, NULL, NULL, NULL),
(265, '300000037901', 'ابو هبة لخدمات الترحيل', '249-123009252-', NULL, NULL, NULL, NULL),
(266, '300000038219', 'ترحيلات انوار الشام', '249-0912354494-', NULL, NULL, NULL, NULL),
(267, '300000025751', 'اعمال الشريف للترحيلات', '249-0919357590-', NULL, NULL, NULL, NULL),
(268, '300000033416', 'ترحيلات ام خشمين', '249-129956689-', NULL, NULL, NULL, NULL),
(269, '300000035235', 'ترحيلات هجليج', '249-0912135238-', NULL, NULL, NULL, NULL),
(270, '300000210626', 'ميرف للنقل والترحيلات', '249-0912684116-', NULL, NULL, NULL, NULL),
(271, '300000202402', 'اعمال بوشي للترحيلات', '249-123214776-', NULL, NULL, NULL, NULL),
(272, '300000210256', 'أعمال قمر محمدعبدالله محمد صالح للنقل والترحيل والتجارة', '249-0912352833-', 'goegabe@hotmail.com', NULL, NULL, NULL),
(273, '300000213612', 'ترحيلات قسم السيد احمد وداعه', '249-0126574742-', NULL, NULL, NULL, NULL),
(274, '300000213704', 'مارقرا للتجارة والترحيل', '249-912891579-', NULL, NULL, NULL, NULL),
(275, '300000214080', 'ترحيلات ريفال', '249-912241067-', NULL, NULL, NULL, NULL),
(276, '300000214596', 'بندى للترحيلات', '249-0123170001-', NULL, NULL, NULL, NULL),
(277, '300000214979', 'ابو الخلفاء للترحيلات', '249-0903993215-', NULL, NULL, NULL, NULL),
(278, '300000203677', 'ترحيلات كرار الشيخ هلال', '249-918501777-', NULL, NULL, NULL, NULL),
(279, '300000205243', 'اسيل لترحيل المياه', '249-900400090-', NULL, NULL, NULL, NULL),
(280, '300000207830', 'صلوحى للترحيلات', '249-911358810-', NULL, NULL, NULL, NULL),
(281, '300000207935', 'ابوسجي للترحيلات', '249-912277063-', NULL, NULL, NULL, NULL),
(282, '130015087202', 'عبدالوهاب محمد احمد للترحيلات', '913355515', NULL, NULL, NULL, NULL),
(283, '300000668352', 'ابوالجيلى القوم للترحيلات', '249-917941662-', NULL, NULL, NULL, NULL),
(284, '300000668564', 'ترحيلات المهداوى', '249-912354371-', NULL, NULL, NULL, NULL),
(285, '300000216772', 'ترحيلات مكة المكرمة', '249-0960794871-', NULL, NULL, NULL, NULL),
(286, '110010493500', 'شركة النقيب للنقل و الترحيل المحدودة', '912180440', NULL, NULL, NULL, NULL),
(287, '130014173101', 'ترحيلات السنوسية', '249-914895028-', NULL, NULL, NULL, NULL),
(288, '300000014500', 'اعمال على عوض البارى محمد ترب لترحيل الماشيه', '249-0123054239-', NULL, NULL, NULL, NULL),
(289, '300000018588', 'اعمال ابوميار المميز للترحيل', '249-0912463407-', NULL, NULL, NULL, NULL),
(290, '300000763185', 'شنشاون للترحيلات', '249-0962663699-', NULL, NULL, NULL, NULL),
(291, '300000767443', 'ترحيلات الموريات', '249-0912310563-', NULL, NULL, NULL, NULL),
(292, '300000770001', 'اعمال بقباق للترحيل', '249-0912244500-', NULL, NULL, NULL, NULL),
(293, '110004960200', 'شركة رادان للتسويق والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(294, '130017667301', 'جلنار لخدمات النظافة وترحيل النفايات ', '912365444', NULL, NULL, NULL, NULL),
(295, '120015073801', 'وطنية للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(296, '130019078701', 'اعمال خليل اليمني للترحيلات', '914242244', NULL, NULL, NULL, NULL),
(297, '300000774142', 'ترحيلات النيروز العامة', '249-0918029329-', NULL, NULL, NULL, NULL),
(298, '130018813301', 'اعمال بكو للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(299, '130018813201', 'اعمال الضحي للترحيلات', '123004106', NULL, NULL, NULL, NULL),
(300, '300000019890', 'ابوشامه للترحيلات', '249-912329491-', NULL, NULL, NULL, NULL),
(301, '130007236401', 'ترحيلات الغابة', '122359086', NULL, NULL, NULL, NULL),
(302, '300000860906', 'اعمال السوكى للترحيلات', '249-9012570308-', NULL, NULL, NULL, NULL),
(303, '300000834630', 'ابوروان للترحيلات', '249-911308969-', NULL, NULL, NULL, NULL),
(304, '300000783985', 'ابو الواثق للترحيلات', '249-0918168256-', NULL, NULL, NULL, NULL),
(305, '300000784037', 'ابوعلي بليكوان للترحيلات', '249-912886580-', NULL, NULL, NULL, NULL),
(306, '300000862605', 'الدومات للترحيل', '249-0912520511-', NULL, NULL, NULL, NULL),
(307, '110009540401', 'كوربس للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(308, '110005012701', 'الدوليب للنقل و الترحيل', '999999999', NULL, NULL, NULL, NULL),
(309, '110015053101', 'غلوش للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(310, '110005359801', 'بخيت محمد توم للترحيل', '999999999', NULL, NULL, NULL, NULL),
(311, '110012384401', 'مرجان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(312, '110013698301', 'فيولا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(313, '300000762028', 'ترحيلات البراسي', '249-0912636614-', NULL, NULL, NULL, NULL),
(314, '110004439801', 'سلطان لنقل والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(315, '300000753699', 'ترحيلات ابو رياض', '249-917524554-', NULL, NULL, NULL, NULL),
(316, '110009638104', 'ترحيلات زارباك', '999999999', NULL, NULL, NULL, NULL),
(317, '300000221586', 'ترحيلات كتك', '249-912356747-', NULL, NULL, NULL, NULL),
(318, '300000221971', 'ترحيلات ابو مياسر', '249-0123886132-', NULL, NULL, NULL, NULL),
(319, '300000222766', 'ترحيلات عوض الله الرشيد محمد صالح', '249-0909522450-', NULL, NULL, NULL, NULL),
(320, '300000859212', 'البادراب للترحيلات', '249-912522600-', NULL, NULL, NULL, NULL),
(321, '300000225737', 'ترحيلات انبهار سيوبر', '249-0912949116-', NULL, NULL, NULL, NULL),
(322, '130015189601', 'شيلا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(323, '110005051800', 'شركه كنارى للنقل والترحيل المحدوده', '999999999', NULL, NULL, NULL, NULL),
(324, '300000806518', 'الصياد للترحيلات', '249-918185201-', NULL, NULL, NULL, NULL),
(325, '130011091202', 'مكتب ابومهند للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(326, '130012353601', 'اعمال المنادى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(327, '300000773914', 'العوسج للترحيل', '249-912413890-', NULL, NULL, NULL, NULL),
(328, '300000775202', 'ابو علياء للترحيل', '249-123234157-', NULL, NULL, NULL, NULL),
(329, '110005578000', 'ترانزيت للترحيل والخدمات والتجاره', '999999999', NULL, NULL, NULL, NULL),
(330, '300000864702', 'سلمان عيدالله سلمان للترحيلات', '249-0126925902-', NULL, NULL, NULL, NULL),
(331, '110004785500', 'شركة شقيري للنقل و الترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(332, '110005125900', 'شركة امونيا للتجارة والترحيلات المحدودة', '999999999', NULL, NULL, NULL, NULL),
(333, '110004806700', 'شركة الأعمال البحرية و الترحيلات', '999999999', NULL, NULL, NULL, NULL),
(334, '300000742343', 'اعمال ابو شعر الامبراطور للترحيلات', '249-0123212199-', NULL, NULL, NULL, NULL),
(335, '110005556200', 'طلب للترحيل والتخليص', '999999999', NULL, NULL, NULL, NULL),
(336, '120011483501', 'التوكل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(337, '110004981100', 'شركه اغنى للتجاره والنقل والترحيل المحدوده', '999999999', NULL, NULL, NULL, NULL),
(338, '110004800800', 'شركه ترحيل المواد البتروليه المحدوده', '999999999', NULL, NULL, NULL, NULL),
(339, '110004815600', 'شركة جت للترحيل', '999999999', NULL, NULL, NULL, NULL),
(340, '110005214600', 'شركة هساكو المحدودة للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(341, '300000594556', 'عادل الريح مصطفي للترحيلات', '249-912288552-', 'adiLaLraiah@gamiaL', NULL, NULL, NULL),
(342, '300000598138', 'شركة الوصاف للنقل والترحيل المحدودة', '249-0121108823-', 'wasaf.trans@yahoo.com', NULL, NULL, NULL),
(343, '300000597568', 'اعمال مازن خالد للترحيلات', '249-924167007-', NULL, NULL, NULL, NULL),
(344, '110004692100', 'شركة طهنلال للنقل والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(345, '110004777400', 'اتلشركة الهندسية و الترحيلات العالمية المحدودة', '999999999', NULL, NULL, NULL, NULL),
(346, '110005005700', 'شركة الارغم للتسويق والترحيل', '999999999', NULL, NULL, NULL, NULL),
(347, '110005236500', 'شركة التكامل للتجارة والنقل الترحيل والاستثمار والخدمات  العامة المحدودة', '999999999', NULL, NULL, NULL, NULL),
(348, '110004764900', 'شركة شرق للترحيلات المحدوده', '999999999', NULL, NULL, NULL, NULL),
(349, '110004562900', 'شركة الطرق للنقل و الترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(350, '110005066500', 'شركه ترحيلات تاواولتى المحدوده', '999999999', NULL, NULL, NULL, NULL),
(351, '130016111101', 'ترحيلات الحصن الحصين ', '999999999', NULL, NULL, NULL, NULL),
(352, '110004489800', 'شركة ماموت للنقل والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(353, '300000601477', 'ترحيلات الشرنوبى للنقل', '249-912806624-', NULL, NULL, NULL, NULL),
(354, '110004971600', 'شركه ابو البدوى للترحيل والنقل البرئ والتجاره المحدوده', '999999999', NULL, NULL, NULL, NULL),
(355, '300000600108', 'آصف مصطفي حاج الصافي عبد القادر للترحيلات', '249-0912804841-', NULL, NULL, NULL, NULL),
(356, '300000600720', 'شركة الهجين  للاستثمار والنقل والترحيل المحدودة', '249-912309215-', 'hajin.transport@gmail.com', NULL, NULL, NULL),
(357, '110004638800', 'شركة لدن للتسويق والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(358, '110016815000', 'شركة الجبيرة للترحيلات والاستثمار المحدودة', '999999999', NULL, NULL, NULL, NULL),
(359, '300000715518', 'ترحيلات ابو عثمان138860', '249-0123414841-', 'mowafi33@gmail.com', NULL, NULL, NULL),
(360, '300000716172', 'ترحيلات عامركم', '249-0912335175-', NULL, NULL, NULL, NULL),
(361, '110004713400', 'ترحيلات اكسبريس حلفا', '999999999', NULL, NULL, NULL, NULL),
(362, '300000729806', 'فخر السوداني للترحيلات', '249-912362734-', NULL, NULL, NULL, NULL),
(363, '110004461000', 'شركة شرق السودان للترحيلات والاستثمار المحدودة', '999999999', NULL, NULL, NULL, NULL),
(364, '300000716568', 'ترحيلات منيناي', '249-0902560008-', NULL, NULL, NULL, NULL),
(365, '110004540900', 'شركة مارامبي للنقل والترحيل المحدوده', '999999999', NULL, NULL, NULL, NULL),
(366, '300000718001', 'اعمال ديالا للترحيلات', '249-918062420-', NULL, NULL, NULL, NULL),
(367, '300000727196', 'الهادي احمد حميدان  للترحيلات', '249-0912382225-', NULL, NULL, NULL, NULL),
(368, '300000715227', 'ترحيلات العائلة', '249-0999993341-', NULL, NULL, NULL, NULL),
(369, '110005023200', 'شركة الريح للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(370, '110004863200', 'شركة سوالين للتسويق والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(371, '120015015402', 'رانسي للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(372, '300000721726', 'النيل يونماكس للترحيلات', '249-900048274-', NULL, NULL, NULL, NULL),
(373, '110004598900', 'صنوبر للترحيل والمقاولات المحدودة', '999999999', NULL, NULL, NULL, NULL),
(374, '300000702318', 'اسينات للترحيلات', '249-912519640-', NULL, NULL, NULL, NULL),
(375, '110004478200', 'شركة سنابل دارفور للنقل والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(376, '300000699816', 'الفرقان للترحيلات', '249-914669150-', NULL, NULL, NULL, NULL),
(377, '300000713331', 'ترحيلات تسنينا', '249-0912361592-', NULL, NULL, NULL, NULL),
(378, '300000702121', 'ترحيلات الشفيع الامين ادم عمر', '249-912384370-', NULL, NULL, NULL, NULL),
(379, '300000695757', 'ترحيلات الراحة', '249-912222845-', NULL, NULL, NULL, NULL),
(380, '300000698212', 'اعمال استبينا للترحيلات', '249-912337720-', NULL, NULL, NULL, NULL),
(381, '300000702254', 'السلامة للترحيلات', '249-913445434-', NULL, NULL, NULL, NULL),
(382, '300000702282', 'ترحيلات ابو باسل', '249-0912381195-', NULL, NULL, NULL, NULL),
(383, '300000707904', 'ترحيلات يورو لاين', '249-0912317328-', NULL, NULL, NULL, NULL),
(384, '110004805500', 'شركة الريان  للنقل و الترحيل و الاستثمار المحدوده', '999999999', NULL, NULL, NULL, NULL),
(385, '110004817000', 'الباقريس للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(386, '110004510400', 'شركة ترحيلات النفيدى التجارية المحدودة', '999999999', NULL, NULL, NULL, NULL),
(387, '130014121101', 'أعمال صلاح على أحمد للترحيلات والمقاولات', '999999999', NULL, NULL, NULL, NULL),
(388, '300000687638', 'اعمال محد جاد الله طه للترحيلات', '249-910777450-', NULL, NULL, NULL, NULL),
(389, '300000675620', 'اعمال عبد الوهاب عبد الرحمن الامين ( المفرن ) للترحيلات', '249-0912307765-', 'abdalwahab-2020-tarheelat@live.com', NULL, NULL, NULL),
(390, '110004777100', 'السودانية  للترحيل الجوى و التجارة و الخدمات', '999999999', NULL, NULL, NULL, NULL),
(391, '110004396800', 'شركه القاش للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(392, '300000676349', 'ترحيلات أبو المجتبي', '249-913224444-', NULL, NULL, NULL, NULL),
(393, '300000681867', 'أعمال شارف علي مسار للترحيلات', '249-0912395028-', NULL, NULL, NULL, NULL),
(394, '110004844900', 'شركة الترحيل و التوزيع العامة المحدودة', '999999999', NULL, NULL, NULL, NULL),
(395, '110004814300', 'شركه تي ام بي لنقل وترحيل', '999999999', NULL, NULL, NULL, NULL),
(396, '300000678512', 'الظبي للترحيلات', '249-0911154566-', NULL, NULL, NULL, NULL),
(397, '300000676137', 'ترحيلات حسان', '249-916613010-', NULL, NULL, NULL, NULL),
(398, '300000677026', 'اعمال الفردوس للترحيلات', '249-917107566-', NULL, NULL, NULL, NULL),
(399, '110004728600', 'النيل للشحن والترحيل', '999999999', NULL, NULL, NULL, NULL),
(400, '300000677174', 'سمير محمد الشيخ للترحيلات', '249-0122080407-', NULL, NULL, NULL, NULL),
(401, '300000678474', 'ترحيلات اسمارت', '249-0912638910-', NULL, NULL, NULL, NULL),
(402, '300000679761', 'ترحيلات ابوفارس', '249-912485448-', NULL, NULL, NULL, NULL),
(403, '130010138201', 'حسن ادريس للترحيل', '912751646', NULL, NULL, NULL, NULL),
(404, '110004651700', 'شركة ترحيلات رهام المحدودة', '999999999', NULL, NULL, NULL, NULL),
(405, '110005030100', 'الاصدقاء للنقل والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(406, '300000682304', 'الجوزاء للترحيلات', '249-912303223-', NULL, NULL, NULL, NULL),
(407, '300000686404', 'اعمال قينو للترحيلات', '249-910976132-', NULL, NULL, NULL, NULL),
(408, '300000676111', 'ينابيع الخير للترحيلات', '249-912363958-', NULL, NULL, NULL, NULL),
(409, '300000742078', 'ريتال للترحيلات', '249-0962537776-', NULL, NULL, NULL, NULL),
(410, '300000742542', 'ابوالشيخ للترحيل السياحي عبر الولايات', '249-0912235444-', 'atif.4455@yahoo.com', NULL, NULL, NULL),
(411, '120014444700', 'شركة الكرادة للنقل والترحيل المحدوده/ازهري مبارك محمد عبدو', '999999999', NULL, NULL, NULL, NULL),
(412, '130011448901', 'ترحيلات سوهاج', '999999999', NULL, NULL, NULL, NULL),
(413, '110004606300', 'شركة تاتكو للترحيلات المحدودة', '999999999', NULL, NULL, NULL, NULL),
(414, '110004705400', 'شركة البوادي للنقل  والترحيل', '999999999', NULL, NULL, NULL, NULL),
(415, '110004954000', 'شركة بصيري للترحيل والتسويق المحدودة', '999999999', NULL, NULL, NULL, NULL),
(416, '130014518501', 'اعمال ود الماصع للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(417, '130019156501', 'وكالة اواب للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(418, '300000235198', 'ترحيلات عربي', '249-912687560-', NULL, NULL, NULL, NULL),
(419, '300000232819', 'ديستنيش للترحيل', '249-0912336427-', NULL, NULL, NULL, NULL),
(420, '300000230196', 'ترحيلات أبو صدام', '249-918325863-', NULL, NULL, NULL, NULL),
(421, '300000231506', 'اعمال الهنوابي للترحيل والخدمات', '249-0912846550-', NULL, NULL, NULL, NULL),
(422, '300000238567', 'افندينا للترحيلات', '249-0123594969-', NULL, NULL, NULL, NULL),
(423, '300000744731', 'فيينا للترحيلات', '249-912303609-', NULL, NULL, NULL, NULL),
(424, '300000227982', 'الرحال الجديد للترحيلات', '249-918805312-', NULL, NULL, NULL, NULL),
(425, '110005170700', 'شركة باقت بست للنقل والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(426, '110005235700', 'شركة نادكو للتجارة والنقل والترحيل المحدودة', '999999999', NULL, NULL, NULL, NULL),
(427, '130011107301', 'شكي للترحيل', '999999999', NULL, NULL, NULL, NULL),
(428, '300000637414', 'اعمال قدوره للترحيلات', '249-0912529774-', NULL, NULL, NULL, NULL),
(429, '300000637626', 'ترحيلات سمبل', '249-918238426-', NULL, NULL, NULL, NULL),
(430, '300000235065', 'الكوكب للترحيلات', '249-912389641-', NULL, NULL, NULL, NULL),
(431, '300000242374', 'ترحيلات الازدهار الجديد', '249-0912328712-', NULL, NULL, NULL, NULL),
(432, '300000249445', 'رواس لخدمات الترحيل', '249-912326426-', NULL, NULL, NULL, NULL),
(433, '300000249524', 'ام ضرابة للنقل والترحيل', '249-912879565-', NULL, NULL, NULL, NULL),
(434, '300000258864', 'النعيمابى للترحيلات', '249-0919504950-', NULL, NULL, NULL, NULL),
(435, '300000267382', 'ابو ديس هدل للترحيلات', '249-0123191903-', NULL, NULL, NULL, NULL),
(436, '300000267829', 'ابوهيبات للترحيلات المميزة', '249-912756562-', NULL, NULL, NULL, NULL),
(437, '300000251076', 'ترحيلات  العذراء للبضاعة', '249-0121232533-', NULL, NULL, NULL, NULL),
(438, '300000249233', 'قطر الندى للترحيلات', '249-917460187-', NULL, NULL, NULL, NULL),
(439, '300000257510', 'موارد للترحيلات', '249-0918184193-', NULL, NULL, NULL, NULL),
(440, '300000257536', 'روبيان للترحيلات', '249-0912500804-', NULL, NULL, NULL, NULL),
(441, '300000252149', 'ترحيلات ابوسامي', '249-919079542-', NULL, NULL, NULL, NULL),
(442, '300000257508', 'ابوحمد للترحيلات', '249-0124013456-', NULL, NULL, NULL, NULL),
(443, '300000254154', 'وديان الجديدللترحيلات', '249-0914319204-', NULL, NULL, NULL, NULL),
(444, '300000253543', 'بساطى المميز للترحيلات', '249-0912157733-', NULL, NULL, NULL, NULL),
(445, '300000253173', 'مبارك ادم علي بشير للترحيل', '249-911286867-', NULL, NULL, NULL, NULL),
(446, '300000266743', 'اعمال روزينا للترحيلات', '249-0901076666-', NULL, NULL, NULL, NULL),
(447, '300000266730', 'ابو مهند المميز للترحيلات', '249-0916176960-', NULL, NULL, NULL, NULL),
(448, '300000266756', 'أبو مهند المميز للترحيلات', '249-916176960-', NULL, NULL, NULL, NULL),
(449, '300000263305', 'الكمندان للترحيلات', '249-0129786081-', NULL, NULL, NULL, NULL),
(450, '300000275907', 'ابوستة للترحيلات', '249-918080354-', NULL, NULL, NULL, NULL),
(451, '300000278508', 'الرومانسي للترحيلات', '249-0917977500-', NULL, NULL, NULL, NULL),
(452, '300000279785', 'اعمال قبيو قولا ماماي للنقل والترحيل', '249-910774356-', NULL, NULL, NULL, NULL),
(453, '300000278046', 'نميري حسين نصر للترحيلات', '249-0912310876-', NULL, NULL, NULL, NULL),
(454, '300000801159', 'الحناوي للترحيلات', '249-0912489882-', 'hanawy221@outlook.com', NULL, NULL, NULL),
(455, '300000788308', 'الوسيط للترحيلات', '249-917072832-', NULL, NULL, NULL, NULL),
(456, '300000784052', 'شركة الايهم للنقل والترحيل المحدودة', '912641894-967757380-', 'ayhamport@gmail.com', NULL, NULL, NULL),
(457, '300000771008', 'ترحيلات دكين', '249-0914269389-', NULL, NULL, NULL, NULL),
(458, '300000749389', 'شركة ام اتش ام للتخليص والترحيل والانشطة المتعددة المحدةود', '249-0912998081-', 'multiactivities@mhmholding.com', NULL, NULL, NULL),
(459, '300000756100', 'احمد ادم جفيل للترحيلات', '249-912353338-', NULL, NULL, NULL, NULL),
(460, '300000283870', 'شركة  ارجو  للترحيلات  وخدمات  الترانزيت  المحدودة', '249-912390712-', NULL, NULL, NULL, NULL),
(461, '300000284213', 'حماس شديد للترحيلات', '249-0912378260-', NULL, NULL, NULL, NULL),
(462, '300000756139', 'ابو المزمل للنقل والترحيل', '249-0124452238-', NULL, NULL, NULL, NULL),
(463, '300000285618', 'ترحيلات ابومروه', '249-912516006-', NULL, NULL, NULL, NULL),
(464, '300000746193', 'ترحيلات سنام', '249-0119717172-', NULL, NULL, NULL, NULL),
(465, '300000741334', 'النجم الثاقب للترحيل', '249-123659574-', NULL, NULL, NULL, NULL),
(466, '300000284440', 'الالهام للترحيل', '249-912883656-', NULL, NULL, NULL, NULL),
(467, '300000285794', 'روحية الخواجة للترحيلات', '249-0912364905-', NULL, NULL, NULL, NULL),
(468, '300000285447', 'ترحيلات الجرف', '249-912842492-', NULL, NULL, NULL, NULL),
(469, '300000287039', 'ترحيلات ماس', '249-922325124-', NULL, NULL, NULL, NULL),
(470, '300000295995', 'علوش للترحيلات', '249-0922963063-', NULL, NULL, NULL, NULL),
(471, '300000312200', 'ترحيلات الوحدة', '249-0123109149-', NULL, NULL, NULL, NULL),
(472, '300000307318', 'اسمار الشمال للترحيلات', '249-915075938-', NULL, NULL, NULL, NULL),
(473, '300000295913', 'ابو سحر المميز للترحيل', '249-0902131194-', NULL, NULL, NULL, NULL),
(474, '300000312930', 'مكتب عبد الله سبيل للترحيلات', '249-0912570156-', NULL, NULL, NULL, NULL),
(475, '300000313010', 'اعمال محمد على ضوالبيت للتجارة والترحيل', '249-0918240067-', NULL, NULL, NULL, NULL),
(476, '300000308965', 'نسرى لخدمات الترحيلات', '249-0922500567-', NULL, NULL, NULL, NULL),
(477, '300000294973', 'ترحيلات عمار حاج الدومه عيسي', '249-0912589636-', NULL, NULL, NULL, NULL),
(478, '300000295237', 'زهرة كادوقلى للترحيل', '249-912947844-', NULL, NULL, NULL, NULL),
(479, '300000307902', 'ترحيلات الجبال الجنوبيه', '249-0910715733-', NULL, NULL, NULL, NULL),
(480, '300000291895', 'شركة  ترحيلات  حدباى  المحدودة', '249-912205296-', NULL, NULL, NULL, NULL),
(481, '300000298078', 'ابوعمار السياحي للترحيلات', '249-117595225-', NULL, NULL, NULL, NULL),
(482, '300000300354', 'انسام للترحيلات', '249-912340733-', NULL, NULL, NULL, NULL),
(483, '300000312387', 'عز الدين سليمان العوض محمد للترحيلات', '249-0911201428-', NULL, NULL, NULL, NULL),
(484, '300000289547', 'الصدافة للترحيلات', '249-911122983-', NULL, NULL, NULL, NULL),
(485, '300000303218', 'اعمال سمرة البادية للترحيلات', '249-0919366955-', NULL, NULL, NULL, NULL),
(486, '300000305859', 'الوادي الجديد للترحيلات', '249-0915713041-', NULL, NULL, NULL, NULL),
(487, '300000309231', 'ترحيلات الوكيل للنقل البرى', '249-0912682401-', NULL, NULL, NULL, NULL),
(488, '300000298328', 'عديله المميز للترحيلات', '249-0919641779-', NULL, NULL, NULL, NULL),
(489, '300000295012', 'ترحيلات الشمس المضيئة', '249-0916327520-', NULL, NULL, NULL, NULL),
(490, '300000305846', 'ترحيلات اقمار', '249-0912468682-', NULL, NULL, NULL, NULL),
(491, '300000320266', 'ابو سارة المميز للترحيلات', '249-0916004775-', NULL, NULL, NULL, NULL),
(492, '300000347330', 'المرسال المميز للترحيلات', '249-912634469-', NULL, NULL, NULL, NULL),
(493, '300000365265', 'قرطاس المميزللترحيلات', '249-0912455311-', NULL, NULL, NULL, NULL),
(494, '300000369061', 'اعمال هشام رضوان بابكر للترحيل', '249-0914974778-', NULL, NULL, NULL, NULL),
(495, '300000317774', 'حنين للترحيلات', '249-912130109-', NULL, NULL, NULL, NULL),
(496, '300000362743', 'ترحيلات المدائن للنقل البري', '249-912329555-', NULL, NULL, NULL, NULL),
(497, '300000349481', 'اعمال المازن للترحيلات', '249-0965865304-', NULL, NULL, NULL, NULL),
(498, '300000321313', 'مكتب بدرالدين محمد فضل للترحيلات', '249-918284019-', NULL, NULL, NULL, NULL),
(499, '300000351268', 'ترحيلات ابو يس', '249-996500877-', NULL, NULL, NULL, NULL),
(500, '300000366830', 'الطور للنقل والترحيل', '249-912300206-', 'altoor-trans@hotmail.com', NULL, NULL, NULL),
(501, '300000318158', 'الجوهرة للترحيلات', '249-123235421-', NULL, NULL, NULL, NULL),
(502, '300000324287', 'ترحيلات مهدى', '249-0915282117-', NULL, NULL, NULL, NULL),
(503, '300000351441', 'ترحيلات وحدة ود رغيم', '249-912135748-', NULL, NULL, NULL, NULL),
(504, '300000361349', 'فنجاوى للترحيلات', '249-0912187579-', NULL, NULL, NULL, NULL),
(505, '300000323252', 'حراز الفخيم للترحيلات', '249-0912314701-', NULL, NULL, NULL, NULL),
(506, '300000335351', 'المدار المميز للترحيلات', '249-0905399971-', NULL, NULL, NULL, NULL),
(507, '300000336651', 'الرسالة التولاتي للترحيل', '249-0910137730-', NULL, NULL, NULL, NULL),
(508, '300000329687', 'اعمال الذيبان للترحيلات', '249-0922543308-', NULL, NULL, NULL, NULL),
(509, '300000346916', 'قسارية لخدمات الترحيل', '249-114589079-', NULL, NULL, NULL, NULL),
(510, '300000370995', 'الهدهد للترحيلات', '249-912805030-', NULL, NULL, NULL, NULL),
(511, '300000321091', 'الريلا للترحيلات', '249-0912929619-', NULL, NULL, NULL, NULL),
(512, '300000318967', 'شركة رجال للانشاءات والمقاولات والترحيل المحدودة', '249-912186673-', 'regalgala@live.com', NULL, NULL, NULL),
(513, '300000356323', 'الجبابى للترحيلات', '249-0918672626-', NULL, NULL, NULL, NULL),
(514, '300000360368', 'اكسريس الواحة لاند للترحيلات', '249-912531831-', NULL, NULL, NULL, NULL),
(515, '300000328984', 'حصاد للترحيلات', '249-091116254-', NULL, NULL, NULL, NULL),
(516, '300000338442', 'عبدالمنعم ابومصطفى للترحيلات', '249-0912421805-', NULL, NULL, NULL, NULL),
(517, '300000360291', 'بابنوسه للترحيلات', '249-0912429002-', NULL, NULL, NULL, NULL),
(518, '300000374628', 'المدثر للترحيلات', '249-0916024236-', NULL, NULL, NULL, NULL),
(519, '300000391344', 'قبال للترحيلات', '249-0918054498-', NULL, NULL, NULL, NULL),
(520, '300000382734', 'اوبر للترحيل', '249-0912302021-', 'ahmed@obersd.com', NULL, NULL, NULL),
(521, '300000380969', 'احواس المميزة للترحيلات', '249-0918034827-', NULL, NULL, NULL, NULL),
(522, '300000388135', 'النجوى اكسبريس للترحيلات', '249-0912204282-', NULL, NULL, NULL, NULL),
(523, '300000383120', 'ترحيلات قولو', '249-0112701515-', NULL, NULL, NULL, NULL),
(524, '300000375068', 'ترحيلات ود الشايقي', '249-0912914048-', NULL, NULL, NULL, NULL),
(525, '300000375836', 'اعمال محمد فرح للترحيلات', '249-0911158266-', NULL, NULL, NULL, NULL),
(526, '300000746351', 'مكتب بد رالدين على حمدان بابكر للترحيلات', '249-912893572-', NULL, NULL, NULL, NULL),
(527, '300000752159', 'وسام لاين للترحيل', '249-918091613-', NULL, NULL, NULL, NULL),
(528, '300000427797', 'إيرجنت للترحيلات', '249-0912694850-', NULL, NULL, NULL, NULL),
(529, '300000754016', 'ادم الشريف احمد للترحيلات', '249-128585910-', NULL, NULL, NULL, NULL),
(530, '300000818459', 'ترحيلات الكوير', '249-0912316298-', NULL, NULL, NULL, NULL),
(531, '300000818538', 'ترحيلات تنقاسي العامة', '249-0123335212-', NULL, NULL, NULL, NULL),
(532, '300000414862', 'معالم للترحيلات', '249-0116301111-', NULL, NULL, NULL, NULL),
(533, '300000846607', 'ترحيلات ليلي', '249-0912240944-', NULL, NULL, NULL, NULL),
(534, '300000847340', 'ترحيلات سنتر الصليحابى', '249-912813219-', NULL, NULL, NULL, NULL),
(535, '300000850761', 'اعمال الجوري للترحيلات', '249-0903685888-', 'ahmedkarar194@gmail.com', NULL, NULL, NULL),
(536, '300000415366', 'اعمال الفادنى للترحيل', '249-125972211-', NULL, NULL, NULL, NULL),
(537, '300000424836', 'خطاوى الشوق للترحيلات', '249-912199942-', NULL, NULL, NULL, NULL),
(538, '300000883235', 'ترحيلات مارومينا', '249-0914747300-', NULL, NULL, NULL, NULL),
(539, '300000861586', 'إسكاي للترحيل', '249-0128128792-', NULL, NULL, NULL, NULL),
(540, '300000875011', 'ترحيلات الفضائل', '249-912395884-', NULL, NULL, NULL, NULL),
(541, '300000424042', 'اماسينا المميز للترحيلات', '249-916265240-', NULL, NULL, NULL, NULL),
(542, '300000419984', 'ترحيلات المتوكل الحديثة', '249-091514808-', NULL, NULL, NULL, NULL),
(543, '300000417925', 'ابو ميسر للترحيلات', '249-0124420825-', '                                 ', NULL, NULL, NULL),
(544, '300000858563', 'رويال فلاي للترحيلات', '249-0912644413-', NULL, NULL, NULL, NULL),
(545, '300000809106', 'سونيك للترحيلات', '249-924167007-', NULL, NULL, NULL, NULL),
(546, '300000399118', 'ترحيلات جنوب كردفان', '249-0912747326-', NULL, NULL, NULL, NULL),
(547, '300000805710', 'ترحيلات عوضاي', '249-911605112-', NULL, NULL, NULL, NULL),
(548, '300000422009', 'اعمال اللورد للترحيل', '249-912913895-', NULL, NULL, NULL, NULL),
(549, '300000837895', 'ترحيلات دامشيك', '249-0903521525-', NULL, NULL, NULL, NULL),
(550, '300000826218', 'ترحيلات ود دايوتا', '249-919305121-', NULL, NULL, NULL, NULL),
(551, '300000827283', 'شركة الكلة للشحن والتفريغ والنقل والترحيل المحدودة', '249-096765601-', NULL, NULL, NULL, NULL),
(552, '300000415884', 'التوافق حداثة للترحيل', '249-912332795-', NULL, NULL, NULL, NULL),
(553, '300000417450', 'ترحيلات جود', '249-0123253543-', NULL, NULL, NULL, NULL),
(554, '300000411516', 'اعمال خالد حسين للنقل والترحيلات', '249-0123859421-', NULL, NULL, NULL, NULL);
INSERT INTO `transporters` (`id`, `tin`, `name`, `phone`, `email`, `deleted_at`, `created_at`, `updated_at`) VALUES
(555, '300000424504', 'اعمال كاش اون دليفرى للترحيلات', '249-0912183334-', NULL, NULL, NULL, NULL),
(556, '300000413812', 'ريتانيا للترحيلات', '249-912198439-', NULL, NULL, NULL, NULL),
(557, '300000803904', 'ترحيلات ابو نواف', '249-0912605713-', NULL, NULL, NULL, NULL),
(558, '300000823262', 'ترحيلات عبدالرحمن محمد علي سعيد', '249-0911132816-', NULL, NULL, NULL, NULL),
(559, '300000823275', 'ترحيلات سيف الدين عبد الرحمن الغالي', '249-914617352-', NULL, NULL, NULL, NULL),
(560, '300000804173', 'ترحيلات شذر العامه', '249-0123820255-', NULL, NULL, NULL, NULL),
(561, '300000804278', 'وادى برلى للنقل والترحيل', '249-012121888152-', NULL, NULL, NULL, NULL),
(562, '300000793349', 'عبر الاثير لخدمات الترحيل', '249-0914595440-', NULL, NULL, NULL, NULL),
(563, '300000392233', 'البطران للترحيلات', '249-0912395017-', 'ALAANIBA@YAHOO.COM', NULL, NULL, NULL),
(564, '300000425781', 'هوقن المدهش للترحيلات', '249-912676776-', NULL, NULL, NULL, NULL),
(565, '300000429521', 'ابو ايمن لخدمات الترحيل', '249-0999510007-', NULL, NULL, NULL, NULL),
(566, '300000405285', 'ترحيلات الحرمين', '249-0912342923-', NULL, NULL, NULL, NULL),
(567, '300000957613', 'شركة الفهود الحرة للاستيراد والتصدير والنقل والترحيل المحدودة', '249-0123879812-', NULL, NULL, NULL, NULL),
(568, '300000943113', 'ابو رانيا للترحيلات', '249-912247176-', NULL, NULL, NULL, NULL),
(569, '300000944811', 'الصافنات للتقل والترحيل', '249-09124404469-', NULL, NULL, NULL, NULL),
(570, '300000959047', 'ريتال المميز للترحيلات', '249-0962537776-', NULL, NULL, NULL, NULL),
(571, '300000894218', 'ترحيلات وادي قمرا', '249-912984654-', NULL, NULL, NULL, NULL),
(572, '300000924210', 'صابرين الجديدة لخدمات الترحيل', '249-910796431-', NULL, NULL, NULL, NULL),
(573, '300000966647', 'البرنس ترانس فورد للترحيلات', '249-912810756-', NULL, NULL, NULL, NULL),
(574, '300000905558', 'العريفي للترحيلات', '249-0995452258-', NULL, NULL, NULL, NULL),
(575, '300000921967', 'عبدالعظيم اليمنى للسفر والترحيلات', '249-903441860-', NULL, NULL, NULL, NULL),
(576, '300000948978', 'اعمال ابويس للترحيلات', '249-0125236911-', NULL, NULL, NULL, NULL),
(577, '300000907045', 'ترحيلات ابو البراء', '249-912354533-', NULL, NULL, NULL, NULL),
(578, '300000944388', 'اعمال بشير علي الحسين للترحيل', '249-094383641-', NULL, NULL, NULL, NULL),
(579, '300000917672', 'اعمال خيرالله على للترحيلات', '249-0912361809-', NULL, NULL, NULL, NULL),
(580, '300000949336', 'ابوالين للترحيلات', '249-0912249423-', NULL, NULL, NULL, NULL),
(581, '300000950940', 'ترحيلات زينكو', '249-0919701385-', 'respectzain@gmaiL.com', NULL, NULL, NULL),
(582, '300000971131', 'ترحيلات عيسا بكو', '249-912363374-', NULL, NULL, NULL, NULL),
(583, '300000941269', 'ابناء سليمان محمود لترحيلات البضائع', '249-0900908432-', NULL, NULL, NULL, NULL),
(584, '300000948965', 'اعمال ابو مسعود للترحيلات', '249-0914508438-', NULL, NULL, NULL, NULL),
(585, '300000956964', 'ابو امنية للنقل والترحيل', '249-912443235-', NULL, NULL, NULL, NULL),
(586, '300000957427', 'دربالي للترحيلات', '249-912188456-', 'darbale@gmail.com', NULL, NULL, NULL),
(587, '300000961446', 'اعمال رهيد السلام للترحيلات', '249-0123675550-', NULL, NULL, NULL, NULL),
(588, '300000925179', 'الثلاثة المتحدة للترحيلات', '249-0911399946-', NULL, NULL, NULL, NULL),
(589, '300000926481', 'ترحيلات ميرو للمواد البتروليه', '249-0919177745-', NULL, NULL, NULL, NULL),
(590, '300000937571', 'ترحيلات وفاق', '249-912879340-', NULL, NULL, NULL, NULL),
(591, '300000938432', 'ترحيلات ابو ماكن', '249-912706229-', NULL, NULL, NULL, NULL),
(592, '300000916691', 'ترحيلات ابا احمد', '249-0918179406-', NULL, NULL, NULL, NULL),
(593, '300000946814', 'الايوبي المميز للترحيلات', '249-912887307-', NULL, NULL, NULL, NULL),
(594, '300000939270', 'دار مساء للترحيلات', '249-0118354323-', NULL, NULL, NULL, NULL),
(595, '300000946258', 'ترحيلات قوز الناقة لنقل الماشية', '249-915516219-', NULL, NULL, NULL, NULL),
(596, '300000940857', 'فوكس ترانس للترحيلات', '249-9129400891-', NULL, NULL, NULL, NULL),
(597, '300000905425', 'صدام للترحيلات', '249-0911498890-', NULL, NULL, NULL, NULL),
(598, '300000908120', 'حاج عر بي للترحيل', '249-0123006550-', NULL, NULL, NULL, NULL),
(599, '300000927406', 'السيماف للترحيلات', '249-0965470553-', 'lajalser692@hotmail.com', NULL, NULL, NULL),
(600, '300000907775', 'مشروع روزليندا للنقل والترحيل', '249-912466837-', NULL, NULL, NULL, NULL),
(601, '300000915136', 'اعمال الاصالة للترحيلات', '249-0912731009-', NULL, NULL, NULL, NULL),
(602, '300000989318', 'اعمال احمد قرين للترحيل', '249-0126644833-', NULL, NULL, NULL, NULL),
(603, '300000920654', 'سمر للترحيلات', '249-912170555-', NULL, NULL, NULL, NULL),
(604, '300000921556', 'ترحيلات البراق', '249-124444339-', NULL, NULL, NULL, NULL),
(605, '300000921941', 'اليرموك للترحيل', '249-0915234954-', NULL, NULL, NULL, NULL),
(606, '300001021263', 'اوتار بوادينا للترحيلات', '249-0912339433-', NULL, NULL, NULL, NULL),
(607, '300001021766', 'المندرة لخدمات الترحيلات', '249-0912108988-', NULL, NULL, NULL, NULL),
(608, '300000964578', 'اعمال قلبو للترحيلات', '249-01114997095-', NULL, NULL, NULL, NULL),
(609, '300000964708', 'ترحيلات السندسي', '249-912246880-', NULL, NULL, NULL, NULL),
(610, '300000984862', 'السراج المنير للترحيلات', '249-912450780-', NULL, NULL, NULL, NULL),
(611, '300001022839', 'ترحيلات سيف الدين حسن ادم', '249-0122711500-', NULL, NULL, NULL, NULL),
(612, '300001038323', 'زرياب مصطفى للترحيل', '249-0912382596-', NULL, NULL, NULL, NULL),
(613, '300001012347', 'ترحيلات ابو عرفة', '249-0112560998-', NULL, NULL, NULL, NULL),
(614, '300000976797', 'اعمال محمد بشير على الحسن للترحيل', '249-0912275609-', NULL, NULL, NULL, NULL),
(615, '300000980165', 'ترحيلات الشهب ترانس', '249-913905555-', NULL, NULL, NULL, NULL),
(616, '300000978838', 'عادل حوار للترحيلات', '249-0912748272-', NULL, NULL, NULL, NULL),
(617, '300001033056', 'ترحيلات الشيخ', '249-0122040607-', NULL, NULL, NULL, NULL),
(618, '300000929728', 'اعمال المك ناصر للترحيلات', '249-0991549959-', NULL, NULL, NULL, NULL),
(619, '300000929095', 'ترحيلات محمد عبدالله عبدالحي', '249-912175556-', NULL, NULL, NULL, NULL),
(620, '300000930592', 'اعمال نسمة الشرق للترحيلات', '249-0912603542-', NULL, NULL, NULL, NULL),
(621, '300000906488', 'ابوسعد الكباشي للترحيلات', '249-928866628-', NULL, NULL, NULL, NULL),
(622, '300000929651', 'بي ام دي للترحيلات', '249-0123832913-', NULL, NULL, NULL, NULL),
(623, '300000893158', 'ترحيلات النهضة المميزة', '249-911087944-', NULL, NULL, NULL, NULL),
(624, '300000909898', 'ريندوز للترحيل', '249-0912645371-', NULL, NULL, NULL, NULL),
(625, '300000900796', 'منير ابو على للترحيلات', '249-0110562550-', NULL, NULL, NULL, NULL),
(626, '300001000554', 'ترحيلات الارسال الحديثة', '249-0917779277-', NULL, NULL, NULL, NULL),
(627, '300001012653', 'شركة تونجا للتجارة والترحيلات المحدودة', '249-0912279790-', NULL, NULL, NULL, NULL),
(628, '300001016036', 'الوافي لخدمات الترحيل', '249-0112040808-', 'WFAMIN20222@AMIAL.COM', NULL, NULL, NULL),
(629, '300001003829', 'ترحيلات مكاوي', '249-912625754-', NULL, NULL, NULL, NULL),
(630, '300001039386', 'نوابض للترحيل', '249-0912382844-', NULL, NULL, NULL, NULL),
(631, '300000993273', 'ابراهيم الجاك الشيخ للترحيلات', '249-0910317083-', NULL, NULL, NULL, NULL),
(632, '300001024420', 'ترحيلات ادريس شنقراي مصطفي', '249-0913376497-', NULL, NULL, NULL, NULL),
(633, '300001030932', 'رد لاين اكسبرس للترحيلات', '249-905837107-', 'sormeddevices@gmail.com', NULL, NULL, NULL),
(634, '300000987621', 'ترحيلات أبومؤمن', '249-912880389-', NULL, NULL, NULL, NULL),
(635, '130014687101', 'ترحيلات البدرى سليمان عبدالله', '121730123', NULL, NULL, NULL, NULL),
(636, '130015903501', 'سرابيل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(637, '130013730301', 'ترحيلات نفحات العامة', '999999999', NULL, NULL, NULL, NULL),
(638, '130015395701', 'اعمال ابوبكر النور للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(639, '130014050701', 'ترحيلات مجدى باشرى الطاهر باشرى للبضائع', '999999999', NULL, NULL, NULL, NULL),
(640, '130011572701', 'وليد عبد القادر للترحيل', '999999999', NULL, NULL, NULL, NULL),
(641, '130011719501', 'ايه كى ذد العالميه للترحيل', '912166699', NULL, NULL, NULL, NULL),
(642, '130010858100', 'شركة عبد الشكور للترحيل والخدمات المحدوده', '999999999', NULL, NULL, NULL, NULL),
(643, '130012319501', 'الاضواء للترحيل', '999999999', NULL, NULL, NULL, NULL),
(644, '130001318001', 'ترحيلات  قاسم محمد قاسم للنقل', '999999999', NULL, NULL, NULL, NULL),
(645, '130012703801', 'أبو خالد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(646, '130000505401', 'اعمال برتي للترحيل', '999999999', NULL, NULL, NULL, NULL),
(647, '130000562401', 'ابو عروض لخدمات الترحيلات', '999999999', NULL, NULL, NULL, NULL),
(648, '130012395201', 'ترحيلات طه التجاريه', '999999999', NULL, NULL, NULL, NULL),
(649, '130007237401', 'ترحيلات السلامة', '999999999', NULL, NULL, NULL, NULL),
(650, '130017958501', 'اعمال حسن نافع حسن للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(651, '130010774801', 'ابن المبارك للترحيل', '999999999', NULL, NULL, NULL, NULL),
(652, '130013296901', 'ابناء العمومة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(653, '130014751201', 'ترحيلات ابونبات', '999999999', NULL, NULL, NULL, NULL),
(654, '130014215601', 'ترحيلات الاسماعيلي سيتي', '999999999', NULL, NULL, NULL, NULL),
(655, '130001825001', 'اعمال جلكسي للترحيل', '999999999', NULL, NULL, NULL, NULL),
(656, '130013359901', 'المنزر للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(657, '130014580301', 'دعد للترحيل', '999999999', NULL, NULL, NULL, NULL),
(658, '130007061301', 'رجال للترحيل', '999999999', NULL, NULL, NULL, NULL),
(659, '130014578201', 'العزيمة اكسبريس للنقل والترحيل', '249-0122466288-', NULL, NULL, NULL, NULL),
(660, '130014304001', 'اليس للترحيلات', '912110159', NULL, NULL, NULL, NULL),
(661, '130011837201', 'ترحيلات الربيع', '999999999', NULL, NULL, NULL, NULL),
(662, '130015607301', ' اعمال الاعتماد لترحيل الركاب', '999999999', NULL, NULL, NULL, NULL),
(663, '130012270601', 'ترحيلات مكي', '999999999', NULL, NULL, NULL, NULL),
(664, '130014254701', 'اعمال بارود للترحيل', '999999999', NULL, NULL, NULL, NULL),
(665, '130011069300', 'قسم عوض الكريم على /ترحيلات ود التقى', '999999999', NULL, NULL, NULL, NULL),
(666, '130001222301', 'ابونون البدوى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(667, '130019153301', 'اعمال تيره للترحيل', '999999999', NULL, NULL, NULL, NULL),
(668, '130003436801', 'ترحيلات عثمان موسى محمد على دار قطنى', '249-123980798-', NULL, NULL, NULL, NULL),
(669, '130014346401', 'الحامدون لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(670, '130014681001', 'كويك موف للترحيل', '121057776', NULL, NULL, NULL, NULL),
(671, '130012062301', 'المامون سعد احمد عثمان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(672, '130007240701', 'اعمال العزتين للترحيل', '249-912156203-', NULL, NULL, NULL, NULL),
(673, '130007293201', 'ترحيلات اولاد باريس', '999999999', NULL, NULL, NULL, NULL),
(674, '130014326201', 'اعمال الصواهل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(675, '130015062201', 'ترحيلات برقدير', '999999999', NULL, NULL, NULL, NULL),
(676, '130002005601', 'ترحيلات ود الشيخ', '999999999', NULL, NULL, NULL, NULL),
(677, '130014671401', 'ترحيلات فرجون ', '999999999', NULL, NULL, NULL, NULL),
(678, '130014458401', 'الضواحي للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(679, '130011761401', 'صباح الخير حسن للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(680, '130015151201', 'اعمال ستموني للترحيلات ', '112149374', NULL, NULL, NULL, NULL),
(681, '130012740601', 'ترحيلات القمارى', '999999999', NULL, NULL, NULL, NULL),
(682, '130014080101', 'اللادار للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(683, '130014672201', 'ترحيلات ود اميلس', '999999999', NULL, NULL, NULL, NULL),
(684, '130011193401', 'عصوم للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(685, '130012413401', 'الاسيوطى مرين للترحيلات النهريه', '999999999', NULL, NULL, NULL, NULL),
(686, '130011091201', 'ترحيلات حواس', '999999999', NULL, NULL, NULL, NULL),
(687, '130002783501', 'جبل حفيد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(688, '130011784501', 'ترحيلات الوفاق', '999999999', NULL, NULL, NULL, NULL),
(689, '130000214300', 'ترحيلات خمسيون', '999999999', NULL, NULL, NULL, NULL),
(690, '130011101901', 'ترحيلات ابواسيل', '999999999', NULL, NULL, NULL, NULL),
(691, '130003671001', 'المزاومى للتجاره و الترحيلات', '999999999', NULL, NULL, NULL, NULL),
(692, '130018963701', 'ترحيلات سواحل', '912386457', NULL, NULL, NULL, NULL),
(693, '130008893601', 'ترحيلات الشافعي', '999999999', NULL, NULL, NULL, NULL),
(694, '130015444901', ' تالين للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(695, '130010794700', 'عوض السراج عثمان احمد / ترحيلات الباشا ', '999999999', NULL, NULL, NULL, NULL),
(696, '130011371001', 'ترحيلات ابو حواء', '912130095', NULL, NULL, NULL, NULL),
(697, '130007562101', 'ترحيلات احمد الدومه عبد الله', '249-912309919-', NULL, NULL, NULL, NULL),
(698, '130012786301', 'ترحيلات الريس', '999999999', NULL, NULL, NULL, NULL),
(699, '130012250202', 'النصر للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(700, '130016297501', ' ترحيلات قرقوري', '999999999', NULL, NULL, NULL, NULL),
(701, '130001456601', 'الوئام للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(702, '130001443801', 'أعمال ترياق للترحيل', '999999999', NULL, NULL, NULL, NULL),
(703, '130010778600', 'محمد احمد المدنى _ترحيلات المدنى', '999999999', NULL, NULL, NULL, NULL),
(704, '130014964501', 'اعمال ناصر عوض علي للترحيل', '999999999', NULL, NULL, NULL, NULL),
(705, '130001432001', 'ترحيلات الشرعاب', '999999999', NULL, NULL, NULL, NULL),
(706, '130012990401', 'يوسفيرا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(707, '130014761701', 'اليقطين للتجارة والترحيل ', '999999999', NULL, NULL, NULL, NULL),
(708, '130011035201', 'اعمال المدثر للترحيل', '999999999', NULL, NULL, NULL, NULL),
(709, '130014383001', 'ترحيلات حماس', '999999999', NULL, NULL, NULL, NULL),
(710, '130019099201', 'ترحيلات خطاوي', '999999999', NULL, NULL, NULL, NULL),
(711, '130003671002', 'ترحيلات المزمل', '999999999', NULL, NULL, NULL, NULL),
(712, '130006322201', 'نور ترانس للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(713, '130011003201', 'ترحيلات جبيت', '999999999', NULL, NULL, NULL, NULL),
(714, '130011143401', 'اعمال الصادق المقبول للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(715, '130012055501', 'امنية للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(716, '130013521401', 'هيمنة للترحيل', '999999999', NULL, NULL, NULL, NULL),
(717, '130014595901', 'ابو عبدالرحمن للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(718, '130014758001', 'اعمال الوحدة النقابية لعمال الشاحنات _محلية مدني الكبرى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(719, '130008955901', 'ترحيلات علي حسين', '999999999', NULL, NULL, NULL, NULL),
(720, '130016976201', ' اعمال المشرق الجديد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(721, '130018072901', 'ترحيلات الصداقة العالمية', '249-0912227936-', NULL, NULL, NULL, NULL),
(722, '130007331001', 'ترحيلات بشائر', '999999999', NULL, NULL, NULL, NULL),
(723, '130014159001', 'ترحيلات ابوسلمى', '999999999', NULL, NULL, NULL, NULL),
(724, '130010791801', 'ترحيلات ابو شكري', '999999999', NULL, NULL, NULL, NULL),
(725, '130012756701', 'أعمال الغبشاوى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(726, '130012607901', 'ترحيلات ابوهوازن ', '999999999', NULL, NULL, NULL, NULL),
(727, '130011457801', 'مكتب محمد سعد مجتبى عبدالله للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(728, '130011839001', 'ترحيلات كندك', '999999999', NULL, NULL, NULL, NULL),
(729, '130011006601', 'الشموخ للترحيل', '999999999', NULL, NULL, NULL, NULL),
(730, '130014661001', 'الدوحه للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(731, '130015111801', 'انهار للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(732, '130007242501', 'ترحيلات الزعيم', '999999999', NULL, NULL, NULL, NULL),
(733, '130007232901', 'ترحيلات الشمالية', '999999999', NULL, NULL, NULL, NULL),
(734, '130011302200', 'احمد محمد رجب جادين /ترحيلات باسرد ', '999999999', NULL, NULL, NULL, NULL),
(735, '130014722801', 'قولدن اسكاي للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(736, '130015058701', 'اعمال الجذور للتجارة والمقاولات والترحيلات', '999999999', NULL, NULL, NULL, NULL),
(737, '130010966601', 'ترحيلات عثمان يوسف حسن', '999999999', NULL, NULL, NULL, NULL),
(738, '130018715601', 'النوراني لخدمات الترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(739, '130003829900', 'ترحيلات المستخر', '999999999', NULL, NULL, NULL, NULL),
(740, '130001434001', 'اعمال مارجريتا للترحيل والخدمات', '999999999', NULL, NULL, NULL, NULL),
(741, '130012217301', 'شريان كردفان للترحيلات', '249-912759248-', NULL, NULL, NULL, NULL),
(742, '130010209101', 'الجبال الشرقية للترحيلات والسفريات', '249-904333277-', NULL, NULL, NULL, NULL),
(743, '130017745201', 'ترحيلات هواري رضوان', '999999999', NULL, NULL, NULL, NULL),
(744, '130003821800', 'ترحيلات ابن الوليد', '999999999', NULL, NULL, NULL, NULL),
(745, '130011495901', 'شالايه الصليحابى للترحيل', '999999999', NULL, NULL, NULL, NULL),
(746, '130014625401', 'بلح للتجارة والترحيل', '999999999', NULL, NULL, NULL, NULL),
(747, '130010774701', 'اعمال الزعيم للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(748, '130014789001', 'ترحيلات ابو وديع', '999999999', NULL, NULL, NULL, NULL),
(749, '130013589401', 'اعمال على كرار بابو للترحيل', '999999999', NULL, NULL, NULL, NULL),
(750, '130014212801', 'قمة الفخامة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(751, '130011933601', 'سفريات الكردفانى ابو هيفاء للترحيل', '999999999', NULL, NULL, NULL, NULL),
(752, '130000373700', 'ترحيلات ود الشايقى', '912455190', NULL, NULL, NULL, NULL),
(753, '130018041301', 'اعمال محمد علي بلة محمد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(754, '130007306701', 'ترحيلات البدوي', '999999999', NULL, NULL, NULL, NULL),
(755, '130011650101', 'الجنينة للتجارة والترحيل', '999999999', NULL, NULL, NULL, NULL),
(756, '130015027501', 'الارسنال للترحيلات ', '912542638', NULL, NULL, NULL, NULL),
(757, '130007279001', 'ترحيلات الرحمة', '999999999', NULL, NULL, NULL, NULL),
(758, '130007447600', 'ترحيلات لاحارث  ميرغنى  عبدالله دياب', '999999999', NULL, NULL, NULL, NULL),
(759, '130014213801', 'ابو مى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(760, '130018856001', 'الانيق للترحيلات', '912980396', NULL, NULL, NULL, NULL),
(761, '130013083201', 'ترحيلات شيقا', '999999999', NULL, NULL, NULL, NULL),
(762, '130012898101', 'سواح للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(763, '130007187301', 'كارور للترحيل', '999999999', NULL, NULL, NULL, NULL),
(764, '130015116701', 'اعمال فيصل مبارك حمد ابراهيم للترحيل', '2147483647', NULL, NULL, NULL, NULL),
(765, '130014978801', 'مكتب شرري للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(766, '130011135800', 'الخير عبد الرحيم محمد على الزين (ترحيلات ابو موفق)', '249-912455963-', NULL, NULL, NULL, NULL),
(767, '130015395901', 'ترحيلات ود المك', '999999999', NULL, NULL, NULL, NULL),
(768, '130007330801', 'ترحيلات وادى هور للنقل البرى', '999999999', NULL, NULL, NULL, NULL),
(769, '130014700501', 'ترحيلات العبدلابى', '249-09173133300-', NULL, NULL, NULL, NULL),
(770, '130011422202', 'اعمال ود ابراهيم حامد للترحيل', '999999999', NULL, NULL, NULL, NULL),
(771, '130003812800', 'ترحيلات  ابن الوليد', '999999999', NULL, NULL, NULL, NULL),
(772, '130014789101', 'اسبيد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(773, '130014659101', 'ترحيلات خضر عثمان محمد بله', '999999999', NULL, NULL, NULL, NULL),
(774, '130012030501', 'مزيونه لوجستك للنقل و الترحيل', '249-915245520-', NULL, NULL, NULL, NULL),
(775, '130014076401', 'مكتب تواصل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(776, '130012292801', 'اعمال عبد النور للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(777, '130015125901', 'احمد عبد الله للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(778, '130002872600', 'ترحيلات ابرار', '999999999', NULL, NULL, NULL, NULL),
(779, '130007261201', 'ترحيلات الايمان', '999999999', NULL, NULL, NULL, NULL),
(780, '130015418901', 'بني يوسف المميز للترحيلات ', '912222625', NULL, NULL, NULL, NULL),
(781, '130015560701', 'ابو العز للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(782, '130014258902', 'همسات للترحيل ', '999999999', NULL, NULL, NULL, NULL),
(783, '130013022801', 'شوائل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(784, '130007226001', 'التونسى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(785, '130006329501', 'ترحيلات ترمينى', '999999999', NULL, NULL, NULL, NULL),
(786, '130011773601', 'اعمال يوسف عبدالرحيم حسين للترحيل', '999999999', NULL, NULL, NULL, NULL),
(787, '130000282201', 'اعمال فائز بابكر للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(788, '130015147701', 'اعمال اسلاب للترحيلات', '914665002', NULL, NULL, NULL, NULL),
(789, '130007236601', 'خالد احمد الدومة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(790, '130015327801', 'الرماش للترحيل', '999999999', NULL, NULL, NULL, NULL),
(791, '130011911501', 'اعمال جلجلو لخدمات الترحيل', '912882985', NULL, NULL, NULL, NULL),
(792, '130014079301', 'ام القري للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(793, '130018880901', 'السمندل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(794, '130006844001', 'ترحيلات امين عبد الرازق الاحمدي ', '999999999', NULL, NULL, NULL, NULL),
(795, '130008966501', 'ابو هبه لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(796, '130014070501', 'عبدالله سعيد محمد ابراهيم لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(797, '130011763601', 'مرتضى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(798, '130015348801', 'راجى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(799, '130018709101', ' ترحيلات الباز', '999999999', NULL, NULL, NULL, NULL),
(800, '130014737001', 'ترحيلات الاستقامة ', '126232358', NULL, NULL, NULL, NULL),
(801, '130015197701', 'ابن عمر للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(802, '130001212701', 'ترحيلات الزمالة', '999999999', NULL, NULL, NULL, NULL),
(803, '130007249001', 'ترحيلات كردفان', '999999999', NULL, NULL, NULL, NULL),
(804, '130010799500', 'محمد عثمان زين العابدين الشريف /ترحيلات الخليج', '999999999', NULL, NULL, NULL, NULL),
(805, '130007248401', 'ترحيلات النضيف', '999999999', NULL, NULL, NULL, NULL),
(806, '130001198701', 'ترحيلات التضامن', '999999999', NULL, NULL, NULL, NULL),
(807, '130007265401', 'ترحيلات الناصع ابوقرة', '999999999', NULL, NULL, NULL, NULL),
(808, '130001926901', 'ترحيلات النصر', '999999999', NULL, NULL, NULL, NULL),
(809, '130013761202', ' سهم الرمال للترحيلات', '912242799', NULL, NULL, NULL, NULL),
(810, '130010776601', 'اعمال شفت انج للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(811, '130012020201', 'ابونا للترحيل', '999999999', NULL, NULL, NULL, NULL),
(812, '130001981501', 'اعمال سفاو للتجارة والترحيل', '999999999', NULL, NULL, NULL, NULL),
(813, '130015339901', 'روتينا للترحيل', '999999999', NULL, NULL, NULL, NULL),
(814, '130003835200', 'ترحيلات عربى', '999999999', NULL, NULL, NULL, NULL),
(815, '130003870300', 'ترحيلات التضامن', '999999999', NULL, NULL, NULL, NULL),
(816, '130015615801', 'ترحيلات كريكجة المزمل', '999999999', NULL, NULL, NULL, NULL),
(817, '130012471501', 'ترحيلات عوض ناصر', '999999999', NULL, NULL, NULL, NULL),
(818, '130014062801', 'الصادق رحمة الله جملنا للترحيل', '999999999', NULL, NULL, NULL, NULL),
(819, '130015244101', ' مكتب ودالحاج لترحيل الركاب', '912919449', NULL, NULL, NULL, NULL),
(820, '130012062101', 'واي اس للنقل والترحيل', '249-0912158560-', NULL, NULL, NULL, NULL),
(821, '130009524701', 'ترحيلات موسى احمد اسحق', '999999999', NULL, NULL, NULL, NULL),
(822, '130011135900', 'كمال عبد الرحيم محمد على (ترحيلات الاخوان) ', '999999999', NULL, NULL, NULL, NULL),
(823, '130012876301', 'ترحيلات مكى دين حسن عثمان', '249-097982512-', NULL, NULL, NULL, NULL),
(824, '130015023501', 'بوادينا للترحيلات المميزه', '999999999', NULL, NULL, NULL, NULL),
(825, '120018921201', 'مكتب ابومهند للترحيلات ', '249-0111122030-', NULL, NULL, NULL, NULL),
(826, '130015148201', 'اعمال دقدق للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(827, '130014059801', 'الدعوة للترحيل', '999999999', NULL, NULL, NULL, NULL),
(828, '130014849001', 'ترحيلات كوبيل', '999999999', NULL, NULL, NULL, NULL),
(829, '130014419101', 'المعقد الذهبي للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(830, '130014221401', 'المشد للتجارة و الترحيل', '249-123501150-', NULL, NULL, NULL, NULL),
(831, '130015625801', 'زورق الايمان المميز للترحيل ', '999999999', NULL, NULL, NULL, NULL),
(832, '130015008201', 'اساور لخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(833, '130012314201', 'الحضري ستيت للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(834, '130013453301', 'أعمال مبارك اسماعيل للترحيلات', '918026473', NULL, NULL, NULL, NULL),
(835, '130019040901', 'اعمال انهار الربيع للترحيلات', '249-0912354475-', NULL, NULL, NULL, NULL),
(836, '130001191201', 'ترحيلات اقرسكتي', '091228801', NULL, NULL, NULL, NULL),
(837, '130014069701', 'أعمال مارفل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(838, '130011109101', 'اعمال جارو للترحيل', '249-122013519-', NULL, NULL, NULL, NULL),
(839, '130014715001', 'ترحيلات الثغر', '999999999', NULL, NULL, NULL, NULL),
(840, '130012811901', 'المدير للترحيلات', '249-130012811900-', NULL, NULL, NULL, NULL),
(841, '130000214500', 'ترحيلات ريفي سولارا', '999999999', NULL, NULL, NULL, NULL),
(842, '120015961901', 'ترحيلات ابناء عبدالوهاب محمد صالح ', '999999999', NULL, NULL, NULL, NULL),
(843, '130019002501', 'عمار ابراهيم على ابراهيم للترحيل', '919559832', NULL, NULL, NULL, NULL),
(844, '130014885001', 'ابن يس للتجارة العمومية والاستثمار والترحيل', '912759039', NULL, NULL, NULL, NULL),
(845, '130008658001', 'الصمود للترحيلات', '249-0122926789-', NULL, NULL, NULL, NULL),
(846, '130014932001', 'سونيا الوطنية للترحيل', '999999999', NULL, NULL, NULL, NULL),
(847, '130014803401', 'التوكل الجديد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(848, '130015266101', 'جو كرى سلاملقو للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(849, '130006408101', 'ابو فهمي للترحيل ', '918134507', NULL, NULL, NULL, NULL),
(850, '130014239201', 'بيادا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(851, '130011418901', 'ترحيلات المكيلاب', '999999999', NULL, NULL, NULL, NULL),
(852, '130009121001', 'اعمال الصقر الفضي للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(853, '130001175301', 'ترحيلات العربي', '999999999', NULL, NULL, NULL, NULL),
(854, '130015946801', 'ابونصير للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(855, '130014909201', 'وائل جمال الدين للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(856, '130015227501', 'الوارف للترحيلات', '249-912308151-', NULL, NULL, NULL, NULL),
(857, '130014492801', 'صخرة الجبل للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(858, '130015778201', 'ترحيلات الحرمين', '999999999', NULL, NULL, NULL, NULL),
(859, '130019220501', 'ابوبكر عثمان للترحيلات', '918028987', NULL, NULL, NULL, NULL),
(860, '130014693401', 'ود بشار للترحيلات', '249-0912379422-', NULL, NULL, NULL, NULL),
(861, '130012407801', 'النقشابى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(862, '130014503501', 'ابو آية عبد المولى حسين عثمان ملاح للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(863, '130014658401', 'حرمنا للتجارة والترحيل ', '999999999', NULL, NULL, NULL, NULL),
(864, '130018788201', 'ترحيلات ابو زكريا', '999999999', NULL, NULL, NULL, NULL),
(865, '130001507500', 'هاشم عثمان خورشيد ترحيلات جوجو', '999999999', NULL, NULL, NULL, NULL),
(866, '130015583901', 'الهدايا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(867, '130012749601', 'القادة للترحيل و المقاولات', '999999999', NULL, NULL, NULL, NULL),
(868, '130001455801', 'ترحيلات البقنين', '999999999', NULL, NULL, NULL, NULL),
(869, '130012457601', 'اعمال هوقن للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(870, '130013848001', 'جسكابو للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(871, '130015262301', 'ترحيلات كلوناي', '999999999', NULL, NULL, NULL, NULL),
(872, '130018852501', 'مكتب ترحيلات حسن هداب', '912953315', NULL, NULL, NULL, NULL),
(873, '130012804601', 'اعمال الوليد بدوي الجاك للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(874, '130007265701', 'ترحيلات شرق دارفور', '999999999', NULL, NULL, NULL, NULL),
(875, '130015616101', 'القمة الجديد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(876, '130013384001', 'ترحيلات ود كرى', '999999999', NULL, NULL, NULL, NULL),
(877, '130015144401', 'روعة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(878, '130007250501', 'ترحيلات الدويم', '999999999', NULL, NULL, NULL, NULL),
(879, '130012413901', 'النرجس للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(880, '130013258601', 'قرة العين للترحيلات والمقاولات', '913424739', NULL, NULL, NULL, NULL),
(881, '130012564801', 'المكبسر للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(882, '130013404001', 'ترحيلات العنبرية', '999999999', NULL, NULL, NULL, NULL),
(883, '130015127701', 'اعمال احمد الامير للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(884, '130014376401', 'الغفاري للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(885, '130001205401', 'ترحيلات قرنتاوي', '122259348', NULL, NULL, NULL, NULL),
(886, '130012272301', 'ترحيلات خطوه', '999999999', NULL, NULL, NULL, NULL),
(887, '130007247101', 'ترحيلات الدنيا الجديدة', '999999999', NULL, NULL, NULL, NULL),
(888, '130001415400', 'ترحيلات وادي امور', '999999999', NULL, NULL, NULL, NULL),
(889, '130007234301', 'ترحيلات الجمهورية اكسبرس', '999999999', NULL, NULL, NULL, NULL),
(890, '130011517101', 'اعمال كود دى للترحيل', '999999999', NULL, NULL, NULL, NULL),
(891, '130011937301', 'ابو نخيلة اوجيه للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(892, '130011386201', 'اعمال يسن ابراهيم محمد الطيب للترحيل ', '999999999', NULL, NULL, NULL, NULL),
(893, '130014788201', 'ترحيلات النسر الذهبي', '999999999', NULL, NULL, NULL, NULL),
(894, '130016252201', 'ترحيلات متاع ', '912295285', NULL, NULL, NULL, NULL),
(895, '130018857301', 'الهديل للترحيلات', '249-0123191903-', NULL, NULL, NULL, NULL),
(896, '130000913601', 'اعمال تنيبور للتجاره و الترحيل', '999999999', NULL, NULL, NULL, NULL),
(897, '130014967901', 'ترحيلات ابو رناد', '999999999', NULL, NULL, NULL, NULL),
(898, '130000617301', 'نصر الدين للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(899, '130007237201', 'ترحيلات الصفاء', '999999999', NULL, NULL, NULL, NULL),
(900, '130015086701', 'مندولة للترحيل ', '999999999', NULL, NULL, NULL, NULL),
(901, '130015562401', 'بترو للترحيل', '999999999', NULL, NULL, NULL, NULL),
(902, '130001430101', 'حران للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(903, '130014729501', 'اعمال برهان للترحيلات ', '912902118', NULL, NULL, NULL, NULL),
(904, '130006172402', 'حمدي مبارك عباس للترحيلات', '912333939', NULL, NULL, NULL, NULL),
(905, '130018878501', 'اى سى بى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(906, '130000364101', 'ترحيلات تنزيل', '999999999', NULL, NULL, NULL, NULL),
(907, '130012250501', 'جاك للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(908, '130011917601', 'اولاد القاضى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(909, '130018847401', 'مكتب العمرانى للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(910, '130016448701', 'ترحيلات الكردفاني الجديد', '249-912479875-', NULL, NULL, NULL, NULL),
(911, '130015585501', 'ترحيلات الشهب مشكاة', '999999999', NULL, NULL, NULL, NULL),
(912, '130011854401', 'اعمال سهل احمد البشير للتجارة وخدمات الترحيل', '999999999', NULL, NULL, NULL, NULL),
(913, '130007322901', 'ترحيلات سلاطبن دارفور', '999999999', NULL, NULL, NULL, NULL),
(914, '130014540201', 'ترحيلات الصديق عباس عبد الله', '999999999', NULL, NULL, NULL, NULL),
(915, '130000363901', 'اعمال ابوعلاء الدين للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(916, '130002898601', 'اعمال ود ابو كليب التجارية للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(917, '130008756602', 'ابو ريم للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(918, '130010047202', 'الصليحابي للترحيلات العالمية', '999999999', NULL, NULL, NULL, NULL),
(919, '130011834401', 'ترحيلات عزو', '918049120', NULL, NULL, NULL, NULL),
(920, '130002998800', 'ترحيلات الصليحابي', '999999999', NULL, NULL, NULL, NULL),
(921, '130012194401', 'ترحيلات محمد دفع الله عيسى حمد النيل زاهر للنقل', '249-0913331583-', NULL, NULL, NULL, NULL),
(922, '130011391601', 'اعمال محمد المهدي للترحيل', '999999999', NULL, NULL, NULL, NULL),
(923, '130007260601', 'أورانوس للترحيل', '249-912158836-', NULL, NULL, NULL, NULL),
(924, '130014979501', 'ابو دكنة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(925, '130013757201', 'ابوزهور للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(926, '130011083301', 'ليما للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(927, '130012579901', 'ترحيلات جعفر ابراهيم رمضان', '999999999', NULL, NULL, NULL, NULL),
(928, '130010467201', 'عزو للترحيل الجماعى', '999999999', NULL, NULL, NULL, NULL),
(929, '130014356901', 'القمة الجديد للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(930, '130011483301', 'التوكل للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(931, '130010825601', 'ترحيلات اوسلى التجارية', '999999999', NULL, NULL, NULL, NULL),
(932, '130001611100', 'جمعية بورتسودان للنقل و الترحيل', '912998134', NULL, NULL, NULL, NULL),
(933, '130015031601', 'السفيرة للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(934, '130015317301', 'ترحيلات عبد الرحمن عبود اصيل', '999999999', NULL, NULL, NULL, NULL),
(935, '130015308601', 'ترحيلات الحامدين', '911604854', NULL, NULL, NULL, NULL),
(936, '130012864501', 'الذواق للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(937, '130007254801', 'ترحيلات ام رسوم', '999999999', NULL, NULL, NULL, NULL),
(938, '130014258901', 'غزه للترحيل', '999999999', NULL, NULL, NULL, NULL),
(939, '130010618801', 'عزو للترحيل الجماعى', '999999999', NULL, NULL, NULL, NULL),
(940, '130015551501', 'رويال ترانسبورت للترحيل', '999999999', NULL, NULL, NULL, NULL),
(941, '130014710301', 'ترحيلات الصيدلى', '999999999', NULL, NULL, NULL, NULL),
(942, '130011837601', 'ترحيلات ودجبرون', '999999999', NULL, NULL, NULL, NULL),
(943, '130014972101', 'اعمال بساط الريح للترحيلات', '249-961299997-', NULL, NULL, NULL, NULL),
(944, '130014658301', 'اعمال الكف الاخضر للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(945, '130003795800', 'ترحيلات النقل الجماعى', '999999999', NULL, NULL, NULL, NULL),
(946, '130010860801', 'ترحيلات المستور', '999999999', NULL, NULL, NULL, NULL),
(947, '130014477901', 'ودخوجلي للترحيلات ', '911155773', NULL, NULL, NULL, NULL),
(948, '130014850302', 'اعمال محمد عبدالله للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(949, '130011301801', 'سفريات و ترحيلات الجزيره 24 القرشى', '999999999', NULL, NULL, NULL, NULL),
(950, '130000505601', 'اعمال الوالدين للترحيلات', '912508110', NULL, NULL, NULL, NULL),
(951, '130003809400', 'وكيل ترحيلات العمرابى', '999999999', NULL, NULL, NULL, NULL),
(952, '130015261701', '  هانت للنقل والترحيل', '999999999', NULL, NULL, NULL, NULL),
(953, '130001916901', 'ترحيلات الميرفابى', '999999999', NULL, NULL, NULL, NULL),
(954, '130006099501', 'نجمة الرضا للترحيل', '999999999', NULL, NULL, NULL, NULL),
(955, '130013855201', 'كباكة  للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(956, '130014376201', 'الغفارى للترحيلات', '912372345', NULL, NULL, NULL, NULL),
(957, '130010857701', 'الفرسان للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(958, '130011415801', 'شندرا للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(959, '130011771401', 'ترحيلات سيف الدين حدباى', '999999999', NULL, NULL, NULL, NULL),
(960, '130001421801', 'ترحيلات البعد الثالث', '999999999', NULL, NULL, NULL, NULL),
(961, '130014647801', 'ابو صلاح الدين للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(962, '130001336101', 'ام .اتش .ام  للتخليص والترحيل', '912310182', NULL, NULL, NULL, NULL),
(963, '130003760900', 'وكيل ترحيلات الغرفه الفرعيه', '999999999', NULL, NULL, NULL, NULL),
(964, '130001361801', 'اعمال طارق عمر للترحيل', '999999999', NULL, NULL, NULL, NULL),
(965, '130000362501', 'عبدالله الامين للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(966, '130007306501', 'ترحيلات دبي', '999999999', NULL, NULL, NULL, NULL),
(967, '130011343501', 'أعمال أبو الكل للترحيلات ', '999999999', NULL, NULL, NULL, NULL),
(968, '130007273001', 'ترحيلات الشروق', '999999999', NULL, NULL, NULL, NULL),
(969, '130007249801', 'ترحيلات الصحوة', '999999999', NULL, NULL, NULL, NULL),
(970, '130015253901', ' ترحيلات المبشر', '999999999', NULL, NULL, NULL, NULL),
(971, '130001235101', 'ترحيلات سالنتود', '999999999', NULL, NULL, NULL, NULL),
(972, '130014985701', ' ترحيلات علويه احمد موسى', '999999999', NULL, NULL, NULL, NULL),
(973, '130015088701', 'مكتب عطا المنان الطيب عطا المنان لترحيلات البضائع والعفش', '999999999', NULL, NULL, NULL, NULL),
(974, '130007292601', 'ترحيلات دمباوية', '999999999', NULL, NULL, NULL, NULL),
(975, '130012213001', 'ترحيلات ينسد', '999999999', NULL, NULL, NULL, NULL),
(976, '130018370301', 'ترحيلات فلج المعلا', '910213100', NULL, NULL, NULL, NULL),
(977, '130017804801', 'الميراب للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(978, '130007257201', 'ترحيلات الاخلاص', '999999999', NULL, NULL, NULL, NULL),
(979, '130006529001', 'ترحيلات المتعارض', '999999999', NULL, NULL, NULL, NULL),
(980, '130011418801', 'اعمال ود نميجه للترحيلات', '999999999', NULL, NULL, NULL, NULL),
(981, '130007283801', 'ترحيلات ود مطر', '999999999', NULL, NULL, NULL, NULL),
(982, '300000639381', 'الصخرة العالمية للترحيلات', '249-0912669454-', NULL, NULL, NULL, NULL),
(983, '130007293001', 'ترحيلات المرين', '999999999', NULL, NULL, NULL, NULL),
(984, '130012559101', 'سفريات بختان للترحيل', '912200287', NULL, NULL, NULL, NULL),
(985, '130015268201', 'مكتب السندسية للترحيلات', '249-0912225126-', NULL, NULL, NULL, NULL),
(986, '130015440301', 'اعمال ميسان للترحيلات', '999999999', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_ids`
--

CREATE TABLE `type_of_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_ids`
--

INSERT INTO `type_of_ids` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'رقم وطني', NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(2, 'جواز', NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(3, 'رخصة قيادة', NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34'),
(4, 'رقم تعريفي', NULL, '2022-08-31 07:34:34', '2022-08-31 07:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `roles_name`, `status`, `office_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'حسين خالد الحاج', 'admin@admin.com', 'admin', NULL, '$2y$10$kRnfhr/IVeh8tu9C53X1Z.dlM5CJpIqDZus8uRnirROa2c57TLz.S', '[\"owner\"]', 'مفعل', 1, NULL, '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(2, 'علي عمر الحاج', 'bh@admin.com', 'admin2', NULL, '$2y$10$Udfr7eKTAyDu0gWnIsjW3OoSErZUPhhLb1RbX91MM9/dON8q.S34i', '[\"owner\"]', 'مفعل', 2, NULL, '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(3, 'حسين خالد الحاج', 'kh@admin.com', 'admin3', NULL, '$2y$10$WpHzH9cn8ORouu/wyrPC8eFk7INHQnZXi6lXcAcGUqUOokTbY479e', '[\"owner\"]', 'مفعل', 3, NULL, '2022-08-31 07:34:29', '2022-08-31 07:34:29'),
(4, 'عماد المحاسب', 'acc@admin.com', 'admin4', NULL, '$2y$10$XVfXAt2NucnED71Qcx4FOehYGTXSm3IvlDnGxgMeJlOkeoSMJ2HuG', '[\"accountant\"]', 'مفعل', 1, NULL, '2022-08-31 07:34:30', '2022-08-31 07:34:30'),
(5, 'معتصم عمران', 'ins@admin.com', 'ins1', NULL, '$2y$10$SChjbqrh4xLKwIplI7gpjOgDOXjwjWFxT6iEl13sMouBnyTUQTTfq', '[\"\\u0645\\u0641\\u062a\\u0634\"]', 'مفعل', 1, NULL, '2022-08-31 07:34:30', '2022-08-31 07:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lds`
--
ALTER TABLE `lds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lds_email_unique` (`email`);

--
-- Indexes for table `localities`
--
ALTER TABLE `localities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manfistos`
--
ALTER TABLE `manfistos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manfistos_man_no_transporter_id_unique` (`man_no`,`transporter_id`),
  ADD KEY `manfistos_acc_user_id_foreign` (`acc_user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penalties`
--
ALTER TABLE `penalties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penalty_owners`
--
ALTER TABLE `penalty_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penalty_types`
--
ALTER TABLE `penalty_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penalty_types_name_office_id_unique` (`name`,`office_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `q_r_s`
--
ALTER TABLE `q_r_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transporters_tin_unique` (`tin`);

--
-- Indexes for table `type_of_ids`
--
ALTER TABLE `type_of_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lds`
--
ALTER TABLE `lds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localities`
--
ALTER TABLE `localities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `manfistos`
--
ALTER TABLE `manfistos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penalties`
--
ALTER TABLE `penalties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penalty_owners`
--
ALTER TABLE `penalty_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penalty_types`
--
ALTER TABLE `penalty_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `q_r_s`
--
ALTER TABLE `q_r_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987;

--
-- AUTO_INCREMENT for table `type_of_ids`
--
ALTER TABLE `type_of_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manfistos`
--
ALTER TABLE `manfistos`
  ADD CONSTRAINT `manfistos_acc_user_id_foreign` FOREIGN KEY (`acc_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
