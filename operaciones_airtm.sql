-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 07:35:11
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
-- Base de datos: `operaciones_airtm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_adm`, `usuario`, `contrasena`) VALUES
(1, 'administrador', '49bd4844b55f346b627b3fc70aa18c51'),
(2, 'tudai', 'e5d695b17106c628c57165d4a03af2f0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billetera`
--

CREATE TABLE `billetera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `comision_unica` float NOT NULL,
  `comision_porcentual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `billetera`
--

INSERT INTO `billetera` (`id`, `nombre`, `comision_unica`, `comision_porcentual`) VALUES
(8, 'Paypal', 0.3, 0.055),
(14, 'Payoneer', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id_tns` int(11) NOT NULL,
  `id_billetera` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_tns` date NOT NULL,
  `tipo_de_operacion` text NOT NULL,
  `saldo_enviar` float NOT NULL,
  `saldo_recibir` float NOT NULL,
  `tipo_cambio` float NOT NULL,
  `ganancia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id_tns`, `id_billetera`, `fecha`, `fecha_tns`, `tipo_de_operacion`, `saldo_enviar`, `saldo_recibir`, `tipo_cambio`, `ganancia`) VALUES
(72, 8, '2020-10-02 05:22:39', '2020-01-10', 'Retiro', 1.54, 1.7, 1.1, -0.217),
(73, 14, '2020-10-02 05:23:42', '2020-01-10', 'Fondeo', 489.76, 489.81, 1, 0.05),
(74, 8, '2020-10-02 05:24:30', '2020-01-10', 'Retiro', 1.8, 2, 1.11, -0.1935),
(75, 8, '2020-10-02 05:25:11', '2020-01-10', 'Retiro', 5.17, 5.85, 1.13, 0.07475),
(76, 14, '2020-10-02 05:26:02', '2020-01-10', 'Fondeo', 97.64, 97.65, 1, 0.01),
(82, 8, '2020-10-15 07:30:40', '2020-09-09', 'Fondeo', 10.07, 525, 1.14, 514.93),
(83, 14, '2020-10-15 07:30:53', '2020-01-10', 'Fondeo', 10.07, 97.65, 1.14, 87.58),
(84, 14, '2020-10-15 07:31:04', '2020-09-02', 'Retiro', 10.07, 11.44, 1.14, 1.37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indices de la tabla `billetera`
--
ALTER TABLE `billetera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id_tns`),
  ADD KEY `id_billetera` (`id_billetera`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `billetera`
--
ALTER TABLE `billetera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_tns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`id_billetera`) REFERENCES `billetera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
