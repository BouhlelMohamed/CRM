-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2020 at 11:50 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `hour`, `name`, `company`, `address`, `description`, `phone_number`, `email`) VALUES
(1, '2020-01-22', '00:00:00', 'Bouhlel Mohamed', 'SAS COULOMMIERS', '91 Rue de la mairie 77169, Chauffry', 'RDV pour la vente de la maison à Boissy', '078020305', 'mohamed.bouhleel@gmail.com'),
(10, '2020-01-17', '10:00:00', 'Bejean Marine', 'Renault', 'Marseille', 'Achat des voitures de fonction.', '', 'marine.renault@gmail.com'),
(11, '2020-01-22', '10:00:00', 'Bouhlel Mohamed', 'SNCF', 'Coulommiers', 'Entretien', '07.81.40.33.77', 'mohamed.bouhleel@gmail.com'),
(12, '2020-01-25', '10:00:00', 'Bejean Marine', 'Renault', 'Marseille', 'Achat d\'une voiture', '', 'marine.renault@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `turnover` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT '0',
  `state` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `turnover`, `address`, `phone_number`, `email`, `sector`, `state`, `created_at`) VALUES
(9, 'Leblanc Stephanie', 'Synergie', '18000000', 'Chatres', '0108700890', 'stephanie.synergie@info.com', '3', 2, '2020-01-23 20:22:00'),
(10, 'Parmanum Jennifer', 'SNCF', '50058400', 'Paris', '0150894500', 'info.jennifer@sncf.fr', '1', 1, '2020-01-23 20:23:19'),
(11, 'Dupont Emmanuel', 'HP', '6095252010', 'Lyon', '0950954815', 'info.emmanuel@hp.com', '2', 3, '2020-01-23 20:24:20'),
(12, 'Bejean Marine', 'Renault', '15018588', 'Marseille', '', 'marine.renault@gmail.com', '0', 0, '2020-01-23 20:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `size` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `type`, `date`) VALUES
(34, 'file_download_php.zip', 1032, 'application/zip', '2020-01-23 17:06:09'),
(35, 'PNG_transparency_demonstration_1.png', 383589, 'image/png', '2020-01-23 17:06:14'),
(36, 'foo.txt', 6, 'text/plain', '2020-01-23 17:06:20'),
(37, 'Cours_php.pdf', 765055, 'application/pdf', '2020-01-23 17:06:28'),
(38, 'foo.txt', 6, 'text/plain', '2020-01-24 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `todo_list`
--

CREATE TABLE `todo_list` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo_list`
--

INSERT INTO `todo_list` (`id`, `content`, `created_at`, `state`) VALUES
(63, 'Faire le bilan annuel 2019', '2020-01-22 18:31:58', 1),
(64, 'Envoyer devis à Mme DURANT', '2020-01-22 18:32:24', 0),
(65, 'Finir le dossier de vente société HpStart', '2020-01-22 18:34:55', 0),
(66, 'Chercher des nouveaux prospects', '2020-01-22 18:35:19', 0),
(67, 'Mail de bonne année à l\'ensemble des contacts', '2020-01-22 18:35:48', 1),
(68, 'Passer commande fourniture de bureau', '2020-01-22 18:38:11', 0),
(69, 'Préparer la réunion avec Stéphanie', '2020-01-22 18:39:36', 0),
(70, 'Entretien', '2020-01-24 09:03:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo_list`
--
ALTER TABLE `todo_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `todo_list`
--
ALTER TABLE `todo_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
