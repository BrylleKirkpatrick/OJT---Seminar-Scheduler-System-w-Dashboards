-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 08:23 AM
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
-- Database: `db_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Stat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `Lastname`, `Firstname`, `Middlename`, `Birthdate`, `Time`, `Stat`) VALUES
(1, 'ALMONIA                   ', 'AL JAMES', 'B', '2000-08-25', '', 'Present'),
(2, 'JONES', 'MIKE', 'JAMES', '1991-04-09', '', 'Absent'),
(12, 'YANEZ', 'AARONE', '', '2024-04-25', '', ''),
(13, 'ALMOITE', 'KIM KHARL', '', '2024-04-25', '', ''),
(14, 'CAGAS ', 'RYLLE ALBERT', 'JALOG', '1981-04-25', '', ''),
(15, 'GO ', 'JOHN ', '', '1987-04-20', '', ''),
(16, 'RAMOS', 'LORENZO', '', '2000-04-12', '', ''),
(17, 'SILVANO', 'JHES DALE', 'BORGIS', '1996-06-27', '', ''),
(18, 'ASDADAD', 'SDADADA', 'ASDADASD', '2024-04-26', '', ''),
(19, 'JAMES', 'LEBRON', 'RAYMONE', '1984-12-30', '', ''),
(20, 'ASD', 'ASDAD', 'ASDAD', '2024-04-24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sched`
--

CREATE TABLE `sched` (
  `ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles`) VALUES
(1, 'Aaronethebest', '123', 'Appointment'),
(2, 'Aljamesthebest', '123', 'Business'),
(3, 'Bryllethegreat', '123', 'Sanitary Inspector'),
(4, 'god', '123', 'Sanitary Inspector'),
(5, 'Aarone', '123', 'Business'),
(6, 'James', '123', 'Appointment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
