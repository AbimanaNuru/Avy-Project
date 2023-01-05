-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 04:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avy_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_fullname` mediumtext NOT NULL,
  `contact_us_email` varchar(2000) NOT NULL,
  `contact_us_subject` mediumtext NOT NULL,
  `contact_us_full_message` mediumtext NOT NULL,
  `contact_us_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `contact_us_fullname`, `contact_us_email`, `contact_us_subject`, `contact_us_full_message`, `contact_us_date`) VALUES
(1, 'nuru', 'nuru@gmail.com', 'hello man ', 'hello helloa', '2023-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `news_lettter`
--

CREATE TABLE `news_lettter` (
  `news_lettter_id` int(11) NOT NULL,
  `news_lettter_email` mediumtext NOT NULL,
  `news_lettter_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_lettter`
--

INSERT INTO `news_lettter` (`news_lettter_id`, `news_lettter_email`, `news_lettter_date`) VALUES
(1, 'hello@gmail.com', '2023-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `news_lettter`
--
ALTER TABLE `news_lettter`
  ADD PRIMARY KEY (`news_lettter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_lettter`
--
ALTER TABLE `news_lettter`
  MODIFY `news_lettter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
