-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 03:43 PM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int NOT NULL,
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
(4, '', 'Terms of Service', '<p>We are trying to protect our players from obscene, harassment, and defamatory words. This is one of the reason why players quit the game. instead of growing, we become les and less because of those foul languages and believe me, you don\'t want that.</p>\r\n<p>For players who keeps on trash talking and spamming in game, please read <a href=\"https://mu.playpark.com/en-sea/game-policy\" target=\"_blank\">Play Park Game Policy</a>. We will follow it as our game is base on them.</p>\r\n<p>1st Offense - Chat ban indefinitely.</p>\r\n<p>2nd Offens - IP/PC Ban and all of characters involve on that machine.e</p>\r\n<p>Please be guided accordingly. </p>\r\n'),
(5, '', 'content5', 'conten5'),
(6, '', 'content6', 'conten6'),
(7, '', 'main', 'http://playmu.ph/img/fb_header2.jpg'),
(8, '', 'content8', 'conten8'),
(9, 's2', 's2', 'https://drive.google.com/file/d/1wAUj_L0rFXZwUqhOzmFL5aJEPwuQVDMw/view?usp=share_link'),
(10, 's15', 's15', 'https://drive.google.com/file/d/1wAUj_L0rFXZwUqhOzmFL5aJEPwuQVDMw/view?usp=share_link');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int NOT NULL,
  `coupon` varchar(50) NOT NULL,
  `claimed` int NOT NULL DEFAULT '0',
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `streamer` varchar(255) NOT NULL,
  `ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `event` int NOT NULL DEFAULT '1',
  `prize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon`, `claimed`, `username`, `streamer`, `ip`, `event`, `prize`) VALUES
(1, 'PMUEFAU64RJ9Z', 1, 'gabbo0005', 'taonopa', '58.69.175.161', 1, '14,14,10'),
(2, 'PMU6MA8FAVZEM', 1, 'AaronBros', 'taonopa', '112.200.142.14', 1, '14,14,10'),
(3, 'PMUGVZNXSEQJB', 1, 'mainhero', 'taonopa', '112.207.104.243', 1, '14,14,20'),
(4, 'PMU2AV33M9Z3A', 1, 'Vinokyo18', 'taonopa', '180.190.97.127', 1, '14,14,20'),
(5, 'PMUWQU5DACVWF', 1, 'arcee05', 'taonopa', '73.15.197.32', 1, '14,14,30'),
(6, 'PMUTWZRFWH7J8', 1, 'antonio', 'taonopa', '120.29.77.191', 1, '14,14,30'),
(7, 'PMUEJAYDQHXHV', 1, 'AaronBros', 'taonopa', '112.200.142.14', 1, '14,13,10'),
(8, 'PMUTT55MWP2MR', 1, 'archie0', 'taonopa', '120.28.139.252', 1, '14,13,10'),
(9, 'PMUTVYR42RSJH', 1, 'gabbo0005', 'taonopa', '58.69.175.161', 1, '14,13,20'),
(10, 'PMU952NSDC6FP', 1, 'archie0', 'taonopa', '122.54.193.69', 1, '14,13,30');

-- --------------------------------------------------------

--
-- Table structure for table `duelmaster`
--

CREATE TABLE `duelmaster` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` int NOT NULL,
  `approve` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_user`
--

INSERT INTO `lottery_user` (`id`, `name`, `type`, `approve`) VALUES
(1, 'panggulo4', 3, 1),
(2, 'marklee9', 3, 1),
(3, 'richcabz', 3, 1),
(4, 'dudot10000', 3, 1),
(5, 'joel21', 3, 1),
(6, 'joel21', 3, 1),
(7, 'joel21', 3, 1),
(8, 'joel21', 3, 1),
(9, 'joel21', 3, 1),
(10, 'joel21', 3, 1),
(11, 'joel21', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loyalty`
--

