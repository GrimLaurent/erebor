-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 23 Mars 2017 à 15:59
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ereborbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `IdActivite` int(11) NOT NULL,
  `NomActivite` varchar(50) NOT NULL,
  `Reglement` varchar(1000) NOT NULL,
  `Duree` int(50) NOT NULL,
  `Prix` int(5) NOT NULL,
  `Img_Activite` varchar(100) NOT NULL,
  `ImgActivite2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`IdActivite`, `NomActivite`, `Reglement`, `Duree`, `Prix`, `Img_Activite`, `ImgActivite2`) VALUES
(1, 'Jeu de golf', 'Jouer seul(e) ou à plusieur sur le terrain de golf d\'erebor , montagne mignature , village de hobbit , parcours en forme d\'anneau. Tout pour vous plongez dans l\'univers du Hobbit', 3, 15, 'golf.jpg', 'golf_2.jpg'),
(2, 'A la recherche de l\'anneau', 'Vous voulez trouver le précieux ? partez en équipe à la recherche dans un foret de l\'anneau qui pourra vous permettre de prendre le control du monde! Une aventure palpitante à jouer avec minimum 2 équipes de 3 personnes', 5, 45, 'foret.jpg', 'anneau.jpg'),
(3, 'Tir à l\'arc Elfique', 'Partez tirez à l\'arc sur des cible mobile ou mouvante . Dans un centre de tir proche de la foret afin d\'avoir un environement proche du monde des elfes', 2, 30, 'tir_a_larc.jpg', 'arc_2.jpg'),
(4, 'Course de poney', 'Initiation et ballade pour les enfants agés de 10ans minimum', 3, 20, 'course_de_poneys.jpg', 'ballade_poney.jpg'),
(5, 'Entrainement aux armes', 'Cour d\'escrime en plein air et adapté. Par 2, entrainement au maniement des armes lourdes (épées, sabres...),<br> et affrontement en duel, en toute sécurité bien évidemment. Présence d\'un professeur d\'escrime et d\'un forgeron<br> authentique pour les explications diverses concernant le façonnage des armes blanches.', 3, 20, 'epee.jpg', 'epee_2.jpg'),
(6, 'LAN sur console', '6 joueurs au maximum s\'affrontent manettes en mains dans un jeu vidéo sur la plat-forme PlayStation 4.<br>\r\nJeux disponibles : <br>\r\n(<i>LSDA</i>) La Terre du Milieu : L\'Ombre du Mordor<br>\r\nUncharted 4<br>\r\nGrand Theft Auto V<br>\r\nCall of Duty: Infinite Warfare<br>\r\nNeed for Speed<br>\r\nRise of the Tomb Raider<br>\r\nLego Le Hobbit<br>\r\nHitman<br><br>\r\n(Certain jeux nécessitent la surveillance d\'un adulte)<br>\r\nLa durée varie en fonction du nombre de joueurs ', 3, 7, 'Geek_2.jpg', 'Geek.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `IdAdmin` int(2) NOT NULL,
  `NomAdmin` varchar(100) NOT NULL,
  `MdpAdmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administration`
--

INSERT INTO `administration` (`IdAdmin`, `NomAdmin`, `MdpAdmin`) VALUES
(1, 'EreborAdm', 'MdpAdmErebor'),
(2, 'nicolaide', 'gwshop');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `IdChambre` int(2) NOT NULL,
  `NomChambre` varchar(100) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Type_Chambre` varchar(300) NOT NULL,
  `Capacite_Accueil` int(11) NOT NULL,
  `Salle_de_Bain` int(11) NOT NULL,
  `Type_de_lit` varchar(50) NOT NULL,
  `Lit` int(11) NOT NULL,
  `WC` int(11) NOT NULL,
  `Arrivee_chambre` int(11) NOT NULL,
  `Depart_chambre` int(11) NOT NULL,
  `Equipements_chambre` varchar(1000) NOT NULL,
  `Img_Chambre` varchar(20) NOT NULL,
  `Img_Chambre2` varchar(20) NOT NULL,
  `Img_Chambre3` varchar(20) NOT NULL,
  `Prix_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`IdChambre`, `NomChambre`, `Description`, `Type_Chambre`, `Capacite_Accueil`, `Salle_de_Bain`, `Type_de_lit`, `Lit`, `WC`, `Arrivee_chambre`, `Depart_chambre`, `Equipements_chambre`, `Img_Chambre`, `Img_Chambre2`, `Img_Chambre3`, `Prix_chambre`) VALUES
(1, 'La chambre elfe.', 'Chambre à theme elfique.', 'simple', 1, 1, 'simple', 1, 1, 11, 14, 'Internet  <br> \nInternet sans fil (wi-fi)	<br>\nTélévision haute définition	<br>\nCintres	<br>\nChauffage	<br>\nEspace de travail pour ordinateur portable \n', 'ChArgent.jpg', 'chambre_detail_2.jpg', 'chambre_detail_1.JPG', 65),
(2, 'La chambre hobbit', 'Chambre à thème du hobbit', 'double', 2, 1, 'double', 1, 1, 11, 14, 'Internet \r\nInternet sans fil (wi-fi)	\r\nTélévision haute définition	\r\nCintres	\r\nChauffage	\r\nDouble espace de travail pour ordinateur portable ', 'Hobbit_1.jpg', 'Hobbit_2.jpg', 'Hobbit_1.jpg', 75),
(3, 'La chambre du Mordor ', 'Le Mordor (« pays noir » en sindarin) est une région de la Terre du Milieu, univers de fiction créé par J. R. R. Tolkien. Il est surtout décrit dans Le Seigneur des anneaux et Le Silmarillion.\r\n\r\nSitué face au Gondor, c\'est le fief inhospitalier du Seigneur des Ténèbres Sauron, et son histoire et sa géographie lui sont étroitement liés. Dans le troisième tome du Seigneur des anneaux, Le Retour du roi, Frodon et Sam doivent traverser ses étendues arides pour accomplir leur mission : détruire l\'Anneau unique en le jetant dans les flammes de l\'Orodruin, volcan qui domine le nord-ouest du Mordor.', 'double', 2, 2, 'simple', 2, 2, 11, 14, 'Internet <br> \nInternet sans fil (wi-fi)	<br>\nTélévision haute définition	<br>\nCintres	<br>\nChauffage	<br>\nEspace de travail pour ordinateur portable \n', 'Mordor.jpg', 'Mordor.jpg', 'Mordor.jpg', 100),
(4, 'La chambre des Ents', 'Chambre à thème Entique ', 'simple', 1, 1, 'simple', 1, 1, 11, 14, 'Internet <br>\r\nInternet sans fil (wi-fi)<br>	\r\nTélévision haute définition	<br>\r\nCintres	<br>\r\nChauffage <br>	\r\nEspace de travail pour ordinateur <br> portable \r\n', 'ents.png', 'ents.png', 'ents.png', 70),
(5, 'La chambre du Gondor', 'Chambre sur le thème de Minas Tirith', 'double', 2, 1, 'double', 1, 1, 11, 14, 'Internet \r\nInternet sans fil (wi-fi)	\r\nTélévision haute définition	\r\nCintres	\r\nChauffage	\r\nEspace de travail pour ordinateur portable \r\n', 'Minas.jpg', 'Minas.jpg', 'Minas.jpg', 55),
(6, 'La chambre Erebor', 'Chambre sur le thème de la Montagne solitaire', 'simple', 1, 1, 'simple', 1, 1, 11, 14, 'Internet \r\nInternet sans fil (wi-fi)	\r\nTélévision haute définition	\r\nCintres	\r\nChauffage	\r\nEspace de travail pour ordinateur portable \r\n', 'Solitaire.jpg', 'Solitaire.jpg', 'Solitaire.jpg', 65),
(9, 'Début de la chambre', 'sdklfhdskjhfkjdshfkjdshkfjhdskjfhkjds', 'simple', 1, 1, 'simple', 1, 1, 13, 14, 'un string', '', '', '', 234);

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `IdLieu` int(2) NOT NULL,
  `NomLieu` varchar(20) NOT NULL,
  `ImgLieu` varchar(20) NOT NULL,
  `UrlLieu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lieu`
--

INSERT INTO `lieu` (`IdLieu`, `NomLieu`, `ImgLieu`, `UrlLieu`) VALUES
(0, 'Mémorial de Caen', 'memorial.jpg', 'http://www.memorial-caen.fr/');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `IdReservation` int(2) NOT NULL,
  `NomR` varchar(25) NOT NULL,
  `PrenomR` varchar(25) NOT NULL,
  `AdresseR` varchar(500) NOT NULL,
  `VilleR` varchar(500) NOT NULL,
  `CPR` varchar(5) NOT NULL,
  `MailR` varchar(100) NOT NULL,
  `TelR` varchar(10) NOT NULL,
  `DateRerservation` date NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `PrixTotal` int(11) NOT NULL,
  `IdChambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`IdReservation`, `NomR`, `PrenomR`, `AdresseR`, `VilleR`, `CPR`, `MailR`, `TelR`, `DateRerservation`, `DateDebut`, `DateFin`, `PrixTotal`, `IdChambre`) VALUES
(1, 'laide', 'nico', '22 rue', 'Mans', '72000', 'l.grim@gmail.com', '0', '2016-12-06', '2016-12-22', '2016-12-25', 22, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`IdActivite`);

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`IdChambre`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`IdLieu`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`IdReservation`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `IdActivite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `IdAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `IdChambre` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `IdReservation` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
