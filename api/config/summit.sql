-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05-Fev-2020 às 01:59
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id11905308_test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `interest`
--

CREATE TABLE `interest` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `interest`
--

INSERT INTO `interest` (`id`, `name`, `description`) VALUES
(1, 'Audiovisual', ''),
(2, 'Marketing Digital & Redes Sociais', ''),
(3, 'Design Gráfico', ''),
(4, 'Robótica & Domótica', ''),
(5, 'Programação Mobile', ''),
(6, 'Reparação de Hardware', ''),
(7, 'Programação', ''),
(8, 'Desenvolvimento de Videojogos', ''),
(9, 'Animação 2D & 3D', ''),
(10, 'Impressão 3D', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg_evento`
--

CREATE TABLE `reg_evento` (
  `id` int(11) NOT NULL,
  `email` char(50) COLLATE utf8_bin NOT NULL,
  `nome` char(30) COLLATE utf8_bin DEFAULT NULL,
  `apelido` char(30) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `codigo` int(11) NOT NULL,
  `cod_confirm` int(11) NOT NULL DEFAULT 1230984,
  `consentimento` tinyint(1) NOT NULL,
  `datareg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `reg_evento`
--

INSERT INTO `reg_evento` (`id`, `email`, `nome`, `apelido`, `telefone`, `status`, `codigo`, `cod_confirm`, `consentimento`, `datareg`) VALUES
(161, 'joao.ledo.fonseca@gmail.com', 'João', 'Fonseca', '987654321', 1, 1111, 63561, 1, '2020-02-02 00:38:17'),
(162, 'mm@gmail.com', 'Amélia', 'Marques', '9586749674967', 0, 3351, 90339, 1, '2020-02-02 01:40:49'),
(163, 'ac@gmail.com', 'Ana', 'Correia', '98567432', 0, 6890, 37408, 1, '2020-02-02 18:13:37'),
(165, 'ac6@gmail.com', 'Ana', 'Correia', '98567432', 1, 4085, 30373, 1, '2020-02-02 23:43:08'),
(166, 'alberto.pereira@gmail.com', 'Alberto', 'Pereira', '931311234', 0, 3284, 78949, 1, '2020-02-03 11:58:32'),
(167, 'betina.pinta@gmail.com', 'Albertina', 'Pinto', '09878987', 0, 8520, 54058, 1, '2020-02-03 12:12:36'),
(168, 'outra.betina.pinta@gmail.com', 'Albertina', 'Pinto', '09878987', 0, 2686, 59204, 1, '2020-02-03 12:20:38'),
(169, 'nova.betina.pinta@gmail.com', 'Albertina', 'Pinto', '09878987', 0, 5771, 10352, 1, '2020-02-03 12:24:14'),
(170, 'aff99@gmail.com', 'Alberto', 'Ferreira', '12341234123', 1, 3242, 18843, 1, '2020-02-03 12:28:03'),
(171, 'nidia.azevedo@iefp.pt', 'Nidia', 'Azevedo', '98798798', 2, 8854, 23984, 1, '2020-02-03 12:34:00'),
(173, 'jf@gmail.com', 'Joao', 'Fonseca', '93563225', 2, 5046, 43470, 1, '2020-02-04 21:43:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg_interest`
--

CREATE TABLE `reg_interest` (
  `user` int(11) NOT NULL,
  `interest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `reg_interest`
--

INSERT INTO `reg_interest` (`user`, `interest`) VALUES
(161, 1),
(161, 2),
(162, 2),
(163, 1),
(163, 2),
(165, 1),
(165, 2),
(166, 1),
(166, 2),
(167, 7),
(167, 8),
(167, 9),
(168, 2),
(168, 3),
(169, 2),
(169, 3),
(170, 2),
(170, 3),
(171, 3),
(171, 8),
(171, 9),
(171, 10),
(173, 3),
(173, 4),
(173, 5),
(173, 6),
(173, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reg_evento`
--
ALTER TABLE `reg_evento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `reg_interest`
--
ALTER TABLE `reg_interest`
  ADD PRIMARY KEY (`user`,`interest`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reg_evento`
--
ALTER TABLE `reg_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
