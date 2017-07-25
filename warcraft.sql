-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lip 2017, 23:35
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
  `t_drewna` int(11) NOT NULL,
  `t_wydobycia` int(11) NOT NULL,
  `t_uzbrojenia` int(11) NOT NULL,
  `t_broniPalnej` int(11) NOT NULL,
  `t_opancerzenia` int(11) NOT NULL,
  `t_opancerzenia1` int(11) NOT NULL,
  `t_budownictwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `badania`
--

INSERT INTO `badania` (`nick`, `id`, `t_drewna`, `t_wydobycia`, `t_uzbrojenia`, `t_broniPalnej`, `t_opancerzenia`, `t_opancerzenia1`, `t_budownictwa`) VALUES
('luis', 61, 0, 0, 0, 0, 0, 0, 0),
('kupa', 62, 0, 0, 0, 0, 0, 0, 0),
('daniel', 63, 0, 0, 0, 0, 0, 0, 0),
('arek', 64, 0, 0, 0, 0, 0, 0, 0),
('mama', 65, 2, 1, 1, 0, 1, 1, 0),
('kupka', 66, 0, 0, 0, 0, 0, 0, 0),
('bareek', 67, 0, 0, 0, 0, 0, 0, 0),
('bartek', 68, 1, 0, 0, 0, 0, 0, 0),
('adam', 69, 0, 0, 0, 0, 0, 0, 0);

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
('luis', 79, 'Orkowie', 0, 0, 2, 0, 1, 1, 1),
('kupa', 80, 'Orkowie', 2, 3, 2, 3, 1, 1, 1),
('daniel', 81, 'Orkowie', 2, 3, 3, 0, 1, 1, 1),
('arek', 82, 'Orkowie', 0, 0, 2, 0, 1, 1, 1),
('mama', 83, 'Orkowie', 2, 4, 3, 2, 1, 2, 2),
('kupka', 84, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('bareek', 85, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('bartek', 86, 'Orkowie', 0, 0, 1, 1, 1, 1, 1),
('adam', 87, 'Ludzie', 0, 0, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kolejki`
--

CREATE TABLE `kolejki` (
  `budowy` text NOT NULL,
  `czas_budowy` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `badania` text NOT NULL,
  `czas_badania` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jednostek` text NOT NULL,
  `czas_jednostek` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kolejka_jednostek` text NOT NULL,
  `id` int(11) NOT NULL,
  `nick` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kolejki`
--

INSERT INTO `kolejki` (`budowy`, `czas_budowy`, `badania`, `czas_badania`, `jednostek`, `czas_jednostek`, `kolejka_jednostek`, `id`, `nick`) VALUES
('0', '2017-07-12 22:00:00', '0', '2017-07-12 22:00:00', '0', '2017-07-12 22:00:00', '0', 21, 'luis'),
('barrack', '2017-07-12 22:12:20', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', 22, 'kupa'),
('castle', '2017-07-16 12:29:38', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', 23, 'daniel'),
('castle', '2017-07-16 12:07:28', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', 24, 'arek'),
('0', '2017-07-25 19:00:47', '0', '2017-07-25 19:00:47', '0', '0000-00-00 00:00:00', '0', 25, 'mama'),
('castle', '2017-07-16 21:14:20', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', 26, 'kupka'),
('barrack', '2017-07-16 21:05:26', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', 27, 'bareek'),
('0', '2017-07-25 19:03:37', '0', '2017-07-25 19:03:35', '0', '0000-00-00 00:00:00', '0', 28, 'bartek'),
('barrack', '2017-07-25 19:05:01', 't_broniPalnej', '2017-07-25 19:07:01', '0', '0000-00-00 00:00:00', '0', 29, 'adam');

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
('adam', 1, 0, 0, 0, 0, 0, 0, 0, 2, 3, 0);

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
('luis', 66, 0, 0, 0, 0, 0, 0, 0, 3, 2, 0),
('kupa', 67, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('daniel', 68, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0),
('arek', 69, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('mama', 70, 0, 0, 0, 0, 0, 0, 0, 4, 1, 0),
('kupka', 71, 0, 0, 0, 0, 0, 0, 0, 2, 3, 0),
('bareek', 72, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0),
('bartek', 73, 0, 0, 0, 0, 0, 0, 1, 1, 3, 0);

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
(113, 'kupka', 'Orkowie', 34, '$2y$10$scfWeT040qkO7QistjkqTuuXOIexo0KX77MPFiElB1ZFeun7seg5e', 'popopo@po.pw', 280, 270, 0, '2017-07-16 22:33:22'),
(109, 'kupa', 'Orkowie', 25, '$2y$10$9pzPAjUXUucXpZz9KKwuve2AwMHpIkr5LNK9VBgoYPEhpJVzBlyse', 'kupakupa@pl.pl', 1012, 950, 0, '2017-07-12 23:17:11'),
(110, 'daniel', 'Orkowie', 35, '$2y$10$Z6rSxW6wl/clPcqUoETvZOvsb4pS4Q.aZyUdClaALgE/eeRah8H.u', 'asdd@kp.pl', 2873, 517, 0, '2017-07-16 13:21:55'),
(111, 'arek', 'Orkowie', 27, '$2y$10$T4Aur0L/KiNM1aRlbfeBW.qnu2qAzd4sE18slSMPEEHYpOklIoOfW', 'asd@pl.ps', 250, 250, 0, '2017-07-16 22:28:33'),
(112, 'mama', 'Orkowie', 22, '$2y$10$TdzIGDVdzjIKV0cUhZ0afeD5a5k5w6Xrudmdb4kHODF7UtscH5VvS', 'mamam@mamam.ma', 282, 7045, 0, '2017-07-25 21:00:54'),
(115, 'bartek', 'Orkowie', 23, '$2y$10$a/grKB/A2xkade4x3WAo5O.EN30tBTBCYrae9pI.rejB44IESBte2', 'bartek@op.pl', 306, 305, 0, '2017-07-25 21:04:08'),
(108, 'luis', 'Orkowie', 1, '$2y$10$Z5VgQ5GWkeP7W0fzNxxAD.z4NpV5Xjk8FqhmNdtEMbw/vAfmlc3q2', 'luis@gm.pl', 437, 535, 0, '2017-07-12 18:25:48'),
(114, 'bareek', 'Orkowie', 5, '$2y$10$gMRUSQHPE5hGR5apfw5EpOUU223.bE6VSYjaTPni64PwIerQMv.Wm', 'okdaodk@pd.pl', 650, 700, 0, '2017-07-16 22:40:29'),
(116, 'adam', 'Ludzie', 12, '$2y$10$CvugqpLuag27n2bfGUaiFO7OaQgo0hj4JD7HQ6uNkWH1REVKxp.Ga', 'qwerty@aw.pl', 256, 304, 0, '2017-07-25 21:05:30');

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
-- Indexes for table `kolejki`
--
ALTER TABLE `kolejki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT dla tabeli `kolejki`
--
ALTER TABLE `kolejki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT dla tabeli `ludzie`
--
ALTER TABLE `ludzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `orkowie`
--
ALTER TABLE `orkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
