/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 80018
Source Host           : localhost:3306
Source Database       : curso_ci_3

Target Server Type    : MYSQL
Target Server Version : 80018
File Encoding         : 65001

Date: 2020-04-04 21:41:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for livros
-- ----------------------------
DROP TABLE IF EXISTS `livros`;
CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_livro` varchar(150) NOT NULL,
  `autor_livro` varchar(100) NOT NULL,
  `preco` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of livros
-- ----------------------------
INSERT INTO `livros` VALUES ('1', 'Livro de PHP', 'Clayton', '10.00', '2020-04-04');
INSERT INTO `livros` VALUES ('2', 'Livro Codeignither', 'Jhonatas', '15.00', '2020-04-04');
INSERT INTO `livros` VALUES ('3', 'Livro Teste', 'Maria', '20.00', '2020-04-04');
INSERT INTO `livros` VALUES ('4', 'Livro Google', 'Google', '50.00', '2020-04-04');
