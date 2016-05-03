-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 07:00 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mathmooc`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `video_explanation` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `description`, `topic_id`, `active`, `video_explanation`) VALUES
(11, 'Addition', '<ul><li>count the number of image</li><li>select the correct answer.</li></ul>', 31, '1', 'qRBlNl3KUdo'),
(12, 'test', 'This is test', 28, '1', 'qRBlNl3KUdo'),
(13, 'Addition With Image', '<ul><li>Count the number of image</li><li>click on the correct answer.<br></li></ul>', 31, '1', 'qRBlNl3KUdo'),
(14, 'Substraction', '<ul><li>This activity helps you learn about subtractions</li><li>Count the image and subtract from another image.</li><li>click the correct answer.</li></ul>', 29, '1', 'qRBlNl3KUdo'),
(15, 'subtraction is fun', '<ul><li>This\r\nactivity helps you learn about subtractions</li><li>Count the image\r\nand subtract from another image.<br></li><li>click the correct answer.<br></li></ul>', 29, '1', 'qRBlNl3KUdo'),
(16, 'test', 'test test test testing...', 29, '1', 'qRBlNl3KUdo'),
(17, 'Addition', 'This is about addition', 33, '1', 'qRBlNl3KUdo'),
(18, 'Multiplication tables for 2, 3 and 4', '<ul><li>Multiplication tables for 2, 3 and 4</li></ul>', 34, '1', '-KqEpbT3i7c');

-- --------------------------------------------------------

--
-- Table structure for table `activities_answers`
--

CREATE TABLE IF NOT EXISTS `activities_answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activities_question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `correct` enum('0','1') NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `activities_answers`
--

