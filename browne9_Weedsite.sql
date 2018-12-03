-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2018 at 04:18 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `browne9_Weedsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Strains`
--

CREATE TABLE `Strains` (
  `strainsid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Survey1`
--

CREATE TABLE `Survey1` (
  `id` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL,
  `Answer A` varchar(20) NOT NULL,
  `Answer B` varchar(20) NOT NULL,
  `Answer C` varchar(20) NOT NULL,
  `Answer D` varchar(20) NOT NULL,
  `Answer E` varchar(20) NOT NULL,
  `Answer F` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Survey1`
--

INSERT INTO `Survey1` (`id`, `questions`, `Answer A`, `Answer B`, `Answer C`, `Answer D`, `Answer E`, `Answer F`) VALUES
(1, 'Level of Tolerance', 'Beginner', 'Intermediate', 'Expert', '', '', ''),
(2, 'What mood do you want to feel?(Choose Multiple)', 'Happy', 'Mellow', 'Sleepy', 'Energetic', 'Creative', 'Focused'),
(3, 'Product of preference to ingest cannabis.(Choose Multiple)', 'Edible(THC)', 'Pipe', 'Bong', 'Vape', 'Pills', ''),
(4, 'Do you care about the taste of cannabis.', 'Yes', 'No', '', '', '', ''),
(5, 'Are you okay with adverse side effects', 'Yes', 'No', '', '', '', ''),
(6, 'Do you want psychoactive effects.', 'Yes', 'No', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Survey2`
--

CREATE TABLE `Survey2` (
  `id` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `usersid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Strains`
--
ALTER TABLE `Strains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Survey1`
--
ALTER TABLE `Survey1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Survey2`
--
ALTER TABLE `Survey2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Strains`
--
ALTER TABLE `Strains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Survey1`
--
ALTER TABLE `Survey1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Survey2`
--
ALTER TABLE `Survey2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
