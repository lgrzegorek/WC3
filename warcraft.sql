-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2017, 00:33
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
('daniel', 70, 1, 0, 0, 0, 0, 0, 0),
('arek', 71, 0, 1, 0, 0, 0, 0, 0),
('bartek', 72, 1, 1, 1, 0, 0, 0, 0),
('luisek', 73, 0, 0, 0, 0, 0, 0, 0),
('jurek', 74, 0, 0, 0, 0, 0, 0, 0),
('plplpl', 75, 0, 0, 0, 0, 0, 0, 0),
('kurczak', 76, 0, 0, 0, 0, 0, 0, 0),
('xcxz', 77, 0, 0, 0, 0, 0, 0, 0),
('cczxczx', 78, 0, 0, 0, 0, 0, 0, 0),
('czcxzcxz', 79, 0, 0, 0, 0, 0, 0, 0),
('qrqa', 80, 0, 0, 0, 0, 0, 0, 0),
('masd', 81, 0, 0, 0, 0, 0, 0, 0),
('cxzasv', 82, 0, 0, 0, 0, 0, 0, 0),
('qrqqa', 83, 2, 0, 0, 0, 0, 0, 0),
('dasdax', 84, 0, 0, 0, 0, 0, 0, 0),
('krzycho5434', 85, 0, 0, 0, 0, 0, 0, 0);

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
('daniel', 88, 'Orkowie', 1, 2, 2, 0, 1, 1, 1),
('arek', 89, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('bartek', 90, 'Orkowie', 2, 2, 3, 0, 1, 1, 1),
('luisek', 91, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('jurek', 92, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('plplpl', 93, 'Ludzie', 0, 0, 1, 1, 1, 1, 1),
('kurczak', 94, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('xcxz', 95, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('cczxczx', 96, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('czcxzcxz', 97, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('qrqa', 98, 'Orkowie', 0, 1, 2, 0, 2, 1, 1),
('masd', 99, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('cxzasv', 100, 'Ludzie', 0, 0, 1, 0, 1, 1, 1),
('qrqqa', 101, 'Ludzie', 2, 3, 2, 0, 3, 1, 1),
('dasdax', 102, 'Orkowie', 0, 0, 1, 0, 1, 1, 1),
('krzycho5434', 103, 'Orkowie', 0, 0, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kolejki`
--

CREATE TABLE `kolejki` (
  `budowy` text NOT NULL,
  `czas_budowy` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `badania` text NOT NULL,
  `czas_badania` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jednostek` text NOT NULL,
  `czas_jednostek` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dodatkowe_sekundy` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nick` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kolejki`
--

INSERT INTO `kolejki` (`budowy`, `czas_budowy`, `badania`, `czas_badania`, `jednostek`, `czas_jednostek`, `dodatkowe_sekundy`, `id`, `nick`) VALUES
('0', '2017-07-26 13:42:05', 't_wydobycia', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 30, 'daniel'),
('barrack', '2017-07-25 21:43:44', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 31, 'arek'),
('0', '2017-08-09 14:49:46', '0', '2017-08-09 10:24:46', '0', '0000-00-00 00:00:00', 0, 32, 'bartek'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 33, 'luisek'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 34, 'jurek'),
('0', '2017-08-11 15:27:12', '0', '0000-00-00 00:00:00', '_0_0_1_2', '0000-00-00 00:00:00', 0, 35, 'plplpl'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 36, 'czcxzcxz'),
('0', '2017-08-18 14:28:18', '0', '0000-00-00 00:00:00', '', '2017-08-18 14:26:00', 0, 37, 'qrqa'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 38, 'cxzasv'),
('0', '2017-09-05 16:43:25', '0', '2017-08-26 12:31:15', 'miecznicy-strzelcy-strzelcy-strzelcy-strzelcy-strzelcy-strzelcy-', '2017-09-05 16:51:59', 0, 39, 'qrqqa'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0, 40, 'dasdax'),
('0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 'siepacze-siepacze-siepacze-siepacze-siepacze-lowcy_glow-lowcy_glow-', '2017-09-04 20:56:14', 0, 41, 'krzycho5434');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ludzie`
--

CREATE TABLE `ludzie` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
  `miecznicy` int(11) NOT NULL,
  `strzelcy` int(11) NOT NULL,
  `kanonierzy` int(11) NOT NULL,
  `zyrokoptery` int(11) NOT NULL,
  `czarodziejki` int(11) NOT NULL,
  `rycerze` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL,
  `robotnicyZloto` int(11) NOT NULL,
  `robotnicyDrewno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ludzie`
--

INSERT INTO `ludzie` (`nick`, `id`, `miecznicy`, `strzelcy`, `kanonierzy`, `zyrokoptery`, `czarodziejki`, `rycerze`, `robotnicy`, `robotnicyZloto`, `robotnicyDrewno`) VALUES
('arek', 2, 0, 0, 0, 0, 0, 0, 0, 5, 0),
('luisek', 3, 0, 0, 0, 0, 0, 0, 5, 0, 0),
('plplpl', 4, 0, 0, 0, 0, 0, 0, 5, 0, 0),
('cxzasv', 5, 0, 0, 0, 0, 0, 0, 5, 0, 0),
('qrqqa', 6, 18, 1, 0, 3, 3, 0, 0, 4, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orkowie`
--

CREATE TABLE `orkowie` (
  `nick` text NOT NULL,
  `id` int(11) NOT NULL,
  `siepacze` int(11) NOT NULL,
  `lowcy_glow` int(11) NOT NULL,
  `kodo` int(11) NOT NULL,
  `szamani` int(11) NOT NULL,
  `taureni` int(11) NOT NULL,
  `jezdzcy` int(11) NOT NULL,
  `robotnicy` int(11) NOT NULL,
  `robotnicyZloto` int(11) NOT NULL,
  `robotnicyDrewno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `orkowie`
--

INSERT INTO `orkowie` (`nick`, `id`, `siepacze`, `lowcy_glow`, `kodo`, `szamani`, `taureni`, `jezdzcy`, `robotnicy`, `robotnicyZloto`, `robotnicyDrewno`) VALUES
('daniel', 74, 0, 0, 0, 0, 0, 0, 0, 0, 5),
('bartek', 75, 0, 0, 0, 0, 0, 0, 0, 3, 2),
('czcxzcxz', 76, 0, 0, 0, 0, 0, 0, 5, 0, 0),
('qrqa', 77, 116, 4, 0, 0, 1, 0, 0, 3, 2),
('dasdax', 78, 0, 0, 0, 0, 0, 0, 5, 0, 0),
('krzycho5434', 79, 0, 0, 0, 0, 0, 0, 0, 4, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ranking`
--

CREATE TABLE `ranking` (
  `nick` text NOT NULL,
  `punkty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ruchy_wojsk`
--

CREATE TABLE `ruchy_wojsk` (
  `id` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `do` int(11) NOT NULL,
  `misja` text NOT NULL,
  `zloto` int(11) NOT NULL,
  `drewno` int(11) NOT NULL,
  `faza` text NOT NULL,
  `czas_dotarcia` datetime NOT NULL,
  `czas_wymarszu` datetime NOT NULL,
  `jednostka_0` int(11) NOT NULL,
  `jednostka_1` int(11) NOT NULL,
  `jednostka_2` int(11) NOT NULL,
  `jednostka_3` int(11) NOT NULL,
  `jednostka_4` int(11) NOT NULL,
  `jednostka_5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ruchy_wojsk`
--

INSERT INTO `ruchy_wojsk` (`id`, `z`, `do`, `misja`, `zloto`, `drewno`, `faza`, `czas_dotarcia`, `czas_wymarszu`, `jednostka_0`, `jednostka_1`, `jednostka_2`, `jednostka_3`, `jednostka_4`, `jednostka_5`) VALUES
(1, 2, 3, 'atakuj', 444, 222, '1', '2017-09-07 00:00:00', '2017-09-21 13:02:22', 2, 3, 1, 3, 4, 2),
(2, 2, 30, 'stacjonuj', 0, 0, '1', '2017-09-06 00:06:42', '2017-09-09 01:06:42', 0, 0, 0, 0, 0, 0);

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
(132, 'krzycho5434', 'Orkowie', 18, '$2y$10$0nXzbq5q.t93HrCIcwLlg.93Mb3PgOK/74jFvtvEiKcWAODzxYn4.', 'ewfewrt@gmail.com', 746, 35, 0, '2017-09-04 22:57:25'),
(131, 'dasdax', 'Orkowie', 20, '$2y$10$rY9UJEoZX27joYZuMGTFNuWYXlwJlZ.CADYIWlHgmTOjehXM2Ov1i', 'dasda@pl.pl', 1000, 1000, 0, '2017-09-04 14:11:53'),
(127, 'qrqa', 'Orkowie', 3, '$2y$10$6zmpBsEmBCdU5jd1Gz7W/.m4TIdll/tdL7tr92v4Hwrw7ueaH2bQ2', 'qcz@dl.pl', 3779, 3992, 0, '2017-08-18 16:28:19'),
(128, 'masd', 'Orkowie', 19, '$2y$10$I07n.9R0g/5cIOUI.AQrcuS7HerVNF.KBSgk2YQTujsjjTnI6Xv2S', 'masmdamdas@sd.pl', 1000, 1000, 0, '2017-08-11 19:56:51'),
(129, 'cxzasv', 'Ludzie', 35, '$2y$10$3TlMutFd9Ntbg.ALanK03.ddNtYw4QByr5wlrp65LObaTnVy/uldW', 'dsadasc@fgm.pld', 1000, 1000, 0, '2017-08-11 19:58:07'),
(130, 'qrqqa', 'Ludzie', 2, '$2y$10$bkSsFOx8X8IhmML2bkmNLOuTlKf/iLm5KBo/j/jGZvKeinl5YF0b.', 'qweqweqwe@p.pls', 5000, 5000, 0, '2017-09-05 22:33:06'),
(117, 'daniel', 'Orkowie', 0, '$2y$10$iol29QZ12J.B5ESHiipR6eW4ltRftA/XUtyFr6rv9hpavju.1L/Qa', 'dsadasc@fgm.pl', 3366, 3402, 0, '2017-07-26 15:42:05'),
(118, 'arek', 'Ludzie', 30, '$2y$10$mVQJ/E0MS8gOZ4d/hLfFZe76L.7xo0IBNpTt/aWCZuSwETYXgxJRm', 'arek@dsa.pl', 250, 5000, 0, '2017-07-26 15:38:50'),
(119, 'bartek', 'Orkowie', 14, '$2y$10$luTskef5BkYWry7iDbjkE.yn2ecdeW68IZ1FDHdX4jeLKMINqIOqS', 'saw212@dp.pl', 5000, 5000, 0, '2017-08-11 11:12:35'),
(120, 'luisek', 'Ludzie', 24, '$2y$10$yeeP.vtEvG0v0ZL0GEqzYegYWB9MoeAreJYYdDmkCJjxz9X8B1GvG', 'qweqweqwe@p.pl', 1000, 1000, 0, '2017-08-11 11:29:54'),
(121, 'jurek', 'Ludzie', 15, '$2y$10$5eaXDyF5AchxwCOY.ZJ22.IssOX1VY129dExMRxG4hcFTknjtosv6', 'kupakupa@pl.pl', 1000, 1000, 0, '2017-08-11 11:39:07'),
(122, 'plplpl', 'Ludzie', 16, '$2y$10$5Qvlbrpcj7zgG0j2jso3zuY7zjDHF8L/xKKCAWn9TFFygCGjuwoyC', 'nazguleczek@gmail.com', 3960, 1280, 0, '2017-08-11 19:44:53'),
(123, 'kurczak', 'Ludzie', 32, '$2y$10$dA3XifyzapMNGaQFz2g9YevkvOCXAHYZs4Lc5rWIiQh/j3aURo2h2', 'kfc@mac.com', 1000, 1000, 0, '2017-08-11 19:48:19'),
(124, 'xcxz', 'Ludzie', 27, '$2y$10$yO/yPphzLduCA6W9lEM7..AKfpekih2KeYYURX8AVxFl1hwQrp9vy', 'das@fs.pl', 1000, 1000, 0, '2017-08-11 19:49:22'),
(125, 'cczxczx', 'Orkowie', 9, '$2y$10$bBH3xjmkRaKgME/fv10QQeXKkg3WhSt/KMGTNcm54j566.vNOi63S', 'zxczxxc@pl.pl', 1000, 1000, 0, '2017-08-11 19:50:34'),
(126, 'czcxzcxz', 'Orkowie', 10, '$2y$10$SNLSuAT8wofnjPCeUCeIq.qpvKRyvWLFvWs4U3Mpy8o9CDFGOwbzG', 'kurrr@tp.pls', 1000, 1000, 0, '2017-08-11 19:51:54');

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
-- Indexes for table `ruchy_wojsk`
--
ALTER TABLE `ruchy_wojsk`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT dla tabeli `budynki`
--
ALTER TABLE `budynki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT dla tabeli `kolejki`
--
ALTER TABLE `kolejki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT dla tabeli `ludzie`
--
ALTER TABLE `ludzie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `orkowie`
--
ALTER TABLE `orkowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT dla tabeli `ruchy_wojsk`
--
ALTER TABLE `ruchy_wojsk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
