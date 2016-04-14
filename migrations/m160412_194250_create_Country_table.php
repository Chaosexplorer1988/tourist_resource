<?php

use yii\db\Migration;

class m160412_194250_create_Country_table extends Migration
{
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `Country` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL COMMENT 'Название страны',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CountryName` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

--
-- Дамп данных таблицы `Country`
--

INSERT INTO `Country` (`ID`, `Name`) VALUES
(2, 'Австралия'),
(3, 'Австрия'),
(4, 'Азербайджан'),
(5, 'Ангуилья'),
(6, 'Аргентина'),
(7, 'Армения'),
(105, 'Арулько'),
(8, 'Беларусь'),
(9, 'Белиз'),
(10, 'Бельгия'),
(11, 'Бермуды'),
(12, 'Болгария'),
(13, 'Бразилия'),
(14, 'Великобритания'),
(15, 'Венгрия'),
(16, 'Вьетнам'),
(17, 'Гаити'),
(18, 'Гваделупа'),
(19, 'Германия'),
(20, 'Голландия'),
(100, 'Гондурас'),
(75, 'Гонконг'),
(21, 'Греция'),
(22, 'Грузия'),
(23, 'Дания'),
(101, 'Доминиканская республика'),
(24, 'Египет'),
(25, 'Израиль'),
(26, 'Индия'),
(76, 'Индонезия'),
(77, 'Иордания'),
(103, 'Ирак'),
(27, 'Иран'),
(28, 'Ирландия'),
(29, 'Испания'),
(30, 'Италия'),
(31, 'Казахстан'),
(32, 'Камерун'),
(33, 'Канада'),
(82, 'Карибы'),
(34, 'Кипр'),
(35, 'Киргызстан'),
(36, 'Китай'),
(84, 'Корея'),
(37, 'Коста-Рика'),
(95, 'Куба'),
(38, 'Кувейт'),
(39, 'Латвия'),
(91, 'Ливан'),
(40, 'Ливия'),
(41, 'Литва'),
(42, 'Люксембург'),
(85, 'Македония'),
(78, 'Малайзия'),
(86, 'Мальта'),
(43, 'Мексика'),
(96, 'Мозамбик'),
(44, 'Молдова'),
(45, 'Монако'),
(102, 'Монголия'),
(93, 'Морокко'),
(72, 'Нидерланды'),
(46, 'Новая Зеландия'),
(47, 'Норвегия'),
(90, 'О.А.Э.'),
(98, 'Остров Мэн'),
(87, 'Пакистан'),
(88, 'Перу'),
(48, 'Польша'),
(49, 'Португалия'),
(50, 'Реюньон'),
(1, 'Россия'),
(74, 'Румыния'),
(51, 'Сальвадор'),
(79, 'Сингапур'),
(94, 'Сирия'),
(52, 'Словакия'),
(53, 'Словения'),
(54, 'Суринам'),
(55, 'США'),
(56, 'Таджикистан'),
(80, 'Тайвань'),
(89, 'Тайланд'),
(97, 'Тунис'),
(57, 'Туркменистан'),
(81, 'Туркмения'),
(58, 'Туркс и Кейкос'),
(59, 'Турция'),
(60, 'Уганда'),
(61, 'Узбекистан'),
(62, 'Украина'),
(63, 'Финляндия'),
(64, 'Франция'),
(73, 'Хорватия'),
(65, 'Чехия'),
(83, 'Чили'),
(66, 'Швейцария'),
(67, 'Швеция'),
(92, 'Эквадор'),
(68, 'Эстония'),
(104, 'ЮАР'),
(69, 'Югославия'),
(70, 'Южная Корея'),
(99, 'Ямайка'),
(71, 'Япония');
         ");
    }

    public function safeDown()
    {
        $this->execute("
             DROP TABLE IF EXISTS `Country`;
         ");
    }
}