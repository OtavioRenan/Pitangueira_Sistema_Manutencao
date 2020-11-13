CREATE DATABASE `pitangueira_manutencao` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `pitangueira_manutencao`; 

CREATE TABLE IF NOT EXISTS `status`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,    
    `nome` VARCHAR(191) NOT NULL,       
    PRIMARY KEY(`id`)
);

INSERT INTO `status`(`id`, `nome`) VALUES
(1, 'ATIVO'),
(2, 'DESATIVADO');

CREATE TABLE IF NOT EXISTS `usuarios`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
	`status` INT(1) NOT NULL DEFAULT 1,
    `cargo` INT(1) NOT NULL,
    `nome` VARCHAR(191) NOT NULL,
    `email` VARCHAR(191) UNIQUE NOT NULL,
    `senha` VARCHAR(191) NOT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY(`status`) REFERENCES `status`(`id`)
);

CREATE TABLE IF NOT EXISTS `atendimento_tipos`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,    
    `nome` VARCHAR(191) NOT NULL,       
    PRIMARY KEY(`id`)
);

INSERT INTO `atendimento_tipos`(`id`, `nome`) VALUES
(1, 'PRESENCIAL'),
(2, 'TELEFÔNICO'),
(3, 'ONLINE');

CREATE TABLE IF NOT EXISTS `atendimentos`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `usuario` INT(11) NOT NULL,
    `tipo` INT(11) NOT NULL,
    `cliente` VARCHAR(191) NOT NULL,
    `observacao` TEXT NOT NULL, 
    `execucao` DATETIME NOT NULL,    
    PRIMARY KEY(`id`),
    FOREIGN KEY(`usuario`) REFERENCES `usuarios`(`id`),
    FOREIGN KEY(`tipo`) REFERENCES `atendimento_tipos`(`id`)
);