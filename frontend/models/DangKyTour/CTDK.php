<?php

namespace frontend\models\DangKyTour;

use Yii;

/**
 * This is the model class for table "{{%ct_dk_tour}}".
 *
 * @property int $MSDK
 * @property int $SDT
 * @property string $TENKH
 */
class CTDK extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ct_dk_tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSDK', 'SDT', 'TENKH'], 'required'],
            [['MSDK', 'SDT'], 'integer'],
            [['TENKH'], 'string', 'max' => 50],
            [['MSDK', 'SDT'], 'unique', 'targetAttribute' => ['MSDK', 'SDT']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSDK' => 'M S D K',
            'SDT' => 'S D T',
            'TENKH' => 'T E N K H',
        ];
    }
}
