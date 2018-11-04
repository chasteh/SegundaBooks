-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 06:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `segundabooks`
--
DROP DATABASE IF EXISTS `segundabooks`;
CREATE DATABASE IF NOT EXISTS `segundabooks` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `segundabooks`;

-- --------------------------------------------------------

--
-- Table structure for table `books_offers`
--

CREATE TABLE IF NOT EXISTS `books_offers` (
  `id` int(4) NOT NULL,
  `price_offer` decimal(3,0) NOT NULL,
  `bookdetails_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `is_accepted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bookdetails` (`bookdetails_id`),
  KEY `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE IF NOT EXISTS `book_details` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(255) NOT NULL,
  `picture_path` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` decimal(55,0) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(55) NOT NULL,
  `category_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `is_sold` tinyint(1) NOT NULL,
  `is_reserved` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `UserId` (`user_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE IF NOT EXISTS `book_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder_name` varchar(500) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(155) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sold_books`
--

CREATE TABLE IF NOT EXISTS `sold_books` (
  `id` int(4) NOT NULL,
  `bookdetails_id` int(4) NOT NULL,
  `date_sold` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bookdetails_id` (`bookdetails_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(155) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_offers`
--
ALTER TABLE `books_offers`
  ADD CONSTRAINT `books_offers_ibfk_1` FOREIGN KEY (`bookdetails_id`) REFERENCES `book_details` (`id`),
  ADD CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_images`
--
ALTER TABLE `book_images`
  ADD CONSTRAINT `book_images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sold_books`
--
ALTER TABLE `sold_books`
  ADD CONSTRAINT `sold_books_ibfk_1` FOREIGN KEY (`bookdetails_id`) REFERENCES `book_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
