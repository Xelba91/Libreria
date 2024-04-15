-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 15, 2024 alle 16:29
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestione_libreria`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `libri`
--

CREATE TABLE `libri` (
  `id` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `autore` varchar(100) NOT NULL,
  `anno_pubblicazione` int(4) NOT NULL,
  `genere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `libri`
--

INSERT INTO `libri` (`id`, `titolo`, `autore`, `anno_pubblicazione`, `genere`) VALUES
(6, 'Harry potter e la camera dei segreti', 'J. K. Rowling', 1998, 'Fantasy'),
(9, 'Sognerò', 'Riccardo Scamarcio', 2000, 'Romanzo'),
(11, 'Harry potter e la pietra filosofale', 'J. K. Rowling', 1997, 'Fantasy'),
(12, 'Harry potter e il prigioniero di Azkaban', 'J. K. Rowling', 2000, 'Fantasy'),
(13, 'Il signore degli anelli Le due torri', 'J.R.R Tolkien', 1954, 'Fantasy'),
(16, 'la torre', 'Riccardo Salzini', 2001, 'Romanzo'),
(17, 'l\'Amore è sacro', 'Leonardo Vettore', 2013, 'Romanzo'),
(18, 'Il signore degli anelli - La compagnia dell\'anello', 'J.R.R Tolkien', 1977, 'Fantasy');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
