-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Okt 27. 14:16
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `login_test`
--

CREATE TABLE `login_test` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `login_test`
--

INSERT INTO `login_test` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'Pisti', 'pisti'),
(7, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `rendeles_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `skin_id` int(255) NOT NULL,
  `datum` date NOT NULL,
  `osszeg` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `rendeles`
--

INSERT INTO `rendeles` (`rendeles_id`, `user_id`, `skin_id`, `datum`, `osszeg`) VALUES
(1, 21, 21, '2023-09-13', 212),
(2, 11, 10, '2023-10-21', 12310),
(3, 3, 2, '2023-12-12', 2312310),
(4, 12, 32, '2022-12-10', 123),
(5, 13, 2, '2022-01-02', 123101);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `login_test`
--
ALTER TABLE `login_test`
  ADD PRIMARY KEY (`user_id`);

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD PRIMARY KEY (`rendeles_id`) USING BTREE;

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `login_test`
--
ALTER TABLE `login_test`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `rendeles`
--
ALTER TABLE `rendeles`
  MODIFY `rendeles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
