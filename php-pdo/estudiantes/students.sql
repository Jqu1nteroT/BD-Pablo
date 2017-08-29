-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- GÃƒÂ©nÃƒÂ©rÃƒÂ© le :  Lun 10 Juillet 2017 Ãƒ  10:10
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnÃƒÂ©es :  `becode`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE 'students' (
  'idStudent' tinyint(3) UNSIGNED NOT NULL,
  'nom' varchar(20) NOT NULL,
  'prenom' varchar(20) NOT NULL,
  'datenaissance' date NOT NULL,
  'genre' varchar(10) NOT NULL,
  'school' tinyint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`idStudent`, `prenom`, `nom`, `datenaissance`, `genre`, `school`) VALUES
(1, 'Molly', 'Ere', '1990-11-17', 'F', 2),
(2, 'Aude', 'Gavel', '1991-08-28', 'F', 2),
(3, 'Harris', 'Cover', '1977-09-05', 'M', 2),
(4, 'Marion', 'Nett', '1984-05-29', 'F', 2),
(5, 'Paul', 'Ochon', '1994-10-09', 'M', 2),
(6, 'Sam', 'Laybrise', '1985-07-30', 'M', 2),
(7, 'Eddy', 'Sion', '1993-10-18', 'M', 2),
(8, 'Harry', 'Beau', '1992-03-01', 'M', 2),
(9, 'Sasha', 'Touille', '1978-05-16', 'M', 2),
(10, 'Alain', 'Terrieur', '1988-11-22', 'M', 2),
(11, 'Guy', 'Tarr', '1972-01-27', 'M', 2),
(12, 'ThÃ©o', 'Door', '1984-06-24', 'M', 2),
(13, 'Jacques', 'Selayr', '2017-04-24', 'M', 2),
(14, 'Emma', 'Karena', '1982-03-30', 'F', 2),
(15, 'Yves', 'EgÃ©e', '1989-05-31', 'M', 2),
(16, 'Pauline', 'Tramp', '1980-01-03', 'F', 1),
(17, 'Emma', 'CinÃ©', '1981-08-25', 'F', 1),
(18, 'Jean', 'Daydui', '1996-05-09', 'M', 1),
(19, 'Serge', 'Jean', '1989-07-21', 'M', 1),
(20, 'Jack', 'Addy', '1993-04-07', 'M', 1),
(21, 'karl', 'Age', '1991-01-25', 'M', 1),
(22, 'Alain', 'Fini', '1993-10-03', 'M', 1),
(23, 'Alexis', 'Lophone', '1960-11-29', 'M', 1),
(24, 'Rick', 'Hochet', '1978-12-28', 'M', 1),
(25, 'Guy', 'Liguili', '1996-03-18', 'M', 1),
(26, 'Eva', 'Nouissement', '1980-08-23', 'F', 1),
(27, 'Noah', 'Qui', '1978-06-20', 'M', 2),
(28, 'Jean', 'Bombeur', '1989-03-10', 'M', 2),
(29, 'Bob', 'Indefil', '1990-11-09', 'M', 2),
(30, 'Vincent', 'Time', '1995-01-26', 'M', 2);

--
-- Index pour les tables exportÃƒÂ©es
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idStudent`);

--
-- AUTO_INCREMENT pour les tables exportÃƒÂ©es
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `idStudent` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
