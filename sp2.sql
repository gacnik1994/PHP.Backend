-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 15. feb 2022 ob 20.18
-- Različica strežnika: 10.4.22-MariaDB
-- Različica PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `sp2`
--

-- --------------------------------------------------------

--
-- Struktura tabele `artikli`
--

CREATE TABLE `artikli` (
  `Artikel_Id` int(11) NOT NULL,
  `Naziv` longtext NOT NULL,
  `Kolicina` int(11) NOT NULL,
  `Cena` decimal(10,0) NOT NULL,
  `slika` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `artikli`
--

INSERT INTO `artikli` (`Artikel_Id`, `Naziv`, `Kolicina`, `Cena`, `slika`) VALUES
(1, 'Cube ', 0, '5', 'Slike/cube.jpg'),
(2, 'Espeon', 2, '9', 'Slike/espeon.jpg'),
(3, 'Mega Absol', 1, '15', 'Slike/Mabsol.jpg'),
(4, 'Ninetales', 2, '15', 'Slike/ninetales.jpg'),
(5, 'Nintendo Switch, Pro Controller stojalo', 20, '2', 'Slike/ProHolder.jpg'),
(6, 'Sceptile', 3, '12', 'Slike/sceptile.jpg');

-- --------------------------------------------------------

--
-- Struktura tabele `uporabnik`
--

CREATE TABLE `uporabnik` (
  `user_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Odloži podatke za tabelo `uporabnik`
--

INSERT INTO `uporabnik` (`user_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'gacnik', '$2y$10$Zru6TfFCLqMqk/.WCW0yC.eaYq7odljzgoQWYX5gLoFX9ezlOKrNK', 'ales.gacnik@gmail.com'),
(2, 'SpiderMan', '$2y$10$xThoBQmwTJHjik3oaFzEwebf06QnvoQLAjXsc.yQjs2poxRwxNqSe', 'spider@gmail.com');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `artikli`
--
ALTER TABLE `artikli`
  ADD PRIMARY KEY (`Artikel_Id`);

--
-- Indeksi tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `artikli`
--
ALTER TABLE `artikli`
  MODIFY `Artikel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
