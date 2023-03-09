<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin
 *
 * @property Order[] $orders
 */
class RegForm extends User //расширяет класс User
{
    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'login', 'email', 'password', 'passwordConfirm', 'agree'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['name', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кириллица, пробел и тире'],
            ['surname', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кириллица, пробел и тире'],
            ['patronymic', 'match', 'pattern' => '/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кириллица, пробел и тире'],
            ['login', 'match', 'pattern' => '/^[a-zA-Z0-9\-]{1,}$/u', 'message' => 'Только латиница, цифры и тире'],
            ['login', 'unique', 'message' => 'Такой логин уже используется'],
            ['email', 'email', 'message' => 'Некорректный email'],
            ['password', 'match', 'pattern' => '/^[a-zA-Z0-9\-]{6,}$/u', 'message' => 'Не менее 6-ти символов'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли должны совпадать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message' => 'Необходимо согласиться'],
            [['admin'], 'integer'],
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'login' => 'Login',
            'email' => 'Email',
            'password' => 'Пароль',
            'admin' => 'Admin',
            'passwordConfirm' => 'Подтверждение пароля',
            'agree' => 'Даю согласие на обработку данных',
        ];
    }

}
