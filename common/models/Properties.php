<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
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
 * @property int $zone
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
            [['type_id', 'contract_id', 'title', 'summary', 'featured', 'rooms', 'toilets', 'garage', 'zone', 'visits', 'taken', 'status', 'createdAt', 'updatedAt'], 'integer'],
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
            'type_id' => 'Tipo',
            'contract_id' => 'Tipo de contrato',
            'title' => 'Título',
            'summary' => 'Resumen',
            'description' => 'Descripción',
            'price' => 'Precio',
            'featured' => 'Destacado',
            'area' => 'Tamaño',
            'rooms' => 'Habitaciones',
            'toilets' => 'Baños',
            'garage' => 'Estacionamiento',
            'address' => 'Dirección',
            'zone' => 'Zona',
            'long' => 'Longitud',
            'lat' => 'Latitud',
            'visits' => 'Visitas',
            'taken' => 'Vendida/Alquilada',
            'status' => 'Estado',
            'createdAt' => 'Creado En',
            'updatedAt' => 'Actualizado En',
            'images' => 'Imágenes',
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
    public function getContractList()
    {
        $contracts = Contracts::find()->select(['id', 'name'])->asArray()->all();
        $contracts = ArrayHelper::map($contracts, 'id', 'name');

        return $contracts;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Types::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeList()
    {
        $types = Types::find()->select(['id', 'name'])->asArray()->all();
        $types = ArrayHelper::map($types, 'id', 'name');

        return $types;
    }

    /**
    * @return array
    */
    public function getZoneList()
    {
      $zones = [
        'Todas las zonas',
        'Alhué',
        'Buin',
        'Calera de Tango',
        'Cerrillos',
        'Cerro Navia',
        'Colina',
        'Conchalí',
        'Curacaví',
        'El Bosque',
        'El Monte',
        'Estación Central',
        'Huechuraba',
        'Independencia',
        'Isla de Maipo',
        'La Cisterna',
        'La Florida',
        'La Granja',
        'La Pintana',
        'La Reina',
        'Lampa',
        'Las Condes',
        'Lo Barnechea',
        'Lo Espejo',
        'Lo Prado',
        'Macul',
        'Maipú',
        'María Pinto',
        'Melipilla',
        'Ñuñoa',
        'Padre Hurtado',
        'Paine',
        'Pedro Aguirre Cerda',
        'Peñaflor',
        'Peñalolén',
        'Pirque',
        'Providencia',
        'Pudahuel',
        'Puente Alto',
        'Quilicura',
        'Quinta Normal',
        'Recoleta',
        'Renca',
        'San Bernardo',
        'San Joaquín',
        'San José de Maipo',
        'San Miguel',
        'San Pedro',
        'San Ramón',
        'Santiago',
        'Talagante',
        'Til Til',
        'Vitacura',
      ];

      return $zones;
    }

}
