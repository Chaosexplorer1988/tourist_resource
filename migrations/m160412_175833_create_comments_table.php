<?php

use yii\db\Migration;

class m160412_175833_create_comments_table extends Migration
{
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` INT NOT NULL AUTO_INCREMENT,
  `id_post` INT NOT NULL,
  `text_comment` TEXT NOT NULL,
  `creator` INT NOT NULL,
  `date_comment` DATE NOT NULL,
  `time_comment` TIME NOT NULL,
  PRIMARY KEY (`id_comment`),
  INDEX `creator_idx` (`creator` ASC),
  INDEX `id_comment_idx` (`id_post` ASC),
  CONSTRAINT `creator`
    FOREIGN KEY (`creator`)
    REFERENCES `table_user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_comment`
    FOREIGN KEY (`id_post`)
    REFERENCES `posts` (`id_post`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB CHARACTER SET UTF8;
         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `comments`;
         ");
    }
}
