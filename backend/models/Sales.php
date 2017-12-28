<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_sales".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $bicycleNum_id
 * @property string $bicycle_start
 * @property string $product
 * @property integer $quanlity
 * @property string $price
 * @property integer $discount_price
 * @property string $bicycle_end
 * @property integer $employee
 * @property integer $manager
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'bicycleNum_id', 'bicycle_start', 'product', 'quanlity', 'price', 'employee', 'manager', 'status', 'created_at', 'updated_at'], 'required'],
            [['customer_id', 'bicycleNum_id', 'quanlity', 'discount_price', 'employee', 'manager', 'status'], 'integer'],
            [['bicycle_start', 'product', 'bicycle_end'], 'string'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'bicycleNum_id' => 'Bicycle Num ID',
            'bicycle_start' => 'Bicycle Start',
            'product' => 'Product',
            'quanlity' => 'Quanlity',
            'price' => 'Price',
            'discount_price' => 'Discount Price',
            'bicycle_end' => 'Bicycle End',
            'employee' => 'Employee',
            'manager' => 'Manager',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
