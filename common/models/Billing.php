<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "billing".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $order_id
 * @property string|null $address_one
 * @property string|null $address_two
 * @property string|null $special_instructions
 *
 * @property Order $order
 * @property User $user
 */
class Billing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'order_id'], 'integer'],
            [['special_instructions'], 'string'],
            [['address_one', 'address_two'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
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
            'order_id' => 'Order ID',
            'address_one' => 'Address One',
            'address_two' => 'Address Two',
            'special_instructions' => 'Special Instructions',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
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
     * @return \common\models\query\BillingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BillingQuery(get_called_class());
    }
}
