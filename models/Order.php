<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $timestamp
 * @property int $idUser
 * @property int $idCategory
 * @property int $idProducts
 * @property string|null $status
 * @property string $description
 *
 * @property Category $idCategory0
 * @property Products $idProducts0
 * @property User $idUser0
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp', 'idUser', 'idCategory', 'idProducts', 'description'], 'required'],
            [['timestamp'], 'safe'],
            [['idUser', 'idCategory', 'idProducts'], 'integer'],
            [['status', 'description'], 'string'],
            [['idCategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idCategory' => 'id']],
            [['idProducts'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['idProducts' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestamp' => 'Временная метка',
            'idUser' => 'Пользователь',
            'idCategory' => 'Id Category',
            'idProducts' => 'Продукты',
            'status' => 'Статус',
            'description' => 'Описание',
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

    /**
     * Gets query for [[IdProducts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::class, ['id' => 'idProducts']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::class, ['id' => 'idUser']);
    }
}
