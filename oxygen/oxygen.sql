-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2016 às 04:05
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oxygen`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE IF NOT EXISTS `arquivo` (
  `idarquivo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `aprovado` int(2) NOT NULL,
  `datacad` datetime DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`idarquivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `curso` varchar(150) DEFAULT NULL,
  `instituicao` varchar(150) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  `nivel` int(2) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nome`, `email`, `senha`, `curso`, `instituicao`, `cpf`, `nivel`) VALUES
(1, 'Adelson Jhonata', 'jhonatasousa58@gmail.com', '9686464bab2d640721958cceb4497931', 'Ciencia da computaçao', 'Unb', '545684656546', 2),
(2, 'ADE', 'adelsonjhonata@gmail.com', '179d7feb42bf29893655c7107b4ce9d7', 'Ciencia da computaçao', 'Unb', '51561651651', 2),
(3, 'adfsdfasdfasd', 'aga@gagaa.com', '380f9e44ae6cc226340b28e1cf1480c6', 'ass', 'asdfsdfs', '151651561', 2),
(4, 'Administrador', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'Administração', 'IFTO', '12345678911', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
