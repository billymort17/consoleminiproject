-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2026 at 10:05 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consoles`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int NOT NULL,
  `adminname` text NOT NULL,
  `adminpassword` text NOT NULL,
  `adminemail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `console-game`
--

CREATE TABLE `console-game` (
  `gameid` int NOT NULL,
  `consoleid` int NOT NULL,
  `consolegameid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consoles`
--

CREATE TABLE `consoles` (
  `consolename` text NOT NULL,
  `consoleprice` int NOT NULL,
  `dateofmade` text NOT NULL,
  `consoleid` int NOT NULL,
  `manufacturerid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `developerid` int NOT NULL,
  `developername` int NOT NULL,
  `esablisheddate` int NOT NULL,
  `developeremail` int NOT NULL,
  `developeraddress` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameid` int NOT NULL,
  `gamename` text NOT NULL,
  `creationdate` text NOT NULL,
  `price` int NOT NULL,
  `publisherid` int NOT NULL,
  `developerid` int NOT NULL,
  `consoleid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game-user`
--

CREATE TABLE `game-user` (
  `gameid` int NOT NULL,
  `consoleid` int NOT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturerid` int NOT NULL,
  `manufactuerername` text NOT NULL,
  `dateofestablished` text NOT NULL,
  `companyaddress` text NOT NULL,
  `consoleid` int NOT NULL,
  `manufactureremail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int NOT NULL,
  `publishername` int NOT NULL,
  `esablisheddate` int NOT NULL,
  `publisheremail` int NOT NULL,
  `publisheraddress` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int NOT NULL,
  `username` text NOT NULL,
  `userpassword` text NOT NULL,
  `useremail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `console-game`
--
ALTER TABLE `console-game`
  ADD PRIMARY KEY (`consolegameid`),
  ADD UNIQUE KEY `gameid` (`gameid`,`consoleid`),
  ADD KEY `consoleid` (`consoleid`);

--
-- Indexes for table `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`consoleid`),
  ADD UNIQUE KEY `manufacturerid` (`manufacturerid`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`developerid`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameid`),
  ADD UNIQUE KEY `publisherid` (`publisherid`,`developerid`),
  ADD UNIQUE KEY `consoleid` (`consoleid`),
  ADD KEY `developerid` (`developerid`);

--
-- Indexes for table `game-user`
--
ALTER TABLE `game-user`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `gameid` (`gameid`,`consoleid`),
  ADD KEY `consoleid` (`consoleid`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturerid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consoles`
--
ALTER TABLE `consoles`
  MODIFY `consoleid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `developerid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturerid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `console-game`
--
ALTER TABLE `console-game`
  ADD CONSTRAINT `console-game_ibfk_1` FOREIGN KEY (`consoleid`) REFERENCES `consoles` (`consoleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `console-game_ibfk_2` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consoles`
--
ALTER TABLE `consoles`
  ADD CONSTRAINT `consoles_ibfk_1` FOREIGN KEY (`manufacturerid`) REFERENCES `manufacturer` (`manufacturerid`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`developerid`) REFERENCES `developer` (`developerid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`publisherid`) REFERENCES `publisher` (`publisherid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_ibfk_4` FOREIGN KEY (`consoleid`) REFERENCES `consoles` (`consoleid`);

--
-- Constraints for table `game-user`
--
ALTER TABLE `game-user`
  ADD CONSTRAINT `game-user_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game-user_ibfk_2` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game-user_ibfk_3` FOREIGN KEY (`consoleid`) REFERENCES `consoles` (`consoleid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
