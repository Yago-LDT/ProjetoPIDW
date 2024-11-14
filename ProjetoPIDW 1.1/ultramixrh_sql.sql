-- DROP SCHEMA `ultramixrh` ;

CREATE SCHEMA IF NOT EXISTS `ultramixrh` DEFAULT CHARACTER SET utf8mb4 ;
USE `ultramixrh` ;

create table if not exists login (id int not null auto_increment primary key, 
usuario varchar(50),
 senha varchar(255));

CREATE TABLE IF NOT EXISTS funcionarios (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50),
  `cargo` VARCHAR(40),
  `salario` DOUBLE,
  `CPF` INT(11),
  `data_admissão` DATE,
  `telefone` VARCHAR(14),
  `email` VARCHAR(50),
  PRIMARY KEY (`id`));


CREATE TABLE IF NOT EXISTS avaliacoes(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` INT(11) NOT NULL,
  `produtividade` VARCHAR(100),
  `empenho` VARCHAR(100),
  `relatorio` VARCHAR(500),
  `recomenda_promoção` VARCHAR(20),
  PRIMARY KEY (`id`),
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `ultramixrh`.`funcionarios` (`id`));


CREATE TABLE IF NOT EXISTS `ultramixrh`.`banco_horas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` INT(11) NOT NULL,
  `horas_em_banco` INT(11),
  `ferias` VARCHAR(40),
  `licencas` VARCHAR(200),
  PRIMARY KEY (`id`),
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `ultramixrh`.`funcionarios` (`id`));


CREATE TABLE IF NOT EXISTS `ultramixrh`.`cargos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(40),
  `carga_horaria` INT(11),
  `funcao` VARCHAR(300),
  `faixa_salarial` VARCHAR(50),
  PRIMARY KEY (`id`));


CREATE TABLE IF NOT EXISTS `ultramixrh`.`fornecedores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50),
  `produto` VARCHAR(50),
  `CNPJ` INT(20),
  `telefone` VARCHAR(14),
  `email` VARCHAR(50),
  `ultima_remessa` DATE,
  `proxima_remessa` DATE,
  PRIMARY KEY (`id`));



CREATE TABLE IF NOT EXISTS `ultramixrh`.`contratos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fornecedor_id` INT(11) NOT NULL,
  `duracao` VARCHAR(20),
  `produto_quantidade` VARCHAR(30),
  `custos` VARCHAR(20),
  PRIMARY KEY (`id`),
    FOREIGN KEY (`fornecedor_id`)
    REFERENCES `ultramixrh`.`fornecedores` (`id`));



CREATE TABLE IF NOT EXISTS `ultramixrh`.`folha_pagamento` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` INT(11) NOT NULL,
  `cargo_id` INT(11) NOT NULL,
  `salario_bruto` DOUBLE,
  `beneficios` INT(11),
  `bonus` INT(11),
  `valor_receber` INT(11),
  PRIMARY KEY (`id`),
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `ultramixrh`.`funcionarios` (`id`),
    FOREIGN KEY (`cargo_id`)
    REFERENCES `ultramixrh`.`cargos` (`id`));

CREATE TABLE IF NOT EXISTS `ultramixrh`.`folha_ponto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` INT(11) NOT NULL,
  `horario_chegada` TIME,
  `horario_saida` TIME,
  `horas` TIME GENERATED ALWAYS AS (timediff(`horario_saida`,`horario_chegada`)) STORED,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `ultramixrh`.`funcionarios` (`id`));


CREATE TABLE IF NOT EXISTS `ultramixrh`.`funcionario_cargo` (
  `funcionario_id` INT(11) NOT NULL,
  `cargo_id` INT(11) NOT NULL,
    FOREIGN KEY (`funcionario_id`)
    REFERENCES `ultramixrh`.`funcionarios` (`id`),
    FOREIGN KEY (`cargo_id`)
    REFERENCES `ultramixrh`.`cargos` (`id`));
