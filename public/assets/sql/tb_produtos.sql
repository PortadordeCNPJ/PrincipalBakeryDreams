-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 03:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bakery`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `sabor` varchar(30) NOT NULL,
  `gluten` varchar(1) DEFAULT 'S',
  `amendoim` varchar(1) DEFAULT 'N',
  `ativo` varchar(1) NOT NULL DEFAULT 'S' CHECK (`ativo` in ('S','N')),
  `id_tipoproduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produto`, `nome`, `descricao`, `valor`, `imagem`, `sabor`, `gluten`, `amendoim`, `ativo`, `id_tipoproduto`) VALUES
(18, 'Bolo de 4 Leites', 'Bolo de 4 Leites molhadinho', 45.45, 'bolo4Leites.jpg', '4 Leites', 'S', 'N', 'S', 1),
(19, 'Bolo de Cenoura com cobertura de Chocolate', 'Bolo de Cenoura com Chocolate', 45.12, 'boloBolocenoura.jpg', 'Cenoura e Chocolate', 'S', 'N', 'S', 1),
(20, 'Bolo de Chocolate', 'Bolo de chocolate com doce de leite', 44.43, 'boloChocolate.jpg', 'Chocolate e Doce de Leite', 'S', 'N', 'S', 1),
(21, 'Bolo de Morango', 'Bolo de Morango do himalaia', 23.12, 'boloMorango.jpg', 'Morango', 'S', 'N', 'S', 1),
(22, 'Bolo de Formigueiro', 'Bolo de Formigueiro com cobertura de doce de leite', 35.99, 'boloFormigueiro.jpg', 'Formigueiro e doce de leite', 'S', 'N', 'S', 1),
(23, 'Bolo de Prestigio', 'Bolo de Prestigio de chocolate', 38.99, 'boloPrestigio.jpg', 'Coco e chocolate', 'S', 'N', 'S', 1),
(24, 'Cento Beijinho', 'Beijinho de Leite Ninho', 300.00, 'doceBeijinho.webp', 'Leite Ninho', 'S', 'N', 'S', 3),
(25, 'Cento Brigadeiro', 'Brigadeiro de Chocolate', 200.00, 'doceBrigadeiro.avif', 'Chocolate', 'S', 'N', 'S', 3),
(26, 'Cento Dois Amores', 'Dois amores brigadeiro e beijinho', 120.00, 'doceDoisAmores.jpg', 'Brigadeiro e Beijinho', 'S', 'N', 'S', 3),
(27, 'Meio cento de Mini Churros', 'Mini churros de Doce Leite', 50.00, 'doceMinichurros.jpg', 'Doce Leite', 'S', 'N', 'S', 3),
(28, 'Meio cento Tortinha de Limão', 'Tortinha de Limão siciliano', 55.00, 'doceTortinhaLimao.webp', 'Limão Siciliano', 'S', 'N', 'S', 3),
(29, 'Cento Bolinha de Queijo', 'Bolinha de Queijo crocante', 70.56, 'salgadinhoBolinhaQueijo.jpg', 'Queijo', 'S', 'N', 'S', 2),
(30, 'Meio Cento de Coxinha de Frango', 'Coxinha de Frango com Requeijão', 60.12, 'salgadinhoCoxinhaFrango.jpg', 'Frango com Requeijão', 'S', 'N', 'S', 2),
(31, 'Cento Empadinha de Frango', 'Empadinhas de frango', 80.99, 'salgadinhoEmpadinha.jpg', 'Frango', 'S', 'N', 'S', 2),
(32, 'Meio Cento Enroladinho de Salsicha', 'Mini enroladinhos de salsinha assados', 50.99, 'salgadinhoEnroladinhoSalsicha.png', 'Salsicha', 'S', 'N', 'S', 2),
(33, 'Cento Salgadinhos Sortidos', 'Salgadinhos sortidos, de pelo menos 5 tipos', 100.00, 'salgadinhoSortidos.jpeg', 'Sortidos', 'S', 'N', 'S', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `FK_tb_produtos_2` (`id_tipoproduto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD CONSTRAINT `FK_tb_produtos_2` FOREIGN KEY (`id_tipoproduto`) REFERENCES `tb_tipoprodutos` (`id_tipoproduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
