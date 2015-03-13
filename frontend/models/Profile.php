<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $address
 * @property string $phone_number
 * @property integer $gender
 * @property string $ethic_group
 * @property string $nationality
 * @property integer $shift
 * @property string $experience
 * @property string $reference
 * @property integer $user_id
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'shift', 'user_id'], 'integer'],
            [['experience', 'reference'], 'string'],
            [['user_id'], 'required'],
            [['lastname', 'firstname', 'ethic_group', 'nationality'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 256],
            [['phone_number'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Last Name',
            'firstname' => 'First Name',
            'address' => 'Address',
            'phone_number' => 'Phone Number',
            'gender' => 'Gender',
            'ethic_group' => 'Ethic Group',
            'nationality' => 'Nationality',
            'shift' => 'Shift',
            'experience' => 'Experience',
            'reference' => 'Reference',
            'user_id' => 'User ID',
        ];
    }
}
