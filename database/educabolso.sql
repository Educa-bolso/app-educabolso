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
  `vencimento` date DEFAULT current_timestamp(),
  `data_publicada` date DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  FOREIGN KEY (user_id) REFERENCES usuarios(id)
);


