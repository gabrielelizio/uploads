-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2017 às 22:30
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemsauer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs_2`
--

CREATE TABLE `logs_2` (
  `COD_LOGS` int(10) UNSIGNED NOT NULL,
  `COD_USUARIOS_SISTEMA` varchar(255) DEFAULT NULL,
  `DATA_LOGS` date DEFAULT NULL,
  `HORA_LOGS` datetime DEFAULT NULL,
  `TIPO_LOGS` varchar(255) DEFAULT NULL,
  `ACAO` varchar(255) DEFAULT NULL,
  `IP_LOGS` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `uploads`
--

CREATE TABLE `uploads` (
  `id` int(50) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `proposito` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cursos` varchar(512) DEFAULT NULL,
  `opcaoimpressao` varchar(15) DEFAULT NULL,
  `qtdecopias` int(11) DEFAULT NULL,
  `patharq` varchar(250) DEFAULT NULL,
  `rastreio` varchar(50) NOT NULL DEFAULT '0',
  `data_envio` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `uploads`
--

INSERT INTO `uploads` (`id`, `id_prof`, `nome`, `proposito`, `email`, `telefone`, `cursos`, `opcaoimpressao`, `qtdecopias`, `patharq`, `rastreio`, `data_envio`, `status`) VALUES
(1, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '(00) 0000-0000', 'AdministraÃ§Ã£o', 'FrenteVerso', 10, 'arquivos/1512744233_(20170928214116)ALP exercÃ­cio 6.pdf', '2df584d0724c930d76a837f63362d524', '2017-12-08 12:43:53', 'Impresso'),
(2, 2, 'Gabriel Azevedo', 'Parcial 02', 'gabriel@pitagoras.com.br', NULL, 'Sistemas de InformaÃ§Ã£o', 'Frente', 20, 'arquivos/1512744285_teste.pdf', '8d0d398aaeb7b35c6fb7e38a73b61d38', '2017-12-08 12:44:45', 'Impresso'),
(3, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '(00) 0000-0000', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 3, 'arquivos/1512745639_teste.pdf', 'c0422f199ca09259cbc1c86a1b7f1e8b', '2017-12-08 13:07:19', 'Pendente'),
(4, 4, 'Ramon Pedrosa', 'Parcial 02', 'ramon@pitagoras.com.br', '(00) 0000-0000', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 12, 'arquivos/1512746787_teste.pdf', 'c37a4b93d63d52fa42a852384e0b5b22', '2017-12-08 13:26:27', 'Pendente'),
(5, 2, 'Gabriel Azevedo', 'Parcial 01', 'gabriel@pitagoras.com.br', '', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 3, 'arquivos/1512793020_(20170928214116)ALP exercÃ­cio 6.pdf', 'd240d9b0c7588cc956eb2b8ee5942847', '2017-12-09 02:17:00', 'Pendente'),
(6, 2, 'Gabriel Azevedo', 'Segunda Chamada', 'gabriel@pitagoras.com.br', '', 'AdministraÃ§Ã£o', 'Frente', 90, 'arquivos/1512793081_teste.pdf', '69f0ebc437a099f0fd3cece5d64c903b', '2017-12-09 02:18:01', 'Pendente'),
(7, 2, 'Gabriel Azevedo', 'Oficial 02', 'gabriel@pitagoras.com.br', '(00) 0000-0000', 'Engenharia MecÃ¢nica', 'Frente', 20, 'arquivos/1512793164_20170722111809_Graziane_de_Souza_Martins_Santos72933254_960.pdf', 'e264df1e9b7f9a52051c2fc9c9c6da26', '2017-12-09 02:19:24', 'Pendente'),
(8, 2, 'Gabriel Azevedo', 'Outros', 'gabriel@pitagoras.com.br', '(31) 3317-4608', 'Contabilidade', 'Frente', 10, 'arquivos/1512793284_teste.pdf', '810808f5153c926233bcb53e84c510a5', '2017-12-09 02:21:24', 'Impresso'),
(9, 2, 'Gabriel Azevedo', 'Parcial 01', 'gabriel@pitagoras.com.br', '(31) 3317-4608', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 10, 'arquivos/1512794601_20170722111809_Graziane_de_Souza_Martins_Santos72933254_960.pdf', 'cc45de6c0d62573dc955cad099effd70', '2017-12-09 02:43:21', 'Pendente'),
(10, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '(00) 0000-000', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 12, 'arquivos/1512794779_(20170928214116)ALP exercÃ­cio 6.pdf', 'bb2b49a49520074725b64475f76b0b42', '2017-12-09 02:46:19', 'Pendente'),
(11, 2, 'Gabriel Azevedo', 'Parcial 01', 'gabriel@pitagoras.com.br', '(31) 3317-4608', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 12, 'arquivos/1512795076_teste.pdf', '07f853ba13ad18027d425b0f8d064ee9', '2017-12-09 02:51:16', 'Impresso'),
(12, 2, 'Gabriel Azevedo', 'Parcial 01', 'gabriel@pitagoras.com.br', '(31) 3317-4608', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 2, 'arquivos/1512795481_teste.pdf', '19c58bad7017a7cc6ebdc06794a30b71', '2017-12-09 02:58:01', 'Impresso'),
(13, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '(00) 0000-000', 'Sistemas de InformaÃ§Ã£o', 'FrenteVerso', 3, 'arquivos/1512853738_boleto-dezemvro-pitagoras.pdf', '7876322743af6792bbcb6649b283c88f', '2017-12-09 19:08:58', 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipoCad` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `pass`, `tipoCad`) VALUES
(2, 'Gabriel', 'Azevedo', '(31) 3317-4608', 'gabriel@pitagoras.com.br', '202cb962ac59075b964b07152d234b70', 0),
(4, 'Ramon', 'Pedrosa', '(00) 0000-000', 'ramon@pitagoras.com.br', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
