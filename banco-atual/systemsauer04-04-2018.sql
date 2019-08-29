-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.20-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para systemsauer
CREATE DATABASE IF NOT EXISTS `systemsauer` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `systemsauer`;

-- Copiando estrutura para tabela systemsauer.logs_2
CREATE TABLE IF NOT EXISTS `logs_2` (
  `COD_LOGS` int(10) unsigned NOT NULL,
  `COD_USUARIOS_SISTEMA` varchar(255) DEFAULT NULL,
  `DATA_LOGS` date DEFAULT NULL,
  `HORA_LOGS` datetime DEFAULT NULL,
  `TIPO_LOGS` varchar(255) DEFAULT NULL,
  `ACAO` varchar(255) DEFAULT NULL,
  `IP_LOGS` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela systemsauer.logs_2: 0 rows
/*!40000 ALTER TABLE `logs_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs_2` ENABLE KEYS */;

-- Copiando estrutura para view systemsauer.pendente
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `pendente` (
	`id` INT(50) NOT NULL,
	`id_prof` INT(11) NOT NULL,
	`nome` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`proposito` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`telefone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`cursos` VARCHAR(512) NULL COLLATE 'latin1_swedish_ci',
	`opcaoimpressao` VARCHAR(15) NULL COLLATE 'latin1_swedish_ci',
	`qtdecopias` INT(11) NULL,
	`patharq` VARCHAR(250) NULL COLLATE 'latin1_swedish_ci',
	`rastreio` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`data_envio` DATETIME NULL,
	`status` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`data_processamento` DATETIME NULL,
	`observacao` VARCHAR(512) NULL COLLATE 'latin1_swedish_ci',
	`codigos_turmas` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view systemsauer.processada
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `processada` (
	`id` INT(50) NOT NULL,
	`id_prof` INT(11) NOT NULL,
	`nome` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`proposito` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`telefone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`cursos` VARCHAR(512) NULL COLLATE 'latin1_swedish_ci',
	`opcaoimpressao` VARCHAR(15) NULL COLLATE 'latin1_swedish_ci',
	`qtdecopias` INT(11) NULL,
	`patharq` VARCHAR(250) NULL COLLATE 'latin1_swedish_ci',
	`rastreio` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`data_envio` DATETIME NULL,
	`status` VARCHAR(10) NULL COLLATE 'latin1_swedish_ci',
	`data_processamento` DATETIME NULL,
	`observacao` VARCHAR(512) NULL COLLATE 'latin1_swedish_ci',
	`codigos_turmas` VARCHAR(255) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para tabela systemsauer.uploads
CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
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
  `codigos_turmas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela systemsauer.uploads: 2 rows
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
INSERT INTO `uploads` (`id`, `id_prof`, `nome`, `proposito`, `email`, `telefone`, `cursos`, `opcaoimpressao`, `qtdecopias`, `patharq`, `rastreio`, `data_envio`, `status`, `data_processamento`, `observacao`, `codigos_turmas`) VALUES
	(83, 5, 'Alexandre Sauer', 'Oficial 01', 'alesauer@gmail.com', '3199504-1815', 'Redes', 'FrenteVerso', 20, 'arquivos/1522862882_aula01-vetores-e-matrizes.pdf', '5acf08deced3301f1873ed2dad56226d', '2018-04-04 14:28:02', 'Impresso', '2018-04-04 17:29:01', 'Impresso e pronto para retirada.', '12121212 12121212 12121212 '),
	(84, 6, 'Anderson SidneyAugusto', 'Oficial 01', 'sidney@gmail.com', '3121322321', 'Redes', 'FrenteVerso', 20, 'arquivos/1522863120_av.docx', '0cb9da673d352c0b03ca0a6f2cc09d13', '2018-04-04 14:32:00', 'Erros', '2018-04-04 17:32:46', 'Favor enviar cÃ³pia em PDF', '6906969');
/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;

-- Copiando estrutura para tabela systemsauer.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `tipoCad` tinyint(4) NOT NULL,
  `cpf` int(15) DEFAULT NULL,
  `cod_regera` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela systemsauer.users: ~77 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `pass`, `tipoCad`, `cpf`, `cod_regera`) VALUES
	(12, 'ADALBERTO', 'CARNEIRO DE SANTANA', '3112345678', '856.824.116-68@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 856824, NULL),
	(13, 'ADAO', 'APARECIDO FERREIRA RODRIGUES', '3112345678', '070.122.236-00@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 70122, NULL),
	(14, 'ALAN', 'CARLO LOPES VALENTIM SILVA', '3112345678', '070.926.276-05@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 70926, NULL),
	(16, 'ANA', 'CAROLINA BOREM BICALHO VASCONCELOS', '3112345678', '070.557.986-71@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 70557, NULL),
	(17, 'ANA', 'CAROLINA DE JESUS GONCALVES PEREIRA', '3112345678', '971.416.236-04@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 971416, NULL),
	(18, 'ANDERSON', 'EDUARDO JUSTINIANO', '3112345678', '041.100.536-76@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 41100, NULL),
	(19, 'ANDERSON', 'SIDNEI SOUZA CAMPOS', '3112345678', '875.211.136-91@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 875211, NULL),
	(20, 'ANDRE', 'TANUS CESARIO DE SOUZA', '3112345678', '049.446.216-71@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 49446, NULL),
	(21, 'BRUNO', 'ALYSSON LOPES MARTINS PEREIRA', '3112345678', '031.630.046-28@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 31630, NULL),
	(22, 'BRUNO', 'VIANA DOS ANJOS', '3112345678', '040.766.466-14@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 40766, NULL),
	(23, 'CAMILA', 'CRISTINA SANTOS GONZAGA', '3112345678', '064.560.126-86@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 64560, NULL),
	(24, 'CAMILA', 'PROSPERI DE CASTRO', '3112345678', '074.348.376-67@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 74348, NULL),
	(25, 'CARINA', 'COELHO RIBEIRO', '3112345678', '842.930.986-15@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 842930, NULL),
	(26, 'CARLOS', 'HENRIQUE PEREIRA', '3112345678', '069.166.296-73@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 69166, NULL),
	(27, 'CARLOS', 'RODRIGUES NOVAES', '3112345678', '683.700.326-72@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 683700, NULL),
	(28, 'CAROLINA', 'VALENTE DE OLIVEIRA', '3112345678', '073.004.946-92@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 73004, NULL),
	(29, 'CHRISTIANE', 'LEOLINA LARA SILVA', '3112345678', '817.528.906-63@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 817528, NULL),
	(30, 'CLEBERSON', 'ADRIANO DILSON', '3112345678', '032.233.716-05@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 32233, NULL),
	(31, 'CLEITON', 'PATRICK RIBEIRO', '3112345678', '075.580.506-26@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 75580, NULL),
	(32, 'DANIEL', 'GUEDES PECHIR', '3112345678', '054.835.286-03@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 54835, NULL),
	(33, 'DAVI', 'DE SOUZA DE PAULA PINTO', '3112345678', '089.100.856-06@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 89100, NULL),
	(34, 'DEIBSON', 'AGNEL DA SILVA', '3112345678', '919.550.416-87@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 919550, NULL),
	(35, 'ELIZANGELA', 'TAVARES SANTOS LIMA', '3112345678', '032.609.126-22@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 32609, NULL),
	(36, 'ERNANE', 'CUNHA LIMA', '3112345678', '825.277.686-87@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 825277, NULL),
	(37, 'ERNANE', 'VINICIUS SILVA', '3112345678', '051.814.516-67@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 51814, NULL),
	(38, 'FELIPE', 'PEREIRA HEITMANN', '3112345678', '791.740.002-68@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 791740, NULL),
	(39, 'FERNANDA', 'CRISTHINE FERNANDES', '3112345678', '888.162.306-49@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 888162, NULL),
	(40, 'FERNANDO', 'HENRIQUE SOUZA', '3112345678', '063.583.766-83@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 63583, NULL),
	(41, 'FRANCISCO', 'DE CASTRO SAMARINO E SOUZA', '3112345678', '056.980.266-02@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 56980, NULL),
	(42, 'FREDERICK', 'LAWRENCE DE SA IBRAIM', '3112345678', '045.201.436-08@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 45201, NULL),
	(43, 'GILBERTO', 'LUIS GIACOMIN', '3112345678', '766.451.426-68@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 766451, NULL),
	(44, 'GLEINDA', 'APARECIDA FERREIRA DE AGUIAR', '3112345678', '013.372.686-07@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 13372, NULL),
	(45, 'ITALO', 'DIEGO TEOTONIO', '3112345678', '097.003.756-25@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 97003, NULL),
	(46, 'JESSICA', 'BRUNA MIRANDA GUEDES', '3112345678', '082.013.626-32@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 82013, NULL),
	(47, 'JOAO', 'PAULO RAMOS GOMES', '3112345678', '089.465.926-05@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 89465, NULL),
	(48, 'JORGE', 'LUIZ SILVA PEREIRA', '3112345678', '013.073.386-58@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 13073, NULL),
	(49, 'JORGE', 'LUIZ SILVA PEREIRA', '3112345678', '013.073.386-58@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 13073, NULL),
	(50, 'JOSE', 'AFONSO PEREIRA SOBRINHO', '3112345678', '001.566.266-75@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 1566, NULL),
	(51, 'JOSE', 'LUIZ GONCALVES BASTOS JUNIOR', '3112345678', '001.423.416-57@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 1423, NULL),
	(52, 'JOYCE', 'ASSIS SILVA', '3112345678', '055.538.536-13@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 55538, NULL),
	(53, 'JULIO', 'CESAR DE JESUS', '3112345678', '036.758.016-08@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 36758, NULL),
	(54, 'JULIO', 'CESAR PACHECO', '3112345678', '621.995.526-91@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 621995, NULL),
	(55, 'KARLA', 'SANTOS TRINDADE', '3112345678', '069.902.496-09@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 69902, NULL),
	(56, 'LEANDRO', 'DE SOUZA PINTO', '3112345678', '055.803.346-64@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 55803, NULL),
	(57, 'LUCIANA', 'FRANCA DA CUNHA', '3112345678', '073.408.986-46@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 73408, NULL),
	(58, 'LUIS', 'CARLOS NEBENZAHL', '3112345678', '355.657.486-15@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 355657, NULL),
	(59, 'MARCOS', 'PAULO PATUSSI DOS SANTOS', '3112345678', '952.736.976-20@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 952736, NULL),
	(60, 'MARISTELLA', 'AYALA DIAS', '3112345678', '788.677.546-53@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 788677, NULL),
	(61, 'MARLENE', 'GOMES DE AVELIZ', '3112345678', '752.728.576-15@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 752728, NULL),
	(62, 'MICHELLE', 'DINIZ LOPES', '3112345678', '076.619.376-46@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 76619, NULL),
	(63, 'MURILO', 'DOS SANTOS VIEIRA', '3112345678', '009.933.065-27@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 9933, NULL),
	(64, 'NEIDE', 'MARIA LAGES ARAUJO', '3112345678', '816.603.836-68@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 816603, NULL),
	(65, 'PAULA', 'PAGANINI COSTA', '3112345678', '013.837.946-77@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 13837, NULL),
	(66, 'PAULO', 'RODRIGUES MILHORATO', '3112345678', '067.487.206-13@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 67487, NULL),
	(67, 'PEDRO', 'RIBEIRO DE CARVALHO', '3112345678', '685.359.026-00@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 685359, NULL),
	(68, 'PLINIO', 'FERNANDO DA CRUZ', '3112345678', '054.508.596-94@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 54508, NULL),
	(69, 'PRISCILA', 'MARIA ESTEVES BRANDAO', '3112345678', '081.325.906-19@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 81325, NULL),
	(70, 'RAMON', 'MARTINS PEDROSA', '3112345678', '063.432.216-89@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 63432, NULL),
	(71, 'RANGEL', 'CAIO QUININO DUTRA', '3112345678', '047.027.156-66@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 47027, NULL),
	(72, 'REINER', 'SIMOES', '3112345678', '391.099.336-20@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 391099, NULL),
	(73, 'RODRIGO', 'DE OLIVEIRA MATOS', '3112345678', '077.289.986-09@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 77289, NULL),
	(74, 'RONEY', 'AMARANTE BRAGA', '3112345678', '006.986.376-82@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 6986, NULL),
	(75, 'ROSIMAR', 'VIEIRA PRIMO', '3112345678', '659.896.606-00@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 659896, NULL),
	(76, 'SABRINA', 'PETRILLO SAMPAIO', '3112345678', '075.596.606-65@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 75596, NULL),
	(77, 'SERGIO', 'RENATO QUEIROGA', '3112345678', '293.218.406-72@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 293218, NULL),
	(78, 'SERGIO', 'RICARDO DOS SANTOS VIEIRA', '3112345678', '939.616.936-68@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 939616, NULL),
	(79, 'SIMONE', 'CECILIA DE MELO', '3112345678', '954.002.146-49@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 954002, NULL),
	(80, 'TAMARA', 'SIMOES SILVA', '3112345678', '083.352.466-61@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 83352, NULL),
	(81, 'THIAGO', 'AUGUSTO SILVA ANDREZA', '3112345678', '067.248.936-82@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 67248, NULL),
	(82, 'UBIRATAN', 'DE CASTRO NATALI', '3112345678', '000.608.636-50@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 608, NULL),
	(83, 'VANDA', 'APARECIDA OLIVEIRA DALFIOR', '3112345678', '029.540.176-19@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 29540, NULL),
	(84, 'VERA', 'LUCIA NASCIMENTO MOREIRA', '3112345678', '469.085.526-91@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 469085, NULL),
	(85, 'WILLIAN', 'CARLOS LEAL', '3112345678', '050.447.296-80@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 50447, NULL),
	(86, 'ZEILA', 'SUSAN KELI SILVA', '3112345678', '023.774.556-97@kroton.com.br', '202cb962ac59075b964b07152d234b70', 1, 23774, NULL),
	(87, 'Admin', 'do Sistema', '31995041815', 'alesauer1@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 2147483647, NULL),
	(88, 'Sicp', 'Pitagoras Contagem', '3199504815', 'sicpcontagem@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2147483647, NULL),
	(89, 'Alexandre', 'Sauer Pais Lemes', '31995041815', 'alesauer@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2147483647, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para view systemsauer.pendente
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `pendente`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `pendente` AS select `uploads`.`id` AS `id`,`uploads`.`id_prof` AS `id_prof`,`uploads`.`nome` AS `nome`,`uploads`.`proposito` AS `proposito`,`uploads`.`email` AS `email`,`uploads`.`telefone` AS `telefone`,`uploads`.`cursos` AS `cursos`,`uploads`.`opcaoimpressao` AS `opcaoimpressao`,`uploads`.`qtdecopias` AS `qtdecopias`,`uploads`.`patharq` AS `patharq`,`uploads`.`rastreio` AS `rastreio`,`uploads`.`data_envio` AS `data_envio`,`uploads`.`status` AS `status`,`uploads`.`data_processamento` AS `data_processamento`,`uploads`.`observacao` AS `observacao`,`uploads`.`codigos_turmas` AS `codigos_turmas` from `uploads` where (`uploads`.`status` = 'Pendente') order by `uploads`.`nome` ;

-- Copiando estrutura para view systemsauer.processada
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `processada`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `processada` AS select `uploads`.`id` AS `id`,`uploads`.`id_prof` AS `id_prof`,`uploads`.`nome` AS `nome`,`uploads`.`proposito` AS `proposito`,`uploads`.`email` AS `email`,`uploads`.`telefone` AS `telefone`,`uploads`.`cursos` AS `cursos`,`uploads`.`opcaoimpressao` AS `opcaoimpressao`,`uploads`.`qtdecopias` AS `qtdecopias`,`uploads`.`patharq` AS `patharq`,`uploads`.`rastreio` AS `rastreio`,`uploads`.`data_envio` AS `data_envio`,`uploads`.`status` AS `status`,`uploads`.`data_processamento` AS `data_processamento`,`uploads`.`observacao` AS `observacao`,`uploads`.`codigos_turmas` AS `codigos_turmas` from `uploads` where (`uploads`.`status` = 'Impresso') order by `uploads`.`nome` ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
