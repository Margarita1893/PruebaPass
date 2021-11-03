-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema empleados
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `empleados` ;

-- -----------------------------------------------------
-- Schema empleados
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `empleados` ;
USE `empleados` ;

-- -----------------------------------------------------
-- Table `empleados`.`Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empleados`.`Area` ;

CREATE TABLE IF NOT EXISTS `empleados`.`Area` (
  `idArea` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`idArea`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empleados`.`Empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empleados`.`Empleado` ;

CREATE TABLE IF NOT EXISTS `empleados`.`Empleado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `sexo` CHAR(1) NULL,
  `area_id` INT NOT NULL,
  `boletin` INT NULL,
  `descripcion` TEXT(500) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Empleado_Area1_idx` (`area_id` ASC) VISIBLE,
  CONSTRAINT `fk_Empleado_Area1`
    FOREIGN KEY (`area_id`)
    REFERENCES `empleados`.`Area` (`idArea`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empleados`.`Rol`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empleados`.`Rol` ;

CREATE TABLE IF NOT EXISTS `empleados`.`Rol` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empleados`.`Empleado_Rol`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empleados`.`Empleado_Rol` ;

CREATE TABLE IF NOT EXISTS `empleados`.`Empleado_Rol` (
  `Empleado_id` INT NOT NULL,
  `Rol_id` INT NOT NULL,
  PRIMARY KEY (`Empleado_id`, `Rol_id`),
  INDEX `fk_Empleado_has_Rol_Rol1_idx` (`Rol_id` ASC) VISIBLE,
  INDEX `fk_Empleado_has_Rol_Empleado_idx` (`Empleado_id` ASC) VISIBLE,
  CONSTRAINT `fk_Empleado_has_Rol_Empleado`
    FOREIGN KEY (`Empleado_id`)
    REFERENCES `empleados`.`Empleado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Empleado_has_Rol_Rol1`
    FOREIGN KEY (`Rol_id`)
    REFERENCES `empleados`.`Rol` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
