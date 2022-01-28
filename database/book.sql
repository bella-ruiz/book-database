-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2022 at 11:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `difficulty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `genre`, `difficulty`) VALUES
(2, 'Notes from Underground', 'Fyodor Dostoevsky', 'Classics', 3),
(3, 'Hunger', 'Knut Hamsun', 'Classics', 2),
(4, 'Their Eyes Were Watching God', 'Zora Neale Hurston', 'Fantasy', 3),
(5, '1984', 'George Orwell', 'Fantasy', 2),
(6, 'Fahrenheit 451', 'Ray Bradbury', 'Fantasy', 3),
(8, 'The Catcher in the Rye', 'J. D. Salinger', 'Classics', 3),
(9, 'Chi\\\'s Sweet Home Vol. 1', 'Kanata Konami', 'Manga', 1),
(10, 'The Nose', 'Nikolai Gogol', 'Classics', 4),
(11, 'Beloved', 'Toni Morrison', 'Fantasy', 3),
(12, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Classics', 2),
(13, 'Things Fall Apart', 'Chinua Achebe', 'Classics', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
