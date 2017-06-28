-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Cze 2017, 16:51
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
-- Struktura tabeli dla tabeli `badania`
--

CREATE TABLE `badania` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
  `Tdrewna` int(11) NOT NULL,
  `Twydobycia` int(11) NOT NULL,
  `Tuzbrojenia` int(11) NOT NULL,
  `TbroniPalnej` int(11) NOT NULL,
  `Topancerzenia` int(11) NOT NULL,
  `Topancerzenia1` int(11) NOT NULL,
  `Tbudownictwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `budynki`
--

CREATE TABLE `budynki` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
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

INSERT INTO `budynki` (`nick`, `id`, `rasa`, `altar`, `barrack`, `castle`, `forge`, `house`, `tower`, `tartak`) VALUES
('ludz', 14, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('ork', 15, 'Orkowie', 0, 0, 0, 0, 0, 0, 0),
('ludz12356', 16, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('qwertyu', 17, 'Ludzie', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ludzie`
--

CREATE TABLE `ludzie` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
  `miecznicy` int(11) NOT NULL,
  `strzelcy` int(11) NOT NULL,
  `artyleria` int(11) NOT NULL,
  `kaplani` int(11) NOT NULL,
  `czarodziejki` int(11) NOT NULL,
  `rycerze` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ludzie`
--

INSERT INTO `ludzie` (`nick`, `id`, `miecznicy`, `strzelcy`, `artyleria`, `kaplani`, `czarodziejki`, `rycerze`, `robotnicy`) VALUES
('ludz', 2, 0, 0, 0, 0, 0, 0, 0),
('ludz12356', 3, 0, 0, 0, 0, 0, 0, 0),
('qwertyu', 4, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orkowie`
--

CREATE TABLE `orkowie` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
  `siepacze` int(11) NOT NULL,
  `lowcyGlow` int(11) NOT NULL,
  `katapulty` int(11) NOT NULL,
  `szamani` int(11) NOT NULL,
  `doktorzyVodo` int(11) NOT NULL,
  `jezdzcy` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `orkowie`
--

INSERT INTO `orkowie` (`nick`, `id`, `siepacze`, `lowcyGlow`, `katapulty`, `szamani`, `doktorzyVodo`, `jezdzcy`, `robotnicy`) VALUES
('ork', 10, 0, 0, 0, 0, 0, 0, 0);

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
(43, 'ludz', '$2y$10$DqsL.3ZTuGCSkqI0WPjUt.wDw2HykRd.GZGtibtBIMFT4Ov7zUOu2', 'ludz1@gmail.com', 2941, 2941, 2941, '2017-06-28 16:35:36'),
(44, 'ork', '$2y$10$QtnsrgN9Qfq94wk14Y4xweMy75ccKhfHtERfdZSZPC3pfjHnKbyjS', 'ork@gmail.com', 100, 100, 100, '2017-06-28 15:24:05'),
(45, 'ludz12356', '$2y$10$88dNLlM0Q7n6maombbUrF.enBzvc0sHY/fVBPF2EMVJntfC27qjsO', 'iuwfhcskj@gmail.com', 230, 230, 230, '2017-06-28 16:44:15'),
(46, 'qwertyu', '$2y$10$ujrQ40ZaYtqad145sJ9L6eSBFYzB6CChE4Aze8ZtQF0deownLPzhC', 'yluis@ludsfh.pl', 100, 100, 100, '2017-06-28 16:49:13');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `badania`
--
ALTER TABLE `badania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budynki`
--
ALTER TABLE `budynki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ludzie`
--
ALTER TABLE `ludzie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orkowie`
--
ALTER TABLE `orkowie`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT dla tabeli `badania`
--
ALTER TABLE `badania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT dla tabeli `ludzie`
--
ALTER TABLE `ludzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `orkowie`
--
ALTER TABLE `orkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
