-- MySQL Script generated by MySQL Workbench
-- Tue Nov 19 16:35:58 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Nivel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Modalidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Modalidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `Nivel_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Modalidade_Nivel1_idx` (`Nivel_id` ASC) VISIBLE,
  CONSTRAINT `fk_Modalidade_Nivel1`
    FOREIGN KEY (`Nivel_id`)
    REFERENCES `mydb`.`Nivel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Curso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `Modalidade_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Curso_Modalidade1_idx` (`Modalidade_id` ASC) VISIBLE,
  CONSTRAINT `fk_Curso_Modalidade1`
    FOREIGN KEY (`Modalidade_id`)
    REFERENCES `mydb`.`Modalidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Acompanhamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Acompanhamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NULL,
  `servidor` VARCHAR(50) NULL,
  `AlunosIniciais` INT NULL,
  `AlunosFinais` INT NULL,
  `dataInicio` DATE NULL,
  `dataFim` DATE NULL,
  `periodoIngresso` DATE NULL,
  `Curso_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Acompanhamento_Curso1_idx` (`Curso_id` ASC) VISIBLE,
  CONSTRAINT `fk_Acompanhamento_Curso1`
    FOREIGN KEY (`Curso_id`)
    REFERENCES `mydb`.`Curso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `estado` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ficha` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(50) NULL,
  `update` TINYINT(2) NULL,
  `trabalha` TINYINT NULL,
  `dependentes` TINYINT NULL,
  `atendimentoEspecial` TINYINT NULL,
  `moraSozinho` TINYINT NULL,
  `sexo` VARCHAR(1) NULL,
  `data` DATE NULL,
  `Acompanhamento_id` INT NOT NULL,
  `Cidade_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC) VISIBLE,
  INDEX `fk_Ficha_Acompanhamento1_idx` (`Acompanhamento_id` ASC) VISIBLE,
  INDEX `fk_Ficha_Cidade1_idx` (`Cidade_id` ASC) VISIBLE,
  CONSTRAINT `fk_Ficha_Acompanhamento1`
    FOREIGN KEY (`Acompanhamento_id`)
    REFERENCES `mydb`.`Acompanhamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ficha_Cidade1`
    FOREIGN KEY (`Cidade_id`)
    REFERENCES `mydb`.`Cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;