<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
        .login-div{
            background-color: white;
            margin-top: 60px;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 12px 0px grey;
        }
</style>

<div class="site-login">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-4">
                <div class="login-div">
                    <div class="text-center">
                        <h1>Login</h1>
                    </div>
                    <br>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                    ]) ?>

                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        
                    <?php ActiveForm::end(); ?>
                
            </div>
        </div>

</div>
