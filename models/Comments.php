<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id_comment
 * @property integer $id_post
 * @property string $text_comment
 * @property integer $creator
 * @property string $date_comment
 * @property string $time_comment
 *
 * @property TableUser $creator0
 * @property Posts $idPost
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_post', 'text_comment', 'creator', 'date_comment', 'time_comment'], 'required'],
            [['id_post', 'creator'], 'integer'],
            [['text_comment'], 'string'],
            [['date_comment', 'time_comment'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_comment' => 'Id Comment',
            'id_post' => 'Id Post',
            'text_comment' => 'Text Comment',
            'creator' => 'Creator',
            'date_comment' => 'Date Comment',
            'time_comment' => 'Time Comment',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator0()
    {
        return $this->hasOne(TableUser::className(), ['id' => 'creator']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPost()
    {
        return $this->hasOne(Posts::className(), ['id_post' => 'id_post']);
    }
}
