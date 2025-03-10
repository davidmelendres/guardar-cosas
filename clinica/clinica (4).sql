-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 15:37:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_hc`
--

CREATE TABLE `detalle_hc` (
  `id_HC` int(11) NOT NULL,
  `Detalles_HC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_hc`
--

INSERT INTO `detalle_hc` (`id_HC`, `Detalles_HC`) VALUES
(1, 'enfermo\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `Id_Especialidad` int(11) NOT NULL,
  `Profesional_Especialidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`Id_Especialidad`, `Profesional_Especialidad`) VALUES
(1, 'cirujano'),
(2, 'cardeologo'),
(3, 'oftalmologia'),
(4, 'trasformer'),
(5, 'pato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `Id_HistorialClinico` int(11) NOT NULL,
  `Paciente_HistorialClinico` int(11) NOT NULL,
  `Detalle_PacienteHC` int(11) NOT NULL,
  `Doctor_PacienteHC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`Id_HistorialClinico`, `Paciente_HistorialClinico`, `Detalle_PacienteHC`, `Doctor_PacienteHC`) VALUES
(1, 2, 1, 2),
(2, 1, 1, 1),
(3, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `Id_Paciente` int(11) NOT NULL,
  `Nombre_Paciente` text NOT NULL,
  `Apellido_Paciente` text NOT NULL,
  `Edad_paciente` int(11) NOT NULL,
  `sexo_Paciente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Id_Paciente`, `Nombre_Paciente`, `Apellido_Paciente`, `Edad_paciente`, `sexo_Paciente`) VALUES
(1, 'jorge', 'real', 37, 'masculino'),
(2, 'maria', 'mercedes', 70, 'femenino'),
(3, 'juan', 'perez', 20, 'masculino'),
(4, 'julian', 'pastor', 13, 'femenino'),
(5, 'gregory', 'house', 60, 'masculino'),
(6, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE `profesional` (
  `Id_Profesional` int(11) NOT NULL,
  `Nombre_Profesional` text NOT NULL,
  `Apellido_Profesional` text NOT NULL,
  `Especialidad_Profesional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profesional`
--

INSERT INTO `profesional` (`Id_Profesional`, `Nombre_Profesional`, `Apellido_Profesional`, `Especialidad_Profesional`) VALUES
(1, 'gregory', 'house', 1),
(2, 'juan', 'foreman', 1),
(3, 'julian', 'cristobal', 2),
(4, 'jlautaro', 'barrionuevo', 2),
(5, 'jose', 'nose', 1),
(6, 'maxi', 'eduardo', 3),
(7, '', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_hc`
--
ALTER TABLE `detalle_hc`
  ADD PRIMARY KEY (`id_HC`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`Id_Especialidad`);

--
-- Indices de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD PRIMARY KEY (`Id_HistorialClinico`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`Id_Paciente`);

--
-- Indices de la tabla `profesional`
--
ALTER TABLE `profesional`
  ADD PRIMARY KEY (`Id_Profesional`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_hc`
--
ALTER TABLE `detalle_hc`
  MODIFY `id_HC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `Id_Especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  MODIFY `Id_HistorialClinico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `Id_Paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `profesional`
--
ALTER TABLE `profesional`
  MODIFY `Id_Profesional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
