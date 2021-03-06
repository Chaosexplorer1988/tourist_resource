-- MySQL Script generated by MySQL Workbench
-- Tue 12 Apr 2016 10:11:09 AM PDT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `id_users` INT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `surname` VARCHAR(45) NULL,
  `login` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `salt` VARCHAR(255) NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`posts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`posts` (
  `id_post` INT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `text` TEXT NULL,
  `author` VARCHAR(45) NULL,
  `likes` INT NULL,
  `counts` INT NULL,
  `date_post` DATE NULL,
  `time_post` TIME NULL,
  PRIMARY KEY (`id_post`),
  INDEX `author_idx` (`author` ASC),
  CONSTRAINT `author`
    FOREIGN KEY (`author`)
    REFERENCES `mydb`.`users` (`login`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comments` (
  `id_comment` INT NOT NULL AUTO_INCREMENT,
  `id_post` INT NULL,
  `text_comment` TEXT NULL,
  `author` VARCHAR(45) NULL,
  `date_comment` DATE NULL,
  `time_comment` TIME NULL,
  PRIMARY KEY (`id_comment`),
  INDEX `author_idx` (`author` ASC),
  INDEX `id_comment_idx` (`id_post` ASC),
  CONSTRAINT `author`
    FOREIGN KEY (`author`)
    REFERENCES `mydb`.`users` (`login`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_comment`
    FOREIGN KEY (`id_post`)
    REFERENCES `mydb`.`posts` (`id_post`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`photos` (
  `id_photo` INT NOT NULL AUTO_INCREMENT,
  `url_photo` VARCHAR(255) NULL,
  `id_users` INT NULL,
  PRIMARY KEY (`id_photo`),
  UNIQUE INDEX `url_photo_UNIQUE` (`url_photo` ASC),
  INDEX `id_users_idx` (`id_users` ASC),
  CONSTRAINT `id_users`
    FOREIGN KEY (`id_users`)
    REFERENCES `mydb`.`users` (`id_users`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
