<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aceite".
 *
 * @property int $idaceite
 * @property string $nombreaceite
 * @property string $descripcionaceite
 * @property int $cantidadaceite
 */
class Aceite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aceite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaceite', 'nombreaceite', 'descripcionaceite', 'cantidadaceite'], 'required'],
            [['idaceite', 'cantidadaceite'], 'integer'],
            [['nombreaceite'], 'string', 'max' => 45],
            [['descripcionaceite'], 'string', 'max' => 255],
            [['idaceite'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idaceite' => 'Idaceite',
            'nombreaceite' => 'Nombreaceite',
            'descripcionaceite' => 'Descripcionaceite',
            'cantidadaceite' => 'Cantidadaceite',
        ];
    }
}
