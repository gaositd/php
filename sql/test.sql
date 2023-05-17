-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2023 a las 20:46:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--
CREATE DATABASE IF NOT EXISTS `test`;
USE `test`;
CREATE TABLE IF NOT EXISTS`fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `file-path` varchar(255) NOT NULL,
  `marca_borrado` char(1) NOT NULL
);

--
-- Volcado de datos para la tabla `fotos`
--

-- INSERT INTO `fotos` (`id`, `nombre`, `ruta`, `file-path`, `marca_borrado`) VALUES
-- (1, 'Princesas', 'https://tr.pinterest.com/pin/264938390551975335/?amp_client_id=CLIENT_ID%28_%29&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&simplified=true', '', ''),
-- (2, 'Ariel', 'https://pbs.twimg.com/media/Emp35GNXUAAU8Rp?format=jpg&name=4096x4096', '', ''),
-- (3, 'Pricesas', 'https://tr.pinterest.com/pin/264938390551975335/?amp_client_id=CLIENT_ID%28_%29&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&simplified=true', '', ''),
-- (4, 'Pricesas', 'https://tr.pinterest.com/pin/264938390551975335/?amp_client_id=CLIENT_ID%28_%29&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&simplified=true', '', ''),
-- (5, 'Ariel', 'https://pbs.twimg.com/media/Emp35GNXUAAU8Rp?format=jpg&name=4096x4096', '', ''),
-- (6, 'Blanca Nieves', 'https://cdn.trendhunterstatic.com/phpthumbnails/162/162668/162668_1_800.jpeg?auto=webp', '', ''),
-- (7, 'Ariel', 'https://pbs.twimg.com/media/Emp35GNXUAAU8Rp?format=jpg&name=4096x4096', '', ''),
-- (8, 'Blanca Nieves', 'https://cdn.trendhunterstatic.com/phpthumbnails/162/162668/162668_1_800.jpeg?auto=webp', '', ''),
-- (9, 'Blanca Nieves 2', 'https://cdn.trendhunterstatic.com/phpthumbnails/162/162668/162668_2_800.jpeg?auto=webp', '', ''),
-- (10, 'Blanca Nieves 3', 'https://i.chzbgr.com/full/8565567232/h0551F722/now-you-know-what-makes-that-dwarf-so-dopey', '', ''),
-- (13, 'Rapunzel', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-02.jpg', '', ''),
-- (14, 'Tiana', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-07.jpg', '', ''),
-- (15, 'Rapunzel', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-02.jpg', '', ''),
-- (16, 'Tiana', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-07.jpg', '', ''),
-- (17, 'Frozen', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-09.jpg', '', ''),
-- (18, 'Jazmin', 'https://files.cults3d.com/uploaders/15490028/illustration-file/26e6d549-b92a-49a7-81a5-dd258a8b761c/14.jpg', '', ''),
-- (19, 'Frozen', 'https://geekxgirls.com/images/disneypinups2/disney-princess-pinups-09.jpg', '', ''),
-- (20, 'Jazmin', 'https://files.cults3d.com/uploaders/15490028/illustration-file/26e6d549-b92a-49a7-81a5-dd258a8b761c/14.jpg', '', ''),
-- (21, 'Merida 1', 'https://civitai.com/images/488927?modelVersionId=45024&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (22, 'Merida 1', 'https://civitai.com/images/488927?modelVersionId=45024&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (23, 'Merida 2', 'https://civitai.com/images/488931?modelVersionId=45024&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (24, 'Merida 2', 'https://civitai.com/images/488931?modelVersionId=45024&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (25, 'Bella 1', 'https://civitai.com/images/519314?modelVersionId=48351&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (26, 'Bella 1', 'https://civitai.com/images/519311?modelVersionId=48351&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (27, 'Bella 1', 'https://civitai.com/images/519306?modelVersionId=48351&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (28, 'Bella 1', 'https://civitai.com/images/519308?modelVersionId=48351&prioritizedUserIds=131137&period=AllTime&sort=Most+Reactions&limit=20', '', ''),
-- (29, 'pricesa japonesa', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kppee/download/1920x1080', '', ''),
-- (30, 'Kimono', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kppee/download/1920x1080', 'kimono.jpg', ''),
-- (31, 'Rebelde', 'https://www.peakpx.com/en/hd-wallpaper-desktop-aqpcc/download/1920x1080', 'rebelde.jpg', ''),
-- (32, 'Mecanica', 'https://www.peakpx.com/en/hd-wallpaper-desktop-klydl', 'mecanica.jpg', ''),
-- (33, 'fotoShaia', 'https://www.peakpx.com/en/hd-wallpaper-desktop-azhcp/download/1920x1080', 'shaia.jpg', ''),
-- (34, 'Disfrutando', 'https://www.peakpx.com/en/hd-wallpaper-desktop-azvvh/download/1920x1080', 'disfrutando.jpg', ''),
-- (35, 'Despertando', 'https://www.peakpx.com/en/hd-wallpaper-desktop-geyut/download/1920x1080', 'despertando.jpg', ''),
-- (36, 'Espadachin', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kdzzg/download/1920x1080', 'espadachin.jpg', ''),
-- (37, 'telefono', 'https://www.peakpx.com/en/hd-wallpaper-desktop-kliyc', 'telefono.jpg', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
