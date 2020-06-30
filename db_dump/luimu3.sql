-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2020 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luimu`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'generic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `link`, `category`) VALUES
(1, 'Minecraft PvP-texturepack(1.8.9)', 'https://github.com/luimu64/luimu64.github.io/raw/master/lataukset/luumupack.zip', 'generic'),
(2, 'Aspect ratio calculator with tkinter', 'https://github.com/luimu64/luimu64.github.io/raw/master/lataukset/kuvasuhde.zip', 'generic'),
(3, 'Mass image converter', 'https://github.com/luimu64/luimu64.github.io/raw/master/lataukset/Massconverter-final-v3.7z', 'generic'),
(4, 'Bad windows 10 virus', 'https://github.com/luimu64/luimu64.github.io/raw/master/lataukset/lvirus.zip', 'generic');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `link`) VALUES
(1, 'Avengers Infinity War', 'https://mega.nz/embed#!x0BSQaQQ!MlkU-23vqjNMC5ja5_azOU-h0_NmFVQj44LKFunP0ms'),
(2, 'Avengers Endgame', 'https://mega.nz/embed#!gwIDQYTJ!4gX5G1-JlpHMuNk8uNYaMHImH-NkCjFPVHLvctjWFho'),
(3, 'Joker', 'https://mega.nz/embed#!k5wB3ahL!rxFfPbQdvHPNKb7DrVBJJrstXHzP9VQGOaCcQ1UfpP8'),
(4, 'Your Name', 'https://mega.nz/embed#!VgwDDSIa!Y7-NI0LdtUNbnBOZclGTWk3o0PrAO5E6Zy-WUOoamL4'),
(5, 'testi', 'https://www.youtube.com/embed/HkfMFSzkEjg');

-- --------------------------------------------------------

--
-- Table structure for table `registering_keys`
--

CREATE TABLE `registering_keys` (
  `id` int(11) NOT NULL,
  `sckey` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SMAL`
--

CREATE TABLE `SMAL` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '~',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'planning'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `SMAL`
--

INSERT INTO `SMAL` (`id`, `name`, `score`, `status`) VALUES
(1, 'Gabriel Dropout', '9', 'watched'),
(2, 'Lucky Star', '~', 'planning'),
(3, 'A certain Specific Railgun T', '0', 'watching'),
(7, 'Katanagatari', '9', 'watched'),
(8, 'Parasite', '7', 'watched'),
(10, 'Girl&#39;s Last Journey', '10', 'planning'),
(11, 'Yuru Yuri', '5', 'watched'),
(12, 'Girls und Panzer', '8', 'watched');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(1, 's', '$2y$10$JeisxwaCHAH4V42b7eX0Ou8jWItKfC2DORQKSWJglJNgjpVl5PJDS', 0),
(2, 'a', '$2y$10$y3G0Oyqim00j/TpJ7xs5C.tjZ/8E9gmEkK1JEirvn9EcWxCKlUYqG', 0),
(69, 'luimu', '$2y$10$MLhBKXb8V.wfEmI6aBKG..IxUnejfW/.w04mm3fnepywB6FoEGerC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registering_keys`
--
ALTER TABLE `registering_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SMAL`
--
ALTER TABLE `SMAL`
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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registering_keys`
--
ALTER TABLE `registering_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `SMAL`
--
ALTER TABLE `SMAL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
