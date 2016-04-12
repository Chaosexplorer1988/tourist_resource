<?php

use yii\db\Migration;

class m160412_180026_create_photos_table extends Migration
{
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `photos` (
  `id_photo` INT NOT NULL AUTO_INCREMENT,
  `url_photo` VARCHAR(255) NOT NULL,
  `id_users` INT NOT NULL,
  PRIMARY KEY (`id_photo`),
  UNIQUE INDEX `url_photo_UNIQUE` (`url_photo` ASC),
  INDEX `id_users_idx` (`id_users` ASC),
  CONSTRAINT `id_users`
    FOREIGN KEY (`id_users`)
    REFERENCES `users` (`id_users`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `photos`;
         ");
    }
}
