<?php

namespace common\models;
use http\Url;
use yii\base\Exception;
use yii\helpers\FileHelper;
use yii\web\HttpException;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string|null $product_name
 * @property string|null $product_price
 * @property string|null $code
 * @property int $branch_id
 * @property int $status_id
 * @property int $category_id
 * @property string|null $description
 *
 * @property OrderItem[] $orderItems
 * @property Branch $branch
 * @property ProductCategory $category
 * @property Status $status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $image;

    /**
     *
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['product_name', 'product_price', 'code', 'description','branch_id', 'status_id', 'category_id'], 'required'],
            [['branch_id', 'status_id', 'category_id'], 'integer'],
            [['product_name', 'product_price', 'code', 'description'], 'string', 'max' => 255],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product',
            'product_name' => 'Product Name',
            'product_price' => 'Price',
            'code' => 'Code',
            'branch_id' => 'Branch',
            'status_id' => 'Status',
            'category_id' => 'Category',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderItemQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['product_id' => 'product_id']);
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
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ProductCategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\StatusQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProductQuery(get_called_class());
    }


    public function upload() {
            if (true){
                $imagePath = Yii::getAlias('@frontend/web/storage/product/'. $this->image->baseName . '.' . $this->image->extension);
                if (!is_dir(dirname($imagePath))) {
                    FileHelper::createDirectory(dirname($imagePath));

                }
                return $this->image->saveAs($imagePath);
            }
            return true;
    }
}
