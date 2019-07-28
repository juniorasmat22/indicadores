-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema enfermeriaUNT
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema enfermeriaUNT
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `enfermeriaUNT` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci ;
USE `enfermeriaUNT` ;

-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Persona` (
  `idPersona` INT NOT NULL,
  `nombre` VARCHAR(50) NULL,
  `apellido` VARCHAR(50) NULL,
  `dni` VARCHAR(8) NULL,
  PRIMARY KEY (`idPersona`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `idPersona` INT NOT NULL,
  `usuario` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_Usuario_Persona_idx` (`idPersona` ASC) VISIBLE,
  CONSTRAINT `fk_Usuario_Persona`
    FOREIGN KEY (`idPersona`)
    REFERENCES `enfermeriaUNT`.`Persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Empresa` (
  `idEmpresa` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `ruc` VARCHAR(20) NULL,
  `rubro` VARCHAR(200) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idEmpresa`),
  INDEX `fk_Empresa_Usuario1_idx` (`idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_Empresa_Usuario1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `enfermeriaUNT`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`UnidadNegocio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`UnidadNegocio` (
  `idUnidadNegocio` INT NOT NULL,
  `idEmpresa` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `descripcion` MEDIUMTEXT NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idUnidadNegocio`),
  INDEX `fk_UnidadNegocio_Empresa1_idx` (`idEmpresa` ASC) VISIBLE,
  CONSTRAINT `fk_UnidadNegocio_Empresa1`
    FOREIGN KEY (`idEmpresa`)
    REFERENCES `enfermeriaUNT`.`Empresa` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`MapaProcesos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`MapaProcesos` (
  `idMapaProcesos` INT NOT NULL,
  `idEmpresa` INT NOT NULL,
  `idUnidadNegocio` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `descripcion` VARCHAR(200) NULL,
  `fecha` DATETIME NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idMapaProcesos`),
  INDEX `fk_MapaProcesos_Empresa1_idx` (`idEmpresa` ASC) VISIBLE,
  INDEX `fk_MapaProcesos_UnidadNegocio1_idx` (`idUnidadNegocio` ASC) VISIBLE,
  CONSTRAINT `fk_MapaProcesos_Empresa1`
    FOREIGN KEY (`idEmpresa`)
    REFERENCES `enfermeriaUNT`.`Empresa` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MapaProcesos_UnidadNegocio1`
    FOREIGN KEY (`idUnidadNegocio`)
    REFERENCES `enfermeriaUNT`.`UnidadNegocio` (`idUnidadNegocio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Proceso` (
  `idProceso` INT NOT NULL,
  `idMapaProcesos` INT NOT NULL,
  `tipo` VARCHAR(40) NULL,
  `nombre` VARCHAR(50) NULL,
  `descripcion` TEXT NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idProceso`),
  INDEX `fk_Proceso_MapaProcesos1_idx` (`idMapaProcesos` ASC) VISIBLE,
  CONSTRAINT `fk_Proceso_MapaProcesos1`
    FOREIGN KEY (`idMapaProcesos`)
    REFERENCES `enfermeriaUNT`.`MapaProcesos` (`idMapaProcesos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`SubProceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`SubProceso` (
  `idSubProceso` INT NOT NULL,
  `idProceso` INT NOT NULL,
  `nombre` VARCHAR(50) NULL,
  `descripcion` TEXT NULL,
  `estado` BIT(1) NULL,
  `idSubProceso` INT NULL,
  PRIMARY KEY (`idSubProceso`),
  INDEX `fk_SubProceso_Proceso1_idx` (`idProceso` ASC) VISIBLE,
  INDEX `fk_SubProceso_SubProceso1_idx` (`idSubProceso` ASC) VISIBLE,
  CONSTRAINT `fk_SubProceso_Proceso1`
    FOREIGN KEY (`idProceso`)
    REFERENCES `enfermeriaUNT`.`Proceso` (`idProceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SubProceso_SubProceso1`
    FOREIGN KEY (`idSubProceso`)
    REFERENCES `enfermeriaUNT`.`SubProceso` (`idSubProceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Indicador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Indicador` (
  `idIndicador` INT NOT NULL,
  `idSubProceso` INT NOT NULL,
  `descripcion` VARCHAR(100) NULL,
  `meta` VARCHAR(200) NULL,
  `iniciativas` VARCHAR(300) NULL,
  `responsable` VARCHAR(45) NULL,
  `lineaBase` VARCHAR(50) NULL,
  `frecuencia` VARCHAR(100) NULL,
  `estado` BIT(1) NULL,
  `tipo` VARCHAR(3) NULL,
  `unidad` VARCHAR(45) NULL,
  `fv` VARCHAR(300) NULL,
  `rojo` INT(3) NULL,
  `amarillo` INT(3) NULL,
  `verde` INT(3) NULL,
  PRIMARY KEY (`idIndicador`),
  INDEX `fk_Indicador_SubProceso1_idx` (`idSubProceso` ASC) VISIBLE,
  CONSTRAINT `fk_Indicador_SubProceso1`
    FOREIGN KEY (`idSubProceso`)
    REFERENCES `enfermeriaUNT`.`SubProceso` (`idSubProceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`formula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`formula` (
  `idformula` INT NOT NULL,
  `idIndicador` INT NOT NULL,
  `formula` VARCHAR(200) NULL,
  `tipo` INT(11) NULL,
  `param1` INT(11) NULL,
  `param2` INT(11) NULL,
  `param3` INT(11) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idformula`),
  INDEX `fk_formula_Indicador1_idx` (`idIndicador` ASC) VISIBLE,
  CONSTRAINT `fk_formula_Indicador1`
    FOREIGN KEY (`idIndicador`)
    REFERENCES `enfermeriaUNT`.`Indicador` (`idIndicador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`fuente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`fuente` (
  `idfuente` INT NOT NULL,
  `idIndicador` INT NOT NULL,
  `periodo` VARCHAR(45) NULL,
  `param1` FLOAT NULL,
  `param2` FLOAT NULL,
  `param3` FLOAT NULL,
  `resultado` FLOAT NULL,
  `inicio` DATE NULL,
  `fin` DATE NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`idfuente`),
  INDEX `fk_fuente_Indicador1_idx` (`idIndicador` ASC) VISIBLE,
  CONSTRAINT `fk_fuente_Indicador1`
    FOREIGN KEY (`idIndicador`)
    REFERENCES `enfermeriaUNT`.`Indicador` (`idIndicador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
