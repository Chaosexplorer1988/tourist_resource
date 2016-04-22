<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id_post
 * @property string $title
 * @property string $text
 * @property integer $author
 * @property integer $likes
 * @property integer $counts
 * @property string $date_post
 * @property string $time_post
 *
 * @property Comments[] $comments
 * @property TableUser $author0
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
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
            [['text'], 'string'],
            [['author', 'likes', 'counts'], 'integer'],
            [['file'], 'file'],
            [['date_post','counts','likes','author', 'time_post'], 'safe'],
            [['title'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'title' => 'Заголовок',
            'text' => 'Полный текст',
            'author' => 'Author',
            'likes' => 'Likes',
            'counts' => 'Counts',
            'file' => 'Добавить фото',
            'date_post' => 'Date Post',
            'time_post' => 'Time Post',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['id_post' => 'id_post']);
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
    public function getAuthor0()
    {
        return $this->hasOne(TableUser::className(), ['id' => 'author']);
    }
}
