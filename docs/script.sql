-- MySQL Script generated by MySQL Workbench
-- Thu Nov  8 18:55:48 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db` DEFAULT CHARACTER SET utf8 ;
USE `db` ;

-- -----------------------------------------------------
-- Table `db`.`usuarios_master`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`usuarios_master` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`bebe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`bebe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `foto` VARCHAR(255) NULL,
  `usuarios_master_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_bebe_usuarios_master1_idx` (`usuarios_master_id` ASC) VISIBLE,
  CONSTRAINT `fk_bebe_usuarios_master1`
    FOREIGN KEY (`usuarios_master_id`)
    REFERENCES `db`.`usuarios_master` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`consultas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`consultas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `medico` VARCHAR(45) NOT NULL,
  `observacao` TEXT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_consultas_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_consultas_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`pesoAltura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`pesoAltura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `peso` VARCHAR(7) NOT NULL,
  `altura` VARCHAR(7) NOT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pesoAltura_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_pesoAltura_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`banhos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`banhos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_banhos_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_banhos_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`alimentacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`alimentacoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `data` DATE NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `descricao` TEXT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_alimentacoes_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_alimentacoes_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`fraldas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`fraldas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_fraldas_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_fraldas_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`sonos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`sonos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `horario_inicio` VARCHAR(45) NOT NULL,
  `horario_fim` VARCHAR(45) NOT NULL,
  `observacao` TEXT NULL,
  `bebe_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sonos_bebe1_idx` (`bebe_id` ASC) VISIBLE,
  CONSTRAINT `fk_sonos_bebe1`
    FOREIGN KEY (`bebe_id`)
    REFERENCES `db`.`bebe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db`.`usuarios_secundarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db`.`usuarios_secundarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `usuarios_master_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_secundarios_usuarios_master_idx` (`usuarios_master_id` ASC) VISIBLE,
  CONSTRAINT `fk_usuarios_secundarios_usuarios_master`
    FOREIGN KEY (`usuarios_master_id`)
    REFERENCES `db`.`usuarios_master` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
