<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "latita".
 *
 * @property int $idlatita
 * @property string $nombrelatita
 * @property string $descripcionlatita
 * @property int $cantidadlatita
 */
class Latita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'latita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombrelatita', 'descripcionlatita', 'cantidadlatita'], 'required'],
            [['cantidadlatita'], 'integer'],
            [['nombrelatita'], 'string', 'max' => 45],
            [['descripcionlatita'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombrelatita' => 'Nombre',
            'descripcionlatita' => 'Descripción',
            'cantidadlatita' => 'Cantidad disponible',
        ];
    }
}
