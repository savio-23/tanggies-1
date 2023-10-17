<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Password extends Model
{
    public $password;
    public $password1;
    public $password2;

    public function rules()
    {
        return [
            [['password1', 'password2'], 'string'],
            [['password1', 'password2'], 'required'],
            ['password2', 'compare', 'compareAttribute' => 'password1', 'message' => 'Passwords don\'t match'],
            ['password', 'string', 'min' => 8],
            ['password', 'match', 'pattern' => '/\d/', 'message' => 'Password must contain at least one numeric digit.'],
            ['password', 'match', 'pattern' => '/\W/', 'message' => 'Password must contain at least one special character.'],
            ['password', 'match', 'pattern' => '/[A-Z]/', 'message' => 'Password must contain at least one Capital Letter.']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'password1' => 'Password',
            'password2' => 'Repeat Password',
        ];
    }
}
