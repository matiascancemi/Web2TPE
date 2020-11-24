-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2020 a las 00:23:38
-- Versión del servidor: 10.3.24-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soycajero_db`
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
  `comision_minima` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`id`, `nombre`, `comision_unica`, `comision_porcentual`, `comision_minima`) VALUES
(8, 'Paypal', 0.3, 0.055, 0),
(14, 'Payoneer', 0, 0, 0),
(18, 'Skrill', 0, 1.45, 0.59),
(19, 'Neteller', 0, 0.0145, 0.5),
(20, 'Banca Local', 0, 0, 0);

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
  `valor_de_moneda` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id_tns`, `id_billetera`, `id_usuario`, `fecha`, `fecha_tns`, `tipo_de_operacion`, `saldo_enviar`, `saldo_recibir`, `tipo_cambio`, `ganancia`, `moneda`, `valor_de_moneda`) VALUES
(4, 8, 5, '2020-10-18', '2020-09-02', 'Fondeo', 10.07, 11.44, 1.14, 1.37, NULL, NULL),
(7, 14, 5, '2020-10-18', '2020-09-02', 'Retiro', 10.07, 11.44, 1.14, 1.37, NULL, NULL),
(8, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 10.56, 12, 1.14, 0.4965, NULL, NULL),
(9, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 175.11, 200, 1.14, 13.6065, NULL, NULL),
(10, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 205.4, 234.6, 1.14, 16.0135, NULL, NULL),
(11, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 19.7, 22.45, 1.14, 1.23175, NULL, NULL),
(12, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 8.4, 9.53, 1.14, 0.32235, NULL, NULL),
(13, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 16.62, 18.92, 1.14, 0.9759, NULL, NULL),
(14, 8, 6, '2020-10-19', '2020-10-19', 'Fondeo', 10, 10.01, 1, 0.01, NULL, NULL),
(15, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 10.56, 12, 1.14, 0.4965, NULL, NULL),
(16, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 19.31, 22, 1.14, 1.1965, NULL, NULL),
(18, 18, 6, '2020-10-19', '2020-10-19', 'Fondeo', 12.1, 12.34, 1.02, -0.35, NULL, NULL),
(19, 18, 6, '2020-10-19', '2020-10-19', 'Fondeo', 25.1, 25.6, 1.02, -0.09, NULL, NULL),
(20, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 131.34, 150, 1.14, 10.1265, NULL, NULL),
(24, 8, 6, '2020-10-19', '2020-10-19', 'Retiro', 13.18, 15, 1.14, 0.7115, NULL, NULL),
(25, 8, 6, '2020-10-19', '2020-10-19', 'Fondeo', 19.2, 19.22, 1, 0.02, NULL, NULL),
(26, 8, 6, '2020-10-20', '2020-10-20', 'Retiro', 18.3, 20.84, 1.14, 1.1103, NULL, NULL),
(27, 8, 6, '2020-10-20', '2020-10-20', 'Retiro', 70.08, 80, 1.14, 5.2365, NULL, NULL),
(28, 8, 6, '2020-10-20', '2020-10-20', 'Retiro', 131.34, 150, 1.14, 10.1265, NULL, NULL),
(29, 8, 6, '2020-10-20', '2020-10-20', 'Retiro', 205.4, 234.6, 1.14, 16.0135, NULL, NULL),
(32, 8, 6, '2020-10-20', '2020-10-20', 'Retiro', 205.4, 234.6, 1.14, 16.0135, NULL, NULL),
(34, 8, 6, '2020-10-21', '2020-10-21', 'Retiro', 205.4, 234.6, 1.14, 16.0135, NULL, NULL),
(35, 14, 6, '2020-10-21', '2020-10-21', 'Fondeo', 48.58, 50, 1.03, 1.42, NULL, NULL),
(36, 8, 6, '2020-10-22', '2020-10-22', 'Retiro', 175.11, 200, 1.14, 13.6065, NULL, NULL),
(47, 18, 6, '2020-10-23', '2020-10-23', 'Fondeo', 10, 10.2, 1.02, -0.39, 0, NULL),
(48, 18, 6, '2020-10-23', '2020-10-23', 'Fondeo', 10.19, 10.39, 1.02, -0.39, 0, NULL),
(52, 14, 6, '2020-10-23', '2020-10-23', 'Retiro', 258.76, 266.36, 1.03, 7.6, 0, NULL),
(58, 14, 6, '2020-10-23', '2020-10-23', 'Retiro', 51.35, 52.85, 1.03, 1.5, 0, NULL),
(69, 8, 6, '2020-10-26', '2020-10-26', 'Retiro', 131.34, 150, 1.14, 10.1265, 0, NULL),
(70, 14, 6, '2020-10-26', '2020-10-26', 'Retiro', 55.39, 57, 1.03, 1.61, 0, NULL),
(72, 20, 6, '2020-10-26', '2020-10-26', 'Fondeo', 30184.2, 168.87, 178.74, 1.47969, 111, 180.32),
(73, 20, 6, '2020-10-26', '2020-10-26', 'Fondeo', 15000, 84.22, 178.1, 1.0369, 111, 180.32),
(74, 20, 6, '2020-10-26', '2020-10-26', 'Fondeo', 22177.8, 124.65, 177.92, 1.65906, 111, 180.32),
(75, 8, 6, '2020-10-26', '2020-10-26', 'Retiro', 163.21, 186.4, 1.14, 12.6545, 0, NULL),
(76, 8, 6, '2020-10-26', '2020-10-26', 'Retiro', 91.96, 105, 1.14, 6.9815, 0, NULL),
(77, 8, 6, '2020-10-26', '2020-10-26', 'Retiro', 52.67, 60, 1.14, 3.7465, 0, NULL),
(78, 8, 6, '2020-10-26', '2020-10-26', 'Retiro', 87.85, 100.31, 1.14, 6.65945, 0, NULL),
(79, 8, 6, '2020-10-26', '2020-10-26', 'Fondeo', 195.49, 195.69, 1, 0.2, 0, NULL);

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
  `activo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_adm`, `fecha`, `nombre`, `apellido`, `email`, `usuario`, `contrasena`, `referido`, `rol`, `activo`) VALUES
