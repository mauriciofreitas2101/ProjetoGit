CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  `genero` VARCHAR(15) NOT NULL,
  `altura` INT(4) NOT NULL,
  `peso` INT(4) NOT NULL,
  PRIMARY KEY (`usuario_id`));

