-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 31-Out-2024 às 14:49
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebo`
--
CREATE DATABASE IF NOT EXISTS `sebo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sebo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeLivro` varchar(250) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `preco` varchar(250) NOT NULL,
  `anoPublicacao` varchar(50) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descricao` varchar(900) NOT NULL,
  `imagem` varchar(450) NOT NULL,
  `pdf` varchar(450) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `nomeLivro`, `autor`, `preco`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `pdf`, `usuario`) VALUES
(4, '20 Mil léguas submarinas', 'Júlio Verne', '25,60', '1870', 'ficção', 'O aparecimento de uma criatura desconhecida nos mares provoca preocupação e curiosidade. Uma expedição parte em busca de respostas mas é atacada pela criatura e três homens são lançados ao mar.</br>\r\n</br>\r\nAronnax, Conselho e Ned Land são resgatados pelo suposto monstro, que descobrem se tratar de um submarino, comandado pelo capitão Nemo. Ele os salva da morte, mas pede um preço alto: serão prisioneiros para sempre.', 'bookImages/VinteMilLeguas.png', 'pdfUploads/1 Vinte mil léguas submarinas Autor Julio Verne.pdf', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `favorite` varchar(450) CHARACTER SET utf8 NOT NULL,
  `carrinho` varchar(450) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `senha`, `image`, `favorite`, `carrinho`) VALUES
(1, 'Carlinhos162', 'ad7121018bc87ede628bd0a052d1bdcc8277157e0227117235696d4ab8f3d489', 'uploadImages/images.png', '', ''),
(2, 'Gauss', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'uploadImages/Knuckles.png', '', ''),
(3, 'Sam', '9baf3a40312f39849f46dad1040f2f039f1cffa1238c41e9db675315cfad39b6', 'uploadImages/sam-and-max-sam-&-max.gif', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
