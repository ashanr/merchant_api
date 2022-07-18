/*
 Navicat Premium Data Transfer

 Source Server         : Localhost PHP
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : 127.0.0.1:3306
 Source Schema         : merchant_db

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 18/07/2022 12:44:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for merchant
-- ----------------------------
DROP TABLE IF EXISTS `merchant`;
CREATE TABLE `merchant`  (
  `MerchantID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `District` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `City` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PostalCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PaymentID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PaymentDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `PaymentAmount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CardNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `MerchantStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of merchant
-- ----------------------------
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '1', 'Colombo', 'Colombo 01', '100', '3029745', '2021-11-17 23:58:36.000', '570', 'Visa', '1234', '0', 'lkr');
INSERT INTO `merchant` VALUES ('30562', 'Perera Peris', 'bank', '2', 'Colombo', 'Colombo 02', '200', '3029744', '2021-11-17 23:57:19.000', '900', 'Visa', '5678', '1', 'LKR');
INSERT INTO `merchant` VALUES ('5236', 'Kmari Nadeesha', 'bank', '3', 'Colombo', 'Colombo 03', '300', '3029743', '2021-11-17 23:54:56.000', '1950', 'Visa', '4569', '0', 'EURO');
INSERT INTO `merchant` VALUES ('2368', 'Kumidhini Sunduni', 'ipg', '5', 'Colombo', 'Colombo 04', '400', '3029742', '2021-11-17 23:52:18.000', '680', 'Visa', '4563', '1', 'USD');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 05', '500', '3029741', '2021-11-17 23:52:12.000', '1300', 'Master', '1578', '1', 'LKR');
INSERT INTO `merchant` VALUES ('8953', 'Mohamed Alshaf', 'bank', '1', 'Kandy', 'Batugoda', '20132', '3029740', '2021-11-17 23:51:24.000', '1260', 'Master', '7896', '1', 'LKR');
INSERT INTO `merchant` VALUES ('1239', 'Parak Oscar', 'direct', '2', 'Colombo', 'Colombo 07', '700', '3029739', '2021-11-17 23:50:54.000', '23705', 'Visa', '4884', '1', 'LKR');
INSERT INTO `merchant` VALUES ('235', 'kumara linga', 'ipg', '3', 'Colombo', 'Colombo 08', '800', '3029738', '2021-11-17 23:50:49.000', NULL, 'Master', '\"56444', '0', 'LKR');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3029737', '2021-11-17 23:47:15.000', '1350', 'Visa', '1234', '0', 'LKR');
INSERT INTO `merchant` VALUES ('6545', 'Kasun Sandun', 'ipg', '1', 'Colombo', 'Colombo 10', '1000', '3029736', '2021-11-17 23:45:10.000', '2129', 'Master', '5678', '1', 'EURO');
INSERT INTO `merchant` VALUES ('3434', 'Amal Vijaya', 'ipg', '2', 'Kandy', 'Bawlana', '20218', '3029735', '2021-11-17 23:44:11.000', '1267.35', 'Visa', '4569', '1', 'USD');
INSERT INTO `merchant` VALUES ('532', 'Vidthiyapara Kamali', 'ipg', '3', 'Colombo', 'Colombo 12', '1200', '3029734', '2021-11-17 23:43:35.000', '3259', 'Visa', '4 563', '0', 'LKR');
INSERT INTO `merchant` VALUES ('3456', 'Ranaweera Erina', 'direct', '3', 'Colombo', 'Colombo 13', '1300', '3029733', '2021-11-17 23:42:43.000', '5400', 'Visa', '1578', '1', 'LKR');
INSERT INTO `merchant` VALUES ('5435', 'Kanapathipillai Pratheepan', 'direct', '4', 'Jaffna', 'Jaffna', '40000', '3029732', '2021-11-17 23:41:45.000', '2640', 'Visa', '7896', '0', 'LKR');
INSERT INTO `merchant` VALUES ('76876', 'Sampath Pasindu', 'direct', '4', 'Colombo', 'Colombo 15', '1500', '3029731', '2021-11-17 23:40:01.000', '20716', 'Visa', 'null', '1', 'LKR');
INSERT INTO `merchant` VALUES ('235', 'kumara linga', 'ipg', '3', 'Colombo', 'Colombo 08', '800', '3029730', '2021-11-17 23:38:41.000', '1300', 'Visa', '1234', '1', 'LKR');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3029729', '2021-11-17 23:38:28.000', '2500', 'Visa', '5678', '2', 'EURO');
INSERT INTO `merchant` VALUES ('6545', 'Kasun Sandun', 'ipg', '1', 'Colombo', 'Colombo 10', '1000', '3029728', '2021-11-17 23:38:07.000', '4158', 'Master', '4569', '1', 'USD');
INSERT INTO `merchant` VALUES ('3434', 'Amal Vijaya', 'ipg', '2', 'Kandy', 'Bawlana', '20218', '3029727', '2021-11-17 23:33:57.000', '420', 'Master', '4563', '0', 'EURO');
INSERT INTO `merchant` VALUES ('532', 'Vidthiyapara Kamali', 'ipg', '3', 'Colombo', 'Colombo 12', '1200', '3029726', '2021-11-17 23:30:26.000', '2142', 'Visa', '1578', '0', 'USD');
INSERT INTO `merchant` VALUES ('3456', 'Ranaweera Erina', 'direct', '3', 'Colombo', 'Colombo 13', '1300', '3029725', '2021-11-17 23:29:48.000', '22605', 'Visa', '7896', '1', 'EURO');
INSERT INTO `merchant` VALUES ('5435', 'Kanapathipillai Pratheepan', 'direct', '4', 'Jaffna', 'Jaffna', '40000', '3029724', '2021-11-17 23:29:15.000', '2300', 'Visa', '4884', '1', 'USD');
INSERT INTO `merchant` VALUES ('76876', 'Sampath Pasindu', 'direct', '4', 'Colombo', 'Colombo 15', '1500', '3029723', '2021-11-17 23:27:52.000', '810', 'Visa', NULL, '0', 'LKR');
INSERT INTO `merchant` VALUES ('5236', 'Kmari Nadeesha', 'bank', '3', 'Colombo', 'Colombo 03', '300', '3029722', '2021-11-17 23:25:34.000', '4095', 'Master', '5678', '1', 'EURO');
INSERT INTO `merchant` VALUES ('2368', 'Kumidhini Sunduni', 'ipg', '5', 'Colombo', 'Colombo 04', '400', '3029721', '2021-11-17 23:24:09.000', 'dsf', 'Master', '4569', '0', 'USD');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 05', '500', '3029720', '2021-11-17 23:23:13.000', '6000', 'Master', '0', '1', 'USD');
INSERT INTO `merchant` VALUES ('8953', 'Mohamed Alshaf', 'bank', '1', 'Kandy', 'Batugoda', '20132', '3029719', '2021-11-17 23:22:40.000', '1637.5', 'Visa', '1578', '2', 'EURO');
INSERT INTO `merchant` VALUES ('1239', 'Parak Oscar', 'direct', '2', 'Colombo', 'Colombo 07', '700', '3029718', '2021-11-17 23:21:35.000', '1953', 'Visa', '7896', '1', 'USD');
INSERT INTO `merchant` VALUES ('235', 'kumara linga', 'ipg', '3', 'Colombo', 'Colombo 08', '800', '3029717', '2021-11-17 23:19:07.000', '1120', 'Visa', '4884', '1', 'LKR');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3029716', '2021-11-17 23:18:36.000', '1081.5', 'Visa', '1234', '0', 'LKR');
INSERT INTO `merchant` VALUES ('6545', 'Kasun Sandun', 'ipg', '1', 'Colombo', 'Colombo 10', '1000', '3029715', '2021-11-17 23:17:03.000', '2394', 'Visa', '5678', '0', 'LKR');
INSERT INTO `merchant` VALUES ('3434', 'Amal Vijaya', 'ipg', '2', 'Kandy', 'Bawlana', '20218', '3029714', '2021-11-17 23:16:18.000', '420', 'Visa', '4569', '1', 'LKR');
INSERT INTO `merchant` VALUES ('532', 'Vidthiyapara Kamali', 'ipg', '3', 'Colombo', 'Colombo 12', '1200', '3029713', '2021-11-17 23:16:09.000', '640.5', 'Visa', '4563', '1', 'EURO');
INSERT INTO `merchant` VALUES ('3456', 'Ranaweera Erina', 'direct', '3', 'Colombo', 'Colombo 13', '1300', '3029712', '2021-11-17 23:15:38.000', '2080', 'Visa', '1578', '0', 'USD');
INSERT INTO `merchant` VALUES ('5435', 'Kanapathipillai Pratheepan', 'direct', '4', 'Jaffna', 'Jaffna', '40000', '3029711', '2021-11-17 23:15:18.000', '1000', 'Visa', '7896', '1', 'LKR');
INSERT INTO `merchant` VALUES ('2368', 'Kumidhini Sunduni', 'ipg', '5', 'Colombo', 'Colombo 04', '400', '3029710', '2021-11-17 23:14:36.000', '544.42', 'Visa', '4884', '0', 'EURO');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 05', '500', '3029709', '2021-11-17 23:13:31.000', 'df', 'Visa', '1234', '1', 'USD');
INSERT INTO `merchant` VALUES ('8953', 'Mohamed Alshaf', 'bank', '1', 'Kandy', 'Batugoda', '20132', '3029708', '2021-11-17 23:11:49.000', '150', 'Visa', '5678', '1', 'LKR');
INSERT INTO `merchant` VALUES ('1239', 'Parak Oscar', 'direct', '2', 'Colombo', 'Colombo 07', '700', '3029707', '2021-11-17 23:10:30.000', '2142', 'Visa', '4569', '1', 'LKR');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3039729', '2021-11-17', '2500', 'Visa', '5678', '2', 'EURO');
INSERT INTO `merchant` VALUES ('1239', 'Parak Oscar', 'direct', '2', 'Colombo', 'Colombo 07', '700', '4029707', '2021-11-18 20:10:30.000', '1236', 'Visa', '4569', '1', 'LKR');
INSERT INTO `merchant` VALUES ('3434', 'Amal Vijaya', 'ipg', '2', 'Kandy', 'Bawlana', '20218', '5029214', '2021-11-17 23:16:18.000', '420', 'Visa', '4569', '1', 'LKR');
INSERT INTO `merchant` VALUES ('532', 'Vidthiyapara Kamali', 'ipg', '3', 'Colombo', 'Colombo 12', '1200', '5659713', '2021-11-17 23:16:09.000', '640.5', 'Visa', '4563', '1', 'EURO');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3129716', '2022-01-17 23:18:36.000', '321.23', 'Visa', '1234', '1', 'LKR');
INSERT INTO `merchant` VALUES ('76876', 'Sampath Pasindu', 'direct', '4', 'Colombo', 'Colombo 15', '1500', '3239723', '2021-11-16 23:27:52.000', '57836.1', 'Visa', NULL, '0', 'LKR');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3039716', '2022-01-01 13:18:36.000', '1081.5', 'Visa', '1234', '1', 'LKR');
INSERT INTO `merchant` VALUES ('5236', 'Kmari Nadeesha', 'bank', '3', 'Colombo', 'Colombo 03', '300', '3634222', '2021-11-27 23:25:34.000', '45896.3', 'Master', '5678', '1', 'EURO');
INSERT INTO `merchant` VALUES ('4563', 'Navarathinam Shanthosh', 'direct', '6', 'Colombo', 'Colombo 09', '900', '3029429', '2022-01-03 03:38:28.000', '2568.36', 'Visa', '5678', '2', 'EURO');
INSERT INTO `merchant` VALUES ('234567', 'Mallipulla Karagma', 'bank', '6', 'Colombo', 'Colombo 09', '900', '8954230', '2022-01-05 01:38:28.000', '7895.23', 'Visa', '5678', '2', 'EURO');
INSERT INTO `merchant` VALUES ('456234', 'Liyanage Pathipa', 'Bank', '3', 'Kandy', 'Bawlana', '20218', '8954231', '2022-01-05 02:38:28.000', '1253.4', 'Visa', '5678', '2', 'EURO');

SET FOREIGN_KEY_CHECKS = 1;
