-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2019 at 11:05 PM
-- Server version: 5.7.20
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklist`
--
CREATE DATABASE IF NOT EXISTS `booklist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `booklist`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` enum('J.K. Rowling','Dan Brown') NOT NULL,
  `name` text NOT NULL,
  `count` int(11) NOT NULL,
  `desc` text,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author`, `name`, `count`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'J.K. Rowling', 'Harry Potter and the Philosopher\'s Stone', 350, 'Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, o', 'hp1.jpeg', '2019-08-27 17:00:59', '2019-08-27 17:00:59'),
(2, 'J.K. Rowling', 'Harry Potter and the Chamber of Secrets', 312, 'Harry Potter’s summer has included the worst birthday ever, doomy warnings from a house-elf called Dobby, and rescue from the Dursleys by his friend Ron Weasley in a magical flying car! Back at Hogwarts School of Witchcraft and Wizardry for his second yea', 'hp2.jpeg', '2019-08-27 17:02:59', '2019-08-27 17:02:59'),
(3, 'J.K. Rowling', 'Harry Potter and the Prisoner of Azkaban', 408, 'When the Knight Bus crashes through the darkness and screeches to a halt in front of him, it’s the start of another far from ordinary year at Hogwarts for Harry Potter. Sirius Black, escaped mass-murderer and follower of Lord Voldemort, is on the run – an', 'hp3.jpeg', '2019-08-27 17:06:18', '2019-08-27 17:06:18'),
(4, 'J.K. Rowling', 'Harry Potter and the Goblet of Fire', 372, 'The Triwizard Tournament is to be held at Hogwarts. Only wizards who are over seventeen are allowed to enter – but that doesn’t stop Harry dreaming that he will win the competition.', 'hp4.jpeg', '2019-08-27 17:07:21', '2019-08-27 17:07:21'),
(5, 'J.K. Rowling', 'Harry Potter and the Order of the Phoenix', 325, 'Dark times have come to Hogwarts. After the Dementors’ attack on his cousin Dudley, Harry Potter knows that Voldemort will stop at nothing to find him. There are many who deny the Dark Lord’s return, but Harry is not alone: a secret order gathers at Grimm', 'hp5.jpeg', '2019-08-27 17:08:26', '2019-08-27 17:08:26'),
(6, 'Dan Brown', 'Origin', 412, 'Origin thrusts Robert Langdon into the dangerous intersection of humankind’s two most enduring questions.', 'origin.jpg', '2019-08-27 17:09:52', '2019-08-27 17:09:52'),
(7, 'Dan Brown', 'The Da Vinci Code', 423, 'The Greatest Conspiracy of the past 2000 years is about to unravel...', 'code_da_vinchi.jpg', '2019-08-27 17:10:33', '2019-08-27 17:10:33'),
(8, 'Dan Brown', 'Inferno', 502, 'Drawing from Dante’s dark epic poem, Langdon races to find answers and decide whom to trust . . .', 'inferno.jpg', '2019-08-27 17:11:11', '2019-08-27 17:11:11'),
(9, 'Dan Brown', 'Angels & Demons', 478, 'The Illuminati has surfaced to carry out its legendary vendetta against its most hated enemy... the Catholic Church.', 'angels_and_demons.jpg', '2019-08-27 17:11:48', '2019-08-27 17:11:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
