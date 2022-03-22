-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 05:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

DROP TABLE IF EXISTS `tbl_books`;
CREATE TABLE `tbl_books` (
  `grp_id` int(11) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_edition` int(5) NOT NULL,
  `book_author` varchar(40) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_copies`
--

DROP TABLE IF EXISTS `tbl_book_copies`;
CREATE TABLE `tbl_book_copies` (
  `book_id` int(11) NOT NULL,
  `grp_id` int(11) NOT NULL,
  `book_status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept_subjects`
--

DROP TABLE IF EXISTS `tbl_dept_subjects`;
CREATE TABLE `tbl_dept_subjects` (
  `dept_name` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `sub_code` varchar(8) NOT NULL,
  `sub_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issued_books`
--

DROP TABLE IF EXISTS `tbl_issued_books`;
CREATE TABLE `tbl_issued_books` (
  `book_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `issued_date` date NOT NULL,
  `expected_return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recommendation`
--

DROP TABLE IF EXISTS `tbl_recommendation`;
CREATE TABLE `tbl_recommendation` (
  `grp_id` int(11) NOT NULL,
  `sub_code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_book`
--

DROP TABLE IF EXISTS `tbl_return_book`;
CREATE TABLE `tbl_return_book` (
  `book_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `return_date` date NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_name` varchar(20) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `tbl_book_copies`
--
ALTER TABLE `tbl_book_copies`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_issued_books`
--
ALTER TABLE `tbl_issued_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_recommendation`
--
ALTER TABLE `tbl_recommendation`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `tbl_return_book`
--
ALTER TABLE `tbl_return_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_book_copies`
--
ALTER TABLE `tbl_book_copies`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
