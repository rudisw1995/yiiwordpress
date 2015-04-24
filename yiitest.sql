-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2015 at 07:39 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yiitest`
--
CREATE DATABASE IF NOT EXISTS `yiitest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yiitest`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(22) NOT NULL,
  `name` varchar(59) NOT NULL,
  `jurusan` varchar(90) NOT NULL,
  `hari` varchar(44) NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `jurusan`, `hari`, `jam`) VALUES
(1107130100, 'Nibras', '', '', '00:00:00'),
(1107134156, 'Rudi', '', '', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `nama` varchar(99) NOT NULL,
  `nim` int(99) NOT NULL,
  `jurusan` varchar(99) NOT NULL,
  `hari` varchar(99) NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `nim`, `jurusan`, `hari`, `jam`) VALUES
(1, 'Rudi Sapto Wicaksana', 1107134156, 'Ilmu Komputasi', 'Senin', '06:30:00'),
(2, 'Dudung', 1107120102, 'Ilmu Komputasi', 'Rabu', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jurusan` varchar(33) NOT NULL,
  `hari` varchar(22) NOT NULL,
  `jam` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `nama`, `jurusan`, `hari`, `jam`) VALUES
(1, 'Rudi Sapto Wicaksana', 'Ilmu Komputasi', 'Senin', '06:30:00'),
(2, 'Roberto', 'Teknik Industri', 'Selasa', '16:30:00'),
(3, 'Dudung', 'Ilmu Komputasi', 'Rabu', '06:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
