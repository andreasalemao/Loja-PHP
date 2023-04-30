-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2017 às 22:45
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCli` int(11) NOT NULL,
  `cliCpf` int(11) DEFAULT NULL,
  `cliNome` varchar(100) DEFAULT NULL,
  `cliSobrenome` varchar(100) DEFAULT NULL,
  `cliEndereco` varchar(200) DEFAULT NULL,
  `cliCidade` varchar(200) DEFAULT NULL,
  `cliEstado` varchar(100) DEFAULT NULL,
  `cliEmail` varchar(200) DEFAULT NULL,
  `cliFone` int(12) DEFAULT NULL,
  `cliFone2` int(12) DEFAULT NULL,
  `newsletter` char(50) DEFAULT NULL,
  `coment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCli`, `cliCpf`, `cliNome`, `cliSobrenome`, `cliEndereco`, `cliCidade`, `cliEstado`, `cliEmail`, `cliFone`, `cliFone2`, `newsletter`, `coment`) VALUES
(1, 11111111111, 'João', 'Ninguem', 'Rua qualquer', 'Cidade dos anjos', 'to', 'email@email.com', NULL, NULL, NULL, 'Comentário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProd` int(11) NOT NULL,
  `nomeProd` varchar(255) DEFAULT NULL,
  `descProd` varchar(255) DEFAULT NULL,
  `codFabricante` int(11) DEFAULT NULL,
  `marcaProd` varchar(255) DEFAULT NULL,
  `modeloProd` varchar(255) DEFAULT NULL,
  `dataCadProd` date DEFAULT NULL,
  `valorProd` int(11) DEFAULT NULL,
  `valorVendaProd` int(11) DEFAULT NULL,
  `estoqueProd` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProd`, `nomeProd`, `descProd`, `codFabricante`, `marcaProd`, `modeloProd`, `dataCadProd`, `valorProd`, `valorVendaProd`, `estoqueProd`) VALUES
(1, 'Calcinha', 'roupa intima', NULL, 'Renner', NULL, NULL, NULL, NULL, NULL),
(2, 'Cueca', 'roupa intima', NULL, 'Zorba', 'Box', NULL, NULL, NULL, NULL),
(3, 'shortz', 'Azul com listras', NULL, 'Malwe', NULL, NULL, NULL, NULL, NULL),
(4, 'Camisa', 'Verde e amarela', NULL, 'Mariza', 'Sport', NULL, NULL, NULL, NULL),
(5, 'Agasalho', 'Cinza', NULL, 'Adidas', NULL, NULL, NULL, NULL, NULL),
(6, 'Calça', 'jeanz', NULL, 'Zoomp', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCli`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
