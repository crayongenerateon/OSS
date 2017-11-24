-- -----------------------------------------------------
-- Table `user_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_role` (
  `role_id` INT(11) NOT NULL AUTO_INCREMENT,
  `role_name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(100) NULL DEFAULT NULL,
  `user_password` VARCHAR(255) NULL DEFAULT NULL,
  `user_full_name` VARCHAR(100) NULL DEFAULT NULL,
  `user_email` VARCHAR(100) NULL DEFAULT NULL,
  `user_phone` VARCHAR(45) NULL DEFAULT NULL,
  `user_role_role_id` INT(11) NULL DEFAULT NULL,
  `user_address` TEXT NULL DEFAULT NULL,
  `user_created_date` TIMESTAMP NULL DEFAULT NULL,
  `user_last_update` TIMESTAMP NULL DEFAULT NULL,
  `user_deleted` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `fk_user_user_role_idx` (`user_role_role_id` ASC),
  CONSTRAINT `fk_user_user_role`
    FOREIGN KEY (`user_role_role_id`)
    REFERENCES `user_role` (`role_id`)
    ON DELETE SET NULL
    ON UPDATE SET NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `activity_log`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `activity_log` (
  `log_id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NULL DEFAULT NULL,
  `log_action` VARCHAR(255) NULL DEFAULT NULL,
  `log_module` VARCHAR(100) NULL DEFAULT NULL,
  `log_info` TEXT NULL DEFAULT NULL,
  `log_date` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;