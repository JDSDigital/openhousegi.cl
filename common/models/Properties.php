<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;
use yii\imagine\Image;
use common\models\Communes;
use common\models\Regions;

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
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Images[] $Images
 * @property Contracts $contract
 * @property Types $type
 */
class Properties extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 0;

    const CONTRACT_RENT = 1;
    const CONTRACT_SALE = 2;

    // public $region;

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
            [['type_id', 'contract_id', 'featured', 'rooms', 'toilets', 'garage', 'zone', 'visits', 'taken', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'summary', 'description'], 'string'],
            [['price', 'uf', 'area', 'long', 'lat'], 'number'],
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
            'uf' => 'U.F.',
            'featured' => 'Destacado',
            'area' => 'Superficie Habitable',
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
            'created_at' => 'Creado En',
            'updated_at' => 'Actualizado En',
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
        array_unshift($contracts, 'Todo tipo de contrato');

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
        array_unshift($types, 'Todo tipo de inmueble');

        return $types;
    }

    /**
    * @return array
    */
    public function getRegionsList()
    {
      $zones = Regions::find()
        ->select(['id', 'name'])
        ->all();

      $zones = ArrayHelper::map($zones, 'id', 'name');
      array_unshift($zones, 'Todas las zonas');

      return $zones;
    }

    /**
    * @return array
    */
    public function getZoneList()
    {
      $zones = Communes::find()
        ->select(['id', 'name'])
        ->all();

      $zones = ArrayHelper::map($zones, 'id', 'name');
      array_unshift($zones, 'Todas las zonas');

      return $zones;
    }

    public function getZone($id) {
        return $this->getZoneList()[$id];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommune()
    {
        return $this->hasOne(Communes::className(), ['id' => 'zone']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['id' => 'region_id'])->via('commune');
    }

    public function getRegionsSelect()
    {
        $response = '';
        $regions = Regions::find()->all();

        if (count($regions) > 0){
            foreach($regions as $region){
                $response .= "<option value='".$region->id."'>".$region->name."</option>";
            }
        } else {
            $response = "<option value='0'>-</option>";
        }

        return $response;
    }

    public function getCommunesSelect($id)
    {
        $response = '';

        if ($id == 0)
          $communes = Communes::find()->all();
        else
          $communes = Communes::find()->where(['region_id' => $id])->all();

        if (count($communes) > 0){
            foreach($communes as $commune){
                $response .= "<option value='".$commune->id."'>".$commune->name."</option>";
            }
        } else {
            $response = "<option value='0'>-</option>";
        }

        return $response;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelated()
    {
        return self::find()
          ->where(['status' => self::STATUS_ACTIVE])
          ->andWhere(['taken' => self::STATUS_DELETED])
          ->andWhere(['type_id' => $this->type_id])
          ->andWhere(['contract_id' => $this->contract_id])
          ->orderBy([
            // 'featured' => SORT_DESC,
            'created_at' => SORT_DESC,
          ])
          ->limit(4)
          ->all();
    }

    /**
     * Upload supplied images via UploadedFile
     * @return boolean
     */
    public function upload()
    {
        if ($this->validate()) {
            $url = Yii::getAlias('@frontend') . '/web/images/properties/';

            $uploadedImages = UploadedFile::getInstances($this,'images');

            if (count($uploadedImages) > 0) {

              foreach ($uploadedImages as $key => $uploadedImage) {

                $image = new Images;
                $name = $this->id . '-' . ($key + 1) . '-' . $this->updated_at . '.' . $uploadedImage->extension;

                $image->file = $name;
                $image->property_id = $this->id;

                $uploadedImage->saveAs($url . 'tmp-' . $name);

                Image::resize($url . 'tmp-' . $name, 1024, null)
                    ->save($url . $name, ['jpeg_quality' => 80]);

                Image::resize($url . 'tmp-' . $name, null, 270)
                    ->save($url . 'thumbs/' . $name, ['jpeg_quality' => 80]);

                unlink($url . 'tmp-' . $name);

                $image->save();

              }

            } else
              return true;

        } else
            return false;
    }

    public function getCover()
    {
        return $this->hasOne(Images::className(), ['property_id' => 'id'])->andOnCondition(['cover' => Images::STATUS_ACTIVE]);
    }

}
