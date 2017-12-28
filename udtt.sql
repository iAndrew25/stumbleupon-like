-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2017 at 10:42 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `udtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL auto_increment,
  `linksId` int(11) NOT NULL,
  `username` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL auto_increment,
  `url` text NOT NULL,
  `category` text NOT NULL,
  `dislikes` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `url`, `category`, `dislikes`) VALUES
(1, 'google', 'Fashion & Beauty', 0),
(2, 'face', 'Sport', 0),
(3, 'holo', 'TV Series', 0),
(4, 'hadoo.com', 'Shopping', 0),
(5, 'www.games.com', 'Book & Culture', 0),
(6, 'https://tvron.net/', 'TV Series', 0);

-- --------------------------------------------------------

--
-- Table structure for table `restore`
--

CREATE TABLE IF NOT EXISTS `restore` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `interests` text NOT NULL,
  `likes` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restore`
--


-- --------------------------------------------------------

--
-- Table structure for table `udt`
--

CREATE TABLE IF NOT EXISTS `udt` (
  `id` int(11) NOT NULL auto_increment,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `interests` text NOT NULL,
  `likes` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `udt`
--

INSERT INTO `udt` (`id`, `firstName`, `lastName`, `email`, `password`, `interests`, `likes`) VALUES
(18, 'Andy', 'Simplex', 'tutoit@gmail.com', 'Gnw4M5fLHg', '', ''),
(19, 'sd', 'sd', 'sd@sd.sd', 'parola123456', 'Logic; Hacks; Anime & cartoons; Sport; Video Games; Traveling; Social network; Funny; Babes', 'www.youtube.com\r\nwww.facebook.com'),
(20, 'tt', 'tt', 'tt@tt.tt', 'tt', 'Lifestyle; Astronomy; Cars; Board games; Alchoolic Driks; Video Games', ''),
(21, 'Camelia', 'Onu', 'camius@mail.com', '2tH1zkGhms', 'Sport; Board games; Breaking news; Outdoor Activities', 'a, b, c'),
(22, 'Stefan', 'Tutu', 'stefanel@mail.com', 'parola', 'Hacks; Alchoolic Driks; TV Series; Social network; Shopping', 'google.ro, youtube.com'),
(23, 'Alexandra', 'Ionela', 'a.vechiu45@gmail.com', 'bfXyEe0UsJ', '', ''),
(24, 'Ana', 'Sfrijan', 'anamaria.sfrijan7@gmail.com', 'ana123456', '', ''),
(25, 'stefan', 'valentin', 'stefy_valentin14@yahoo.com', '7ZARam4GOs', '', ''),
(27, 'Gabriel', 'Ursu', 'ursu.gabriel.catalin@gmail.com', '5Ofjy2uZ9W', '', ''),
(28, 'anca', 'mihaela', 'ciridariu_anca_mihaela@yahoo.com', 'sonyMSK2bh', '', ''),
(29, 'Tutu', 'Stefan', 'tutu.stefan@yahoo.com', 'Denis', 'Cars; Traveling; Sport; Video Games; Hacks; Gadgets; Business; Shopping; Babes', 'www.sport.ro\r\nwww.digisport.ro'),
(30, 'Mihail', 'Chirita', 'yo_mihut2008@yahoo.com', 'Iqts8youVZ', '', ''),
(31, 'tutu', 'stefan', 'tutustefanvalentin@gmail.com', 'n0KxFoth3Q', '', '');
