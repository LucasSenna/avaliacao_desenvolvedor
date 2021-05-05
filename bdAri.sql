CREATE TABLE `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `comprador` varchar(220) NOT NULL,
  `descricao` varchar(220) NOT NULL,
  `preco_uni` double NOT NULL,
  `quantidade` int NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `fornecedor` varchar(120) NOT NULL,
  `total` double GENERATED ALWAYS AS (preco_uni * quantidade) VIRTUAL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;