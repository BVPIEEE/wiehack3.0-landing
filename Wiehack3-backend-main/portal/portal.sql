-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `sno` int(100) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `teamhead` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `choice2` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `github` varchar(80) NOT NULL,
  `linkedin` varchar(80) NOT NULL,
  `portfolio` varchar(80) NOT NULL,
  `choice` int(11) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `contact2` int(10) NOT NULL,
  `choice3` varchar(5) NOT NULL,
  `college1` varchar(100) NOT NULL,
  `branch1` varchar(100) NOT NULL,
  `github2` varchar(80) NOT NULL,
  `linkedin2` varchar(80) NOT NULL,
  `portfolio2` varchar(80) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `contact3` int(10) NOT NULL,
  `choice4` varchar(5) NOT NULL,
  `college2` varchar(100) NOT NULL,
  `branch2` varchar(100) NOT NULL,
  `github3` varchar(80) NOT NULL,
  `linkedin3` varchar(80) NOT NULL,
  `portfolio3` varchar(80) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `email4` varchar(50) NOT NULL,
  `contact4` int(10) NOT NULL,
  `choice5` varchar(5) NOT NULL,
  `college3` varchar(100) NOT NULL,
  `branch3` varchar(100) NOT NULL,
  `github4` varchar(80) NOT NULL,
  `linkedin4` varchar(80) NOT NULL,
  `portfolio4` varchar(80) NOT NULL,
  `uploadfile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`sno`, `teamname`, `teamhead`, `email`, `contact`, `choice2`, `college`, `branch`, `github`, `linkedin`, `portfolio`, `choice`, `name2`, `email2`, `contact2`, `choice3`, `college1`, `branch1`, `github2`, `linkedin2`, `portfolio2`, `name3`, `email3`, `contact3`, `choice4`, `college2`, `branch2`, `github3`, `linkedin3`, `portfolio3`, `name4`, `email4`, `contact4`, `choice5`, `college3`, `branch3`, `github4`, `linkedin4`, `portfolio4`, `uploadfile`) VALUES
(1, 'sdvf', 'scDSV', 'asdz@gmail.com', 345678, '0', '', '', 'dsbdfh', 'sdgzvdv', 'sdgvg', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '0'),
(27, 'ngvjh', 'ygfhgbn', 'shivam125678@gmail.com', 990339112, '0', '', '', 'jgchmkvk,', 'bv bnh', 'gfchncjg', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '0'),
(34, 'dsv', 'dv', 'dsvxz@gmail.com', 990339112, '0', '', '', 'srgs', 'sdvb', 'sdvs', 4, 'dsv', 'dsvxz@gmail.com', 456657, '0', '', '', 'dsvbvaer', 'sdga', 'sdav', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', ''),
(35, 'dsv', 'dv', 'dsvxz@gmail.com', 990339112, '0', '', '', 'srgs', 'sdvb', 'sdvs', 4, 'dsv', 'dsvxz@gmail.com', 456657, '0', '', '', 'dsvbvaer', 'sdga', 'sdav', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', ''),
(36, 'dsv', 'dv', 'dsvxz@gmail.com', 990339112, '0', '', '', 'srgs', 'sdvb', 'sdvs', 4, 'dsv', 'dsvxz@gmail.com', 456657, '0', '', '', 'dsvbvaer', 'sdga', 'sdav', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', ''),
(52, '', '', '', 0, '0', '', '', '', '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', 'IEEE Checkout.pdf'),
(53, '', '', '', 0, '0', '', '', '', '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', 'printMembershipCard.html.pdf'),
(54, '', '', '', 0, '0', '', '', '', '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', 'edsvwaf', 'esdbbsa', 'dsbzxb', 'IEEE Checkout.pdf'),
(55, '', '', '', 0, '0', '', '', '', '', '', 0, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', 'IEEE Checkout.pdf'),
(56, '', '', '', 0, '0', '', '', '', '', '', 4, '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', 'IEEE Checkout.pdf'),
(57, 'sadfg', 'asdfg', 'shivam125678@gmail.com', 339112, '0', 'sdfghjert', 'sdfgh', 'aesrdtf', 'retyu', 'dsfgh', 3, 'dfgyeww', 'shivam125678@gmail.com', 90339112, '0', 'RETYREW', 'ertyuiyt', 'rdtyutr', 'rtyutre', 'retyu', 'Shivam Jain', 'shivam125678@gmail.com', 90339112, '0', 'werytuy', 'ertyu', 'etryu', '5e6r7t8', 'erty', 'Shivam Jain', 'shivam125678@gmail.com', 9112, '0', 'werty', 'waertyu', 'esrtdyu', 'rety', 'srdtyu', 'IEEE Checkout.pdf'),
(58, 'sadfg', 'asdfg', 'shivam125678@gmail.com', 339112, 'Male', 'sdfghjert', 'sdfgh', 'aesrdtf', 'retyu', 'dsfgh', 3, 'dfgyeww', 'shivam125678@gmail.com', 90339112, 'Male', 'RETYREW', 'ertyuiyt', 'rdtyutr', 'rtyutre', 'retyu', 'Shivam Jain', 'shivam125678@gmail.com', 90339112, 'Male', 'werytuy', 'ertyu', 'etryu', '5e6r7t8', 'erty', 'Shivam Jain', 'shivam125678@gmail.com', 9112, 'Male', 'werty', 'waertyu', 'esrtdyu', 'rety', 'srdtyu', 'IEEE Checkout.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
