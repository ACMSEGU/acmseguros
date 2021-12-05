-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 23:37:03
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_acm_seguros`
--
-- CREATE DATABASE IF NOT EXISTS `bd_acm_seguros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bxddiwhynnze0yovf4lv`;

DELIMITER $$
--
-- Procedimientos
--
CREATE PROCEDURE `lista_cliente` ()  SELECT c.id_cliente,CONCAT(c.nombre_cliente,' ',c.apellido_cliente) as cliente_regis,c.dui,c.nit,c.direccion,CONCAT(m.municipio,' / ',d.nombre) as muni_depar,c.fecha_nacimiento,c.correo,c.telefono,CONCAT(cr.nombre_corredor_asesor,' ',cr.apellido_corredor_asesor)as cor_atendiente FROM cliente c INNER JOIN municipio m on m.id = c.id_municipio INNER JOIN departamento d on d.id_departamento = m.id_depto INNER JOIN corredor cr on cr.id_corredor = c.idCorredor$$

CREATE  PROCEDURE `lista_poliza` ()  SELECT p.id_poliza,CONCAT(c.nombre_cliente,' ',c.apellido_cliente) as beneficiario,a.nombre AS aseguranza,p.numero_poliza,r.nombre,p.plan_contratado,p.vigencia_inicial,p.vigencia_final,p.suma_asegurada,if(p.estado = 1,'VIGENTE','CANCELADO') AS estado_poliza FROM poliza p INNER JOIN cliente c on c.id_cliente = p.asegurado INNER JOIN aseguradora a ON a.id_aseguradora = p.idAseguradora INNER JOIN ramo r on r.id_ramo = p.idRamo$$

CREATE  PROCEDURE `num_pol_auto` ()  SELECT COUNT(id_poliza) AS cont_poliza_auto FROM poliza WHERE idRamo = 1$$

CREATE  PROCEDURE `num_pol_finanzas` ()  SELECT COUNT(id_poliza) AS cont_poliza_finanzas FROM poliza WHERE idRamo = 6$$

CREATE  PROCEDURE `num_pol_incendio` ()  SELECT COUNT(id_poliza) AS cont_poliza_incendio FROM poliza WHERE idRamo = 3$$

CREATE  PROCEDURE `num_pol_medico` ()  SELECT COUNT(id_poliza) AS cont_poliza_medico FROM poliza WHERE idRamo = 2$$

CREATE  PROCEDURE `num_pol_multiple` ()  SELECT COUNT(id_poliza) AS cont_poliza_multiple FROM poliza WHERE idRamo = 4$$

CREATE PROCEDURE `num_pol_residencial` ()  SELECT COUNT(id_poliza) AS cont_poliza_residencial FROM poliza WHERE idRamo = 5$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradora`
--

