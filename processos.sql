-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2019 às 14:46
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `processos`
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
(13, 123, 2008, 'rogerio', 'procon', '2019-08-30', '1 sessÃ£o', 'Advogado 1', '5'),
(15, 8, 2019, 'ANA', 'CASA DECOR', '2019-06-04', '1 sessÃ£o', 'Advogado 1', '1000000000'),
(17, 12, 2000, 'joao', 'tim', '2019-08-03', '2 sessÃ£o', 'Advogado 5', '2000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`id_processo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `processo`
--
ALTER TABLE `processo`
  MODIFY `id_processo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
