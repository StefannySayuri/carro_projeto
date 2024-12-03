-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2024 às 19:39
-- Versão do servidor: 8.4.0
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `marca`
--

CREATE TABLE `marca` (
  `id_marca` int NOT NULL,
  `nome_marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `marca`
--

INSERT INTO `marca` (`id_marca`, `nome_marca`) VALUES
(1, 'BMW'),
(2, 'JEEP'),
(3, 'FORD'),
(4, 'GM'),
(18, 'Volvo'),
(21, 'Scania do Brasil'),
(22, 'VolksWagem'),
(23, 'Fiat'),
(24, 'Toyota'),
(25, 'Chevrolet'),
(26, 'Honda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int NOT NULL,
  `marca_id_marca` int DEFAULT NULL,
  `nome_modelo` varchar(100) NOT NULL,
  `cor_modelo` varchar(50) DEFAULT NULL,
  `ano_modelo` year DEFAULT NULL,
  `placa_modelo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `marca_id_marca`, `nome_modelo`, `cor_modelo`, `ano_modelo`, `placa_modelo`) VALUES
(3, 3, 'Fiesta', 'Preto', '2019', 'DEF-3456'),
(4, 3, 'Ranger', 'Azul', '2022', 'HIJ-7890'),
(9, 24, 'Corolla', 'Prata', '2020', 'ABC-1234'),
(10, 24, 'Hilux', 'Branco', '2021', 'XYZ-5678'),
(13, 25, 'Onix', 'Vermelho', '2021', 'KLM-2345'),
(14, 25, 'Tracker', 'Cinza', '2023', 'NOP-4567'),
(15, 26, 'Civic', 'Preto', '2020', 'QRS-6789'),
(16, 26, 'HR-V', 'Branco', '2022', 'TUV-8901');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD UNIQUE KEY `placa_modelo` (`placa_modelo`),
  ADD KEY `marca_id_marca` (`marca_id_marca`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`marca_id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
