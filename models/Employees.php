<?php

namespace app\models;

use Yii;
use borales\extensions\phoneInput\PhoneInputValidator;

class Employees extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'employees';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'phone', 'position', 'status', 'salary'], 'required'],
            [['name', 'surname', 'position'], 'match', 'pattern' => '/^[a-zA-Zа-яА-Я]+$/u', 'message' => 'Используйте только буквы русского и английского алфавита'],
            [['status'], 'boolean'],
            [['salary'], 'default', 'value' => null],
            [['salary'], 'integer', 'max' => 10000000],
            [['name', 'surname', 'phone', 'position'], 'string', 'max' => 16],
            [['phone'], PhoneInputValidator::className()],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'phone' => 'Номер телефона',
            'position' => 'Должность',
            'status' => 'Статус',
            'salary' => 'Зарплата(В рублях)'
        ];
    }
    
}
