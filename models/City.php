<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "City".
 *
 * @property integer $ID
 * @property integer $Region
 * @property integer $District
 * @property integer $Country
 * @property double $Lon
 * @property double $Lat
 * @property string $Prefix
 * @property string $Name
 * @property integer $Type
 * @property string $TZ
 * @property string $TimeZone
 * @property string $TimeZone2
 *
 * @property Region $region
 * @property District $district
 * @property Country $country
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'City';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Region', 'District', 'Country', 'Type'], 'integer'],
            [['Lon', 'Lat'], 'number'],
            [['Name'], 'required'],
            [['Prefix'], 'string', 'max' => 50],
            [['Name', 'TZ'], 'string', 'max' => 128],
            [['TimeZone', 'TimeZone2'], 'string', 'max' => 100],
            [['Country', 'Region', 'Name'], 'unique', 'targetAttribute' => ['Country', 'Region', 'Name'], 'message' => 'The combination of Region, Country and Name has already been taken.'],
            [['Prefix'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Region' => 'Region',
            'District' => 'District',
            'Country' => 'Country',
            'Lon' => 'Lon',
            'Lat' => 'Lat',
            'Prefix' => 'Prefix',
            'Name' => 'Name',
            'Type' => 'Type',
            'TZ' => 'Tz',
            'TimeZone' => 'Time Zone',
            'TimeZone2' => 'Time Zone2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['ID' => 'Region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['ID' => 'District']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['ID' => 'Country']);
    }
}
