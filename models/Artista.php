<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artista".
 *
 * @property int $id_art
 * @property string $nombre_art
 * @property string $apodo_art
 * @property string $fecha_nac_art
 * @property int $id_sello
 *
 * @property Album[] $albums
 * @property SelloDiscografico $sello
 */
class Artista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_art', 'apodo_art', 'fecha_nac_art', 'id_sello'], 'required'],
            [['fecha_nac_art'], 'safe'],
            [['id_sello'], 'integer'],
            [['nombre_art', 'apodo_art'], 'string', 'max' => 50],
            [['id_sello'], 'exist', 'skipOnError' => true, 'targetClass' => SelloDiscografico::className(), 'targetAttribute' => ['id_sello' => 'id_sello']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_art' => 'Id Art',
            'nombre_art' => 'Nombre Art',
            'apodo_art' => 'Apodo Art',
            'fecha_nac_art' => 'Fecha Nac Art',
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
        return $this->hasMany(Album::className(), ['id_artista' => 'id_art']);
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
