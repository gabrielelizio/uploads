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
	(86, 307, 'Alexandre Sauer Pais Lemes', 'Oficial 01', 'alesauer@gmail.com', '3112345678', 'SistemasInformacao', 'FrenteVerso', 32, 'arquivos/1522960608_laboratoriodos_hping.pdf', '394db6d2a1902a3367474e756cd8f715', '2018-04-05 17:36:48', 'Erros', '2018-04-05 20:37:31', 'favor enviar novamente', '12121212 12121212 12121212 '),
	(87, 307, 'Alexandre Sauer Pais Lemes', 'Oficial 01', 'alesauer@gmail.com', '3112345678', 'Redes', 'FrenteVerso', 20, 'arquivos/1522961378_laboratoriodos_hping.pdf', '190347791609be68986c8dc7c29812fc', '2018-04-05 17:49:38', 'Pendente', NULL, NULL, '12121212 12121212 12121212 ');
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
	(248, 'Adalberto', 'Carneiro de Santana', '3112345678', 'adalberto_carneiro@yahoo.com.br', '75fd555a88382c8b5bafc7af1dbecc68', 1, 2147483647, NULL),
	(249, 'AdÃ£o', 'Aparecido Ferreira Rodrigues', '3112345678', 'adaoafr@yahoo.com.br', 'b7e770bb176d985c8b19050bf8a6044c', 1, 2147483647, NULL),
	(250, 'Ana Carolina', 'BorÃ©m Bicalho Vasconcelos', '3112345678', 'ana_borem@hotmail.com', 'af7657f223dacc53a317c723e6b13797', 1, 2147483647, NULL),
	(251, 'Anderson Sidnei', 'Souza Campos', '3112345678', 'anderson.sidnei@gmail.com', '5663fad4aab1d48d89f73632542ef5e8', 1, 2147483647, NULL),
	(252, 'AndrÃ©', 'Tanus CesÃ¡rio de Souza', '3112345678', 'andretanus@gmail.com', 'f396becc2ad66d0595b134ac845fe450', 1, 2147483647, NULL),
	(253, 'Bruno', 'Alysson Lopes Martins Pereira', '3112345678', 'brunoalysson77@gmail.com', 'd96bd7e0078ba037dfcc6e6fc277aa95', 1, 2147483647, NULL),
	(254, 'Bruno', 'Viana dos Anjos', '3112345678', 'bv_anjos@hotmail.com', '4807457a1fc8c6d67c06cc1b2e7c9bad', 1, 2147483647, NULL),
	(255, 'Camila', 'Cristina Santos Gonzaga Pontes', '3112345678', 'migonzaga@yahoo.com.br', '92b91ccb8fb9376c0b4888b52dcd2312', 1, 2147483647, NULL),
	(256, 'Carina', 'Coelho Ribeiro', '3112345678', 'carinacesassociados@gmail.com', '13bc9780e9d5c3754f574b3563166af8', 1, 2147483647, NULL),
	(257, 'Carlos', 'Henrique Pereira', '3112345678', 'carloshpereira@cemig.com.br', 'e8c3d14df50ee02a5b524a07dd96cdb0', 1, 2147483647, NULL),
	(258, 'Carolina', 'Valente de Oliveira', '3112345678', 'carolvalente.oliveira@gmail.com', '89a311b47de7cc94300fdcf878fd51d5', 1, 2147483647, NULL),
	(259, 'Christiane', 'Leolina Lara Silva', '3112345678', 'christiane.leolina@gmail.com', '5cc0f3137cbfd2ad44e50cc550e3f3d1', 1, 2147483647, NULL),
	(260, 'Cleberson', 'Adriano Dilson', '3112345678', 'Cleberson.dilson1000@gmil.com', '7478f3eb803bea3399b6b48cdf2435c5', 1, 2147483647, NULL),
	(261, 'Cleiton Patrick', 'Ribeiro', '3112345678', 'cleitonpatrick@gmail.com', '368905057271f7b30a1125059fa7cc20', 1, 2147483647, NULL),
	(262, 'Davi', 'Souza de paula pinto', '3112345678', 'davi.souzapp@hotmail.com', '1c7ee557b4f28175c761d6c5d6e668bc', 1, 2147483647, NULL),
	(263, 'Deibson', 'Agnel da Silva', '3112345678', 'deibsonagnel@yahoo.com.br', 'c24087211d4ca2107be5a42664949f98', 1, 2147483647, NULL),
	(264, 'Elizangela', 'Tavares Santos Lima', '3112345678', 'ELIZTS2004@YAHOO.COM.BR', 'dfe46696baa1b2b229b5fbb7cb5b6853', 1, 2147483647, NULL),
	(265, 'Ernane', 'Vinicius Silva', '3112345678', 'ernane_engemec@yahoo.com.br', '004b73f6a14eefa4ca421bd5d7f31b55', 1, 2147483647, NULL),
	(266, 'Felipe', 'Pereira Heitmann', '3112345678', 'felipeph@gmail.com', '7f3fb9c5feab974994683d04da36b973', 1, 2147483647, NULL),
	(267, 'Fernando', 'Henrique Souza', '3112345678', 'fernandohsouz@gmail.com', '3c568a8fb85a364bdc7019311435cc85', 1, 2147483647, NULL),
	(268, 'Francisco', 'de Castro Samarino e Souza', '3112345678', 'fsamarino@hotmail.com', 'aaeb34b5e23ec24a85d0f72a67498606', 1, 2147483647, NULL),
	(269, 'Frederick', 'Lawrence de SÃ¡ Ibraim', '3112345678', 'frederickibraim@gmail.com', 'db0cc216f9fc7270e20e68c5a13286e7', 1, 2147483647, NULL),
	(270, 'Gilberto', 'Luis Giacomin', '3112345678', 'gilberto.etjk@gmail.com', 'd377228f324c2808da4f5124c17b4917', 1, 2147483647, NULL),
	(271, 'Gleinda', 'Aparecida Ferreira de Aguiar', '3112345678', 'gleindaf@yahoo.com.br', '291b109ca0aa4e77b8ef996796c30ddd', 1, 1337268607, NULL),
	(272, 'JÃ©ssica', 'Bruna Miranda Guedes', '3112345678', 'jessicabmguedes@yahoo.com.br', '495da549c35339e6c002043093a37929', 1, 2147483647, NULL),
	(273, 'JoÃ£o', 'Paulo Ramos Gomes', '3112345678', 'inovaiuai@gmail.com', '5be38fc2aa554337d918c9f12a4311bb', 1, 2147483647, NULL),
	(274, 'Jorge', 'Luiz Silva Pereira', '3112345678', 'jlsilvabh@yahoo.com.br', 'd299e3ea9bcf4cfaaea4795d3144cb70', 1, 1307338658, NULL),
	(275, 'JosÃ©', 'Afonso Pereira Sobrinho', '3112345678', 'profafonso38@gmail.com', '156bc8531f1fbaabcfae862e7646c5b5', 1, 156626675, NULL),
	(276, 'Julio', 'Cesar de Jesus', '3112345678', 'juliovinte@yahoo.com.br', 'ec4e077e92c053b5986a849d85343bf1', 1, 2147483647, NULL),
	(277, 'JÃºlio', 'CÃ©sar Pacheco', '3112345678', 'juliocesar.pacheco@gmail.com', 'ba8574e3200608f94ae4e969e30696cf', 1, 2147483647, NULL),
	(278, 'Karla', 'Santos Trindade', '3112345678', 'karla.trindade@hotmail.com', 'b997df992a637e7dae5890fa36cb83e2', 1, 2147483647, NULL),
	(279, 'Leandro', 'de Souza Pinto', '3112345678', 'leandrosp1982@yahoo.com.br', '9ce899c4ce610cec4125033a394b025d', 1, 2147483647, NULL),
	(280, 'Luciana', 'FranÃ§a da Cunha Aguiar', '3112345678', 'lucianafrancacunha@gmail.com', '8a0b7cce207b72611efca157843355d5', 1, 2147483647, NULL),
	(281, 'Luis', 'Carlos Nebenzahl', '3112345678', 'lcnebenza@gmail.com', '56edfef0e85281430feeaf1d8dd2216f', 1, 2147483647, NULL),
	(282, 'Marcos', 'Paulo Patussi dos Santos', '3112345678', 'fisicaalternativa@hotmail.com', '22c0f9f990d83065396daecd05ec9be0', 1, 2147483647, NULL),
	(283, 'Marlene', 'Gomes de Aveliz', '3112345678', 'maravelster@gmail.com', 'e24ee27596e53ac619c2f093312a8502', 1, 2147483647, NULL),
	(284, 'Michelle', 'Diniz Lopes', '3112345678', 'Michelle.dlopes@gmail.com', '81c96f4f583be39d6dacd2885a2baead', 1, 2147483647, NULL),
	(285, 'Murilo', 'dos Santos Vieira', '3112345678', 'murilovieira_5@hotmail.com', '3a3e5f3d0e8e04fa730617a70525fdce', 1, 993306527, NULL),
	(286, 'Neide', 'Maria Lages AraÃºjo', '3112345678', 'neidelages@yahoo.com.br', 'd26d409fac1fb240a4adbc3d6ce374d6', 1, 2147483647, NULL),
	(287, 'Paula', 'Paganini Costa', '3112345678', 'paula_paganini@hotmail.com', 'fe4075c2546b3a79db26677ca0e30493', 1, 1383794677, NULL),
	(288, 'PlÃ­nio', 'Fernando da Cruz', '3112345678', 'pliniofernando@yahoo.com.br', '85a59c5cf7d6e4ed37ec6e12f8524c17', 1, 2147483647, NULL),
	(289, 'Ramon', 'Martins Pedrosa', '3112345678', 'ramonmartins@gmail.com', 'eb03d6a401ece6a0c2f65c6ff1efda5e', 1, 2147483647, NULL),
	(290, 'Rangel', 'Caio Quinino Dutra', '3112345678', 'ranger0@gmail.com', 'cc387d4ac38cb914cfed81e2ff890841', 1, 2147483647, NULL),
	(291, 'Rodrigo', 'de Oliveira Matos', '3112345678', 'rodrigomatos@outlook.com', '496d423e0f97bca9e511891f6bb0cfbc', 1, 2147483647, NULL),
	(292, 'Roney', 'Amarante Braga', '3112345678', 'Roneybraga@yahoo.com', '163a05b0bee77f7cdc9282db2b13c51d', 1, 698637682, NULL),
	(293, 'Rosimar', 'Vieira Primo', '3112345678', 'rvprimo@gmail.com', 'd7c98ccc39542df512bcc14caf3f605d', 1, 2147483647, NULL),
	(294, 'Sabrina', 'Petrillo Sampaio', '3112345678', 'sabrinapsampaio@yahoo.com.br', '1d91318ca02950fcd68672e9a5d5821a', 1, 2147483647, NULL),
	(295, 'SÃ©rgio', 'Renato Queiroga', '3112345678', 'sergiorq@bol.com.br', '33ae8ffb2cc5cf9f8421f7394865f7e2', 1, 2147483647, NULL),
	(296, 'SÃ©rgio', 'Ricardo dos Santos Vieira', '3112345678', 'sergiorsvieira@yahoo.com.br', '26e4e19a25310d3678b0d6839535c0c4', 1, 2147483647, NULL),
	(297, 'Thiago', 'Augusto Silva Andreza', '3112345678', 'thiagoandreza@yahoo.com.br', 'bb48e79345f72d49c3dd795092bb29a4', 1, 2147483647, NULL),
	(298, 'Ubiratan', 'de Castro Natali', '3112345678', 'ucnatali@yahoo.com.br', 'c52f23981d8a1b60e1f5779bf2e44580', 1, 60863650, NULL),
	(299, 'Vanda', 'Aparecida Oliveira Dalfior', '3112345678', 'vdalfior@ig.com.br', 'dfebf5d9c4b7898597f79704165ecaad', 1, 2147483647, NULL),
	(300, 'Vera', 'Lucia Nascimento Moreira', '3112345678', 'veramoreirarh@yahoo.com.br', 'ee7fb9ac0ef9c519d08ce9e35a9b2fea', 1, 2147483647, NULL),
	(301, 'Willian', 'Carlos Leal', '3112345678', 'williancleal@yahoo.com.br', '58980c5df756bdbedd3dedbd26da3287', 1, 2147483647, NULL),
	(302, 'Zeila', 'Susan Keli Silva', '3112345678', 'zeilasusan@yahoo.com.br', '65f4b93b09ecf5e064768fb3e1a1c529', 1, 2147483647, NULL),
	(303, 'Carlos', 'Rodrigues Novaes', '3112345678', 'carlos.novaes@pitagoras.com.br', 'd4afd658363c60e5162d93cc7c6333b4', 1, 2147483647, NULL),
	(304, 'Pedro', 'Ribeiro de Carvalho', '3112345678', '', 'de17fd9b07888c1f0dfd346a863e659c', 1, 2147483647, NULL),
	(305, 'Alan', 'Carlo Lopes Valetin Silva', '3112345678', 'alankrlo@yahoo.com.br', '2786ce86b6c9b0de08aa6c8e56ee584f', 1, 2147483647, NULL),
	(306, 'Paulo', 'Rodrigues Milhorato', '3112345678', 'paulo.redes@yahoo.com.br', '6246266e675091198619642535df53d4', 1, 2147483647, NULL),
	(307, 'Alexandre', 'Sauer Pais Lemes', '3112345678', 'alesauer@gmail.com', '1beac2684dcbbf1d4bfa127e786df391', 1, 2147483647, NULL),
	(308, 'Tamara', 'Simoes Silva', '3112345678', 'SSSIMOESTAMARA@GMAIL.COM', '90e682932d7de1637224b92cba364e42', 1, 2147483647, NULL),
	(309, 'Jose', 'Luiz GonÃ§alves Bastos Junior', '3112345678', 'joseluiz@dcc.ufmg.br', '5b5686570f3a24d7e505e5c2637601af', 1, 142341657, NULL),
	(310, 'Adriana', 'Antunes Vieira', '3112345678', 'fusquinha7@yahoo.com.br', 'ac43e25f6061397f64c55204f0fd9a4c', 1, 2147483647, NULL),
	(311, 'Maristella', 'Ayla Dias', '3112345678', 'maristella.adias@kroton.com.br', '95cc3d23b5bcfa9554930287d1dad3ca', 1, 2147483647, NULL),
	(312, 'Fernanda', 'Christine Fernandes', '3112345678', 'fernanda.fernandes@pitagoras.com.br', '8a4b9bf2e0090c22643e89af4afcfe0e', 1, 2147483647, NULL),
	(313, 'Ana', 'Carolina de Jesus GonÃ§alves Pereira', '3112345678', 'anac@pitagoras.com.br', '937cca49b9e48b072a8042d5e367af18', 1, 2147483647, NULL),
	(314, 'Fernanda', 'Moraes Teruel', '3112345678', 'fernanda.smorais@kroton.com.br', '08536b31c0fc8cb640435c79ed67c178', 1, 2147483647, NULL),
	(315, 'Simone', 'Cecelia de Melo', '3112345678', 'SIMONECECILIADEMELO@YAHOO.COM.BR', '43233165714fa796dfd8267ac336d943', 1, 2147483647, NULL),
	(316, 'Daniel', 'Guedes Pechir', '3112345678', 'danpechir@yahoo.com.br', '7bd3d06e6785b9cbbeda21471056ea02', 1, 2147483647, NULL),
	(317, 'Priscila', 'Maria Esteves BrandÃ£o', '3112345678', 'pmxesteves@gmail.com', '8998b1d08d3f6290de6adac512ffe7e3', 1, 2147483647, NULL),
	(318, 'Camila', 'Prosperi de Castro', '3112345678', 'camilaprosperic@gmail.com', '57c7e457768b29378e08b5c41490e260', 1, 2147483647, NULL),
	(319, 'Eduardo', 'Cezar de Almeida e Silva', '3112345678', 'eduardo_cezar@uol.com.br', '48b3f7d67061bb25b0240c6e32b374a8', 1, 2147483647, NULL),
	(320, 'Amanda', 'Aparecida Oliveira Leopoldino', '3112345678', 'aoliveiraleopoldino@gmail.com', '1b0aa79ba2c514627a8606944bbb5c29', 1, 2147483647, NULL),
	(321, 'Admin', 'do Sistema', '31995041815', 'alesauer@gmail.com', '1b0aa79ba2c514627a8606944bbb5c29', 2, 2147483647, NULL),
	(322, 'Sicp', 'Pitagoras Contagem', '3199504815', 'sicpcontagem@gmail.com', '07c967eb2111375f656f99bfa025e3f1', 0, 2147483647, NULL),
	(323, 'Suelen', 'Estefani Pereira Moraes', '3199504815', 'suelen.morais@pitagoras.com.br', 'a6c9a7703a285c4365df684b8dc48a99', 0, 2147483647, NULL),
	(324, 'Adriana', 'Aparecida dos Reis', '3199504815', 'adriana.rreis@pitagoras.com.br', 'ce9711d7609f7ef90aa2ab5c547a8ccf', 0, 2147483647, NULL),
	(325, 'Gabriela', 'Alves de Jesus', '3199504815', 'gabriela.ajesus@pitagoras.com.br', 'c6286cc77bfa669e816c84058a3bc3da', 0, 2147483647, NULL),
	(326, 'Euler', 'Matta da PaixÃ£o Silva', '3199504815', 'euler.matta@pitagoras.com.br', '0f6fd915ea7e0ac5e032273e581b9691', 0, 2147483647, NULL);
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
