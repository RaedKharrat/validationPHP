-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2019 at 11:05 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Obladi`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivement`
--

CREATE TABLE `achivement` (
  `id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `ptfid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achivement`
--

INSERT INTO `achivement` (`id`, `idClient`, `ptfid`, `type`) VALUES
(1, 13, 12, 'debutant'),
(2, 24, 5, 'debutant'),
(3, 25, 5, 'debutant'),
(4, 29, 5, 'debutant'),
(5, 31, 5, 'debutant'),
(6, 33, 5, 'debutant'),
(7, 34, 5, 'debutant'),
(8, 27, 5, 'debutant');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
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
(4, 66, 2, '2019-03-20', 'ok', ''),
(6, 66, 1, '2019-03-27', 'en cours', 'drztguoipjzenbfukctm'),
(4, 66, 2, '2019-03-20', 'ok', ''),
(7, 99, 2, '2019-04-17', 'Non Satisfait', 'ytrezsdfghjkl;,nbvcdr(-yuj,'),
(5, 55, 1, '2019-04-23', 'Recu', 'azert'),
(11, 55, 2, '2019-04-27', 'Recu', '3asba'),
(8, 55, 3, '2019-04-23', 'Recu', 'njarbou ou bch te5dem'),
(11, 66, 2, '2019-04-17', 'en cours', 'iiiiiiiiiiiiiiiiiiii'),
(10, 55, 1, '2019-04-23', 'Recu', 'hey'),
(9, 55, 2, '2019-04-23', 'Recu', 'hey'),
(14, 2, 1, '2019-04-29', 'Recu', 'qezCz>qDESZcs>Fdesqcf'),
(12, 2, 2, '2019-04-29', 'Recu', 'defffffffffffffffffffffff'),
(13, 2, 3, '2019-04-29', 'Recu', 'qcdeqscezacqzc'),
(17, 2, 2, '2019-04-29', 'Recu', 'xqsdcefrtghyujikolmp'),
(15, 2, 3, '2019-04-29', 'Non Satisfait', ''),
(20, 55, 3, '2019-04-29', 'Recu', 'tttttttttttttttttttttttt'),
(21, 55, 3, '2019-04-29', 'Recu', ''),
(20, 55, 2, '2019-04-29', 'Recu', 'heydddddddd'),
(19, 55, 3, '2019-04-29', 'Recu', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(22, 55, 1, '2019-04-30', 'Recu', 'eeeeeeeeeeeeffffffffffffffffffffffffffffffffffff'),
(21, 55, 2, '2019-04-30', 'Recu', 'mekla 5ayba'),
(29, 55, 3, '2019-04-30', 'Recu', 'livraison khayba barcha ou matouselch fel wa9t'),
(33, 66, 3, '2019-04-30', 'Recu', 'mawselch ltawa tawaltou 3leya i need it soon'),
(34, 55, 3, '2019-04-30', 'Recu', 'a'),
(32, 66, 2, '2019-04-30', 'Recu', 'eeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Table structure for table `archive_liv`
--

CREATE TABLE `archive_liv` (
  `cin` int(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `postal` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `archive_livreur` (
  `login` varchar(15) NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `salaire` int(10) NOT NULL,
  `cinl` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `contenue` varchar(5500) NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `image`, `titre`, `date`, `contenue`, `archive`) VALUES
(1, 'page1.png', 'jkh,nk;', '2019-03-30', ' gyuhjkj', 1),
(2, 'page1.png', 'lamia', '2019-03-30', ' vbhjhhjvskjvsdkj', 1),
(3, 'page1.png', 'ytrhyrhh', '2019-03-30', ' hfhhrhr', 1),
(4, 'Plan de travail 1.png', 'Jupe jean newlook ', '2019-04-01', ' kfhjgkjlgtrkjgtrztkjlgtkjl', 1),
(5, 'cover.png', 'testt', '2019-04-01', 'test test ', 1),
(6, 'PhotoDeprofil.png', 'pppp', '2019-04-01', 'oooooo ', 1),
(7, 'Plan de travail 1.png', 'nnn', '2019-04-01', 'jjj ', 1),
(8, 'cover.png', 'llkj', '2019-04-01', 'Obladi.coffee@gmail.com\r\n', 1),
(9, 'cover.png', 'vvv', '2019-04-01', 'vvv ', 1),
(10, 'uploads/PhotoDeprofil.png', 'tt', '2019-04-02', 'tt ', 1),
(11, 'Plan%20de%20travail%201.png', 'nn', '2019-04-02', 'nn ', 0),
(12, 'PhotoDeprofil.png', 'nnpp', '2019-04-02', 'nnn ', 0),
(15, '50739371_600593137078026_3380576051536068608_o.jpg', 'Coffee & coffee', '2019-04-02', ' 555555', 0),
(16, 'dessert-6.jpg', 'hidaya', '2019-04-02', ' 555', 1),
(17, 'Login.jpg', '1111', '2019-04-02', ' 2222', 1),
(18, 'bg_2.jpg', 'Health benefits and risks of drinking coffee', '2019-04-30', ' A cup of coffee in the morning may provide more than just an energy boost.\r\nHealth benefits, say some researchers, may range from helping prevent diabetes to lowering the risk of liver disease.\r\n\r\nWith over 400 billion cups of coffee thought to be consumed every year, coffee is one of the world\'s most popular drinks. But is it really healthful, or are there also risks?\r\n\r\nBenefits\r\nThe potential health benefits associated with drinking coffee include protecting against type 2 diabetes, Parkinson\'s disease, liver disease, liver cancer, and promoting a healthy heart.3\r\n\r\n1) Coffee and diabetes\r\nA splash of coffee\r\nCoffee may help protect against type 2 diabetes. Researchers at UCLA identified that drinking coffee increases plasma levels of the protein sex hormone-binding globulin (SHBG). SHBG controls the biological activity of the body\'s sex hormones (testosterone and estrogen) which play a role in the development of type 2 diabetes.4\r\n\r\nDr. Simin Liu, one of the authors of the study, said that an \"inverse association\" exists between coffee consumption and risk for type 2 diabetes.\r\n\r\nIncreased coffee consumption may reduce risk of type 2 diabetes - the Harvard School of Public Health (HSPH) researchers gathered data from three studies. In these studies, the diets of the participants were evaluated using questionnaires every 4 years, with participants who reported having type 2 diabetes filling out additional questionnaires. In total, 7,269 study participants had type 2 diabetes.\r\n\r\nThe researchers found that the participants who increased their coffee intake by more than one cup a day (on average, an increase of 1.69 cups per day) over a 4-year period had an 11% lower type 2 diabetes risk over the subsequent 4 years, compared with people who did not change their intake.', 0),
(19, 'burger-1.jpg', 'test sms', '2019-04-30', 'test smstest smstest smstest smstest sms ', 0),
(20, 'burger-2.jpg', 'test smsmsm', '2019-04-30', 'smsmsmsmsm ', 0),
(21, 'dessert-4.jpg', 'mlkjmlkj', '2019-04-30', 'mlkjmlkjmlkj ml ', 1),
(22, 'dessert-6.jpg', 'plplplp', '2019-04-30', 'lplplp lpl plpl pl ', 0),
(23, 'dish-5.jpg', 'xcvb', '2019-04-30', 'dfgsfdg ', 0),
(24, 'burger-2.jpg', 'kjmlk', '2019-04-30', 'mlkmlkm ', 0),
(25, '', 'qsdgf', '2019-04-30', 'se rty ', 0),
(26, 'dessert-1.jpg', 'poipoi', '2019-04-30', 'poipoi poipoi ', 0),
(27, 'dessert-6.jpg', 'hidaya', '2019-04-30', ' llll', 0),
(28, 'dessert-1.jpg', 'oo', '2019-04-30', 'oooo ooo ', 0),
(29, 'dessert-6.jpg', 'hidaya', '2019-04-30', ' cccc', 0),
(30, 'dessert-2.jpg', 'g', '2019-04-30', ' hh', 0),
(31, 'dessert-6.jpg', 'hidaya', '2019-04-30', ' test mail', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `numc` int(11) NOT NULL,
  `receveur` varchar(255) NOT NULL,
  `transit` varchar(255) NOT NULL,
  `modalite` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`numc`, `receveur`, `transit`, `modalite`, `prix`) VALUES
(1234, 'ammar', 'ammars', 'yomkon', 320),
(12345, 'ammarA', 'ammarsA', 'yomkonA', 220);

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `contenue` varchar(5500) NOT NULL,
  `date` date NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `idUser`, `idArticle`, `contenue`, `date`, `visible`) VALUES
(1, 13, 11, 'gsdfg', '2019-04-29', 1),
(2, 13, 11, 'mmmm', '2019-04-29', 1),
(3, 13, 11, 'fff', '2019-04-29', 1),
(4, 13, 11, 'sdfsd', '2019-04-29', 1),
(5, 13, 11, 'dd', '2019-04-29', 1),
(6, 13, 11, 'aze', '2019-04-29', 1),
(7, 13, 11, 'cccccccccccc', '2019-04-29', 1),
(8, 13, 12, 'test', '2019-04-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `espace`
--

CREATE TABLE `espace` (
  `idplace` int(11) NOT NULL,
  `nbplace` int(11) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `extra` (
  `param` varchar(20) NOT NULL,
  `value` varchar(256) NOT NULL DEFAULT 'true'
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

CREATE TABLE `facture` (
  `numf` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `unite` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `numeroc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`numf`, `quantite`, `unite`, `description`, `numeroc`) VALUES
