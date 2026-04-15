-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2026 at 05:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `pass`, `role`) VALUES
(5, 'admin2', 'admin2@gmail.com', '$2y$10$Pt.1bhT3YRx5Z6FusBw4BerbwXHmZWrxHS4Zc7s.P1SoiXr9JtmKS', 'admin'),
(6, 'admin yayuk', 'admin@gmail.com', '$2y$10$uiE1uN97kv1xzF.A7aPKgOgnTfeWxHNwVT5nuxpN/st9.QTnJgy46', 'admin'),
(7, 'admin yayuk', 'admin@gmail.com', '1234', 'admin'),
(8, 'rafli', 'rafli@gmail.com', '$2y$10$VQ6mCRJO9L0ShUFuEusG3eZ8CVL9Owq5Mpcw/Ge/lPLK9VzPlSqDG', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `role` enum('client') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_user`, `username`, `pass`, `role`, `email`) VALUES
(1, NULL, '$2y$10$jarYcJIDSG.D4QiZacTZzepBfNSNY0LdCGE/Q3IVjvqhgobnlz6/S', 'client', 'tegar@gmail.com'),
(2, NULL, '$2y$10$HkwgSnN0Pt0BE6Dal6i1kOouYVxRBYOCcqN2VtjQa5dOXCG8RoXd2', 'client', 'tegars@gmail.com'),
(3, NULL, '$2y$10$3VMD6XeAHwnsB0TT7oZHPeMXshE4qoL9vD/QZGIqynsBVOZbmQjXO', 'client', 'fli@gmail.com'),
(4, NULL, '$2y$10$w/sKvnXzrd7IyctHxzVb.OjJ3TlD/i4K9qiI6QmFC7I7VpObtS8Jy', 'client', 'zain@gmail'),
(7, NULL, '$2y$10$Cg0DuwBhhdKPI0aRWb/cJOC2pbxSuB4zMJfgnFojAhvKSituKs0O2', 'client', 'client@gmail.com'),
(8, NULL, '$2y$10$JWPH8DfrRFV93YZQNYTSUer7VYdxmozWWDJk5Vb1hdLbhfoQ2WL9O', 'client', 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
