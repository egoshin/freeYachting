<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Архив путешествий";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content traveller-cabin">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h1><?=$namePage;?></h1>
                    </div>
                </div>
                <div class="row btn-block">
                    <div class="col-xs-12 col-sm-8">
                        <div class="search-filter">
                            <a href="<?=SITE_DIR?>skipper-profile.php" class="btn btn-9">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-list.php" class="btn btn-9">Текущие путешествия</a>
                            <a href="<?=SITE_DIR?>travel-archives.php" class="btn btn-9 active">Архив путешествий</a>
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
                                    <div class="row property-story-top">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p>Маршрут: <b>Котор в Черногория</b></p>
                                            <p><b>Адриатическое море / Южная часть</b></p>
                                    	</div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>ИНаличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Повторить путешествие</button>
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
                                    <div class="row property-story-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p>Маршрут: <b>Котор в Черногория</b></p>
                                            <p><b>Адриатическое море / Южная часть</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>ИНаличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Повторить путешествие</button>
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
                                    <div class="row property-story-top">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>Тип путешествия: <b>Отдых</b></p>
                                            <p>Акватория путешествия: <b>Испания</b></p>
                                            <p>Маршрут: <b>Котор в Черногория</b></p>
                                            <p><b>Адриатическое море / Южная часть</b></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p><b>Способ оплаты услуг:</b></p>
                                            <p>ИНаличными на месте / или</p>
                                            <p>предоплата по карте ХХ %</p>
                                        </div>
                                    </div>
                                    <p class="story-cost blue">За сутки: <del>405</del> <b>380 EUR</b></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 btn-story-more">
                                            <button type="button" class="btn btn-3">Повторить путешествие</button>
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