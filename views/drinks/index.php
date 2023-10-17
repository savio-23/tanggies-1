<?php

use app\models\Drinks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\DrinksCategory;

/** @var yii\web\View $this */
/** @var app\models\DrinksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Drinks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drinks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-end">
        <?= Html::a('Add Drinks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'russian_name',
            'price',
            //'drinks_category_id',
            //'is_available',
            //'created_at',
            [
                "attribute" => "is_available",
                "value" => function($model){
                    if($model->is_available == 1){
                        return "Available";
                    }else{
                        return "Not Available";
                    }
                }, 
                'filter'=> ["1" => "Available","0" => "Not Available"],
            ],
            [
                "attribute" => "drinks_category_id",
                "value" => function($model){
                    return $model->drinksCategory->name;
                },
                'filter'=>ArrayHelper::map(DrinksCategory::find()->asArray()->all(), 'id', 'name'),
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Drinks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
