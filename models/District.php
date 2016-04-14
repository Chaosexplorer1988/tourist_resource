<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "District".
 *
 * @property integer $ID
 * @property integer $Country
 * @property string $Name
 *
 * @property City[] $cities
 * @property Country $country
 * @property Region[] $regions
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'District';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Country'], 'integer'],
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Country' => 'Country',
            'Name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['District' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['ID' => 'Country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['District' => 'ID']);
    }
}
