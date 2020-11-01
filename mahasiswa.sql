-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 04:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurursan` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `jurursan`, `foto`) VALUES
(1, 'syahiddddddd', 'syahid@hudzzz.com', 'TI', 'syahid.jpg'),
(2, 'anonymus', 'anonymus@hudzzz.com', 'cybersec', 'anonimus.jpg'),
(6, 'wizard', 'wizard@hudzzz.com', 'matematic', 'wizard.jpg'),
(13, 'syahidd', 'eva@hudzzz.com', 'Perbankan', 'eva.jpg'),
(14, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(15, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '5f946b60d9188.jpg'),
(16, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(18, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(19, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(20, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '5f946b7ca7ad3.jpg'),
(24, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(25, 'jamilah', 'jamilah@hudzzz.com', '&lt;h1&gt; komunikasi &lt;/h1&gt;', 'jamilah.jpg'),
(26, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', 'jamilah.jpg'),
(27, '', '', '', 'PROFSAVE'),
(28, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '1'),
(29, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '1'),
(30, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '1'),
(31, 'asd', '', '', '1'),
(33, 'joko', 'joko@hudzzz.com', 'syamsudin', '__flandre_scarlet_and_remilia_scarlet_touhou_drawn_by_suwa_yasai__81a2f6fc99c6ef552cfc2f61cc677fa9.j'),
(37, '', '', '', '__flandre_scarlet_and_remilia_scarlet_touhou_drawn_by_suwa_yasai__81a2f6fc99c6ef552cfc2f61cc677fa9.j'),
(39, 'jamilah', 'jamilah@hudzzz.com', 'Komunikasi', '5f93100edd606.jpg'),
(40, 'joko', 'jamilah@hudzzz.com', 'Komunikasi', '5f93102fce727.png'),
(41, 'jamilah', 'jamilah@hudzzz.com', 'RPL', '5f9314ce37278.jpg'),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, 'joko', 'jamilah@hudzzz.com', 'Komunikasi', '5f9917921b356.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'hudzaifahzzz', '$2y$10$xCXcch7jWxMN1T8.Mn8c/eDbr.g8m4UDSgkS1iex8ttw.sgMZrFDe'),
(4, 'hudzaifahzzz', '$2y$10$kSphJmMQHbQyQr4c.ncIXesfFJ2eQqaF1YzsgWu.27016uAklazpS'),
(5, 'hudzaifahzzz', '$2y$10$JD6TDliwHUsleEcw92xH4OSvwMcbpSxflNwO9knqxMbVDhKWlXQPK'),
(6, 'hudzaifahzzz', '$2y$10$3oeSPPUNpRiRBwo1wvHV/..VdmIB4GDPRLB464YCi3tBYuNCcnAgC'),
(7, 'hudzaifahzzz', '$2y$10$De34htbaliaM8WEvi0Kkdu6mmIQNcHS5LlF036SorAPz9B/Ge6HtO'),
(8, 'wizard', '$2y$10$MUtX8iBJ9X.jL9nwd4hn6emo7sdO2fquTMvregu0o8aC02mXdtGIu'),
(9, 'asd', '$2y$10$Y2l8WNbF8BJZToEUm3ePmetuZmsLo1Lr5qcJzMjkLRDahhSWQ7..G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
