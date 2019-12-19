<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property int $idequipo
 * @property string $nombreequipo
 * @property string $descripcionequipo
 * @property int $cantidadequipo
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreequipo', 'descripcionequipo', 'cantidadequipo'], 'required'],
            [['cantidadequipo'], 'integer'],
            [['nombreequipo'], 'string', 'max' => 45],
            [['descripcionequipo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombreequipo' => 'Nombre',
            'descripcionequipo' => 'Descripción',
            'cantidadequipo' => 'Cantidad disponible',
        ];
    }
}
