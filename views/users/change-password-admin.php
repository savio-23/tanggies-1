<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="row">

    <div class="col-md-6">

        <h2>Change Password: <?= $user->name ?></h2><br>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'password1')->passwordInput(['placeholder' => 'Enter password']) ?>
        <br>
        <?= $form->field($model, 'password2')->passwordInput(['placeholder' => 'Repeat password']) ?>
        <br>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>