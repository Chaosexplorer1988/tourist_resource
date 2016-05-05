<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use rico\yii2images\behaviors\ImageBehave;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $author
 * @property integer $likes
 * @property integer $counts
 * @property string $date_post
 * @property string $time_post
 * @property string $country
 * @property string $city
 * @property Comments[] $comments
 * @property TableUser $author0
 */
class Posts extends \yii\db\ActiveRecord
{
    //public $image;
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'date_post', 'time_post'], 'required'],
            [['text','image','country','city'], 'string'],
            [['author', 'likes', 'counts'], 'integer'],
            //[['image'], 'file'],
            [['date_post','country','city','counts','likes','author', 'time_post'], 'safe'],
            [['title','city','country'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Post',
            'title' => 'Заголовок',
            'country' => 'Страна',
            'city' => 'Город',
            'text' => 'Полный текст',
            'author' => 'Автор',
            'likes' => 'Лайки',
            'counts' => 'Посещения',
            'image' => 'Добавить фото',
            'date_post' => 'Дата создания статьи',
            'time_post' => 'Время создания статьи',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id' => 'id']);
    }
    //Функция для обрезания большого текста
    public function cut($string, $length)
    {
        $string = mb_substr($string, 0, $length,'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
        $position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
        $string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
        return $string;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}
