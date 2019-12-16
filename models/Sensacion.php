<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensacion".
 *
 * @property int $idsensacion
 * @property string $nombresensacion
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
            [['idsensacion', 'nombresensacion', 'cantidadsensacion'], 'required'],
            [['idsensacion', 'cantidadsensacion'], 'integer'],
            [['nombresensacion'], 'string', 'max' => 45],
            [['idsensacion'], 'unique'],
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
            'cantidadsensacion' => 'Cantidadsensacion',
        ];
    }
}
