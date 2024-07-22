-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2024 a las 21:29:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda-online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `descripcion`, `estado`) VALUES
(1, 'HOMBRE', '¿Buscas algún diseño para tu pareja? elije a tu gusto la prenda que quiere que luzca mas.', 1),
(2, 'MUJER', 'Velando por la calidad y pecio para los clientes acá podrás apreciar los formatos de\r\npijameria para dama mas votados por el publico y mas gustados por los clientes... Si te gusta \r\nalguno y te interesa comprarlo adelante! escoge el que más te guste.', 1),
(3, 'NIÑOS', '¿Buscas una prenda para el más pequeñito de la casa? puedes elegir la prenda que \r\nmás te guste para dárselo a esa persona especial.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` varchar(100) NOT NULL DEFAULT 'default.png',
  `token` varchar(100) DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `clave`, `perfil`, `token`, `verify`) VALUES
(1, 'yarmu', 'yarmu@gmail.com', '$2y$10$2kHNwG0ekyqWnUxIwtPye.pw/cgVusdmVcoUcZWDTv1OL53iN.6kC', 'default.png', 'ba148477e706ab1d3cb056bfd239f8b8', 1),
(2, 'yarmu', 'holi@gmail.com', '$2y$10$6BzW7dTqr18ACOUfAYPmZ.vWT/8ARezUZ.rwGVcFog/5YDHksWzwS', 'default.png', 'ef07b7108cc9a378a1a773684e2575f7', 1),
(31, 'timmy ', 'yarlinrivera12@gmail.com', '$2y$10$GINAiQ32L8mmr7sdpaWrC.v3I5Rb4pSmUqeJystGReDJ6W8l5e.du', 'default.png', NULL, 1),
(33, 'rivera', 'riveraenlaluna@gmail.com', '$2y$10$ALHUmB7DALyRRtpeg3vMZuj0RYWcfJ/9vGLYiTtlOUy2PuWN9pvqC', 'default.png', 'b7fafc680812b8ac203cfc9ee2581696', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`id`, `producto`, `precio`, `cantidad`, `id_pedido`, `id_producto`) VALUES
(12, 'Cielo Estrellado', 35.00, 1, 6, 8),
(13, 'Rojo Realeza', 35.00, 1, 6, 9),
(14, 'Black Night', 35.00, 1, 7, 3),
(15, 'Soft Blue and Black', 35.00, 1, 7, 5),
(16, 'Blue Sea', 35.00, 1, 7, 2),
(17, 'Rojo Realeza', 35.00, 1, 8, 9),
(18, 'Anivia Blanca', 35.00, 1, 8, 10),
(19, 'Child´s Blue', 35.00, 1, 8, 11),
(20, 'Blanco Primaveral', 35.00, 1, 9, 6),
(21, 'Black Night', 35.00, 1, 10, 3),
(22, 'Soft Blue', 35.00, 1, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(80) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `fecha` datetime NOT NULL,
  `email` varchar(80) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `proceso` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_transaccion`, `monto`, `estado`, `fecha`, `email`, `nombre`, `apellido`, `direccion`, `ciudad`, `id_cliente`, `proceso`) VALUES
(1, '6PX22696F1040260E', 1700.00, 'COMPLETED', '2023-02-20 17:12:42', 'sb-j6jdb7896999@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Lima', 5, '2'),
(2, '1HJ95121A9582915R', 16.00, 'COMPLETED', '2023-07-10 22:37:24', 'sb-j6jdb7896999@personal.example.com', 'John', 'Doe', 'Free Trade Zone', 'Lima', 3, '2'),
(3, '5WR516892B617725S', 38.00, 'COMPLETED', '2024-06-18 04:55:55', 'holi@gmail.com', 'yarmu', 'mok', 'awdja', 'werwrwer', 8, '2'),
(4, '6X8433676X509522B', 28.00, 'COMPLETED', '2024-06-18 08:08:58', 'hi@gmail.com', 'anyemu', 'mok', 'dfsfs', 'dfsfd', 9, '1'),
(5, '1A284339GT613351Y', 20.00, 'COMPLETED', '2024-06-18 08:50:08', 'sb-j6jdb7896999@personal.example.com', 'John', 'Doe', '4th Floor', 'San Jose', 12, '2'),
(6, '8EY420249B5165010', 70.00, 'COMPLETED', '2024-06-18 10:02:09', 'riveraenlaluna@gmail.com', 'anyemu', 'mok', 'fsdfsfd', 'fsdfsdfs', 12, '3'),
(7, '874090469P655841X', 105.00, 'COMPLETED', '2024-06-21 04:57:51', 'holi@gmail.com', 'anymu', 'mok', 'fsdfsfd', 'sda', 3, '1'),
(8, '8UA160150R4285619', 105.00, 'COMPLETED', '2024-06-21 05:17:59', 'holi@gmail.com', 'anymu', 'mok', 'fsdfsfd', 'fsdfsdfs', 3, '1'),
(9, '7AR41839V4619625X', 35.00, 'COMPLETED', '2024-06-21 05:20:57', 'holi@gmail.com', 'anymu', 'mok', 'fsdfsfd', 'fsdfsdfs', 3, '1'),
(10, '2FK41025TJ1910224', 70.00, 'COMPLETED', '2024-07-18 08:02:20', 'sb-j6jdb7896999@personal.example.com', 'John', 'Doe', '4th Floor', 'San Jose', 31, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `imagen`, `estado`, `id_categoria`) VALUES
(2, 'Blue Sea', 'Pijama para Hombre, 100% algodón, para pieles suaves y delicadas', 35.00, 23, 'assets/images/productos/20240618093250.jpg', 1, 1),
(3, 'Black Night', 'Pijama para Hombre, 100% algodón, para pieles suaves y delicadas', 35.00, 4, 'assets/images/productos/20240618093515.jpg', 1, 1),
(4, 'Soft Blue', 'Pijama para Hombre, 100% algodón, para pieles suaves y delicadas', 35.00, 19, 'assets/images/productos/20240618093616.jpg', 1, 1),
(5, 'Soft Blue and Black', 'Pijama para Hombre, 100% algodón, para pieles suaves y delicadas', 35.00, 30, 'assets/images/productos/20240618093729.jpg', 1, 1),
(6, 'Blanco Primaveral', 'Pijama para Mujer, 100% algodón, para pieles suaves y delicadas', 35.00, 23, 'assets/images/productos/20240618093900.jpg', 1, 2),
(7, 'Black Pink', 'Pijama para Mujer, 100% algodón, para pieles suaves y delicadas', 35.00, 30, 'assets/images/productos/20240618093947.jpg', 1, 2),
(8, 'Cielo Estrellado', 'Pijama para Mujer, 100% algodón, para pieles suaves y delicadas', 35.00, 25, 'assets/images/productos/20240618094108.jpg', 1, 2),
(9, 'Rojo Realeza', 'Pijama para Mujer, 100% algodón, para pieles suaves y delicadas', 35.00, 25, 'assets/images/productos/20240618094213.jpg', 1, 2),
(10, 'Anivia Blanca', 'Pijama para Mujer, 100% algodón, para pieles suaves y delicadas', 35.00, 5, 'assets/images/productos/20240618095348.jpg', 1, 2),
(11, 'Child´s Blue', 'Pijama para Niños, 100% algodón, para pieles suaves y delicadas', 35.00, 18, 'assets/images/productos/20240618094517.jpg', 1, 3),
(12, 'Child´s Indigo', 'Pijama para Niños, 100% algodón, para pieles suaves y delicadas', 35.00, 19, 'assets/images/productos/20240618094836.jpg', 1, 3),
(13, 'Jey Grey', 'Pijama para Niños, 100% algodón, para pieles suaves y delicadas', 35.00, 30, 'assets/images/productos/20240618094926.jpg', 1, 3),
(14, 'Blue Ocean', 'Pijama para Niños, 100% algodón, para pieles suaves y delicadas', 35.00, 27, 'assets/images/productos/20240618095132.jpg', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_tallas`
--

CREATE TABLE `productos_tallas` (
  `producto_id` int(11) NOT NULL,
  `talla_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `nombre`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, '10'),
(6, '12'),
(7, '14'),
(8, '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `perfil`, `estado`) VALUES
(1, 'Jacqueline', 'Perez', 'shalom.pijamas.notificaciones@gmail.com', '$2y$10$XtV68JJ/fABHwWMARZotF.9BHbkwBpquycry2HYOlS.QaUGt/mls2', NULL, 1),
(2, 'Santiago', 'Gonzalez', 'sgonzalez@gmail.com', '$2y$10$ZX9BeymxshOoe/I3pGoIp.6Ai5mrVxN1rdS4nrAQILsOjE9DPwdXW', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `productos_tallas`
--
ALTER TABLE `productos_tallas`
  ADD PRIMARY KEY (`producto_id`,`talla_id`),
  ADD KEY `talla_id` (`talla_id`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `detalle_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `productos_tallas`
--
ALTER TABLE `productos_tallas`
  ADD CONSTRAINT `productos_tallas_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `productos_tallas_ibfk_2` FOREIGN KEY (`talla_id`) REFERENCES `tallas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
