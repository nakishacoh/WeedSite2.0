-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2018 at 11:17 PM
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
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `strainsid` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `res1` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `res2` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `res3` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `goodeffects` varchar(255) NOT NULL,
  `badeffects` varchar(255) NOT NULL,
  `thcprct` int(50) NOT NULL,
  `cbdprct` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`strainsid`, `name`, `type`, `res1`, `img1`, `res2`, `img2`, `res3`, `img3`, `goodeffects`, `badeffects`, `thcprct`, `cbdprct`, `image`, `description`) VALUES
(1, 'Chocolope', 'Sativa', 'Sour Diesel', 'sourdiesel.png', 'Purple Haze', 'purplehaze.png', 'Grapefruit', 'Grapefruit.png', 'Happy and Mellow', 'Dry Eyes, Dry Mouth, Nervousness', 19, 2, 'Chocolope.png', ''),
(2, 'Purple Haze', 'Sativa', 'Obama Kush', 'Obamakush.png', 'Dutch Treat', 'Dutchtreat.png', 'Chernobyl', 'Chernobyl.png', 'Creative, Happy, Talkative ', 'Dry Eyes and Dry Mouth', 13, 5, 'purplehaze.png', ''),
(3, 'Obama Kush', 'Indica', 'Purple Haze', 'purplehaze.png', 'Dutch Treat', 'Dutchtreat.png', 'ACDC', 'ac-dc.png', 'Creativity, Euphoria, Relaxed, and Sleepy', 'Dry Eyes, Dry Mouth, and Anxious', 16, 12, 'Obamakush.png', ''),
(4, 'Bubba Kush', 'Indica', 'Obama Kush', 'Obamakush.png', 'Super Skunk', 'Superskunk.png', 'Chernobyl', 'Chernobyl.png', 'Sleepy, Relaxed, and Euphoria', 'Dry Eyes, Dry Mouth, Anxious, Hunger', 18, 3, 'bubbakush.png', ''),
(5, 'Dutch Treat', 'Hybrid', 'Obama Kush', 'Obamakush.png', 'Purple Haze', 'purplehaze.png', 'Bubba Kush', 'bubbakush.png', 'Creativity, Euphoria, Relaxed, and Uplifted', 'Dry Eyes, Dry Mouth, and Anxious', 22, 2, 'Dutchtreat.png', ''),
(6, 'Super Skunk', 'Indica', 'Chernobyl', 'Chernobyl.png', 'Obama Kush', 'Obamakush.png', 'Strawberry Cough', 'Strawberrycough.png', 'Creativity, Euphoria, Relaxed, Sleepy, and Focused', 'Dry Eyes, Dry Mouth, Anxious, and Paranoia', 20, 6, 'Superskunk.png', ''),
(7, 'Moby Dick', 'Sativa', 'Chocolope', 'Chocolope.png', 'ACDC', 'ac-dc.png', 'Chernobyl', 'Chernobyl.png', 'Laughter, Creativity, Relaxed, Energetic', 'Dry Eyes, Dry Mouth, Munchies, Sleepy, and Laziness', 19, 52, 'Mobydick.png', ''),
(8, 'Strawberry Cough', 'Sativa', 'Chocolope', 'Chocolope.png', 'Moby Dick', 'Mobydick.png', 'ACDC', 'ac-dc.png', 'Energetic, Happy, Relaxed, and Focused', 'Dry Eyes, Dry Mouth, and Paranoia', 18, 12, 'Strawberrycough.png', ''),
(9, 'Chernobyl', 'Hybrid', 'Obama Kush', 'Obamakush.png', 'Super Skunk', 'Superskunk.png', 'Moby Dick', 'Mobydick.png', 'Creativity, Euphoria, Relaxed, Focused, and Happy', 'Dry Eyes, Dry Mouth, and Anxious', 18, 1, 'Chernobyl.png', ''),
(10, 'ACDC', 'Hybrid', 'Dutch Treat', 'Dutchtreat.png', 'Chocolope', 'Chocolope.png', 'Strawberry Cough', 'Strawberrycough.png', 'Euphoria, Relaxed, Focused, Happy, and Energetic', 'Dry Eyes, Dry Mouth, Anxious, Paranoia, Headache', 4, 24, 'ac-dc.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `Strains`
--

CREATE TABLE `Strains` (
  `id` int(11) NOT NULL,
  `strain` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Strains`
--

INSERT INTO `Strains` (`id`, `strain`, `description`) VALUES
(1, 'strain', ''),
(2, 'sativa', ''),
(3, 'sativa', ''),
(4, 'sativa', ''),
(5, 'Purple Haze', ''),
(6, 'Purple Haze', ''),
(7, 'Purple Haze', ''),
(8, 'Chocolope', ''),
(9, 'Chocolope', ''),
(10, 'Purple Haze', ''),
(11, 'Purple Haze', ''),
(12, 'sativa', ''),
(13, 'sativa', ''),
(14, 'sativa', ''),
(15, 'sativa', ''),
(16, 'sativa', ''),
(17, 'Chocolope', ''),
(18, 'Purple Haze', ''),
(19, '', ''),
(20, 'Obama Kush', ''),
(42, 'Chocolope', ''),
(34, 'Purple Haze', ''),
(35, 'Purple Haze', ''),
(40, 'Purple Haze', ''),
(41, 'Purple Haze', ''),
(31, 'Chocolope', ''),
(32, 'Purple Haze', ''),
(33, 'Purple Haze', ''),
(36, 'Purple Haze', ''),
(37, 'Purple Haze', ''),
(38, 'Purple Haze', ''),
(39, 'Purple Haze', ''),
(43, 'Purple Haze', ''),
(44, 'Chocolope', ''),
(45, 'Purple Haze', ''),
(46, 'Purple Haze', ''),
(47, 'Chocolope', ''),
(48, 'Chocolope', ''),
(49, 'Chocolope', ''),
(50, '', ''),
(51, '', ''),
(52, 'Obama Kush', ''),
(53, '', ''),
(54, 'sativa', ''),
(55, '', ''),
(56, '', ''),
(57, 'Purple Haze', ''),
(58, '', ''),
(59, '', ''),
(60, '', ''),
(61, '', ''),
(62, '', ''),
(63, '', ''),
(64, '', ''),
(65, '', ''),
(66, '', ''),
(67, '', ''),
(68, '', ''),
(69, '', ''),
(70, '', ''),
(71, '', ''),
(72, '', ''),
(73, '', ''),
(74, '', ''),
(75, '', ''),
(76, '', ''),
(77, '', ''),
(78, '', ''),
(79, '', ''),
(80, '', ''),
(81, '', ''),
(82, '', ''),
(83, '', ''),
(84, '', ''),
(85, '', ''),
(86, '', ''),
(87, '', ''),
(88, '', ''),
(89, '', ''),
(90, '', ''),
(91, '', ''),
(92, '', ''),
(93, '', ''),
(94, '', ''),
(95, '', ''),
(96, '', ''),
(97, '', ''),
(98, '', ''),
(99, '', ''),
(100, '', ''),
(101, '', ''),
(102, '', ''),
(103, '', ''),
(104, '', ''),
(105, '', ''),
(106, '', ''),
(107, '', ''),
(108, '', ''),
(109, '', ''),
(110, '', ''),
(111, '', ''),
(112, '', ''),
(113, '', ''),
(114, '', ''),
(115, '', ''),
(116, '', ''),
(117, '', ''),
(118, '', ''),
(119, '', ''),
(120, '', ''),
(121, '', ''),
(122, '', ''),
(123, '', ''),
(124, '', ''),
(125, '', ''),
(126, '', ''),
(127, '', ''),
(128, '', ''),
(129, '', ''),
(130, '', ''),
(131, '', ''),
(132, '', ''),
(133, '', ''),
(134, '', ''),
(135, '', ''),
(136, '', ''),
(137, '', ''),
(138, '', ''),
(139, '', ''),
(140, '', ''),
(141, '', ''),
(142, '', ''),
(143, '', ''),
(144, '', ''),
(145, '', ''),
(146, '', ''),
(147, 'Purple Haze', ''),
(148, 'Purple Haze', ''),
(149, 'Purple Haze', ''),
(150, 'Purple Haze', ''),
(151, 'Purple Haze', ''),
(152, 'Purple Haze', ''),
(153, 'Purple Haze', ''),
(154, 'Purple Haze', ''),
(155, 'Purple Haze', ''),
(156, 'Purple Haze', ''),
(157, 'Purple Haze', ''),
(158, 'Purple Haze', ''),
(159, 'Purple Haze', ''),
(160, 'Purple Haze', ''),
(161, 'Purple Haze', ''),
(162, 'Purple Haze', ''),
(163, 'Purple Haze', ''),
(164, 'Purple Haze', ''),
(165, '', ''),
(166, '', ''),
(167, '', ''),
(168, '', ''),
(169, '', ''),
(170, '', ''),
(171, '', ''),
(172, '', ''),
(173, '', ''),
(174, '', ''),
(175, '', ''),
(176, '', ''),
(177, '', ''),
(178, '', ''),
(179, '', ''),
(180, '', ''),
(181, '', ''),
(182, '', ''),
(183, '', ''),
(184, '', ''),
(185, '', ''),
(186, '', ''),
(187, '', ''),
(188, '', ''),
(189, '', ''),
(190, '', ''),
(191, '', ''),
(192, '', ''),
(193, 'Super Skunk', ''),
(194, 'Super Skunk', ''),
(195, 'Super Skunk', ''),
(196, 'Purple Haze', ''),
(197, 'Moby Dick', ''),
(198, 'Strawberry Cough ', ''),
(199, 'Purple Haze', ''),
(200, 'Strawberry Cough ', ''),
(201, 'Strawberry Cough ', ''),
(202, 'Strawberry Cough ', ''),
(203, 'Strawberry Cough ', ''),
(204, 'Strawberry Cough ', ''),
(205, 'Super Skunk', ''),
(206, 'Super Skunk', ''),
(207, 'Strawberry Cough ', ''),
(208, 'Purple Haze', ''),
(209, 'Purple Haze', ''),
(210, 'Chocolope', ''),
(211, 'Moby Dick', ''),
(212, 'Moby Dick', ''),
(213, '', ''),
(214, '', ''),
(215, 'Moby Dick', ''),
(216, 'Moby Dick', ''),
(217, 'Strawberry Cough ', ''),
(218, '', ''),
(219, '', ''),
(220, '', ''),
(221, '', ''),
(222, '', ''),
(223, 'Strawberry Cough ', ''),
(224, 'Strawberry Cough ', ''),
(225, 'Strawberry Cough ', ''),
(226, 'Strawberry Cough ', ''),
(227, '', ''),
(228, 'Moby Dick', ''),
(229, '', ''),
(230, '', ''),
(231, 'Strawberry Cough ', ''),
(232, 'Strawberry Cough ', ''),
(233, 'Obama Kush', ''),
(234, 'Moby Dick', ''),
(235, '', ''),
(236, 'Chernobyl', ''),
(237, 'Strawberry Cough ', ''),
(238, 'Strawberry Cough ', ''),
(239, 'Moby Dick', ''),
(240, 'Purple Haze', ''),
(241, 'Moby Dick', ''),
(242, 'Bubba Kush', ''),
(243, 'Purple Haze', ''),
(244, 'Purple Haze', ''),
(245, 'Purple Haze', ''),
(246, 'Moby Dick', ''),
(247, 'Bubba Kush', ''),
(248, 'Moby Dick', ''),
(249, 'Moby Dick', ''),
(250, 'Moby Dick', ''),
(251, 'Moby Dick', ''),
(252, 'Moby Dick', ''),
(253, 'Moby Dick', ''),
(254, 'Purple Haze', ''),
(255, 'Moby Dick', ''),
(256, 'Super Skunk', ''),
(257, 'Purple Haze', ''),
(258, 'Moby Dick', ''),
(259, 'Moby Dick', ''),
(260, '', ''),
(261, 'Moby Dick', ''),
(262, '', ''),
(263, 'Purple Haze', ''),
(264, 'Moby Dick', ''),
(265, 'Moby Dick', ''),
(266, 'Strawberry Cough ', ''),
(267, 'Purple Haze', ''),
(268, 'Purple Haze', ''),
(269, 'Moby Dick', ''),
(270, 'Moby Dick', ''),
(271, '', ''),
(272, 'Purple Haze', ''),
(273, 'Moby Dick', ''),
(274, 'Purple Haze', ''),
(275, 'Purple Haze', ''),
(276, 'Super Skunk', ''),
(277, 'Strawberry Cough ', ''),
(278, 'Purple Haze', ''),
(279, 'Purple Haze', '');

-- --------------------------------------------------------

--
-- Table structure for table `Strains-Users`
--

CREATE TABLE `Strains-Users` (
  `strainsid` int(11) NOT NULL,
  `usersid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'What mood do you want to feel?', 'Happy', 'Mellow', 'Sleepy', 'Energetic', 'Creative', 'Focused'),
(3, 'Product of preference to ingest cannabis.', 'Edible(THC)', 'Pipe', 'Bong', 'Vape', 'Pills', ''),
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
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`usersid`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'Nik', 'co', 'kiki2', 'she@gmail.com', 'roblox');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`strainsid`);

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
  ADD PRIMARY KEY (`usersid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Results`
--
ALTER TABLE `Results`
  MODIFY `strainsid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Strains`
--
ALTER TABLE `Strains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

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
  MODIFY `usersid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
