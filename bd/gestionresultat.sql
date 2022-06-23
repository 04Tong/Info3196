-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 07 juin 2022 à 05:59
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionresultat`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `anneescolaire`
--

CREATE TABLE `anneescolaire` (
  `id` int(20) NOT NULL,
  `annee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `libelle`) VALUES
(1, 'INFORMATIQUE'),
(2, 'MATHEMATIQUES'),
(3, 'PHYSIQUE'),
(4, 'BIOSCIENCES'),
(5, 'CHIMIE'),
(6, 'GEOSCIENCES'),
(7, 'STU'),
(9, 'bla');

-- --------------------------------------------------------

--
-- Structure de la table `destinataire`
--

CREATE TABLE `destinataire` (
  `id` int(20) NOT NULL,
  `grade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` varchar(11) NOT NULL,
  `matiere` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `matiere`) VALUES
('11', 'INFO3036'),
('18', 'INFO3176');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `id_departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `libelle`, `id_departement`) VALUES
(1, 'INFO L1', 1),
(3, 'INFO L2', 1),
(4, 'INFO L3', 1),
(5, 'INFO M1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`username`, `password`, `matricule`) VALUES
('aba essi', '$2y$10$6bWmXICBlNN1.T5bWMRw/eXiBckSjb1RrPhUWLI6t.lyf0K5dbFsy', '12'),
('adorka', '$2y$10$tuUn/NRNtvsoHWtQ1g/g6uEiTTDx//i9MbrkbO8i/OHTlGV918BQi', '15'),
('adorka', '$2y$10$VolU/IyOF1Jy044WUoNCZugyGYfs88BuInVPSVoh9T0m9W.vyYykG', '14'),
('ba', '$2y$10$YZB84jmeicIuTpcfAeJjt.HzxTtBdke9TwyY0zg9QIXMZ.aibizui', '16'),
('el maro', '$2y$10$3PLEGyTLsxdJWXpw7V/WSunBZ.r7I7H/e18Byi62TPy6TH2dNA5fe', '30'),
('el maro', '$2y$10$61LuubBU7lV6sXIo/GelFeIxddanl7Cqbf83EMS7.6CTz2ObONEiW', '25'),
('el maro', '$2y$10$6iqjX1dVna6VG58enVQM0eRSCsJbDphl8X2x19j65nEuAQfiUMwWK', '34'),
('el maro', '$2y$10$dxVMbTsR7Wwmf5Ay5XOsA.RWpygXU6aSGdI4mB4RTJPp36Yy0CVry', '21'),
('el maro', '$2y$10$eYwzBMVRloPnWXpRWHE4kOaC0/97/PP2/N6ImdBe0prt9oFdix7mW', '27'),
('el maro', '$2y$10$EZTZwdSPMYN8uc4S5XL6ne/oMfPVthdeBlXFWGlUeQ2AkgVquDQyC', '32'),
('el maro', '$2y$10$GT9UbG8zlrSbpsTo4k2kp.2yF/7GAohWMYYWdnU8gzntYXB6bsOSe', '24'),
('el maro', '$2y$10$JYz.hc6lply1/MAXsqdh2ur4/uPhcIoVfEvn5WdfOpn4RofTD3sOC', '20'),
('el maro', '$2y$10$KpvPws77wlfGYC9X/TdhIOI15rCQtuxM1layF7o5Sj1xUywZVDt2C', '22'),
('el maro', '$2y$10$kWI.MhH7Nfkyk5v69ciL6./yl4FMXx5Y4SejZFvNBps5kwuWlDtuC', '23'),
('el maro', '$2y$10$ntmtpwXnZmofxZUjZuyxy..PAKrHxD6Cg/tcN/AqbBnkGlDL.LMyC', '35'),
('el maro', '$2y$10$OjbW3gUDZyuhHT2.mgGcFOQ98MedNpHFmEYSHZfgSLXmrZmLxQHNy', '31'),
('el maro', '$2y$10$PzjAImjJbMGLBA9Xc1GG2u0cqINZNt.7okntvMxm5DN0ZQCfAkTiS', '26'),
('el maro', '$2y$10$QjJzi5KT/aWwC9eSPPQ6aeoYR9j9TJtuyUPOCZbCL8LbooHabdqjq', '33'),
('el maro', '$2y$10$Tlgy5kSRPzzcYnuUvOU61evQwaHImPvZeM7zsAeEk77Fid2As.TYa', '28'),
('el maro', '$2y$10$VsbNRmZojuvZ1xk650d.LugAnzb5SjtohWJjDtlMR.HInJbL9gViW', '29'),
('mel', '$2y$10$mZILpepg5zaw1QxHXbAdUubrPVSutS61kHRQ7dJIOaB5/39c86FR2', '19'),
('mel', '$2y$10$SZhMBw8a1.m7HJiJnTJq5.ej4SLRmk41Yi25wmkP0k.z8GoRSianC', '18'),
('tapamo', '$2y$10$S8a22BR1Vvs.C/dnFQYwCu/3VxOks5rYRo1XTaRv8z/KM8MY9sOhC', '11'),
('tong', '$2y$10$zu1l.5yaV7G7fuNVAheGfOfO/iqyaIPp2bLRIWHXXG042DIRZ.RRW', '5'),
('tong2', '$2y$10$NGyPpf.qiyghYrNyZR4couEib6qsVZo9jtH/dpWb0kmZ9NtduM.Ga', '17'),
('user', '$2y$10$GJxt.Pri5wzkvFUr1KMS5eO1rlEO1/wspPvzIvF.GU/N2jv2rPthO', '10');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `code_matiere` varchar(20) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_filiere` int(30) NOT NULL,
  `id_enseignant` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`code_matiere`, `libelle`, `id_filiere`, `id_enseignant`) VALUES
