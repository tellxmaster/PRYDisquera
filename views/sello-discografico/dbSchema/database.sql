-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2022 a las 17:31:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `disquera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id_alb` int(11) NOT NULL,
  `nombre_alb` varchar(50) NOT NULL,
  `anio_lanz` year(4) NOT NULL,
  `num_canc_alb` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_banda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `id_art` int(11) NOT NULL,
  `nombre_art` varchar(50) NOT NULL,
  `apodo_art` varchar(50) NOT NULL,
  `fecha_nac_art` date NOT NULL,
  `id_sello` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banda`
--

CREATE TABLE `banda` (
  `id_band` int(11) NOT NULL,
  `nombre_band` varchar(50) NOT NULL,
  `miembros` varchar(50) NOT NULL,
  `fecha_crea_band` date NOT NULL,
  `id_sello` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id_canc` int(11) NOT NULL,
  `nombre_canc` varchar(50) NOT NULL,
  `duracion_canc` int(11) NOT NULL,
  `anio_lanz_canc` year(4) NOT NULL,
  `escritor_canc` varchar(50) NOT NULL,
  `cantante_canc` varchar(50) NOT NULL,
  `genero_canc` varchar(50) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello_discografico`
--

CREATE TABLE `sello_discografico` (
  `id_sello` int(11) NOT NULL,
  `nombre_sello` varchar(50) NOT NULL,
  `direccion_sello` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_alb`),
  ADD KEY `FK_id_artista` (`id_artista`),
  ADD KEY `FK_id_banda` (`id_banda`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_art`),
  ADD KEY `FK_id_sello` (`id_sello`);

--
-- Indices de la tabla `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`id_band`),
  ADD KEY `FK_id_sello` (`id_sello`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id_canc`),
  ADD KEY `FK_id_album` (`id_album`) USING BTREE;

--
-- Indices de la tabla `sello_discografico`
--
ALTER TABLE `sello_discografico`
  ADD PRIMARY KEY (`id_sello`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id_alb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `banda`
--
ALTER TABLE `banda`
  MODIFY `id_band` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id_canc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sello_discografico`
--
ALTER TABLE `sello_discografico`
  MODIFY `id_sello` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_art`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`id_banda`) REFERENCES `banda` (`id_band`);

--
-- Filtros para la tabla `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_sello`) REFERENCES `sello_discografico` (`id_sello`);

--
-- Filtros para la tabla `banda`
--
ALTER TABLE `banda`
  ADD CONSTRAINT `banda_ibfk_1` FOREIGN KEY (`id_sello`) REFERENCES `sello_discografico` (`id_sello`);

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `cancion_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_alb`);
COMMIT;