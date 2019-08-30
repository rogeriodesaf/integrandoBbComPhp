-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2019 às 21:47
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `processos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo`
--

CREATE TABLE `processo` (
  `id_processo` int(11) NOT NULL,
  `nrofa` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `consumidor` varchar(200) NOT NULL,
  `fornecedor` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `camara` varchar(100) NOT NULL,
  `relator` varchar(100) NOT NULL,
  `valor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `processo`
--

INSERT INTO `processo` (`id_processo`, `nrofa`, `ano`, `consumidor`, `fornecedor`, `data`, `camara`, `relator`, `valor`) VALUES
(1, 67, 2019, 'maria', 'bmg', '2019-08-10', '2 sessão', 'Advogado 5', ''),
(2, 234, 1990, 'ana', 'insinuante', '2019-08-10', '1 sessão', 'Advogado 1', ''),
(3, 678698, 69786986, 'hgkhggh', 'gjhgkhjgkj', '0000-00-00', '1 sessÃ£o', 'Advogado 1', '9709879087');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`id_processo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `processo`
--
ALTER TABLE `processo`
  MODIFY `id_processo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
