<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $delivery_note
 * @property string|null $delivery_time
 * @property string|null $delivery_day
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int $branch_id
 * @property int|null $transaction_id
 * @property string|null $status
 * @property string|null $shipping_method
 * @property string|null $shipping_amount
 * @property string|null $grand_amount
 * @property string|null $currency_type
 * @property string|null $company
 *
 * @property Branch $branch
 * @property User $user
 * @property Transaction $transaction
 * @property OrderItem[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'branch_id'], 'required'],
            [['user_id', 'created_at', 'updated_at', 'branch_id', 'transaction_id'], 'integer'],
            [['delivery_note'], 'string'],
            [['delivery_time', 'delivery_day', 'status', 'shipping_method', 'shipping_amount', 'grand_amount', 'currency_type', 'company'], 'string', 'max' => 255],
            [['transaction_id'], 'unique'],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transaction::className(), 'targetAttribute' => ['transaction_id' => 'id']],
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
            'delivery_note' => 'Delivery Note',
            'delivery_time' => 'Delivery Time',
            'delivery_day' => 'Delivery Day',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'branch_id' => 'Branch ID',
            'transaction_id' => 'Transaction ID',
            'status' => 'Status',
            'shipping_method' => 'Shipping Method',
            'shipping_amount' => 'Shipping Amount',
            'grand_amount' => 'Grand Amount',
            'currency_type' => 'Currency Type',
            'company' => 'Company',
        ];
    }

    /**
     * Gets query for [[Branch]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\BranchQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
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
     * Gets query for [[Transaction]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\TransactionQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(Transaction::className(), ['id' => 'transaction_id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderItemQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrderQuery(get_called_class());
    }
}
