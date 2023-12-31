-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Out-2023 às 13:06
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `visitas_2vesp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE `visitantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `visitantes`
--

INSERT INTO `visitantes` (`id`, `nome`, `data`) VALUES
(1, 'Thiago', '2023-10-03 10:44:40'),
(2, 'Maria', '2023-10-03 12:45:07'),
(3, 'Pedro', '2023-10-03 16:45:26'),
(4, 'Lara', '2023-10-03 08:45:40');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
