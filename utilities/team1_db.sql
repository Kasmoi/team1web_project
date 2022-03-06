-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2022 at 07:55 AM
-- Server version: 8.0.28
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `email`, `password`, `username`) VALUES
(1, 'admin admin', 'admin@gymone.com', '$2y$10$YFubtm.tDW7lZk6vir8pb.ATQ6MZGo9/kMJwdh7D3bz3RunGVLV7O', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogID` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imgName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogID`, `title`, `content`, `imgName`) VALUES
(4, 'How to Lose Weight (Without Dieting): 5 Rules of Weight Loss', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur. Pellentesque dignissim enim sit amet venenatis urna.</p>\r\n<p>Tristique senectus et netus et malesuada fames. Risus sed vulputate odio ut enim blandit volutpat maecenas volutpat. Porttitor massa id neque aliquam vestibulum morbi. Tortor id aliquet lectus proin nibh. Orci nulla pellentesque dignissim enim sit amet venenatis urna cursus. Ullamcorper eget nulla facilisi etiam. Erat nam at lectus urna duis. Mauris cursus mattis molestie a iaculis at. Praesent tristique magna sit amet. At auctor urna nunc id cursus metus aliquam eleifend mi.</p>\r\n<p>Porttitor leo a diam sollicitudin tempor. Ultricies mi eget mauris pharetra et ultrices neque ornare. Nisi lacus sed viverra tellus in hac. Sapien nec sagittis aliquam malesuada. Eget est lorem ipsum dolor sit amet consectetur. Vitae sapien pellentesque habitant morbi tristique senectus. Interdum consectetur libero id faucibus nisl. In nisl nisi scelerisque eu ultrices vitae auctor eu. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Etiam non quam lacus suspendisse faucibus interdum posuere. Fringilla est ullamcorper eget nulla facilisi etiam. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Leo vel orci porta non pulvinar neque laoreet suspendisse. Suscipit tellus mauris a diam maecenas sed enim.</p>\r\n<p>Nisl rhoncus mattis rhoncus urna neque viverra. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Tellus orci ac auctor augue mauris augue neque gravida. Dui ut ornare lectus sit amet est placerat in egestas. Mauris sit amet massa vitae tortor. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Vestibulum sed arcu non odio euismod lacinia at quis. Nulla facilisi morbi tempus iaculis urna id. Accumsan sit amet nulla facilisi morbi tempus iaculis. Nisl tincidunt eget nullam non nisi est sit amet facilisis. Pharetra magna ac placerat vestibulum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Tempor orci dapibus ultrices in iaculis. A arcu cursus vitae congue mauris rhoncus aenean vel. In nibh mauris cursus mattis molestie a iaculis at erat. Montes nascetur ridiculus mus mauris vitae ultricies.</p>', 'blog-image-202203030910141886.jpg'),
(5, 'This is blog title', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Felis eget velit aliquet sagittis id consectetur.</p>\r\n<blockquote>\r\n<p>Pellentesque dignissim enim sit amet venenatis urna. Tristique senectus et netus et malesuada fames. Risus sed vulputate odio ut enim blandit volutpat maecenas volutpat.</p>\r\n</blockquote>\r\n<p>Porttitor massa id neque aliquam vestibulum morbi. Tortor id aliquet lectus proin nibh. <strong>Orci nulla pellentesque dignissim enim sit amet venenatis urna cursus. Ullamcorper eget nulla facilisi etiam</strong>. Erat nam at lectus urna duis. Mauris cursus mattis molestie a iaculis at. Praesent tristique magna sit amet. At auctor urna nunc id cursus metus aliquam eleifend mi.</p>\r\n<p>&nbsp;</p>\r\n<p>Porttitor leo a diam sollicitudin tempor. Ultricies mi eget mauris pharetra et ultrices neque ornare. Nisi lacus sed viverra tellus in hac. Sapien nec sagittis aliquam malesuada. Eget est lorem ipsum dolor sit amet consectetur. Vitae sapien pellentesque habitant morbi tristique senectus. Interdum consectetur libero id faucibus nisl. In nisl nisi scelerisque eu ultrices vitae auctor eu. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Etiam non quam lacus suspendisse faucibus interdum posuere. Fringilla est ullamcorper eget nulla facilisi etiam. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Leo vel orci porta non pulvinar neque laoreet suspendisse. Suscipit tellus mauris a diam maecenas sed enim.</p>\r\n<p>&nbsp;</p>\r\n<p>Nisl rhoncus mattis rhoncus urna neque viverra. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Tellus orci ac auctor augue mauris augue neque gravida. Dui ut ornare lectus sit amet est placerat in egestas. Mauris sit amet massa vitae tortor. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Vestibulum sed arcu non odio euismod lacinia at quis. Nulla facilisi morbi tempus iaculis urna id. Accumsan sit amet nulla facilisi morbi tempus iaculis. Nisl tincidunt eget nullam non nisi est sit amet facilisis. Pharetra magna ac placerat vestibulum. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Tempor orci dapibus ultrices in iaculis. A arcu cursus vitae congue mauris rhoncus aenean vel. In nibh mauris cursus mattis molestie a iaculis at erat. Montes nascetur ridiculus mus mauris vitae ultricies.</p>', 'blog-image-202203041157462635.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `imgID` int NOT NULL,
  `imgName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imgID`, `imgName`) VALUES
(5, 'gallery-image-202203010658107728.jpg'),
(6, 'gallery-image-202203010658101299.jpg'),
(7, 'gallery-image-202203010658106632.jpg'),
(9, 'gallery-image-20220301065810789.jpg'),
(15, 'gallery-image-202203041015547868.jpg'),
(17, 'gallery-image-202203041019591771.jpg'),
(18, 'gallery-image-2022030401080357.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `membershipID` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`membershipID`, `title`, `description`, `price`) VALUES
(2, 'Monthly Memberships', '<p style=\"text-align: justify;\">These membership types are generally convenient for those with a chaotic schedule, who cannot be completely sure how many times they may make it to the gym over the course of a month.&nbsp;</p>', 60),
(3, 'Pay-as-You-Go Memberships', '<p style=\"text-align: justify;\">These membership types are generally convenient for those with a chaotic schedule, who cannot be completely sure how many times they may make it to the gym over the course of a month.&nbsp;</p>', 3),
(4, 'The Equipment Only Membership', '<p style=\"text-align: justify;\"><span style=\"color: #333333; font-family: Oxygen, sans-serif; font-size: 16px; background-color: #ffffff;\">For those who just want to use our strength, cardio and free weight equipment and arent interested in taking classes or working with the staff, the Equipment Only membership may be best for you.&nbsp; This is the least expensive option</span></p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `sliderID` int NOT NULL,
  `sliderText` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imgName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`sliderID`, `sliderText`, `imgName`) VALUES
(12, '<p>Are you ready to</p>\r\n<p>Get fit,strong</p>\r\n<p>&amp; motivated</p>', 'slider-image-202203030623028093.jpg'),
(14, '<p>This is one</p>\r\n<p>This is two</p>\r\n<p>Three !</p>', 'slider-image-202203040108464180.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `trainerID` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `imgName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`trainerID`, `name`, `description`, `email`, `imgName`) VALUES
(5, 'Jack Sparrow', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>', 'jack@teamOne', 'trainer-image-202203060633463926.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`imgID`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`membershipID`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliderID`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`trainerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `imgID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `membershipID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliderID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `trainerID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
