-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2021 às 01:13
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portal_noticias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `conteudo` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `conteudo`, `id_usuario`) VALUES
(6, 'Nova Inteligência Artificial', 'gweryrtuty utyur rtyurt yurtyu rtyurtyurt yurty rtyu rtyurtyurty rtyurty urtyur tyurty urtyu rtyurty gweryrtuty utyur rtyurt yurtyu rtyurtyurt yurty rtyu rtyurtyurty rtyurty urtyur tyurty urtyu rtyurty ', 1),
(7, 'O que é JavaScript?', 'dfgadf sadfasdf asdfasdfasdf asdfa sdfasdf asdf3 q4r 34r34t 34ras rfaq sfhbdghjfhjn dfgh dfgsdfg dfdfgadf sadfasdf asdfasdfasdf asdfa sdfasdf asdf3 q4r 34r34t 34ras rfaq sfhbdghjfhjn dfgh dfgsdfg df', 1),
(9, 'Node ou PHP, qual devo aprender?', 'asfasdfasdfasdfasdfasdf asdf asdf asdfa sdfasdf asdfa sdfa sdfa sdf adf asdfasdf asfasdfasdfasdfasdfasdf asdf asdf asdfa sdfasdf asdfa sdfa sdfa sdf adf asdfasdf asfasdfasdfasdfasdfasdf asdf asdf asdfa sdfasdf asdfa sdfa sdfa sdf adf asdfasdf ', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Leonardo', 'leonardo.schmidt@iffarroupilha.edu.br', '12345'),
(2, 'Maria', 'mariasimoes@gmail.com', 'maria123'),
(3, 'Mario', 'mario@gmail.com', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
