<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "difusorpremium".
 *
 * @property int $iddifusorpremium
 * @property string $nombredifusorpremium
 * @property string $descripciondifusorpremium
 * @property int $cantidaddifusorpremium
 */
class Difusorpremium extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'difusorpremium';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddifusorpremium', 'nombredifusorpremium', 'descripciondifusorpremium', 'cantidaddifusorpremium'], 'required'],
            [['iddifusorpremium', 'cantidaddifusorpremium'], 'integer'],
            [['nombredifusorpremium'], 'string', 'max' => 45],
            [['descripciondifusorpremium'], 'string', 'max' => 255],
            [['iddifusorpremium'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'nombredifusorpremium' => 'Nombre',
            'descripciondifusorpremium' => 'Descripción',
            'cantidaddifusorpremium' => 'Cantidad disponible',
        ];
    }
}
