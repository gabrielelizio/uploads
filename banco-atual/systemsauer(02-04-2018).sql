-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 02-Abr-2018 às 19:07
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE Database IF NOT EXISTS `systemsauer`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `systemsauer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs_2`
--

CREATE TABLE IF NOT EXISTS `logs_2` (
  `COD_LOGS` int(10) unsigned NOT NULL,
  `COD_USUARIOS_SISTEMA` varchar(255) DEFAULT NULL,
  `DATA_LOGS` date DEFAULT NULL,
  `HORA_LOGS` datetime DEFAULT NULL,
  `TIPO_LOGS` varchar(255) DEFAULT NULL,
  `ACAO` varchar(255) DEFAULT NULL,
  `IP_LOGS` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendente`
--
CREATE TABLE IF NOT EXISTS `pendente` (
`id` int(50)
,`id_prof` int(11)
,`nome` varchar(50)
,`proposito` varchar(50)
,`email` varchar(50)
,`telefone` varchar(20)
,`cursos` varchar(512)
,`opcaoimpressao` varchar(15)
,`qtdecopias` int(11)
,`patharq` varchar(250)
,`rastreio` varchar(50)
,`data_envio` datetime
,`status` varchar(10)
,`data_processamento` datetime
,`observacao` varchar(512)
,`codigos_turmas` varchar(255)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `processada`
--
CREATE TABLE IF NOT EXISTS `processada` (
`id` int(50)
,`id_prof` int(11)
,`nome` varchar(50)
,`proposito` varchar(50)
,`email` varchar(50)
,`telefone` varchar(20)
,`cursos` varchar(512)
,`opcaoimpressao` varchar(15)
,`qtdecopias` int(11)
,`patharq` varchar(250)
,`rastreio` varchar(50)
,`data_envio` datetime
,`status` varchar(10)
,`data_processamento` datetime
,`observacao` varchar(512)
,`codigos_turmas` varchar(255)
);
-- --------------------------------------------------------

--
-- Estrutura da tabela `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
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
  `status` varchar(10) DEFAULT NULL,
  `data_processamento` datetime DEFAULT NULL,
  `observacao` varchar(512) DEFAULT NULL,
  `codigos_turmas` varchar(255) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Extraindo dados da tabela `uploads`
--

INSERT INTO `uploads` (`id`, `id_prof`, `nome`, `proposito`, `email`, `telefone`, `cursos`, `opcaoimpressao`, `qtdecopias`, `patharq`, `rastreio`, `data_envio`, `status`, `data_processamento`, `observacao`, `codigos_turmas`) VALUES
(71, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '31995041815', 'Administracao, Redes de Computadores', 'FrenteVerso', 12, 'arquivos/1517854711_capitulo_amostra_desenvolvimentosmartphone.pdf', 'e3d984b07619a10dea85ca2d7de9be09', '2018-02-04 16:18:31', 'Impresso', '0000-00-00 00:00:00', 'obs001', '1212'),
(72, 4, 'Ramon Pedrosa', 'Parcial 02', 'ramon@pitagoras.com.br', '31995041815', 'Redes de Computadores', 'FrenteVerso', 12, 'arquivos/1517934362_capitulo_amostra_desenvolvimentosmartphone.pdf', '102a7671c1814e207defae9b9b753ef4', '2018-02-05 14:26:02', 'Impresso', '2018-02-07 15:11:33', 'teste 1234556', NULL),
(73, 4, 'Ramon Pedrosa', 'Segunda Chamada', 'ramon@pitagoras.com.br', '31995041815', 'Eng. eletrica', 'FrenteVerso', 100, 'arquivos/1517934407_capitulo_amostra_desenvolvimentosmartphone.pdf', '2c1c6396711f963df9b39eeb7793ff86', '2018-02-06 14:26:47', 'Impresso', '2018-02-06 15:24:14', 'teste2', NULL),
(74, 5, 'Alexandre Sauer', 'Oficial 01', 'alesauer@gmail.com', '3199504-1815', 'Redes de Computadores', 'FrenteVerso', 30, 'arquivos/1517934865_inss-agendamento.pdf', 'e66c2e498112707d053b18ea9a43cbab', '2018-02-06 14:34:25', 'Impresso', '2018-02-08 00:00:00', 'teste', NULL),
(75, 4, 'Ramon Pedrosa', 'Oficial 01', 'ramon@pitagoras.com.br', '31995041815', 'Redes de Computadores', 'FrenteVerso', 20, 'arquivos/1518023546_boleto.pdf', '3fcbdddd6e30daf3c1d4e5b35b77767f', '2018-02-07 15:12:26', 'Pendente', '2018-02-05 00:00:00', 'obs002', NULL),
(76, 5, 'Alexandre Sauer', 'Parcial 01', 'alesauer@gmail.com', '3199504-1815', 'Redes de Computadores', 'FrenteVerso', 56, 'arquivos/1518023883_escolaconstruir-matheussauer.pdf', 'e0579c5e68135a0ac09c04301ba82ccc', '2018-02-07 15:18:03', 'Impresso', '2018-02-07 15:56:02', 'Erro ao abrir o arquivo.', NULL),
(77, 7, 'Tamara Somoes', 'Oficial 02', 'tamara@pitagoras.com.br', '3193212123', 'Redes de Computadores', 'FrenteVerso', 48, 'arquivos/1518023980_comprovantenubank012018.pdf', 'eceedc66216979c6e138929706866565', '2018-02-06 15:19:40', 'Erros', '2018-02-07 15:56:57', 'Erro ao abrir o arquivo.', NULL),
(78, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '31995041815', '', 'FrenteVerso', 20, 'arquivos/1518116709_organograma.pdf', 'ab47363dd003a8afee6b31ef7f595705', '2018-02-08 17:05:09', 'Pendente', '2018-02-08 00:00:00', 'obs003', NULL),
(79, 4, 'Ramon Pedrosa', 'Oficial 01', 'ramon@pitagoras.com.br', '31995041815', 'Administracao, SistemasInformacao, SegurancaTrabalho, PosGraduacao', 'FrenteVerso', 69, 'arquivos/1518116744_organograma.pdf', '5c292355d638b69cf8481d723745c877', '2018-02-08 17:05:44', 'Erros', '2018-02-08 17:54:09', 'galoooo', NULL),
(80, 7, 'Tamara Somoes', 'Parcial 01', 'tamara@pitagoras.com.br', '3193212123', 'Redes, SistemasInformacao', 'FrenteVerso', 20, 'arquivos/1518116874_organograma.pdf', '1a00d38fd00f53001930ad53cd20c4bc', '2018-02-08 17:07:54', 'Erros', '2018-02-08 17:08:44', 'NÃ£o consegui abrir o arquivo. Favor reenviar.', '123456789 987654321'),
(81, 4, 'Ramon Pedrosa', 'Outros', 'ramon@pitagoras.com.br', '31995041815', 'Enfermagem, SegurancaTrabalho', 'FrenteVerso', 30, 'arquivos/1518120439_pdf.pdf', '542c305723b03435cfe6c92f0ccb5a17', '2018-02-08 18:07:19', 'Pendente', '2018-02-05 00:00:00', NULL, '6906969'),
(82, 4, 'Ramon Pedrosa', 'Parcial 01', 'ramon@pitagoras.com.br', '31995041815', 'Administracao, Arquitetura, Mecatronica Industrial', 'FrenteVerso', 122, 'arquivos/1518198372_escolaconstruir-matheussauer.pdf', '502126e0057266d1ff5f022917d11ff3', '2018-02-09 15:46:12', 'Erros', '2018-02-09 15:46:49', 'NÃ£o consegui abrir o arquivo. Reenvie-o.', '6906969');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipoCad` tinyint(4) NOT NULL,
  `cpf` int(15) DEFAULT NULL,
  `cod_regera` varchar(15) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `pass`, `tipoCad`, `cpf`, `cod_regera`) VALUES
(2, 'Gabriel', 'Azevedo', '(31) 3317-4608', 'gabriel@pitagoras.com.br', '202cb962ac59075b964b07152d234b70', 0, NULL, NULL),
(4, 'Ramon', 'Pedrosa', '31995041815', 'ramon@pitagoras.com.br', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL),
(5, 'Alexandre', 'Sauer', '3199504-1815', 'alesauer@gmail.com', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL),
(6, 'Anderson', 'SidneyAugusto', '3121322321', 'sidney@gmail.com', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL),
(7, 'Tamara', 'Somoes', '3193212123', 'tamara@pitagoras.com.br', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL),
(8, 'admin', 'User Admin', '31995041815', 'alesauer@gmail.com', '202cb962ac59075b964b07152d234b70', 2, NULL, NULL),
(9, 'Vitor', 'Teste', '(31)3235-2312', 'vitor@pitagoras.com.br', 'e10adc3949ba59abbe56e057f20f883e', 0, 2147483647, '6e57d8');

-- --------------------------------------------------------

--
-- Structure for view `pendente`
--
DROP TABLE IF EXISTS `pendente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendente` AS select `uploads`.`id` AS `id`,`uploads`.`id_prof` AS `id_prof`,`uploads`.`nome` AS `nome`,`uploads`.`proposito` AS `proposito`,`uploads`.`email` AS `email`,`uploads`.`telefone` AS `telefone`,`uploads`.`cursos` AS `cursos`,`uploads`.`opcaoimpressao` AS `opcaoimpressao`,`uploads`.`qtdecopias` AS `qtdecopias`,`uploads`.`patharq` AS `patharq`,`uploads`.`rastreio` AS `rastreio`,`uploads`.`data_envio` AS `data_envio`,`uploads`.`status` AS `status`,`uploads`.`data_processamento` AS `data_processamento`,`uploads`.`observacao` AS `observacao`,`uploads`.`codigos_turmas` AS `codigos_turmas` from `uploads` where (`uploads`.`status` = 'Pendente') order by `uploads`.`nome`;

-- --------------------------------------------------------

--
-- Structure for view `processada`
--
DROP TABLE IF EXISTS `processada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `processada` AS select `uploads`.`id` AS `id`,`uploads`.`id_prof` AS `id_prof`,`uploads`.`nome` AS `nome`,`uploads`.`proposito` AS `proposito`,`uploads`.`email` AS `email`,`uploads`.`telefone` AS `telefone`,`uploads`.`cursos` AS `cursos`,`uploads`.`opcaoimpressao` AS `opcaoimpressao`,`uploads`.`qtdecopias` AS `qtdecopias`,`uploads`.`patharq` AS `patharq`,`uploads`.`rastreio` AS `rastreio`,`uploads`.`data_envio` AS `data_envio`,`uploads`.`status` AS `status`,`uploads`.`data_processamento` AS `data_processamento`,`uploads`.`observacao` AS `observacao`,`uploads`.`codigos_turmas` AS `codigos_turmas` from `uploads` where (`uploads`.`status` = 'Impresso') order by `uploads`.`nome`;

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
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