(5678, 30, 1, 'yomkon', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `nom`) VALUES
(1, '444', '444'),
(2, 'page1.png', 'dd'),
(3, 'page1.png', 'sfdgsdfg'),
(4, 'page1.png', 'hidaya'),
(5, '55.png', ',,'),
(6, 'bg_3.png', 'background');

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

CREATE TABLE `livraison` (
  `cin` int(15) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `postal` varchar(8) NOT NULL,
  `etat` int(50) NOT NULL
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

CREATE TABLE `livreur` (
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
-- Table structure for table `motif`
--

CREATE TABLE `motif` (
  `id_motif` int(2) NOT NULL,
  `motif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motif`
--

INSERT INTO `motif` (`id_motif`, `motif`) VALUES
(1, 'Qualite de produit'),
(2, 'Qualite de service'),
(3, 'Qualite de livraison');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(256) NOT NULL DEFAULT 'img/default.jpg',
  `categorie` varchar(5) NOT NULL DEFAULT 'menu',
  `soustype` varchar(50) NOT NULL,
  `prix` double(6,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `produitdiscount` (
  `idproddiscount` int(11) NOT NULL,
  `discount` int(11) NOT NULL
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

CREATE TABLE `produitnote` (
  `id` int(11) NOT NULL,
  `idprodnote` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(5) NOT NULL,
  `id_client` int(5) NOT NULL,
  `id_motif` int(2) NOT NULL,
  `date` date DEFAULT NULL,
  `etat` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `id_client`, `id_motif`, `date`, `etat`, `message`) VALUES
(28, 55, 2, '2019-04-30', 'Transfere', 'service khayeb'),
(30, 55, 1, '2019-04-30', 'Transfere', 'produit mouch eli fel commande'),
(31, 55, 3, '2019-04-30', 'Transfere', 'wsel cbon');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone` varchar(8) NOT NULL,
  `message` text NOT NULL,
  `nbpers` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nom`, `role`, `image`) VALUES
(1, 'hidaya', 'utilisateur', 'burger-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `surname`, `password`, `role`, `email`) VALUES
(1, 'user', 'user', '1', '1234', 'user', 'user@email.com'),
(2, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin@email.com'),
(55, 'aziz', 'aziz', '', '0258', 'client', 'aziz99arfaoui@gmail.com'),
(66, 'hedi', 'hedi', '', '123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `numTel` int(8) NOT NULL,
  `region` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `role` varchar(50) NOT NULL,
  `nbrCnx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `dateNaissance`, `mdp`, `numTel`, `region`, `prof`, `active`, `role`, `nbrCnx`) VALUES
(10, 'hidaya', 'mcharek', 'hidaya.mcharek@esprit.tn', '1998-08-09', '$6.SWLEpG9Sdk', 23668213, 'ar', 'ar', 1, 'utilisateur', 0),
(12, 'Hidaya', 'admin', 'hidaya@admin', '2019-04-02', '$65I6KH/.1F1w', 123, 'La petite ariana', 'etudiant', 1, 'admin', 7),
(13, 'hidaya', 'mcharek', 'hidaya@client', '2019-04-03', '$65I6KH/.1F1w', 123456, 'Menzah', 'etudiant', 1, 'utilisateur', 11),
(14, 'hidaya', 'mcharek', 'mcharekhidaya@gmail.com', '1999-02-02', '$6.SWLEpG9Sdk', 23668213, 'La petite ariana', 'etudiant', 1, 'utilisateur', 0),
(15, 'test', 'test', 'test@test', '2011-01-01', '$65I6KH/.1F1w', 55555, 'none', 'none', 1, 'utilisateur', 0),
(23, 'skander', 'skander', 'saknder@skander', '2019-02-04', '$65I6KH/.1F1w', 2222, 'CitÃ© el ghazela', 'prof', 1, 'utilisateur', 0),
(24, 'test', 'test', 'hidaya.@hidaya', '2019-01-01', '$65I6KH/.1F1w', 122, 'La petite ariana', 'etudiant', 1, 'utilisateur', 0),
(25, 'amira', 'amira', 'amira@doghri', '2019-01-01', '$6PMb7Av4W2KA', 321654, 'La petite ariana', 'etudiant', 1, 'utilisateur', 0),
(26, 'hidayaaa', 'mcharek', 'hidaya.mcharek@es', '2019-01-01', '$65I6KH/.1F1w', 28, 'La petite ariana', 'etudiant', 1, 'utilisateur', 0),
(27, 'hidaya', 'mcharek', 'lamya@esprit.tn', '2019-01-31', '$65I6KH/.1F1w', -1, 'La petite ariana', 'etudiant', 1, 'utilisateur', 0),
(29, 'Test2', 'test2', 'test2@test2', '2019-01-01', '$65I6KH/.1F1w', 12312323, 'La petite ariana', 'etudiant', 0, 'utilisateur', 0),
(31, 'test', 'test3', 'test3@tets3', '2019-01-01', '$6$rounds=5000$macleapersonnali$6czv27pjM32riSlO7F0wvkvIHjWDvVVyMYFpWXesayctnqzdL6S5yEEePD5UQdxZ3Fi2egdSVJjSh5kdevTkR.', 12345667, 'CitÃ© el ghazela', 'prof', 0, 'utilisateur', 0),
(33, 'hidaya', 'mcharek', 'mcharek@mcharek', '2019-01-02', '$6$rounds=5000$macleapersonnali$0BN2ayD4KhQocQGyKt8TiW1gDUkIcXhR0mDN2m.wEw7btB91o1xxMWmSvnJvMXi288cDjGj7YMKqq4YrPNnUt1', 38, 'La petite ariana', 'etudiant', 0, 'utilisateur', 0),
(34, 'hidaya', 'mcharek', 'lamya@esprit', '2019-04-20', '$6amssdn40VpE', 123, 'CitÃ© el ghazela', 'etudiant', 1, 'utilisateur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivement`
--
ALTER TABLE `achivement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive_liv`
--
ALTER TABLE `archive_liv`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `archive_livreur`
--
ALTER TABLE `archive_livreur`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numc`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArticle` (`idArticle`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `espace`
--
ALTER TABLE `espace`
  ADD PRIMARY KEY (`idplace`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`param`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`numf`),
  ADD KEY `numc` (`numeroc`) USING BTREE;

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`cin`);

--
-- Indexes for table `motif`
--
ALTER TABLE `motif`
  ADD PRIMARY KEY (`id_motif`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produitdiscount`
--
ALTER TABLE `produitdiscount`
  ADD PRIMARY KEY (`idproddiscount`);

--
-- Indexes for table `produitnote`
--
ALTER TABLE `produitnote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_note` (`idprodnote`);

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `id_client` (`id_client`,`id_motif`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`);

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achivement`
--
ALTER TABLE `achivement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `archive_liv`
--
ALTER TABLE `archive_liv`
  MODIFY `cin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `espace`
--
ALTER TABLE `espace`
  MODIFY `idplace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produitnote`
--
ALTER TABLE `produitnote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`id`);

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
