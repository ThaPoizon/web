-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 04:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `clientes_id` int(13) NOT NULL,
  `clientes_nombre` varchar(50) NOT NULL,
  `clientes_apellido` varchar(50) NOT NULL,
  `clientes_correo` varchar(100) NOT NULL,
  `clientes_telefono` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`clientes_id`, `clientes_nombre`, `clientes_apellido`, `clientes_correo`, `clientes_telefono`) VALUES
(1, 'Jose', 'Perez', 'joseperez@gmail.com', 2147483647),
(2, 'Jose2', 'Perez2', 'joseperez2@gmail.com', 2147483647),
(3, 'Juan', 'Gonzales', 'jgnz@gmial.com', 2147483647),
(4, 'wew23213', '123', 'wqesqe', 123),
(5, 'Mario', 'Cola', 'mc@gmail.com', 2147483647),
(6, 'Eduardo', 'Frisbie', 'edufis@hotmail.com', 2147483647),
(7, 'Pepe', 'Grillo', 'ppgrillo@gmail.com', 2147483647),
(8, 'Dani', 'Morales', 'dmoral@outlook.com', 2147483647),
(9, 'Juan', 'Perez2', 'joseperez@gmail.com', 2147483647),
(10, 'Mario', 'Gonzales', 'joseperez@gmail.com', 2147483647),
(11, 'Jose', 'Gonzales', 'joseperez@gmail.com', 2147483647),
(12, 'Eduardo', 'Cola', 'edufis@hotmail.com', 2147483647),
(13, 'Mario', 'Perez2', 'joseperez@gmail.com', 123),
(14, 'Mario', 'Nalfa', 'joseperez2@gmail.com', 123543253),
(15, 'Daniela', 'Morales', 'danimora@gmail.com', 2147483647),
(16, 'Mario', 'Morales', 'joseperez@gmail.com', 0),
(17, 'Jose', 'Perez2', 'joseperez@gmail.com', 0),
(18, 'Jose', 'Gonzales', 'joseperez@gmail.com', 0),
(19, 'Mario', 'Morales', 'joseperez2@gmail.com', 0),
(20, 'Mario', 'Gonzales', 'joseperez2@gmail.com', 0),
(21, 'Jose', 'Morales', 'joseperez2@gmail.com', 0),
(22, 'Jose', 'Perez2', 'joseperez2@gmail.com', 0),
(23, 'Mario', 'Gonzales', 'joseperez2@gmail.com', 0),
(24, 'Mario', 'Gonzales', 'joseperez@gmail.com', 0),
(25, 'Mario', 'Perez2', 'joseperez@gmail.com', 0),
(26, 'Mario', 'Perez2', 'joseperez@gmail.com', 0),
(27, 'Mario', 'Perez2', 'asdasdas@dfsf.com', 3243243);

-- --------------------------------------------------------

--
-- Table structure for table `habitaciones`
--

CREATE TABLE `habitaciones` (
  `habitaciones_id` int(13) NOT NULL,
  `habitaciones_tipo` varchar(50) NOT NULL,
  `habitaciones_precio` decimal(7,2) NOT NULL,
  `habitaciones_disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habitaciones`
--

INSERT INTO `habitaciones` (`habitaciones_id`, `habitaciones_tipo`, `habitaciones_precio`, `habitaciones_disponible`) VALUES
(1, 'Hotel 1', 9999.09, 1),
(2, 'Hotel 2', 5000.99, 1),
(3, 'Hotel 3', 2333.22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(8) NOT NULL,
  `nombre_com` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `nombre_com`, `usuario`, `clave`) VALUES
(1, 'EdmundoVG', 'edmundo', '21130598');

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `reservas_id` int(13) NOT NULL,
  `fk_clientes_id` int(13) NOT NULL,
  `fk_habitaciones_id` int(13) NOT NULL,
  `reservas_f_entrada` date NOT NULL,
  `reservas_f_salida` date NOT NULL,
  `reservas_estado` varchar(50) NOT NULL,
  `reservas_adultos` int(4) NOT NULL,
  `reservas_infantes` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`reservas_id`, `fk_clientes_id`, `fk_habitaciones_id`, `reservas_f_entrada`, `reservas_f_salida`, `reservas_estado`, `reservas_adultos`, `reservas_infantes`) VALUES
(50, 1, 1, '2024-05-23', '2024-05-30', 'sencilla', 0, 0),
(52, 1, 1, '2024-05-21', '2024-05-28', 'sencilla', 0, 0),
(53, 1, 1, '2024-05-21', '2024-05-28', 'sencilla', 0, 0),
(54, 1, 1, '2024-05-23', '2024-05-27', 'sencilla', 0, 0),
(55, 1, 1, '2024-05-23', '2024-05-27', 'sencilla', 0, 0),
(56, 1, 1, '2024-05-23', '2024-05-27', 'sencilla', 0, 0),
(57, 1, 1, '2024-05-23', '2024-05-27', 'sencilla', 0, 0),
(61, 11, 3, '2024-05-23', '2024-05-24', 'doble', 4, 4),
(84, 12, 3, '2024-05-24', '2024-05-25', 'sencilla', 3, 3),
(85, 13, 3, '2024-05-24', '2024-05-26', 'doble', 4, 4),
(86, 7, 1, '2024-05-24', '2024-05-26', 'sencilla', 1, 4),
(87, 3, 1, '2024-05-24', '2024-05-26', 'sencilla', 1, 4),
(88, 9, 3, '2024-05-24', '2024-05-26', 'sencilla', 1, 4),
(89, 7, 3, '2024-05-16', '2024-05-18', 'sencilla', 2, 2),
(90, 7, 2, '2024-05-16', '2024-05-18', 'sencilla', 2, 2),
(93, 8, 3, '2024-05-24', '2024-05-26', 'doble', 3, 3),
(94, 5, 2, '2024-05-24', '2024-05-25', 'doble', 2, 2),
(95, 5, 3, '2024-05-24', '2024-05-25', 'doble', 2, 2),
(96, 21, 1, '2024-05-23', '2024-05-25', 'doble', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clientes_id`);

--
-- Indexes for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`habitaciones_id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`reservas_id`),
  ADD KEY `reservas_ibfk_1` (`fk_clientes_id`),
  ADD KEY `reservas_ibfk_2` (`fk_habitaciones_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clientes_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `habitaciones_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `reservas_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`fk_clientes_id`) REFERENCES `clientes` (`clientes_id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`fk_habitaciones_id`) REFERENCES `habitaciones` (`habitaciones_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
