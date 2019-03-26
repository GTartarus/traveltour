<?php

namespace backend\models\KhachHang;

use Yii;

/**
 * This is the model class for table "{{%khachhang}}".
 *
 * @property string $TENKH
 * @property bool $GIOITINH
 * @property int $ML
 * @property string $SDT
 * @property bool $QUOCTICH
 *
 * @property Loai $mL
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%khachhang}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENKH', 'SDT'], 'required'],
            [['GIOITINH', 'QUOCTICH'], 'boolean'],
            [['ML'], 'integer'],
            [['TENKH'], 'string', 'max' => 50],
            [['SDT'], 'string', 'max' => 15],
            [['SDT'], 'unique'],
            [['ML'], 'exist', 'skipOnError' => true, 'targetClass' => Loai::className(), 'targetAttribute' => ['ML' => 'ML']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TENKH' => 'T E N K H',
            'GIOITINH' => 'G I O I T I N H',
            'ML' => 'M L',
            'SDT' => 'S D T',
            'QUOCTICH' => 'Q U O C T I C H',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getML()
    {
        return $this->hasOne(Loai::className(), ['ML' => 'ML']);
    }
}
