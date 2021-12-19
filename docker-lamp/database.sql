-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 19-12-2021 a las 14:39:25
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
  `Pasahitza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostaElektronikoa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mugikorra` int(11) NOT NULL,
  `BankuDatuak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `Erregistroa`
--

INSERT INTO `Erregistroa` (`Erabiltzailea`, `Izena`, `Abizenak`, `PostaKodea`, `NAN`, `JaiotzaData`, `Pasahitza`, `PostaElektronikoa`, `Mugikorra`, `BankuDatuak`) VALUES
('Gari45', 'Garikoitz', 'Salaberria', 48903, '79181000G', '2001-01-11', '$2y$10$qroU0EjQFBjy48VYMQwuR.834OSNA/ZZvaPXidTYLLpPhoNG4vmBe', 'gari45@gmail.com', 666666999, 'RVM0MDAxMjM0NTY3ODkwMTIzNDU2Nzg5'),
('Janire12', 'Janire', 'Veganzones', 48903, '12345678Z', '2001-12-14', '$2y$10$M06phkqfHPFUL4PDfOuFmOTOBb1KltD88h6gCixbUkQE1T4t9sgbG', 'janire@ikasle.ehu.eus', 999888999, 'RVM0MDk4NzY1NDMyMTA5ODc2NTQzMjEw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Loga`
--

CREATE TABLE `Loga` (
  `id` int(11) NOT NULL,
  `erabiltzaile` varchar(20) NOT NULL,
  `dat` date NOT NULL,
  `hordua` time NOT NULL,
  `saioaHasiDa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Loga`
--

INSERT INTO `Loga` (`id`, `erabiltzaile`, `dat`, `hordua`, `saioaHasiDa`) VALUES
(1, 'Gari45', '2021-12-19', '14:34:26', 1),
(2, 'Gari45', '2021-12-19', '14:34:52', 1),
(3, 'Gari45', '2021-12-19', '14:35:05', 0);

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
(1, 'Sansumg Galaxy S8', 'Mugikorra', 'Mugikor oso ona eta merkea', 199.99),
(2, 'Iphone X', 'Mugikorra', 'Mugikor ikaragarria', 700),
(3, 'Huawei Matebook D14', 'Ordenagailua', 'Ordenagailu ona unibertsitatean erabiltzeko', 599),
(4, 'Canon PowerShot', 'Kamara', 'Argazki ikaraggariak egiten dituen kamara ona', 299.99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Erregistroa`
--
ALTER TABLE `Erregistroa`
  ADD PRIMARY KEY (`Erabiltzailea`);

--
-- Indices de la tabla `Loga`
--
ALTER TABLE `Loga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Produktuak`
--
ALTER TABLE `Produktuak`
  ADD PRIMARY KEY (`Kodea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Loga`
--
ALTER TABLE `Loga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Produktuak`
--
ALTER TABLE `Produktuak`
  MODIFY `Kodea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
