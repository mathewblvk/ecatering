<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property string|null $transaction_type
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $transaction_amount
 * @property string|null $transaction_status
 * @property string|null $transaction_currency
 * @property string|null $transaction_description
 * @property string|null $company
 * @property string|null $branch_id
 *
 * @property Order $order
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['transaction_type', 'transaction_amount', 'transaction_status', 'transaction_currency', 'transaction_description', 'company', 'branch_id'], 'string', 'max' => 255],
            [['branch_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaction_type' => 'Transaction Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'transaction_amount' => 'Transaction Amount',
            'transaction_status' => 'Transaction Status',
            'transaction_currency' => 'Transaction Currency',
            'transaction_description' => 'Transaction Description',
            'company' => 'Company',
            'branch_id' => 'Branch ID',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['transaction_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TransactionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TransactionQuery(get_called_class());
    }
}
