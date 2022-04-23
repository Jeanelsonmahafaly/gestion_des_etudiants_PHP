-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 18 avr. 2021 à 16:32
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etude`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  ` date_naissance` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, ` date_naissance`, `email`, `password`) VALUES
(1, 'Olivier', 'rakoto', '2021-02-17', 'rakotozafy@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `Cod_mat` char(6) NOT NULL,
  `Num_Module` int(11) NOT NULL,
  `Nom_mat` varchar(20) NOT NULL,
  `Coef_mat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`Cod_mat`, `Num_Module`, `Nom_mat`, `Coef_mat`) VALUES
('001', 2, 'Anglais', 2),
('002', 5, 'PHP', 6),
('003', 4, 'python', 5),
('004', 3, 'Réseaux', 7);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `Num_Module` int(11) NOT NULL,
  `Nom_Module` varchar(20) NOT NULL,
  `Nb_Heures` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`Num_Module`, `Nom_Module`, `Nb_Heures`) VALUES
(1, 'Langue', '3'),
(3, 'POO', '4'),
(4, 'Lanangage', '5'),
(5, 'Mathematique', '6');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `Matricule` int(11) NOT NULL,
  `Cod_mat` char(6) NOT NULL,
  `Note_journalier` int(10) DEFAULT NULL,
  `Note_controle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`Matricule`, `Cod_mat`, `Note_journalier`, `Note_controle`) VALUES
(15, 'Cod_ma', 5, 7),
(15, '6', 14, 14),
(15, '6', 14, 14),
(19, '12', 19, 19),
(4, '2', 12, 12),
(15, '15', 15, 15),
(15, '5', 15, 15),
(15, '5', 12, 13),
(45, '6', 12, 12),
(1, '001', 1, 1),
(54, '006', 7, 6),
(54, '006', 7, 6),
(54, '006', 7, 6),
(1, '008', 12, 11),
(15, '006', 13, 11),
(1, '010', 9, 14),
(1, '013', 11, 10),
(12, '005', 11, 11),
(1, '001', 9, 9),
(2001, '003', 2, 5),
(1222, '003', 7, 9),
(3826, '001', 5, 4),
(3826, '0003', 12, 8),
(3826, '002', 11, 7),
(3826, '003', 10, 10),
(3826, '004', 8, 13),
(3834, '001', 10, 11),
(3834, '002', 14, 10),
(3834, '003', 14, 11),
(3834, '004', 13, 11),
(3839, '001', 12, 15),
(3839, '002', 12, 13),
(3839, '003', 12, 12),
(3839, '004', 12, 10),
(3838, '001', 10, 11),
(3838, '002', 11, 13),
(3838, '003', 12, 10),
(3838, '004', 15, 10),
(3840, '001', 12, 10),
(3840, '002', 14, 15),
(3840, '003', 6, 7),
(3840, '004', 9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `Matricule` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Date_naiss` date NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Niveau` varchar(20) NOT NULL,
  `Mention` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`Matricule`, `Nom`, `Prenom`, `Date_naiss`, `Adresse`, `Niveau`, `Mention`) VALUES
(2, 'Andriatina', 'Hajaniaina', '2021-03-02', 'Soanieran', 'L2', 'Informatique'),
(3, 'andriatina', 'Fenomanana', '2021-03-09', 'Andianatenaina', 'L2', 'Informatique'),
(110, 'herinjatovo', 'Faly', '2021-03-24', 'Soanierana', 'L1', 'Informatique'),
(3826, 'Andrinirina', 'Francois', '2021-03-23', 'Ambodirano', 'L2', 'Informatique'),
(3834, 'Tanteliniaina', 'Jean', '2021-03-23', 'R+', 'L2', 'Informatique'),
(3838, 'Nomena', 'Andrinirina', '2003-02-24', 'Ambohibory', 'L2', 'informatique'),
(3839, 'hery', 'OVLIN', '2021-03-25', 'Andrainjato', 'L2', 'Informatique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`Cod_mat`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`Num_Module`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD KEY `Matricule` (`Matricule`),
  ADD KEY `Cod_mat` (`Cod_mat`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
