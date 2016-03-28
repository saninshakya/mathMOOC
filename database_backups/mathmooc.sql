/*
Navicat MySQL Data Transfer

Source Server         : mysql-localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : mathmooc

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-28 16:36:31
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('1', 'addition', 'learn about sum', '2', '1');
INSERT INTO `activities` VALUES ('2', 'Substraction', 'Children learn about substraction', '2', '0');
INSERT INTO `activities` VALUES ('3', 'combination', 'Student learn about magical words', '4', '1');
INSERT INTO `activities` VALUES ('4', 'Ascending Order', 'Student learn about ascending order of numbers.', '3', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', 'sanin', '1', '2016-03-24 16:53:07', '2016-03-24 16:53:07');
INSERT INTO `answers` VALUES ('2', '1', 'phenom', '0', '2016-03-24 16:53:07', '2016-03-24 16:53:07');
INSERT INTO `answers` VALUES ('3', '1', 'raj', '0', '2016-03-24 16:53:07', '2016-03-24 16:53:07');
INSERT INTO `answers` VALUES ('4', '1', 'perfectionish', '0', '2016-03-24 16:53:07', '2016-03-24 16:53:07');
INSERT INTO `answers` VALUES ('5', '2', 'Thailand', '0', '2016-03-24 16:53:53', '2016-03-24 16:53:53');
INSERT INTO `answers` VALUES ('6', '2', 'Nepal', '1', '2016-03-24 16:53:53', '2016-03-24 16:53:53');
INSERT INTO `answers` VALUES ('7', '2', 'India', '0', '2016-03-24 16:53:53', '2016-03-24 16:53:53');
INSERT INTO `answers` VALUES ('8', '2', 'I dont know', '0', '2016-03-24 16:53:53', '2016-03-24 16:53:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Number Operation', 'This is the game.&nbsp;', '2016-03-24 06:36:37', '2016-03-24 16:46:10');
INSERT INTO `categories` VALUES ('2', 'Test Exam', 'This is about Quizz', '2016-03-24 16:51:12', '2016-03-24 16:51:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exams
-- ----------------------------
INSERT INTO `exams` VALUES ('1', 'Addition', 'This is about addition', '1', '2016-03-21', '2016-03-24', '60', '4', '1', 'free', '0', '1', '2016-03-24 06:37:55', '2016-03-24 06:37:55');
INSERT INTO `exams` VALUES ('2', 'Hello WOrld', 'sfasdfdsf', '2', '2016-03-24', '2016-03-24', '120', '10', '50', 'free', '0', '1', '2016-03-24 16:52:24', '2016-03-24 16:52:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', '2', 'What is your Name?', '', '10', '2016-03-24 16:53:07', '2016-03-24 16:53:07');
INSERT INTO `questions` VALUES ('2', '2', 'where are you from?', '', '10', '2016-03-24 16:53:53', '2016-03-24 16:53:53');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('2', 'Number Sense', 'This topic contains addition subtraction.');
INSERT INTO `topics` VALUES ('3', 'Arrange Order', 'Arranging Number in correct format.');
INSERT INTO `topics` VALUES ('4', 'array for beginners', 'Array of numbers. I live to work with array very much');

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
  `email` varchar(100) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '', 'admin', '$2y$07$9UdJ6eUdNKpHRfNdOsjIEuMkdXa9XLYFOnrm/6q8w2VFsjD/U2QQO', '', 'admin@admin.com', null, null, null, null, '1458789344', '1459157752', '1', 'admin', 'admin', null, null, '');
INSERT INTO `users` VALUES ('2', 0x3A3A31, 'sanindra shakya', '$2y$08$vaBCKbXn9OCoAYBu7z4/6exHQgNNgiCRaiJZlCl6ECJaGqMVJQR2S', '', 'saninshakya@gmail.com', null, null, null, null, '1458797564', '1459145419', '1', 'sanindra', 'shakya', '', '0990055177', '');
INSERT INTO `users` VALUES ('3', '', 'admin', '$2y$07$LSzvuRWsV74U.kuln1lOrOS7XHd3c8hiWZ1vzSY2rRnmhLqku4jNi', '', 'admin@admin.com', null, null, null, null, '1458881164', null, '1', 'admin', 'admin', null, null, '');
INSERT INTO `users` VALUES ('4', '', 'admin', '$2y$07$5Enn9nAKYpsfH0UD3z/7u.BhlMInU7JSrte87M51rUylpgo21ZiVe', '', 'admin@admin.com', null, null, null, null, '1458882180', null, '1', 'admin', 'admin', null, null, '');

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('1', '1', '1');
INSERT INTO `users_groups` VALUES ('2', '2', '2');
INSERT INTO `users_groups` VALUES ('3', '3', '1');
INSERT INTO `users_groups` VALUES ('4', '4', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_exams
-- ----------------------------
INSERT INTO `user_exams` VALUES ('8', '1', '1', '2016-03-24 16:45:39', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_exams` VALUES ('9', '2', '1', '2016-03-24 16:50:06', '0000-00-00 00:00:00', 'inprogress');
INSERT INTO `user_exams` VALUES ('12', '2', '2', '2016-03-25 05:46:43', '2016-03-25 05:46:54', 'completed');
INSERT INTO `user_exams` VALUES ('15', '1', '2', '2016-03-25 17:43:11', '0000-00-00 00:00:00', 'inprogress');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_questions
-- ----------------------------
INSERT INTO `user_questions` VALUES ('5', '2', '1', '2', 'yes', '1');
INSERT INTO `user_questions` VALUES ('6', '2', '2', '2', 'yes', '6');
