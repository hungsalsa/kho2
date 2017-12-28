<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tbl_customers".
 *
 * @property integer $id
 * @property string $cus_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property integer $status
 * @property string $created_at
 * @property string $update_at
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_name', 'status', 'created_at', 'update_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['cus_name', 'email'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cus_name' => 'Cus Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }

    public function getAllCustomers(){
        $data = Customers::find()
                ->where(['status'=>'1'])
                ->orderBy('cus_name')
                ->all();
        return ArrayHelper::map($data, 'id' , 'cus_name');
    }
}
