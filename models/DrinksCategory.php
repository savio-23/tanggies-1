<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drinks_category".
 *
 * @property int $id
 * @property string $name
 * @property string|null $russian_name
 * @property string $created_at
 *
 * @property Drinks[] $drinks
 */
class DrinksCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drinks_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at'], 'safe'],
            [['name', 'russian_name'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Drinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinks()
    {
        return $this->hasMany(Drinks::class, ['drinks_category_id' => 'id']);
    }
}
