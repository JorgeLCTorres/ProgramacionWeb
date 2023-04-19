-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2023 at 04:54 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `id_tienda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `fecha_registro`, `id_tienda`) VALUES
(1, 'Dulces', 'En esta categoria se guardan todos los snacks', '2023-04-14 06:46:50', 2),
(2, 'Sabritas', 'La competencia de Encanto', '2023-04-14 06:04:57', 2),
(10, 'Pan', 'Todo tipo de pan', '2023-04-19 04:04:56', 3),
(11, 'cat 1', 'qfwef', '2023-04-19 01:04:37', 9);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `precio` double NOT NULL,
  `stock` int NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `id_categoria` int NOT NULL,
  `id_tienda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `precio`, `stock`, `fecha_registro`, `id_categoria`, `id_tienda`) VALUES
(1, '1234', 'Doritos', 18, 0, '2023-04-18 06:14:35', 2, 2),
(9, '1', 'Producto 1', 10, 10, '2023-04-19 01:04:55', 11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tienda`
--

CREATE TABLE `tienda` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tienda`
--

INSERT INTO `tienda` (`id`, `nombre`, `estado`) VALUES
(1, 'root', 1),
(2, 'WalMart', 1),
(3, 'HEB', 1),
(9, 'Tienda 34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '2',
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `id_tienda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `tipo`, `nombre`, `apellido`, `username`, `email`, `password`, `fecha_registro`, `id_tienda`) VALUES
(3, 1, 'Pedro', 'Perez', 'superadmin', 'pedro@gmail.com', 'superadmin', '2023-04-08 21:19:05', 1),
(4, 2, 'Maria', 'De La Cruz', 'admin', 'mari@gmail.com', 'admin', '2023-04-09 15:40:31', 2),
(6, 2, 'Jorge Luis', 'Charles Torres', 'jorge', 'jorgecharles@gmail.com', 'jorge', '2023-04-14 05:04:17', 2),
(7, 2, 'Adrian', 'Perales', 'adrian', 'adri@gmail.com', 'adrian', '2023-04-14 05:04:34', 2),
(9, 2, 'Mau', 'Hernandez', 'mauriciohc02', 'mauriciohdzc02@gmail.com', 'mauriciohc', '2023-04-14 05:04:47', 2),
(14, 2, 'demo', 'demo', 'demo', 'demo2@gmail.com', 'demo', '2023-04-19 01:04:28', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indexes for table `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
