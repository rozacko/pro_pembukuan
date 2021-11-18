/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100135
 Source Host           : localhost:3306
 Source Schema         : test_majoo

 Target Server Type    : MySQL
 Target Server Version : 100135
 File Encoding         : 65001

 Date: 03/11/2021 20:17:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for master_kategori
-- ----------------------------
DROP TABLE IF EXISTS `master_kategori`;
CREATE TABLE `master_kategori`  (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_kode` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of master_kategori
-- ----------------------------
INSERT INTO `master_kategori` VALUES (1, 'MINUMAN', 'Minuman');
INSERT INTO `master_kategori` VALUES (2, 'MAKANAN', 'Makanan');

-- ----------------------------
-- Table structure for master_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `master_pegawai`;
CREATE TABLE `master_pegawai`  (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` float(126, 0) NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pegawai_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of master_pegawai
-- ----------------------------
INSERT INTO `master_pegawai` VALUES (1, 'Coffee Latte', 'Sebuah kopi kenangan tak terlupakan', 15000, 'MINUMAN', '5a13784519e0582d38129b7e62feaeb5.jpg');
INSERT INTO `master_pegawai` VALUES (2, 'Nasi Goreng', 'Nasi digoreng', 20000, 'MAKANAN', NULL);
INSERT INTO `master_pegawai` VALUES (10, 'Nasi goreng 3', 'digoreng dadakan', 12000, 'MAKANAN', '4f691d6be6748c3465fd1dbbd79e710a.jpeg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pegawai_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '47bce5c74f589f4867dbd57e9ca9f808', 1);

SET FOREIGN_KEY_CHECKS = 1;
