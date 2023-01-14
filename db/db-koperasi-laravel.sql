/*
 Navicat Premium Data Transfer

 Source Server         : dbku
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : db-koperasi-laravel

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 14/01/2023 11:03:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for member_models
-- ----------------------------
DROP TABLE IF EXISTS `member_models`;
CREATE TABLE `member_models`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member_models
-- ----------------------------
INSERT INTO `member_models` VALUES (2, 'baru', 'grogol', '08972739', 'bagusse@gmail.com', 'aktif', '2022-12-24 02:41:57', '2022-12-24 02:41:57');
INSERT INTO `member_models` VALUES (3, 'bgs', 'grogol', '08930983', 'abgsu', 'tidak aktif', NULL, NULL);

-- ----------------------------
-- Table structure for product_category_models
-- ----------------------------
DROP TABLE IF EXISTS `product_category_models`;
CREATE TABLE `product_category_models`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_category_models
-- ----------------------------
INSERT INTO `product_category_models` VALUES (1, 'buku', 'ada', '2022-12-24 02:38:16', '2022-12-24 02:38:16');
INSERT INTO `product_category_models` VALUES (2, 'alat tulis', 'ada', NULL, NULL);

-- ----------------------------
-- Table structure for product_models
-- ----------------------------
DROP TABLE IF EXISTS `product_models`;
CREATE TABLE `product_models`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `product` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `price` int(11) NULL DEFAULT NULL,
  `stock` int(11) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_models
-- ----------------------------
INSERT INTO `product_models` VALUES (1, '1', 'sinar dunia', 'sinar dunia 50 lbr', '', 5000, 5, 'ada', '2022-12-24 02:38:52', '2022-12-24 02:38:52');
INSERT INTO `product_models` VALUES (2, '2', 'pensil', 'pensil 2b', '', 3000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (3, NULL, 'komo', 'jajan komo', '', 3000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (4, NULL, 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (5, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (6, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (7, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (8, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (9, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (10, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (11, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (12, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (13, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (14, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);
INSERT INTO `product_models` VALUES (15, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);

-- ----------------------------
-- Table structure for voucher_models
-- ----------------------------
DROP TABLE IF EXISTS `voucher_models`;
CREATE TABLE `voucher_models`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voucher_models
-- ----------------------------
INSERT INTO `voucher_models` VALUES (1, 'mahasiswa', '5%', 'ada', '2022-12-24 02:40:08', '2022-12-24 02:40:08');
INSERT INTO `voucher_models` VALUES (2, 'mhs_smstr5', '10%', 'ada', NULL, NULL);
INSERT INTO `voucher_models` VALUES (3, 'mhs_smstr5', '10%', 'ada', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
