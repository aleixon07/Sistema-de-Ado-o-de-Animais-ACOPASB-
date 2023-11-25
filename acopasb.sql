-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2023 às 04:41
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acopasb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `idadministradores` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`idadministradores`, `nome`, `email`, `senha`, `endereco`, `telefone`, `cpf`) VALUES
(1, 'Larissa Toller', 'larissa@gmail.com', '$2y$10$5VKCtkIpGIGqLpgG1GnaL.MzbWJxlEYHCS8Muxlu8UpQQCPbk.YnC', 'Rua Tal', '55996941838', '02490481088');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `idagendamentos` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `idanimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`idagendamentos`, `nome`, `email`, `telefone`, `data`, `hora`, `idanimal`) VALUES
(4, 'dsaad', 'asda@dsad', '231', '1111-11-11', '11:11:00', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal`
--

CREATE TABLE `animal` (
  `idanimal` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `idade` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `vermifugado` varchar(3) NOT NULL,
  `castracao` varchar(3) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `vacinas` varchar(45) DEFAULT NULL,
  `foto` text NOT NULL,
  `raca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animal`
--

INSERT INTO `animal` (`idanimal`, `nome`, `idade`, `tipo`, `sexo`, `vermifugado`, `castracao`, `descricao`, `vacinas`, `foto`, `raca`) VALUES
(8, 'sda', 'dsa', 'cachorro', 'dsa', 'Sim', 'Sim', 'asd', 'ads', '1_6wedrX5LBYntmfo8YSYsfg.jpg652f4bdcf3a17.jpeg', '0'),
(9, 'das', 'dsa', 'cachorro', 'da', 'Sim', 'Sim', 'a', 'a', '630ee4b8-frango-com-leite-de-coco-e-curry-_-tm-cozinha-saudável-_-juliana-nicoli-_-6634-baixa-1.jpg652f4c5bdbe68.jpeg', '0'),
(10, 'Eduarda Dotto ', '17 anos', 'cachorro', 'Fêmea', 'Sim', 'Sim', 'dasdasdad', 'não tem', 'transferir (8).jpg6531235f0f1aa.jpeg', 'Fox'),
(13, 'ds', 'dasçlkç', 'gato', 'Macho', 'Sim', 'Sim', 'das', 'mm,dsma.,', 'images (5).jpg65365f43c6d5c.jpeg', 'dsa'),
(14, ',dsa', 'das', 'gato', 'Macho', 'Sim', 'Sim', 'sad', 'das', 'images (5).jpg65365da63a770.jpeg', 'dsa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `voluntarios`
--

CREATE TABLE `voluntarios` (
  `idvoluntarios` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `endereco` text NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `dias_voluntariado` varchar(80) NOT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `voluntarios`
--

INSERT INTO `voluntarios` (`idvoluntarios`, `nome`, `email`, `endereco`, `telefone`, `dias_voluntariado`, `comentario`) VALUES
(2, 'Ana Pauladsa dsa', 'dsa@dsa', 'dsa', '122', 'Ter, Qua, Qui, Sex', 'dsa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministradores`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`idagendamentos`),
  ADD KEY `fk_animal_agendamento` (`idanimal`);

--
-- Índices de tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`idanimal`);

--
-- Índices de tabela `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`idvoluntarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `idagendamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `idanimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `voluntarios`
--
ALTER TABLE `voluntarios`
  MODIFY `idvoluntarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `fk_animal_agendamento` FOREIGN KEY (`idanimal`) REFERENCES `animal` (`idanimal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
