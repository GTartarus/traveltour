<?php

namespace frontend\models\DangKyTour;

use Yii;
use frontend\models\TOUR\Tour;

/**
 * This is the model class for table "{{%dangky_tour}}".
 *
 * @property int $MSDK
 * @property int $MSTOUR
 * @property int $SLNL
 * @property int $SLTE
 * @property int $GIA
 *
 * @property CtDkTour[] $ctDkTours
 * @property Khachhang[] $sDTs
 * @property Tour $mSTOUR
 */
class DangkyTour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%dangky_tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSTOUR', 'SLNL', 'SLTE','SDT'], 'required'],
            [['MSTOUR', 'SLNL', 'SLTE', 'GIA','TONGTIEN','SDT'], 'integer'],
            [['MSTOUR'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['MSTOUR' => 'MSTOUR']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSDK' => 'Mã Đăng Ký',
            'MSTOUR' => ' Tour',
            'SLNL' => 'Số Lượng Người Lớn',
            'SLTE' => 'Số Lượng Trẻ Em',
            'GIA' => 'Giá',
            'SDT' => 'Số Điện Thoại',
            'TONGTIEN' => 'Tổng Tiền',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtDkTours()
    {
        return $this->hasMany(CtDkTour::className(), ['MSDK' => 'MSDK']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSTOUR()
    {
        return $this->hasOne(Tour::className(), ['MSTOUR' => 'MSTOUR']);
    }
}
