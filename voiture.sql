-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
-- PHP: 8.1
-- localhost
-- 24/10/2022


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- CREATE TABLE clients


CREATE TABLE `clients` (
  `idclient` smallint(5) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `codepostal` varchar(10) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `rue` varchar(80) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `telephone` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `clients` (`idclient`, `nom`, `prenom`, `codepostal`, `localite`, `rue`, `numero`, `telephone`, `email`) VALUES
(0, 'Martin ', 'Léo', '75001', 'Paris', 'Rue Marinoni', '0', '0695874514', 'Martin @gmail.com'),
(1, 'Bernard ', 'Gabriel', '75002', 'Paris', 'Avenue Émile-Deschanel', '0', '06958745114', 'Bernard @gmail.com'),
(2, 'Thomas ', 'Raphaël', '75003', 'Paris', 'Rue de Belgrade', '0', '06958745114', 'Thomas @gmail.com'),
(3, 'Petit ', 'Arthur', '75003', 'Paris', 'Avenue Anatole-France', '0', '06958745114', 'Petit @gmail.com'),
(4, 'Robert ', 'Louis', '75004', 'Paris', 'Avenue Charles-Risler', '0', '0695874514', 'Robert @gmail.com'),
(5, 'Richard ', 'Jules', '75007', 'Paris', 'Avenue du Général-Marguerite', '0', '06958745114', 'Richard @gmail.com'),
(6, 'Durand ', 'Louis', '75009', 'Paris', 'Boulevard des Frères-Voisin', '0', '06958745114', 'Durand @gmail.com'),
(7, 'Francois', 'Noé', '75015', 'Paris', 'Rue du Colonel-Pierre-Avia', '0', '06958745114', 'Francois@gmail.com'),
(8, 'Garcia', 'Enzo', '75008', 'Paris', 'Place Louis-Armand ', '0', '06958745114', 'Garcia@gmail.com');



-- CREATE TABLE locations


CREATE TABLE `locations` (
  `idlocation` smallint(5) NOT NULL,
  `idclient` smallint(5) DEFAULT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `daterentree` datetime NOT NULL,
  `assurance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `locations` (`idlocation`, `idclient`, `immatriculation`, `datedebut`, `datefin`, `daterentree`, `assurance`) VALUES
(0, 0, 'AA123AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 1),
(1, 1, 'AA124AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 2),
(2, 2, 'AA125AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 2),
(3, 3, 'AA126AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 3),
(4, 4, 'AA127AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 4),
(5, 5, 'AA128AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 5),
(6, 6, 'AA129AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 6),
(7, 7, 'AA130AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 7),
(8, NULL, 'AA131AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 8),
(9, NULL, 'AA132AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 9),
(10, NULL, 'AA133AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 10),
(11, NULL, 'AA134AA', '2022-10-22 23:57:57', '2022-10-22 23:57:57', '2022-10-22 23:57:57', 11);




-- Create Table voiture


CREATE TABLE `voiture` (
  `immatriculation` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `cylindree` smallint(6) NOT NULL,
  `dateachat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `voiture` (`immatriculation`, `marque`, `modele`, `cylindree`, `dateachat`) VALUES
('AA123AA', 'marque0', 'modele0', 0, '2022-10-05'),
('AA124AA', 'marque1', 'modele1', 1, '2022-10-10'),
('AA125AA', 'marque2', 'modele2', 2, '2022-10-02'),
('AA126AA', 'marque3', 'modele3', 3, '2022-10-28'),
('AA127AA', 'marque4', 'modele4', 4, '2022-09-14'),
('AA128AA', 'marque5', 'modele5', 5, '2022-09-15'),
('AA129AA', 'marque6', 'modele6', 6, '2022-10-02'),
('AA130AA', 'marque7', 'modele7', 7, '2022-10-28'),
('AA131AA', 'marque8', 'modele8', 8, '2022-09-14'),
('AA132AA', 'marque9', 'modele9', 9, '2022-09-15'),
('AA133AA', 'marque10', 'modele10', 10, '2022-10-02'),
('AA134AA', 'marque11', 'modele11', 11, '2022-10-28');



-- fiches d'information `clients`

ALTER TABLE `clients`
  ADD PRIMARY KEY (`idclient`);


-- fiches d'information `locations`

ALTER TABLE `locations`
  ADD PRIMARY KEY (`idlocation`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `immatriculation` (`immatriculation`);


ALTER TABLE `voiture`
  ADD PRIMARY KEY (`immatriculation`);


ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `clients` (`idclient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
