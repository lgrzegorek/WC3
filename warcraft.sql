-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2017, 15:48
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `warcraft`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budynki`
--

CREATE TABLE `budynki` (
  `nick` text NOT NULL,
  `rasa` text NOT NULL,
  `altar` int(11) NOT NULL,
  `barrack` int(11) NOT NULL,
  `castle` int(11) NOT NULL,
  `forge` int(11) NOT NULL,
  `house` int(11) NOT NULL,
  `tower` int(11) NOT NULL,
  `tartak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `budynki`
--

INSERT INTO `budynki` (`nick`, `rasa`, `altar`, `barrack`, `castle`, `forge`, `house`, `tower`, `tartak`) VALUES
('ksdjoldjgs', 'Orkowie', 0, 0, 0, 0, 0, 0, 0),
('adam', 'Orkowie', 0, 0, 0, 0, 0, 0, 0),
('bartek', 'Orkowie', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ludzie`
--

CREATE TABLE `ludzie` (
  `nick` text NOT NULL,
  `miecznicy` int(11) NOT NULL,
  `strzelcy` int(11) NOT NULL,
  `artyleria` int(11) NOT NULL,
  `kaplani` int(11) NOT NULL,
  `czarodziejki` int(11) NOT NULL,
  `rycerze` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orkowie`
--

CREATE TABLE `orkowie` (
  `nick` text NOT NULL,
  `siepacze` int(11) NOT NULL,
  `lowcyGlow` int(11) NOT NULL,
  `katapulty` int(11) NOT NULL,
  `szamani` int(11) NOT NULL,
  `doktorzyVodo` int(11) NOT NULL,
  `jezdzcy` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `drewno` int(11) NOT NULL,
  `zloto` int(11) NOT NULL,
  `zywnosc` int(11) NOT NULL,
  `ostatnieLogowanie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `drewno`, `zloto`, `zywnosc`, `ostatnieLogowanie`) VALUES
(26, 'adam', '$2y$10$bWUIczQkytnU65M0sVbzY.3fivRlZKKGP9XQMydikJ5sTYW6CTeKO', 'aiouds@gmail.com', 100, 100, 100, '2017-06-10 02:09:54'),
(27, 'bartek', '$2y$10$JmwwgVfI3Q8NEAf9ks1E5u3ej.4gHj2kiaoste3vR.vnAkncbWtgu', 'bartek@gmail.com', 100, 100, 100, '2017-06-09 22:48:17'),
(25, 'ksdjoldjgs', '$2y$10$TVec0dzmmI87FPW2wDRtdO0fbEozIPI08U/ywPqdxwZHjYHXQmZYu', 'klggmn@gmail.com', 100, 100, 100, '2017-06-08 18:23:50');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
