SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


CREATE SCHEMA IF NOT EXISTS `controlegaveta` DEFAULT CHARACTER SET latin1 ;
USE `controlegaveta` ;

-- -----------------------------------------------------
-- Table `controlegaveta`.`gaveta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `controlegaveta`.`gaveta` (
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
CREATE  TABLE IF NOT EXISTS `controlegaveta`.`usuario` (
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



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
