-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2016 às 04:43
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `Titulo` varchar(30) NOT NULL,
  `Texto` text NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`ID`, `Titulo`, `Texto`, `Autor`, `Data`) VALUES
(0, 'ESTACIONAMENTO', 'ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ESTACIONAMENTO ESTACIONAMENTO  ', 'admin', '24/09/2015 - 20:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_marca`
--

CREATE TABLE `tb_marca` (
  `cd_marca` int(4) NOT NULL,
  `ds_marca` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pagamento`
--

CREATE TABLE `tb_pagamento` (
  `cd_pag` int(4) NOT NULL,
  `cd_mensal` int(4) DEFAULT NULL,
  `dt_pagamento` date DEFAULT NULL,
  `dt_compet` date DEFAULT NULL,
  `vl_mensal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_registro`
--

CREATE TABLE `tb_registro` (
  `cd_registro` int(4) NOT NULL,
  `nm_placa` varchar(7) DEFAULT NULL,
  `ds_estado_placa` varchar(2) DEFAULT NULL,
  `tp_cliente` char(1) DEFAULT NULL,
  `dt_entrada` datetime DEFAULT NULL,
  `dt_saida` datetime DEFAULT NULL,
  `cd_usuario` int(4) DEFAULT NULL,
  `cd_marca` int(4) DEFAULT NULL,
  `cd_modelo` int(4) DEFAULT NULL,
  `vl_pagto_avulso` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_registro`
--

INSERT INTO `tb_registro` (`cd_registro`, `nm_placa`, `ds_estado_placa`, `tp_cliente`, `dt_entrada`, `dt_saida`, `cd_usuario`, `cd_marca`, `cd_modelo`, `vl_pagto_avulso`) VALUES
(3, '5484848', NULL, 'a', '2016-05-23 00:00:00', '2016-05-23 20:00:00', NULL, 2, 2, NULL),
(4, 'fid7278', NULL, 'a', '2016-05-22 14:00:00', '2016-05-22 20:00:00', NULL, 2, 2, '30.00'),
(6, 'fid7278', NULL, 'a', '2016-05-22 22:00:00', '2016-05-23 13:00:00', NULL, 1, 1, '75.00'),
(7, 'efh7785', NULL, 'a', '2016-05-22 14:00:00', '2016-05-22 20:00:00', NULL, 1, 1, '30.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(4) NOT NULL,
  `nm_usuario` varchar(25) DEFAULT NULL,
  `ds_senha` varchar(16) DEFAULT NULL,
  `ds_email` varchar(35) DEFAULT NULL,
  `tp_permissao` char(1) DEFAULT NULL,
  `sn_ativo` char(1) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_valor`
--

CREATE TABLE `tb_valor` (
  `cd_valor` int(4) NOT NULL,
  `dt_vigencia` date DEFAULT NULL,
  `vl_preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_valor`
--

INSERT INTO `tb_valor` (`cd_valor`, `dt_vigencia`, `vl_preco`) VALUES
(1, '2016-01-01', '5.00'),
(3, '2015-01-01', '2.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo`
--

CREATE TABLE `tb_veiculo` (
  `cd_veiculo` int(4) NOT NULL,
  `ds_placa` varchar(7) DEFAULT NULL,
  `cd_modelo` int(4) DEFAULT NULL,
  `tp_cor` varchar(2) DEFAULT NULL,
  `ds_ano` int(4) DEFAULT NULL,
  `cd_cliente` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `td_mensalista`
--

CREATE TABLE `td_mensalista` (
  `cd_mensal` int(4) NOT NULL,
  `cd_modelo` int(4) DEFAULT NULL,
  `nm_mensal` varchar(25) DEFAULT NULL,
  `nr_cnh` int(11) DEFAULT NULL,
  `nm_endereco` varchar(25) DEFAULT NULL,
  `nr_cep` int(8) DEFAULT NULL,
  `nm_cidade` varchar(35) DEFAULT NULL,
  `nm_bairro` varchar(25) DEFAULT NULL,
  `nm_estado` varchar(2) DEFAULT NULL,
  `nr_telefone` int(11) DEFAULT NULL,
  `nr_celular` int(11) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `tp_sexo` char(1) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `sn_ativo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `td_modelo`
--

CREATE TABLE `td_modelo` (
  `cd_modelo` int(4) NOT NULL,
  `ds_modelo` varchar(25) DEFAULT NULL,
  `cd_marca` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Senha`, `Email`, `Permissao`) VALUES
(1, 'admin', '1234', 'admin@email.com', 1),
(2, 'djsaii', 'dhsuaia', 'dsaidjoa@gmail.com', 0),
(3, 'dsda', 'jdidaoi', 'diadoisa@gmail.com', 0),
(4, 'daojdia', 'sdushaus', 'djsao@gmail.com', 0),
(5, '', '', '', 0),
(6, 'sylvio', '4243', 'williamsylvio@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_marca`
--
ALTER TABLE `tb_marca`
  ADD PRIMARY KEY (`cd_marca`);

--
-- Indexes for table `tb_pagamento`
--
ALTER TABLE `tb_pagamento`
  ADD PRIMARY KEY (`cd_pag`);

--
-- Indexes for table `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`cd_registro`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- Indexes for table `tb_valor`
--
ALTER TABLE `tb_valor`
  ADD PRIMARY KEY (`cd_valor`);

--
-- Indexes for table `tb_veiculo`
--
ALTER TABLE `tb_veiculo`
  ADD PRIMARY KEY (`cd_veiculo`);

--
-- Indexes for table `td_mensalista`
--
ALTER TABLE `td_mensalista`
  ADD PRIMARY KEY (`cd_mensal`);

--
-- Indexes for table `td_modelo`
--
ALTER TABLE `td_modelo`
  ADD PRIMARY KEY (`cd_modelo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_marca`
--
ALTER TABLE `tb_marca`
  MODIFY `cd_marca` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pagamento`
--
ALTER TABLE `tb_pagamento`
  MODIFY `cd_pag` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_registro`
--
ALTER TABLE `tb_registro`
  MODIFY `cd_registro` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_valor`
--
ALTER TABLE `tb_valor`
  MODIFY `cd_valor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_veiculo`
--
ALTER TABLE `tb_veiculo`
  MODIFY `cd_veiculo` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_mensalista`
--
ALTER TABLE `td_mensalista`
  MODIFY `cd_mensal` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_modelo`
--
ALTER TABLE `td_modelo`
  MODIFY `cd_modelo` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
