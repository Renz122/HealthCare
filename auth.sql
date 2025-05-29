-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 04:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `us`
--

CREATE TABLE `us` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `us`
--

INSERT INTO `us` (`ID`, `username`, `email`, `password`) VALUES
(1, 're', 'renzledesma2007@gmail.com', '$2y$10$L1ZTaYQcuQGd/gTD3VRNdOLKUcGLFQU7LbIBeFD4obO'),
(2, 'PogiRenz', 'renzledesma2007@gmail.com', '$2y$10$DPVW3QlUlQD5YtpGIyv0BeOP83TXp0k4l3SOg3fPmGM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'PogiRenz', 'renzledesma2007@gmail.com', '$2y$10$Ezymlx2thrV3t3lDl1eA2OdUxLXMo4GxXYkZNTb5ohNBxWjTfQt4G', '2025-05-26'),
(2, 'AceSkeleton', 'lrenz4624@gmail.com', '$2y$10$pIfw/ipbLa/6j//4AayGJ.eYHpLiybzMdVphWGbiIf7hH1qsNPGOC', '2025-05-26'),
(3, 'Tenz', 'rafaelledesma198@yahoo.com', '$2y$10$K4/Q4ijtL6rmrx4zkADU3OQAJJeXmyctqPrLm2qIixmk0B.P34E0e', '2025-05-27'),
(4, 'admin', 'admin@gmail.com', '$2y$10$LPPZjLfvk0F/udThd8It6uAR6MXjIFgACakUlVGn9T/dytblbWF/W', '2025-05-28'),
(5, 'admin2', 'admin2@gmail.com', '$2y$10$vhmFymUuf8u0BKaqJYlGK.lcrpQkckaWtYd/W2VaMITAqlHK3Gn7a', '2025-05-28'),
(6, 'admin3', 'admin3@mgail.com', '$2y$10$HXkBru0a89oIuzCE7FL4VeW6fR1zPGjl9bej1wXb4o26epNPRyB6a', '2025-05-29'),
(25, 'chain', 'ledesmarenz638@gmail.com', '$2y$10$HKOtZ.vfnFT8J6rxfNCdhuxKAIry1QZOJ6zmwalNQfjXqFWBvZfiu', '2025-05-29'),
(26, '123', '123@gmail.com', '$2y$10$cgqqYJqtFNoT94f3kwnY6OFyK8zNlK9CuScGfWSt0p6cSWFCTp2VC', '2025-05-29'),
(27, 'admin4', 'admin4@gmail.com', '$2y$10$uFCK3TGhiwk8w1dlbw2IquDhrb2DzkQzL7mVG0AayzUj5/j9JnaJ6', '2025-05-29'),
(28, 'Rafael', 'ledesmarafael28@gmail.com', '$2y$10$tCCHRjk13iMRYbQkSqdp8OH9G8xDpIPE6K1OIYG8kQVWRp6LTEN8u', '2025-05-29'),
(29, 'host1', 'host1@gmail.com', '$2y$10$qBDUU2bxdsuJwvOnCTgsm.UDVGpm19aeAkMJkwBFGfDukbKDOJN4.', '2025-05-29'),
(30, 'host2', 'host2@mgail.com', '$2y$10$CLD1NLD61q65kJGBb2uzFepy2lGAcM1TuNeU9I2a2d4a7sRUUUlN.', '2025-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `us`
--
ALTER TABLE `us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
