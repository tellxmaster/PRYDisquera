<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancion".
 *
 * @property int $id_canc
 * @property string $nombre_canc
 * @property int $duracion_canc
 * @property string $anio_lanz_canc
 * @property string $escritor_canc
 * @property string $cantante_canc
 * @property string $genero_canc
 * @property int $id_album
 *
 * @property Album $album
 */
class Cancion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cancion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_canc', 'duracion_canc', 'anio_lanz_canc', 'escritor_canc', 'cantante_canc', 'genero_canc', 'id_album'], 'required'],
            [['duracion_canc', 'id_album'], 'integer'],
            [['anio_lanz_canc'], 'safe'],
            [['nombre_canc', 'escritor_canc', 'cantante_canc', 'genero_canc'], 'string', 'max' => 50],
            [['id_album'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['id_album' => 'id_alb']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_canc' => 'Id Canc',
            'nombre_canc' => 'Nombre Canc',
            'duracion_canc' => 'Duracion Canc',
            'anio_lanz_canc' => 'Anio Lanz Canc',
            'escritor_canc' => 'Escritor Canc',
            'cantante_canc' => 'Cantante Canc',
            'genero_canc' => 'Genero Canc',
            'id_album' => 'Id Album',
        ];
    }

    /**
     * Gets query for [[Album]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['id_alb' => 'id_album']);
    }
}
