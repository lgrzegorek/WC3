-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Cze 2017, 17:43
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
('bartek', 6, 3, 0, 2, 0, 0, 0, 0),
('daniel', 7, 0, 0, 0, 0, 0, 0, 0),
('qwerty', 8, 0, 0, 0, 0, 0, 0, 0),
('wewewe', 9, 0, 0, 0, 0, 0, 0, 0),
('uyuy', 10, 0, 0, 0, 0, 0, 0, 0),
('popopo', 11, 0, 0, 0, 0, 0, 0, 0),
('tgtgtg', 12, 0, 0, 0, 0, 0, 0, 0),
('ijijij', 13, 0, 0, 0, 0, 0, 0, 0),
('hbhb', 14, 0, 0, 0, 0, 0, 0, 0),
('kjkjkj', 15, 0, 0, 0, 0, 0, 0, 0),
('sjgf', 16, 0, 0, 0, 0, 0, 0, 0),
('ajsdgkj', 17, 0, 0, 0, 0, 0, 0, 0),
('lkagsljgf', 18, 0, 0, 0, 0, 0, 0, 0),
('jsfdgkg', 19, 0, 0, 0, 0, 0, 0, 0),
('asdasd', 20, 0, 0, 0, 0, 0, 0, 0),
('asfasdf', 21, 0, 0, 0, 0, 0, 0, 0),
('sdfgjh', 22, 0, 0, 0, 0, 0, 0, 0),
('zxcxz', 23, 0, 0, 0, 0, 0, 0, 0),
('vcbx', 24, 0, 0, 0, 0, 0, 0, 0),
('cxbcv', 25, 0, 0, 0, 0, 0, 0, 0),
('wefds', 26, 0, 0, 0, 0, 0, 0, 0),
('asxcvz', 27, 0, 0, 0, 0, 0, 0, 0),
('msaasdhkn', 28, 0, 0, 0, 0, 0, 0, 0),
('asdaszxc', 29, 0, 0, 0, 0, 0, 0, 0),
('dsdsd', 30, 0, 0, 0, 0, 0, 0, 0),
('owyqdhn', 31, 0, 0, 0, 0, 0, 0, 0),
('safvzxcx', 32, 0, 0, 0, 0, 0, 0, 0),
('zcxhulwqke', 33, 0, 0, 0, 0, 0, 0, 0),
('aqwerqwerweq', 34, 0, 0, 0, 0, 0, 0, 0),
('zxzcvafasfds', 35, 0, 0, 0, 0, 0, 0, 0),
('asdasd', 36, 0, 0, 0, 0, 0, 0, 0),
('zxczxczxc', 37, 0, 0, 0, 0, 0, 0, 0),
('cxzcxzcxz', 38, 0, 0, 0, 0, 0, 0, 0);

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
('bartek', 24, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('daniel', 25, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('qwerty', 26, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('wewewe', 27, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('uyuy', 28, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('popopo', 29, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('tgtgtg', 30, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('ijijij', 31, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('hbhb', 32, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('kjkjkj', 33, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('sjgf', 34, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('ajsdgkj', 35, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('lkagsljgf', 36, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('jsfdgkg', 37, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('asdasd', 38, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('asfasdf', 39, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('sdfgjh', 40, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('zxcxz', 41, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('vcbx', 42, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('cxbcv', 43, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('wefds', 44, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('asxcvz', 45, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('msaasdhkn', 46, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('asdaszxc', 47, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('dsdsd', 48, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('owyqdhn', 49, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('safvzxcx', 50, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('zcxhulwqke', 51, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('aqwerqwerweq', 52, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('zxzcvafasfds', 53, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('asdasd', 54, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('zxczxczxc', 55, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('cxzcxzcxz', 56, 'Ludzie', 0, 0, 1, 0, 1, 1, 1);

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
('bartek', 6, 0, 0, 0, 0, 0, 0, 6, 0, 0, 0),
('cxzcxzcxz', 7, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0);

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
('daniel', 14, 0, 0, 0, 0, 0, 0, 7, 0, 0, 0),
('qwerty', 15, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('wewewe', 16, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('uyuy', 17, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('popopo', 18, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('tgtgtg', 19, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('ijijij', 20, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('hbhb', 21, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('kjkjkj', 22, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('sjgf', 23, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('ajsdgkj', 24, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('lkagsljgf', 25, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('jsfdgkg', 26, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('asdasd', 27, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('asfasdf', 28, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('sdfgjh', 29, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('zxcxz', 30, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('vcbx', 31, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('cxbcv', 32, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('wefds', 33, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('asxcvz', 34, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('msaasdhkn', 35, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('asdaszxc', 36, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('dsdsd', 37, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('owyqdhn', 38, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('safvzxcx', 39, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('zcxhulwqke', 40, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('aqwerqwerweq', 41, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('zxzcvafasfds', 42, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('asdasd', 43, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('zxczxczxc', 44, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `rasa` text COLLATE utf8_polish_ci NOT NULL,
  `wspolrzedna` int(11) NOT NULL,
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

INSERT INTO `uzytkownicy` (`id`, `user`, `rasa`, `wspolrzedna`, `pass`, `email`, `drewno`, `zloto`, `zywnosc`, `ostatnieLogowanie`) VALUES
(54, 'daniel', 'Orkowie', 36, '$2y$10$CqkFFvp7gRvY29Uvgd8AoO6NwF1aGggp9et6GYsrJ4wx0nwP/Ae3O', 'ajsf@pl.pl', 1396, 1396, 0, '2017-06-28 21:47:25'),
(53, 'bartek', 'Ludzie', 3, '$2y$10$/ArIOP7qs9WnzABxSISilOgxqpUND.ykuYoy56HvZNNyHgyk8vijy', 'askhdl@hjk.pl', 5896, 5896, 0, '2017-06-28 22:36:15'),
(85, 'cxzcxzcxz', 'Ludzie', 32, '$2y$10$y47Sg3C8lqCqXYNfsD/5HuZa0WpjKklFjmbZDQ23Pa0fhGmKSYFmS', 'cxzcxzcxz@pl.pl', 1000, 1000, 0, '2017-06-29 17:37:34'),
(84, 'zxczxczxc', 'Orkowie', 13, '$2y$10$wmGGNn2FQAs8psGY9.JeTuram8FTdUPRcOjN5qPAZwluXNYmZCi42', 'zxczxczxc@pl.pl', 1000, 1000, 0, '2017-06-29 17:37:06'),
(83, 'asdasd', 'Orkowie', 5, '$2y$10$3CDE3F5Ita.jvzcAQR1amuByCW8HTbz76y61xxNAa/mwsXpslhut6', 'asdasd@pl.pl', 1000, 1000, 0, '2017-06-29 17:34:18');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT dla tabeli `ludzie`
--
ALTER TABLE `ludzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `orkowie`
--
ALTER TABLE `orkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
