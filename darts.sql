-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 11:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darts`
--

-- --------------------------------------------------------

--
-- Table structure for table `double_discipline`
--

CREATE TABLE `double_discipline` (
  `id` int(11) NOT NULL,
  `player1` varchar(40) DEFAULT NULL,
  `player2` varchar(40) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `double_discipline`
--

INSERT INTO `double_discipline` (`id`, `player1`, `player2`, `date`) VALUES
(1, 'raven valdiveso', 'jasper hinlo', '06 / 30 / 2020'),
(2, 'rolan osita', 'wilmar ', '06 / 30 / 2020'),
(3, 'wilmar canutal', 'paula rito', '06 / 30 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` varchar(50) NOT NULL,
  `player` varchar(90) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `player`, `date`) VALUES
('1', 'jhon mhar berador ', '06 / 30 / 2020'),
('2', 'raven valdiveso', '06 / 30 / 2020'),
('3', 'jude balansag', '06 / 30 / 2020'),
('4', 'wilmar canutal', '06 / 30 / 2020'),
('5', 'rolan osita', '06 / 30 / 2020'),
('6', 'lovely salumag', '06 / 30 / 2020'),
('7', 'kiko simbulan', '06 / 30 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `score_double`
--

CREATE TABLE `score_double` (
  `date` varchar(90) NOT NULL,
  `play1` varchar(90) NOT NULL,
  `play2` varchar(90) NOT NULL,
  `play3` varchar(90) NOT NULL,
  `play4` varchar(90) NOT NULL,
  `play5` varchar(90) NOT NULL,
  `play6` varchar(90) NOT NULL,
  `play7` varchar(90) NOT NULL,
  `play8` varchar(90) NOT NULL,
  `win1` varchar(90) NOT NULL,
  `win2` varchar(90) NOT NULL,
  `win3` varchar(90) NOT NULL,
  `win4` varchar(90) NOT NULL,
  `semi1` varchar(90) NOT NULL,
  `semi2` varchar(90) NOT NULL,
  `final1` varchar(90) NOT NULL,
  `final2` varchar(90) NOT NULL,
  `champ` varchar(90) NOT NULL,
  `lose1` varchar(90) NOT NULL,
  `lose2` varchar(90) NOT NULL,
  `lose3` varchar(90) NOT NULL,
  `lose4` varchar(90) NOT NULL,
  `lowin1` varchar(90) NOT NULL,
  `lowin2` varchar(90) NOT NULL,
  `loser1` varchar(90) NOT NULL,
  `loser2` varchar(90) NOT NULL,
  `losemi1` varchar(90) NOT NULL,
  `losemi2` varchar(90) NOT NULL,
  `losefinal1` varchar(90) NOT NULL,
  `losefinal2` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table darts.score_double: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `darts`.`score_double`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `score_single`
--

CREATE TABLE `score_single` (
  `date` varchar(80) NOT NULL,
  `play1` varchar(80) NOT NULL,
  `play2` varchar(80) NOT NULL,
  `play3` varchar(80) NOT NULL,
  `play4` varchar(80) NOT NULL,
  `play5` varchar(80) NOT NULL,
  `play6` varchar(80) NOT NULL,
  `play7` varchar(80) NOT NULL,
  `play8` varchar(80) NOT NULL,
  `win1` varchar(80) NOT NULL,
  `win2` varchar(80) NOT NULL,
  `win3` varchar(80) NOT NULL,
  `win4` varchar(80) NOT NULL,
  `semi1` varchar(80) NOT NULL,
  `semi2` varchar(80) NOT NULL,
  `final1` varchar(80) NOT NULL,
  `final2` varchar(80) NOT NULL,
  `champ` varchar(80) NOT NULL,
  `lose1` varchar(80) NOT NULL,
  `lose2` varchar(80) NOT NULL,
  `lose3` varchar(80) NOT NULL,
  `lose4` varchar(80) NOT NULL,
  `lowin1` varchar(80) NOT NULL,
  `lowin2` varchar(80) NOT NULL,
  `loser1` varchar(80) NOT NULL,
  `loser2` varchar(80) NOT NULL,
  `losemi1` varchar(80) NOT NULL,
  `losemi2` varchar(80) NOT NULL,
  `losefinal1` varchar(80) NOT NULL,
  `losefinal2` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score_single`
--

INSERT INTO `score_single` (`date`, `play1`, `play2`, `play3`, `play4`, `play5`, `play6`, `play7`, `play8`, `win1`, `win2`, `win3`, `win4`, `semi1`, `semi2`, `final1`, `final2`, `champ`, `lose1`, `lose2`, `lose3`, `lose4`, `lowin1`, `lowin2`, `loser1`, `loser2`, `losemi1`, `losemi2`, `losefinal1`, `losefinal2`) VALUES
('06 / 30 / 2020', 'jude', 'jude', 'jhon mhar berador', 'jude', 'wilmar canutal', 'jude', 'wilmar canutal', 'jude', 'wilmar canutal', 'jude', 'wilmar canutal', 'jude', '', 'jhon mhar berador', 'wilmar canutal', 'jude', 'jude', 'jude', 'wilmar canutal', 'jude', 'wilmar canutal', 'jhon mhar berador', 'wilmar canutal', 'jude', 'jude', 'jude', 'jude', 'jude', 'wilmar canutal');

-- --------------------------------------------------------

--
-- Table structure for table `single_discipline`
--

CREATE TABLE `single_discipline` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_discipline`
--

INSERT INTO `single_discipline` (`id`, `name`, `date`) VALUES
(1, 'jhon mhar berador ', '06 / 30 / 2020'),
(2, 'jude ', '06 / 30 / 2020'),
(3, 'wilmar canutal', '06 / 30 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` varchar(50) NOT NULL,
  `player1` varchar(90) NOT NULL,
  `player2` varchar(90) NOT NULL,
  `date` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `player1`, `player2`, `date`) VALUES
('1', 'jhon mhar berador ', 'jasper hinlo', '06 / 30 / 2020'),
('2', 'jude balansag', 'raven valdeviso', '06 / 30 / 2020'),
('3', 'wilmar canutal', 'lovely salumag', '06 / 30 / 2020'),
('4', 'rolan osita', 'raven valde', '06 / 30 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`password`) VALUES
('ilovedarts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `double_discipline`
--
ALTER TABLE `double_discipline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_discipline`
--
ALTER TABLE `single_discipline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `double_discipline`
--
ALTER TABLE `double_discipline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `single_discipline`
--
ALTER TABLE `single_discipline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
