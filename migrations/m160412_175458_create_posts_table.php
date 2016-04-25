<?php

use yii\db\Migration;

class m160412_175458_create_posts_table extends Migration
{
    public function safeUp()
    {
        $this->execute("
CREATE TABLE IF NOT EXISTS `turizm`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45)  NOT NULL,
  `country` VARCHAR(45)  NOT NULL,
  `city` VARCHAR(45)  NOT NULL,
  `text` TEXT NOT NULL,
  `image` TEXT NOT NULL,
  `author` INT NOT NULL,
  `likes` INT NOT NULL,
  `counts` INT NOT NULL,
  `date_post` DATE NOT NULL,
  `time_post` TIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `author_idx` (`author` ASC),
  CONSTRAINT `author`
    FOREIGN KEY (`author`)
    REFERENCES `turizm`.`table_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB CHARACTER SET UTF8;
         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `posts`;
         ");
    }
}
