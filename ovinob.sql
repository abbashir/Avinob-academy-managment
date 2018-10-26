-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 02:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovinob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'ovinob@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(3, 'asad', 'asad@gamil.com', 'good'),
(4, 'asad', 'asad@gamil.com', 'good'),
(5, 'niloy', 'niloy@gmail.com', 'well'),
(6, 'abdul momin', 'momin@gmai.com', 'hello ovinob'),
(7, 'abdul momin', 'momin@gmai.com', 'hello ovinob'),
(8, 'abdul momin', 'momin@gmai.com', 'hello ovinob'),
(9, 'abdul momin', 'momin@gmai.com', 'hello ovinob'),
(10, 'abdul momin', 'momin@gmai.com', 'hello ovinob'),
(11, 'j', 'g@g', 'f'),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, 'ffd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendingstudent`
--

CREATE TABLE `pendingstudent` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `peraddress` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `blood` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `school` varchar(500) NOT NULL,
  `class` varchar(100) NOT NULL,
  `role` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pinno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingstudent`
--

INSERT INTO `pendingstudent` (`id`, `name`, `fathername`, `mothername`, `paddress`, `peraddress`, `birthday`, `blood`, `email`, `facebook`, `mobile`, `school`, `class`, `role`, `subject`, `photo`, `gender`, `pinno`) VALUES
(2, 'ut', 'fg', 'fh', 'df', 'd', '2017-11-29', 'O+', 'halim@gmail.com', 'gfdg', '57', 'vc', 'Seven', '46', 'Recitation', '14102484_1086450184778539_3043157247446264127_n.jpg', 'Male', '3012'),
(3, 'ut', 'fg', 'fh', 'df', 'd', '2017-11-29', 'O+', 'halim@gmail.com', 'gfdg', '57', 'vc', 'Seven', '46', 'Recitation', '14102484_1086450184778539_3043157247446264127_n.jpg', 'Male', '2784'),
(4, 'hf', 'dg', 'df', 'g', 's', '2017-12-06', 'O+', 'gd@g', 'gg', '6456', 'gd', 'Four', '645', '', '14102484_1086450184778539_3043157247446264127_n.jpg', 'Male', '2282'),
(5, 'yr', 'df', 'df', 'df', 'dfg', '2017-12-06', 'AB+', 'hd@gf', 'fh', '56', 'gd', 'Eight', '5757', '', '14102484_1086450184778539_3043157247446264127_n.jpg', 'Male', '5338'),
(7, 't', 'fgd', 'gd', 'd', 'g', '2017-12-19', 'O+', 'jjhfgj@hkjhk', 'df', '5435', 'dfgd', 'Nine', '646', 'Array', '20161207_104820.jpg', 'Male', '4634'),
(8, 'gf', 'fv', 'vc', 'vc', 'cv', '2017-12-05', 'O+', 'ffff@fv', 'vcv', '34', 'gd', 'Eight', '338', 'Array', '20161207_133716.jpg', 'Male', '4383');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `memberid` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `peraddress` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `blood` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `school` varchar(500) NOT NULL,
  `class` varchar(100) NOT NULL,
  `role` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `memberid`, `name`, `fathername`, `mothername`, `paddress`, `peraddress`, `birthday`, `blood`, `email`, `facebook`, `mobile`, `school`, `class`, `role`, `subject`, `photo`, `gender`) VALUES
(28, 'A-1111', 'abdul halim khan', 'md monsur ali', 'most joinob ', 'rajshahi', 'chapai nawabgong', '2017-12-20', ' B-', 'halim23@gmail.com', '/halim', '0187357822', 'chunakhali alim madrasha', ' Twelve', '54', ' Song', '', ' Male'),
(29, 'A-1112', 'most kulsum', 'md ramjan', 'most : saima begum', 'rang pur', 'dhaka', '2017-12-19', ' O-', 'kulsum@gmail.com', 'kulsum23', '0187654287', 'pn girls school', ' Nine', '98', ' Song', 'amir.jpg', ' Female'),
(30, 'A-342', 'most kulsum', 'md ramjan', 'most : saima begum', 'rang pur', 'dhaka', '2017-12-19', ' O-', 'kulsum@gmail.com', 'kulsum23', '0187654287', 'pn girls school', ' Nine', '98', ' Song', 'images.jpg', ' Female'),
(33, '', 'amir', 'khan', 'k', 'k', 'fd', '2017-12-27', 'O+', 'h@g', 'gd;f', '456', 'gfg', 'Eight', '80', 'Theatre', '', 'Male'),
(34, 'A43', 'mehedi', 'X', 'Y', 'rahanpur', 'r', '2017-12-24', 'O+', 'h@gmaol', 'kskd', '45', 'fmg', 'Six', '345', 'Theatre', '', 'Male'),
(35, 'Afdf', 'Kanon', 'g', 'n', 'fd', 's', '2017-12-11', 'B+', 'f@g', 'dfgd', '53', 'gfdg', 'Five', '645', 'Song', '', 'Male'),
(37, 'kh', 'md ibrahim', 'h', 'j', 'fhfgd', 'fhfv', '2017-12-13', 'O-', 'jjhfgj@hkjhk', 'fdd', '545', 'fdg', 'Narsary', '45', 'Recitation', '8062_346275455447137_519049205_n.jpg', 'Male'),
(38, 'yr', 'yr', 'df', 'df', 'df', 'dfg', '2017-12-06', 'AB+', 'hd@gf', 'fh', '56', 'gd', 'Eight', '5757', 'Song Theatre Recitation', '14102484_1086450184778539_3043157247446264127_n.jpg', 'Male'),
(39, 'A-1115', 'rer', 'ff', 'sfzc', 'czcxc', 'asc', '2017-12-20', 'O-', 'cz@cdc', 'vxv', '6546', 'gfgbc', 'Eight', '753', 'Song,Theatre', '20161207_104736.jpg', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingstudent`
--
ALTER TABLE `pendingstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pendingstudent`
--
ALTER TABLE `pendingstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
