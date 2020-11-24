-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 13:47:34
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `airtm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billetera`
--

CREATE TABLE `billetera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `comision_unica` float NOT NULL,
  `comision_porcentual` float NOT NULL,
  `comision_minima` float NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`id`, `nombre`, `comision_unica`, `comision_porcentual`, `comision_minima`, `imagen`) VALUES
(8, 'Paypal', 0.3, 0.055, 0, NULL),
(14, 'Payoneer', 0, 0, 0, NULL),
(18, 'Skrill', 0, 1.45, 0.59, NULL),
(19, 'Neteller', 0, 0.0145, 0.5, NULL),
(20, 'Banca Local', 0, 0, 0, NULL),
(23, 'Plus Cambio', 34234, 23423, 234234, 'imgs/5fbca130a4613.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_tns` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_tns`, `id_usuario`, `comentario`, `valoracion`) VALUES
(57, 80, 1, 'Su comentario aquí', 3),
(65, 80, 1, 'Su comentario aquí', 5),
(84, 84, 1, 'Su comentario aquí', 1),
(85, 85, 1, 'dsfsdfsdfsdfsd', 4),
(86, 85, 25, 'Su sdfsdfsfsfd df aquí d fdf', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedas`
--

CREATE TABLE `monedas` (
  `id` int(11) NOT NULL,
  `iso` varchar(5) NOT NULL DEFAULT '0',
  `nombre` varchar(255) NOT NULL DEFAULT '0',
  `abreviatura` varchar(255) NOT NULL DEFAULT '0',
  `signo` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monedas`
--

INSERT INTO `monedas` (`id`, `iso`, `nombre`, `abreviatura`, `signo`) VALUES
(5, 'VES', 'Bolivar Fuerte', 'Bolívar', 'B'),
(6, 'BOB', 'Boliviano', 'Boliviano', 'B'),
(12, 'DKK', 'Corona Danesa', 'Corona', 'K'),
(13, 'ISK', 'Corona Islandia', 'Corona', 'k'),
(14, 'NOK', 'Corona Noruega', 'Corona', 'k'),
(15, 'SEK', 'Corona Suiza', 'Corona', 'k'),
(16, 'GMD', 'Dalasi', 'Dalasi', 'D'),
(28, 'STD', 'Dobra', 'Dobra', 'D'),
(29, 'USD', 'Dólar Americano', 'Dólar', '$'),
(54, 'EUR', 'Euro', 'Euro', '€'),
(109, 'TOP', 'Pa\'anga', 'Pa\'anga', 'T'),
(111, 'ARS', 'Peso Argentino', 'Peso', '$'),
(112, 'CLP', 'Peso Chileno', 'Peso', '$'),
(113, 'COP', 'Peso Colombiano', 'Peso', 'C'),
(114, 'CUP', 'Peso Cubano', 'Peso', '$'),
(115, 'DOP', 'Peso Dominicano', 'Peso', 'R'),
(118, 'MXN', 'Peso Mexicano', 'Peso', '$'),
(119, 'UYU', 'Peso Uruguayo', 'Peso', '$'),
(124, 'BRL', 'Real Brasileño', 'Real', 'R');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id_tns` int(11) NOT NULL,
  `id_billetera` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_tns` date NOT NULL,
  `tipo_de_operacion` text NOT NULL,
  `saldo_enviar` float NOT NULL,
  `saldo_recibir` float NOT NULL,
  `tipo_cambio` float NOT NULL,
  `ganancia` float NOT NULL,
  `moneda` int(11) DEFAULT NULL,
  `valor_de_moneda` float DEFAULT NULL,
  `comentarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id_tns`, `id_billetera`, `id_usuario`, `fecha`, `fecha_tns`, `tipo_de_operacion`, `saldo_enviar`, `saldo_recibir`, `tipo_cambio`, `ganancia`, `moneda`, `valor_de_moneda`, `comentarios`) VALUES
(80, 18, 1, '2020-11-24', '2020-10-19', 'Retiro', 500, 525, 1.14, -736.25, 0, NULL, NULL),
(82, 8, 1, '2020-11-24', '2020-10-19', 'Retiro', 500, 525, 1.14, 25, 0, NULL, NULL),
(83, 18, 1, '2020-11-24', '2020-10-19', 'Retiro', 205.4, 234.6, 1, 29.2, 0, NULL, NULL),
(84, 20, 1, '2020-11-24', '2020-10-19', 'Fondeo', 1000, 100, 100, -900, 111, 148.93, NULL),
(85, 8, 25, '2020-11-24', '2020-10-19', 'Fondeo', 10.07, 11.44, 1, 1.37, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_adm` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `referido` varchar(50) DEFAULT NULL,
  `rol` int(11) NOT NULL DEFAULT 1,
  `activo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_adm`, `fecha`, `nombre`, `apellido`, `email`, `usuario`, `contrasena`, `referido`, `rol`, `activo`) VALUES
(1, '0000-00-00 00:00:00', 'Matias', 'Cancemi', 'algo@nada.com', 'administrador', '49bd4844b55f346b627b3fc70aa18c51', NULL, 0, 1),
(25, '2020-11-24 06:27:56', 'Matias', 'Cancemi', 'matiasexequielcancemi@gmail.com', 'tudai', 'e5d695b17106c628c57165d4a03af2f0', NULL, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tns` (`id_tns`);

--
-- Indices de la tabla `monedas`
--
ALTER TABLE `monedas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id_tns`),
  ADD KEY `transaccion_ibfk_1` (`id_billetera`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_adm`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `billetera`
--
ALTER TABLE `billetera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `monedas`
--
ALTER TABLE `monedas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_tns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `id_tns` FOREIGN KEY (`id_tns`) REFERENCES `transaccion` (`id_tns`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`id_billetera`) REFERENCES `billetera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transacciones_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_adm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
