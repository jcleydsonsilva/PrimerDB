CREATE SCHEMA IF NOT EXISTS `opens138_controles` DEFAULT CHARACTER SET latin1 ;
USE `opens138_controles` ;

-- -----------------------------------------------------
-- Table `controlegaveta`.`gaveta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `opens138_controles`.`gaveta` (
  `idgav` INT(11) NOT NULL AUTO_INCREMENT ,
  `iduser` INT(11) NOT NULL ,
  `numero_gaveta` VARCHAR(45) NULL DEFAULT NULL ,
  `nome_produto` VARCHAR(45) NULL DEFAULT NULL ,
  `descricao` VARCHAR(45) NULL DEFAULT NULL ,
  `observacao` VARCHAR(45) NULL DEFAULT NULL ,
  `responsavel` VARCHAR(25000) NULL DEFAULT NULL ,
  PRIMARY KEY (`idgav`) ,
  INDEX `fk_gaveta_usuario` (`iduser` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `controlegaveta`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `opens138_controles`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL DEFAULT NULL ,
  `telefone` VARCHAR(25) NULL DEFAULT NULL ,
  `orientador` VARCHAR(45) NULL DEFAULT NULL ,
  `instituicao` VARCHAR(45) NULL DEFAULT NULL ,
  `departamento` VARCHAR(45) NULL DEFAULT NULL ,
  `laboratorio` VARCHAR(45) NULL DEFAULT NULL ,
  `username` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL ,
  `nivel` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 57
DEFAULT CHARACTER SET = latin1;
