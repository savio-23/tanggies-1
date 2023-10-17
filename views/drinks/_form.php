<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\DrinksCategory;

/** @var yii\web\View $this */
/** @var app\models\Drinks $model */
/** @var yii\widgets\ActiveForm $form */
$category = ArrayHelper::map(DrinksCategory::find()->all(), 'id', 'name');

?>

<div class="drinks-form">
    <div class="row">
        <div class="col-md-4">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <br>

            <?= $form->field($model, 'russian_name')->textInput(['maxlength' => true]) ?>
            <br>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            <br>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
            <br>


            <?= $form->field($model, 'drinks_category_id')
                ->dropDownList(
                    $category,
                    ['prompt' => 'Select Category']
            ); ?>

            <br>

            <?= $form->field($model, 'is_available')->checkbox(['uncheck' => '0', 'value' => '1']); ?>

            <br>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    

</div>
