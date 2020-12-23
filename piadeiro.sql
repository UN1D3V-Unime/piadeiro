-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.14-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para piadeiro
CREATE DATABASE IF NOT EXISTS `piadeiro` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `piadeiro`;

-- Copiando estrutura para tabela piadeiro.piadas
CREATE TABLE IF NOT EXISTS `piadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela piadeiro.piadas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `piadas` DISABLE KEYS */;
INSERT INTO `piadas` (`id`, `titulo`, `texto`) VALUES
	(1, 'Por que as aranhas são carentes?', 'Porque ela é um Arac Need You'),
	(2, 'Uma piada grande, suja e pesada', 'O elefante caiu na lama'),
	(3, 'O que o pagodeiro foi fazer na igreja', 'Foi cantar PÁ GOD'),
	(4, 'Por que Napoleão sempre era chamado para as festas', 'Porque ele era Bom na Party'),
	(5, 'Você conhece a piada do pônei?', 'Pô nem eu...'),
	(6, 'Qual a formula da água benta?', 'H Deus O'),
	(7, 'Qual é o rei dos queijos?', 'O rei queijão'),
	(8, 'O que é maconha enrolada em jornal?', 'Baseado em fatos reais'),
	(9, 'O que a XUXA foi fazer no bar?', 'Foi beber ca sasha'),
	(10, 'O que um boné disse para outro boné?', 'Bom, né?'),
	(11, 'Por que o banco de dados nunca fica sozinho?', 'Porque ele sempre tem uns Schemas');
/*!40000 ALTER TABLE `piadas` ENABLE KEYS */;

-- Copiando estrutura para tabela piadeiro.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela piadeiro.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `username`, `senha`) VALUES
	(1, 'paulo', '123456'),
	(2, 'jose', 'asdfg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