CREATE TABLE `aseguradora` (
  `id_aseguradora` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contacto_fijo_aseguradora` varchar(10) NOT NULL,
  `nombre_asesor_atendiente` varchar(50) NOT NULL,
  `contacto_asesor_atendiente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aseguradora`
--

INSERT INTO `aseguradora` (`id_aseguradora`, `nombre`, `razon_social`, `direccion`, `contacto_fijo_aseguradora`, `nombre_asesor_atendiente`, `contacto_asesor_atendiente`) VALUES
(1, 'ASESUISA SURA', 'Empresa aseguradora enfocda en e la aseguranza y la protección de la vida', 'Colonia Escalón, Calle la ventura, Local N°3 Edificio Morales ', '7525-0000', 'Carlos Adalberto Villalta Ruiz', '7615-1486'),
(3, 'Palimed', 'Aseguranza para personas', 'Av 115, Edificio Comercail #4', '7815-1454', 'Francisco David Portillo Soler', '7557-8965');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `dui` varchar(15) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `idCorredor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `dui`, `nit`, `direccion`, `id_municipio`, `fecha_nacimiento`, `correo`, `telefono`, `idCorredor`) VALUES
(2, 'marvin antonio', 'pineda ramos', '45455465-4', '1231-231231-231-2', 'san salvador calle al volcan', 193, '0000-00-00', 'prueba@gmail.com', '3333-3333', 1),
(3, 'Paula Cristina ', 'Carcamo Lopez', '01024587-0', '0000-000000-000-1', 'Av. PONIENTE Residencial Las camelias', 19, '2021-11-01', 'pao12lopez@gmail.com', '7457-8598', 8),
(4, 'David Alejandro', 'Ramirez Lopez', '100000-000-000', '1223-1020-102-2', 'Carretera Litoral Sector Comercial, AV independiente, Casa #10 F3', 193, '2021-11-01', 'davidalejandro13@gmail.com', '74581514', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `id_ramo` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `anio_vehiculo` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `suma_asegurada` decimal(18,2) NOT NULL,
  `edad` int(10) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre_completo`, `telefono_contacto`, `correo_electronico`, `id_ramo`, `marca`, `modelo`, `anio_vehiculo`, `direccion`, `suma_asegurada`, `edad`, `comentario`) VALUES
(1, '0', '', 'toreroj@gmail.com', 5, '', '', '', 'Mi casa', '0.00', 0, 'Hola'),
(2, '0', '7701-9632', 'sandra01@gmail.com', 5, 'Toyota', 'Corolla', '2000', '', '15000.00', 0, 'Necesito asegurar mi auto'),
(3, '0', '7777-8888', 'Fju@gmail.com', 5, '', '', '', 'aa', '0.00', 0, 'aaaaa'),
(4, 'Test', '7777-8888', 'Fju@gmail.com', 5, '', '', '', 'aa', '0.00', 0, 'aaaaa'),
(5, 'Marvin Maricon', '7777-7777', 'ee@gmail.com', 5, '', '', '', 'Casa', '0.00', 0, 'Pendejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `id_corredor` int(11) NOT NULL,
  `nombre_corredor_asesor` varchar(50) NOT NULL,
  `apellido_corredor_asesor` varchar(50) NOT NULL,
  `contacto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corredor`
--

INSERT INTO `corredor` (`id_corredor`, `nombre_corredor_asesor`, `apellido_corredor_asesor`, `contacto`) VALUES
(1, 'Jessica Esmeralda ', 'Carcamo Soler', '7929-8654'),
(8, 'Hugo Balderrama', 'Benitez', '7777-7777'),
(10, 'Duglas', 'Lopez', '7777-7777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`) VALUES
(1, 'Ahuachapán'),
(2, 'Cabañas'),
(3, 'Chalatenango'),
(4, 'Cuscatlán'),
(5, 'La Libertad'),
(6, 'La Paz'),
(7, 'La Unión'),
(8, 'Morazán'),
(9, 'San Miguel'),
(10, 'San Salvador'),
(11, 'San Vicente'),
(12, 'Santa Ana'),
(13, 'Sonsonate'),
(14, 'Usulután');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'BMW'),
(2, 'CHEVROLET'),
(3, 'CITROEN'),
(4, 'FERRARI'),
(5, 'FIAT'),
(6, 'FORD'),
(7, 'HONDA'),
(8, 'HYUNDAI'),
(9, 'JAGUAR'),
(10, 'JEEP'),
(11, 'KIA'),
(12, 'LAND ROVER'),
(13, 'MASERATI'),
(14, 'MAZDA'),
(15, 'MITSUBISHI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `decrip_modelo` varchar(50) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `decrip_modelo`, `id_marca`) VALUES
(1, 'SERIE1', 1),
(2, 'SERIE3', 1),
(3, 'SERIE5', 1),
(4, 'SERIE6', 1),
(5, 'SERIE7', 1),
(6, 'X1', 1),
(7, 'X3', 1),
(8, 'X5', 1),
(9, 'X6', 1),
(10, 'Z3', 1),
(11, 'Z4', 1),
(12, 'AGILE', 2),
(13, 'ASTRA', 2),
(14, 'ASTRA II', 2),
(15, 'AVALANCHE', 2),
(16, 'AVEO', 2),
(17, 'BLAZER', 2),
(18, 'CAMARO', 2),
(19, 'ASTRA', 2),
(20, 'CAPTIVA', 2),
(21, 'CELTA', 2),
(22, 'CLASSIC', 2),
(23, 'C3', 3),
(24, 'C3 AIRCROSS', 3),
(25, 'C3 PICASSO', 3),
(26, 'C4 AIRCROSS', 3),
(27, 'C4 LOUNGE', 3),
(28, 'C4 PICASSO', 3),
(29, 'C4 GRAND PICASSO', 3),
(30, 'C5', 3),
(31, 'C6', 3),
(32, 'DS3', 3),
(33, 'DS4', 3),
(34, 'C15', 3),
(35, 'DS3', 3),
(36, 'JUMPER', 3),
(37, 'SAXO', 3),
(38, 'XSARA', 3),
(39, 'XSARA PICASSO', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `id_depto` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `id_depto`, `municipio`) VALUES
(1, 1, 'Ahuachapán'),
(2, 1, 'Jujutla'),
(3, 1, 'Atiquizaya'),
(4, 1, 'Concepción de Ataco'),
(5, 1, 'El Refugio'),
(6, 1, 'Guaymango'),
(7, 1, 'Apaneca'),
(8, 1, 'San Francisco Menéndez'),
(9, 1, 'San Lorenzo'),
(10, 1, 'San Pedro Puxtla'),
(11, 1, 'Tacuba'),
(12, 1, 'Turín'),
(13, 2, 'Cinquera'),
(14, 2, 'Villa Dolores'),
(15, 2, 'Guacotecti'),
(16, 2, 'Ilobasco'),
(17, 2, 'Jutiapa'),
(18, 2, 'San Isidro'),
(19, 2, 'Sensuntepeque'),
(20, 2, 'Ciudad de Tejutepeque'),
(21, 2, 'Victoria'),
(22, 3, 'Agua Caliente'),
(23, 3, 'Arcatao'),
(24, 3, 'Azacualpa'),
(25, 3, 'Chalatenango'),
(26, 3, 'Citalá'),
(27, 3, 'Comalapa'),
(28, 3, 'Concepción Quezaltepeque'),
(29, 3, 'Dulce Nombre de María'),
(30, 3, 'El Carrizal'),
(31, 3, 'El Paraíso'),
(32, 3, 'La Laguna'),
(33, 3, 'La Palma'),
(34, 3, 'La Reina'),
(35, 3, 'Las Vueltas'),
(36, 3, 'Nombre de Jesús'),
(37, 3, 'Nueva Concepción'),
(38, 3, 'Nueva Trinidad'),
(39, 3, 'Ojos de Agua'),
(40, 3, 'Potonico'),
(41, 3, 'San Antonio de la Cruz'),
(42, 3, 'San Antonio Los Ranchos'),
(43, 3, 'San Fernando'),
(44, 3, 'San Francisco Lempa'),
(45, 3, 'San Francisco Morazán'),
(46, 3, 'San Ignacio'),
(47, 3, 'San Isidro Labrador'),
(48, 3, 'San José Cancasque'),
(49, 3, 'San José Las Flores'),
(50, 3, 'San Luis del Carmen'),
(51, 3, 'San Miguel de Mercedes'),
(52, 3, 'San Rafael'),
(53, 3, 'Santa Rita'),
(54, 3, 'Tejutla'),
(55, 4, 'Candelaria'),
(56, 4, 'Cojutepeque'),
(57, 4, 'El Carmen'),
(58, 4, 'El Rosario'),
(59, 4, 'Monte San Juan'),
(60, 4, 'Oratorio de Concepción'),
(61, 4, 'San Bartolomé Perulapía'),
(62, 4, 'San Cristóbal'),
(63, 4, 'San José Guayabal'),
(64, 4, 'San Pedro Perulapán'),
(65, 4, 'San Rafael Cedros'),
(66, 4, 'San Ramón'),
(67, 4, 'Santa Cruz Analquito'),
(68, 4, 'Santa Cruz Michapa'),
(69, 4, 'Suchitoto'),
(70, 4, 'Tenancingo'),
(71, 5, 'Antiguo Cuscatlán'),
(72, 5, 'Chiltiupán'),
(73, 5, 'Ciudad Arce'),
(74, 5, 'Colón'),
(75, 5, 'Comasagua'),
(76, 5, 'Huizúcar'),
(77, 5, 'Jayaque'),
(78, 5, 'Jicalapa'),
(79, 5, 'La Libertad'),
(80, 5, 'Nueva San Salvador'),
(81, 5, 'Nuevo Cuscatlán'),
(82, 5, 'Opico'),
(83, 5, 'Quezaltepeque'),
(84, 5, 'Sacacoyo'),
(85, 5, 'San José Villanueva'),
(86, 5, 'San Matías'),
(87, 5, 'San Pablo Tacachico'),
(88, 5, 'Talnique'),
(89, 5, 'Tamanique'),
(90, 5, 'Teotepeque'),
(91, 5, 'Tepecoyo'),
(92, 5, 'Zaragoza'),
(93, 6, 'Cuyultitán'),
(94, 6, 'El Rosario'),
(95, 6, 'Jerusalén'),
(96, 6, 'Mercedes La Ceiba'),
(97, 6, 'Olocuilta'),
(98, 6, 'Paraíso de Osorio'),
(99, 6, 'San Antonio Masahuat'),
(100, 6, 'San Emigdio'),
(101, 6, 'San Francisco Chinameca'),
(102, 6, 'San Juan Nonualco'),
(103, 6, 'San Juan Talpa'),
(104, 6, 'San Juan Tepezontes'),
(105, 6, 'San Luis La Herradura'),
(106, 6, 'San Luis Talpa'),
(107, 6, 'San Miguel Tepezontes'),
(108, 6, 'San Pedro Masahuat'),
(109, 6, 'San Pedro Nonualco'),
(110, 6, 'San Rafael Obrajuelo'),
(111, 6, 'Santa María Ostuma'),
(112, 6, 'Santiago Nonualco'),
(113, 6, 'Tapalhuaca'),
(114, 6, 'Zacatecoluca'),
(115, 7, 'Anamorós'),
(116, 7, 'Bolívar'),
(117, 7, 'Concepción de Oriente'),
(118, 7, 'Conchagua'),
(119, 7, 'El Carmen'),
(120, 7, 'El Sauce'),
(121, 7, 'Intipucá'),
(122, 7, 'La Unión'),
(123, 7, 'Lislique'),
(124, 7, 'Meanguera del Golfo'),
(125, 7, 'Nueva Esparta'),
(126, 7, 'Pasaquina'),
(127, 7, 'Polorós'),
(128, 7, 'San Alejo'),
(129, 7, 'San José'),
(130, 7, 'Santa Rosa de Lima'),
(131, 7, 'Yayantique'),
(132, 7, 'Yucuayquín'),
(133, 8, 'Arambala'),
(134, 8, 'Cacaopera'),
(135, 8, 'Chilanga'),
(136, 8, 'Corinto'),
(137, 8, 'Delicias de Concepción'),
(138, 8, 'El Divisadero'),
(139, 8, 'El Rosario'),
(140, 8, 'Gualococti'),
(141, 8, 'Guatajiagua'),
(142, 8, 'Joateca'),
(143, 8, 'Jocoaitique'),
(144, 8, 'Jocoro'),
(145, 8, 'Lolotiquillo'),
(146, 8, 'Meanguera'),
(147, 8, 'Osicala'),
(148, 8, 'Perquín'),
(149, 8, 'San Carlos'),
(150, 8, 'San Fernando'),
(151, 8, 'San Francisco Gotera'),
(152, 8, 'San Isidro'),
(153, 8, 'San Simón'),
(154, 8, 'Sensembra'),
(155, 8, 'Sociedad'),
(156, 8, 'Torola'),
(157, 8, 'Yamabal'),
(158, 8, 'Yoloaiquín'),
(159, 9, 'Carolina'),
(160, 9, 'Chapeltique'),
(161, 9, 'Chinameca'),
(162, 9, 'Chirilagua'),
(163, 9, 'Ciudad Barrios'),
(164, 9, 'Comacarán'),
(165, 9, 'El Tránsito'),
(166, 9, 'Lolotique'),
(167, 9, 'Moncagua'),
(168, 9, 'Nueva Guadalupe'),
(169, 9, 'Nuevo Edén de San Juan'),
(170, 9, 'Quelepa'),
(171, 9, 'San Antonio'),
(172, 9, 'San Gerardo'),
(173, 9, 'San Jorge'),
(174, 9, 'San Luis de la Reina'),
(175, 9, 'San Miguel'),
(176, 9, 'San Rafael'),
(177, 9, 'Sesori'),
(178, 9, 'Uluazapa'),
(179, 10, 'Aguilares'),
(180, 10, 'Apopa'),
(181, 10, 'Ayutuxtepeque'),
(182, 10, 'Cuscatancingo'),
(183, 10, 'Delgado'),
(184, 10, 'El Paisnal'),
(185, 10, 'Guazapa'),
(186, 10, 'Ilopango'),
(187, 10, 'Mejicanos'),
(188, 10, 'Nejapa'),
(189, 10, 'Panchimalco'),
(190, 10, 'Rosario de Mora'),
(191, 10, 'San Marcos'),
(192, 10, 'San Martín'),
(193, 10, 'San Salvador'),
(194, 10, 'Santiago Texacuangos'),
(195, 10, 'Santo Tomás'),
(196, 10, 'Soyapango'),
(197, 10, 'Tonacatepeque'),
(198, 11, 'Apastepeque'),
(199, 11, 'Guadalupe'),
(200, 11, 'San Cayetano Istepeque'),
(201, 11, 'San Esteban Catarina'),
(202, 11, 'San Ildefonso'),
(203, 11, 'San Lorenzo'),
(204, 11, 'San Sebastián'),
(205, 11, 'Santa Clara'),
(206, 11, 'Santo Domingo'),
(207, 11, 'San Vicente'),
(208, 11, 'Tecoluca'),
(209, 11, 'Tepetitán'),
(210, 11, 'Verapaz'),
(211, 12, 'Candelaria de la Frontera'),
(212, 12, 'Chalchuapa'),
(213, 12, 'Coatepeque'),
(214, 12, 'El Congo'),
(215, 12, 'El Porvenir'),
(216, 12, 'Masahuat'),
(217, 12, 'Metapán'),
(218, 12, 'San Antonio Pajonal'),
(219, 12, 'San Sebastián Salitrillo'),
(220, 12, 'Santa Ana'),
(221, 12, 'Santa Rosa Guachipilín'),
(222, 12, 'Santiago de la Frontera'),
(223, 12, 'Texistepeque'),
(224, 13, 'Acajutla'),
(225, 13, 'Armenia'),
(226, 13, 'Caluco'),
(227, 13, 'Cuisnahuat'),
(228, 13, 'Izalco'),
(229, 13, 'Juayúa'),
(230, 13, 'Nahuizalco'),
(231, 13, 'Nahulingo'),
(232, 13, 'Salcoatitán'),
(233, 13, 'San Antonio del Monte'),
(234, 13, 'San Julián'),
(235, 13, 'Santa Catarina Masahuat'),
(236, 13, 'Santa Isabel Ishuatán'),
(237, 13, 'Santo Domingo'),
(238, 13, 'Sonsonate'),
(239, 13, 'Sonzacate'),
(240, 14, 'Alegría'),
(241, 14, 'Berlín'),
(242, 14, 'California'),
(243, 14, 'Concepción Batres'),
(244, 14, 'El Triunfo'),
(245, 14, 'Ereguayquín'),
(246, 14, 'Estanzuelas'),
(247, 14, 'Jiquilisco'),
(248, 14, 'Jucuapa'),
(249, 14, 'Jucuarán'),
(250, 14, 'Mercedes Umaña'),
(251, 14, 'Nueva Granada'),
(252, 14, 'Ozatlán'),
(253, 14, 'Puerto El Triunfo'),
(254, 14, 'San Agustín'),
(255, 14, 'San Buenaventura'),
(256, 14, 'San Dionisio'),
(257, 14, 'San Francisco Javier'),
(258, 14, 'Santa Elena'),
(259, 14, 'Santa María'),
(260, 14, 'Santiago de María'),
(261, 14, 'Tecapán'),
(262, 14, 'Usulután');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poliza`
--

CREATE TABLE `poliza` (
  `id_poliza` int(11) NOT NULL,
  `asegurado` int(11) NOT NULL,
  `nombre_contratante` varchar(100) DEFAULT NULL,
  `idAseguradora` int(11) NOT NULL,
  `numero_poliza` varchar(10) NOT NULL,
  `idRamo` int(11) NOT NULL,
  `plan_contratado` varchar(50) NOT NULL,
  `vigencia_inicial` varchar(50) NOT NULL,
  `vigencia_final` varchar(50) NOT NULL,
  `suma_asegurada` decimal(18,2) NOT NULL,
  `deducible` varchar(50) NOT NULL,
  `idModelo` int(11) DEFAULT NULL,
  `anio` varchar(50) DEFAULT NULL,
  `placa` varchar(50) DEFAULT NULL,
  `prima_total` decimal(18,2) NOT NULL,
  `forma_pago` varchar(50) NOT NULL,
  `valor_cuota` decimal(18,2) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `tipo_tramite` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `poliza`
--

INSERT INTO `poliza` (`id_poliza`, `asegurado`, `nombre_contratante`, `idAseguradora`, `numero_poliza`, `idRamo`, `plan_contratado`, `vigencia_inicial`, `vigencia_final`, `suma_asegurada`, `deducible`, `idModelo`, `anio`, `placa`, `prima_total`, `forma_pago`, `valor_cuota`, `metodo_pago`, `tipo_tramite`, `estado`) VALUES
(8, 3, 'Guzman', 3, '9965', 3, 'SI', 'SI', 'SI', '0.00', 'SI', 1, '2012', '555', '5555.00', '555', '5555.00', '5555', '8558', 1),
(9, 2, 'Guzman', 3, '9999', 5, 'Plan 1', 'Ayer', 'Mañana', '1500.00', '500', 2, '', 'ELMASPENDEJO01', '11000.00', 'No tengo dinero', '0.00', 'Ni nada que dar', 'Tramite', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramo`
--

CREATE TABLE `ramo` (
  `id_ramo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ramo`
--

INSERT INTO `ramo` (`id_ramo`, `nombre`, `descripcion`) VALUES
(1, 'Seguro de Automóvil', 'Seguro de Automóvil'),
(2, 'Seguro Gasto Medico', 'Seguro Gasto Medico'),
(3, 'Seguro todo riesgo incendio', 'Seguro todo riesgo incendio'),
(4, 'Seguro Vida Múltiple', 'Seguro Vida Múltiple'),
(5, 'Seguro de Residencia', 'Seguro de Residencia'),
(6, 'Fianzas', 'Fianzas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contacto` varchar(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `idtipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `contacto`, `user`, `pass`, `idtipo`) VALUES
(1, 'Rodrigo jose', 'Uribe Trejo', 'uribejose@gmail.com', '7456-2545', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(5, 'luis antonio', 'rodriguez lopez', 'prueba@gmail.com', '7548-8567', 'luis358', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  ADD PRIMARY KEY (`id_aseguradora`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `idDepartamento` (`idCorredor`),
  ADD KEY `lugar_nacimiento` (`id_municipio`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `tipo_seguro` (`id_ramo`);

--
-- Indices de la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD PRIMARY KEY (`id_corredor`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_departamento` (`id_depto`);

--
-- Indices de la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD PRIMARY KEY (`id_poliza`),
  ADD KEY `asegurado` (`asegurado`,`idAseguradora`,`idRamo`,`idModelo`),
  ADD KEY `idAseguradora` (`idAseguradora`),
  ADD KEY `idRamo` (`idRamo`),
  ADD KEY `idModelo` (`idModelo`);

--
-- Indices de la tabla `ramo`
--
ALTER TABLE `ramo`
  ADD PRIMARY KEY (`id_ramo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  MODIFY `id_aseguradora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `corredor`
--
ALTER TABLE `corredor`
  MODIFY `id_corredor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `poliza`
--
ALTER TABLE `poliza`
  MODIFY `id_poliza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ramo`
--
ALTER TABLE `ramo`
  MODIFY `id_ramo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`idCorredor`) REFERENCES `corredor` (`id_corredor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cliente_ibfk_4` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_ramo`) REFERENCES `ramo` (`id_ramo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_depto`) REFERENCES `departamento` (`id_departamento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD CONSTRAINT `poliza_ibfk_1` FOREIGN KEY (`asegurado`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `poliza_ibfk_2` FOREIGN KEY (`idAseguradora`) REFERENCES `aseguradora` (`id_aseguradora`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `poliza_ibfk_3` FOREIGN KEY (`idRamo`) REFERENCES `ramo` (`id_ramo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `poliza_ibfk_5` FOREIGN KEY (`idModelo`) REFERENCES `modelo` (`id_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
