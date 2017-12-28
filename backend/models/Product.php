<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_product".
 *
 * @property integer $proID
 * @property string $productName
 * @property integer $bicycle_id
 * @property integer $group_ID
 * @property integer $cateID
 * @property integer $price
 * @property integer $quanlity
 * @property string $color
 * @property string $image
 * @property string $description
 * @property integer $suppliresID
 * @property integer $userID
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['productName', 'bicycle_id', 'group_ID', 'cateID', 'created_at', 'updated_at'], 'required'],
            [['bicycle_id', 'group_ID', 'cateID', 'price', 'quanlity', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['productName', 'color', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'proID' => 'Pro ID',
            'productName' => 'Product Name',
            'bicycle_id' => 'Bicycle ID',
            'group_ID' => 'Group  ID',
            'cateID' => 'Cate ID',
            'price' => 'Price',
            'quanlity' => 'Quanlity',
            'color' => 'Color',
            'image' => 'Image',
            'description' => 'Description',
            'suppliresID' => 'Supplires ID',
            'userID' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllProduct(){
        $data = Product::find()
                ->where(['status'=>'1'])
                ->orderBy('productName')
                ->all();
        return ArrayHelper::map($data, 'proID' , 'productName');
    }
}
