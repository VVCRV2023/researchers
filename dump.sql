/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : researchers

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-05-22 11:04:33
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `researchers`
-- ----------------------------
DROP TABLE IF EXISTS `researchers`;
CREATE TABLE `researchers` (
  `id_researchers` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pib` varchar(255) DEFAULT '',
  `gender` tinyint(1) unsigned DEFAULT 0,
  `phone` varchar(150) DEFAULT ' ',
  `email` varchar(255) NOT NULL DEFAULT ' ',
  `year_birth` int(4) unsigned DEFAULT 0,
  `country` varchar(50) DEFAULT ' ',
  `city` varchar(50) DEFAULT ' ',
  `work` varchar(50) DEFAULT ' ',
  `degree` varchar(20) DEFAULT ' ',
  `ranks` varchar(20) DEFAULT ' ',
  `interests` varchar(255) DEFAULT ' ',
  `scopus` varchar(255) DEFAULT ' ',
  `publons` varchar(255) DEFAULT ' ',
  `wos` varchar(255) DEFAULT ' ',
  `research_gate` varchar(255) DEFAULT ' ',
  `citation_index` int(3) unsigned DEFAULT 0,
  `hirsch_index` int(3) unsigned DEFAULT 0,
  `project_ukr` tinyint(1) unsigned DEFAULT 0,
  `project_eu` tinyint(1) unsigned DEFAULT 0,
  `publications` text DEFAULT NULL,
  `role` smallint(5) unsigned DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_researchers`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of researchers
-- ----------------------------
INSERT INTO `researchers` VALUES ('1', 'Волошин В.С,', '1', '0673222222', '', '1984', ' Україна', 'Рівне', 'НУВГП', ' к.е.н.', ' доцент', 'ІТ, економіка', '57220062026', '57220062027', '57220062028', '57220062029', '2', '3', '1', '2', '1. https://wiki.nuwm.edu.ua/index.php/%D0%92%D0%BE%D0%BB%D0%BE%D1%88%D0%B8%D0%BD_%D0%92%D0%BE%D0%BB%D0%BE%D0%B4%D0%B8%D0%BC%D0%B8%D1%80_%D0%A1%D1%82%D0%B5%D0%BF%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%87\n2. аіваів\n3. цівувіва\n4. фвіфів\n5. фіфв\n6. фівфів', '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('2', 'Шевченко Т.Г.', '1', '0984541241', '', '1980', ' Україна', 'Рівне', 'НУВГП', ' к.е.н.', ' доцент', 'економіка', ' ', ' ', ' ', ' ', '1', '0', '0', '1', null, '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('3', 'Краєвська І.О.', '2', '12542563', '', '1960', '  Україна', 'Львів', ' ', ' к.т.н.', ' професор', 'ІТ', ' ', ' ', ' ', ' ', '0', '0', '2', '0', null, '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('4', ' Гордон І.М.', '0', '.', '', '1962', ' Польща', 'Варшава', ' ', ' ', ' ', '.', '.', '.', '.', '.', '0', '0', '0', '0', null, '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('5', ' Тарасенко', '0', ' ', '', '1970', ' Чехія', 'Прага', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '0', '0', '0', '0', null, '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('7', 'Попович', '0', ' ', '', '1981', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '0', '0', '0', '0', null, '0', null, '', null, null, null);
INSERT INTO `researchers` VALUES ('9', 'vvc2', '0', ' ', 'l1@gmail.com', '1982', 'Польща', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '0', '0', '0', '0', null, '0', null, '$2y$10$IFl5bKai31GrusQIA6IfaeTweX/c5DK9sJBqYrc8jAXHl7UWi40pa', null, null, null);
INSERT INTO `researchers` VALUES ('10', 'vvc3', '0', ' ', 'vvc2@gmail.com', '1995', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '0', '0', '0', '0', null, '0', null, '$2y$10$leuXyCTBBckm9BESZtw7yeTTf0YbNhVnwBOhl2a0ZlDpEbU2nSpba', null, null, null);
INSERT INTO `researchers` VALUES ('11', 'admin', '1', '123123', 'admin1@gmail.com', '1991', 'Україна', 'Рівне', 'НУВГП', 'к.е.н.', 'доцент', 'ІТ', '111', '222', '333', '444', '1', '2', '1', '2', '1. іваів\r\n2.іва \r\n3. фівфів', '1', null, '$2y$10$nu4OeqPHjvL1EcTDZdvi6.p4bqElT6mURpxhLH5vzwdYp8wrPZwxi', null, null, null);
INSERT INTO `researchers` VALUES ('21', 'new', '0', ' ', 'new@gmail.com', '1984', 'Польща', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '0', '0', '0', '0', null, '0', null, '$2y$10$EUpq7O7PWgPPSipWhb0YbeU9Tch0Fi/Mz42pVPt2/Bw8Pth1ihsCW', null, null, null);
