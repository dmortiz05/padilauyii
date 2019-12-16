<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "routeauto".
 *
 * @property int $idroute
 * @property string $nombreroute
 * @property string $descripcionroute
 * @property int $cantidadroute
 */
class Routeauto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'routeauto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idroute', 'nombreroute', 'descripcionroute', 'cantidadroute'], 'required'],
            [['idroute', 'cantidadroute'], 'integer'],
            [['nombreroute'], 'string', 'max' => 45],
            [['descripcionroute'], 'string', 'max' => 255],
            [['idroute'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idroute' => 'Idroute',
            'nombreroute' => 'Nombreroute',
            'descripcionroute' => 'Descripcionroute',
            'cantidadroute' => 'Cantidadroute',
        ];
    }
}
