<?php

use yii\db\Migration;

class m160412_194500_create_District_table extends Migration
{
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `District` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Country` int(5) NOT NULL DEFAULT '0' COMMENT 'Страна',
  `Name` varchar(255) NOT NULL COMMENT 'Наименование округа',
  PRIMARY KEY (`ID`),
  KEY `fkDistrictCountry` (`Country`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Округи' AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `District`
--

INSERT INTO `District` (`ID`, `Country`, `Name`) VALUES
(28, 1, 'Центральный федеральный округ'),
(29, 1, 'Северо-Западный федеральный округ'),
(30, 1, 'Южный федеральный округ'),
(31, 1, 'Северо-Кавказский федеральный округ'),
(32, 1, 'Приволжский федеральный округ'),
(33, 1, 'Уральский федеральный округ'),
(34, 1, 'Сибирский федеральный округ'),
(35, 1, 'Дальневосточный федеральный округ');

         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `District`;
         ");
    }
}
