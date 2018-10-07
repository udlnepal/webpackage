-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 07:15 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `updated_at`) VALUES
(9, 'Sumit', 'nurse@ent.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-03 08:40:36'),
(10, 'sumit', 'timusumit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-03 10:42:51'),
(11, 'dhruba', 'dhruba@ramesh.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-08-07 06:54:23'),
(12, 'akhabar', 'sakhabar@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2018-08-13 12:11:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