CREATE TABLE `loyalty` (
  `id` int NOT NULL,
  `username` varchar(10) NOT NULL,
  `points` int NOT NULL,
  `claimed` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loyalty`
--

INSERT INTO `loyalty` (`id`, `username`, `points`, `claimed`) VALUES
(1, 'AaPaAc', 5000, 0),
(2, 'eeruud1', 2000, 0),
(3, 'Dementor', 800, 0),
(4, 'Dhen0221', 11500, 2500),
(7, 'ICECOLD18', 0, 5000),
(8, 'summygaw18', 5000, 0),
(11, 'lynchie214', 500, 0),
(12, 'muplay16', 2500, 7500),
(13, 'kinkyDoo', 12500, 0),
(14, 'CokeZeroW', 1000, 0),
(15, 'honor38', 5500, 0),
(16, 'alteum441', 300, 0),
(17, 'newfarmer2', 1800, 0),
(18, 'event2020', 3000, 0),
(21, 'main10', 800, 0),
(22, 'youleng2', 8500, 0),
(23, 'leouz2325', 1000, 0),
(24, 'McOlly11', 500, 0),
(27, 'mikhail', 9000, 0),
(28, '1234567', 4100, 0),
(29, 'kicker364', 6000, 0),
(30, 'zion1231', 1000, 0),
(31, 'jopring01', 1000, 5000),
(32, 'shrek1', 44500, 7500),
(33, 'QMDjcd123', 32500, 30000),
(34, 'kukz4fun02', 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `subject` text NOT NULL,
  `update_type` varchar(10) NOT NULL,
  `img` text NOT NULL,
  `body` text NOT NULL,
  `form` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `live` int NOT NULL DEFAULT '1',
  `header` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `update_type`, `img`, `body`, `form`, `created_at`, `live`, `header`) VALUES
(13, 'Official Play to Earn Server Launch', '', '', '<h1>PlayMU Season 18 Part 1 Play to Earn</h1><h3>Play to Earn System</h3><p>Introducing PlayMU Diamond. Value as follows. </p><ul>	<li>Gold - 10 PHP</li>	<li>Silver - 5 PHP</li>	<li>Bronze - 3 PHP</li></ul></p>This is the minimum value and can go up on values depending on the donate we got per month </p></p>In total, the server will be able to payout a minimum of 5k PHP per month. This will be a controlled drop. This will be monitored on a daily basis. We will have public info in which we will show who holds the PlayMU Diamonds.  </p></p>Any players who exploit this item, such as bug abuse, will be subject to confiscation. No appeal and we will ban the player.  </p></p>PlayMU Diamonds Can be encashed at the end of month. You can decide to hold on to it, or exchange it. </p></p>PlayMU Diamonds can be hunted on bosses which respawn 2x per day. This is 100% chance</p><h4>Boss to Hunt</h4><ul>	<li>Gold 		<ul>			<li>Core Magnify</li>			<li>Lord Ferea</li>			<li>Nix</li>			<li>Nix</li>			<li>God of Darkness</li>		</ul>	</li>	<li>Silver 		<ul>			<li>Kundun</li>			<li>Erohim</li>			<li>Balgass</li>			<li>Nightmare</li>			<li>Selupan</li>		</ul>	</li>	<li>Bronze 		<ul>			<li>Hydra</li>			<li>Ice Queen</li>			<li>Balrog</li>			<li>Zaikan</li>			<li>Gorgon</li>		</ul>	</li></ul></p>If you have some questions, please dont hesitate to contact us on our <a href=\"https://web.facebook.com/playmusupport\" target=\"_blank\">Facebook Page</a></p>', '', '2022-11-02 10:47:21', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int NOT NULL,
  `dbase` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `user` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `query` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `col_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `col_type` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `col_length` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin,
  `col_collation` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT '',
  `col_default` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int UNSIGNED NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `settings_data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `export_type` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `template_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `template_data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `tables` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `item_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `item_type` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `page_nr` int UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `tables` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('phpma', '[{\"db\":\"muonline\",\"table\":\"news\"},{\"db\":\"muonline\",\"table\":\"content\"},{\"db\":\"muonline\",\"table\":\"coupon\"},{\"db\":\"muonline\",\"table\":\"lottery_user\"},{\"db\":\"muonline\",\"table\":\"lottery\"},{\"db\":\"muonline\",\"table\":\"loyalty\"},{\"db\":\"muonline\",\"table\":\"sample\"}]'),
('phpmyadmin', '[{\"db\":\"phpmyadmin\",\"table\":\"content\"},{\"db\":\"phpmyadmin\",\"table\":\"news\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `prefs` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `version` int UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `schema_sql` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin,
  `data_sql` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `tracking_active` int UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `config_data`) VALUES
('phpma', '{\"Console\\/Mode\":\"collapse\"}'),
('phpmyadmin', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `tab` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `allowed` enum('Y','N') CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `usergroup` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tier`
--

CREATE TABLE `tier` (
  `id` int NOT NULL,
  `username` varchar(10) NOT NULL,
  `points` int NOT NULL,
  `claimed` int NOT NULL,
  `raffle` int NOT NULL
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
  `id` int NOT NULL,
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
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `duelmaster`
--
ALTER TABLE `duelmaster`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `lottery`
--
ALTER TABLE `lottery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lottery_user`
--
ALTER TABLE `lottery_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loyalty`
--
ALTER TABLE `loyalty`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tier`
--
ALTER TABLE `tier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
