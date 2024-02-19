-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2024 at 11:21 AM
-- Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `mentor`, `title`) VALUES
(1, 'C++', 'Ari', 'Dr.'),
(2, 'C#', 'Ari', 'Dr.'),
(3, 'CSS', 'Cania', 'S.Kom'),
(4, 'Java', 'Darren', 'M.T'),
(5, 'Ruby', 'Darren', 'M.T'),
(6, 'CSS', 'Cania', 'S.Kom'),
(7, 'HTML', 'Cania', 'S.Kom'),
(8, 'Javascript', 'Cania', 'S.Kom'),
(9, 'Python', 'Barry', 'S.T'),
(10, 'Mycrophyton', 'Barry', 'S.T'),
(11, 'Java', 'Darren', 'M.T'),
(12, 'Ruby', 'Darren', 'M.T');

-- --------------------------------------------------------

--
-- Table structure for table `userCourse`
--

CREATE TABLE `userCourse` (
  `id_user` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userCourse`
--

INSERT INTO `userCourse` (`id_user`, `id_course`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 1),
(4, 3),
(4, 5),
(5, 2),
(5, 4),
(5, 6),
(6, 8),
(6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Andi', 'andi@andi.com', '12345', '2024-02-18 19:22:20', '2024-02-18 19:22:20'),
(2, 'Budi', 'budi@mail.com', '67890', '2024-02-18 19:22:44', '2024-02-18 19:22:44'),
(3, 'Caca', 'caca@caca.com', 'abcde', '2024-02-18 19:23:15', '2024-02-18 19:23:15'),
(4, 'Deni', 'deni@deni.com', 'fghij', '2024-02-18 19:23:44', '2024-02-18 19:23:44'),
(5, 'Euis', 'euis@euis.com', 'klmno', '2024-02-18 19:24:07', '2024-02-18 19:24:07'),
(6, 'Fafa', 'fafa@fafa.com', 'pqrst', '2024-02-18 19:24:32', '2024-02-18 19:24:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
