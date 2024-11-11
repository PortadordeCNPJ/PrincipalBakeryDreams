-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2024 às 06:23
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipoprodutos`
--

CREATE TABLE `tb_tipoprodutos` (
  `id_tipoproduto` int(11) NOT NULL,
  `tipoproduto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_tipoprodutos`
--

INSERT INTO `tb_tipoprodutos` (`id_tipoproduto`, `tipoproduto`) VALUES
(1, 'bolo'),
(2, 'salgado'),
(3, 'docinho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `fone` bigint(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'S' CHECK (`ativo` in ('S','N')),
  `email` varchar(100) NOT NULL,
  `dt_nasc` date NOT NULL,
  `tipo` varchar(1) NOT NULL DEFAULT 'U',
  `bairro` varchar(30) NOT NULL,
  `nmcasa` int(5) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `token` varchar(250) DEFAULT NULL,
  `token_validade` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `fone`, `senha`, `ativo`, `email`, `dt_nasc`, `tipo`, `bairro`, `nmcasa`, `complemento`, `rua`, `token`, `token_validade`) VALUES
(1, 'AdminGuiWillian', 13423812812, 45991347667, 'a688a47ac73fb58ce3828bcb184cb157', 'S', 'webmaster@bakery.com', '2006-09-29', 'A', 'Bairro Exemplo', 1200, 'Casa', 'Rua da nossa casa', NULL, NULL),
(2, 'Guilherme', 34989387232, 45991349887, '202cb962ac59075b964b07152d234b70', 'S', 'guilherme@gmail.com', '2005-09-29', 'U', 'Consolata', 1908, 'Casa de esquina', 'Rua das coves', NULL, NULL),
(3, 'William a', 9823948723, 45991344444, '202cb962ac59075b964b07152d234b70', 'S', 'willian@gmail.com', '2004-09-29', 'U', 'Casca velho', 4910, 'Prédio', 'Rua das Andorinhas', NULL, NULL),
(4, 'Angélica', 12312312312, 45991344440, '202cb962ac59075b964b07152d234b70', 'S', 'angelica@gmail.com', '2000-01-01', 'U', 'Bairro Exemplo', 4910, 'Sem complemento', 'Rua Exemplo', NULL, NULL),
(5, 'Thomas', 12356789045, 45991344494, 'ef6e65efc188e7dffd7335b646a85a21', 'S', 'thomas@gmail.com', '2000-01-01', 'U', 'Bairro Exemplo', 4910, 'Sem complemento', 'Rua Exemplo', NULL, NULL),
(10, 'Guilherme de Souza', 12312312312, 45991344744, '202cb962ac59075b964b07152d234b70', 'S', 'guilheroiiiidaSilva@gmail.com', '2000-01-01', 'U', 'Bairro Exemplo', 4910, 'Sem complemento', 'Rua Exemplo', NULL, NULL),
(11, 'teste', 13423812828, 45991344478, '202cb962ac59075b964b07152d234b70', 'S', 'teste@gmail.com', '2000-01-01', 'U', 'Bairro Exemplo', 4910, 'Sem complemento', 'Rua Exemplo', NULL, NULL),
(12, 'Guilherme de Souza Muller', 12398765419, 0, '202cb962ac59075b964b07152d234b70', 'S', 'guilhermedesouzamuller@gmail.com', '0000-00-00', 'U', '', 0, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_vendaitens`
--

CREATE TABLE `tb_vendaitens` (
  `id_compraitem` int(11) NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  `quantidade` int(4) NOT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_vendaitens`
--

INSERT INTO `tb_vendaitens` (`id_compraitem`, `valor`, `quantidade`, `id_venda`, `id_produto`) VALUES
(1, 45.45, 1, 1, 18),
(2, 300.00, 1, 1, 24),
(3, 70.56, 1, 2, 29),
(4, 120.00, 2, 3, 26),
(5, 44.43, 1, 4, 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_vendas`
--

CREATE TABLE `tb_vendas` (
  `id_venda` int(11) NOT NULL,
  `tipovenda` varchar(20) NOT NULL,
  `dtvenda` date NOT NULL,
  `frmpagamento` varchar(20) NOT NULL,
  `entregue` varchar(32) NOT NULL,
  `vlrentrega` decimal(5,2) NOT NULL,
  `data_entrega` date DEFAULT NULL,
  `dataagendamento` date DEFAULT NULL,
  `entregar` date DEFAULT NULL,
  `retirar` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_vendas`
--

INSERT INTO `tb_vendas` (`id_venda`, `tipovenda`, `dtvenda`, `frmpagamento`, `entregue`, `vlrentrega`, `data_entrega`, `dataagendamento`, `entregar`, `retirar`, `id_usuario`) VALUES
(1, 'agendamento', '2024-11-01', 'pix', 'sim', 5.00, '2024-11-02', NULL, '2024-11-02', NULL, 2),
(2, 'retirada', '2024-11-03', 'pix', 'sim', 0.00, '2024-11-03', NULL, NULL, '2024-11-03', 3),
(3, 'agendamento', '2024-11-05', 'pix', 'não', 10.00, NULL, '2024-11-07', '2024-11-07', NULL, 4),
(4, 'retirada', '2024-11-08', 'pix', 'sim', 0.00, '2024-11-08', NULL, NULL, '2024-11-08', 5);

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
-- Índices de tabela `tb_tipoprodutos`
--
ALTER TABLE `tb_tipoprodutos`
  ADD PRIMARY KEY (`id_tipoproduto`);

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `tb_vendaitens`
--
ALTER TABLE `tb_vendaitens`
  ADD PRIMARY KEY (`id_compraitem`),
  ADD KEY `FK_tb_vendaitens_2` (`id_venda`),
  ADD KEY `FK_tb_vendaitens_3` (`id_produto`);

--
-- Índices de tabela `tb_vendas`
--
ALTER TABLE `tb_vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `FK_tb_vendas_2` (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `tb_tipoprodutos`
--
ALTER TABLE `tb_tipoprodutos`
  MODIFY `id_tipoproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_vendaitens`
--
ALTER TABLE `tb_vendaitens`
  MODIFY `id_compraitem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_vendas`
--
ALTER TABLE `tb_vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD CONSTRAINT `FK_tb_produtos_2` FOREIGN KEY (`id_tipoproduto`) REFERENCES `tb_tipoprodutos` (`id_tipoproduto`);

--
-- Restrições para tabelas `tb_vendaitens`
--
ALTER TABLE `tb_vendaitens`
  ADD CONSTRAINT `FK_tb_vendaitens_2` FOREIGN KEY (`id_venda`) REFERENCES `tb_vendas` (`id_venda`),
  ADD CONSTRAINT `FK_tb_vendaitens_3` FOREIGN KEY (`id_produto`) REFERENCES `tb_produtos` (`id_produto`);

--
-- Restrições para tabelas `tb_vendas`
--
ALTER TABLE `tb_vendas`
  ADD CONSTRAINT `FK_tb_vendas_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
