/*
Navicat MySQL Data Transfer

Source Server         : mysql-localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : mathmooc

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-01 22:12:38
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES ('6', 'Adding by 1', 'Adding by 1', '7', '1');
INSERT INTO `activities` VALUES ('7', 'test', 'test', '9', '1');
INSERT INTO `activities` VALUES ('8', 'Weight Measure', 'This activity will help you understand about weight.&nbsp;', '10', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activities_answers
-- ----------------------------
INSERT INTO `activities_answers` VALUES ('29', '11', '2345', '1', '2016-04-01 17:09:03', '2016-04-01 17:09:03');
INSERT INTO `activities_answers` VALUES ('30', '11', '3245', '0', '2016-04-01 17:09:03', '2016-04-01 17:09:03');
INSERT INTO `activities_answers` VALUES ('31', '11', '2345', '0', '2016-04-01 17:09:03', '2016-04-01 17:09:03');
INSERT INTO `activities_answers` VALUES ('32', '11', '345', '0', '2016-04-01 17:09:03', '2016-04-01 17:09:03');
INSERT INTO `activities_answers` VALUES ('33', '12', '654', '0', '2016-04-01 19:18:14', '2016-04-01 19:18:14');
INSERT INTO `activities_answers` VALUES ('34', '12', '601', '1', '2016-04-01 19:18:15', '2016-04-01 19:18:15');
INSERT INTO `activities_answers` VALUES ('35', '12', '501', '0', '2016-04-01 19:18:15', '2016-04-01 19:18:15');
INSERT INTO `activities_answers` VALUES ('36', '12', '908', '0', '2016-04-01 19:18:15', '2016-04-01 19:18:15');

-- ----------------------------
-- Table structure for `activities_questions`
-- ----------------------------
DROP TABLE IF EXISTS `activities_questions`;
CREATE TABLE `activities_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `marks` int(11) NOT NULL,
  `image` blob,
  `created_datetime` datetime DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of activities_questions
-- ----------------------------
INSERT INTO `activities_questions` VALUES ('9', '7', '2+5', '56', '', '2016-04-01 17:07:31', '2016-04-01 17:07:31');
INSERT INTO `activities_questions` VALUES ('10', '7', '345', '3', '', '2016-04-01 17:08:51', '2016-04-01 17:08:51');
INSERT INTO `activities_questions` VALUES ('11', '7', '345', '3', '', '2016-04-01 17:09:03', '2016-04-01 17:09:03');
INSERT INTO `activities_questions` VALUES ('12', '8', '100+501', '12', '', '2016-04-01 19:18:14', '2016-04-01 19:18:14');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answers
-- ----------------------------

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
INSERT INTO `exams` VALUES ('3', 'Addition-Quiz', 'Addition Quiz', '3', '2016-03-30', '2017-05-10', '20', '10', '40', 'free', '0', '1', '2016-03-31 08:26:42', '2016-03-31 08:26:42');
INSERT INTO `exams` VALUES ('4', 'test', 'test', '3', '2010-04-01', '2017-10-10', '40', '3', '20', 'free', '0', '1', '2016-04-01 05:51:25', '2016-04-01 05:51:25');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `groups` VALUES ('2', 'user', 'General User');

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
  `image` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('7', 'Addition and Subtraction', 'math practice for learning Addition &amp; Subtraction.<br>', null, '1', null, '2016-03-31 17:44:30', '0', null);
INSERT INTO `topics` VALUES ('9', 'test', 'test', '1', '1', '2016-03-31 17:39:29', '2016-03-31 17:39:29', '0', null);
INSERT INTO `topics` VALUES ('10', 'Weight', 'This is about weight.', '1', '1', '2016-04-01 19:14:55', '2016-04-01 19:14:55', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '', 'admin', '$2y$07$9UdJ6eUdNKpHRfNdOsjIEuMkdXa9XLYFOnrm/6q8w2VFsjD/U2QQO', '', 'admin@admin.com', null, null, null, null, '1458789344', '1459516595', '1', 'admin', 'admin', null, null, '');
INSERT INTO `users` VALUES ('5', 0x3A3A31, 'sanin shakya', '$2y$08$pETx5P9VM2iPm90kY/NzL.9m3btOvCNiUGXcdGE4L99ivg2DTuVkO', '', 'saninshakya@gmail.com', null, null, null, null, '1459404854', '1459412523', '1', 'sanin', 'shakya', 'home', '9898989', '');

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('1', '1', '1');
INSERT INTO `users_groups` VALUES ('5', '5', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_exams
-- ----------------------------
INSERT INTO `user_exams` VALUES ('21', '5', '3', '2016-03-31 10:22:25', '2016-03-31 10:22:33', 'completed');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_questions
-- ----------------------------
INSERT INTO `user_questions` VALUES ('18', '5', '3', '3', 'yes', '9');
