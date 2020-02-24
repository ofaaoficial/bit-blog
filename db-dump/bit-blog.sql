-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2020 a las 17:50:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bit-blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Tecnologia', 'Categoria de tecnologia.'),
(2, 'Noticia', 'Noticas de la actualidad.'),
(3, 'categoria de prueba', 'des');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `publicacion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `contenido`, `publicacion_id`, `usuario_id`) VALUES
(1, 'comentario 1', 1, 1),
(2, 'Gracias por la informacion', 1, 2),
(3, 'Tengo una pregunta, a cual correo puedo enviarla?', 1, 2),
(4, 'Buena informacion.', 2, 2),
(5, 'khqkjdshkashdkashd', 4, 1),
(6, 'aishdihasdksdh', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `contenido` varchar(1000) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_edicion` datetime DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `creador_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `contenido`, `fecha_creacion`, `fecha_edicion`, `categoria_id`, `creador_id`) VALUES
(1, 'Facebook os rechace una publicación', 'Si no queréis que Facebook os rechace una publicación promocionada porque tiene más del 20% de texto este post os interesará. A raíz de un tweet de @JaninaDG me he puesto a buscar formas de saber si las publicaciones tienen más o menos del 20% de texto. Hasta el momento para mi era un trabajo más bien manual, de ver y a ojo medir que mis publicaciones no tenían más del 20% de texto. Es importante saber si tu imagen tiene más del 20% para promocionarla  (Facebook Ads). La red social cumple muy a raja tabla esta política, yo he intentado colar un poco más del 20% y siempre me lo han rechazado.', '2020-02-18 07:02:41', '2020-02-24 03:02:33', 1, 1),
(2, 'Tren del Pacífico: del desarrollo al abandono', 'Ya van más de dos años de proceso jurídico entre la ANI y Ferrocarril del Pacífico. Hasta que el tribunal de arbitramento no resuelva la situación no se podrá avanzar con el proyecto.\r\n\r\nEl Tren del Pacífico es una de las promesas de desarrollo para el Quindío que en un primer anuncio se advirtió que estaría listo en diciembre de 2013, pero hoy este proyecto, que acortaría los tiempos en el transporte de carga entre La Tebaida y Buenaventura y que además sería un atractivo turístico, se encuentra en completo abandono.\r\n\r\n', '2020-02-24 03:02:28', NULL, 2, 2),
(3, 'Centros de salud no son para urgencias', 'Estas instituciones habilitan y acreditan servicios considerados de baja complejidad y se dedican a realizar intervenciones y actividades de promoción de la salud y prevención de la enfermedad, consulta médica y odontológica.\r\n\r\n', '2020-02-24 04:02:42', NULL, 2, 1),
(4, 'titulo de prueba', 'contenido jdsafljsdafjsd', '2020-02-24 05:02:22', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `sitio_web` varchar(45) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contrasenia`, `nombres`, `apellidos`, `direccion`, `celular`, `sitio_web`, `profesion`, `rol_id`) VALUES
(1, 'oscarfamado@gmail.com', '$2y$10$.mwY.P4wL8lEUEkVAGBL3OSQldg.3hLEwItswroQAApMioK6Cb1l2', 'Oscar Felipe', 'Guerrero Amado', 'direccion', '3017311931', 'https://www.linkedin.com/in/ofaaoficial/', 'Desarrollador web', 1),
(2, 'andrescortes@gmail.com', '$2y$10$eE2ganVuDjGh7JdBm8y.qeqti8gPenlvXBkBY7dRCpsMMLudM2hW2', 'Andres', 'Cortes', 'no se', '301931123', 'http://google.com', 'Desarrollador', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`,`publicacion_id`,`usuario_id`),
  ADD KEY `fk_comentarios_publicaciones1_idx` (`publicacion_id`),
  ADD KEY `fk_comentarios_usuarios1_idx` (`usuario_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`,`categoria_id`,`creador_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_publicaciones_categorias_idx` (`categoria_id`),
  ADD KEY `fk_publicaciones_usuarios1_idx` (`creador_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`,`rol_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`),
  ADD KEY `fk_usuarios_roles1_idx` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_publicaciones1` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_publicaciones_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_publicaciones_usuarios1` FOREIGN KEY (`creador_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
