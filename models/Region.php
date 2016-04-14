<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Region".
 *
 * @property integer $ID
 * @property integer $Country
 * @property integer $District
 * @property string $Name
 *
 * @property City[] $cities
 * @property Country $country
 * @property District $district
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Country', 'Name'], 'required'],
            [['Country', 'District'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['Country', 'Name'], 'unique', 'targetAttribute' => ['Country', 'Name'], 'message' => 'The combination of Country and Name has already been taken.']
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
            'District' => 'District',
            'Name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['Region' => 'ID']);
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
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['ID' => 'District']);
    }
}
