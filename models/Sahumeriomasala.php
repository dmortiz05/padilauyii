<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sahumeriomasala".
 *
 * @property int $idsahumeriomasala
 * @property string $nombresahumeriomasala
 * @property string $descripcionsahumeriomasala
 * @property int $cantidadsahumeriomasala
 */
class Sahumeriomasala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sahumeriomasala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombresahumeriomasala', 'descripcionsahumeriomasala', 'cantidadsahumeriomasala'], 'required'],
            [['cantidadsahumeriomasala'], 'integer'],
            [['nombresahumeriomasala'], 'string', 'max' => 45],
            [['descripcionsahumeriomasala'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombresahumeriomasala' => 'Nombre',
            'descripcionsahumeriomasala' => 'Descripción',
            'cantidadsahumeriomasala' => 'Cantidad disponible',
        ];
    }
}
