-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jan-2024 às 20:38
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `siteti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ClienteID` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ClienteID`, `Nome`, `Password`, `Email`, `Telefone`) VALUES
(Null, 'lay', '123', 'laysabd@gmail.com', '912233445'),
(null, 'rui', '123', 'wayllw@gmail.com', '916192343'),
(null, 'Marta', '458', 'marta@gmail.com', '912345678'),
(null, 'ana', 'potato', 'potato@gmail.com', '123432111'),
(null, 'sandra', '123', 'sandra@gmail.com', '123123123'),
(null, 'admin', '123', 'admin@gmail.com', '123123123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinos`
--

CREATE TABLE `destinos` (
  `DestinoID` int(11) NOT NULL,
  `NomeDestino` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destinos`
--

INSERT INTO `destinos` (`DestinoID`, `NomeDestino`) VALUES
(1, 'Porto'),
(2, 'Munique'),
(3, 'Lisboa'),
(4, 'Roma'),
(5, 'Paris'),
(6, 'Madrid');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotesviagem`
--

CREATE TABLE `pacotesviagem` (
  `PacoteID` int(11) NOT NULL,
  `Destino` int(11) DEFAULT NULL,
  `DataPartida` date DEFAULT NULL,
  `DataRetorno` date DEFAULT NULL,
  `PrecoPacote` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pacotesviagem`
--

INSERT INTO `pacotesviagem` (`PacoteID`, `Destino`, `DataPartida`, `DataRetorno`, `PrecoPacote`) VALUES
(1, 1, '2024-01-18', '2024-01-31', 123.00),
(2, 4, '2024-01-20', '2024-02-04', 57.00),
(3, 6, '2024-01-18', '2024-01-31', 300.00),
(4, 1, '2024-01-28', '2024-05-10', 78.00),
(5, 6, '2024-01-25', '2024-03-08', 57.00),
(6, 1, '2024-01-18', '2024-01-24', 123.00),
(7, 6, '2024-01-17', '2024-01-26', 57.00),
(8, 1, '2024-02-01', '2024-02-10', 150.50),
(9, 2, '2024-03-05', '2024-03-15', 220.75),
(10, 3, '2024-04-12', '2024-04-20', 180.00),
(11, 4, '2024-05-18', '2024-05-25', 300.25),
(12, 5, '2024-06-22', '2024-06-30', 250.75),
(13, 6, '2024-07-10', '2024-07-20', 120.00),
(14, 1, '2024-08-15', '2024-08-25', 380.50),
(15, 2, '2024-09-20', '2024-09-30', 280.75),
(16, 3, '2024-10-12', '2024-10-20', 150.00),
(17, 4, '2024-11-18', '2024-11-25', 200.25),
(18, 5, '2024-12-22', '2024-12-30', 350.75),
(19, 6, '2025-01-10', '2025-01-20', 420.00),
(20, 1, '2025-02-15', '2025-02-25', 300.50),
(21, 2, '2025-03-20', '2025-03-30', 180.75),
(22, 3, '2025-04-12', '2025-04-20', 250.00),
(23, 4, '2025-05-18', '2025-05-25', 320.25),
(24, 5, '2025-06-22', '2025-06-30', 200.75),
(25, 6, '2025-07-10', '2025-07-20', 280.00),
(26, 1, '2025-08-15', '2025-08-25', 350.50),
(27, 2, '2025-09-20', '2025-09-30', 230.75),
(28, 3, '2025-10-12', '2025-10-20', 300.00),
(29, 4, '2025-11-18', '2025-11-25', 370.25),
(30, 5, '2025-12-22', '2025-12-30', 250.75),
(31, 6, '2026-01-10', '2026-01-20', 320.00),
(32, 1, '2026-02-15', '2026-02-25', 390.50),
(33, 2, '2026-03-20', '2026-03-30', 270.75),
(34, 3, '2026-04-12', '2026-04-20', 340.00),
(35, 4, '2026-05-18', '2026-05-25', 410.25),
(36, 5, '2026-06-22', '2026-06-30', 290.75),
(37, 6, '2026-07-10', '2026-07-20', 360.00),
(38, 1, '2026-08-15', '2026-08-25', 430.50),
(39, 2, '2026-09-20', '2026-09-30', 310.75),
(40, 3, '2026-10-12', '2026-10-20', 380.00),
(41, 4, '2026-11-18', '2026-11-25', 450.25),
(42, 5, '2026-12-22', '2026-12-30', 330.75),
(43, 6, '2027-01-10', '2027-01-20', 400.00),
(44, 1, '2027-02-15', '2027-02-25', 470.50),
(45, 2, '2027-03-20', '2027-03-30', 350.75),
(46, 3, '2027-04-12', '2027-04-20', 420.00),
(47, 4, '2027-05-18', '2027-05-25', 490.25),
(48, 5, '2027-06-22', '2027-06-30', 370.75),
(49, 6, '2027-07-10', '2027-07-20', 440.00),
(50, 1, '2027-08-15', '2027-08-25', 510.50),
(51, 2, '2027-09-20', '2027-09-30', 390.75),
(52, 3, '2027-10-12', '2027-10-20', 460.00),
(53, 4, '2027-11-18', '2027-11-25', 530.25),
(54, 5, '2027-12-22', '2027-12-30', 410.75),
(55, 6, '2028-01-10', '2028-01-20', 480.00),
(56, 1, '2028-02-15', '2028-02-25', 550.50),
(57, 2, '2028-03-20', '2028-03-30', 430.75),
(58, 3, '2028-04-12', '2028-04-20', 500.00),
(59, 4, '2028-05-18', '2028-05-25', 470.25),
(60, 5, '2028-06-22', '2028-06-30', 540.75),
(61, 6, '2028-07-10', '2028-07-20', 510.00),
(62, 1, '2028-08-15', '2028-08-25', 580.50),
(63, 2, '2028-09-20', '2028-09-30', 560.75),
(64, 3, '2028-10-12', '2028-10-20', 530.00),
(65, 4, '2028-11-18', '2028-11-25', 500.25),
(66, 5, '2028-12-22', '2028-12-30', 470.75),
(67, 6, '2029-01-10', '2029-01-20', 540.00),
(68, 1, '2029-02-15', '2029-02-25', 610.50),
(69, 2, '2029-03-20', '2029-03-30', 590.75),
(70, 3, '2029-04-12', '2029-04-20', 560.00),
(71, 4, '2029-05-18', '2029-05-25', 530.25),
(72, 5, '2029-06-22', '2029-06-30', 500.75),
(73, 6, '2029-07-10', '2029-07-20', 570.00),
(74, 1, '2029-08-15', '2029-08-25', 640.50),
(75, 2, '2029-09-20', '2029-09-30', 620.75),
(76, 3, '2029-10-12', '2029-10-20', 590.00),
(77, 4, '2029-11-18', '2029-11-25', 560.25),
(78, 5, '2029-12-22', '2029-12-30', 530.75),
(79, 6, '2030-01-10', '2030-01-20', 600.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `ReservaID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `PacoteID` int(11) DEFAULT NULL,
  `DataReserva` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`ReservaID`, `ClienteID`, `PacoteID`, `DataReserva`) VALUES
(1, 10, 6, '2024-01-18'),
(2, 10, 6, '2024-01-18'),
(3, 11, 6, '2024-01-18'),
(4, 11, 6, '2024-01-18'),
(5, 11, 2, '2024-01-18'),
(6, 11, 6, '2024-01-18'),
(7, 13, 2, '2024-01-18'),
(8, 13, 6, '2024-01-18');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Índices para tabela `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`DestinoID`);

--
-- Índices para tabela `pacotesviagem`
--
ALTER TABLE `pacotesviagem`
  ADD PRIMARY KEY (`PacoteID`),
  ADD KEY `fk_Destino` (`Destino`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ReservaID`),
  ADD KEY `fk_ClienteID` (`ClienteID`),
  ADD KEY `fk_PacoteID` (`PacoteID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ClienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `destinos`
--
ALTER TABLE `destinos`
  MODIFY `DestinoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pacotesviagem`
--
ALTER TABLE `pacotesviagem`
  MODIFY `PacoteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ReservaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pacotesviagem`
--
ALTER TABLE `pacotesviagem`
  ADD CONSTRAINT `fk_Destino` FOREIGN KEY (`Destino`) REFERENCES `destinos` (`DestinoID`);

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `fk_ClienteID` FOREIGN KEY (`ClienteID`) REFERENCES `clientes` (`ClienteID`),
  ADD CONSTRAINT `fk_PacoteID` FOREIGN KEY (`PacoteID`) REFERENCES `pacotesviagem` (`PacoteID`);
COMMIT;

CREATE USER 'admin'@'localhost' IDENTIFIED BY '321';
GRANT ALL PRIVILEGES ON siteti.* TO 'admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
