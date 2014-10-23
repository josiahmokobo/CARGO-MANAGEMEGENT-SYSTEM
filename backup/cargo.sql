/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : cargo

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2014-05-05 12:35:22
*/
create database  cargo;
use cargo;
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `PhoneNumber` int(11) NOT NULL,
  `Full_Names` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Residence` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `EmpNo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`EmpNo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('703922095', 'jm_122@live.com', 'josiah', 'Nairobi', 'jo', 'joisOC/8m1txo', 'ADMIN', '2');
INSERT INTO `admin` VALUES ('703922095', 'j@gmail.com', 'james', 'kenya', 'ja', 'joKFz5Kh2Ebfg', 'ADMIN', '3');

-- ----------------------------
-- Table structure for `cargo_description`
-- ----------------------------
DROP TABLE IF EXISTS `cargo_description`;
CREATE TABLE `cargo_description` (
  `Serial_Number` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Sender_Name` varchar(30) NOT NULL,
  `Sender_Phone` varchar(30) NOT NULL,
  `Reciever_Name` varchar(30) NOT NULL,
  `Reciever_Phone` int(11) NOT NULL,
  `Sent_From` varchar(30) NOT NULL,
  `Sent_To` varchar(30) NOT NULL,
  `Time_Sent` datetime NOT NULL,
  `Time_Received` datetime NOT NULL,
  PRIMARY KEY (`Serial_Number`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cargo_description
-- ----------------------------
INSERT INTO `cargo_description` VALUES ('3', 'books', 'josiah', '0703922095', 'mathew', '70400000', 'kisumu', 'nairobi', '2014-05-04 06:40:18', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('4', '', '', '', '', '0', '', '', '2014-05-04 07:01:28', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('5', '', '', '', '', '0', '', '', '2014-05-04 07:12:13', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('6', '', '', '', '', '0', '', '', '2014-05-04 07:13:42', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('7', '', '', '', '', '0', '', '', '2014-05-04 07:13:45', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('8', 'phone', 'mathew', '90909090', 'josiah', '90909090', 'kisumu', 'nairobi', '2014-05-04 07:14:44', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('9', '', '', '', '', '0', '', '', '2014-05-04 07:17:49', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('10', '', '', '', '', '0', '', '', '2014-05-04 07:18:57', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('11', '', '', '', '', '0', '', '', '2014-05-04 07:19:40', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('12', '', '', '', '', '0', '', '', '2014-05-04 07:19:45', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('13', '', '', '', '', '0', '', '', '2014-05-04 07:20:36', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('14', '', '', '', '', '0', '', '', '2014-05-04 07:21:54', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('15', '', '', '', '', '0', '', '', '2014-05-04 07:21:59', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('16', 'books', 'james', '090909090', 'josiah', '90909090', 'kisumu', 'nairobi', '2014-05-04 07:24:10', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('17', '', '', '', '', '0', '', '', '2014-05-04 07:25:41', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('18', 'phone', 'josiah', '9090909', 'mathew', '90909090', 'nairobi', 'kisumu', '2014-05-04 07:26:37', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('19', 'phone', 'josiah', '9090909', 'mathew', '90909090', 'nairobi', 'kisumu', '2014-05-04 07:27:19', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('20', 'furniture', 'james', '90909090', 'john', '909090909', 'kericho', 'nairobi', '2014-05-04 07:31:36', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('21', 'furniture', 'james', '90909090', 'john', '909090909', 'kericho', 'nairobi', '2014-05-04 07:32:38', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('22', 'furniture', 'james', '90909090', 'john', '909090909', 'kericho', 'nairobi', '2014-05-04 07:32:55', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('23', 'laptop', 'josiah', '9909999', 'james', '909090', 'kericho', 'nairobi', '2014-05-04 07:33:48', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('24', 'laptop', 'josiah', '9909999', 'james', '909090', 'kericho', 'nairobi', '2014-05-04 07:34:27', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('25', 'television', 'mutua', '909090909', 'josiah', '9090909', 'kericho', 'nairobi', '2014-05-04 07:36:02', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('26', 'phnoe', 'josiah', '090909090', 'james', '707070707', 'kericho', 'nairobi', '2014-05-04 07:38:03', '0000-00-00 00:00:00');
INSERT INTO `cargo_description` VALUES ('27', '', '', '', '', '0', '', '', '2014-05-05 11:36:38', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `ozekimessagein`
-- ----------------------------
DROP TABLE IF EXISTS `ozekimessagein`;
CREATE TABLE `ozekimessagein` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` varchar(160) DEFAULT NULL,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT '00:00:00:00',
  `operator` varchar(100) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ozekimessagein
-- ----------------------------
INSERT INTO `ozekimessagein` VALUES ('90', '+254703922095', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-09 17:31:50', '2014-04-09 17:31:56', 'safaricom', 'SMS:TEXT', '8425896');
INSERT INTO `ozekimessagein` VALUES ('91', '+254703922095', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-09 17:32:37', '2014-04-09 17:32:42', 'safaricom', 'SMS:TEXT', '1864491');
INSERT INTO `ozekimessagein` VALUES ('92', '+254703922095', '+254703922095', 'halooh', '2014-04-09 17:34:30', '2014-04-09 17:34:36', 'safaricom', 'SMS:TEXT', '6056836');
INSERT INTO `ozekimessagein` VALUES ('93', '+254703922095', '+254703922095', 'halooh', '2014-04-09 17:34:38', '2014-04-09 17:34:44', 'safaricom', 'SMS:TEXT', '9662464');
INSERT INTO `ozekimessagein` VALUES ('94', '+254703922095', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-09 17:34:42', '2014-04-09 17:34:48', 'safaricom', 'SMS:TEXT', '8833954');
INSERT INTO `ozekimessagein` VALUES ('95', '+254724130514', '+254703922095', 'Hii', '2014-04-09 19:41:26', '2014-04-09 19:42:48', 'safaricom', 'SMS:TEXT', '1889278');
INSERT INTO `ozekimessagein` VALUES ('96', '+254724130514', '+254703922095', 'Nikupouwa maybe Uko', '2014-04-09 19:43:51', '2014-04-09 19:43:58', 'safaricom', 'SMS:TEXT', '6984176');
INSERT INTO `ozekimessagein` VALUES ('97', '+254724130514', '+254703922095', 'Nini for sapa', '2014-04-09 19:45:42', '2014-04-09 19:45:51', 'safaricom', 'SMS:TEXT', '4641279');
INSERT INTO `ozekimessagein` VALUES ('98', '+254703922095', '+254703922095', 'small fishes and ugali', '2014-04-09 19:46:50', '2014-04-09 19:46:57', 'safaricom', 'SMS:TEXT', '6629963');
INSERT INTO `ozekimessagein` VALUES ('99', '+254724130514', '+254703922095', 'Nimelala njaa', '2014-04-09 19:49:54', '2014-04-09 19:50:05', 'safaricom', 'SMS:TEXT', '9114104');
INSERT INTO `ozekimessagein` VALUES ('100', '+254724130514', '+254703922095', 'Pap Nakam', '2014-04-09 19:51:36', '2014-04-09 19:51:48', 'safaricom', 'SMS:TEXT', '9118533');
INSERT INTO `ozekimessagein` VALUES ('101', '+254724130514', '+254703922095', 'Yeah', '2014-04-09 19:56:27', '2014-04-09 20:27:49', 'safaricom', 'SMS:TEXT', '2814661');
INSERT INTO `ozekimessagein` VALUES ('102', 'D48617A140', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-10 11:58:27', '2014-04-10 11:59:25', 'safaricom', 'SMS:TEXT', '6327761');
INSERT INTO `ozekimessagein` VALUES ('103', '3D0B93C2F4F8FDD6', '+254703922095', 'Your subscription to the 200 SMS service has been renewed for 10.00 KSH.To unsubscribe,dial *188#.', '2014-04-10 12:00:03', '2014-04-10 12:00:14', 'safaricom', 'SMS:TEXT', '7188083');
INSERT INTO `ozekimessagein` VALUES ('104', '+254703922095', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-10 12:00:23', '2014-04-10 12:00:32', 'safaricom', 'SMS:TEXT', '8591442');
INSERT INTO `ozekimessagein` VALUES ('105', '+254703922095', '+254703922095', 'hako ua', '2014-04-10 12:00:53', '2014-04-10 12:01:01', 'safaricom', 'SMS:TEXT', '1242973');
INSERT INTO `ozekimessagein` VALUES ('106', '+254703922095', '+254703922095', 'hako ua', '2014-04-10 12:01:01', '2014-04-10 12:01:10', 'safaricom', 'SMS:TEXT', '1671532');
INSERT INTO `ozekimessagein` VALUES ('107', '+254703922095', '+254703922095', 'halo guyz', '2014-04-10 12:03:06', '2014-04-10 12:03:15', 'safaricom', 'SMS:TEXT', '1012047');
INSERT INTO `ozekimessagein` VALUES ('108', '3D0B93C2F4F8FDD6', '+254703922095', '20.00 KSH has been deducted to repay your Okoa Jahazi.Your debt account is now fully settled.Thank you for staying with Safaricom.', '2014-04-10 12:00:03', '2014-04-10 12:06:14', 'safaricom', 'SMS:TEXT', '8295385');
INSERT INTO `ozekimessagein` VALUES ('109', '+254703922095', '+254703922095', 'halo guyz', '2014-04-10 12:07:37', '2014-04-10 12:07:45', 'safaricom', 'SMS:TEXT', '2075907');
INSERT INTO `ozekimessagein` VALUES ('110', '+254703922095', '+254703922095', 'ozeki message server trial - www.ozeki.hu', '2014-04-16 10:59:25', '2014-04-16 10:59:57', 'safaricom', 'SMS:TEXT', '2017678');
INSERT INTO `ozekimessagein` VALUES ('111', '8147', '+254703922095', 'Celebrate with Olivia Makori today. Reply to write on her timeline.', '2014-04-16 11:00:26', '2014-04-16 11:00:59', 'safaricom', 'SMS:TEXT', '4148520');
INSERT INTO `ozekimessagein` VALUES ('112', '3D0B93C2F4F8FDD6', '+254703922095', 'You have received 5 Items On-net SMS,Expiry date:18-04-2014.5MB Daily Data Bundle,Expiry date:18-04-2014.', '2014-04-16 11:22:53', '2014-04-16 11:28:33', 'safaricom', 'SMS:TEXT', '3250007');

-- ----------------------------
-- Table structure for `ozekimessageout`
-- ----------------------------
DROP TABLE IF EXISTS `ozekimessageout`;
CREATE TABLE `ozekimessageout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(767) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `operator` varchar(100) NOT NULL DEFAULT '',
  `msgtype` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`,`operator`),
  UNIQUE KEY `df` (`receiver`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ozekimessageout
-- ----------------------------
INSERT INTO `ozekimessageout` VALUES ('26', '', '090909090', 'Good Day  your  has been recieved by  josiah and his phone number is 090909090  please inform us of any inconvience, Cargo Agency', '2014-05-04 08:11:09', '', '', 'deleted', '', '');
INSERT INTO `ozekimessageout` VALUES ('27', '', '', 'Good Day  your  has been recieved by   and his phone number is   please inform us of any inconvience, Cargo Agency', '2014-05-04 08:12:47', '', '', 'deleted', '', '');
INSERT INTO `ozekimessageout` VALUES ('29', '', '56667', 'Good Day  your  has been recieved by  jkh and his phone number is 56667  please inform us of any inconvience, Cargo Agency', '2014-05-04 08:14:09', '', '', 'deleted', '', '');
INSERT INTO `ozekimessageout` VALUES ('39', '', 'nairobi', 'Good Day  your cargo has been recieved by  mathew and his phone number is nairobi  please inform us of any inconvience, Cargo Agency', '2014-05-05 07:49:54', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('45', '', 'kisumu', 'Good Day  your cargo has been recieved by  mathew and his phone number is kisumu  please inform us of any inconvience, Cargo Agency', '2014-05-05 08:02:15', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('53', '', '909090909', 'Good Day  your cargo has been recieved by  john and his phone number is 909090909  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:20:56', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('54', '', '909090', 'Good Day  your cargo has been recieved by  james and his phone number is 909090  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:22:33', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('55', '', '70400000', 'Good Day  your cargo has been recieved by  mathew and his phone number is 70400000  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:27:21', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('58', '', '90909090', 'Good Day  your cargo has been recieved by  mathew and his phone number is 90909090  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:34:26', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('59', '', '0', 'Good Day  your cargo has been recieved by   and his phone number is 0  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:34:41', '', '', 'send', '', '');
INSERT INTO `ozekimessageout` VALUES ('61', '', '9090909', 'Good Day  your cargo has been recieved by  josiah and his phone number is 9090909  please inform us of any inconvience, Cargo Agency', '2014-05-05 11:37:29', '', '', 'send', '', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `PhoneNumber` int(11) NOT NULL,
  `Full_Names` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Residence` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `EmpNo` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`EmpNo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('9090909', 'josiah', 'jm_122@live.com', 'kisii', 'jos', 'joFj6uUv4Otzk', 'USER', '1');
INSERT INTO `user` VALUES ('9090990', 'joseph', 'jm_122@live.com', 'kisii', 'jo', 'joKFz5Kh2Ebfg', 'USER', '2');
DELIMITER ;;
CREATE TRIGGER `insert` AFTER INSERT ON `ozekimessagein` FOR EACH ROW begin
insert into ozekii values(new.sender,new.msg,'','');
end
;;
DELIMITER ;
