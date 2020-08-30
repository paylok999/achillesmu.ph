-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2020 at 02:40 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `page`, `content`) VALUES
(1, '', 'content1', 'content1'),
(2, '', 'content2', 'conten2'),
(3, '', 'content3', 'conten3'),
(4, '', 'content4', 'conten4'),
(5, '', 'content5', 'conten5'),
(6, '', 'content6', 'conten6'),
(7, '', 'content7', 'http://seamu.net/img/main/2.jpg'),
(8, '', 'content8', 'conten8'),
(9, 's2', 's2', 'https://www.mediafire.com/file/rsogc3u13kxaapx/SeaMU_Season2_7-12-2020_stable.rar/file'),
(10, 's15', 's15', 'http://www.mediafire.com/file/hkksfk940h2z6pu/SeaMU_Season15p3_7-05-2020.rar/file');

-- --------------------------------------------------------

--
-- Table structure for table `duelmaster`
--

CREATE TABLE `duelmaster` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `class` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duelmaster`
--

INSERT INTO `duelmaster` (`id`, `name`, `class`, `created_at`, `updated_at`) VALUES
(1, 'AirForce1~', '39', '2019-09-17 07:01:55', '2019-09-17 07:01:55'),
(2, 'Raptors', '23', '2019-09-17 08:02:28', '2019-09-17 08:02:28'),
(3, 'Outbreakk', '23', '2019-09-17 08:08:25', '2019-09-17 08:08:25'),
(4, 'Professor', '7', '2019-09-17 08:10:58', '2019-09-17 08:10:58'),
(5, 'EvilGenius', '23', '2019-09-17 21:52:01', '2019-09-17 21:52:01'),
(6, 'AVICII', '23', '2019-09-17 21:53:43', '2019-09-17 21:53:43'),
(7, 'JARHEAD', '23', '2019-09-18 02:10:21', '2019-09-18 02:10:21'),
(8, 'WANGBU', '23', '2019-09-18 03:48:47', '2019-09-18 03:48:47'),
(9, 'BELGlCA', '7', '2019-09-18 03:50:46', '2019-09-18 03:50:46'),
(10, 'Jepoy™', '23', '2019-09-18 07:52:26', '2019-09-18 07:52:26'),
(11, 'Keeks', '23', '2019-09-18 07:58:11', '2019-09-18 07:58:11'),
(12, 'ASAPROCKY', '23', '2019-09-18 08:06:52', '2019-09-18 08:06:52'),
(13, 'Jaycem™', '70', '2019-09-18 08:26:52', '2019-09-18 08:26:52'),
(14, 'MONSTER', '23', '2019-09-18 10:04:45', '2019-09-18 10:04:45'),
(15, 'SuRoT', '23', '2019-09-18 10:18:56', '2019-09-18 10:18:56'),
(16, 'SALONGA™', '39', '2019-09-18 13:09:35', '2019-09-18 13:09:35'),
(17, 'GOLEM™', '7', '2019-09-18 13:11:15', '2019-09-18 13:11:15'),
(18, 'Fei†an', '23', '2019-09-18 14:08:51', '2019-09-18 14:08:51'),
(19, 'Cone', '118', '2019-09-18 15:20:22', '2019-09-18 15:20:22'),
(20, 'Paragon', '23', '2019-09-19 05:31:41', '2019-09-19 05:31:41'),
(21, 'iGloriosmO', '23', '2019-09-19 12:31:46', '2019-09-19 12:31:46'),
(22, 'Evangelion', '7', '2019-09-19 22:55:45', '2019-09-19 22:55:45'),
(23, 'Gibo', '23', '2019-09-20 02:01:27', '2019-09-20 02:01:27'),
(24, 'Minions', '118', '2019-09-20 06:14:05', '2019-09-20 06:14:05'),
(25, 'APOCALYPTO', '23', '2019-09-20 06:18:46', '2019-09-20 06:18:46'),
(26, 'Uuniverse', '118', '2019-09-20 06:36:38', '2019-09-20 06:36:38'),
(27, 'GALAXY', '102', '2019-09-20 06:38:52', '2019-09-20 06:38:52'),
(28, 'Orthoclase', '23', '2019-09-20 06:57:56', '2019-09-20 06:57:56'),
(29, 'ZeanAXL', '23', '2019-09-20 07:13:20', '2019-09-20 07:13:20'),
(30, 'X. XXVI.X', '23', '2019-09-20 15:16:35', '2019-09-20 15:16:35'),
(31, 'IamROBxBK', '23', '2019-09-20 15:30:09', '2019-09-20 15:30:09'),
(32, 'BLUEDREAM', '23', '2019-09-20 15:32:04', '2019-09-20 15:32:04'),
(33, 'Whoami', '7', '2019-09-20 15:49:25', '2019-09-20 15:49:25'),
(34, 'Lucifer', '7', '2019-09-21 02:09:08', '2019-09-21 02:09:08'),
(35, 'Cocktail', '7', '2019-09-21 07:53:10', '2019-09-21 07:53:10'),
(36, 'Asmodeus', '7', '2019-09-21 19:59:27', '2019-09-21 19:59:27'),
(37, 'xSakura', '39', '2019-09-21 23:28:18', '2019-09-21 23:28:18'),
(38, 'Lust69', '7', '2019-09-22 02:31:54', '2019-09-22 02:31:54'),
(39, 'xAsunAx', '39', '2019-09-22 17:13:03', '2019-09-22 17:13:03'),
(40, '07-10-17', '39', '2019-09-23 05:28:26', '2019-09-23 05:28:26'),
(41, 'VAPEKING', '54', '2019-09-24 03:50:42', '2019-09-24 03:50:42'),
(42, 'KENPACHI', '54', '2019-09-24 05:14:57', '2019-09-24 05:14:57'),
(43, 'Noodles', '39', '2019-09-24 05:17:58', '2019-09-24 05:17:58'),
(44, 'EQUINOX', '102', '2019-09-24 14:12:44', '2019-09-24 14:12:44'),
(45, 'aeMAMUKIae', '39', '2019-09-25 09:24:41', '2019-09-25 09:24:41'),
(46, 'MiSsSHOT', '39', '2019-09-27 02:31:54', '2019-09-27 02:31:54'),
(47, 'JOPRING', '102', '2019-09-27 11:55:34', '2019-09-27 11:55:34'),
(48, 'MANOY', '102', '2019-09-27 11:57:33', '2019-09-27 11:57:33'),
(49, 'BOOYONG', '70', '2019-09-27 11:59:36', '2019-09-27 11:59:36'),
(50, 'Sutil28', '39', '2019-09-27 15:36:00', '2019-09-27 15:36:00'),
(51, 'GoooogLe', '54', '2019-09-27 16:06:46', '2019-09-27 16:06:46'),
(52, 'HuDaSs', '54', '2019-09-27 16:20:28', '2019-09-27 16:20:28'),
(53, 'DRACARYS', '54', '2019-09-27 18:05:59', '2019-09-27 18:05:59'),
(54, 'xZeroWinx', '39', '2019-09-27 20:04:00', '2019-09-27 20:04:00'),
(55, 'ISofiaI', '39', '2019-09-27 20:34:57', '2019-09-27 20:34:57'),
(56, 'QUICKSLVER', '39', '2019-09-28 01:06:51', '2019-09-28 01:06:51'),
(57, 'NANI', '54', '2019-09-28 03:57:24', '2019-09-28 03:57:24'),
(58, 'iDracaena', '70', '2019-09-30 17:56:00', '2019-09-30 17:56:00'),
(59, 'iMANNY', '70', '2019-10-01 20:29:07', '2019-10-01 20:29:07'),
(60, 'BOOO0YAH', '70', '2019-10-01 20:32:10', '2019-10-01 20:32:10'),
(61, 'DLBOlT', '70', '2019-10-02 04:16:12', '2019-10-02 04:16:12'),
(62, 'Ryden™', '70', '2019-10-02 04:19:09', '2019-10-02 04:19:09'),
(63, 'MapamuksA', '102', '2019-10-02 08:45:22', '2019-10-02 08:45:22'),
(64, 'SnickerS', '87', '2019-10-02 23:23:51', '2019-10-02 23:23:51'),
(65, 'HADO', '70', '2019-10-03 08:35:12', '2019-10-03 08:35:12'),
(66, 'ALYY', '87', '2019-10-03 11:31:03', '2019-10-03 11:31:03'),
(67, 'PervySage', '70', '2019-10-03 13:08:15', '2019-10-03 13:08:15'),
(68, 'PunyemaS', '70', '2019-10-04 03:18:36', '2019-10-04 03:18:36'),
(69, 'Bhairava', '70', '2019-10-04 06:20:41', '2019-10-04 06:20:41'),
(70, 'Xerxes', '87', '2019-10-04 07:06:56', '2019-10-04 07:06:56'),
(71, 'DROGON', '70', '2019-10-04 11:57:20', '2019-10-04 11:57:20'),
(72, 'SANABABISH', '102', '2019-10-07 12:54:25', '2019-10-07 12:54:25'),
(73, 'BALASIK', '102', '2019-10-09 07:22:40', '2019-10-09 07:22:40'),
(74, 'Pornhub', '102', '2019-10-09 14:08:34', '2019-10-09 14:08:34'),
(75, 'Brynhildr', '118', '2019-10-09 23:32:14', '2019-10-09 23:32:14'),
(76, 'zhnk', '135', '2019-10-10 06:23:51', '2019-10-10 06:23:51'),
(77, '1PunchMan', '102', '2019-10-10 11:12:49', '2019-10-10 11:12:49'),
(78, 'Thanos', '102', '2019-10-10 14:19:16', '2019-10-10 14:19:16'),
(79, 'PANGATAY', '118', '2019-10-11 02:42:02', '2019-10-11 02:42:02'),
(80, 'iPhoneX', '102', '2019-10-11 10:25:04', '2019-10-11 10:25:04'),
(81, '†aonopa', '118', '2019-10-12 17:25:26', '2019-10-12 17:25:26'),
(82, '†ibo', '135', '2019-10-12 17:27:13', '2019-10-12 17:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `lottery`
--

CREATE TABLE `lottery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery`
--

INSERT INTO `lottery` (`id`, `name`, `item`, `description`, `image`, `date`) VALUES
(1, 'Errtel of Choice\n(no radiance)', 'Errtel of Choice\n(Anger, Divinity, Blessing, Integrity) Element of Choice', 'Raffle Date: November 10, 2019, 11:59pm (via Facebook Live)', 'http://playmu.ph/img/raffle/raffle_3.png', '2019-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lottery_user`
--

