<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mini".
 *
 * @property int $idmini
 * @property string $nombremini
 * @property string $descripcionmini
 * @property int $cantidadmini
 */
class Mini extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mini';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmini', 'nombremini', 'descripcionmini', 'cantidadmini'], 'required'],
            [['idmini', 'cantidadmini'], 'integer'],
            [['nombremini'], 'string', 'max' => 45],
            [['descripcionmini'], 'string', 'max' => 255],
            [['idmini'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmini' => 'Idmini',
            'nombremini' => 'Nombremini',
            'descripcionmini' => 'Descripcionmini',
            'cantidadmini' => 'Cantidadmini',
        ];
    }
}
