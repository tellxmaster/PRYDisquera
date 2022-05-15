<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property int $id_alb
 * @property string $nombre_alb
 * @property string $anio_lanz
 * @property int $num_canc_alb
 * @property int $id_artista
 * @property int $id_banda
 *
 * @property Artista $artista
 * @property Banda $banda
 * @property Cancion[] $cancions
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_alb', 'anio_lanz', 'num_canc_alb', 'id_artista', 'id_banda'], 'required'],
            [['anio_lanz'], 'safe'],
            [['num_canc_alb', 'id_artista', 'id_banda'], 'integer'],
            [['nombre_alb'], 'string', 'max' => 50],
            [['id_artista'], 'exist', 'skipOnError' => true, 'targetClass' => Artista::className(), 'targetAttribute' => ['id_artista' => 'id_art']],
            [['id_banda'], 'exist', 'skipOnError' => true, 'targetClass' => Banda::className(), 'targetAttribute' => ['id_banda' => 'id_band']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alb' => 'Id Alb',
            'nombre_alb' => 'Nombre Alb',
            'anio_lanz' => 'Anio Lanz',
            'num_canc_alb' => 'Num Canc Alb',
            'id_artista' => 'Id Artista',
            'id_banda' => 'Id Banda',
        ];
    }

    /**
     * Gets query for [[Artista]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArtista()
    {
        return $this->hasOne(Artista::className(), ['id_art' => 'id_artista']);
    }

    /**
     * Gets query for [[Banda]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanda()
    {
        return $this->hasOne(Banda::className(), ['id_band' => 'id_banda']);
    }

    /**
     * Gets query for [[Cancions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCancions()
    {
        return $this->hasMany(Cancion::className(), ['id_album' => 'id_alb']);
    }
}
