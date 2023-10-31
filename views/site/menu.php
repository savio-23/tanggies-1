<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\models\Category;
use app\models\DrinksCategory;
use app\models\Items;
use app\models\Drinks;

$this->title = 'Tanggies Menu';
?>
<div class="site-menu">


    <nav class="head">
        <img src="<?= Yii::$app->request->baseUrl.'/img/finalblue.png' ?>" alt="">
    </nav>

    <nav class="nav">
        <div class="btn">

            <span style="font-size: 20px; cursor: pointer" onclick="openNav()">&#9776;</span>

            <div class="btn4">

                <div class="btn1">
                    <button id="foodButton" onclick="shrinkNavbar() ,openNav(),topFunction()">Food</button>
                    <button id="drinksButton" onclick="shrinkNavbar(),openNav(),topFunction()">Drinks</button>
                </div>


            </div>
        </div>
    </nav>
    <div class="background">
        <div class="side1">
            <id class="main">



                <div id="mySidenav" class="sidenav active">

                    <div class="sidefood active">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                        <?php
                        $category = Category::find()->all();
                        if($category){
                            foreach($category as $cat){
                                echo "<a href='#cat-".$cat->id."' onclick='closeNav()'>". $cat->name ."</a>";
                            }
                        }
                    ?>
                    </div>
                    <div class="sidedrink">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <?php
                        $drinkscategory = DrinksCategory::find()->all();
                        if($category){
                            foreach($drinkscategory as $dcat){
                                echo "<a href='#dcat-".$dcat->id."' onclick='closeNav()'>". $dcat->name ."</a>";
                            }
                        }
                    ?>
                    </div>
                </div>
            </id>
        </div>
        
        <div id="content">
            <div class="food">
                <?php
                        if($category){
                            foreach($category as $cat){
                                echo "<section id='cat-".$cat->id."'></section>";
                                echo "<h2>". $cat->name ."</h2>";
                                $items = Items::find()->where(["category_id" => $cat->id])->all();
                                if($items){
                                    foreach($items as $item){
                    ?>
                <div class="items">
                    <div class="price">
                        <h3><?= $item->price ?></h3>
                    </div>
                    <div class="name">
                        <h3><?= $item->name ?></h3>
                        <h3 class="choice"><?= $item->choice ?></h3>
                    </div>
                    <div class="decr">
                        <h3><?= $item->description ?></h3>
                    </div>
                </div>
                <?php
                                    }
                                }
                            }
                        }
                    ?>
            </div>
            <div class="drinks">

                <?php
                        if($drinkscategory){
                            foreach($drinkscategory as $dcat){
                                echo "<section id='dcat-".$dcat->id."'></section>";
                                echo "<h2>". $dcat->name ."</h2>";
                                $drinks = Drinks::find()->where(["drinks_category_id" => $dcat->id])->all();
                                if($drinks){
                                    foreach($drinks as $drink){
                    ?>
                <div class="items">
                    <div class="price">
                        <h3><?= $drink->price ?></h3>
                    </div>
                    <div class="name">
                        <h3><?= $drink->name ?></h3>
                    </div>

                    <div class="decr">
                        <h3><?= $drink->description ?></h3>
                    </div>
                </div>
                <?php
                                    }
                                }
                            }
                        }
                    ?>

            </div>
        </div>
    </div>


    <button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>
</div>
