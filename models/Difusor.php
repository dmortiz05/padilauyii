<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "difusor".
 *
 * @property int $iddifusor
 * @property string $nombredifusor
 * @property string $descripciondifusor
 * @property int $cantidaddifusor
 */
class Difusor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'difusor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddifusor', 'nombredifusor', 'descripciondifusor', 'cantidaddifusor'], 'required'],
            [['iddifusor', 'cantidaddifusor'], 'integer'],
            [['nombredifusor'], 'string', 'max' => 45],
            [['descripciondifusor'], 'string', 'max' => 255],
            [['iddifusor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddifusor' => 'Iddifusor',
            'nombredifusor' => 'Nombredifusor',
            'descripciondifusor' => 'Descripciondifusor',
            'cantidaddifusor' => 'Cantidaddifusor',
        ];
    }
}
