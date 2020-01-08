-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 jan. 2020 à 11:07
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `burnout_life`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `typeActivity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activities`
--

INSERT INTO `activities` (`id`, `typeActivity`) VALUES
(1, 'Tourisme'),
(2, 'Restaurant'),
(3, 'Activité');

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `typeActivity` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `localisation` text NOT NULL,
  `country` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `timetable` varchar(200) NOT NULL DEFAULT 'N.C.',
  `price` varchar(100) NOT NULL DEFAULT 'N.C.',
  `information` text NOT NULL,
  `date_entry` date NOT NULL,
  `note` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(100) NOT NULL DEFAULT 'photonc.png',
  `visibility` tinyint(4) NOT NULL DEFAULT '0',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`id`, `typeActivity`, `title`, `town`, `localisation`, `country`, `frequency`, `timetable`, `price`, `information`, `date_entry`, `note`, `photo`, `visibility`, `description`) VALUES
(1, 1, 'Kouri Bride', 'Okinawa', 'https://www.google.fr/maps/place/Chura+Terrace/@26.6781949,128.0128782,15.26z/data=!4m13!1m7!3m6!1s0x34f57062eeab5be7:0x35bb617286fdd1ef!2sPr%C3%A9fecture+d\'Okinawa,+Japon!3b1!8m2!3d26.1201911!4d127.7025012!3m4!1s0x0:0xebfe6841f93a720c!8m2!3d26.677958!4d128.0119926', 86, 3, 'N.C.', 'N.C.', 'bla bla', '2020-01-01', 4, 'article1.png', 1, 'Kouri Bridge est le plus grand pont de l’ile. Il se situe au Nord de l’ile principale d’Okinawa.\r\n                        Il est très difficile d’accès en bus. Si vous restez peu de temps à Okinawa, je vous déconseille\r\n                        d’y aller. Favorisé la visite de petite ile comme Zanami.');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `view` tinyint(4) NOT NULL DEFAULT '0',
  `vignette` varchar(50) NOT NULL DEFAULT 'vignetteNC.png',
  `flag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `country`, `view`, `vignette`, `flag`) VALUES
(1, 'Afghanistan', 0, 'vignetteNC.png', 'afghanistan.png'),
(2, 'Afrique du sud', 0, 'vignetteNC.png', 'afrique-sud.png'),
(3, 'Albanie', 0, 'vignetteNC.png', 'albanie.png'),
(4, 'Algérie', 0, 'vignetteNC.png', 'algerie.png'),
(5, 'Allemagne', 0, 'vignetteNC.png', 'allemagne.png'),
(6, 'Andorre', 0, 'vignetteNC.png', 'andorre.png'),
(7, 'Angola', 0, 'vignetteNC.png', 'angola.png'),
(8, 'Antigua & Barbuda', 0, 'vignetteNC.png', 'antigua-barbuda.png'),
(9, 'Arabie Saoudite', 0, 'vignetteNC.png', 'arabie-saoudite.png'),
(10, 'Argentine', 0, 'vignetteNC.png', 'argentine.png'),
(11, 'Arménie', 0, 'vignetteNC.png', 'armenie.png'),
(12, 'Australie', 0, 'vignetteNC.png', 'australie.png'),
(13, 'Autriche', 0, 'vignetteNC.png', 'autriche.png'),
(14, 'Azerbaïjan', 0, 'vignetteNC.png', 'azerbaijan.png'),
(15, 'Bahamas', 0, 'vignetteNC.png', 'bahamas.png'),
(16, 'Bangladesh', 0, 'vignetteNC.png', 'bangladesh.png'),
(17, 'Barbade', 0, 'vignetteNC.png', 'barbade.png'),
(18, 'Barhein', 0, 'vignetteNC.png', 'barhein.png'),
(19, 'Belgique', 0, 'vignetteNC.png', 'belgique.png'),
(20, 'Belize', 0, 'vignetteNC.png', 'belize.png'),
(21, 'Bénin', 0, 'vignetteNC.png', 'benin.png'),
(22, 'Biélorussie', 0, 'vignetteNC.png', 'bielorussie.png'),
(23, 'Birmanie', 0, 'vignetteNC.png', 'birmanie.png'),
(24, 'Bolivie', 0, 'vignetteNC.png', 'bolivie.png'),
(25, 'Bosnie-Herzégovine', 0, 'vignetteNC.png', 'bosnie-herzegovine.png'),
(26, 'Botswana', 0, 'vignetteNC.png', 'botswana.png'),
(27, 'Bouthan', 0, 'vignetteNC.png', 'bouthan.png'),
(28, 'Brésil', 0, 'vignetteNC.png', 'bresil.png'),
(29, 'Bruneï', 0, 'vignetteNC.png', 'brunei.png'),
(30, 'Bulgarie', 0, 'vignetteNC.png', 'bulgarie.png'),
(31, 'Burkina-Faso', 0, 'vignetteNC.png', 'burkina-faso.png'),
(32, 'Burundi', 0, 'vignetteNC.png', 'burundi.png'),
(33, 'Cambodge', 0, 'vignetteNC.png', 'cambodge.png'),
(34, 'Cameroun', 0, 'vignetteNC.png', 'cameroon.png'),
(35, 'Canada', 1, 'vignette_35.png', 'canada.png'),
(36, 'Cap Vert', 0, 'vignetteNC.png', 'cap-vert.png'),
(37, 'République centrafricaine', 0, 'vignetteNC.png', 'centrafricaine.png'),
(38, 'Chili', 0, 'vignetteNC.png', 'chili.png'),
(39, 'Chine', 0, 'vignetteNC.png', 'chine.png'),
(40, 'Chypres', 0, 'vignetteNC.png', 'chypres.png'),
(41, 'Colombie', 0, 'vignetteNC.png', 'colombie.png'),
(42, 'Comores', 0, 'vignetteNC.png', 'comores.png'),
(43, 'Congo', 0, 'vignetteNC.png', 'congo.png'),
(44, 'Corée du nord', 0, 'vignetteNC.png', 'coree-nord.png'),
(45, 'Corée du sud', 1, 'vignette_45.png', 'coree-sud.png'),
(46, 'Costa Rica', 0, 'vignetteNC.png', 'costa-rica.png'),
(47, 'Côte d\'ivoire', 0, 'vignetteNC.png', 'cote-ivoire.png'),
(48, 'Croatie', 0, 'vignetteNC.png', 'croatie.png'),
(49, 'Cuba', 0, 'vignetteNC.png', 'cuba.png'),
(50, 'Danemark', 0, 'vignetteNC.png', 'danemark.png'),
(51, 'Djibouti', 0, 'vignetteNC.png', 'djibouti.png'),
(52, 'Dominique', 0, 'vignetteNC.png', 'dominique.png'),
(53, 'Egypte', 0, 'vignetteNC.png', 'egypte.png'),
(54, 'Emirats Arabes Unis', 0, 'vignetteNC.png', 'emirats-arabes-unis.png'),
(55, 'Equateur', 0, 'vignetteNC.png', 'equateur.png'),
(56, 'Erythrée', 0, 'vignetteNC.png', 'erythree.png'),
(57, 'Espagne', 0, 'vignetteNC.png', 'espagne.png'),
(58, 'Estonie', 0, 'vignetteNC.png', 'estonie.png'),
(59, 'Ethiopie', 0, 'vignetteNC.png', 'ethiopie.png'),
(60, 'Fiji', 0, 'vignetteNC.png', 'fiji.png'),
(61, 'Finlande', 0, 'vignetteNC.png', 'finland.png'),
(62, 'France', 1, 'vignette_62.png', 'france.png'),
(63, 'Gabon', 0, 'vignetteNC.png', 'gabon.png'),
(64, 'Gambie', 0, 'vignetteNC.png', 'gambie.png'),
(65, 'Georgie', 0, 'vignetteNC.png', 'georgie.png'),
(66, 'Ghana', 0, 'vignetteNC.png', 'ghana.png'),
(67, 'Grèce', 0, 'vignetteNC.png', 'grece.png'),
(68, 'Grenade', 0, 'vignetteNC.png', 'grenade.png'),
(69, 'Guatemala', 0, 'vignetteNC.png', 'guatemala.png'),
(70, 'Guinée Bissau', 0, 'vignetteNC.png', 'guinee-bissau.png'),
(71, 'Guinée équatoriale', 0, 'vignetteNC.png', 'guinee-equatoriale.png'),
(72, 'Guyane', 0, 'vignetteNC.png', 'guyane.png'),
(73, 'Haïti', 0, 'vignetteNC.png', 'haiti.png'),
(74, 'Honduras', 0, 'vignetteNC.png', 'honduras.png'),
(75, 'Hongrie', 0, 'vignetteNC.png', 'hungrie.png'),
(76, 'Île cook', 0, 'vignetteNC.png', 'ile-cook.png'),
(77, 'Inde', 0, 'vignetteNC.png', 'inde.png'),
(78, 'Indonésie', 0, 'vignetteNC.png', 'indonesie.png'),
(79, 'Irak', 0, 'vignetteNC.png', 'irak.png'),
(80, 'Iran', 0, 'vignetteNC.png', 'iran.png'),
(81, 'Irlande', 0, 'vignetteNC.png', 'irlande.png'),
(82, 'Islande', 0, 'vignetteNC.png', 'islande.png'),
(83, 'Israël', 0, 'vignetteNC.png', 'israel.png'),
(84, 'Italie', 0, 'vignetteNC.png', 'italie.png'),
(85, 'Jamaïque', 0, 'vignetteNC.png', 'jamaique.png'),
(86, 'Japon', 1, 'vignette_86.png', 'japon.png'),
(87, 'Jordanie', 0, 'vignetteNC.png', 'jordanie.png'),
(88, 'Kasakhstan', 0, 'vignetteNC.png', 'kasakhstan.png'),
(89, 'Kénya', 0, 'vignetteNC.png', 'kenya.png'),
(90, 'Kirghzisitan', 0, 'vignetteNC.png', 'kirghizsitan.png'),
(91, 'Kiribati', 0, 'vignetteNC.png', 'kiribati.png'),
(92, 'Kosovo', 0, 'vignetteNC.png', 'kosovo.png'),
(93, 'Koweït', 0, 'vignetteNC.png', 'koweit.png'),
(94, 'Laos', 0, 'vignetteNC.png', 'laos.png'),
(95, 'Lésoto', 0, 'vignetteNC.png', 'lesoto.png'),
(96, 'Lettonie', 0, 'vignetteNC.png', 'lettonie.png'),
(97, 'Liban', 0, 'vignetteNC.png', 'liban.Png'),
(98, 'Libéria', 0, 'vignetteNC.png', 'liberia.png'),
(99, 'Libye', 0, 'vignetteNC.png', 'libye.png'),
(100, 'Liechtenstein', 0, 'vignetteNC.png', 'liechtenstein.png'),
(101, 'Lithuanie', 0, 'vignetteNC.png', 'lithuanie.png'),
(102, 'Luxembourg', 0, 'vignetteNC.png', 'luxembourg.png'),
(103, 'Macédoine du nord', 0, 'vignetteNC.png', 'macedoine-nord.png'),
(104, 'Madagascar', 0, 'vignetteNC.png', 'madagascar.png'),
(106, 'Malaisie', 0, 'vignetteNC.png', 'malaisie.png'),
(107, 'Malawie', 0, 'vignetteNC.png', 'malawi.png'),
(108, 'Maldives', 0, 'vignetteNC.png', 'maldives.png'),
(109, 'Mali', 0, 'vignetteNC.png', 'mali.png'),
(110, 'Malte', 0, 'vignetteNC.png', 'malte.png'),
(111, 'Maroc', 0, 'vignetteNC.png', 'maroc.png'),
(112, 'Marshall', 0, 'vignetteNC.png', 'marshall.png'),
(113, 'Maurice', 0, 'vignetteNC.png', 'maurice.png'),
(114, 'Mauritanie', 0, 'vignetteNC.png', 'mauritanie.png'),
(115, 'Méxique', 0, 'vignetteNC.png', 'mexique.png'),
(116, 'Micronésie', 0, 'vignetteNC.png', 'micronesie.png'),
(117, 'Moldavie', 0, 'vignetteNC.png', 'moldovie.png'),
(118, 'Monaco', 0, 'vignetteNC.png', 'monaco.png'),
(119, 'Mongolie', 0, 'vignetteNC.png', 'mongolie.png'),
(120, 'Monténégro', 0, 'vignetteNC.png', 'montenegro.png'),
(121, 'Mozambique', 0, 'vignetteNC.png', 'mozambique.png'),
(122, 'Namibie', 0, 'vignetteNC.png', 'namibie.png'),
(123, 'Nauru', 0, 'vignetteNC.png', 'nauru.png'),
(124, 'Népal', 0, 'vignetteNC.png', 'nepal.png'),
(125, 'Nicaragua', 0, 'vignetteNC.png', 'nicaragua.png'),
(126, 'Niger', 0, 'vignetteNC.png', 'niger.png'),
(127, 'Nigéria', 0, 'vignetteNC.png', 'nigeria.png'),
(128, 'Niue', 0, 'vignetteNC.png', 'niue.png'),
(129, 'Norvège', 0, 'vignetteNC.png', 'norvege.png'),
(130, 'Nouvelle Zélande', 0, 'vignetteNC.png', 'nouvelle-zelande.png'),
(131, 'Oman', 0, 'vignetteNC.png', 'oman.png'),
(132, 'Ouganda', 0, 'vignetteNC.png', 'ouganda.Png'),
(133, 'Ouzbékistan', 0, 'vignetteNC.png', 'ouzbekistan.png'),
(134, 'Pakistan', 0, 'vignetteNC.png', 'pakistan.png'),
(135, 'Palaos', 0, 'vignetteNC.png', 'palaos.png'),
(136, 'Palestine', 0, 'vignetteNC.png', 'palestine.png'),
(137, 'Panama', 0, 'vignetteNC.png', 'panama.png'),
(138, 'Papouasie', 0, 'vignetteNC.png', 'papouasie.png'),
(139, 'Paraguay', 0, 'vignetteNC.png', 'paraguay.png'),
(140, 'Pays Bas', 0, 'vignetteNC.png', 'pays-bas.png'),
(141, 'Pérou', 0, 'vignetteNC.png', 'peru.png'),
(142, 'Philipines', 0, 'vignetteNC.png', 'philipines.png'),
(143, 'Pologne', 0, 'vignetteNC.png', 'pologne.png'),
(144, 'Portugal', 0, 'vignetteNC.png', 'portugal.png'),
(145, 'Quatar', 0, 'vignetteNC.png', 'qatar.png'),
(146, 'République du Congo', 0, 'vignetteNC.png', 'republique-congo.png'),
(147, 'République dominicaine', 0, 'vignetteNC.png', 'republique-dominicaine.png'),
(148, 'Roumanie', 0, 'vignetteNC.png', 'roumanie.png'),
(149, 'Royaume Uni', 0, 'vignetteNC.png', 'royaume-uni.png'),
(150, 'Russie', 0, 'vignetteNC.png', 'russie.png'),
(151, 'Rwanda', 0, 'vignetteNC.png', 'rwanda.png'),
(152, 'St Christophe & Nieves', 0, 'vignetteNC.png', 'saint-christophe-nieves.png'),
(153, 'Sainte Lucie', 0, 'vignetteNC.png', 'sainte-lucie.png'),
(154, 'Saint Marin', 0, 'vignetteNC.png', 'saint-marin.png'),
(155, 'St Vincent les Grenadines', 0, 'vignetteNC.png', 'saint-vincent-les-grenadines.png'),
(156, 'Salomon', 0, 'vignetteNC.png', 'salomon.png'),
(157, 'Salvador', 0, 'vignetteNC.png', 'salvador.png'),
(158, 'Samoa', 0, 'vignetteNC.png', 'samoa.png'),
(159, 'Sao Tome Principe', 0, 'vignetteNC.png', 'sao-tome-principe.png'),
(160, 'Sénégal', 0, 'vignetteNC.png', 'senegal.png'),
(161, 'Serbie', 0, 'vignetteNC.png', 'serbie.png'),
(162, 'Seychelles', 0, 'vignetteNC.png', 'seychelles.png'),
(163, 'Sierra Leone', 0, 'vignetteNC.png', 'sierra-leone.png'),
(164, 'Singapour', 0, 'vignetteNC.png', 'singapour.png'),
(165, 'Slovaquie', 0, 'vignetteNC.png', 'slovaquie.png'),
(166, 'Slovénie', 0, 'vignetteNC.png', 'slovenie.png'),
(167, 'Somalie', 0, 'vignetteNC.png', 'somalie.png'),
(168, 'Soudan', 0, 'vignetteNC.png', 'soudan.png'),
(169, 'Soudan du sud', 0, 'vignetteNC.png', 'soudan-sud.png'),
(170, 'Sri-Lanka', 0, 'vignetteNC.png', 'sri-lanka.png'),
(171, 'Suède', 0, 'vignetteNC.png', 'suede.png'),
(172, 'Suisse', 0, 'vignetteNC.png', 'suisse.png'),
(173, 'Suriname', 0, 'vignetteNC.png', 'suriname.png'),
(174, 'Swaziland', 0, 'vignetteNC.png', 'swaziland.png'),
(175, 'Syrie', 0, 'vignetteNC.png', 'syrie.png'),
(176, 'Tadjikistan', 0, 'vignetteNC.png', 'tadjikistan.png'),
(177, 'Taïwan', 1, 'vignette_177.png', 'taiwan.png'),
(178, 'Tanzanie', 0, 'vignetteNC.png', 'tanzanie.png'),
(179, 'Tchad', 0, 'vignetteNC.png', 'tchad.png'),
(180, 'Tchéquie', 0, 'vignetteNC.png', 'tchequie.png'),
(181, 'Thaïlande', 0, 'vignetteNC.png', 'thailand.png'),
(182, 'Timor', 0, 'vignetteNC.png', 'timor.png'),
(183, 'Togo', 0, 'vignetteNC.png', 'togo.png'),
(184, 'Tonga', 0, 'vignetteNC.png', 'tonga.png'),
(185, 'Trnitée Tobago', 0, 'vignetteNC.png', 'trinitee-tobago.png'),
(186, 'Tunisie', 0, 'vignetteNC.png', 'tunisie.png'),
(187, 'Turkménistan', 0, 'vignetteNC.png', 'turkmenistan.png'),
(188, 'Turquie', 0, 'vignette_188.png', 'turquie.png'),
(189, 'Tuvalu', 0, 'vignetteNC.png', 'tuvalu.png'),
(190, 'Ukraine', 0, 'vignetteNC.png', 'ukraine.png'),
(191, 'Uruguay', 0, 'vignetteNC.png', 'uruguay.png'),
(192, 'U.S.A.', 0, 'vignetteNC.png', 'usa.png'),
(193, 'Vanatu.png', 0, 'vignetteNC.png', 'vanatu.png'),
(194, 'Vatican', 0, 'vignetteNC.png', 'vatican.png'),
(195, 'Vénézuela', 0, 'vignetteNC.png', 'venezuela.png'),
(196, 'Vietnam', 0, 'vignetteNC.png', 'vietnam.png'),
(197, 'Yémen', 0, 'vignetteNC.png', 'yemen.png'),
(198, 'Zambie', 0, 'vignetteNC.png', 'zambie.png'),
(199, 'Zimbabwe', 0, 'vignetteNC.png', 'zimbabwe.png');

-- --------------------------------------------------------

--
-- Structure de la table `frequencies`
--

CREATE TABLE `frequencies` (
  `id` int(11) NOT NULL,
  `frequency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `frequencies`
--

INSERT INTO `frequencies` (`id`, `frequency`) VALUES
(1, 'Immersion'),
(2, 'Traditionnelle'),
(3, 'Quotidien'),
(4, 'Tourisme');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `frequencies`
--
ALTER TABLE `frequencies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT pour la table `frequencies`
--
ALTER TABLE `frequencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
