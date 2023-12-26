-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2023 a las 13:27:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bauhouse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `explore`
--

CREATE TABLE `explore` (
  `id` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `filtro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `explore`
--

INSERT INTO `explore` (`id`, `imagen`, `filtro`) VALUES
(1, 'explore1.jpeg', 'mobiliario'),
(2, 'explore2.png', 'arquitectura'),
(3, 'explore3.jpeg', 'arquitectura'),
(4, 'explore4.jpeg', 'arquitectura'),
(5, 'explore5.png', 'interiores'),
(6, 'explore6.jpeg', 'arquitectura'),
(7, 'explore7.jpeg', 'interiores'),
(8, 'explore8.png', 'interiores'),
(9, 'explore9.jpeg', 'arquitectura'),
(10, 'explore10.jpeg', 'arquitectura'),
(11, 'explore11.jpeg', 'arquitectura'),
(12, 'explore12.jpeg', 'pintura'),
(13, 'explore13.jpeg', 'videojuegos'),
(14, 'explore14.jpeg', 'grafico'),
(15, 'explore15.jpeg', 'uxui'),
(16, 'explore16.jpeg', 'industrial'),
(17, 'explore17.jpeg', 'indumentaria'),
(18, 'explore18.jpeg', 'videojuegos'),
(19, 'explore19.jpeg', 'indumentaria'),
(20, 'explore20.jpeg', 'grafico'),
(21, 'explore21.jpeg', 'packaging'),
(22, 'explore22.jpeg', 'indumentaria'),
(23, 'explore23.jpeg', 'uxui'),
(24, 'explore24.jpeg', 'uxui'),
(25, 'explore25.jpeg', 'pintura'),
(26, 'explore26.jpeg', 'mobiliario'),
(27, 'explore27.jpeg', 'videojuegos'),
(28, 'explore28.jpeg', 'grafico'),
(29, 'explore29.jpeg', 'interiores'),
(30, 'explore30.jpeg', 'packaging'),
(31, 'explore31.jpeg', 'arquitectura'),
(32, 'explore32.jpeg', 'grafico'),
(33, 'explore33.jpeg', 'mobiliario'),
(34, 'explore34.jpeg', 'pintura'),
(35, 'explore35.jpeg', 'interiores'),
(36, 'explore36.jpeg', 'uxui'),
(37, 'explore37.jpeg', 'arquitectura'),
(38, 'explore38.jpeg', 'indumentaria'),
(39, 'explore39.jpeg', 'interiores'),
(40, 'explore40.jpeg', 'industrial'),
(41, 'explore41.jpeg', 'packaging'),
(42, 'explore42.jpeg', 'indumentaria'),
(43, 'explore43.jpeg', 'mobiliario'),
(44, 'explore44.jpeg', 'indumentaria'),
(45, 'explore45.jpeg', 'interiores'),
(46, 'explore46.jpeg', 'uxui'),
(47, 'explore47.jpeg', 'arquitectura'),
(48, 'explore48.jpeg', 'interiores'),
(49, 'explore49.jpeg', 'pintura'),
(50, 'explore50.jpeg', 'packaging'),
(51, 'explore51.jpeg', 'mobiliario'),
(52, 'explore52.jpeg', 'indumentaria'),
(53, 'explore53.jpeg', 'industrial'),
(54, 'explore54.jpeg', 'industrial'),
(55, 'explore55.jpeg', 'packaging'),
(56, 'explore56.jpeg', 'videojuegos'),
(57, 'explore57.jpeg', 'videojuegos'),
(58, 'explore58.jpeg', 'mobiliario'),
(59, 'explore59.jpeg', 'packaging'),
(60, 'explore60.jpeg', 'pintura'),
(61, 'explore61.jpeg', 'interiores'),
(62, 'explore62.jpeg', 'videojuegos'),
(63, 'explore63.jpeg', 'arquitectura'),
(64, 'explore64.jpeg', 'grafico'),
(65, 'explore65.jpeg', 'uxui'),
(66, 'explore66.jpeg', 'grafico'),
(67, 'explore67.jpeg', 'videojuegos'),
(68, 'explore68.jpeg', 'arquitectura'),
(69, 'explore69.jpeg', 'pintura'),
(70, 'explore70.jpeg', 'uxui'),
(71, 'explore71.jpeg', 'indumentaria'),
(72, 'explore72.jpeg', 'industrial'),
(73, 'explore73.jpeg', 'pintura'),
(74, 'explore74.jpeg', 'mobiliario'),
(75, 'explore75.jpeg', 'pintura'),
(76, 'explore76.jpeg', 'grafico'),
(77, 'explore77.jpeg', 'mobiliario'),
(78, 'explore78.jpeg', 'videojuegos'),
(79, 'explore79.jpeg', 'pintura'),
(80, 'explore80.jpeg', 'grafico'),
(81, 'explore81.jpeg', 'uxui'),
(82, 'explore82.jpeg', 'grafico'),
(83, 'explore83.jpeg', 'grafico'),
(84, 'explore84.jpeg', 'uxui'),
(85, 'explore85.jpeg', 'interiores'),
(86, 'explore86.jpeg', 'industrial'),
(87, 'explore87.jpeg', 'indumentaria'),
(88, 'explore88.jpeg', 'industrial'),
(89, 'explore89.jpeg', 'interiores'),
(90, 'explore90.jpeg', 'grafico'),
(91, 'explore91.jpeg', 'interiores'),
(92, 'explore92.jpeg', 'pintura'),
(93, 'explore93.jpeg', 'videojuegos'),
(94, 'explore94.jpeg', 'packaging'),
(95, 'explore95.jpeg', 'industrial'),
(96, 'explore96.jpeg', 'videojuegos'),
(97, 'explore97.jpeg', 'industrial'),
(98, 'explore98.jpeg', 'packaging'),
(99, 'explore99.jpeg', 'uxui'),
(100, 'explore100.jpeg', 'indumentaria'),
(101, 'explore101.jpeg', 'industrial'),
(102, 'explore102.jpeg', 'industrial'),
(103, 'explore103.jpeg', 'packaging');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `mail`, `password`) VALUES
(1, 'Valentina', 'valentinaspitzer01@gmail.com', 123),
(2, 'urban', 'ilanpusti11@gmail.com', 1234),
(3, 'Matias', 'asxa@cew.com', 123),
(4, 'Matias', 'matias@gmail.com', 123),
(5, 'Lionel', 'messi10@gmail.com', 123),
(11, '', 'lucas@gmail.com', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `explore`
--
ALTER TABLE `explore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
