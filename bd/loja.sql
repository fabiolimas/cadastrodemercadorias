-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 06-Mar-2020 às 19:58
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadorias`
--

DROP TABLE IF EXISTS `mercadorias`;
CREATE TABLE IF NOT EXISTS `mercadorias` (
  `codigo` int(4) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `estoque` double(7,4) NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mercadorias`
--

INSERT INTO `mercadorias` (`codigo`, `descricao`, `preco`, `estoque`) VALUES
(1, 'Chave de fenda', 20, 2.0000),
(2, 'RAYBAN SOLAR', 599, 25.0000),
(3, 'ANA HICKMAN', 566.69, 0.0000),
(4, 'OAKLEY H233', 599.8, 0.0000),
(5, 'RAYBAN SOLAR', 333, 4.0000),
(6, 'oakley h332', 222, 0.0000),
(7, 'vision vs362', 222, 0.0000),
(8, 'vision vs362', 222, 6.0000),
(9, 'Nova Mercadoria', 50, 0.0000),
(10, 'Mercadoria novissima', 100, 0.0000),
(11, 'oakley h332', 1000.1, 0.0000),
(12, 'RAYBAN SOLAR', 1000, 0.0000),
(13, 'ANA HICKMAN an889', 1000.1, 0.0000),
(14, 'ford fiesta 1.6', 2222, 0.0000),
(15, 'tabreti', 150.69, 0.0000),
(16, 'vision vs362', 1000.36, 0.0000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
