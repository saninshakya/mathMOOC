/*
Navicat MySQL Data Transfer

Source Server         : mysql-localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : mathmooc

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-26 10:50:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `activities`
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `video_explanation` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('11', 'Addition', '<ul><li>count the number of image</li><li>select the correct answer.</li></ul>', '31', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('12', 'test', 'This is test', '28', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('13', 'Addition With Image', '<ul><li>Count the number of image</li><li>click on the correct answer.<br></li></ul>', '31', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('14', 'Substraction', '<ul><li>This activity helps you learn about subtractions</li><li>Count the image and subtract from another image.</li><li>click the correct answer.</li></ul>', '29', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('15', 'subtraction is fun', '<ul><li>This\r\nactivity helps you learn about subtractions</li><li>Count the image\r\nand subtract from another image.<br></li><li>click the correct answer.<br></li></ul>', '29', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('16', 'test', 'test test test testing...', '29', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('17', 'Addition', 'This is about addition', '33', '1', 'qRBlNl3KUdo');
INSERT INTO `activities` VALUES ('18', 'Multiplication tables for 2, 3 and 4', '<ul><li>Multiplication tables for 2, 3 and 4</li></ul>', '34', '1', '-KqEpbT3i7c');

-- ----------------------------
-- Table structure for `activities_answers`
-- ----------------------------
DROP TABLE IF EXISTS `activities_answers`;
CREATE TABLE `activities_answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activities_question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `correct` enum('0','1') NOT NULL,
  `created_datetime` datetime NOT NULL,
  `updated_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activities_answers
-- ----------------------------
INSERT INTO `activities_answers` VALUES ('57', '18', '6', '1', '2016-04-06 22:57:57', '2016-04-06 22:57:57');
INSERT INTO `activities_answers` VALUES ('58', '18', '8', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57');
INSERT INTO `activities_answers` VALUES ('59', '18', '3', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57');
INSERT INTO `activities_answers` VALUES ('60', '18', '4', '0', '2016-04-06 22:57:57', '2016-04-06 22:57:57');
INSERT INTO `activities_answers` VALUES ('61', '19', '12', '1', '2016-04-08 00:08:50', '2016-04-08 00:08:50');
INSERT INTO `activities_answers` VALUES ('62', '19', '32', '0', '2016-04-08 00:08:50', '2016-04-08 00:08:50');
INSERT INTO `activities_answers` VALUES ('63', '19', '43', '0', '2016-04-08 00:08:50', '2016-04-08 00:08:50');
INSERT INTO `activities_answers` VALUES ('64', '19', '45', '0', '2016-04-08 00:08:51', '2016-04-08 00:08:51');
INSERT INTO `activities_answers` VALUES ('65', '20', '6', '1', '2016-04-08 15:16:40', '2016-04-08 15:16:40');
INSERT INTO `activities_answers` VALUES ('66', '20', '44', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40');
INSERT INTO `activities_answers` VALUES ('67', '20', '66', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40');
INSERT INTO `activities_answers` VALUES ('68', '20', '77', '0', '2016-04-08 15:16:40', '2016-04-08 15:16:40');
INSERT INTO `activities_answers` VALUES ('69', '21', '3', '1', '2016-04-16 16:59:11', '2016-04-16 16:59:11');
INSERT INTO `activities_answers` VALUES ('70', '21', '4', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11');
INSERT INTO `activities_answers` VALUES ('71', '21', '6', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11');
INSERT INTO `activities_answers` VALUES ('72', '21', '1', '0', '2016-04-16 16:59:11', '2016-04-16 16:59:11');
INSERT INTO `activities_answers` VALUES ('73', '22', '6', '1', '2016-04-21 15:38:29', '2016-04-21 15:38:29');
INSERT INTO `activities_answers` VALUES ('74', '22', '7', '0', '2016-04-21 15:38:29', '2016-04-21 15:38:29');
INSERT INTO `activities_answers` VALUES ('75', '22', '8', '0', '2016-04-21 15:38:29', '2016-04-21 15:38:29');
INSERT INTO `activities_answers` VALUES ('76', '22', '2', '1', '2016-04-21 15:38:29', '2016-04-21 15:38:29');

-- ----------------------------
-- Table structure for `activities_explanations`
-- ----------------------------
DROP TABLE IF EXISTS `activities_explanations`;
CREATE TABLE `activities_explanations` (
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities_explanations
-- ----------------------------
INSERT INTO `activities_explanations` VALUES ('1', '18', '3+3', null, null, null, null, '0', null, 'Count the first group of puppies. The first group has 1 puppy.\nCount the second group of puppies. The second group has 1 puppy.\nTo find the sum of 1 and 1, count all the puppies together.', null);
INSERT INTO `activities_explanations` VALUES ('2', '18', '4+2', null, null, null, null, '0', null, 'Count the first group of puppies. The first group has 1 puppy.\nCount the second group of puppies. The second group has 1 puppy.\nTo find the sum of 1 and 1, count all the puppies together.', null);
INSERT INTO `activities_explanations` VALUES ('6', '20', '2+4', '1', '1', '2016-04-16 16:56:27', '2016-04-16 16:56:27', '0', '6', '<ul><li>Count the first group of apples. The first group has 2 apples.</li><li>Count the second group of apples. The second group has 4 apples.</li><li>To find the sum of 2 and 4, count all the apples together, like this:</li></ul>', '<ul><li>There are 6 apples, so 2 + 4 = 6.</li></ul>');
INSERT INTO `activities_explanations` VALUES ('7', '20', '3+3', '1', '1', '2016-04-16 16:56:27', '2016-04-16 16:56:27', '0', '6', '<ul><li>Count the first group of apples. The first group has 3 apples.</li><li>Count the second group of apples. The second group has 3 apples.</li><li>To find the sum of 3 and 3, count all the apples together, like this:</li></ul>', '<ul><li>There are 6 apples, so 3 + 3 = 6.</li></ul>');
INSERT INTO `activities_explanations` VALUES ('14', '21', '2+1', '1', '1', '2016-04-20 00:57:52', '2016-04-20 00:57:52', '0', '3', 'Count the first group of puppies. The first group has 1 puppy.\r\nCount the second group of puppies. The second group has 1 puppy.\r\nTo find the sum of 1 and 1, count all the puppies together.', null);
INSERT INTO `activities_explanations` VALUES ('15', '21', '0+3', '1', '1', '2016-04-20 00:57:52', '2016-04-20 00:57:52', '0', '3', 'Count the first group of puppies. The first group has 1 puppy.\r\nCount the second group of puppies. The second group has 1 puppy.\r\nTo find the sum of 1 and 1, count all the puppies together.', null);
INSERT INTO `activities_explanations` VALUES ('16', '20', '4+2', '1', '1', '2016-04-21 15:38:51', '2016-04-21 15:38:51', '0', '6', '<ul><li>Count the first group of apples. The first group has 4 apples.</li><li>Count the second group of apples. The second group has 2 apples.</li><li>To find the sum of 4 and 2, count all the apples together, like this:</li></ul>', '<ul><li>There are 6 apples, so 4 + 2 = 6.</li></ul>');

-- ----------------------------
-- Table structure for `activities_questions`
-- ----------------------------
DROP TABLE IF EXISTS `activities_questions`;
CREATE TABLE `activities_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `marks` int(11) NOT NULL,
  `image` text,
  `created_datetime` datetime DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `image1` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities_questions
-- ----------------------------
INSERT INTO `activities_questions` VALUES ('18', '13', '2+4', '10', 'files/queimgs/duck1.png', '2016-04-06 22:57:57', '2016-04-06 22:57:57', 'files/queimgs/duck1.png');
INSERT INTO `activities_questions` VALUES ('19', '13', '5+7', '10', 'files/queimgs/elephant.png', '2016-04-08 00:08:50', '2016-04-08 00:08:50', 'files/queimgs/fish.png');
INSERT INTO `activities_questions` VALUES ('20', '17', '2+4', '10', 'files/queimgs/elephant1.png', '2016-04-08 15:16:40', '2016-04-08 15:16:40', 'files/queimgs/fish1.png');
INSERT INTO `activities_questions` VALUES ('21', '17', '1+2', '100', 'files/queimgs/duck1.png', '2016-04-16 16:59:11', '2016-04-16 16:59:11', '');
INSERT INTO `activities_questions` VALUES ('22', '18', '2*3', '10', 'files/queimgs/package_toys.png', '2016-04-21 15:38:29', '2016-04-21 15:38:29', 'files/queimgs/package_toys1.png');

-- ----------------------------
-- Table structure for `answers`
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `correct` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '3', '92', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `answers` VALUES ('2', '3', '12', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `answers` VALUES ('3', '3', '34', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `answers` VALUES ('4', '3', '76', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('3', 'Number Sense', 'It contains number sense', '2016-03-31 08:25:30', '2016-03-31 08:25:30');

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for `exams`
-- ----------------------------
DROP TABLE IF EXISTS `exams`;
CREATE TABLE `exams` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('3', 'Addition-Quiz', 'Addition Quiz', '3', '2016-03-30', '2017-05-10', '20', '10', '40', 'free', '0', '0', '2016-03-31 08:26:42', '2016-03-31 08:26:42');
INSERT INTO `exams` VALUES ('4', 'test', 'test', '3', '2010-04-01', '2017-10-10', '40', '3', '20', 'free', '0', '0', '2016-04-01 05:51:25', '2016-04-01 05:51:25');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `groups` VALUES ('2', 'user', 'General User');
INSERT INTO `groups` VALUES ('3', 'parent', 'Parent');

-- ----------------------------
-- Table structure for `login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for `parents_students`
-- ----------------------------
DROP TABLE IF EXISTS `parents_students`;
CREATE TABLE `parents_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of parents_students
-- ----------------------------
INSERT INTO `parents_students` VALUES ('1', '5', '9');
INSERT INTO `parents_students` VALUES ('2', '10', '13');
INSERT INTO `parents_students` VALUES ('3', '11', '14');
INSERT INTO `parents_students` VALUES ('4', '12', '15');

-- ----------------------------
-- Table structure for `questions`
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `exam_id` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('3', '3', '2 +90', '', '10', '2016-03-31 08:29:22', '2016-03-31 08:29:22');

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'mathmooc', '', '', '', '', 'test@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `settings` VALUES ('2', 'mathmooc', '', '', '', '', 'mathmooc@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `settings` VALUES ('3', 'mathmooc', '', '', '', '', 'mathmooc@mathmooc.com', '', '', '', 'sandbox', '', '$', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `subscriptions`
-- ----------------------------
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subscriptions
-- ----------------------------

-- ----------------------------
-- Table structure for `topics`
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('28', 'Spatial sense', 'Here is a list of all of the math skills students learn in first grade! These skills are organized into categories, and you can move your mouse over any skill name to view a sample question.', '1', '1', '2016-04-06 17:38:08', '2016-04-06 17:38:08', '0', 'files/coverimgs/news2.png');
INSERT INTO `topics` VALUES ('29', 'Subtraction - skill builders', 'Here is a list of all of the math skills students learn in first grade! These skills are organized into categories, and you can move your mouse over any skill name to view a sample question. To start practicing, just click on any link. IXL will track your score, and the questions will automatically increase in difficulty as you improve!', '1', '1', '2016-04-06 18:26:18', '2016-04-06 18:26:18', '0', 'files/coverimgs/maxresdefault.jpg');
INSERT INTO `topics` VALUES ('30', 'Mixed operations', 'Addition and subtraction sentences: true or false?', '1', '1', '2016-04-06 18:53:23', '2016-04-06 18:53:23', '0', '');
INSERT INTO `topics` VALUES ('31', 'Number Sense', 'A stimulating math game designed for First Grade kids to build their addition skills and improve their number sense. In this game, kids have to add the number balls and numbers in the matrix. It is a great way to test their mental agility and build their math skills. This game requires them to think, analyze, and question, hence building their decision-making skills. Also, it will improve their hand-eye coordination and sharpen their memory.', '1', '1', '2016-04-06 22:51:44', '2016-04-06 22:51:44', '0', '');
INSERT INTO `topics` VALUES ('32', 'Multiplication', 'This is about multiplication', '1', '1', '2016-04-08 14:58:53', '2016-04-08 14:58:53', '0', 'files/coverimgs/MultExplorersBanner600.png');
INSERT INTO `topics` VALUES ('33', 'Demo ', 'This is demo page', '1', '1', '2016-04-08 15:14:49', '2016-04-08 15:14:49', '0', '');
INSERT INTO `topics` VALUES ('34', 'Multiplication', '<ul><li>Multiplication tables for 2, 3 and 4</li></ul>', '1', '1', '2016-04-21 15:35:28', '2016-04-21 15:35:28', '0', 'files/coverimgs/multiplication.png');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '', 'admin', '$2y$07$9UdJ6eUdNKpHRfNdOsjIEuMkdXa9XLYFOnrm/6q8w2VFsjD/U2QQO', '', 'admin@admin.com', null, null, null, null, '1458789344', '1461565046', '1', 'admin', 'admin', null, null, '');
INSERT INTO `users` VALUES ('5', 0x3A3A31, 'sanin', '$2y$08$pETx5P9VM2iPm90kY/NzL.9m3btOvCNiUGXcdGE4L99ivg2DTuVkO', '', 'saninshakya@gmail.com', null, null, null, null, '1459404854', '1461564193', '1', 'Sanindra', 'Shakya', '2', '9898989', '');
INSERT INTO `users` VALUES ('9', 0x3A3A31, 'chandra', '$2y$08$d/wlbPurV5u2pHoAswHfwuQD9D9NENL9J1BLjuJSO2rD5v5Lvne26', '', 'cbs@chandrahandicraft.com', null, null, null, null, '1461560316', null, '1', 'Chandra', 'Shakya', null, '015531578', '');
INSERT INTO `users` VALUES ('10', 0x3A3A31, 'manish', '$2y$08$oDYSwUa23NZvoFGuj1hoY.JJghkyx9NyEitNoegnlzBijzrhbEd/K', '', 'manishshakya@hotmail.com', null, null, null, null, '1461563275', null, '1', 'Manish', 'Shakya', '2', '987465957', '');
INSERT INTO `users` VALUES ('11', 0x3A3A31, 'sujal', '$2y$08$vz2I0Go8t2mU9vZmKixIj.tILfBWLTAobIxyJ7ccFJX3TmWBL/OQm', '', 'sujal@hotmail.com', null, null, null, null, '1461563301', null, '1', 'Sujal', 'Manandhar', '3', '112333213123', '');
INSERT INTO `users` VALUES ('12', 0x3A3A31, 'sanim', '$2y$08$6Ib0PspawsfUGXiYrpc23.DL90.4nv5Lh4uyVo5WSSMXczGmXKLoa', '', 'sanim.raj@gmail.com', '62df7772d8b7516c4db19c8df045a012deed2428', null, null, null, '1461563327', null, '0', 'Sanin Raj', 'Shakya', '2', '233223432', '');
INSERT INTO `users` VALUES ('13', 0x3A3A31, 'hsinam', '$2y$08$B0rvNQ0Ex4KOvgFNav2I9.OMNKWFpS3Mqucj97HGaICjpGNjJQOVi', '', 'hsinam@gmail.com', null, null, null, null, '1461563391', null, '1', 'hsinam', 'shakya', null, '5234234324', '');
INSERT INTO `users` VALUES ('14', 0x3A3A31, 'lajus', '$2y$08$NMBhTIOEx2wFZVSWpuGZSeyFy3swGKaNz9KpTxvHdS/PYfZ/u.NoC', '', 'lajus@gmail.com', null, null, null, null, '1461563421', null, '1', 'lajus', 'manandhar', null, '23432432324', '');
INSERT INTO `users` VALUES ('15', 0x3A3A31, 'raj', '$2y$08$T9Lv81Q4mp36dM0KWsAeEuroQojTHaDqFUGVXMoS3BpXHwaitkyHe', '', 'raj@yahoo.com', null, null, null, null, '1461563444', null, '1', 'raj', 'shakya', null, '234234324546', '');

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('1', '1', '1');
INSERT INTO `users_groups` VALUES ('10', '5', '2');
INSERT INTO `users_groups` VALUES ('11', '8', '1');
INSERT INTO `users_groups` VALUES ('12', '9', '3');
INSERT INTO `users_groups` VALUES ('13', '10', '2');
INSERT INTO `users_groups` VALUES ('14', '11', '2');
INSERT INTO `users_groups` VALUES ('15', '12', '2');
INSERT INTO `users_groups` VALUES ('16', '13', '3');
INSERT INTO `users_groups` VALUES ('17', '14', '3');
INSERT INTO `users_groups` VALUES ('18', '15', '3');

-- ----------------------------
-- Table structure for `user_activities`
-- ----------------------------
DROP TABLE IF EXISTS `user_activities`;
CREATE TABLE `user_activities` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` enum('completed','inprogress') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=885 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_activities
-- ----------------------------
INSERT INTO `user_activities` VALUES ('667', '7', '11', '2016-04-20 00:01:37', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('668', '1', '11', '2016-04-20 01:09:12', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('819', '5', '14', '2016-04-21 11:31:50', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('880', '5', '17', '2016-04-22 15:48:51', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('882', '5', '18', '2016-04-25 13:03:48', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('883', '5', '11', '2016-04-25 13:04:03', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_activities` VALUES ('884', '5', '13', '2016-04-25 13:04:13', '0000-00-00 00:00:00', 'inprogress');

-- ----------------------------
-- Table structure for `user_activities_questions`
-- ----------------------------
DROP TABLE IF EXISTS `user_activities_questions`;
CREATE TABLE `user_activities_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `filled` enum('yes','no') NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_activities_questions
-- ----------------------------
INSERT INTO `user_activities_questions` VALUES ('120', '1', '18', '11', 'yes', '1');
INSERT INTO `user_activities_questions` VALUES ('121', '1', '19', '11', 'yes', '1');
INSERT INTO `user_activities_questions` VALUES ('140', '7', '18', '11', 'yes', '0');
INSERT INTO `user_activities_questions` VALUES ('226', '5', '19', '11', 'yes', '0');
INSERT INTO `user_activities_questions` VALUES ('240', '5', '22', '18', 'yes', '0');
INSERT INTO `user_activities_questions` VALUES ('242', '5', '20', '17', 'yes', '0');
INSERT INTO `user_activities_questions` VALUES ('243', '5', '18', '13', 'yes', '0');

-- ----------------------------
-- Table structure for `user_exams`
-- ----------------------------
DROP TABLE IF EXISTS `user_exams`;
CREATE TABLE `user_exams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` enum('completed','inprogress') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_exams
-- ----------------------------
INSERT INTO `user_exams` VALUES ('3', '5', '4', '2016-04-11 17:39:47', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_exams` VALUES ('8', '5', '3', '2016-04-12 18:39:55', '0000-00-00 00:00:00', 'inprogress');

-- ----------------------------
-- Table structure for `user_questions`
-- ----------------------------
DROP TABLE IF EXISTS `user_questions`;
CREATE TABLE `user_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `filled` enum('yes','no') NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_questions
-- ----------------------------
INSERT INTO `user_questions` VALUES ('1', '5', '3', '3', 'yes', '1');
