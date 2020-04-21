<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aerosol".
 *
 * @property int $idaerosol
 * @property string $nombreaerosol
 * @property string $descripcionaerosol
 * @property resource $imagen
 * @property int $cantidadaerosol
 */
class Aerosol extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aerosol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreaerosol', 'descripcionaerosol', 'imagen', 'cantidadaerosol'], 'required'],
            [['imagen'], 'string'],
            [['cantidadaerosol'], 'integer'],
            [['nombreaerosol'], 'string', 'max' => 45],
            [['descripcionaerosol'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombreaerosol' => 'Nombre',
            'descripcionaerosol' => 'Descripción',
            'imagen' => 'Imagen',
            'cantidadaerosol' => 'Cantidad disponible',
        ];
    }
}
