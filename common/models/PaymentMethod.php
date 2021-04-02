<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment_method".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $card_number
 * @property string|null $code
 * @property string $date_form
 * @property string $date_to
 *
 * @property User $user
 */
class PaymentMethod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_method';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['date_form', 'date_to'], 'safe'],
            [['card_number', 'code'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'card_number' => 'Card Number',
            'code' => 'Code',
            'date_form' => 'Date Form',
            'date_to' => 'Date To',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PaymentMethodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PaymentMethodQuery(get_called_class());
    }
}
