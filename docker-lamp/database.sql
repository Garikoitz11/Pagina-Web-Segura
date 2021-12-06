-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 24-10-2021 a las 21:35:57
-- Versión del servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erregistroa`
--

CREATE TABLE `Erregistroa` (
  `Erabiltzailea` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Izena` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Abizenak` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostaKodea` int(11) NOT NULL,
  `NAN` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JaiotzaData` date NOT NULL,
  `Pasahitza` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostaElektronikoa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mugikorra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Erregistroa`
--

INSERT INTO `Erregistroa` (`Erabiltzailea`, `Izena`, `Abizenak`, `PostaKodea`, `NAN`, `JaiotzaData`, `Pasahitza`, `PostaElektronikoa`, `Mugikorra`) VALUES
('Gari45', 'Garikoitz', 'Salaberria', 48903, '79181000G', '2000-12-14', '123', 'hghg@gmail.com', 123456789),
('Janire12', 'janire', 'veganzones', 48930, '22761980f', '2001-12-14', '142', 'janirevg@gmail.com', 640383124);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produktuak`
--

CREATE TABLE `Produktuak` (
  `Kodea` int(11) NOT NULL,
  `Izena` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mota` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskribapena` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prezioa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Produktuak`
--

INSERT INTO `Produktuak` (`Kodea`, `Izena`, `Mota`, `Deskribapena`, `Prezioa`) VALUES
(1, 'Xiaomi', 'mugikorra', 'oso ona', 245),
(7, 'canon', 'Kamara', 'Oso argazki onak', 400),
(11, 'hp', 'ordenagailua', 'Oso merkea', 700),
(13, 'iphone', 'mugikorra', 'oso ona', 455);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Erregistroa`
--
ALTER TABLE `Erregistroa`
  ADD PRIMARY KEY (`Erabiltzailea`);

--
-- Indices de la tabla `Produktuak`
--
ALTER TABLE `Produktuak`
  ADD PRIMARY KEY (`Kodea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Produktuak`
--
ALTER TABLE `Produktuak`
  MODIFY `Kodea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
