-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 sep 2018 om 19:02
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbconcurrent`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `productname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `naam` varchar(55) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `price` decimal(55,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `naam`, `descr`, `price`) VALUES
(1, 'Diva Plus Transportfiets', 'Merk: Batavus\r\nKleuren: groen, roze, wit\r\nModel: Dames / Lage instap\r\nModeljaar: 2018\r\n', '679'),
(2, 'Wayz', 'Merk: Batavus\r\nKleuren: groen\r\nModel: Dames\r\nModeljaar: 2018\r\n', '669'),
(3, 'Esprit C', 'Merk: Gazelle\r\nKleuren: Zwart\r\nModel: Heren\r\nModeljaar: 2018\r\n', '359'),
(4, 'Orange C7+ HMB', 'Merk: Gazelle\r\nKleuren: Zwart\r\nModel: Heren\r\nModeljaar: 2018\r\n', '1986');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `user_pwd` varchar(55) NOT NULL,
  `zipcode` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkplaats`
--

CREATE TABLE `werkplaats` (
  `naam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `huisnummer` varchar(11) NOT NULL,
  `plaats` varchar(50) NOT NULL,
  `bericht` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ-username` (`firstname`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
