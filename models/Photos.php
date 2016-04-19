<?php

namespace app\models;

use Yii;
use app\models\Posts;

/**
 * This is the model class for table "photos".
 *
 * @property integer $id_photo
 * @property string $url_photo
 * @property integer $id_users
 *
 * @property TableUser $idUsers
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url_photo', 'id_users'], 'required'],
            [['id_users'], 'integer'],
            [['url_photo'], 'string', 'max' => 255],
            [['url_photo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_photo' => 'Id Photo',
            'url_photo' => 'Url Photo',
            'id_users' => 'Id Users',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers()
    {
        return $this->hasOne(TableUser::className(), ['id' => 'id_users']);
    }
}
