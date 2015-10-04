<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Создание путешествия";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content bron-travel">
        <div class="row top-block">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <h1><?=$namePage;?></h1>
                    </div>
                </div>
                <div class="row btn-block">
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="search-filter">
                            <a href="<?=SITE_DIR?>skipper-profile.php" class="btn btn-9">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-list.php" class="btn btn-9">Текущие путешествия</a>
                            <a href="<?=SITE_DIR?>travel-archives.php" class="btn btn-9">Архив путешествий</a>
                        </div>
                        <h4 class="hidden-xs hidden-sm">Выбранные и забронированные места на яхте</h4>
                        <br class="visible-xs visible-sm">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 btn-add text-right">
                        <a href="<?=SITE_DIR?>new-travel.php" type="button" class="btn btn-4">Бронирование мест шкипером</a>
                        <br class="visible-xs">
                        <a href="<?=SITE_DIR?>new-travel.php" type="button" class="btn btn-4">Редактирование путешествия</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="visible-xs visible-sm">Выбранные и забронированные места на яхте</h4>
                    </div>
                </div>
                <div class="row yachta-block">
                    <div class="col-xs-12">
                        <ul class="list-unstyled list-inline">
                            <li><div class="round-green"></div> Свободно</li>
                            <li><div class="round-red"></div> Забронировано</li>
                        </ul>
                        <img src="/images/yachts/yacht2.jpg" alt="Яхта" class="img-responsive">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h4>Подтверждение участников путешествия</h4>
                    </div>
                </div>
                <div class="spisok">
                    <ul class="list-unstyled">
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                        <img src="/images/foto/foto1.jpg" alt="Александр Сергеевич">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 text-block">
                                    <p>1 место</p>
                                    <h4>Александр Сергеевич</h4>
                                    <p>Мужчина, 32 года</p>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-right">
                                    <a href="#" type="button" class="btn btn-5">Подтвердить</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-left">
                                    <a href="#" type="button" class="btn btn-6">Отклонить</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                        <img src="/images/foto/foto2.jpg" alt="Александр Сергеевич">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 text-block">
                                    <p>1 место</p>
                                    <h4>Григорий Семенович</h4>
                                    <p>Мужчина, 32 года</p>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-right">
                                    <a href="#" type="button" class="btn btn-5">Подтвердить</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-left">
                                    <a href="#" type="button" class="btn btn-6">Отклонить</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                        <img src="/images/foto/foto3.jpg" alt="Александр Сергеевич">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 text-block">
                                    <p>1 место</p>
                                    <h4>Наталья Семеновна</h4>
                                    <p>Женщина, 32 года</p>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-right">
                                    <a href="#" type="button" class="btn btn-5">Подтвердить</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-left">
                                    <a href="#" type="button" class="btn btn-6">Отклонить</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                        <img src="/images/foto/foto1.jpg" alt="Александр Сергеевич">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 text-block">
                                    <p>1 место</p>
                                    <h4>Александр Сергеевич</h4>
                                    <p>Мужчина, 32 года</p>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-right">
                                    <a href="#" type="button" class="btn btn-5">Подтвердить</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-left">
                                    <a href="#" type="button" class="btn btn-6">Отклонить</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 col-md-1">
                                    <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                        <img src="/images/foto/foto2.jpg" alt="Александр Сергеевич">
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-3 text-block">
                                    <p>1 место</p>
                                    <h4>Григорий Семенович</h4>
                                    <p>Мужчина, 32 года</p>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-right">
                                    <a href="#" type="button" class="btn btn-5">Подтвердить</a>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-2 btn-left">
                                    <a href="#" type="button" class="btn btn-6">Отклонить</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 banner-xs">
                <?require_once $_SERVER['DOCUMENT_ROOT']."/include/banners-bottom.php";?>
            </div>
        </div>
    </div>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/inhelp.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/seoblock.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/footer.php";
?>