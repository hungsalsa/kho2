<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_bicycle".
 *
 * @property integer $id
 * @property string $bicycle_name
 * @property string $bicycle_num
 * @property integer $customer_id
 * @property string $description
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Bicycle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bicycle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bicycle_name', 'bicycle_num', 'customer_id', 'status', 'created_at', 'updated_at'], 'required'],
            [['customer_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['bicycle_name'], 'string', 'max' => 30],
            [['bicycle_num'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bicycle_name' => 'Bicycle Name',
            'bicycle_num' => 'Bicycle Num',
            'customer_id' => 'Customer ID',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllBicycles(){
        $data = Bicycle::find()
                ->where(['status'=>'1'])
                ->orderBy('bicycle_num')
                ->all();
        return ArrayHelper::map($data, 'id' , 'bicycle_num');
    }
}
