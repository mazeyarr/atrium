-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 nov 2016 om 12:10
-- Serverversie: 5.7.11
-- PHP-versie: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atrium`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `datetime_start` timestamp NOT NULL,
  `datetime_end` datetime NOT NULL,
  `max_participants` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `iplogs`
--

CREATE TABLE `iplogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `ipadress` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `gender` tinyint(3) NOT NULL,
  `birthday` date NOT NULL,
  `profile_biography` text COLLATE latin1_general_ci NOT NULL,
  `skills` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `street` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `house_number` int(11) NOT NULL,
  `zip_code` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `county` varchar(45) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  `ipadress` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `rank` tinyint(4) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` char(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `salt` char(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users_in_activities`
--

CREATE TABLE `users_in_activities` (
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `valuta`
--

CREATE TABLE `valuta` (
  `id` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `iplogs`
--
ALTER TABLE `iplogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_from` (`user_id_from`),
  ADD KEY `user_id_to` (`user_id_to`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users_in_activities`
--
ALTER TABLE `users_in_activities`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexen voor tabel `valuta`
--
ALTER TABLE `valuta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `iplogs`
--
ALTER TABLE `iplogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `valuta`
--
ALTER TABLE `valuta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `iplogs`
--
ALTER TABLE `iplogs`
  ADD CONSTRAINT `iplogs_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions-from_users` FOREIGN KEY (`user_id_from`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions-to_users` FOREIGN KEY (`user_id_to`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `users_in_activities`
--
ALTER TABLE `users_in_activities`
  ADD CONSTRAINT `activityid` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activityuser` FOREIGN KEY (`user_id`) REFERENCES `activities` (`user_id`);

--
-- Beperkingen voor tabel `valuta`
--
ALTER TABLE `valuta`
  ADD CONSTRAINT `valuta_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
