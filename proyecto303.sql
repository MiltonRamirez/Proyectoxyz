-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2021 a las 05:07:17
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto303`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `modelo` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `precio` tinyint(255) UNSIGNED NOT NULL,
  `stock` tinyint(255) UNSIGNED NOT NULL,
  `estatus` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`modelo`, `nombre`, `descripcion`, `foto`, `precio`, `stock`, `estatus`) VALUES
('Laptop1', 'Laptop ASUS', 'Laptop gamer NVIDIA GEFORCE GTX 1650\r\n', 'vista/catalogo/clientes/laptop.jpg', 255, 4, 1),
('Monitor1', 'Monitor ROG', 'Monitor de 144hz muy bonito', 'vista/catalogo/clientes/monitor.jpg', 255, 3, 1),
('Mouse1', 'mouse Red Dragon', 'Mouse Gamer con luces led ', 'vista/catalogo/clientes/mouse.jpg', 200, 25, 1),
('teclado1', 'teclado Gamer', 'teclado con luces led muy bonito', 'vista/catalogo/clientes/teclado.jpg', 255, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `perfil` tinyint(1) UNSIGNED NOT NULL,
  `estatus` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `nombre`, `contrasena`, `foto`, `perfil`, `estatus`) VALUES
('admin@a.a', 'admin', '998ed4d621742d0c2d85ed84173db569afa194d4597686cae947324aa58ab4bb', 'vista/catalogo/clientes/3.pdf', 1, 1),
('cliente@a.a', 'cliente', '0c5de8c234f0651120cbf62b64d4dc96ef98989a76a30d8dbc27fc5e7da53710', 'vista/catalogo/clientes/casa.jpg', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`modelo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
