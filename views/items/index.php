<?php

use app\models\Items;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Category;

/** @var yii\web\View $this */
/** @var app\models\ItemsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-end">
        <?= Html::a('Add Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'table-responsive',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'russian_name',
            'price',
            
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
                "attribute" => "category_id",
                "value" => function($model){
                    return $model->category->name;
                },
                'filter'=>ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name'),
            ],
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Items $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
