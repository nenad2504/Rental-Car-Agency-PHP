-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 09:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobil`
--

CREATE TABLE `automobil` (
  `id` int(11) NOT NULL,
  `marka` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `automobil`
--

INSERT INTO `automobil` (`id`, `marka`) VALUES
(1, 'Audi'),
(2, 'BMW'),
(3, 'Alfa Romeo'),
(4, 'Mercedes'),
(5, 'Opel');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `id` int(11) NOT NULL,
  `naziv` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`id`, `naziv`) VALUES
(1, 'Sport'),
(2, 'Auto moto'),
(3, 'Zanimljivosti');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUloga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `password`, `email`, `username`, `idUloga`) VALUES
(1, 'jovana', 'Jovanovic', '212121', 'jovana@gmail.com', 'joca', 1),
(2, 'Nenad', 'Jovanovic', '22TI9bJS1SMgI', 'nenad89obr@gmail.com', 'jjsjsj', 2),
(4, 'jovana', 'nikolic', '22plVnkPGz07E', 'jovana2211@gmail.com', 'jovana123', 2),
(5, 'Marko', 'Markovic', '22ckHOn1DF2gc', 'marko@gmail.com', 'marko123', 2),
(6, 'Pera', 'Peric', '22QsPkOI3n19Y', 'pera@gmail.com', 'pera', 2),
(9, 'Stefan', 'Stefanovic', '227f8lrXJyECs', 'stefan@gmail.com', 'stefan123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lokacija`
--

CREATE TABLE `lokacija` (
  `id` int(11) NOT NULL,
  `grad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokacija`
--

INSERT INTO `lokacija` (`id`, `grad`) VALUES
(1, 'Obrenovac'),
(2, 'Beograd'),
(3, 'Novi Sad'),
(4, 'Nis'),
(5, 'Sabac');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `naslov` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sadrzaj` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP,
  `idKorisnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `naslov`, `sadrzaj`, `datum`, `idKorisnik`) VALUES
(1, 'tesy', 'testtt1233', '2019-10-19 13:08:15', 1),
(54, 'tesy', 'testtt1233', '2019-10-19 13:08:15', 1),
(69, 'post32', 'jgfhfghfhgfhg', '2019-10-19 13:13:12', 1),
(70, 'post54', 'nekipostajkajksaksja', '2019-10-19 17:29:19', 1),
(71, 'post322121', '212121sasas', '2019-10-19 17:36:45', 1),
(72, 'xassas', 'asasasa', '2019-10-19 17:49:57', 1),
(73, 'assa', 'sasas', '2019-10-19 17:50:01', 1),
(74, 'nenad', 'nenada', '2019-12-03 21:28:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_kategorija`
--

CREATE TABLE `post_kategorija` (
  `idKategorija` int(11) NOT NULL,
  `idPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_kategorija`
--

INSERT INTO `post_kategorija` (`idKategorija`, `idPost`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `idKorisnika` int(11) NOT NULL,
  `idAutomobila` int(11) NOT NULL,
  `idLokacija` int(11) NOT NULL,
  `datumUzimanja` date NOT NULL,
  `datumVracanja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`idKorisnika`, `idAutomobila`, `idLokacija`, `datumUzimanja`, `datumVracanja`) VALUES
(1, 2, 1, '2019-10-09', '2019-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobil`
--
ALTER TABLE `automobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `idUloga` (`idUloga`);

--
-- Indexes for table `lokacija`
--
ALTER TABLE `lokacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKorisnik` (`idKorisnik`);

--
-- Indexes for table `post_kategorija`
--
ALTER TABLE `post_kategorija`
  ADD KEY `idKategorija` (`idKategorija`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD KEY `idKorisnika` (`idKorisnika`),
  ADD KEY `idAutomobila` (`idAutomobila`),
  ADD KEY `idLokacija` (`idLokacija`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobil`
--
ALTER TABLE `automobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lokacija`
--
ALTER TABLE `lokacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`idUloga`) REFERENCES `uloga` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnik` (`id`);

--
-- Constraints for table `post_kategorija`
--
ALTER TABLE `post_kategorija`
  ADD CONSTRAINT `post_kategorija_ibfk_1` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `post_kategorija_ibfk_2` FOREIGN KEY (`idKategorija`) REFERENCES `kategorija` (`id`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`idKorisnika`) REFERENCES `korisnik` (`id`),
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`idAutomobila`) REFERENCES `automobil` (`id`),
  ADD CONSTRAINT `rezervacija_ibfk_3` FOREIGN KEY (`idLokacija`) REFERENCES `lokacija` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
