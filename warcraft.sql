-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Cze 2017, 19:47
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

--
-- Zrzut danych tabeli `badania`
--

INSERT INTO `badania` (`nick`, `id`, `Tdrewna`, `Twydobycia`, `Tuzbrojenia`, `TbroniPalnej`, `Topancerzenia`, `Topancerzenia1`, `Tbudownictwa`) VALUES
('teraz', 1, 0, 0, 0, 0, 0, 0, 0),
('emil', 2, 0, 0, 0, 0, 0, 0, 0),
('jurek', 3, 0, 0, 0, 0, 0, 0, 0),
('jerzy', 4, 0, 0, 0, 0, 0, 0, 0);

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
  `magazynZlota` int(11) NOT NULL,
  `magazynDrewna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `budynki`
--

INSERT INTO `budynki` (`nick`, `id`, `rasa`, `altar`, `barrack`, `castle`, `forge`, `house`, `magazynZlota`, `magazynDrewna`) VALUES
('ludz', 14, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('ork', 15, 'Orkowie', 0, 0, 0, 0, 0, 0, 0),
('ludz12356', 16, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('qwertyu', 17, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('dupa', 18, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('teraz', 19, 'Ludzie', 0, 0, 0, 0, 0, 0, 0),
('emil', 20, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('jurek', 21, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('jerzy', 22, 'Orkowie', 0, 0, 1, 0, 1, 1, 1);

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
  `robotnicy` int(11) NOT NULL,
  `robotnicyZloto` int(11) NOT NULL,
  `robotnicyDrewno` int(11) NOT NULL,
  `robotnicyBudowa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ludzie`
--

INSERT INTO `ludzie` (`nick`, `id`, `miecznicy`, `strzelcy`, `artyleria`, `kaplani`, `czarodziejki`, `rycerze`, `robotnicy`, `robotnicyZloto`, `robotnicyDrewno`, `robotnicyBudowa`) VALUES
('ludz', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ludz12356', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('qwertyu', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('teraz', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `robotnicy` int(11) NOT NULL,
  `robotnicyZloto` int(11) NOT NULL,
  `robotnicyDrewno` int(11) NOT NULL,
  `robotnicyBudowa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `orkowie`
--

INSERT INTO `orkowie` (`nick`, `id`, `siepacze`, `lowcyGlow`, `katapulty`, `szamani`, `doktorzyVodo`, `jezdzcy`, `robotnicy`, `robotnicyZloto`, `robotnicyDrewno`, `robotnicyBudowa`) VALUES
('ork', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('emil', 11, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('jerzy', 12, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0);

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
(51, 'jerzy', '$2y$10$OGXxyhknqyaPUlYt9VBAQuS.nSwwVtiuhdQXntDyGAe41VolNOtoq', 'gaskjd@pl.pl', 1013, 1013, 13, '2017-06-28 19:47:01'),
(50, 'jurek', '$2y$10$YlaxpGrtA9IA5oBIOGsXYu9YR98dGH5TGIkQMYH6FNKL9MIiPR7se', 'jaskasd@op.pl', 1000, 1000, 0, '2017-06-28 19:45:46'),
(49, 'emil', '$2y$10$eZFNI.cQ4/5U4UOO8DgvjOEkvanbSCrBMkj93XJU6aRkptnXLvKye', 'sdfjkas@op.po', 1000, 1000, 0, '2017-06-28 19:31:51'),
(43, 'ludz', '$2y$10$DqsL.3ZTuGCSkqI0WPjUt.wDw2HykRd.GZGtibtBIMFT4Ov7zUOu2', 'ludz1@gmail.com', 12179, 12179, 12179, '2017-06-28 19:09:34'),
(44, 'ork', '$2y$10$QtnsrgN9Qfq94wk14Y4xweMy75ccKhfHtERfdZSZPC3pfjHnKbyjS', 'ork@gmail.com', 100, 100, 100, '2017-06-28 15:24:05'),
(45, 'ludz12356', '$2y$10$88dNLlM0Q7n6maombbUrF.enBzvc0sHY/fVBPF2EMVJntfC27qjsO', 'iuwfhcskj@gmail.com', 230, 230, 230, '2017-06-28 16:44:15'),
(46, 'qwertyu', '$2y$10$ujrQ40ZaYtqad145sJ9L6eSBFYzB6CChE4Aze8ZtQF0deownLPzhC', 'yluis@ludsfh.pl', 8412, 8412, 8412, '2017-06-28 19:07:45'),
(47, 'dupa', '$2y$10$pgENmgwu7qmE240FUXr0k.0B0wAhreW60m0zQlB89q7o3wb0Dgmyi', 'jalk@lksd.pl', 100, 100, 100, '2017-06-28 19:14:43'),
(48, 'teraz', '$2y$10$mthm3vJw.oWAyzpOQ1.v4e8VRmKORutVftxknOUb96TZ6CKyeRoH.', 'iuer@hdfslk.pl', 100, 100, 100, '2017-06-28 19:18:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT dla tabeli `ludzie`
--
ALTER TABLE `ludzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `orkowie`
--
ALTER TABLE `orkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