CREATE TABLE `lottery_user` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` int(20) NOT NULL,
  `approve` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_user`
--

INSERT INTO `lottery_user` (`id`, `name`, `type`, `approve`, `created_at`) VALUES
(1, 'panggulo4', 3, 1, '2019-10-29 20:43:16'),
(2, 'marklee9', 3, 1, '2019-10-29 20:47:26'),
(3, 'richcabz', 3, 1, '2019-11-05 01:37:07'),
(4, 'dudot10000', 3, 1, '2019-11-07 15:35:29'),
(5, 'joel21', 3, 1, '2019-12-11 20:58:49'),
(6, 'joel21', 3, 1, '2019-12-11 20:59:09'),
(7, 'joel21', 3, 1, '2019-12-11 20:59:24'),
(8, 'joel21', 3, 1, '2019-12-11 20:59:40'),
(9, 'joel21', 3, 1, '2019-12-11 20:59:55'),
(10, 'joel21', 3, 1, '2019-12-11 21:00:15'),
(11, 'joel21', 3, 1, '2019-12-11 21:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `loyalty`
--

CREATE TABLE `loyalty` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `points` int(11) NOT NULL,
  `claimed` int(11) NOT NULL,
  `from_merchant` int(11) NOT NULL,
  `raffle` int(11) NOT NULL,
  `total_donate` int(11) NOT NULL,
  `april_donate` int(11) NOT NULL,
  `july_donate` int(11) NOT NULL,
  `july_donate_bonus` int(11) NOT NULL,
  `october_donate` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyalty`
--

INSERT INTO `loyalty` (`id`, `username`, `points`, `claimed`, `from_merchant`, `raffle`, `total_donate`, `april_donate`, `july_donate`, `july_donate_bonus`, `october_donate`, `balance`) VALUES
(1, 'sayanara10', 0, 450, 0, 100, 80000, 0, 0, 0, 0, 0),
(2, 'panggulo1', 0, 250, 0, 0, 0, 20000, 16500, 0, 0, 0),
(3, 'adefuin19', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Achilles11', 0, 400, 0, 10, 0, 70000, 5000, 10000, 0, 0),
(6, 'tricker1', 30, 600, 0, 60, 20000, 0, 10000, 0, 0, 0),
(7, 'boytigas', 50, 20, 1, 0, 0, 0, 0, 0, 0, 0),
(8, 'AthleteBK', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'kyzyL68', 0, 25, 0, 25, 5000, 0, 0, 0, 0, 0),
(10, 'Dutaus01', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'ashur04', 45, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(12, 'QueenNIKI', 20, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'vinolino', 50, 420, 0, 60, 35000, 40000, 20000, 0, 2000, 0),
(15, 'jeans1010', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'amara123', 50, 0, 0, 15, 25000, 0, 0, 0, 0, 0),
(17, 'dutauso1', 0, 100, 0, 20, 10000, 0, 0, 0, 0, 0),
(18, 'andreii726', 12, 0, 0, 0, 1200, 0, 0, 0, 0, 0),
(19, 'arcee05', 10, 0, 0, 40, 40000, 0, 0, 0, 0, 0),
(20, 'iamrob', 0, 200, 0, 0, 10000, 0, 0, 0, 0, 0),
(21, 'bryancls', 0, 100, 0, 40, 10000, 0, 0, 0, 0, 0),
(22, 'mariposa22', 30, 0, 0, 10, 5000, 0, 7000, 0, 0, 0),
(23, 'calgary4', 50, 0, 0, 10, 5000, 16000, 24000, 18000, 0, 0),
(24, 'Dfortitude', 460, 0, 0, 0, 4000, 16000, 0, 0, 0, 0),
(25, 'mommy0204', 35, 0, 0, 0, 5000, 0, 4000, 0, 0, 0),
(26, 'baregoals', 40, 0, 0, 0, 2000, 0, 0, 0, 0, 0),
(27, 'koreaako4', 0, 0, 0, 0, 0, 10000, 4000, 0, 0, 0),
(28, 'jasminelia', 0, 0, 0, 0, 0, 10000, 5500, 0, 0, 0),
(29, 'switch5000', 0, 0, 0, 0, 0, 10000, 0, 0, 0, 0),
(30, 'Margaux', 0, 0, 0, 0, 0, 30000, 0, 0, 0, 0),
(31, 'farmfarm4', 0, 0, 0, 0, 0, 0, 3000, 0, 0, 0),
(32, 'Olonicus', 20, 0, 0, 0, 0, 0, 2000, 0, 0, 0),
(33, 'gmpogi', 0, 0, 0, 0, 0, 0, 8000, 0, 0, 0),
(34, 'phpbentong', 0, 0, 0, 0, 0, 0, 2000, 0, 0, 0),
(35, 'linhyendl', 70, 0, 0, 0, 0, 0, 7000, 0, 0, 0),
(36, 'keekyow', 40, 0, 0, 0, 0, 0, 6000, 0, 0, 0),
(37, 'rustee', 0, 0, 0, 0, 0, 0, 6000, 0, 0, 0),
(38, 'phpbentong', 20, 0, 0, 0, 0, 0, 2000, 0, 0, 0),
(39, 'insideman1', 170, 0, 0, 0, 0, 0, 22000, 0, 0, 0),
(40, 'jhetotbk', 40, 0, 0, 0, 0, 0, 4000, 0, 0, 0),
(41, 'bkaccount', 40, 0, 0, 0, 0, 0, 4000, 0, 0, 0),
(42, 'spuddy', 0, 0, 0, 0, 0, 0, 2000, 0, 0, 0),
(43, 'boytigas', 0, 0, 0, 0, 0, 0, 4000, 0, 0, 0),
(44, 'cezkie', 0, 0, 0, 0, 0, 0, 2500, 0, 0, 0),
(45, 'HastePanda', 20, 0, 0, 0, 0, 0, 4000, 0, 0, 0),
(46, 'tikboy1000', 40, 0, 0, 0, 0, 0, 4000, 0, 0, 0),
(51, 'phiathea22', 200, 0, 0, 0, 0, 0, 0, 0, 6000, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `update_type` varchar(10) NOT NULL,
  `img` text NOT NULL,
  `body` text NOT NULL,
  `form` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `live` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `update_type`, `img`, `body`, `form`, `created_at`, `live`) VALUES
(1, 'Official Launch Rankings Event!', '', 'http://seamu.net/img/main/2.jpg', '\r\n<p>Official Server will open today, July 12, 2020 9am PH Time. You can now start downloading your client and updating it to the latest version by running launcher.exe\r\nRankings event will also start the moment the server is up!</p>\r\n<p>Spread the words and enjoy the game!</p>', '', '2020-07-11 21:51:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('phpmyadmin', '[{\"db\":\"phpmyadmin\",\"table\":\"content\"},{\"db\":\"phpmyadmin\",\"table\":\"news\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('phpmyadmin', '2020-06-24 01:56:27', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tier`
--

CREATE TABLE `tier` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `points` int(11) NOT NULL,
  `claimed` int(11) NOT NULL,
  `raffle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tier`
--

INSERT INTO `tier` (`id`, `username`, `points`, `claimed`, `raffle`) VALUES
(1, 'vinolino', 7000, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(11) NOT NULL,
  `guildname` varchar(255) NOT NULL,
  `members` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id`, `guildname`, `members`) VALUES
(1, 'guildname', 'one\r\ntwo\r\nthree'),
(2, 'ZeroWin', 'Gorgeous xZeroWinx PunyemaS'),
(3, 'HAiLE', 'MONSTER JOPRING WhosNext'),
(4, 'KINGPlN', 'Uuniverse\r\nGoooogLe\r\nJARHEAD'),
(5, 'Cone', 'Cone, iPhoneX, 1PieceZORO'),
(6, 'DRACARYS', 'SuRoT, Santorini, Kristine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duelmaster`
--
ALTER TABLE `duelmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery`
--
ALTER TABLE `lottery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery_user`
--
ALTER TABLE `lottery_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loyalty`
--
ALTER TABLE `loyalty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tier`
--
ALTER TABLE `tier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `duelmaster`
--
ALTER TABLE `duelmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `lottery`
--
ALTER TABLE `lottery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lottery_user`
--
ALTER TABLE `lottery_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `loyalty`
--
ALTER TABLE `loyalty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tier`
--
ALTER TABLE `tier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
