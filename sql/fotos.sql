-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2023 a las 02:04:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
Create database `test`;
use `test`;
--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `file-path` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `marca_borrado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `nombre`, `ruta`, `file-path`, `descripcion`, `marca_borrado`) VALUES
(44, 'Capitana Marvel', 'https://www.peakpx.com/en/hd-wallpaper-desktop-nxmoz', 'capMarvel.jpg', 'Capitana Marbel Bri Larson          ', ''),
(45, 'Capitana Marvel 2', 'https://www.peakpx.com/en/hd-wallpaper-desktop-nkfab', 'capMarvel2.jpg', 'Capitana Marvel 2 Karol Damvers', ''),
(46, 'Jill Valantine', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kswjy', 'jillValantine.jpg', 'Residen Evil          ', ''),
(47, 'Lisamine Pokemon', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kseia', 'lisamine.jpg', 'Lisamine Pokemon          ', ''),
(48, 'Lady Bug', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kdkup', 'ladybug.jpg', 'Lady bug Adolecente          ', ''),
(49, 'Elastic Girl', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kcdbh', 'elasticgirl.jpg', '          ', ''),
(50, 'Uraraka', 'https://www.peakpx.com/en/hd-wallpaper-desktop-ksdmn', 'uraraka.jpg', 'Uraraka no se de donde          ', ''),
(51, 'Dafne Scooby doo', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kltui', 'dafne.jpg', 'Dafne Scooby doo', ''),
(52, 'Alita', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kcydh', 'alita.jpg', 'Alita battle angel          ', ''),
(53, 'Tsuyu', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kstjk', 'tsuyu.jpg', 'Tsuyu          ', ''),
(54, 'Retadora', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kcaws', 'retadora.jpg', 'Retadora          ', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