(1, '0000-00-00 00:00:00', '', '', '', 'administrador', '49bd4844b55f346b627b3fc70aa18c51', NULL, 0, 1),
(5, '0000-00-00 00:00:00', '', '', '', 'tudai', 'e5d695b17106c628c57165d4a03af2f0', NULL, 1, 1),
(6, '0000-00-00 00:00:00', '', '', '', 'matias', '49bd4844b55f346b627b3fc70aa18c51', NULL, 1, 1),
(7, '0000-00-00 00:00:00', '', '', '', 'hyips', 'c56dab375f929283a6475373c185c8a9', NULL, 1, 1),
(8, '0000-00-00 00:00:00', '', '', '', 'tonybuet', '76efae6db6e6701714bc57b3b695aae4', NULL, 1, 1),
(12, '2020-10-21 23:36:50', 'Soledad Noelia', 'Ravazzoli', 'solravazzoli@gmail.com', 'soledad', '49bd4844b55f346b627b3fc70aa18c51', '6', 1, 0),
(13, '2020-10-22 10:49:41', 'Jose', 'Vanegas', 'serviciosonlineparati@gmail.com', 'elprofe', '4f7dcdc61fa99085bba0dd3178fea5ea', NULL, 1, 1),
(14, '2020-10-22 11:48:32', 'Esteban', 'Rojas', 'steve2014kt@gmail.com', 'Steve7fx', '19bf69c2c25dad41534eb04af0a723bd', NULL, 1, 1),
(15, '2020-10-23 13:23:05', 'Emmanuel', 'Gatica', 'emmagatica91@gmail.com', 'emmagatica91', '4d0ee81128465f6fc1d674fec76e19f5', NULL, 1, 1),
(16, '2020-10-23 17:08:52', 'Sergio Germán', 'Chironi', 'serchiron@gmail.com', 'chiro', 'b9cb7e04f2c6ff820fcf4ddc48ba05ba', NULL, 1, 1),
(17, '2020-10-26 16:32:31', 'Ramiro', 'Garcia', 'ramirogarcia10@gmail.com', 'ramirogarcia10', '9536c0f8b8ce7b299ccf75782342cf10', NULL, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `monedas`
--
ALTER TABLE `monedas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_tns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`id_billetera`) REFERENCES `billetera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
