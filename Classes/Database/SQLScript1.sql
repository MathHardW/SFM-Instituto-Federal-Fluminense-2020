
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE DATABASE dbmad3; 

-- -----------------------------------------------------
-- Table `mydb`.`Cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`Cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `estado` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`Nivel` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Modalidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`Modalidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `Nivel_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`Nivel_id`)
    REFERENCES `dbmad3`.`Nivel` (`id`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`Curso` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `Modalidade_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`Modalidade_id`)
    REFERENCES `dbmad3`.`Modalidade` (`id`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Acompanhamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`Acompanhamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NULL,
  `servidor` VARCHAR(50) NULL,
  `AlunosIniciais` INT NULL,
  `AlunosFinais` INT NULL,
  `dataInicio` DATE NULL,
  `dataFim` DATE NULL,
  `periodoIngresso` VARCHAR(10) NULL,
  `Curso_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`Curso_id`)
    REFERENCES `dbmad3`.`Curso` (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Ficha`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `dbmad3`.`Ficha` (
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
    FOREIGN KEY (`Acompanhamento_id`)
    REFERENCES `dbmad3`.`Acompanhamento` (`id`),
    FOREIGN KEY (`Cidade_id`)
    REFERENCES `dbmad3`.`Cidade` (`id`)
)ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`TipoAtividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmad3`.`TipoAtividade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Atividade`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `dbmad3`.`Atividade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NULL,
  `servidor` VARCHAR(50) NULL,
  `descricao` VARCHAR(200) NULL,
  `publicoAlvo` VARCHAR(50) NULL,
  `resultadosEsperados` VARCHAR(200) NULL,
  `resultadosObtidos` VARCHAR(200) NULL,
  `dataInicio` DATE NULL,
  `dataFim` DATE NULL,
  `Acompanhamento_id` INT NOT NULL,
  `TipoAtividade_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`Acompanhamento_id`)
    REFERENCES `dbmad3`.`Acompanhamento` (`id`),
    FOREIGN KEY (`TipoAtividade_id`)
    REFERENCES `dbmad3`.`TipoAtividade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
