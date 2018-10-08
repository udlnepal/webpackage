-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 04:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpackage`
--

-- --------------------------------------------------------

--
-- Table structure for table `package_setup`
--

CREATE TABLE `package_setup` (
  `package_id` int(15) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `package_features` blob NOT NULL,
  `package_price` int(25) NOT NULL,
  `package_offer_price` int(25) NOT NULL,
  `best_for` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_setup`
--

INSERT INTO `package_setup` (`package_id`, `package_name`, `package_features`, `package_price`, `package_offer_price`, `best_for`) VALUES
(1, 'Static Starter Pack', 0x3c756c3e0d0a093c6c693e3c7374726f6e673e53746174696320576562736974653c2f7374726f6e673e3c2f6c693e0d0a093c6c693e3c7374726f6e673e53696e676c6520506167652044657369676e3c2f7374726f6e673e3c2f6c693e0d0a093c6c693e3c7374726f6e673e47616c6c65727920496e636c756465643c2f7374726f6e673e3c2f6c693e0d0a093c6c693e3c7374726f6e673e34204d656e75204974656d733c2f7374726f6e673e3c2f6c693e0d0a3c2f756c3e0d0a, 2500, 999, 'Simple Portfolio'),
(2, 'Static Basic Pack', 0x3c756c3e0d0a093c6c693e53746174696320576562736974653c2f6c693e0d0a093c6c693e53696e676c6520506167652044657369676e3c2f6c693e0d0a093c6c693e47616c6c65727920496e636c756465643c2f6c693e0d0a093c6c693e34204d656e75204974656d733c2f6c693e0d0a093c6c693e3c7374726f6e673e467265652057656220486f7374696e673c2f7374726f6e673e3c2f6c693e0d0a093c6c693e3c7374726f6e673e4672656520282e6e7020526567697374726174696f6e293c2f7374726f6e673e3c2f6c693e0d0a3c2f756c3e0d0a, 4500, 2499, 'Simple Portfolio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_setup`
--
ALTER TABLE `package_setup`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_setup`
--
ALTER TABLE `package_setup`
  MODIFY `package_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
