-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2017 a las 12:36:28
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lindavista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `Codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Año` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`Codigo`, `Nombre`, `Año`) VALUES
('ESS-CONVERSE', 'CONVERSE', '2010-02-01'),
('ESS-VANS', 'VANS', '2010-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL DEFAULT '',
  `texto` text NOT NULL,
  `categoria` enum('promociones','ofertas','costas') NOT NULL DEFAULT 'promociones',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `categoria`, `fecha`, `imagen`) VALUES
(1, 'Nueva promoción en Nervión', '145 viviendas de lujo en urbanización ajardinada situadas en un entorno privilegiado', 'promociones', '2004-02-04', NULL),
(2, 'Últimas viviendas junto al río', 'Apartamentos de 1 y 2 dormitorios, con fantásticas vistas. Excelentes condiciones de financiación.', 'ofertas', '2004-02-05', NULL),
(3, 'Apartamentos en el Puerto de Sta María', 'En la playa de Valdelagrana, en primera línea de playa. Pisos reformados y completamente amueblados.', 'costas', '2004-02-06', 'apartamento8.jpg'),
(4, 'Casa reformada en el barrio de la Judería', 'Dos plantas y ático, 5 habitaciones, patio interior, amplio garaje. Situada en una calle tranquila y a un paso del centro histórico.', 'promociones', '2004-02-07', NULL),
(5, 'Promoción en Costa Ballena', 'Con vistas al campo de golf, magníficas calidades, entorno ajardinado con piscina y servicio de vigilancia.', 'costas', '2004-02-09', 'apartamento9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Talla` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unidades` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo`, `Nombre`, `Marca`, `Tipo`, `Talla`, `Unidades`) VALUES
('ESSMJ25', 'Tenis', 'Vans', 'Casuales', '25', 7),
('ESSMJ26', 'Zapatos', 'Levis', 'Casual', '29', 0),
('ESSMJ27', 'Tenis', 'Vans', 'Casuales', '27', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Clave` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPaterno` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoMaterno` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Finicio` date NOT NULL,
  `Tipo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biografia` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Clave`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Edad`, `Finicio`, `Tipo`, `Biografia`, `Username`, `Password`) VALUES
('clave', 'Sergio', 'Perez', 'Picazo', 24, '2017-12-02', 'Administrador', 'prueba xd', 'sergio', 'sergio'),
('clave2', 'Luisa', 'Mendez', 'Mujica', 25, '2017-12-01', 'Administrador', 'asdasdasd', 'Allego', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Clave` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Unidades` int(20) NOT NULL,
  `Total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
