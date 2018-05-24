-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2018 at 08:35 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `perfect_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
  (1, 'admin', '$2y$10$Qo0H/pyWCJd5SBU8GGhfXeR4L.aATceeoT/11aupKFF5RxbJ1yBAa');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) NOT NULL,
  `title` varchar(110) NOT NULL,
  `subtitle` varchar(110) NOT NULL,
  `img_src` varchar(2048) NOT NULL,
  `img_alt` varchar(69) NOT NULL,
  `content` text NOT NULL,
  `logo_img` varchar(2048) NOT NULL,
  `company_name` varchar(110) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `subtitle`, `img_src`, `img_alt`, `content`, `logo_img`, `company_name`, `category_id`) VALUES
  (6, 'Transavia', 'La compagnie low-cost ', '90672_1_1.jpg', 'Palermo, une destination deservie par Transavia, &agrave; partir de 3', 'La grande compagnie hollandaise', 'transavia.png', 'Transavia', 2),
  (9, 'Mercure hotel ajoute de nouvelles suites business ', 'info pratique', 'chambre hotel.jpg', 'chambre de Mercure', '&laquo;&nbsp;LoungeNet&nbsp;&raquo; propose ainsi gratuitement une gamme de services am&eacute;lior&eacute;e et &eacute;largie, avec un contenu adapt&eacute; &agrave; chaque lounge.', 'Mercure_Hotels_Logo_2013.svg.png', 'Mercure Hotel', 3),
  (10, 'Aston hotel Change le design de ses chambres  ', 'info pratique', 'hotel-adresse-rooms-terrace-004.jpg', 'Chambre Aston Hotel', '&laquo;&nbsp;LoungeNet&nbsp;&raquo; propose ainsi gratuitement une gamme de services am&eacute;lior&eacute;e et &eacute;largie, avec un contenu adapt&eacute; &agrave; chaque lounge.', 'main-qimg-84574db91af3cc30310e074f24aa6a25.png', 'Aston Hotel', 3),
  (11, 'Origin Restaurant vous propose une nouvelle carte ', 'info pratique', 'plat italien.jpg', 'Origin restaurant', '&laquo;&nbsp;LoungeNet&nbsp;&raquo; propose ainsi gratuitement une gamme de services am&eacute;lior&eacute;e et &eacute;largie, avec un contenu adapt&eacute; &agrave; chaque lounge.', 'origin_logo.png', 'Origin Restaurant', 4),
  (12, 'Restau gusto nous propose de nouveau plats venus tout droit d&rsquo;Italie', 'info pratique', 'plat italien_1.jpg', 'Gusto restaurant', '&laquo;&nbsp;LoungeNet&nbsp;&raquo; propose ainsi gratuitement une gamme de services am&eacute;lior&eacute;e et &eacute;largie, avec un contenu adapt&eacute; &agrave; chaque lounge.', 'gusto-main-logo-black.png', 'Gusto', 4),
  (13, 'Genesis Spa vous offre un week-end pour un abonnement d&rsquo;un an', 'info pratique', 'spa.jpg', 'Genesis SPas', 'Le service Spa, propos&eacute; dans les lounges Senator et classe Premi&egrave;re de la zone des d&eacute;parts B de l&rsquo;a&eacute;roport de Francfort, est une fa&ccedil;on tr&egrave;s appr&eacute;ci&eacute;e pour passer le temps.', 'logospa.png', 'Genesis Spas', 5),
  (14, 'Central Spa agrandi ses locaux, de nouvelles pi&egrave;ces pour votre plus grand confort', 'info pratique', 'spa_1.jpg', 'Central Spas', 'Le service Spa, propos&eacute; dans les lounges Senator et classe Premi&egrave;re de la zone des d&eacute;parts B de l&rsquo;a&eacute;roport de Francfort, est une fa&ccedil;on tr&egrave;s appr&eacute;ci&eacute;e pour passer le temps.', 'logo-spa.png', 'Central Spa', 5),
  (17, 'Birdie\'s', 'Bar &agrave; Montreuil', '90672.jpg', 'Birdie\'s', 'Birdies assure toute l\'ann&eacute;e des prestations d\\accueil en entreprises et accueil &eacute;v&egrave;nementel pour vos salons, congr&egrave;s, conf&eacute;rences, colloques', '0b4986d49c634651b8b1504b63284848.jpeg', 'Birdie\'s', 6),
  (19, 'Buddha bar', 'Bar zen', '90672_1.jpg', 'Buddha bar', 'Bar tranquille au centre de Paris', 'buddha-bar_s345x230.jpg', 'Buddha Bar', 6),
  (21, 'Air France', 'Compagnie de confiance', 'fiches.jpg', 'Air France', 'Compagnie  100% fran&ccedil;aise', 'monogramme_af.png', 'Air France', 2),
  (22, 'British Airways', 'British company', 'logo-british-airways_1.png', 'British Airways', 'R&eacute;servez des vols pour Londres, New York et beaucoup d\'autres destinations avec British Airways. ', 'logo-british-airways_1_1.png', 'British Airways', 2),
  (23, 'Emirates ', 'Compagnies arabe', 'bar.jpg', 'Emirates', 'Achetez, offrez ou transf&eacute;rez plus de Miles moins cher. En savoir plus. Rechercher des vols. G&eacute;rer une r&eacute;servation ou s\'enregistrer. ', 'emirates-airlines-logo-01.png', 'Emirates', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
  (1, 'Bons Plans'),
  (2, 'Compagnies aériennes'),
  (3, 'Hotels'),
  (4, 'Restaurants'),
  (5, 'Spas'),
  (6, 'Bars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
