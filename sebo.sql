-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13-Nov-2024 às 14:55
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
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `product_id` int(11) DEFAULT NULL,
  UNIQUE KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`product_id`) VALUES
(9),
(11);

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
  `desconto` varchar(200) DEFAULT NULL,
  `anoPublicacao` varchar(50) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `imagem` varchar(450) NOT NULL,
  `estoque` varchar(200) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `nomeLivro`, `autor`, `preco`, `desconto`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `estoque`, `usuario`) VALUES
(6, '20 Mil léguas submarinas', 'Júlio Verne', '30', NULL, '1870', 'Ficção Científica', 'Em 20 mil léguas submarinas, o leitor é transportado para 1866, ano em que navios de diferentes nacionalidades começam a naufragar e sofrer misteriosas avarias. As descrições revelam que um ser "comprido, fusiforme, fosforescente em certas ocasiões, infinitamente maior e mais veloz que uma baleia" seria o responsável. Imediatamente, governantes e homens da ciência mobilizam-se para deter o misterioso monstro marinho. A missão, porém, não sai como esperado. Os responsáveis pela expedição são capturados pelo capitão Nemo, enigmático e problemático, criador do moderno submarino Náutilus, confundido com o tal monstro misterioso. A aventura só começou. A trupe vai viajar pelo fundo do mar, enfrentando águas remotas, criaturas das profundezas e uma fauna e flora exuberantes.', 'bookImages/D_NQ_NP_779448-MLU50461872208_062022-O.png', '33', '3'),
(7, 'Os último jovens da terra', 'Max Brallier', '25', NULL, '2019', 'Infantil', 'Divirta-se com Jack sulivan e o fim do mundo! Depois que o planeta é invadido por monstros e zumbis, jack se une aos seus amigos para encarar o apocalipse com muitas aventuras e diversão!', 'bookImages/UltimosJovens.png', '0', '3'),
(8, ' O Pequeno Príncipe', 'Antoine de Saint-Exupéry', '21', NULL, '1943', 'Infantil', 'O Pequeno Príncipe é uma obra literária do escritor francês Antoine de Saint-Exupéry, que conta a história da amizade entre um homem frustrado por ninguém compreender os seus desenhos, com um principezinho que habita um asteroide no espaço. A história do príncipe que deixou o seu pequeno planeta em viagem para descobrir o universo e a si mesmo já encanta crianças e adultos ao redor do mundo há mais de 70 anos. Uma obra sensível e cativante que ajuda a entender mais sobre a essência humana.', 'bookImages/PequenoPrincipe.jpg', '14', '3'),
(9, 'A Sociedade do Anel', 'J. R. R. Tolkien', '70', NULL, '1954', 'Fantasia', 'A Sociedade do Anel começa no Condado, a região rural do oeste da Terra-média onde vivem os diminutos e pacatos hobbits. Bilbo Bolseiro, um dos raros aventureiros desse povo, cujas peripécias foram contadas em O Hobbit, resolve ir embora do Condado e deixa sua considerável herança nas mãos de seu jovem parente Frodo.', 'bookImages/aSociedadeDoAnel.jpg', '104', '2'),
(10, 'A Arte da Guerra', 'Sun\'Tzu', '60', NULL, '2015', 'Histórico', 'O que faz de um tratado militar, escrito por volta de 500 a.C., manter-se atual a ponto de ser publicado praticamente no mundo todo até os dias de hoje? Você verá que, em A arte da guerra, as estratégias transmitidas pelo general chinês Sun Tzu carregam um profundo conhecimento da natureza humana. Elas transcendem os limites dos campos de batalha e alcançam o contexto das pequenas ou grandes lutas cotidianas, sejam em ambientes competitivos ? como os do mundo corporativo ? sejam nos desafios internos, em que temos de encarar nossas próprias dificuldades. Se você não conhece a si mesmo nem o inimigo, sucumbirá a todas as batalhas. Sun Tzu', 'bookImages/aArteGuerra.jpg', '40', '2'),
(11, 'Jurassic Park', 'Michael Crichton', '130', NULL, '1990', 'Ficção', 'Jurassic Park é um livro de ficção científica escrito por Michael Crichton e publicado em 20 de novembro de 1990. A trama usa a teoria do caos e suas implicações filosóficas para explicar o colapso de um parque de diversões povoado por dinossauros, recriados através de engenharia genética.', 'bookImages/Jurassic.jpg', '70', '2'),
(12, 'As Crônicas de Nárnia', 'C. S. Lewis', '50', NULL, '2009', 'Fantasia', 'Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal - o que mais um leitor poderia querer de um livro? O livro que tem tudo isso é \'\'\'\'O leão, a feiticeira e o guarda-roupa\'\'\'\', escrito em 1949 por Clive Staples Lewis. MasLewis não parou por aí. Seis outros livros vieram depois e, juntos, ficaram conhecidos como \'\'\'\'As crônicas de Nárnia\'\'\'\'. Nos últimos cinqüenta anos, \'\'\'\'As crônicas de Nárnia\'\'\'\' transcenderam o gênero da fantasia para se tornar parte do cânone da literaturaclássica. Cada um dos sete livros é uma obra-prima, atraindo o leitor para um mundo em que a magia encontra a realidade, e o resultado é um mundo ficcional que tem fascinado gerações. Esta edição apresenta todas as sete crônicas integralmente, num único volume. Os livros são apresentados de acordo com a ordem de preferência de Lewis, cada capítulo com uma ilustração do artista original, Pauline Baynes. Enganosamente simples e direta, \'\'\'\'As crônicas de Nárnia\'\'\'\' continuam cativando os leitores com aventuras, personagens e fatos que falam a pessoas de todas as idades.', 'bookImages/leao.jpg', '145', '7'),
(14, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', '40', NULL, '2017', 'Fantasia', 'Harry Potter e a Pedra Filosofal é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo.', 'bookImages/Potter.jpg', '16', '7'),
(16, 'O Ladrão de Raios - Percy Jackson e os Olimpianos', 'Rick Riordan', '30', NULL, '2014', 'Fantasia', 'O Ladrão de Raios é o primeiro livro da série Percy Jackson & os Olimpianos baseado na mitologia grega, escrito por Rick Riordan, que narra a vida do adolescente Percy Jackson que descobre ser um semideus, filho de Poseidon com uma humana.', 'bookImages/Jackson.jpg', '65', '7'),
(17, 'Dandadan 01', 'Yukinobu Tatsu', '58', NULL, '2022', 'Romance', 'Essa é a história de Momo Ayase, uma colegial que acredita na existência de espíritos e seu colega de classe que ela apelida de "Okarun", um viciado em alienígenas, OVNIs e fenômenos inexplicáveis! Como Okarun não acredita em fantasmas e espíritos e Momo não acredita em alienígenas e OVNIs, eles decidem provar um ao outro que suas crenças são reais! Assim, Momo vai até um hospital abandonado onde há relatos de avistamento de OVNIs e Okarun vai até um túnel assombrado... Será esse o começo de uma história de amor?! Aqui abrem-se as cortinas da ação desenfreada envolvendo o oculto, o misterioso e o bizarro!', 'bookImages/Dan.jpg', '24', '7'),
(18, 'Uzumaki: deluxe edition', 'Junji Ito', '100', NULL, '2013', 'Horror', 'Uma obra-prima do mangá de terror, agora disponível em uma edição de luxo em capa dura!<br />\r\n<br />\r\nKurôzu-cho, uma pequena cidade nebulosa na costa do Japão, é amaldiçoada. De acordo com Shuichi Saito, o namorado retraído da adolescente Kirie Goshima, a cidade deles é assombrada não por uma pessoa ou ser, mas por um padrão: uzumaki, a espiral, a forma hipnótica secreta do mundo. Ela se manifesta em tudo, desde conchas e redemoinhos na água até as marcas espirais no corpo das pessoas, as obsessões insanas do pai de Shuichi e a voz da cóclea em nosso ouvido interno. À medida que a loucura se espalha, os habitantes de Kurôzu-cho são puxados cada vez mais para dentro de um redemoinho do qual não há retorno!', 'bookImages/Junji.jpg', '30', '3');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `senha`, `image`, `favorite`, `carrinho`) VALUES
(2, 'Gauss', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'uploadImages/Knuckles.png', '', ''),
(3, 'Sam', '9baf3a40312f39849f46dad1040f2f039f1cffa1238c41e9db675315cfad39b6', 'uploadImages/sam-and-max-sam-&-max.gif', '', ''),
(7, 'MrHouseFalloutNewVegas', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'uploadImages/MrHouseSphere.jpeg', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
