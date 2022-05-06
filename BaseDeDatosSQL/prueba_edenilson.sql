-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2022 a las 00:43:24
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_edenilson`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nombre_cliente` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_pedido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nombre_cliente`, `fecha_pedido`) VALUES
(1, 'jose', '0000-00-00'),
(2, 'jose', '2022-05-06'),
(3, 'maria', '2022-05-06'),
(4, 'wendy', '2022-05-06'),
(5, 'maricela', '2022-05-06'),
(6, 'marina', '2022-05-06'),
(7, 'roxana', '2022-05-06'),
(8, 'edenilson', '0000-00-00'),
(9, '', '0000-00-00'),
(10, '', '0000-00-00'),
(11, '', '0000-00-00'),
(12, '', '0000-00-00'),
(13, '', '0000-00-00'),
(14, 'batres', '2022-05-06'),
(15, 'victoria', '2022-05-06'),
(16, 'maira', '2022-05-06'),
(17, 'juaquin', '2022-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_detalle`
--

CREATE TABLE `pedidos_detalle` (
  `id_detalle` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedidos_detalle`
--

INSERT INTO `pedidos_detalle` (`id_detalle`, `id_pedido`, `id_producto`) VALUES
(1, 15, 1),
(2, 15, 12),
(3, 16, 1),
(4, 16, 5),
(5, 17, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_producto` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish2_ci NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `descripcion_producto`, `imagen`, `precio`) VALUES
(1, 'ordenador portatil', 'dell inspiron t800', '/public/img/avatar1.img', 800),
(2, 'mause ', 'MOUSE LOGITECH G502 GAMING (OPTICO, ILUMINAD0)', '/public/img/avatar2.img', 109),
(3, 'IMPRESORA EPSON L121 (ECOTANK)', 'Impresora Multifuncional Epson EcoTank® L121 (220V) C11CD76305\r\nBotella Tinta Negra T664120-AL　\r\nBotella Tinta Cian T664220-AL', '/public/img/avatar3.jpg', 185),
(4, 'BOCINAS LOGITECH LS21', 'TOTAL DE VATIOS REALES (RMS): 7 W,ALTAVOCES SATELITE: 2 X 1,5 W,ENTRADA DE 3,5 MM: 1, TOMA DEAURICULARES: 1, CONTROLES:ENCENDIDO Y VOLUMEN EN LA SECCION DE CONTROL CON CABLE, GRAVES EN LA PARTE POSTERIOR DEL SUBWOOFER.', '/public/img/avatar4.jpg', 35),
(5, 'TECLADO RAZER BLACKWIDOW (GAMING)', 'Modelo: RZ03-02861400-R311 ', '/public/img/avatar4.jpg', 169);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `pedidos_detalle`
--
ALTER TABLE `pedidos_detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pedidos_detalle`
--
ALTER TABLE `pedidos_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
