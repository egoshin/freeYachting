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
    <script src="<?=SITE_TEMPLATE_PATH?>js/bootstrap.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/media.match.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/enquire.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/jquery.jcarousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/scrollator.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/script.js"></script>
    <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/html5shiv-printshiv.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>js/ie9/respond.js"></script>
    <![endif]-->
    <link href="<?=SITE_TEMPLATE_PATH?>css/style.min.css" rel="stylesheet">
</head>
<body>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/modal.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/howtowork.php";
?>
    <header role="banner">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle btn-tree" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Выберите пункт меню</span>
                    </button>
                    <a class="navbar-brand" href="<?=SITE_DIR?>">
                        <img src="<?=SITE_TEMPLATE_PATH?>img/logotype.png" alt="FreeYachting">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <a href="#" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-times"></i></a>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?=SITE_DIR?>skipper.php"><i class="fa fa-anchor"></i>Шкиперам</a></li>
                        <li><a href="<?=SITE_DIR?>help.php"><i class="fa fa-life-ring"></i>Помощь</a><div class="visible-lg"></div></li>
                        <li><a href="#" data-toggle="modal" data-target="#modal-login"><i class="fa fa-lock"></i>Личный кабинет</a></li>
                        <li><a href="#"><i class="fa fa-globe"></i>Ru</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>