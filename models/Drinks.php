<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drinks".
 *
 * @property int $id
 * @property string $name
 * @property string $russian_name
 * @property string|null $description
 * @property string $price
 * @property int $drinks_category_id
 * @property int $is_available
 * @property string $created_at
 *
 * @property DrinksCategory $drinksCategory
 */
class Drinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'drinks_category_id'], 'required'],
            [['description'], 'string'],
            [['drinks_category_id', 'is_available'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'russian_name'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 100],
            [['drinks_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => DrinksCategory::class, 'targetAttribute' => ['drinks_category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'russian_name' => 'Russian Name',
            'description' => 'Description',
            'price' => 'Price',
            'drinks_category_id' => 'Drinks Category',
            'is_available' => 'Is Available',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[DrinksCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinksCategory()
    {
        return $this->hasOne(DrinksCategory::class, ['id' => 'drinks_category_id']);
    }
}
