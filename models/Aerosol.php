<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aerosol".
 *
 * @property int $idaerosol
 * @property string $nombreaerosol
 * @property string $descripcionaerosol
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
            [['idaerosol', 'nombreaerosol', 'descripcionaerosol', 'cantidadaerosol'], 'required'],
            [['idaerosol', 'cantidadaerosol'], 'integer'],
            [['nombreaerosol'], 'string', 'max' => 45],
            [['descripcionaerosol'], 'string', 'max' => 255],
            [['idaerosol'], 'unique'],
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
            'cantidadaerosol' => 'Cantidad disponible',
        ];
    }
}
