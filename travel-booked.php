<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Забронированные путешествия";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content traveller-booked">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row btn-block">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?=$namePage;?></h1>
                        <div class="search-filter">
                            <a href="<?=SITE_DIR?>traveller-profile.php" class="btn btn-9">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-story.php" class="btn btn-9">История путешествий</a>
                            <a href="<?=SITE_DIR?>travel-booked.php" class="btn btn-9 active">Забронированные путешествия</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="list-unstyled media-list">
                        <li>
                            <div class="media">
                                <div class="media-left hidden-xs">
                                    <a href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Маршруты из точки "А" в точку "B" </h4>
                                    <div class="important">
                                        <p>
                                            <i class="icon-date"></i> 12 апр - 24 мая &nbsp;&nbsp;
                                            <i class="icon-country"></i> Испания
                                        </p>
                                    </div>
                                    <div class="visible-xs confirmed">
                                        <p><i class="fa fa-check"></i> Подтверждено</p>
                                    </div>
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-story-top">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Рейтинг капитана: <b>5</b></p>
                                            <p>Кол-во свободных мест: <b>7</b></p>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                    	</div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Участники путешествия</b></p>
                                            <p>Иванов Петр, муж., 32 года</p>
                                            <p>Митрошина Юлия жен., 17 лет</p>
                                            <p>Соловей Орлеан, муж., 99 лет</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <a href="<?=SITE_DIR?>yachta-booked.php" class="btn btn-3">Подробнее</a>
                                    	</div>
                                        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 confirmed">
                                        	<p><i class="fa fa-check"></i> Подтверждено</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left hidden-xs">
                                    <a href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Маршруты из точки "А" в точку "B" </h4>
                                    <div class="important">
                                        <p>
                                            <i class="icon-date"></i> 12 апр - 24 мая &nbsp;&nbsp;
                                            <i class="icon-country"></i> Испания
                                        </p>
                                    </div>
                                    <div class="visible-xs confirmed">
                                        <p><i class="fa fa-check"></i> Подтверждено</p>
                                    </div>
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-story-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Рейтинг капитана: <b>5</b></p>
                                            <p>Кол-во свободных мест: <b>7</b></p>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Участники путешествия</b></p>
                                            <p>Иванов Петр, муж., 32 года</p>
                                            <p>Митрошина Юлия жен., 17 лет</p>
                                            <p>Соловей Орлеан, муж., 99 лет</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <a href="<?=SITE_DIR?>yachta-booked.php" class="btn btn-3">Подробнее</a>
                                        </div>
                                        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 confirmed">
                                            <p><i class="fa fa-check"></i> Подтверждено</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left hidden-xs">
                                    <a href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Маршруты из точки "А" в точку "B" </h4>
                                    <div class="important">
                                        <p>
                                            <i class="icon-date"></i> 12 апр - 24 мая &nbsp;&nbsp;
                                            <i class="icon-country"></i> Испания
                                        </p>
                                    </div>
                                    <div class="visible-xs confirmed">
                                        <p><i class="fa fa-check"></i> Подтверждено</p>
                                    </div>
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-story-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Рейтинг капитана: <b>5</b></p>
                                            <p>Кол-во свободных мест: <b>7</b></p>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Участники путешествия</b></p>
                                            <p>Иванов Петр, муж., 32 года</p>
                                            <p>Митрошина Юлия жен., 17 лет</p>
                                            <p>Соловей Орлеан, муж., 99 лет</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <a href="<?=SITE_DIR?>yachta-booked.php" class="btn btn-3">Подробнее</a>
                                        </div>
                                        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 confirmed">
                                            <p><i class="fa fa-check"></i> Подтверждено</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <?require_once $_SERVER['DOCUMENT_ROOT']."/include/pagination.php";?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 banner-xs">
                <?require_once $_SERVER['DOCUMENT_ROOT']."/include/banners.php";?>
            </div>
        </div>
    </div>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/inhelp.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/seoblock.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/footer.php";
?>