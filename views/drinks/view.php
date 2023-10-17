<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Drinks $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Drinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="drinks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-end  ">
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'russian_name',
            'description:ntext',
            'price',
            [
                "attribute" => "drinks_category_id",
                "value" => function($model){
                    return $model->drinksCategory->name;
                }
            ],
        ],
    ]) ?>

</div>
