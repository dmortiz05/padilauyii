<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "textil".
 *
 * @property int $idtextil
 * @property string $nombretextil
 * @property string $descripciontextil
 * @property int $cantidadtextil
 */
class Textil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'textil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtextil', 'nombretextil', 'descripciontextil', 'cantidadtextil'], 'required'],
            [['idtextil', 'cantidadtextil'], 'integer'],
            [['nombretextil'], 'string', 'max' => 45],
            [['descripciontextil'], 'string', 'max' => 255],
            [['idtextil'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombretextil' => 'Nombre',
            'descripciontextil' => 'Descripción',
            'cantidadtextil' => 'Cantidad disponible',
        ];
    }
}
