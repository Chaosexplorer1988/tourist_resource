<?php

use yii\db\Migration;

class m160412_173720_create_users_table extends Migration
{
    public function safeUp()
    {
        $this->execute("
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `users`;
         ");
    }
}