INSERT INTO `activities_answers` (`id`, `activities_question_id`, `answer`, `correct`, `created_datetime`, `updated_datetime`) VALUES
(57, 18, '6', '1', '2016-04-06 22:57:57', '2016-04-06 22:57:57'),
(58, 18, '8', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57'),
(59, 18, '3', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57'),
(60, 18, '4', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57'),
(61, 19, '12', '1', '2016-04-08 00:08:50', '2016-04-08 00:08:50'),
(62, 19, '32', '0', '2016-04-08 00:08:50', '2016-04-08 00:08:50'),
(63, 19, '43', '0', '2016-04-08 00:08:50', '2016-04-08 00:08:50'),
(64, 19, '45', '0', '2016-04-08 00:08:51', '2016-04-08 00:08:51'),
(65, 20, '6', '1', '2016-04-08 15:16:40', '2016-04-08 15:16:40'),
(66, 20, '44', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40'),
(67, 20, '66', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40'),
(68, 20, '77', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40'),
(69, 21, '3', '1', '2016-04-16 16:59:11', '2016-04-16 16:59:11'),
(70, 21, '4', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11'),
(71, 21, '6', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11'),
(72, 21, '1', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11'),
(73, 22, '6', '1', '2016-04-21 15:38:29', '2016-04-21 15:38:29'),
(74, 22, '7', '0', '2016-04-21 15:38:29', '2016-04-21 15:38:29'),
(75, 22, '8', '0', '2016-04-21 15:38:29', '2016-04-21 15:38:29'),
(76, 22, '2', '1', '2016-04-21 15:38:29', '2016-04-21 15:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `activities_explanations`
--

CREATE TABLE IF NOT EXISTS `activities_explanations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activities_questions_id` int(11) DEFAULT NULL,
  `explanation` varchar(45) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `delete_flg` int(11) DEFAULT '0',
  `answer` int(11) DEFAULT NULL,
  `description` longtext,
  `conclusion` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `activities_explanations`
--

INSERT INTO `activities_explanations` (`id`, `activities_questions_id`, `explanation`, `created_by`, `updated_by`, `created_datetime`, `updated_datetime`, `delete_flg`, `answer`, `description`, `conclusion`) VALUES
(6, 20, '4+2', 1, 1, '2016-04-16 16:56:27', '2016-04-16 16:56:27', 0, 6, '<ul><li>Count the first group of apples. The first group has 2 apples.</li><li>Count the second group of apples. The second group has 4 apples.</li><li>To find the sum of 2 and 4, count all the apples together, like this:</li></ul>', '<ul><li>There are 6 apples, so 4 + 2 = 6.</li></ul>'),
(7, 20, '3+3', 1, 1, '2016-04-16 16:56:27', '2016-04-16 16:56:27', 0, 6, '<ul><li>Count the first group of apples. The first group has 3 apples.</li><li>Count the second group of apples. The second group has 3 apples.</li><li>To find the sum of 3 and 3, count all the apples together, like this:</li></ul>', '<ul><li>There are 6 apples, so 3 + 3 = 6.</li></ul>'),
(8, 22, '2+2+2', 1, 1, '2016-05-01 17:10:19', '2016-05-01 17:10:19', 0, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activities_questions`
--

CREATE TABLE IF NOT EXISTS `activities_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `marks` int(11) NOT NULL,
  `image` text,
  `created_datetime` datetime DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `image1` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `activities_questions`
--

INSERT INTO `activities_questions` (`id`, `activity_id`, `question`, `marks`, `image`, `created_datetime`, `updated_datetime`, `image1`) VALUES
(18, 13, '2+4', 10, 'files/queimgs/star.png', '2016-04-06 22:57:57', '2016-04-06 22:57:57', 'files/queimgs/star.png'),
(19, 13, '5+7', 10, 'files/queimgs/star.png', '2016-04-08 00:08:50', '2016-04-08 00:08:50', 'files/queimgs/star.png'),
(20, 17, '2+4', 10, 'files/queimgs/star.png', '2016-04-08 15:16:40', '2016-04-08 15:16:40', 'files/queimgs/star.png'),
(21, 17, '1+2', 100, 'files/queimgs/star.png', '2016-04-16 16:59:11', '2016-04-16 16:59:11', 'files/queimgs/star.png'),
(22, 18, '2*3', 10, 'files/queimgs/star.png', '2016-04-21 15:38:29', '2016-04-21 15:38:29', 'files/queimgs/star.png');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `correct` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`, `created_at`, `updated_at`) VALUES
(1, 3, '92', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, '12', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '34', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '76', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Number Sense', 'It contains number sense', '2016-03-31 08:25:30', '2016-03-31 08:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `available_from` date NOT NULL,
  `available_to` date NOT NULL,
  `duration` bigint(20) NOT NULL,
  `questions` int(11) NOT NULL,
  `pass_mark` int(11) NOT NULL,
  `type` enum('paid','free') NOT NULL DEFAULT 'free',
  `cost` int(50) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `description`, `category_id`, `available_from`, `available_to`, `duration`, `questions`, `pass_mark`, `type`, `cost`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Addition-Quiz', 'Addition Quiz', 3, '2016-03-30', '2017-05-10', 20, 10, 40, 'free', 0, '0', '2016-03-31 08:26:42', '2016-03-31 08:26:42'),
(4, 'test', 'test', 3, '2010-04-01', '2017-10-10', 40, 3, 20, 'free', 0, '0', '2016-04-01 05:51:25', '2016-04-01 05:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'General User'),
(3, 'parent', 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parents_students`
--

CREATE TABLE IF NOT EXISTS `parents_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `parents_students`
--

INSERT INTO `parents_students` (`id`, `student_id`, `parent_id`) VALUES
(1, 5, 9),
(2, 10, 13),
(3, 11, 14),
(4, 12, 15);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `exam_id` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `question`, `image`, `marks`, `created_at`, `updated_at`) VALUES
(3, '3', '2 +90', '', 10, '2016-03-31 08:29:22', '2016-03-31 08:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `paypal_mode` enum('production','sandbox') NOT NULL DEFAULT 'sandbox',
  `date_format` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `aboutus_content` text NOT NULL,
  `certificate_content` text NOT NULL,
  `certificate_logo` varchar(255) NOT NULL,
  `certificate_signature_text` text NOT NULL,
  `certificate_signature` varchar(255) NOT NULL,
  `facebook_url` varchar(100) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `instagram_url` varchar(100) NOT NULL,
  `tumblr_url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `description`, `keywords`, `address`, `city`, `email`, `phone`, `logo`, `paypal`, `paypal_mode`, `date_format`, `currency`, `aboutus_content`, `certificate_content`, `certificate_logo`, `certificate_signature_text`, `certificate_signature`, `facebook_url`, `twitter_url`, `instagram_url`, `tumblr_url`, `created_at`, `updated_at`) VALUES
(1, 'mathmooc', '', '', '', '', 'test@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'mathmooc', '', '', '', '', 'mathmooc@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'mathmooc', '', '', '', '', 'mathmooc@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `payer_name` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `paypal_transaction_id` varchar(255) NOT NULL,
  `payment_status` enum('Pending','Completed') NOT NULL DEFAULT 'Pending',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `delete_flg` int(11) DEFAULT '0',
  `image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `created_by`, `updated_by`, `created_datetime`, `updated_datetime`, `delete_flg`, `image`) VALUES
(28, 'Spatial sense', 'Here is a list of all of the math skills students learn in first grade! These skills are organized into categories, and you can move your mouse over any skill name to view a sample question.', 1, 1, '2016-04-06 17:38:08', '2016-04-06 17:38:08', 0, 'files/coverimgs/news2.png'),
(29, 'Subtraction - skill builders', 'Here is a list of all of the math skills students learn in first grade! These skills are organized into categories, and you can move your mouse over any skill name to view a sample question. To start practicing, just click on any link. IXL will track your score, and the questions will automatically increase in difficulty as you improve!', 1, 1, '2016-04-06 18:26:18', '2016-04-06 18:26:18', 0, 'files/coverimgs/maxresdefault.jpg'),
(30, 'Mixed operations', 'Addition and subtraction sentences: true or false?', 1, 1, '2016-04-06 18:53:23', '2016-04-06 18:53:23', 0, ''),
(31, 'Number Sense', 'A stimulating math game designed for First Grade kids to build their addition skills and improve their number sense. In this game, kids have to add the number balls and numbers in the matrix. It is a great way to test their mental agility and build their math skills. This game requires them to think, analyze, and question, hence building their decision-making skills. Also, it will improve their hand-eye coordination and sharpen their memory.', 1, 1, '2016-04-06 22:51:44', '2016-04-06 22:51:44', 0, ''),
(32, 'Multiplication', 'This is about multiplication', 1, 1, '2016-04-08 14:58:53', '2016-04-08 14:58:53', 0, 'files/coverimgs/MultExplorersBanner600.png'),
(33, 'Demo ', 'This is demo page', 1, 1, '2016-04-08 15:14:49', '2016-04-08 15:14:49', 0, ''),
(34, 'Multiplication', '<ul><li>Multiplication tables for 2, 3 and 4</li></ul>', 1, 1, '2016-04-21 15:35:28', '2016-04-21 15:35:28', 0, 'files/coverimgs/multiplication.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `photo`) VALUES
(1, '', 'admin', '$2y$07$9UdJ6eUdNKpHRfNdOsjIEuMkdXa9XLYFOnrm/6q8w2VFsjD/U2QQO', '', 'admin@admin.com', NULL, NULL, NULL, NULL, 1458789344, 1462076328, 1, 'admin', 'admin', NULL, NULL, ''),
(5, '::1', 'sanin', '$2y$08$pETx5P9VM2iPm90kY/NzL.9m3btOvCNiUGXcdGE4L99ivg2DTuVkO', '', 'saninshakya@gmail.com', NULL, NULL, NULL, NULL, 1459404854, 1462236961, 1, 'Sanindra', 'Shakya', '2', '9898989', ''),
(9, '::1', 'chandra', '$2y$08$d/wlbPurV5u2pHoAswHfwuQD9D9NENL9J1BLjuJSO2rD5v5Lvne26', '', 'cbs@chandrahandicraft.com', NULL, NULL, NULL, NULL, 1461560316, NULL, 1, 'Chandra', 'Shakya', NULL, '015531578', ''),
(10, '::1', 'manish', '$2y$08$oDYSwUa23NZvoFGuj1hoY.JJghkyx9NyEitNoegnlzBijzrhbEd/K', '', 'manishshakya@hotmail.com', NULL, NULL, NULL, NULL, 1461563275, NULL, 1, 'Manish', 'Shakya', '2', '987465957', ''),
(11, '::1', 'sujal', '$2y$08$vz2I0Go8t2mU9vZmKixIj.tILfBWLTAobIxyJ7ccFJX3TmWBL/OQm', '', 'sujal@hotmail.com', NULL, NULL, NULL, NULL, 1461563301, NULL, 1, 'Sujal', 'Manandhar', '3', '112333213123', ''),
(12, '::1', 'sanim', '$2y$08$6Ib0PspawsfUGXiYrpc23.DL90.4nv5Lh4uyVo5WSSMXczGmXKLoa', '', 'sanim.raj@gmail.com', '62df7772d8b7516c4db19c8df045a012deed2428', NULL, NULL, NULL, 1461563327, NULL, 0, 'Sanin Raj', 'Shakya', '2', '233223432', ''),
(13, '::1', 'hsinam', '$2y$08$B0rvNQ0Ex4KOvgFNav2I9.OMNKWFpS3Mqucj97HGaICjpGNjJQOVi', '', 'hsinam@gmail.com', NULL, NULL, NULL, NULL, 1461563391, NULL, 1, 'hsinam', 'shakya', NULL, '5234234324', ''),
(14, '::1', 'lajus', '$2y$08$NMBhTIOEx2wFZVSWpuGZSeyFy3swGKaNz9KpTxvHdS/PYfZ/u.NoC', '', 'lajus@gmail.com', NULL, NULL, NULL, NULL, 1461563421, NULL, 1, 'lajus', 'manandhar', NULL, '23432432324', ''),
(15, '::1', 'raj', '$2y$08$T9Lv81Q4mp36dM0KWsAeEuroQojTHaDqFUGVXMoS3BpXHwaitkyHe', '', 'raj@yahoo.com', NULL, NULL, NULL, NULL, 1461563444, NULL, 1, 'raj', 'shakya', NULL, '234234324546', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(10, 5, 2),
(11, 8, 1),
(12, 9, 3),
(13, 10, 2),
(14, 11, 2),
(15, 12, 2),
(16, 13, 3),
(17, 14, 3),
(18, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE IF NOT EXISTS `user_activities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` enum('completed','inprogress') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=957 ;

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`id`, `user_id`, `activity_id`, `start`, `end`, `status`) VALUES
(667, 7, 11, '2016-04-20 00:01:37', '0000-00-00 00:00:00', 'inprogress'),
(668, 1, 11, '2016-04-20 01:09:12', '0000-00-00 00:00:00', 'inprogress'),
(819, 5, 14, '2016-04-21 11:31:50', '0000-00-00 00:00:00', 'inprogress'),
(883, 5, 11, '2016-04-25 13:04:03', '0000-00-00 00:00:00', 'inprogress'),
(884, 5, 13, '2016-04-25 13:04:13', '0000-00-00 00:00:00', 'inprogress'),
(904, 1, 17, '2016-05-01 17:09:29', '0000-00-00 00:00:00', 'inprogress'),
(919, 1, 18, '2016-05-01 17:40:47', '0000-00-00 00:00:00', 'inprogress'),
(954, 5, 17, '2016-05-03 08:24:11', '0000-00-00 00:00:00', 'inprogress'),
(956, 5, 18, '2016-05-03 08:26:51', '0000-00-00 00:00:00', 'inprogress');

-- --------------------------------------------------------

--
-- Table structure for table `user_activities_questions`
--

CREATE TABLE IF NOT EXISTS `user_activities_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `filled` enum('yes','no') NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `user_activities_questions`
--

INSERT INTO `user_activities_questions` (`id`, `user_id`, `question_id`, `activity_id`, `filled`, `answer`) VALUES
(120, 1, 18, 11, 'yes', 1),
(121, 1, 19, 11, 'yes', 1),
(140, 7, 18, 11, 'yes', 0),
(226, 5, 19, 11, 'yes', 0),
(240, 5, 22, 18, 'yes', 0),
(243, 5, 18, 13, 'yes', 0),
(245, 5, 20, 17, 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_exams`
--

CREATE TABLE IF NOT EXISTS `user_exams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` enum('completed','inprogress') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_exams`
--

INSERT INTO `user_exams` (`id`, `user_id`, `exam_id`, `start`, `end`, `status`) VALUES
(3, 5, 4, '2016-04-11 17:39:47', '0000-00-00 00:00:00', 'inprogress'),
(8, 5, 3, '2016-04-12 18:39:55', '0000-00-00 00:00:00', 'inprogress');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE IF NOT EXISTS `user_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `filled` enum('yes','no') NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `user_id`, `question_id`, `exam_id`, `filled`, `answer`) VALUES
(1, 5, 3, 3, 'yes', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
