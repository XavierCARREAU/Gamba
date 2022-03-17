-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2021 at 06:44 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamba`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualites`
--

CREATE TABLE `actualites` (
  `id_actu` int(11) NOT NULL,
  `nom_actu` varchar(50) NOT NULL,
  `dec_actu` varchar(255) NOT NULL,
  `content_actu` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actualites`
--

INSERT INTO `actualites` (`id_actu`, `nom_actu`, `dec_actu`, `content_actu`) VALUES
(1, 'New product', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Nouveau mode de livraison', 'Consectetur adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Connaissez-vous Yuka ?', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `actu_etiquette`
--

CREATE TABLE `actu_etiquette` (
  `id_actu` int(11) NOT NULL,
  `id_etiquette` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actu_etiquette`
--

INSERT INTO `actu_etiquette` (`id_actu`, `id_etiquette`) VALUES
(1, 1),
(2, 2),
(2, 3),
(1, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(50) NOT NULL,
  `desc_cat` text NOT NULL,
  `text_cat` longtext NOT NULL,
  `id_cat_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`, `desc_cat`, `text_cat`, `id_cat_cat`) VALUES
(1, 'soupes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL),
(2, 'barres céréales', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etiquettes`
--

CREATE TABLE `etiquettes` (
  `id_etiquette` int(11) NOT NULL,
  `nom_etiquette` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etiquettes`
--

INSERT INTO `etiquettes` (`id_etiquette`, `nom_etiquette`) VALUES
(1, 'produit'),
(2, 'service'),
(3, 'livraison'),
(4, 'infos');

-- --------------------------------------------------------

--
-- Table structure for table `nutriments`
--

CREATE TABLE `nutriments` (
  `id_nutr` int(11) NOT NULL,
  `nom_nutr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutriments`
--

INSERT INTO `nutriments` (`id_nutr`, `nom_nutr`) VALUES
(1, 'Très peu calorique'),
(2, 'Pouvoir antioxydant'),
(3, 'Favorise la satiété'),
(4, 'Riche en eau'),
(5, 'Source de fibres alimentaires douces'),
(6, 'Fait voyager dans l\'espace');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `desc_produit` text NOT NULL,
  `sous_titre_produit` varchar(50) NOT NULL,
  `id_cat_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `desc_produit`, `sous_titre_produit`, `id_cat_produit`) VALUES
(1, 'Cabbage', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Organic cabbage soup mix 500g', 1),
(2, 'caRrots', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Organic Carrots soup mix 250g', 1),
(3, 'Corn', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Organic corn soup mix 150g', 1),
(4, 'kohlrabi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Organic soup mix 100g', 1),
(5, 'Nouveau produit', '', '', NULL),
(6, 'Nouveau produit', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produit_nutriment`
--

CREATE TABLE `produit_nutriment` (
  `id_nutr` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit_nutriment`
--

INSERT INTO `produit_nutriment` (`id_nutr`, `id_prod`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `login_user` varchar(50) NOT NULL,
  `mdp_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `login_user`, `mdp_user`) VALUES
(1, 'Administrateur', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_actu`);

--
-- Indexes for table `actu_etiquette`
--
ALTER TABLE `actu_etiquette`
  ADD PRIMARY KEY (`id_actu`,`id_etiquette`),
  ADD KEY `id_etiquette` (`id_etiquette`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_cat_cat` (`id_cat_cat`);

--
-- Indexes for table `etiquettes`
--
ALTER TABLE `etiquettes`
  ADD PRIMARY KEY (`id_etiquette`);

--
-- Indexes for table `nutriments`
--
ALTER TABLE `nutriments`
  ADD PRIMARY KEY (`id_nutr`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_cat_produit` (`id_cat_produit`);

--
-- Indexes for table `produit_nutriment`
--
ALTER TABLE `produit_nutriment`
  ADD PRIMARY KEY (`id_nutr`,`id_prod`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_actu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `etiquettes`
--
ALTER TABLE `etiquettes`
  MODIFY `id_etiquette` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nutriments`
--
ALTER TABLE `nutriments`
  MODIFY `id_nutr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actu_etiquette`
--
ALTER TABLE `actu_etiquette`
  ADD CONSTRAINT `actu_etiquette_ibfk_1` FOREIGN KEY (`id_actu`) REFERENCES `actualites` (`id_actu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actu_etiquette_ibfk_2` FOREIGN KEY (`id_etiquette`) REFERENCES `etiquettes` (`id_etiquette`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_cat_cat`) REFERENCES `categorie` (`id_cat`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`id_cat_produit`) REFERENCES `categorie` (`id_cat`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `produit_nutriment`
--
ALTER TABLE `produit_nutriment`
  ADD CONSTRAINT `produit_nutriment_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produits` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produit_nutriment_ibfk_2` FOREIGN KEY (`id_nutr`) REFERENCES `nutriments` (`id_nutr`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
