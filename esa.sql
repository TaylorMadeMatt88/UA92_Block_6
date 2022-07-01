-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 10:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esa`
--

-- --------------------------------------------------------

--
-- Table structure for table `astronaut`
--

CREATE TABLE `astronaut` (
  `astronaut_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_of_missions` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* The table for 'astronaut' with defined data types and length of input for those fields - MR */

--
-- Dumping data for table `astronaut`
--

INSERT INTO `astronaut` (`astronaut_id`, `name`, `no_of_missions`) VALUES
(13, 'Lauren', 4),
(15, 'Matthew', 5),
(16, 'Steve', 3),
(17, 'Bradley', 8),
(18, 'Rachel', 3);

/* INSERT INTO determines where the data will be stored while VALUES stores the relevant data into the correct column - MR */

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* The above table is for the login system with defined data types and length of input for those fields - MR - MR */

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');

/* I've set the above values so that the user needs to enter 'test' for username and 'test' for password - MR */

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `mission_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `launch_date` date NOT NULL,
  `mission_type` varchar(255) NOT NULL,
  `crew_size` int(11) NOT NULL,
  `astronaut_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* The table for 'mission' with defined data types and length of input for those fields - MR */

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mission_id`, `name`, `destination`, `launch_date`, `mission_type`, `crew_size`, `astronaut_id`, `target_id`) VALUES
(12, 'Solaris', 'Mars', '2021-12-29', 'Space Exploration', 3, 13, 2),
(13, 'Prometheus', 'Saturn', '2021-12-01', 'Space Exploration', 8, 16, 4),
(14, 'Plato ', 'Pluto', '2020-02-29', 'Space Exploration', 6, 16, 5),
(15, 'Socrates', 'Jupiter', '2021-08-04', 'Space Exploration', 10, 16, 3);

/* INSERT INTO determines where the data will be stored while VALUES stores the relevant data into the correct column - MR */

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `target_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_mission` date NOT NULL,
  `target_type` varchar(255) NOT NULL,
  `no_of_missions` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* The table for 'mission' with defined data types and length of input for those fields - MR */

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`target_id`, `name`, `first_mission`, `target_type`, `no_of_missions`) VALUES
(2, 'Mars', '2019-05-14', 'Journey', 3),
(3, 'Jupiter', '2022-05-04', 'Destination', 4),
(4, 'Saturn', '2021-12-29', 'Destination', 6),
(5, 'Pluto', '2021-11-11', 'Journey', 5),
(6, 'Venus', '2021-06-02', 'Destination', 0);

/* INSERT INTO determines where the data will be stored while VALUES stores the relevant data into the correct column - MR */

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astronaut`
--
ALTER TABLE `astronaut`
  ADD PRIMARY KEY (`astronaut_id`);

/* PRIMARY KEY set for the astronaut table - MR */

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

/* PRIMARY KEY set for the login table - MR */

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `astronaut_id` (`astronaut_id`),
  ADD KEY `target_id` (`target_id`);

/* PRIMARY KEY set for the missions as well as FOREGIN KEY's set for astronaut_id & target_id establishing a relationship with other tables - MR */

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`target_id`);

/* PRIMARY KEY set for the target table - MR */

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astronaut`
--
ALTER TABLE `astronaut`
  MODIFY `astronaut_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `target_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/* AUTO_INCREMENT is used to automatically set an ID number for each table used - MR */

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `astronaut_FK` FOREIGN KEY (`astronaut_id`) REFERENCES `astronaut` (`astronaut_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `target_FK` FOREIGN KEY (`target_id`) REFERENCES `target` (`target_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/* The ADD CONSTRAINT command was used to establish FK's after the creation of the database - MR*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
