-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 11:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TodoApp`
--
CREATE DATABASE IF NOT EXISTS `TodoApp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `TodoApp`;

-- --------------------------------------------------------

--
-- Table structure for table `todo_list`
--

DROP TABLE IF EXISTS `todo_list`;
CREATE TABLE IF NOT EXISTS `todo_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `task` varchar(512) NOT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(1) DEFAULT 0 COMMENT '0=Active, 1=Done ',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=480 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo_list`
--

INSERT INTO `todo_list` (`id`, `task`, `description`, `status`, `created`) VALUES
(478, '11111', '11111', 0, '2021-07-14 17:30:52'),
(479, '22222', '22222', 0, '2021-07-14 17:51:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
