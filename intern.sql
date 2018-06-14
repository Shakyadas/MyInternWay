-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 06:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(25) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `cname`, `pos`, `city`, `pass`) VALUES
('s1', 'shakya', 'oracle', 'se', 'Kolkata', 'qwertyuiopedfvbnpojhgd3fc13dc12d8d7a58e7ae87295e93dbaddb5d36bghjklcvbnm'),
('s2', 'oo', 'oo', 'oo', 'Kolkata', 'qwertyuiopedfvbnpojhgf7c3bc1d808e04732adf679965ccc34ca7ae3441ghjklcvbnm'),
('s3', 'Bits', 'Oracle', 'Developer', 'Kolkata', 'qwertyuiopedfvbnpojhgf7c3bc1d808e04732adf679965ccc34ca7ae3441ghjklcvbnm'),
('s4', 'Bits', 'MS', 'Engg', 'Kolkata', 'qwertyuiopedfvbnpojhgf7c3bc1d808e04732adf679965ccc34ca7ae3441ghjklcvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` varchar(20) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `jdesc` varchar(5000) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `jpost` varchar(20) NOT NULL,
  `sal` varchar(20) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `cname`, `jdesc`, `loc`, `jpost`, `sal`, `uname`, `eid`) VALUES
('j4', 'MS', 'Good', 'Kolkata', 'Engg', '900000', '0', 's4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sname` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sid` int(20) NOT NULL,
  `10th_marks` varchar(25) NOT NULL,
  `12th_marks` varchar(25) NOT NULL,
  `grad_marks` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `m_status` varchar(20) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `mobile`, `sid`, `10th_marks`, `12th_marks`, `grad_marks`, `gender`, `m_status`, `partner_name`, `username`, `pass`) VALUES
('Shakya', '7003042295', 7, '60', '60', '60', 'male', 'Married', 'Srija', 'shakya007', 'qwertyuiopedfvbnpojhgf7c3bc1d808e04732adf679965ccc34ca7ae3441ghjklcvbnm'),
('ShakyaDas', '9007525203', 6, '60', '65', '72', 'male', 'Married', 'Srija', 'shakya', 'qwertyuiopedfvbnpojhgf7c3bc1d808e04732adf679965ccc34ca7ae3441ghjklcvbnm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `email` (`mobile`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
