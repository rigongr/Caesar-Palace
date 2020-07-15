-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 09:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_caesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_room`
--

CREATE TABLE `add_room` (
  `ID` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Text` text NOT NULL,
  `num_rooms` int(5) NOT NULL,
  `room_price` int(11) NOT NULL,
  `posted_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_room`
--

INSERT INTO `add_room` (`ID`, `Image`, `Text`, `num_rooms`, `room_price`, `posted_by`) VALUES
(125, 'Hotelroom-Alamy.jpg', ' Single Room', 1, 30, 'Rigon'),
(126, 'room1.jpg', ' Presidental Suite', 5, 350, 'Rigon');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`ID`, `Name`, `Email`, `Message`) VALUES
(29, 'Rigon', 'rigon@rigon.com', ' asdasdasdwada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `usergroup` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `usergroup`) VALUES
(18, 'Rigon', 'gr@gmail.com', '$2y$10$wmFT97bNtub0rFZGIDbe4eT2QZArI66EchCQ59T4CAu2tDB3d9ar6', '1'),
(22, 'TestUpdated', 'test-update@gmail.com', '$2y$10$OVJVpnchIcR/I7FE12uWxOQtH2b7Py1ShzcfwN2TQowGuRqjkWTAa', '1'),
(24, 'Test', 'test@test.com', '$2y$10$nD8ft2PQQMHIW1iOHC0Qa.eofZcfpE1m/U3gxX/NigLHxEtnjMfvS', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_room`
--
ALTER TABLE `add_room`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_room`
--
ALTER TABLE `add_room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
