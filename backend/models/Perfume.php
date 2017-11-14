<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfume".
 *
 * @property integer $id
 * @property string $name
 * @property string $details
 * @property string $price
 * @property string $image
 * @property string $quantity
 * @property integer $saleoff
 * @property integer $status
 * @property string $brand
 * @property integer $created_at
 * @property integer $updated_at
 */
class Perfume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'details', 'price', 'quantity', 'brand'], 'required'],
            [['details'], 'string'],
            [['saleoff', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'price', 'image', 'quantity', 'brand'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'details' => 'Details',
            'price' => 'Price',
            'image' => 'Image',
            'quantity' => 'Quantity',
            'saleoff' => 'Saleoff',
            'status' => 'Status',
            'brand' => 'Brand',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
