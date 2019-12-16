<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensacion".
 *
 * @property int $idsensacion
 * @property string $nombresensacion
 * @property string $descripcionsensacion
 * @property int $cantidadsensacion
 */
class Sensacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombresensacion', 'descripcionsensacion', 'cantidadsensacion'], 'required'],
            [['cantidadsensacion'], 'integer'],
            [['nombresensacion'], 'string', 'max' => 45],
            [['descripcionsensacion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsensacion' => 'Idsensacion',
            'nombresensacion' => 'Nombresensacion',
            'descripcionsensacion' => 'Descripcionsensacion',
            'cantidadsensacion' => 'Cantidadsensacion',
        ];
    }
}
