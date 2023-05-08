-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Lut 2023, 18:49
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `samurajegra`
--
CREATE DATABASE IF NOT EXISTS `samurajegra` DEFAULT CHARACTER SET utf32 COLLATE utf32_polish_ci;
USE `samurajegra`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rejestr`
--

CREATE TABLE `rejestr` (
  `IdGracza` int(40) NOT NULL,
  `nazwa` varchar(30) COLLATE utf32_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf32_polish_ci NOT NULL,
  `haslo` varchar(30) COLLATE utf32_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `rejestr`
--

INSERT INTO `rejestr` (`IdGracza`, `nazwa`, `email`, `haslo`) VALUES
(1, 'abc', 'Kacperodziemczyk@gmail.com', 'qwert'),
(59, 'adsad', 'szpakowiczk@gmail.com', 'abc'),
(60, 'abc1', 'kubabrzezio@gmail.com', 'qwerty'),
(61, 'abc', 'sadasdasdas', 'qwerty'),
(62, 'abc', 'abc', 'qwert'),
(63, ' 123', '123', '123'),
(64, 'Kacper', 'Kacperodziemczyk@gmail.com', 'qwert');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `rejestr`
--
ALTER TABLE `rejestr`
  ADD PRIMARY KEY (`IdGracza`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `rejestr`
--
ALTER TABLE `rejestr`
  MODIFY `IdGracza` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
