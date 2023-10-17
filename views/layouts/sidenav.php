
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl.'/category' ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-utensils"></i></div>
                                Categories
                            </a>

                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl.'/drinks-category' ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-wine-bottle"></i></div>
                                Drinks Categories
                            </a>

                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl.'/items' ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pizza-slice"></i></div>
                                Items
                            </a>

                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl.'/drinks' ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-martini-glass-citrus"></i></i></div>
                                Drinks
                            </a>

                            <a class="nav-link" href="<?= Yii::$app->request->baseUrl.'/users' ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Users
                            </a>


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?=  Yii::$app->user->identity->username ?>
                    </div>
                </nav>
            </div>
