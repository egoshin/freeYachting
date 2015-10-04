<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Список путешествий";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content traveller-cabin">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h1><?=$namePage;?></h1>
                    </div>
                    <div class="col-xs-12 col-sm-5 new-info">
                        <div class="green-cicle">7</div><span>Новых участников</span>
                    </div>
                </div>
                <div class="row btn-block">
                    <div class="col-xs-12 col-sm-8">
                        <div class="search-filter">
                            <a href="<?=SITE_DIR?>skipper-profile.php" class="btn btn-9">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-list.php" class="btn btn-9 active">Текущие путешествия</a>
                            <a href="<?=SITE_DIR?>travel-archives.php" class="btn btn-9">Архив путешествий</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 text-right">
                        <a href="<?=SITE_DIR?>new-travel.php" type="button" class="btn btn-4">Создать новое путешествие</a>
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
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-list-top">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-right0">
                                            <div class="notactive">
                                                <p><i class="fa fa-times"></i> Не активно для продажи</p>
                                            </div>
                                            <div class="confirmed">
                                                <p><i class="fa fa-check"></i> Подтверждено</p>
                                            </div>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p class="story-cost blue hidden-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    	</div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>Наличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                            <p>Забронировано: <b>5</b></p>
                                            <p>Подтверждено: <b>4</b></p>
                                            <p class="red">Ждет подтверждения: <b>1</b></p>
                                            <p>Свободных мест: <b>3</b></p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue visible-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Подробнее</button>
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
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img03.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-list-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-right0">
                                            <div class="yesactive">
                                                <p><i class="fa fa-check"></i> Активно для продажи</p>
                                            </div>
                                            <div class="confirmed">
                                                <p><i class="fa fa-check"></i> Подтверждено</p>
                                            </div>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p class="story-cost blue hidden-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>Наличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                            <p>Забронировано: <b>5</b></p>
                                            <p>Подтверждено: <b>4</b></p>
                                            <p class="red">Ждет подтверждения: <b>1</b></p>
                                            <p>Свободных мест: <b>3</b></p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue visible-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Подробнее</button>
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
                                    <a class="media-left visible-xs" href="#">
                                        <img src="/images/img02.jpg" alt="Маршруты из точки A в точку B" class="img-responsive">
                                    </a>
                                    <div class="row property-list-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-right0">
                                            <div class="notactive">
                                                <p><i class="fa fa-times"></i> Не активно для продажи</p>
                                            </div>
                                            <div class="confirmed">
                                                <p><i class="fa fa-check"></i> Подтверждено</p>
                                            </div>
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p class="story-cost blue hidden-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>Наличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                            <p>Забронировано: <b>5</b></p>
                                            <p>Подтверждено: <b>4</b></p>
                                            <p class="red">Ждет подтверждения: <b>1</b></p>
                                            <p>Свободных мест: <b>3</b></p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue visible-xs">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Подробнее</button>
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