<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='index, follow' name='robots'>
    <meta name=description content="Компания">
    <meta content='keyword1, keyword2' name='keywords'>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- jQuery -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/bootstrap.min.js"></script>
    <!-- User JavaScript -->
    <script src="<?=SITE_TEMPLATE_PATH?>js/script.js"></script>
    <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv-printshiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/respond.js"></script>
    <![endif]-->
    <!-- Bootstrap CSS -->
    <link href="<?=SITE_TEMPLATE_PATH?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=SITE_TEMPLATE_PATH?>css/font-awesome.min.css" rel="stylesheet">
    <!-- Customize property CSS -->
    <link href="<?=SITE_TEMPLATE_PATH?>css/style.min.css" rel="stylesheet">
</head>
<body>
    <header role="banner">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=SITE_DIR?>">Логотип</a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?=SITE_DIR?>">Главная</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <div class="container" id="breadcrumbs">
        <ol class="breadcrumb">
            <li>
                <a href="<?=SITE_DIR?>">Главная</a>
            </li>
            <li class="active"><?=$namePage?></li>
        </ol>
    </div>
    <!-- Begin page content -->
    <div class="container">
