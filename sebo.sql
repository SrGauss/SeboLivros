-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14-Nov-2024 às 02:53
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `nomeLivro`, `autor`, `preco`, `desconto`, `anoPublicacao`, `genero`, `descricao`, `imagem`, `estoque`, `usuario`) VALUES
(6, '20 Mil léguas submarinas', 'Júlio Verne', '30', NULL, '1870', 'Ficção Científica', 'Em 20 mil léguas submarinas, o leitor é transportado para 1866, ano em que navios de diferentes nacionalidades começam a naufragar e sofrer misteriosas avarias. As descrições revelam que um ser "comprido, fusiforme, fosforescente em certas ocasiões, infinitamente maior e mais veloz que uma baleia" seria o responsável. Imediatamente, governantes e homens da ciência mobilizam-se para deter o misterioso monstro marinho. A missão, porém, não sai como esperado. Os responsáveis pela expedição são capturados pelo capitão Nemo, enigmático e problemático, criador do moderno submarino Náutilus, confundido com o tal monstro misterioso. A aventura só começou. A trupe vai viajar pelo fundo do mar, enfrentando águas remotas, criaturas das profundezas e uma fauna e flora exuberantes.', 'bookImages/D_NQ_NP_779448-MLU50461872208_062022-O.png', '33', '3'),
(7, 'Os último jovens da terra', 'Max Brallier', '25', NULL, '2019', 'Infantil', 'Divirta-se com Jack sulivan e o fim do mundo! Depois que o planeta é invadido por monstros e zumbis, jack se une aos seus amigos para encarar o apocalipse com muitas aventuras e diversão!', 'bookImages/UltimosJovens.png', '0', '3'),
(8, ' O Pequeno Príncipe', 'Antoine de Saint-Exupéry', '21', NULL, '1943', 'Infantil', 'O Pequeno Príncipe é uma obra literária do escritor francês Antoine de Saint-Exupéry, que conta a história da amizade entre um homem frustrado por ninguém compreender os seus desenhos, com um principezinho que habita um asteroide no espaço. A história do príncipe que deixou o seu pequeno planeta em viagem para descobrir o universo e a si mesmo já encanta crianças e adultos ao redor do mundo há mais de 70 anos. Uma obra sensível e cativante que ajuda a entender mais sobre a essência humana.', 'bookImages/PequenoPrincipe.jpg', '14', '3'),
(9, 'A Sociedade do Anel', 'J. R. R. Tolkien', '70', NULL, '1954', 'Fantasia', 'A Sociedade do Anel começa no Condado, a região rural do oeste da Terra-média onde vivem os diminutos e pacatos hobbits. Bilbo Bolseiro, um dos raros aventureiros desse povo, cujas peripécias foram contadas em O Hobbit, resolve ir embora do Condado e deixa sua considerável herança nas mãos de seu jovem parente Frodo.', 'bookImages/aSociedadeDoAnel.jpg', '104', '2'),
(10, 'A Arte da Guerra', 'Sun\'Tzu', '60', NULL, '2015', 'Histórico', 'O que faz de um tratado militar, escrito por volta de 500 a.C., manter-se atual a ponto de ser publicado praticamente no mundo todo até os dias de hoje? Você verá que, em A arte da guerra, as estratégias transmitidas pelo general chinês Sun Tzu carregam um profundo conhecimento da natureza humana. Elas transcendem os limites dos campos de batalha e alcançam o contexto das pequenas ou grandes lutas cotidianas, sejam em ambientes competitivos ? como os do mundo corporativo ? sejam nos desafios internos, em que temos de encarar nossas próprias dificuldades. Se você não conhece a si mesmo nem o inimigo, sucumbirá a todas as batalhas. Sun Tzu', 'bookImages/aArteGuerra.jpg', '40', '2'),
(11, 'Jurassic Park', 'Michael Crichton', '130', '50', '1990', 'Ficção', 'Jurassic Park é um livro de ficção científica escrito por Michael Crichton e publicado em 20 de novembro de 1990. A trama usa a teoria do caos e suas implicações filosóficas para explicar o colapso de um parque de diversões povoado por dinossauros, recriados através de engenharia genética.', 'bookImages/Jurassic.jpg', '70', '2'),
(12, 'As Crônicas de Nárnia', 'C. S. Lewis', '50', NULL, '2009', 'Fantasia', 'Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal - o que mais um leitor poderia querer de um livro? O livro que tem tudo isso é \'\'\'\'O leão, a feiticeira e o guarda-roupa\'\'\'\', escrito em 1949 por Clive Staples Lewis. MasLewis não parou por aí. Seis outros livros vieram depois e, juntos, ficaram conhecidos como \'\'\'\'As crônicas de Nárnia\'\'\'\'. Nos últimos cinqüenta anos, \'\'\'\'As crônicas de Nárnia\'\'\'\' transcenderam o gênero da fantasia para se tornar parte do cânone da literaturaclássica. Cada um dos sete livros é uma obra-prima, atraindo o leitor para um mundo em que a magia encontra a realidade, e o resultado é um mundo ficcional que tem fascinado gerações. Esta edição apresenta todas as sete crônicas integralmente, num único volume. Os livros são apresentados de acordo com a ordem de preferência de Lewis, cada capítulo com uma ilustração do artista original, Pauline Baynes. Enganosamente simples e direta, \'\'\'\'As crônicas de Nárnia\'\'\'\' continuam cativando os leitores com aventuras, personagens e fatos que falam a pessoas de todas as idades.', 'bookImages/leao.jpg', '145', '7'),
(13, 'Perdido em Marte', 'Andy Weir', '62', NULL, '2015', 'Ficção Científica', 'Há seis dias, o astronauta Mark Watney se tornou a décima sétima pessoa a pisar em Marte. E, provavelmente, será a primeira a morrer no planeta vermelho. Depois de uma forte tempestade de areia, a missão Ares 3 é abortada e a tripulação vai embora, certa de que Mark morreu em um terrível acidente. Ao despertar, ele se vê completamente sozinho, ferido e sem ter como avisar às pessoas na Terra que está vivo.', 'bookImages/Perdido.jpg', '94', '7'),
(14, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', '40', NULL, '2017', 'Fantasia', 'Harry Potter e a Pedra Filosofal é o primeiro dos sete livros da série de fantasia Harry Potter, escrita por J. K. Rowling. O livro conta a história de Harry Potter, um órfão criado pelos tios que descobre, em seu décimo primeiro aniversário, que é um bruxo.', 'bookImages/Potter.jpg', '16', '7'),
(15, 'Jogos Vorazes', 'Suzanne Collins', '35', NULL, '2012', 'Ficção Científica', 'Na abertura dos Jogos Vorazes, a organização não recolhe os corpos dos combatentes caídos e dá tiros de canhão até o final. Cada tiro, um morto. Onze tiros no primeiro dia. Treze jovens restaram, entre eles, Katniss. Para quem os tiros de canhão serão no dia seguinte?... Após o fim da América do Norte, uma nova nação chamada Panem surge. Formada por doze distritos, é comandada com mão de ferro pela Capital. Uma das formas com que demonstra seu poder sobre o resto do carente país é com Jogos Vorazes, uma competição anual transmitida ao vivo pela televisão, em que um garoto e uma garota de doze a dezoito anos de cada distrito são selecionados e obrigados a lutar até a morte!', 'bookImages/HungerGames.png', '12', '7'),
(16, 'O Ladrão de Raios - Percy Jackson e os Olimpianos', 'Rick Riordan', '30', NULL, '2014', 'Fantasia', 'O Ladrão de Raios é o primeiro livro da série Percy Jackson & os Olimpianos baseado na mitologia grega, escrito por Rick Riordan, que narra a vida do adolescente Percy Jackson que descobre ser um semideus, filho de Poseidon com uma humana.', 'bookImages/Jackson.jpg', '65', '7'),
(17, 'Dandadan 01', 'Yukinobu Tatsu', '58', NULL, '2022', 'Romance', 'Essa é a história de Momo Ayase, uma colegial que acredita na existência de espíritos e seu colega de classe que ela apelida de "Okarun", um viciado em alienígenas, OVNIs e fenômenos inexplicáveis! Como Okarun não acredita em fantasmas e espíritos e Momo não acredita em alienígenas e OVNIs, eles decidem provar um ao outro que suas crenças são reais! Assim, Momo vai até um hospital abandonado onde há relatos de avistamento de OVNIs e Okarun vai até um túnel assombrado... Será esse o começo de uma história de amor?! Aqui abrem-se as cortinas da ação desenfreada envolvendo o oculto, o misterioso e o bizarro!', 'bookImages/Dan.jpg', '24', '7'),
(18, 'Uzumaki: deluxe edition', 'Junji Ito', '100', NULL, '2013', 'Horror', 'Essa é a história de Momo Ayase, uma colegial que acredita na existência de espíritos e seu colega de classe que ela apelida de "Okarun", um viciado em alienígenas, OVNIs e fenômenos inexplicáveis! Como Okarun não acredita em fantasmas e espíritos e Momo não acredita em alienígenas e OVNIs, eles decidem provar um ao outro que suas crenças são reais! Assim, Momo vai até um hospital abandonado onde há relatos de avistamento de OVNIs e Okarun vai até um túnel assombrado... Será esse o começo de uma história de amor?! Aqui abrem-se as cortinas da ação desenfreada envolvendo o oculto, o misterioso e o bizarro!', 'bookImages/Junji.jpg', '30', '3'),
(19, 'Blade Runner', 'Philip K. Dick', '44', NULL, '2019', 'Distopia', 'Inspiração para um dos maiores clássicos do cinema, dirigido por Ridley Scott, este romance é de autoria do prolífico e revolucionário Philip K. Dick, um dos maiores expoentes da contracultura na ficção científica durante as décadas de 60 e 70. Rick Deckard é um caçador de recompensas, vivendo em uma San Francisco decadente, coberta pela poeira radioativa que dizimou inúmeras espécies de animais e plantas. Um novo trabalho pode ser o ponto de virada para melhorar seu padrão de vida e realizar seu sonho de consumo: uma ovelha de verdade, para substituir a réplica elétrica que ele cria em casa. Para isso, Deckard precisa perseguir e aposentar seis androides que estão foragidos, se passando por humanos. Mas as convicções do detetive podem mudar quando percebe que a linha que separa o real do fabricado não é mais tão nítida quanto ele acreditava. Em Androides sonham com ovelhas elétricas?, título original deste livro, Philip K. Dick cria uma atmosfera sombria e perturbadora para contar uma história impressionante, e abordar questões filosóficas profundas sobre a natureza da vida, da religião, da tecnologia e da própria condição humana. Esta nova edição conta com capa ilustrada por Rafael Coutinho, com design de Giovanna Cianelli. A cena imaginada por Coutinho homenageia o filme e retoma o ar policial noir do romance, ao mesmo tempo em que explora a atmosfera de dúvida e segredos presente na obra de Dick.', 'bookImages/BRunner.jpg', '66', '2'),
(20, 'Neuromancer', 'William Gibson', '47', NULL, '2016', 'Distopia', 'O Céu sobre o porto tinha cor de televisão num canal fora do ar. Considerada a obra precursora do movimento cyberpunk e um clássico da ficção científica moderna, Neuromancer conta a história de Case, um cowboy do ciberespaço e hacker da matrix. Como punição por tentar enganar os patrões, seu sistema nervoso foi contaminado por uma toxina que o impede de entrar no mundo virtual. Agora, ele vaga pelos subúrbios de Tóquio, cometendo pequenos crimes para sobreviver, e acaba se envolvendo em uma jornada que mudará para sempre o mundo e a percepção da realidade. Evoluindo de Blade Runner e antecipando Matrix, Neuromancer é o romance de estreia de William Gibson. Esta obra distópica, publicada em 1984, antevê, de modo muito preciso, vários aspectos fundamentais da sociedade atual e de sua relação com a tecnologia. Foi o primeiro livro a ganhar a chamada ?tríplice coroa da ficção científica?: os prestigiados prêmios Hugo, Nebula e Philip K. Dick.', 'bookImages/Neuro.jpg', '51', '2'),
(21, 'Long Walk to Freedom: The Autobiography of Nelson Mandela', 'Nelson Mandela', '83', NULL, '1995', 'Biografia', '?Leitura essencial para quem quer entender a história ? e depois sair e mudá-la.? -O Presidente Barack Obama Nelson Mandela foi um dos grandes líderes morais e políticos do seu tempo: um herói internacional cuja dedicação ao longo da vida à luta contra a opressão racial na África do Sul lhe valeu o Prémio Nobel da Paz e a presidência do seu país. Após a sua libertação triunfante em 1990, de mais de um quarto de século de prisão, Mandela esteve no centro do drama político mais convincente e inspirador do mundo. Como presidente do Congresso Nacional Africano e chefe do movimento antiapartheid da África do Sul, foi fundamental para levar a nação a um governo multirracial e a um governo maioritário. Ele ainda é reverenciado em todo o mundo como uma força vital na luta pelos direitos humanos e pela igualdade racial.<br />\r\nLong Walk to Freedom é a sua autobiografia comovente e emocionante, destinada a ocupar o seu lugar entre as melhores memórias das maiores figuras da história. Aqui, pela primeira vez, Nelson Rolihlahla Mandela contou a extraordinária história da sua vida ? um épico de luta, retrocesso, esperança renovada e triunfo final. O livro que inspirou o grande filme Mandela: Long Walk to Freedom.', 'bookImages/Mandela.jpg', '23', '2'),
(22, 'Viagem ao centro da Terra', 'Júlio Verne', '30', NULL, '2019', 'Ficção', 'O professor Lidenbrock consegue decifrar um enigma do pergaminho de um cientista do século XII e se junta ao seu sobrinho, o jovem Áxel, para checar a possibilidade de chegar ao centro da Terra seguindo o relato decifrado.', 'bookImages/Centro.jpg', '11', '2'),
(23, 'O Hobbit', 'J.R.R. Tolkien', '50', NULL, '2019', 'Fantasia', 'Bilbo Bolseiro era um dos mais respeitáveis hobbits de todo o Condado até que, um dia, o mago Gandalf bate à sua porta. A partir de então, toda sua vida pacata e campestre soprando anéis de fumaça com seu belo cachimbo começa a mudar. Ele é convocado a participar de uma aventura por ninguém menos do que Thorin Escudo-de-Carvalho, um príncipe do poderoso povo dos Anãos.<br />\r\n<br />\r\nEsta jornada fará Bilbo, Gandalf e 13 anãos atravessarem a Terra-média, passando por inúmeros perigos, como os imensos trols, as Montanhas Nevoentas infestadas de gobelins ou a muito antiga e misteriosa Trevamata, até chegarem (se conseguirem) na Montanha Solitária. Lá está um incalculável tesouro, mas há um porém. Deitado em cima dele está Smaug, o Dourado, um dragão malicioso que... bem, você terá que ler para descobrir.<br />\r\n<br />\r\nLançado em 1937, O Hobbit é um divisor de águas na literatura de fantasia mundial. Mais de 80 anos após a sua publicação, o livro que antecede os ocorridos em O Senhor dos Anéis continua arrebatando fãs de todas as idades, talvez pelo seu tom brincalhão com uma pitada de magia élfica, ou talvez porque J.R.R. Tolkien tenha escrito o melhor livro infantojuvenil de todos os tempos.', 'bookImages/Bilbo.jpg', '70', '2'),
(24, 'It: A coisa', 'Stephen King', '84', NULL, '2014', 'Suspense', 'Durante as férias de 1958, em uma pacata cidadezinha chamada Derry, um grupo de sete amigos começa a ver coisas estranhas. Um conta que viu um palhaço, outro que viu uma múmia. Finalmente, acabam descobrindo que estavam todos vendo a mesma coisa: um ser sobrenatural e maligno que pode assumir várias formas. É assim que Bill, Beverly, Eddie, Ben, Richie, Mike e Stan enfrentam a Coisa pela primeira vez.<br />\r\n<br />\r\nQuase trinta anos depois, o grupo volta a se encontrar. Mike, o único que permaneceu em Derry, dá o sinal ? uma nova onda de terror tomou a pequena cidade. É preciso unir forças novamente. Só eles têm a chave do enigma. Só eles sabem o que se esconde nas entranhas de Derry. Só eles podem vencer a Coisa.<br />\r\n<br />\r\n?Mesmo depois de tantos anos, o público continua obcecado por IT. Ficamos obcecados porque todos temos medos. Todos temos algo que nos assusta, sejam palhaços e aranhas ou coisas que se escondem em um lugar muito mais profundo de nossa mente. Este livro fala com todo mundo. É o romance mais assustador de King, e duvido que isso vá mudar? ? The Guardian', 'bookImages/IT.jpg', '12', '2'),
(25, 'Os segredos da mente milionária', 'T. Harv Eker', '33', NULL, '2006', 'Autoajuda', 'Se as suas finanças andam na corda bamba, talvez esteja na hora de você refletir sobre o que T. Harv Eker chama de "o seu modelo de dinheiro"? um conjunto de crenças que cada um de nós alimenta desde a infância e que molda o nosso destino financeiro, quase sempre nos levando para uma situação difícil.<br />\n<br />\nNesse livro, Eker mostra como substituir uma mentalidade destrutiva? que você talvez nem perceba que tem? pelos "arquivos de riqueza", 17 modos de pensar e agir que distinguem?os ricos das demais pessoas.<br />\n<br />\nO autor também ensina um método eficiente de administrar o dinheiro. Você aprenderá a estabelecer sua remuneração pelos resultados que apresenta e não pelas horas que trabalha. Além disso, saberá como aumentar o seu patrimônio líquido ? a verdadeira medida da riqueza.<br />\n<br />\nA ideia é fazer o seu dinheiro trabalhar para você tanto quanto você trabalha para ele. Para isso, é necessário poupar e investir em vez de gastar. "Enriquecer não diz respeito somente a ficar rico em termos financeiros", diz Eker. "É mais do que isso: trata-se da pessoa que você se torna para alcançar esse objetivo."', 'bookImages/milion.jpeg', '17', '2');

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
