-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2019 at 02:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obladi`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

DROP TABLE IF EXISTS `archive`;
CREATE TABLE IF NOT EXISTS `archive` (
  `id_reclamation` int(5) NOT NULL DEFAULT '0',
  `id_client` int(5) NOT NULL,
  `id_motif` int(2) NOT NULL,
  `date` date DEFAULT NULL,
  `etat` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id_reclamation`, `id_client`, `id_motif`, `date`, `etat`, `message`) VALUES
(6, 66, 1, '2019-03-27', 'en cours', 'drztguoipjzenbfukctm'),
(4, 66, 2, '2019-03-20', 'ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `archive_liv`
--

DROP TABLE IF EXISTS `archive_liv`;
CREATE TABLE IF NOT EXISTS `archive_liv` (
  `cin` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `postal` varchar(8) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_liv`
--

INSERT INTO `archive_liv` (`cin`, `nom`, `prenom`, `mail`, `ville`, `postal`) VALUES
(7, 'ner', 'm', 'nermine.belarbi@esprit.tn', '', '888'),
(10, 'nermine', 'belarbi', 'nermine.belarbi@esprit.tn', '', '2083'),
(9, 'faten', 'belarbi', 'fatenbelarbi@gmail.com', '1', '400');

-- --------------------------------------------------------

--
-- Table structure for table `archive_livreur`
--

DROP TABLE IF EXISTS `archive_livreur`;
CREATE TABLE IF NOT EXISTS `archive_livreur` (
  `login` varchar(15) NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `salaire` int(10) NOT NULL,
  `cinl` int(10) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numc` int(11) NOT NULL,
  `receveur` varchar(255) NOT NULL,
  `transit` varchar(255) NOT NULL,
  `modalite` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`numc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`numc`, `receveur`, `transit`, `modalite`, `prix`) VALUES
(1234, 'ammar', 'ammars', 'yomkon', 320),
(12345, 'ammarA', 'ammarsA', 'yomkonA', 220);

-- --------------------------------------------------------

--
-- Table structure for table `espace`
--

DROP TABLE IF EXISTS `espace`;
CREATE TABLE IF NOT EXISTS `espace` (
  `idplace` int(11) NOT NULL AUTO_INCREMENT,
  `nbplace` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`idplace`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `espace`
--

INSERT INTO `espace` (`idplace`, `nbplace`) VALUES
(3, 2),
(8, 4),
(9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

DROP TABLE IF EXISTS `extra`;
CREATE TABLE IF NOT EXISTS `extra` (
  `param` varchar(20) NOT NULL,
  `value` varchar(256) NOT NULL DEFAULT 'true',
  PRIMARY KEY (`param`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`param`, `value`) VALUES
('nbEspaceVide', '1');

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `numf` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `unite` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `numeroc` int(11) NOT NULL,
  PRIMARY KEY (`numf`),
  KEY `numc` (`numeroc`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`numf`, `quantite`, `unite`, `description`, `numeroc`) VALUES
(5678, 30, 1, 'yomkon', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `cin` int(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `postal` varchar(8) NOT NULL,
  `etat` int(50) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livraison`
--

INSERT INTO `livraison` (`cin`, `nom`, `prenom`, `mail`, `ville`, `postal`, `etat`) VALUES
(9, 'faten', 'belarbi', 'fatenbelarbi@gmail.com', '1', '400', 1),
(10, 'nermine', 'belarbi', 'nermine.belarbi@esprit.tn', '', '20835', 0),
(41, 'ner', 'nerner', 'nerrr@gmail.com', 'ariana', '300', 0),
(44, 'rania', 'sabeh', 'ner@gmail.com', 'menzah 6', '100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `login` varchar(15) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `salaire` int(10) NOT NULL,
  `cinL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`login`, `mdp`, `salaire`, `cinL`) VALUES
('aa', 'aa', 777, 3),
('yyy', '950', 55, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(256) NOT NULL DEFAULT 'img/default.jpg',
  `categorie` varchar(5) NOT NULL DEFAULT 'menu',
  `soustype` varchar(50) NOT NULL,
  `prix` double(6,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `titre`, `description`, `photo`, `categorie`, `soustype`, `prix`, `date`) VALUES
(1, 'Cappucino', 'Test description', 'img/29042019_170445.jpg', 'shop', 'coffee', 1.00, '2019-03-29 13:57:54'),
(2, 'Donut', 'Test Description', 'img/29042019_170537.jpg', 'shop', 'dessert', 3.40, '2019-03-29 13:58:17'),
(3, 'Mojito Cake', 'test desc', 'img/30042019_95241.jpg', 'menu', 'dessert', 1.00, '2019-03-29 14:33:20'),
(4, 'Smoothie', 'Test description', 'img/29042019_170749.jpg', 'shop', 'drink', 1.20, '2019-03-30 14:45:43'),
(5, 'Lemon Cake', 'test desc', 'img/30042019_95425.jpg', 'menu', 'dessert', 2.50, '2019-03-30 16:11:00'),
(6, 'Coffee Crumble', 'description', 'img/01042019_234422.jpg', 'menu', 'coffee', 100.00, '2019-04-01 22:44:22'),
(9, 'Vanilla Latte', 'bnina', 'img/30042019_95748.jpg', 'menu', 'coffee', 1.50, '2019-04-14 12:32:04'),
(11, 'Strawberry with chocolate', 'bnina yesr', 'img/30042019_95945.jpg', 'menu', 'drink', 1.50, '2019-04-19 00:40:05'),
(13, 'Expresso', 'Test Description', 'img/29042019_170849.jpg', 'shop', 'coffee', 1.80, '2019-04-29 16:08:49'),
(14, 'Croissant', 'Test Description', 'img/29042019_171012.jpg', 'shop', 'dessert', 1.00, '2019-04-29 16:10:12'),
(15, 'Hot chocolate', 'Test Description', 'img/29042019_171139.jpg', 'shop', 'drink', 3.80, '2019-04-29 16:11:39'),
(16, 'Hot chocolate', 'Description', 'img/30042019_100031.jpg', 'menu', 'drink', 4.30, '2019-04-30 09:00:31'),
(17, 'TESTVALIDATESTV', 'HJGN', 'img/30042019_163657.jpeg', 'shop', 'dessert', 2.00, '2019-04-30 15:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `produitdiscount`
--

DROP TABLE IF EXISTS `produitdiscount`;
CREATE TABLE IF NOT EXISTS `produitdiscount` (
  `idproddiscount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`idproddiscount`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produitdiscount`
--

INSERT INTO `produitdiscount` (`idproddiscount`, `discount`) VALUES
(1, 40),
(14, 20);

-- --------------------------------------------------------

--
-- Table structure for table `produitnote`
--

DROP TABLE IF EXISTS `produitnote`;
CREATE TABLE IF NOT EXISTS `produitnote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idprodnote` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_note` (`idprodnote`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produitnote`
--

INSERT INTO `produitnote` (`id`, `idprodnote`, `comment`, `rating`) VALUES
(4, 1, 'jkjkbhbjhbjhbjh', 5),
(11, 13, '7aja heyla', 2),
(12, 13, 'islem  hates  ur coffee', 4),
(13, 1, 'VALIDATION', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idreservation` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone` varchar(8) NOT NULL,
  `message` text NOT NULL,
  `nbpers` int(11) NOT NULL,
  PRIMARY KEY (`idreservation`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `lastname`, `firstname`, `date`, `time`, `phone`, `message`, `nbpers`) VALUES
(1, 'test', 'test', '2019-04-03', '00:00:00', '1234', 'are', 2),
(2, 'med', 'kham', '2019-03-12', '01:30:00', '545454', 'ss', 2),
(3, 'mohamed', 'kham', '2019-03-11', '04:30:00', '1234', 'cc cv', 2),
(6, 'yosup', 'yosup', '2019-04-25', '00:30:00', '1234', 'hwgjhwcjhw', 2),
(7, 'zefzefzef', 'zefzefze', '2019-04-26', '00:30:00', '988888', 'no mes', 4),
(8, 'mbarki', 'mbarki', '2019-04-19', '23:30:00', '1234', 'm3alem shed blasa', 2),
(9, 'last test', 'last', '2019-04-30', '00:00:00', '12345', 'salew', 4),
(10, 'last', 'test', '2019-04-30', '01:00:00', '252525', 'test', 2),
(11, 'mME RYM', 'ALOUANE', '2019-04-30', '03:30:00', '1234', 'JE SERAIS PRESENT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

DROP TABLE IF EXISTS `star`;
CREATE TABLE IF NOT EXISTS `star` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `CleEtr` FOREIGN KEY (`numeroc`) REFERENCES `commande` (`numc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produitdiscount`
--
ALTER TABLE `produitdiscount`
  ADD CONSTRAINT `produitdiscount_ibfk_1` FOREIGN KEY (`idproddiscount`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