('INFO3036', 'Base de données', 4, 4),
('INFO3176', 'Techniques de programmation avancées', 4, 3),
('INFO3186', 'Systèmes d\'information décisionnels', 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `new_notes`
--

CREATE TABLE `new_notes` (
  `id` int(11) NOT NULL,
  `id_note` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `new_pv`
--

CREATE TABLE `new_pv` (
  `id` int(11) NOT NULL,
  `id_pv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_expediteur` varchar(10) NOT NULL,
  `id_filiere` int(10) NOT NULL,
  `id_matiere` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `type`, `libelle`, `id_expediteur`, `id_filiere`, `id_matiere`, `date`) VALUES
(2, 'CC', 'cahier de charges 311.docx', '11', 4, 'INFO3036', '2022-06-05'),
(3, 'CC', 'automates.pdf', '11', 4, 'INFO3036', '2022-06-05'),
(4, 'TP', 'TP.xlsx', '11', 4, 'INFO3176', '2022-06-05'),
(5, 'Examen', '8-adressage_IP.pdf', '11', 4, 'INFO3186', '2022-06-06'),
(6, 'Examen', 'Chap19_exercices.pdf', '10', 4, 'INFO3186', '2022-06-07');

-- --------------------------------------------------------

--
-- Structure de la table `pv`
--

CREATE TABLE `pv` (
  `id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_destinataire` varchar(20) NOT NULL,
  `id_filiere` int(10) NOT NULL,
  `id_matiere` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pv`
--

INSERT INTO `pv` (`id`, `type`, `libelle`, `id_destinataire`, `id_filiere`, `id_matiere`, `date`) VALUES
(1, 'CC', 'packet_tracer.pdf', '11', 4, 'INFO3036', '2022-06-07'),
(2, 'CC', 'Chap19_solutions.pdf', '11', 4, 'INFO3036', '2022-06-07'),
(3, 'TP', 'F_TD-1-ModeÌ€les__corrigeÌ-4.pdf', '11', 4, 'INFO3036', '2022-06-07'),
(4, 'Rattrapage', 'topologies-physiques.pdf', '11', 4, 'INFO3036', '2022-06-07'),
(5, 'Rattrapage', 'cours.pdf', '11', 4, 'INFO3036', '2022-06-07');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id_session` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `update` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE `upload` (
  `id` int(30) NOT NULL,
  `id_expediteur` int(35) NOT NULL,
  `id_destinataire` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `id_departement` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`matricule`, `nom`, `prenom`, `mail`, `grade`, `id_departement`) VALUES
('10', 'laurence', 'TONG', 'laurence@gmail.com', 'ci', 0),
('11', 'TAPAMO', 'Michel', 'michel@gmail.com', 'ens', 1),
('12', 'aba', 'essi', 'essiaba@gmail.com', 'scl', 4),
('13', 'lora', 'anderson', 'andersonlora@gmail.c', 'ci', 0),
('14', 'adore', 'ange', 'angeadore@gmail.com', 'ens', 0),
('15', 'adore', 'ange', 'angeadore@gmail.com', 'ens', 0),
('16', 'a', 'b', 'ba@gmail.com', 'ens', 1),
('17', 'TONG', 'Quentin', 'tong@gmail.com', 'ens', 1),
('18', 'tueguem', 'melvis', 'melvis@gmail.com', 'ens', 1),
('19', 'tueguem', 'melvis', 'melvis@gmail.com', 'ci', 1),
('20', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('21', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('22', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('23', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('24', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('25', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('26', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('27', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('28', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('29', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('30', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('31', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('32', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('33', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('34', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0),
('35', 'el', 'maro', 'elmaro@gmail.com', 'ci', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `anneescolaire`
--
ALTER TABLE `anneescolaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `destinataire`
--
ALTER TABLE `destinataire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`code_matiere`);

--
-- Index pour la table `new_notes`
--
ALTER TABLE `new_notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `new_pv`
--
ALTER TABLE `new_pv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pv`
--
ALTER TABLE `pv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `new_notes`
--
ALTER TABLE `new_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `new_pv`
--
ALTER TABLE `new_pv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pv`
--
ALTER TABLE `pv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
