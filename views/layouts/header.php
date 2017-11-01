<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>First site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="/template/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="/template/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
    <link href="/template/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
    <link href="/template/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="/template/ico/favicon.ico">
</head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-tumblr"></span></a>
                </div>

                <?php if (User::isGuest()): ?>
                    <h7> Привет, Гость!</h7>
                    <a href="/user/register"><span class="icon-edit"></span> Регистрация </a>
                    <a href="/user/login"><span class="icon-lock"></span> Вход </a>
                <?php else: ?>
                    <h7> Привет, <?= $user['name']; ?></h7>
                    <a href="/cabinet/"><span class="icon-user"></span> Мой акаунт</a>
                    <a href="/user/logout"><span class="icon-unlock"></span> Выход </a>
                <?php endif; ?>
                <a href="/contacts"><span class="icon-envelope"></span> Обратная связь</a>
                <a href="/cart/"><span class="fa fa-shopping-cart icon-shopping-cart"></span> (<?php echo Cart::countItems(); ?>) Корзина -
                    <span
                            class="badge badge-warning"> $448.42</span></a>
            </div>
        </div>
    </div>
</div>

<!--
Lower Header Section
-->
<div class="container">
    <div id="gototop"></div>
    <header id="header">
        <div class="row">
            <div class="span4">
                <h1>
                    <a class="logo" href="index.php"><span>Twitter Bootstrap ecommerce template</span>
                        <img src="/template/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
                    </a>
                </h1>
            </div>
            <div class="span4">
                <div class="offerNoteWrapper">
                    <h1 class="dotmark">
                        <i class="icon-cut"></i>
                        Twitter Bootstrap shopping cart HTML template is available @ $14
                    </h1>
                </div>
            </div>
            <div class="span4 alignR">
                <p><br> <strong> Support (24/7) : 0800 1234 678 </strong><br><br></p>
                <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
                <span class="btn btn-warning btn-mini">$</span>
                <span class="btn btn-mini">&pound;</span>
                <span class="btn btn-mini">&euro;</span>
            </div>
        </div>
    </header>

    <!--
Navigation Bar Section
-->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="/">Главная </a></li>
                        <li class=""><a href="/catalog/">Магазин</a></li>
                        <li class=""><a href="grid-view.html">Каталог товаров</a></li>
                        <li class=""><a href="three-col.html">Three Column</a></li>
                        <li class=""><a href="four-col.html">Four Column</a></li>
                        <li class=""><a href="general.html">General Content</a></li>
                    </ul>
                    <form action="#" class="navbar-search pull-left">
                        <input type="text" placeholder="Search" class="search-query span2">
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--
   Body Section
   -->
