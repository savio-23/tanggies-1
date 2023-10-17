<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DrinksCategory $model */

$this->title = 'Create Drinks Category';
$this->params['breadcrumbs'][] = ['label' => 'Drinks Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drinks-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
