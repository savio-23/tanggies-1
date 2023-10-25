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
    <div class="background">
        <nav class="nav">
            <div class="btn">

                <span style="font-size: 20px; cursor: pointer" onclick="openNav()">&#9776;</span>

                <div class="btn4">

                    <div class="btn1">
                        <button id="foodButton" onclick="shrinkNavbar() ,openNav()">Food</button>
                        <button id="drinksButton" onclick="shrinkNavbar(),openNav()">Drinks</button>
                    </div>


                </div>
            </div>
        </nav>
        <id class="main">



            <div id="mySidenav" class="sidenav active">

                <div class="sidefood active">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <!-- <a href="#Soup" onclick="closeNav()">Soup</a>
                    <a href="#Salad" onclick="closeNav()">Salad</a>
                    <a href="#APPETIZERS" onclick="closeNav()">Appetizers</a>
                    <a href="#fisherman" onclick="closeNav()">From The Fisherman's Net</a>
                    <a href="#whole fish" onclick="closeNav()">Whole Fish & Fillets</a>
                    <a href="#GOAN CUISINE" onclick="closeNav()">Goan Cuisine</a>
                    <a href="#PASTA" onclick="closeNav()">Pasta</a>
                    <a href="#Pizza" onclick="closeNav()">Pizza</a>
                    <a href="#FROM THE GRILL" onclick="closeNav()">From The Grill</a>
                    <a href="#INDO- CHINESE" onclick="closeNav()">Indo- Chinese</a>
                    <a href="#INDO-CHINESE NOODLES" onclick="closeNav()">Indo-Chinese Noodles</a>
                    <a href="#INDIAN CUISINE" onclick="closeNav()">Indian Cuisine</a>
                    <a href="#INDIAN VEGETARIAN" onclick="closeNav()">Indian Vegetarian</a>
                    <a href="#FROM THE TANDOOR" onclick="closeNav()">From The Tandoor</a>
                    <a href="#RICE" onclick="closeNav()">Rice</a>
                    <a href="#INDIAN BREADS" onclick="closeNav()">Indian Breads</a>
                    <a href="#DESSERTS" onclick="closeNav()">Desserts</a>
                    <a href="#DESSERTS" onclick="closeNav()">asd</a> -->

                    <?php
                        $category = Category::find()->all();
                        if($category){
                            foreach($category as $cat){
                                echo "<a href='#cat-".$cat->id."' onclick='closeNav()'>". $cat->name ."(". $cat->russian_name .")</a>";
                            }
                        }
                    ?>
                </div>
                <div class="sidedrink">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <!-- <a href="#MINERALS" onclick="closeNav()">Minerals</a>
                    <a href="#BEER" onclick="closeNav()">Beer</a>
                    <a href="#ALCOPOP'S" onclick="closeNav()">Alcopop's & Aperitif's</a>
                    <a href="#RUM" onclick="closeNav()">Rum</a>
                    <a href="#GIN" onclick="closeNav()">Gin</a>
                    <a href="#VODKA" onclick="closeNav()">Vodka</a>
                    <a href="#TEQUILA" onclick="closeNav()">Tequila</a>
                    <a href="#GOAN FENI " onclick="closeNav()">Goan Feni (30ML)</a>
                    <a href="#BRANDY/COGNAC" onclick="closeNav()">Brandy/Cognac</a>
                    <a href="#LIQUEUR" onclick="closeNav()">Liqueur</a>
                    <a href="#PORT" onclick="closeNav()">Port</a>
                    <a href="#WHISKEY" onclick="closeNav()">Whiskey</a>
                    <a href="#WINES" onclick="closeNav()">Wines</a>
                    <a href="#SPARKLING WINES BY THE BOTTLE" onclick="closeNav()">Sparkling Wines By The Bottle</a>
                    <a href="#COCKTAIL" onclick="closeNav()">TANGGIES- cocktail/Mocktail</a> -->
                    <?php
                        $drinkscategory = DrinksCategory::find()->all();
                        if($category){
                            foreach($drinkscategory as $dcat){
                                echo "<a href='#dcat-".$dcat->id."' onclick='closeNav()'>". $dcat->name ."(". $dcat->russian_name .")</a>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="content">
                <div class="food">
                    <?php
                        if($category){
                            foreach($category as $cat){
                                echo "<section id='cat-".$cat->id."'></section>";
                                echo "<h2>". $cat->name ." ". $cat->russian_name ."</h2>";
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
                            <div class="name">
                                <h3><?= $item->russian_name ?></h3>
                                <h3 class="choice"><?= $item->russian_choice ?></h3>
                            </div>
                            <!-- <div class="choice">
                                <h3>Vegetarian / Chicken / Prawns</h3>
                            </div> -->
                            <!-- <div class="decr">
                                <h3><?= $item->description ?></h3>
                            </div> -->
                        </div>
                    <?php
                                    }
                                }
                            }
                        }
                    ?>

                    <!-- <section id="Soup"></section>
                    <h2>SOUP</h2>
                    <div class="items">
                        <div class="price">
                            <h3>80/100/130</h3>
                        </div>
                        <div class="name">
                            <h3>Noodle Soup </h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetarian / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Indo-Chinese oriental style clear soup with a combination of your choice and
                                noodles.)</h3>
                        </div>
                    </div>
                    <div class="items">
                        <div class="price">
                            <h3>80/100/130</h3>
                        </div>
                        <div class="name">
                            <h3>Hot and Sour Soup </h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetarian / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Oriental style Soup with a mixture of hot & sour taste.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80/100/130</h3>
                        </div>
                        <div class="name">
                            <h3>Manchow Soup</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetarian / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">

                            <h3>(Oriental style Soup with hot spicy taste, served with fried noodle garnish.)</h3>
                        </div>
                    </div>


                    <section id="Salad"></section>
                    <h2>SALAD</h2>

                    <div class="items">
                        <div class="price">
                            <h3>280/400</h3>
                        </div>
                        <div class="name">
                            <h3>Caesar Salad/with Chicken
                            </h3>
                        </div>
                        <div class="decr">
                            <h3>(A classic caesar salad with crunchy garlic-cheese croutons and a creamy dressing.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>300</h3>
                        </div>
                        <div class="name">
                            <h3>Greek Salad</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetarian / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(The traditional style Greek salad with market vegetables and feta cheese covered
                                with our homemade
                                Greek Salad dressing.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>290</h3>
                        </div>
                        <div class="name">
                            <h3>Cucumber Avocado Salad </h3>
                        </div>

                        <div class="decr">
                            <h3>(Hearty portion of greens served with avocado, cucumber, and chef's special
                                dressing)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>120</h3>
                        </div>
                        <div class="name">
                            <h3>Green Salad </h3>
                        </div>

                        <div class="decr">
                            <h3>(Fresh garden vegetable with tomatoes, carrots and cucumbers)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>120</h3>
                        </div>
                        <div class="name">
                            <h3> Goan Salad</h3>
                        </div>

                        <div class="decr">
                            <h3>(Traditional Goan salad with finely chopped julienne of cabbage, capsicums and
                                carrots served with
                                lime
                                and vinegar dressing)</h3>
                        </div>
                    </div>

                    <section id="APPETIZERS"></section>
                    <h2>APPETIZERS</h2>
                    <div class="items">
                        <div class="price">
                            <h3>350</h3>
                        </div>
                        <div class="name">
                            <h3> Beer Battered Prawns</h3>
                        </div>

                        <div class="decr">
                            <h3>(Light and crisp prawns fried in a batter with a hint of beer, flavored with
                                oregano, chili flakes and garlic)</h3>
                        </div>
                    </div>
                    <div class="items">
                        <div class="price">
                            <h3>330</h3>
                        </div>
                        <div class="name">
                            <h3>Crispy Prawns </h3>
                        </div>

                        <div class="decr">
                            <h3>(Prawn marinated in light Spices, coated in tempura batter and deep fried to produce a
                                superb crispy texture.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Chicken Lollipops</h3>
                        </div>
                        <div class="decr">
                            <h3>
                                (Spicy, tangy battered drumsticks served with spicy szechwan sauce.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>120/150/180/200</h3>
                        </div>
                        <div class="name">
                            <h3>Spring roll</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetarian / Chicken / Prawns / Mix</h3>
                        </div>
                        <div class="decr">
                            <h3>
                                (Oriental style crisp rolls, filled with filling of your choice.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>200/250/280</h3>
                        </div>
                        <div class="name">
                            <h3>Sixty Five</h3>
                        </div>
                        <div class="choice">
                            <h3> Vegetarian / Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3> (Chicken spiked with curry leaves & chilies.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Crispy Chicken</h3>
                        </Div>
                        <div class="decr">
                            <h3>(Chicken tossed with fried Noodles, onion and capsicum)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>190</h3>
                        </div>
                        <div class="name">
                            <h3>Goan Chorizo</h3>
                        </div>
                        <div class="decr">
                            <h3>(Traditional Pork Sausages fried in a pan.)</h3>
                        </div>
                    </div>



                    <div class="items">
                        <div class="price">
                            <h3>280</h3>
                        </div>
                        <div class="name">
                            <h3>Mexican Chicken Skewer</h3>
                        </div>

                        <div class="decr">
                            <h3>(Juicy chicken Skewers bursting with vibrant flavors of pepper, roasted garlic,
                                cumin powder,
                                coriander powder, chili flakes, paprika and olive oil.)</h3>
                        </div>
                    </div>


                    <section id="fisherman"></section>
                    <h2>FROM THE FISHERMAN'S NET</h2>
                    <div class="items">
                        <div class="price">
                            <h3>1000</h3>
                        </div>
                        <div class="name">
                            <h3>Grilled Tiger Prawns</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>1200</h3>
                        </div>
                        <div class="name">
                            <h3>Jumbo Prawns</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>800</h3>
                        </div>
                        <div class="name">
                            <h3>Fish and chips</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Kingfish Steak</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Sharkfish Steak</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>790</h3>
                        </div>
                        <div class="name">
                            <h3>Seabass</h3>
                        </div>
                    </div>


                    <div class="decr">
                        <center>
                            <h4>***Served with a choice of fries or potato wedges or herb rice and seasona
                                vegetables***</h4>
                        </center>
                    </div>
                    <h3></h3>

                    <div class="items">
                        <div class="price">
                            <h3>4000</h3>
                        </div>
                        <div class="name">
                            <h3>Seafood Platter</h3>
                        </div>

                        <div class="decr">
                            <h3>(Calling all seafood lovers!! fresh catch of the day, lobster, tiger prawns, king
                                prawns, squids.
                                Served
                                with Vegetable rice, garden side salad and fries)</h3>
                        </div>
                    </div>


                    <section id="whole fish"></section>
                    <h2>WHOLE FISH & FILLETS (AS PER SIZE)</h2>
                    <div class="items">

                        <div class="decr">
                            <h3>Crab / Red Snapper / Shark Fish/
                                Pomfret / King Fish / Sea Bass/
                                Barracuda / Mullet / Kingfish <br><br> </h3>
                        </div>

                        <center>
                            <h4>***Served with a choice of fries or potato wedges or herb rice and
                                season vegetables***</h4>
                        </center>

                    </div>

                    <section id="GOAN CUISINE"></section>
                    <h2>GOAN CUISINE</h2>

                    <div class="items">
                        <div class="price">
                            <h3>250/270/300/330</h3>
                        </div>
                        <div class="name">
                            <h3>Vindaloo</h3>
                        </div>
                        <div class="choice">
                            <h3>Chicken / Beef / Pork / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>
                                (Ginger & garlic in the sauce made with cardamom, fenugreek, cinnamon,black
                                peppercorns, dry red
                                chillies
                                &
                                blend with traditional vinegar.)</h3>
                        </div>
                    </div>



                    <div class="items">
                        <div class="price">
                            <h3>250/270/330/330</h3>
                        </div>
                        <div class="name">
                            <h3>Chilly Fry </h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Beef / Prawns / Squids </h3>
                        </div>

                        <div class="decr">
                            <h3>
                                (A very popular Goan dish with sauteed sliced onions, bell peppers, tomatoes, green
                                chilies, ginger,
                                garlic,
                                coriander and spices)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>250/270/330</h3>
                        </div>
                        <div class="name">
                            <h3>Xacutti</h3>
                        </div>
                        <div class="choice">
                            <h3>Chicken / Beef / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Traditional curry cooked with fresh coconut & variety of Goan spices)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>320/330</h3>
                        </div>
                        <div class="name">
                            <h3>Traditional Goan Kodi</h3>
                        </div>
                        <div class="choice">
                            <h3>Fish / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Authentic Goan curry with fresh coconut, Kashmiri chilies and variety of herbs &
                                spices. Served with
                                Basmati Rice)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>280</h3>
                        </div>
                        <div class="name">
                            <h3>Goan Pork sausages Chilly Fry</h3>
                        </div>

                        <div class="decr">
                            <h3>(Traditional Goon sausages made by our local butcher cooked in classic Goan style)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>500</h3>
                        </div>
                        <div class="name">
                            <h3>Rawa Fry King fish steak</h3>
                        </div>

                        <div class="decr">
                            <h3>(Pan fried Goan spiced king fish steak rolled in rice flour and semolina)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>500</h3>
                        </div>
                        <div class="name">
                            <h3>Fish Masala Fry</h3>
                        </div>

                        <div class="decr">
                            <h3>(Pan fried Goan king fish in a masala blend of chilies, turmeric, ginger, garlic,
                                coriander &
                                fenugreek
                                seeds.)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>330</h3>
                        </div>
                        <div class="name">
                            <h3>Prawns Rawa Fry</h3>
                        </div>

                        <div class="decr">
                            <h3>(Pan fried king prawns rolled in rice flour and semolina.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>as per size</h3>
                        </div>
                        <div class="name">
                            <h3>Pomfert Masala Fry</h3>
                        </div>

                        <div class="decr">
                            <h3>(Pan fried whole pomfret filled with homemade red chili masala. House specialty)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>330</h3>
                        </div>
                        <div class="name">
                            <h3>Squids cooked your way</h3>
                        </div>

                        <div class="decr">
                            <h3> (Masala Fry, Batter fried, Garlic & butter)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250/340</h3>
                        </div>
                        <div class="name">
                            <h3>Tikka</h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Diced and spiced, slow grilled over a gentle charcoal fire in the tandoor. Served
                                with salad and
                                fresh
                                natural Chutney Sauces.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250/200</h3>
                        </div>
                        <div class="name">
                            <h3>Shaslik</h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Paneer </h3>
                        </div>
                        <div class="decr">
                            <h3>(Tikka, green Capsicum, Tomatoes and Onions cooked in clay oven to produce exotic
                                taste.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>320</h3>
                        </div>
                        <div class="name">
                            <h3>Stuffed Mushrooms</h3>
                        </div>

                        <div class="decr">
                            <h3>(Mushrooms with melted cheese, garlic, spinach and fresh cream.)
                            </h3>
                        </div>
                    </div>

                    <section id="PASTA"></section>
                    <H2>PASTA</h2>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Spaghetti Meatballs</h3>
                        </div>

                        <div class="decr">
                            <h3>(An Italian classic with homemade beef meatballs and aromatic chili sauce.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>380/400</h3>
                        </div>
                        <div class="name">
                            <h3>Pasta Alfredo </h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Silky smooth and creamy sauce made from butter, cream and cheese.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>400</h3>
                        </div>
                        <div class="name">
                            <h3>Penne Carbonara </h3>
                        </div>

                        <div class="decr">
                            <h3>(Pasta with sliced bacon, egg yolk and leeks, tossed in a spectacular
                                garlic cream sauce)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>290</h3>
                        </div>
                        <div class="name">
                            <h3>Veg Pasta </h3>
                        </div>
                        <div class="choice">
                            <h3>(Creamy or Tomato Sauce)</h3>
                        </div>
                        <div class="decr">
                            <h3> (Fresh vegetable served in a rich creamy or tomato sauce.)
                            </h3>
                        </div>
                    </div>

                    <section id="Pizza"></section>
                    <h2>Pizza</h2>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Vegetable Pizza </h3>
                        </div>

                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Margherita Pizza </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>550</h3>
                        </div>
                        <div class="name">
                            <h3>BBQ Chicken Pizza
                            </h3>
                        </div>

                    </div>

                    <section id="FROM THE GRILL"></section>
                    <h2>FROM THE GRILL</h2>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Classic beef steak</h3>
                        </div>

                        <div class="decr">
                            <h3>(Delicate cut of beef served with roasted vegetables and steak sauce.)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Texas Country Style Beef Steak</h3>
                        </div>

                        <div class="decr">
                            <h3>(Our take of the Classic Texas beef steak grilled with homemade rub.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>490/460</h3>
                        </div>
                        <div class="name">
                            <h3>Mediterranean Herb Steak</h3>
                        </div>
                        <div class="choice">
                            <h3> Beef/Chicken </h3>
                        </div>
                        <div class="decr">
                            <h3>(Aromatic blend of Rosemary and thyme, with a rich flavor of roasted garlic and
                                pepper, topped with a
                                tab of
                                homemade herb compound butter and choice of your side.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Skillet Garlic Butter Chicken Steak with Bacon </h3>
                        </div>

                        <div class="decr">
                            <h3>(Chicken wrapped in a bacon, pan seared with garlic, butter and thyme.cooked
                                to perfection)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>480</h3>
                        </div>
                        <div class="name">
                            <h3>Stuffed Chicken Breast</h3>
                        </div>

                        <div class="decr">
                            <h3>(Juicy boneless chicken breast, stuffed with fresh baby spinach and a blend of
                                garlic infusion)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Asian Grilled Pork Chops</h3>
                        </div>

                        <div class="decr">
                            <h3>(Grilled Asian-Style BBQ Glazed Pork Chops flavored with soy sauce, Worcestershire
                                Sauce, garlic and
                                basil
                                leaves.)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Cottage Cheese Steak</h3>
                        </div>

                        <div class="decr">
                            <h3>(Cottage Cheese stuffed with fresh baby spinach & a blend of garlic
                                infusion)<br><br></h3>
                        </div>

                        <center>
                            <h4>***Served with a choice of fries or potato or herb rice and seasonal vegetable***
                            </h4>
                        </center>
                    </div>

                    <section id="INDO- CHINESE"></section>
                    <h2>INDO- CHINESE</h2>

                    <div class="items">
                        <div class="price">
                            <h3>230/280</h3>
                        </div>
                        <div class="name">
                            <h3>Szechwan</h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Diced Chicken or Prawns combined with Capsicum, Mushrooms & Onions, tossed with dry
                                red Chilies and
                                Szechwan oil.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220/280</h3>
                        </div>
                        <div class="name">
                            <h3>Chili</h3>
                        </div>
                        <div class="choice">
                            <h3> Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(Fusion of Oriental & Indian style, using hot Chinese chill & soy sauce.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>180/220/250</h3>
                        </div>
                        <div class="name">
                            <h3>Manchurian</h3>
                        </div>
                        <div class="choice">
                            <h3> Veg / Chicken / Prawns </h3>
                        </div>
                        <div class="decr">
                            <h3>(An Indo-Chinese sauce of green chilies, ginger & garlic base.)</h3>
                        </div>
                    </div>

                    <section id="INDO-CHINESE NOODLES"></section>
                    <h2>INDO-CHINESE NOODLES </h2>

                    <div class="items">
                        <div class="price">
                            <h3>190/200/250/270</h3>
                        </div>
                        <div class="name">
                            <h3>Hakka Noodles </h3>
                        </div>
                        <div class="choice">
                            <h3>Veg / Chicken / Prawns / Mix</h3>
                        </div>
                        <div class="decr">
                            <h3>(Indo-Chinese style oriental noodles prepared in a wok,using Soy Sauce & your choice
                                of fillings.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>190/200/250/270</h3>
                        </div>
                        <div class="name">
                            <h3>Szechwan Noodles</h3>
                        </div>
                        <div class="choice">
                            <h3>Veg / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Uniquely balanced fiery combination of thin egg noodles and vegetables with your
                                choice of filling.)
                            </h3>
                        </div>
                    </div>

                    <section id="INDIAN CUISINE"></section>
                    <h2>INDIAN CUISINE</h2>


                    <div class="items">
                        <div class="price">
                            <h3>270</h3>
                        </div>
                        <div class="name">
                            <h3>Murg Makhanwala</h3>
                        </div>

                        <div class="decr">
                            <h3>(Clay oven charred chicken morsels bathed in rich Tomato Gravy finished with cream
                                and butter. Known
                                as
                                butter chicken in the western world)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Chicken Masala</h3>
                        </div>

                        <div class="decr">
                            <h3>(Tender bite-sized cubes of Chicken in golden-brown spicy Gravy-not too hot, not too
                                mild.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Chicken Dopiaza</h3>
                        </div>

                        <div class="decr">
                            <h3>(Abundance of onions are added to the medium spiced thick Sauce to create a very
                                savory dish tempered
                                by
                                a
                                hint of herbal aromatics; garnished with fried onions and tomatoes.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Hyderabadi Chicken</h3>
                        </div>

                        <div class="decr">
                            <h3>(Pieces of Chicken simmered in yogurt, pickled spices, tomato and fresh coriander.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>280/330</h3>
                        </div>
                        <div class="name">
                            <h3>Tikka Masala</h3>
                        </div>
                        <div class="choice">
                            <h3>Chicken/Prawn</h3>
                        </div>
                        <div class="decr">
                            <h3>(Chicken or Prawns tikka cooked in a mild creamy sauce. A National favorite.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>180/250/330</h3>
                        </div>
                        <div class="name">
                            <h3>Shai Korma</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetable/Chicken/Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Cooked with creamed coconut, ground cashew nuts and fresh cream, This dish is mild
                                in nature with a
                                warming, subtle taste. Often a good choice as an introduction to British Indian
                                food.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>180/250/330</h3>
                        </div>
                        <div class="name">
                            <h3>Balti</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetable/Chicken/Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3> (Authentic dish cooked with fresh tomato puree, onions, bell peppers and spices in
                                a rich thick
                                sauce.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>180/250/330</h3>
                        </div>
                        <div class="name">
                            <h3>Jalfrezi</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetable/Chicken/Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Morsels of diced Chicken or fresh Prawns cooked in a spicy blend of Tomatoes, fresh
                                green Chillies,
                                Onions
                                and mixed Spices. Garnished with generous sprinkling of fresh Coriander.)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>250/330</h3>
                        </div>
                        <div class="name">
                            <h3>Rogan Josh</h3>
                        </div>
                        <div class="choice">
                            <h3>Chicken/Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Originated in Kashmir at the time of Moghul Emperors. Tender pieces of
                                Chicken/Mutton/Prawns cooked
                                in
                                a
                                colorful glazed tomatoes, garlic and Herbs, and delicately flavored with aromatic
                                whole spices.)</h3>
                        </div>
                    </div>




                    <div class="items">
                        <div class="price">
                            <h3>250/330</h3>
                        </div>
                        <div class="name">
                            <h3>Kadai</h3>
                        </div>
                        <div class="choice">
                            <h3>Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Medium strength curry cooked with green peppers, onions, exotic herbs & spices.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Egg Masala</h3>
                        </div>

                        <div class="decr">
                            <h3>(Boiled Egg saut ed with Indian spice Gravy tinged with bell peppers and garnished
                                with coriander.)
                            </h3>
                        </div>
                    </div>

                    <section id="INDIAN VEGETARIAN"></section>
                    <h2>INDIAN VEGETARIAN </h2>

                    <div class="items">
                        <div class="price">
                            <h3>140</h3>
                        </div>
                        <div class="name">
                            <h3>Daal Fry</h3>
                        </div>

                        <div class="decr">
                            <h3>(Finest lentils cooked on a slow fire, mixed with ginger,garlic and fresh coriander)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>160</h3>
                        </div>
                        <div class="name">
                            <h3>Daal Tadka</h3>
                        </div>

                        <div class="decr">
                            <h3>(A wonderful dish of yellow Lentils tempered with a sprinkling of coriander leaves,
                                dry red chilies,
                                garlic
                                and cumin Seeds.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>160</h3>
                        </div>
                        <div class="name">
                            <h3>Aloo Gobi</h3>
                        </div>

                        <div class="decr">
                            <h3>(Cauliflower florets and potatoes cooked in a dry Sauce With our special blend of
                                roasted Spices.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>160</h3>
                        </div>
                        <div class="name">
                            <h3>Aloo Jeera</h3>
                        </div>

                        <div class="decr">
                            <h3>(Cubes of potatoes Stir-Fried with cumin seeds, red chili flakes and special spice
                                mix.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Panneer Mattar</h3>
                        </div>

                        <div class="decr">
                            <h3>(Indian cottage cheese cooked with green peas in a light sauce of yogurt, onions,
                                tomatoes, ginger,
                                garlic
                                and spices.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Palak Paneer</h3>
                        </div>

                        <div class="decr">
                            <h3>(Spinach cooked with cubes of paneer, delicately spiced and garnished in a cream
                                based tomato sauce.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>230</h3>
                        </div>
                        <div class="name">
                            <h3>Paneer Tikka Masala</h3>
                        </div>

                        <div class="decr">
                            <h3>(Cottage Cheese Tikka cooked in a mild creamy tomato sauce.)</h3>
                        </div>
                    </div>

                    <section id="FROM THE TANDOOR"></section>
                    <h2>FROM THE TANDOOR</h2>
                    <div class="items">
                        <div class="price">
                            <h3>270/500</h3>
                        </div>
                        <div class="name">
                            <h3>Tandoori Chicken</h3>
                        </div>
                        <div class="choice">
                            <h3>Half / Full</h3>
                        </div>
                        <div class="decr">
                            <h3>(Chicken on the bone marinated in spices and yogurt, barbecued on a skewer in an
                                Indian oven.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>270</h3>
                        </div>
                        <div class="name">
                            <h3>Rehsmi Kebab</h3>
                        </div>

                        <div class="decr">
                            <h3>(Breast pieces of Chicken marinated in homemade spices and roasted in tandoor oven.)
                            </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>270</h3>
                        </div>
                        <div class="name">
                            <h3>Tagdi Kebab</h3>
                        </div>

                        <div class="decr">
                            <h3>(Chicken Drumsticks in a delicate pickling marinade.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>270</h3>
                        </div>
                        <div class="name">
                            <h3>Malai Kebab</h3>
                        </div>

                        <div class="decr">
                            <h3>(Chicken marinated with aromatic spices and thick yogurt, baked in clay oven.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>290</h3>
                        </div>
                        <div class="name">
                            <h3>Garlic Cheese Kebab</h3>
                        </div>

                        <div class="decr">
                            <h3>(Chicken marinated in garlic, fresh coriander, cooked in the clay oven topped with
                                Cheese.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>2000</h3>
                        </div>
                        <div class="name">
                            <h3>Tandoori Grill (serves two)</h3>
                        </div>

                        <div class="decr">
                            <h3>(Half tandoori chicken, chicken tikka, chicken kabab, paneer tikko, tandoori prawns
                                and fish tikka.
                                Served
                                with jeera rice or pilau rice, naan bread and side salad.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>4700</h3>
                        </div>
                        <div class="name">
                            <h3>Tandoori Seafood platter (serves two)</h3>
                        </div>
                    </div>

                    <section id="RICE"></section>
                    <h2>RICE</h2>

                    <div class="items">
                        <div class="price">
                            <h3>100</h3>
                        </div>
                        <div class="name">
                            <h3>Steamed Rice</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>140</h3>
                        </div>
                        <div class="name">
                            <h3>Jeera Rice</h3>
                        </div>

                        <div class="decr">
                            <h3>(North Indian style Rice. Rice cooked and flavored with cumin seeds.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>140/160/180/200</h3>
                        </div>
                        <div class="name">
                            <h3>Fried Rice</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetable / chicken / Prawns / Mix</h3>
                        </div>
                        <div class="decr">
                            <h3>(Indo-Chinese style fried Rice, with of mix Veg, tossed in Soy Sauce.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150/170/190</h3>
                        </div>
                        <div class="name">
                            <h3>Schezwan Rice</h3>
                        </div>
                        <div class="choice">
                            <h3>Veg / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3>(Indo-Chinese style fried rice made using schezwan sauce.)
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>140</h3>
                        </div>
                        <div class="name">
                            <h3>Egg Fried Rice</h3>
                        </div>

                        <div class="decr">
                            <h3>(Indo-Chinese style fried Rice, Egg threading tossed in soy sauce.)</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>240/330/360</h3>
                        </div>
                        <div class="name">
                            <h3>Biryani</h3>
                        </div>
                        <div class="choice">
                            <h3>Veg / Chicken / Prawns</h3>
                        </div>
                        <div class="decr">
                            <h3> (A Rich and Flavorful Layered Indian Dish Long-grained rice flavored with exotic
                                spices, such as
                                saffron,
                                is layered with lamb, chicken, fish, or vegetables, and a thick gravy.)</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>350</h3>
                        </div>
                        <div class="name">
                            <h3>Chicken Tikka Biryani</h3>
                        </div>

                        <div class="decr">
                            <h3>(Basmati rice cooked with pieces of chicken tikka in dum method, served with and
                                raita.)</h3>
                        </div>
                    </div>

                    <section id="INDIAN BREADS"></section>
                    <h2>INDIAN BREADS</h2>

                    <div class="items">
                        <div class="price">
                            <h3>20/30</h3>
                        </div>
                        <div class="name">
                            <h3>Tandoori Roti</h3>
                        </div>
                        <div class="choice">
                            <h3>Plain/Butter</h3>
                        </div>

                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>50/60</h3>
                        </div>
                        <div class="name">
                            <h3>Naan</h3>
                        </div>
                        <div class="choice">
                            <h3>Plain/Butter</h3>
                        </div>

                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Garlic Cheese Naan </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Cheese Onion Naan</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Chilly Cheese Naan </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Peshawari Naan</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80/140/160</h3>
                        </div>
                        <div class="name">
                            <h3>Paratha</h3>
                        </div>
                        <div class="choice">
                            <h3>Vegetable / Chicken / Prawns</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>100</h3>
                        </div>
                        <div class="name">
                            <h3>Aloo Paratha</h3>
                        </div>
                    </div>

                    <section id="DESSERTS"></section>
                    <h2>DESSERTS</h2>

                    <div class="items">
                        <div class="price">
                            <h3>160</h3>
                        </div>
                        <div class="name">
                            <h3>Fruit Salad with Ice-Cream</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>170</h3>
                        </div>
                        <div class="name">
                            <h3>Serradura</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Ice Creams</h3>
                        </div>
                        <div class="choice">
                            <h3>Vanilla / Strawberry / Butter Scotch</h3>
                        </div>
                    </div> -->
                </div>




                <div class="drinks">

                    <?php
                        if($drinkscategory){
                            foreach($drinkscategory as $dcat){
                                echo "<section id='dcat-".$dcat->id."'></section>";
                                echo "<h2>". $dcat->name ." ". $dcat->russian_name ."</h2>";
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
                            <div class="name">
                                <h3><?= $drink->russian_name ?></h3>
                            </div>
                            <!-- <div class="choice">
                                <h3>Vegetarian / Chicken / Prawns</h3>
                            </div> -->
                            <!-- <div class="decr">
                                <h3><?= $drink->description ?></h3>
                            </div> -->
                        </div>
                    <?php
                                    }
                                }
                            }
                        }
                    ?>

                    <!-- <section id="MINERALS"></section>
                    <h2>MINERALS</h2>

                    <div class="items">
                        <div class="price">
                            <h3>20</h3>
                        </div>
                        <div class="name">
                            <h3>Soda Water</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>30</h3>
                        </div>
                        <div class="name">
                            <h3>Soft Drinks</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>30</h3>
                        </div>
                        <div class="name">
                            <h3>Mineral Water</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>50</h3>
                        </div>
                        <div class="name">
                            <h3>Fresh Lime Soda</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Canned Juice</h3>
                        </div>
                        <div class="choice">
                            <h3>( Orange , Pineapple , Mango )</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>70</h3>
                        </div>
                        <div class="name">
                            <h3>Diet Coke</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Tonic Water</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>100</h3>
                        </div>
                        <div class="name">
                            <h3>Seasonal Fresh Fruit Juice</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>130</h3>
                        </div>
                        <div class="name">
                            <h3>Ginger Ale</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Red Bull</h3>
                        </div>
                    </div>

                    <section id="BEER"></section>
                    <h2>BEER (330ML) </h2>

                    <div class="items">
                        <div class="price">
                            <h3>100</h3>
                        </div>
                        <div class="name">
                            <h3>Budweiser</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>90</h3>
                        </div>
                        <div class="name">
                            <h3>Kingfisher</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Corona</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>170</h3>
                        </div>
                        <div class="name">
                            <h3>Heineken</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Goo Brewing People's </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>120</h3>
                        </div>
                        <div class="name">
                            <h3>Becks Ice</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>120</h3>
                        </div>
                        <div class="name">
                            <h3>Konigs</h3>
                        </div>
                    </div>

                    <section id="ALCOPOP'S"></section>
                    <h2>ALCOPOP'S (30ML) </h2>

                    <div class="items">
                        <div class="price">
                            <h3>230</h3>
                        </div>
                        <div class="name">
                            <h3>Aperol</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Martini Rosso</h3>
                        </div>
                    </div>


                    <h2>APERITIFS (30ML) </h2>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>BACARDI BREEZER</h3>
                        </div>
                        <div class="choice">
                            <h3>( Cranberry , Wild berry , Lime )</h3>
                        </div>
                    </div>

                    <section id="RUM"></section>
                    <h2>RUM (30ML) </h2>

                    <div class="items">
                        <div class="price">
                            <h3>60</h3>
                        </div>
                        <div class="name">
                            <h3>Mc Dowell's White Rum </h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>70</h3>
                        </div>
                        <div class="name">
                            <h3>Old Monk</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Old Monk 12 yr</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>70</h3>
                        </div>
                        <div class="name">
                            <h3>Bacardi White Rum </h3>
                        </div>
                    </div>
                    <div class="items">
                        <div class="price">
                            <h3>40</h3>
                        </div>
                        <div class="name">
                            <h3>Barcardi Black</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Malibu</h3>
                        </div>
                    </div>

                    <section id="GIN"></section>
                    <h2>GIN (30ML) </h2>

                    <div class="items">
                        <div class="price">
                            <h3>40</h3>
                        </div>
                        <div class="name">
                            <h3>Blue Ribband</h3>
                        </div>
                    </div>



                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Greater Than </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>180</h3>
                        </div>
                        <div class="name">
                            <h3>Strangers & Sons</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>190</h3>
                        </div>
                        <div class="name">
                            <h3>Bombay Shaphire </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>160</h3>
                        </div>
                        <div class="name">
                            <h3>Tanquery</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>170</h3>
                        </div>
                        <div class="name">
                            <h3>Hapusa</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>300</h3>
                        </div>
                        <div class="name">
                            <h3>Hendricks</h3>
                        </div>
                    </div>

                    <section id="VODKA"></section>
                    <h2>VODKA (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>40</h3>
                        </div>
                        <div class="name">
                            <h3>Romanov</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>70</h3>
                        </div>
                        <div class="name">
                            <h3>Smirnoff</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Absolut</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Grey Goose</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Ciroc</h3>
                        </div>
                    </div>

                    <section id="TEQUILA"></section>
                    <h2>TEQUILA (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>120</h3>
                        </div>
                        <div class="name">
                            <h3>Des 51</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Sauza Silver </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Sauza Gold</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>El Jimador Reposado </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>500</h3>
                        </div>
                        <div class="name">
                            <h3>Patron Silver</h3>
                        </div>
                    </div>

                    <section id="GOAN FENI"></section>
                    <h2>GOAN FENI (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>60</h3>
                        </div>
                        <div class="name">
                            <h3>Cazulo Premium Cashew Feni</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>60</h3>
                        </div>
                        <div class="name">
                            <h3>Cazulo Premium Coconut Feni
                            </h3>
                        </div>
                    </div>

                    <section id="BRANDY/COGNAC"></section>
                    <h2>BRANDY/COGNAC (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>40</h3>
                        </div>
                        <div class="name">
                            <h3>Honey Bee </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Hennessy VS</h3>
                        </div>
                    </div>

                    <section id="LIQUEUR"></section>
                    <h2>LIQUEUR (30ML) </h2>


                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Baileys Irish Cream </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Jagermeister</h3>
                        </div>
                    </div>

                    <section id="PORT"></section>
                    <h2>PORT</h2>

                    <div class="items">
                        <div class="price">
                            <h3>600</h3>
                        </div>
                        <div class="name">
                            <h3>Vinacola Port Wine (Bottle) </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>180</h3>
                        </div>
                        <div class="name">
                            <h3>Vinacola Port Wine Glass</h3>
                        </div>
                    </div>

                    <section id="WHISKEY"></section>
                    <h2>WHISKEY-SCOTCH (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>80</h3>
                        </div>
                        <div class="name">
                            <h3>Blenders Pride</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>100</h3>
                        </div>
                        <div class="name">
                            <h3>Vat 69</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>150</h3>
                        </div>
                        <div class="name">
                            <h3>Black and White</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>130</h3>
                        </div>
                        <div class="name">
                            <h3>Teachers</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Johnnie Walker Black Label </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Chivas Regal 12 yo</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>140</h3>
                        </div>
                        <div class="name">
                            <h3>100 Piper's</h3>
                        </div>
                    </div>

                    <h2>WHISKEY-WORLD (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>200</h3>
                        </div>
                        <div class="name">
                            <h3>Jim Beam</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>Jameson</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>300</h3>
                        </div>
                        <div class="name">
                            <h3>Paul John</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>240</h3>
                        </div>
                        <div class="name">
                            <h3>Jack Daniels</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>250</h3>
                        </div>
                        <div class="name">
                            <h3>Enso Japanese Whisky</h3>
                        </div>
                    </div>

                    <h2>WHISKEY-SINGLE MALT (30ML)</h2>

                    <div class="items">
                        <div class="price">
                            <h3>400</h3>
                        </div>
                        <div class="name">
                            <h3>Glenfidich 12yo</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>500</h3>
                        </div>
                        <div class="name">
                            <h3>Laphroaig 10yo</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>450</h3>
                        </div>
                        <div class="name">
                            <h3>Talisker 10yo</h3>
                        </div>
                    </div>


                    <section id="WINES"></section>
                    <h2>SULA WINES</h2><br><br>

                    <h2>WHITE WINES</h2>

                    <div class="items">
                        <div class="price">
                            <h3>250/850</h3>
                        </div>
                        <div class="name">
                            <h3>MADERA WHITE</h3>
                        </div>
                        <div class="decr">
                            <h3>Made from a blend of classic as well as Indian grapes, Madera is a young, fruity and
                                easy drinking
                                win.
                                The lable is inspired by Wrali, a local tribal art form depicting rural tribe.
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>360/1300</h3>
                        </div>
                        <div class="name">
                            <h3>SAUVIGNON BLANC</h3>
                        </div>
                        <div class="decr">
                            <h3>Herbaceous, crisp and dry, with aromas of bell peppers, intermingled with tropical
                                fruits like passion
                                fruit and gooseberry (amla) with a racy, zingy finish.</h3>
                        </div>
                    </div>

                    <h2>RED WINES</h2>

                    <div class="items">
                        <div class="price">
                            <h3>250/850</h3>
                        </div>
                        <div class="name">
                            <h3>MADERA RED</h3>
                        </div>
                        <div class="decr">
                            <h3>Made from a blend of classic as well as Indian grapes, Madera is a young, fruity and
                                easy drinking
                                win.
                                The lable is inspired by Wrali, a local tribal art form depicting rural tribe.</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>380/1400</h3>
                        </div>
                        <div class="name">
                            <h3>SHIRAZ CABERNET</h3>
                        </div>
                        <div class="decr">
                            <h3>A smooth, medium-bodied red wine accentuated by ripe cherry and plum notes, black
                                pepper aromas and
                                soft, silky tannins. A food friendly wine, also great to drink on its own.
                            </h3>
                        </div>
                    </div>

                    <h2>ROSE WINES</h2>

                    <div class="items">
                        <div class="price">
                            <h3>350/1200</h3>
                        </div>
                        <div class="name">
                            <h3>ZINFANDEL</h3>
                        </div>
                        <div class="decr">
                            <h3>Zinfandel Rose is ripe, fresh and fruity, with abundant aromas of cranberries and
                                fresh strawberries.
                                A
                                versatile "anytime" wine great for picnics, parties and hot summer days. Lovely with
                                poultry and spicy
                                dishes.
                            </h3>
                        </div>
                    </div>

                    <section id="SPARKLING WINES BY THE BOTTLE"></section>
                    <h2>SPARKLING WINES BY THE BOTTLE</h2>

                    <div class="items">
                        <div class="price">
                            <h3>1600</h3>
                        </div>
                        <div class="name">
                            <h3>NOI (IND)</h3>
                        </div>
                        <div class="decr">
                            <h3>Vibrant and fresh exotic fruit, crisp and clean with tangy bubbles.</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>1790</h3>
                        </div>
                        <div class="name">
                            <h3>Sula Brut (IND)</h3>
                        </div>
                        <div class="decr">
                            <h3>A complex blend of Chenin Blanc, Chardonnay, Viognier, Pinot Noir, Riesling and
                                Shiraz.</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>2100</h3>
                        </div>
                        <div class="name">
                            <h3>CHANDON Brut(IND)</h3>
                        </div>

                        <div class="decr">
                            <h3>A bright, fresh fruit bouquet of citrus blossom with green apple and tropical fruits
                                with hints of
                                vanilla.</h3>
                        </div>
                    </div>


                    <div class="items">
                        <div class="price">
                            <h3>2800</h3>
                        </div>
                        <div class="name">
                            <h3>Martini Asti Brut (ITA)</h3>
                        </div>
                        <div class="decr">
                            <h3>Light green gold colour, delicate bubbles, lively sparkle; flowery aroma with
                                apricots, peaches and
                                lemon candy aromas; balanced acidity, sweet fruit flavour and finish.
                            </h3>
                        </div>
                    </div>


                    <section id="COCKTAIL"></section>
                    <h2>TANGGIES- COCKTAIL</h2>

                    <div class="items">
                        <div class="price">
                            <h3>350</h3>
                        </div>
                        <div class="name">
                            <h3>PINACOLADA</h3>
                        </div>
                        <div class="decr">
                            <h3>White Rum, Pineapple Juice, Fresh Juice
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>350</h3>
                        </div>
                        <div class="name">
                            <h3>PASSION MOJITO</h3>
                        </div>
                        <div class="decr">
                            <h3>Bacardi Rum with fresh mint leaves, passion puree, lime juice muddled and served
                                with a splash of
                                soda.
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>350</h3>
                        </div>
                        <div class="name">
                            <h3>CONVENT GARDEN</h3>
                        </div>
                        <div class="decr">
                            <h3>Gin with Elder-flower cordial, lemon and apple juice. About as laid back as it gets.
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>380</h3>
                        </div>
                        <div class="name">
                            <h3>RHUBARB BLUSH</h3>
                        </div>
                        <div class="decr">
                            <h3>Gin, Lime Mix, Aperol, Rhubarb Bitters.</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>380</h3>
                        </div>
                        <div class="name">
                            <h3>PEACHY RITA</h3>
                        </div>
                        <div class="decr">
                            <h3>Tequila, Orange Liquor, Peach Puree, Fresh Lime Juice</h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>380</h3>
                        </div>
                        <div class="name">
                            <h3>FENI TIKI</h3>
                        </div>
                        <div class="decr">
                            <h3>Feni, Lime Juice, Orgeat Syrup, Dash Reychaud Bitters.
                            </h3>
                        </div>
                    </div>

                    <section id="MINERALS"></section>
                    <h2>NON-ALCOHOLIC</h2>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>MANGO LEMONADE</h3>
                        </div>
                        <div class="decr">
                            <h3>Fresh Lemonade and Mango Puree topped with aerated water.
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>STRAWBERRY LEMONADE</h3>
                        </div>
                        <div class="decr">
                            <h3>Fresh Lemonade and Strawberry Puree topped with aerated water.
                            </h3>
                        </div>
                    </div>

                    <div class="items">
                        <div class="price">
                            <h3>220</h3>
                        </div>
                        <div class="name">
                            <h3>FRUIT PUNCH</h3>
                        </div>
                        <div class="decr">
                            <h3>Mango, Orange and Pineapple with Grenadine syrup.</h3>
                        </div>
                    </div> -->
                </div>
        </id>
    </div>


    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
</div>
