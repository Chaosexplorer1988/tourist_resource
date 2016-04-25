<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $filePath
 * @property integer $itemId
 * @property integer $isMain
 * @property string $modelName
 * @property string $urlAlias
 * @property string $name
 */
class ImageModel extends \yii\db\ActiveRecord
{
    //public $image;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filePath', 'itemId', 'modelName'], 'required'],
            [['itemId', 'isMain'], 'integer'],
            [['filePath', 'urlAlias'], 'string', 'max' => 400],
            [['modelName'], 'string', 'max' => 150],
            //[['image'], 'file'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'filePath' => Yii::t('app', 'File Path'),
            'itemId' => Yii::t('app', 'Item ID'),
            'isMain' => Yii::t('app', 'Is Main'),
            //'image' => 'Добавить фото',
            'modelName' => Yii::t('app', 'Model Name'),
            'urlAlias' => Yii::t('app', 'Url Alias'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\query\ImageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ImageQuery(get_called_class());
    }
}
