<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $address
 * @property string|null $region
 * @property string|null $post_code
 * @property string|null $city
 * @property string|null $country
 *
 * @property User $user
 * @property Order[] $orders
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['address', 'region', 'post_code', 'city', 'country'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'region' => 'Region',
            'post_code' => 'Post Code',
            'city' => 'City',
            'country' => 'Country',
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
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CustomerQuery(get_called_class());
    }
}
