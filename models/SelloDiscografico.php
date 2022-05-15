<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sello_discografico".
 *
 * @property int $id_sello
 * @property string $nombre_sello
 * @property string $direccion_sello
 *
 * @property Artista[] $artistas
 * @property Banda[] $bandas
 */
class SelloDiscografico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sello_discografico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_sello', 'direccion_sello'], 'required'],
            [['nombre_sello', 'direccion_sello'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sello' => 'Id Sello',
            'nombre_sello' => 'Nombre Sello',
            'direccion_sello' => 'Direccion Sello',
        ];
    }

    /**
     * Gets query for [[Artistas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArtistas()
    {
        return $this->hasMany(Artista::className(), ['id_sello' => 'id_sello']);
    }

    /**
     * Gets query for [[Bandas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBandas()
    {
        return $this->hasMany(Banda::className(), ['id_sello' => 'id_sello']);
    }
}
