<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $idCategory
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $img
 * @property float $price
 *
 * @property Category $idCategory0
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCategory', 'title', 'slug', 'content', 'img', 'price'], 'required'],
            [['idCategory'], 'integer'],
            [['slug', 'img'], 'string'],
            [['price'], 'number'],
            [['title', 'content'], 'string', 'max' => 255],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idCategory' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idCategory' => 'Категория товара',
            'title' => 'Наименование товара',
            'slug' => 'Slug',
            'content' => 'Контент',
            'img' => 'Картинка',
            'price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[IdCategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory0()
    {
        return $this->hasOne(Category::class, ['id' => 'idCategory']);
    }
}
