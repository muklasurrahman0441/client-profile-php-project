-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 08:26 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pinno` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` int(12) NOT NULL,
  `distributor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pinno`, `date`, `name`, `designation`, `address`, `contact`, `distributor`) VALUES
(0, '1', '2019-12-31', 'asrop', 'vvbnz', 'Barisal University', 321423, 'adad'),
(0, '235365', '2018-08-25', 'dfg', 'gfbvcx', 'For Login use this row', 45654, ''),
(0, '235365ghjf', '2018-08-25', 'dfg', 'gfbvcx', 'bxvncnbbv', 78978, 'asS'),
(0, '34235', '2018-08-14', 'dfsdf', 'dfgfg', 'ewreterw', 254354, 'rfsgf'),
(0, '4', '2018-08-01', 'xDa', 'dAX', 'ZxZC', 6, ''),
(0, '475', '2018-08-09', 'fd', 'asd', 'asdasd', 121321, 'adaDds'),
(0, '7896556', '2018-08-16', 'aSDs', 'zxCzvxzxcv', 'cfssaczx', 152254666, 'asdasfcxz'),
(0, '7987654', '2018-08-11', 'aSa', 'sadxz', 'xcZc', 898546, 'dfzdf'),
(0, 'aaD', '2018-08-14', 'ADx', 'ZCZ', 'ZCZX', 345454, 'sdczxv'),
(0, 'gfdgdfghd', '0000-00-00', 'fdgdf', '', '', 4535, ''),
(0, 'gfsf', '2018-08-08', 'sdfgv', 'fgfdxv', 'bvxc', 32453654, 'vbdxghd');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `destributor` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`username`, `email`, `contact`, `date`, `designation`, `destributor`, `password`) VALUES
('monircse044', 'monircsebu02@gmail.com', ' 0316746', '0212-12-12', 'lawer', 'Md Abudul Karim', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'hjjahd', 'djhaj', '12543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pinno`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`contact`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
