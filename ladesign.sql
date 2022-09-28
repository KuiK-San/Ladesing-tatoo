-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Set-2022 às 03:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ladesign`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `port`
--

CREATE TABLE `port` (
  `id_port` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_up` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `port`
--

INSERT INTO `port` (`id_port`, `path`, `data_up`, `id_user`) VALUES
(4, '../img/port/6333a0f6a0d32.jpg', '2022-09-27 22:18:46', 12),
(5, '../img/port/6333a1003cd5d.jpg', '2022-09-27 22:18:56', 12),
(6, '../img/port/6333a1071627b.jpg', '2022-09-27 22:19:03', 12),
(7, '../img/port/6333a10f26971.jpg', '2022-09-27 22:19:11', 12),
(8, '../img/port/6333a118be50b.jpg', '2022-09-27 22:19:20', 12),
(9, '../img/port/6333a123e9470.jpg', '2022-09-27 22:19:31', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(10) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_nas` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivel` int(1) NOT NULL DEFAULT 1 COMMENT 'Nivel de usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `nome`, `senha`, `telefone`, `cpf`, `data_nas`, `nivel`) VALUES
(12, 'thegui4000@gmail.com', 'Guilherme Casagrande', '$2y$10$Fy97Iqe1xy/bovXFfqIxXuhw/Z61eF2S8zW4gBd46LJTNAqkRPlLK', '(41) 99771-5962', '123.123.123-12', '23/08/2004', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_port`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `port`
--
ALTER TABLE `port`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
