<?php

namespace backend\models\BackendUser;

use Yii;

/**
 * This is the model class for table "{{%tk_kh}}".
 *
 * @property int $ID
 * @property string $TENKH
 * @property string $SDT
 * @property string $MAIL
 * @property string $PASSWORD
 * @property string $authKey
 */
class BackendUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tk_kh}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SDT', 'MAIL', 'PASSWORD','USERNAME'], 'required'],
            [['TENKH'], 'string', 'max' => 150],
            [['SDT'], 'string', 'max' => 15],
            [['MAIL', 'authKey'], 'string', 'max' => 50],
            [['USERNAME'], 'string', 'max' => 15],
            [['PASSWORD'], 'string', 'max' => 18],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TENKH' => 'T E N K H',
            'SDT' => 'S D T',
            'MAIL' => 'M A I L',
            'USERNAME' => 'UserName',
            'PASSWORD' => 'P A S S W O R D',
            'authKey' => 'Auth Key',
        ];
    }
    public static function findIdentity($ID){
		return static::findOne($ID);
	}

	public static function findIdentityByAccessToken($token, $type = null){
		throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
	}

	public function getId(){
		return $this->ID;
	}

	public function getAuthKey(){
		return $this->authKey;//Here I return a value of my authKey column
	}

	public function validateAuthKey($authKey){
		return $this->authKey === $authKey;
	}
	public static function findByUsername($username){
		return self::findOne(['username'=>$username]);
	}

	public function validatePassword($password){
		return $this->password === $password;
	}
}
