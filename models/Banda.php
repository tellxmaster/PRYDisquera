<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banda".
 *
 * @property int $id_band
 * @property string $nombre_band
 * @property string $miembros
 * @property string $fecha_crea_band
 * @property int $id_sello
 *
 * @property Album[] $albums
 * @property SelloDiscografico $sello
 */
class Banda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_band', 'miembros', 'fecha_crea_band', 'id_sello'], 'required'],
            [['fecha_crea_band'], 'safe'],
            [['id_sello'], 'integer'],
            [['nombre_band', 'miembros'], 'string', 'max' => 50],
            [['id_sello'], 'exist', 'skipOnError' => true, 'targetClass' => SelloDiscografico::className(), 'targetAttribute' => ['id_sello' => 'id_sello']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_band' => 'Id Band',
            'nombre_band' => 'Nombre Band',
            'miembros' => 'Miembros',
            'fecha_crea_band' => 'Fecha Crea Band',
            'id_sello' => 'Id Sello',
        ];
    }

    /**
     * Gets query for [[Albums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlbums()
    {
        return $this->hasMany(Album::className(), ['id_banda' => 'id_band']);
    }

    /**
     * Gets query for [[Sello]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSello()
    {
        return $this->hasOne(SelloDiscografico::className(), ['id_sello' => 'id_sello']);
    }
}
