-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Out-2015 às 00:06
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE IF NOT EXISTS `postagens` (
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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Permissao` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Senha`, `Email`, `Permissao`) VALUES
(1, 'admin', '1234', 'admin@email.com', 1),
(2, 'djsaii', 'dhsuaia', 'dsaidjoa@gmail.com', 0),
(3, 'dsda', 'jdidaoi', 'diadoisa@gmail.com', 0),
(4, 'daojdia', 'sdushaus', 'djsao@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
