CREATE TABLE `vendas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `qtd` int,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valor` int,
  PRIMARY KEY (`id`)
);

INSERT INTO `vendas` (`id`, `name`,`qtd`,`valor`) VALUES  
(1,'celular',1 ,400 ),
(2,'televisao',4 ,000),
(3,'gabinete',900 ,00 ),
(4,'memoria',500 ,00);

