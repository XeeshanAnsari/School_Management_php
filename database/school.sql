-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 08:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `s_no` int(100) NOT NULL,
  `s_name` text NOT NULL,
  `s_email` varchar(40) NOT NULL,
  `s_subject` varchar(100) NOT NULL,
  `s_massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`s_no`, `s_name`, `s_email`, `s_subject`, `s_massage`) VALUES
(1, 'fchfchf', 'khf', 'fkfkfkfkf', 'kfkfkkffkfkfkfk'),
(2, 'hfjyfyf', 'IFIFF', 'IFIFIFIFIFI', 'FIOIUFIFIFOIFOI'),
(3, 'fkffffufgtfkoui', 'foufffofofofdiydiddddd@gmail.com', 'jaldgtodf', 'foufusv  khvsavck skii vikih ii g fougfegfgeq fwqgfwqgfgwq fwqgpfwqpfpgwqpgfpwqfgpwqgpfgwqpgf gwqfgpwqgpfpwq');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `g_r_no` int(255) NOT NULL,
  `s_name` text NOT NULL,
  `s_father_name` text NOT NULL,
  `s_class` varchar(40) NOT NULL,
  `s_phone` int(20) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`g_r_no`, `s_name`, `s_father_name`, `s_class`, `s_phone`, `s_email`, `s_address`) VALUES
(1, 'gog', 'gougougoug', 'guggug', 0, 'gugug', 'uggguoug'),
(2, 'goiugou', 'ogo', 'ogf', 0, 'f', 'gfug'),
(3, 'goiugou', 'ogo', 'ogf', 0, 'f', 'gfug');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`g_r_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `g_r_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
