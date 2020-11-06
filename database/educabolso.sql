CREATE TABLE `usuarios` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) UNIQUE NOT NULL,
  `senha` varchar(200) NOT NULL
);

CREATE TABLE `contasfixas` (
  `idcontasfixas` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `conta` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `vencimento` date NOT NULL,
  `data_publicada` DATETIME DEFAULT NOW(),
  `user_id` int(11) DEFAULT NULL,
  FOREIGN KEY (user_id) REFERENCES usuarios(id)
);


