-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2022 às 19:36
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
-- Banco de dados: `rede_social_curso_devweb20`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amizades`
--

CREATE TABLE `amizades` (
  `id` int(11) NOT NULL,
  `enviou` int(11) NOT NULL,
  `recebeu` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `amizades`
--

INSERT INTO `amizades` (`id`, `enviou`, `recebeu`, `status`) VALUES
(1, 5, 4, 1),
(2, 6, 4, 0),
(4, 7, 4, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(4, 'breno arantes', 'breno@gmail.com', '$2a$08$MTg0NzgyMDg1NTYzMDZhZ.Wg0cATp3l.o6NwcwCOlxjyUMFvsWroW'),
(5, 'joaozinho trinta', 'joao30@gmail.com', '$2a$08$NTc2OTY2NjAwNjMwNmI2MuJHLmjGxwLn.iBkntwCRK0unP8jB.bJG'),
(6, 'anabele furtado', 'afurtado@gmail.com', '$2a$08$NDk1ODc0MjEzNjMwNmI2N.h2vfiTRgPjZCO.yLsQHoaPCEu52jnyi'),
(7, 'magnum sorvetao', 'magnum@gmail.com', '$2a$08$MTQwMzQ4MzAwMDYzMDZiNevqu5lD6x2L31ti/bAByvpK72YMmBP8G');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `amizades`
--
ALTER TABLE `amizades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `amizades`
--
ALTER TABLE `amizades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
