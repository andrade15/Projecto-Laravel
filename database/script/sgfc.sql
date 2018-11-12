-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2018 às 13:21
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgfc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `camiao`
--

CREATE TABLE `camiao` (
  `Matricula` varchar(10) NOT NULL,
  `Marca` varchar(10) NOT NULL,
  `Modelo` varchar(10) NOT NULL,
  `disponibilidade` varchar(20) NOT NULL DEFAULT 'Disponivel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `camiao`
--

INSERT INTO `camiao` (`Matricula`, `Marca`, `Modelo`, `disponibilidade`) VALUES
('ABB-521-MP', 'Toyota', 'Dyna', 'Disponivel'),
('AAZ-544-MP', 'Volvo', 'KJA', 'Disponivel'),
('AEY-032-MP', 'Volvo', 'KJA', 'Disponivel'),
('ACE-987-MP', 'Volvo', 'KJA', 'Disponivel'),
('AHG-786-MP', 'Mercedes', 'DFR', 'Disponivel'),
('AER-321-MP', 'Mercedes', 'DFR', 'Disponivel'),
('ACP-232-MP', 'Actros', '150F', 'Disponivel'),
('AGP-243-MP', 'Man', 'TROY', 'Disponivel'),
('ABA-396-MP', 'Man', 'TROY', 'Disponivel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `BI` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Apelido` varchar(15) NOT NULL,
  `Cidade` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Nome de usuario` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`BI`, `Nome`, `Apelido`, `Cidade`, `Email`, `Nome de usuario`, `Password`) VALUES
(1, 'Andrade', 'Manjate', 'Maputo', 'andrademanjatejunior@gmail.com', 'manjate', '0000'),
(3, 'Aurelio', 'Cossa', 'Maputo', 'fgfc@gmail.com', 'aurelio', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestor`
--

CREATE TABLE `gestor` (
  `bi` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `nome de usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gestor`
--

INSERT INTO `gestor` (`bi`, `nome`, `apelido`, `nome de usuario`, `password`) VALUES
(0, 'Andrade Fenias', 'Manjate', 'fenias', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id` int(11) NOT NULL,
  `numCarta` int(20) NOT NULL,
  `Nome` varchar(15) NOT NULL,
  `Apelido` varchar(10) NOT NULL,
  `Disponibilidade` varchar(20) NOT NULL DEFAULT 'Disponivel',
  `Nome de usuario` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id`, `numCarta`, `Nome`, `Apelido`, `Disponibilidade`, `Nome de usuario`, `Password`) VALUES
(2, 215, 'Dercio', 'Mazembe', 'Disponivel', 'dercio', 'Mazembe'),
(3, 124, 'Julia', 'Mahumane', 'Disponivel', 'julia', 'Mahumane'),
(4, 235, 'Richaldo', 'Elias', 'Disponivel', 'richaldo', 'Elias'),
(5, 12, 'Osvaldo Albano', 'Jeque', 'Disponivel', 'jeque', 'Jeque'),
(6, 2145, 'Eunice Andrade', 'Manjate', 'Disponivel', 'eunice', 'Manjate'),
(7, 1241, 'Abel Jorge', 'Guirute', 'Disponivel', 'abel', '1234'),
(8, 78475, 'Lani', 'SaÃºna', 'Disponivel', 'lani', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `id` int(11) NOT NULL,
  `Data de Partida` varchar(20) NOT NULL,
  `Ponto de partida` varchar(15) NOT NULL,
  `Provincia de Chegada` varchar(20) NOT NULL,
  `Cidade de Chegada` varchar(10) NOT NULL,
  `Distrito de Chegada` varchar(15) NOT NULL,
  `Data de Chegada` varchar(10) NOT NULL,
  `Peso da carga` double NOT NULL,
  `Tipo de Carga` varchar(20) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idMotorista` int(11) NOT NULL,
  `idCamiao` int(11) NOT NULL,
  `valPagar` float NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `viagem`
--

INSERT INTO `viagem` (`id`, `Data de Partida`, `Ponto de partida`, `Provincia de Chegada`, `Cidade de Chegada`, `Distrito de Chegada`, `Data de Chegada`, `Peso da carga`, `Tipo de Carga`, `idcliente`, `idMotorista`, `idCamiao`, `valPagar`, `Estado`) VALUES
(1, '2018-07-23', 'Maputo', 'Maputo', 'Matola', 'Maputo', '2018-11-23', 254, 'Combustiveis', 1, 0, 0, 762, 'Nao'),
(2, '2014-07-21', 'Maputo', 'GazaY', 'Matola', 'Inhambane', '2018-10-23', 11214, 'Produtos Comerciais', 2, 4, 0, 33642, 'Nao'),
(3, '2018-08-23', 'Maputo', 'Gaza', 'Matola', 'Inhambane', '2018-08-23', 547785, 'Mobiliario', 2, 6, 0, 1643360, 'pago'),
(4, '2018-07-23', 'Maputo', 'Maputo', 'Matola', 'Inhambane', '2018-07-23', 147785, 'Combustiveis', 1, 0, 0, 443355, 'Nao'),
(5, '2018-07-23', 'Maputo', 'Gaza', 'Inhambane ', 'Cabo Delgado', '2018-07-23', 2545774, 'Combustiveis', 2, 0, 0, 7637320, 'Nao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`BI`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
