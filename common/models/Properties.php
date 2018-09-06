<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "xproperties_properties".
 *
 * @property int $id
 * @property int $type_id
 * @property int $contract_id
 * @property int $title
 * @property int $summary
 * @property string $description
 * @property double $price
 * @property int $featured
 * @property double $area
 * @property int $rooms
 * @property int $toilets
 * @property int $garage
 * @property string $address
 * @property int $city
 * @property double $long
 * @property double $lat
 * @property int $visits
 * @property int $taken
 * @property int $status
 * @property int $createdAt
 * @property int $updatedAt
 *
 * @property Images[] $Images
 * @property Contracts $contract
 * @property Types $type
 */
class Properties extends \yii\db\ActiveRecord
{

    public $images;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xproperties_properties';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                // 'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id', 'contract_id', 'title'], 'required'],
            [['type_id', 'contract_id', 'title', 'summary', 'featured', 'rooms', 'toilets', 'garage', 'city', 'visits', 'taken', 'status', 'createdAt', 'updatedAt'], 'integer'],
            [['description'], 'string'],
            [['price', 'area', 'long', 'lat'], 'number'],
            [['address'], 'string', 'max' => 255],
            [['contract_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contracts::className(), 'targetAttribute' => ['contract_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Types::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_id' => 'Type ID',
            'contract_id' => 'Contract ID',
            'title' => 'Title',
            'summary' => 'Summary',
            'description' => 'Description',
            'price' => 'Price',
            'featured' => 'Featured',
            'area' => 'Area',
            'rooms' => 'Rooms',
            'toilets' => 'Toilets',
            'garage' => 'Garage',
            'address' => 'Address',
            'city' => 'City',
            'long' => 'Long',
            'lat' => 'Lat',
            'visits' => 'Visits',
            'taken' => 'Taken',
            'status' => 'Status',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['property_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContract()
    {
        return $this->hasOne(Contracts::className(), ['id' => 'contract_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Types::className(), ['id' => 'type_id']);
    }
}
