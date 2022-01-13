-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2022 às 02:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carbanco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `Conta_id` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` varchar(30) NOT NULL,
  `Saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`Conta_id`, `Nome`, `CPF`, `Email`, `Senha`, `Saldo`) VALUES
(1, 'Matheus', '054.254.478-6', 'algoai@gmail.com', '1001', 0),
(2, 'Gustavo', '475.562.430-44', 'algoai@gmail.com', '2002', 2250),
(3, 'Sabrina', '269.517.810-79', 'email@gmail.com', '2001', 10000),
(4, 'Algo', '269.517.810-79', 'algoai@gmail.com', '1003', 10),
(5, 'Algo', '054.254.478-6', 'algoai@gmail.com', '2000', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transações`
--

CREATE TABLE `transações` (
  `Trans_id` int(11) NOT NULL,
  `Conta_id` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Operação` varchar(30) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `transações`
--

INSERT INTO `transações` (`Trans_id`, `Conta_id`, `Nome`, `Operação`, `Valor`, `Data`) VALUES
(1, 1, 'Matheus', 'Depósito', 1000, '0000-00-00 00:00:00'),
(2, 2, 'Gustavo', 'Depósito', 50, '2022-12-01 09:38:58'),
(3, 1, 'Matheus', 'Saque', 2000, '2022-12-01 09:43:29'),
(4, 1, 'Matheus', 'Saque', 1500, '2022-12-01 09:44:06'),
(5, 1, 'Matheus', 'Depósito', 1000, '2022-12-01 04:04:47'),
(6, 1, 'Matheus', 'Saque', 900, '2022-12-01 04:12:37');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`Conta_id`);

--
-- Índices para tabela `transações`
--
ALTER TABLE `transações`
  ADD PRIMARY KEY (`Trans_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `Conta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `transações`
--
ALTER TABLE `transações`
  MODIFY `Trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
