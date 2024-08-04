-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/08/2024 às 19:15
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
  `gluten` tinyint(1) DEFAULT 1,
  `amedoim` tinyint(1) DEFAULT 0,
  `id_tipoproduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produto`, `nome`, `descricao`, `valor`, `imagem`, `sabor`, `gluten`, `amedoim`, `id_tipoproduto`) VALUES
(1, 'Bolo Chocolate', 'Bolo de chocolate com toque refinado de chocolate importado da América do Norte', 45.60, './assets/images/chocolate.jpg', 'Bolo de Chocolate', NULL, NULL, 1),
(2, 'Bolo de cenoura', 'Bolo de cenoura com cobertura de chocolate', 45.00, './assets/images/bolocenoura.jpg', '', 0, 0, 1),
(3, 'salgadinho', 'Salgadinho com frango', 122.00, './assets/images/bolocenoura.jpg', '', 0, 0, 2),
(4, 'Brigadeiro', 'Brigadeiro de chocolate', 30.00, './assets/images/bolocenoura.jpg', '', 0, 0, 3),
(5, 'Empadinha de frango', 'Empadinha de frango Cremoso', 22.00, './assets/images/bolocenoura.jpg', '', 0, 0, 2);

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
  `cpf` varchar(11) NOT NULL,
  `fone` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT 1,
  `email` varchar(100) NOT NULL,
  `dt_nasc` date NOT NULL,
  `tipo` varchar(1) NOT NULL DEFAULT 'U',
  `bairro` varchar(30) NOT NULL,
  `nmcasa` varchar(8) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `rua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `fone`, `senha`, `ativo`, `email`, `dt_nasc`, `tipo`, `bairro`, `nmcasa`, `complemento`, `rua`) VALUES
(1, 'AdminGuiWill', '13423812828', '(45) 99134-7667', 'a688a47ac73fb58ce3828bcb184cb157', 1, 'webmaster@bakery.com', '2006-09-29', 'A', '...', '1', 'Casa', 'Rua da nossa casa'),
(2, 'Guilherme', '34989387232', '(45) 99134-9887', '202cb962ac59075b964b07152d234b70', 1, 'guilherme@gmail.com', '2005-09-29', 'U', 'Consolata', '1908', 'Casa de esquina', 'Rua das coves'),
(3, 'William a', '09823948723', '(45) 99134-4444', '202cb962ac59075b964b07152d234b70', 1, 'willian@gmail.com', '2004-09-29', 'U', 'Casca velho', '4910', 'Prédio', 'Rua das Andorinhas'),
(4, 'Angélica', '12312312312', '', '202cb962ac59075b964b07152d234b70', 1, 'angelica@gmail.com', '0000-00-00', 'U', '', '', '', ''),
(5, 'Thomas', '12356789045', '', 'ef6e65efc188e7dffd7335b646a85a21', 1, 'thomas@gmail.com', '0000-00-00', 'U', '', '', '', ''),
(7, 'Ivan é gay dms', '34212345389', '', '2c42e5cf1cdbafea04ed267018ef1511', 1, 'ivan@gmail.com', '0000-00-00', 'U', '', '', '', ''),
(8, 'Celia', '12345678912', '', 'a0ee94b392b37c57751877cd6de5c586', 1, 'celia@gmail.com', '0000-00-00', 'U', '', '', '', '');

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
  `data_entrega` date NOT NULL,
  `dataagendamento` date NOT NULL,
  `entregar` date DEFAULT NULL,
  `retirar` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_tipoprodutos`
--
ALTER TABLE `tb_tipoprodutos`
  MODIFY `id_tipoproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_vendaitens`
--
ALTER TABLE `tb_vendaitens`
  MODIFY `id_compraitem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_vendas`
--
ALTER TABLE `tb_vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;

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
