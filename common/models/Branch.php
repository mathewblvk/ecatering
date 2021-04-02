<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property string|null $company_name
 * @property string|null $branch_name
 * @property string|null $branch_address
 * @property integer $created_at
 * @property integer $updated_at
 * @property string|null $branch_status
 *
 * @property Department[] $departments
 * @property Product[] $products
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_name', 'branch_name', 'branch_address', 'branch_status'], 'required'],
            [['created_at'], 'datetime'],
            [['company_name', 'branch_name', 'branch_address', 'branch_status'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company',
            'branch_name' => 'Branch',
            'branch_address' => 'Address',
            'created_at' => 'Created At',
            'branch_status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\DepartmentQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['branch_id' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ProductQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['branch_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\BranchQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\BranchQuery(get_called_class());
    }
}
