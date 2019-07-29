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
  `id_persona` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `apellido` VARCHAR(50) NULL,
  `dni` VARCHAR(8) NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `id_persona` INT NOT NULL,
  `usuario` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_Usuario_Persona_idx` (`id_persona` ASC) ,
  CONSTRAINT `fk_Usuario_Persona`
    FOREIGN KEY (`id_persona`)
    REFERENCES `enfermeriaUNT`.`Persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Empresa` (
  `id_empresa` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `ruc` VARCHAR(20) NULL,
  `rubro` VARCHAR(200) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_empresa`),
  INDEX `fk_Empresa_Usuario1_idx` (`id_usuario` ASC) ,
  CONSTRAINT `fk_Empresa_Usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `enfermeriaUNT`.`Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`UnidadNegocio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`UnidadNegocio` (
  `id_unidad_negocio` INT NOT NULL AUTO_INCREMENT,
  `id_empresa` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `descripcion` MEDIUMTEXT NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_unidad_negocio`),
  INDEX `fk_UnidadNegocio_Empresa1_idx` (`id_empresa` ASC) ,
  CONSTRAINT `fk_UnidadNegocio_Empresa1`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `enfermeriaUNT`.`Empresa` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`MapaProcesos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`MapaProcesos` (
  `id_mapa_procesos` INT NOT NULL AUTO_INCREMENT,
  `id_empresa` INT NOT NULL,
  `id_unidad_negocio` INT NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `descripcion` VARCHAR(200) NULL,
  `fecha` DATETIME NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_mapa_procesos`),
  INDEX `fk_MapaProcesos_Empresa1_idx` (`id_empresa` ASC) ,
  INDEX `fk_MapaProcesos_UnidadNegocio1_idx` (`id_unidad_negocio` ASC) ,
  CONSTRAINT `fk_MapaProcesos_Empresa1`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `enfermeriaUNT`.`Empresa` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MapaProcesos_UnidadNegocio1`
    FOREIGN KEY (`id_unidad_negocio`)
    REFERENCES `enfermeriaUNT`.`UnidadNegocio` (`id_unidad_negocio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Proceso` (
  `id_proceso` INT NOT NULL AUTO_INCREMENT,
  `id_mapa_procesos` INT NOT NULL,
  `tipo` VARCHAR(40) NULL,
  `nombre` VARCHAR(50) NULL,
  `descripcion` TEXT NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_proceso`),
  INDEX `fk_Proceso_MapaProcesos1_idx` (`id_mapa_procesos` ASC) ,
  CONSTRAINT `fk_Proceso_MapaProcesos1`
    FOREIGN KEY (`id_mapa_procesos`)
    REFERENCES `enfermeriaUNT`.`MapaProcesos` (`id_mapa_procesos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`SubProceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`SubProceso` (
  `id_sub_proceso` INT NOT NULL AUTO_INCREMENT,
  `idProceso` INT NOT NULL,
  `nombre` VARCHAR(50) NULL,
  `descripcion` TEXT NULL,
  `estado` BIT(1) NULL,
  `id_sub_nivel` INT NULL,
  PRIMARY KEY (`id_sub_proceso`),
  INDEX `fk_SubProceso_Proceso1_idx` (`idProceso` ASC) ,
  INDEX `fk_SubProceso_SubProceso1_idx` (`id_sub_nivel` ASC) ,
  CONSTRAINT `fk_SubProceso_Proceso1`
    FOREIGN KEY (`idProceso`)
    REFERENCES `enfermeriaUNT`.`Proceso` (`id_proceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SubProceso_SubProceso1`
    FOREIGN KEY (`id_sub_nivel`)
    REFERENCES `enfermeriaUNT`.`SubProceso` (`id_sub_proceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`Indicador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`Indicador` (
  `id_indicador` INT NOT NULL AUTO_INCREMENT,
  `id_sub_proceso` INT NOT NULL,
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
  PRIMARY KEY (`id_indicador`),
  INDEX `fk_Indicador_SubProceso1_idx` (`id_sub_proceso` ASC) ,
  CONSTRAINT `fk_Indicador_SubProceso1`
    FOREIGN KEY (`id_sub_proceso`)
    REFERENCES `enfermeriaUNT`.`SubProceso` (`id_sub_proceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`formula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`formula` (
  `id_formula` INT NOT NULL AUTO_INCREMENT,
  `id_indicador` INT NOT NULL,
  `formula` VARCHAR(200) NULL,
  `tipo` INT(11) NULL,
  `param1` INT(11) NULL,
  `param2` INT(11) NULL,
  `param3` INT(11) NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_formula`),
  INDEX `fk_formula_Indicador1_idx` (`id_indicador` ASC) ,
  CONSTRAINT `fk_formula_Indicador1`
    FOREIGN KEY (`id_indicador`)
    REFERENCES `enfermeriaUNT`.`Indicador` (`id_indicador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `enfermeriaUNT`.`fuente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `enfermeriaUNT`.`fuente` (
  `id_fuente` INT NOT NULL AUTO_INCREMENT,
  `id_indicador` INT NOT NULL,
  `periodo` VARCHAR(45) NULL,
  `param1` FLOAT NULL,
  `param2` FLOAT NULL,
  `param3` FLOAT NULL,
  `resultado` FLOAT NULL,
  `inicio` DATE NULL,
  `fin` DATE NULL,
  `estado` BIT(1) NULL,
  PRIMARY KEY (`id_fuente`),
  INDEX `fk_fuente_Indicador1_idx` (`id_indicador` ASC) ,
  CONSTRAINT `fk_fuente_Indicador1`
    FOREIGN KEY (`id_indicador`)
    REFERENCES `enfermeriaUNT`.`Indicador` (`id_indicador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
