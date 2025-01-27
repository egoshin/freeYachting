<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Главная страница";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
?>
<div class="seawolf-block">
    <div class="choose-block-md visible-sm"></div>
    <div class="container text-center">
        <h2>Стань морским волком</h2>
        <p>
            Значимость этих проблем настолько очевидна, что реализация намеченных <br>
            плановых заданий влечет за собой процесс внедрения и модернизации <br>
            систем массового участия.
        </p>
        <button type="button" class="btn btn-7">Как это работает</button>
        <div class="choose-block-xs visible-xs text-center">
            <a href="#" id="filterXS" class="btn btn-1">Поиск путешествия</a>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 choose-block text-center">
                <div class="filter">
                    <a href="#" class="visible-xs" id="closeFilterXS"><i class="fa fa-times"></i></a>
                    <div class="h1">Выберите путешествие</div>
                    <form action="" method="post" role="form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonType" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Тип путешествия" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Тип путешествия 1</a></li>
                                            <li><a href="#">Тип путешествия 2</a></li>
                                            <li><a href="#">Тип путешествия 3</a></li>
                                            <li><a href="#">Тип путешествия 4</a></li>
                                            <li><a href="#">Тип путешествия 5</a></li>
                                            <li><a href="#">Тип путешествия 6</a></li>
                                            <li><a href="#">Тип путешествия 7</a></li>
                                            <li><a href="#">Тип путешествия 8</a></li>
                                            <li><a href="#">Тип путешествия 9</a></li>
                                            <li><a href="#">Тип путешествия 10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonDate" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Дата путешествия" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonCountry" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Страна путешествия" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Аргентина</a></li>
                                            <li><a href="#">Англия</a></li>
                                            <li><a href="#">Австралия</a></li>
                                            <li><a href="#">Бразилия</a></li>
                                            <li><a href="#">Боливия</a></li>
                                            <li><a href="#">Венесуэла</a></li>
                                            <li><a href="#">Голландия</a></li>
                                            <li><a href="#">Дания</a></li>
                                            <li><a href="#">Ирландия</a></li>
                                            <li><a href="#">Исландия</a></li>
                                            <li><a href="#">Испания</a></li>
                                            <li><a href="#">Италия</a></li>
                                            <li><a href="#">Португалия</a></li>
                                            <li><a href="#">Россия</a></li>
                                            <li><a href="#">США</a></li>
                                            <li><a href="#">Турция</a></li>
                                            <li><a href="#">Таиланд</a></li>
                                            <li><a href="#">Фарерские острова</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonAqwa" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Акватория похода" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Акватория путешествия 1</a></li>
                                            <li><a href="#">Акватория путешествия 2</a></li>
                                            <li><a href="#">Акватория путешествия 3</a></li>
                                            <li><a href="#">Акватория путешествия 4</a></li>
                                            <li><a href="#">Акватория путешествия 5</a></li>
                                            <li><a href="#">Акватория путешествия 6</a></li>
                                            <li><a href="#">Акватория путешествия 7</a></li>
                                            <li><a href="#">Акватория путешествия 8</a></li>
                                            <li><a href="#">Акватория путешествия 9</a></li>
                                            <li><a href="#">Акватория путешествия 10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonNU" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Кол-во участников" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">8</a></li>
                                            <li><a href="#">9</a></li>
                                            <li><a href="#">10</a></li>
                                            <li><a href="#">11</a></li>
                                            <li><a href="#">12</a></li>
                                            <li><a href="#">13</a></li>
                                            <li><a href="#">14</a></li>
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">16</a></li>
                                            <li><a href="#">17</a></li>
                                            <li><a href="#">18</a></li>
                                            <li><a href="#">19</a></li>
                                            <li><a href="#">20</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonNK" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Кол-во 2-х мест. кают" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-offset-2 col-sm-4 col-md-offset-0 col-md-3">
                                <div class="input-group main-select">
                                    <span class="input-group-addon"><div id="addonChild" class="hidden-sm"></div></span>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                           placeholder="Участие детей" aria-describedby="addonType" readonly>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" id="yesChild">Да</a></li>
                                            <li><a href="#" id="noChild">Нет</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="input-group main-select disabled" id="ageChild">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Возраст детей" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-1">Поиск</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container content main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="row">
                <div class="col-xs-12">
                    <?require_once $_SERVER['DOCUMENT_ROOT']."/include/main-inhelp.php";?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?require_once $_SERVER['DOCUMENT_ROOT']."/include/main-carousel1.php";?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?require_once $_SERVER['DOCUMENT_ROOT']."/include/main-carousel2.php";?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 banner-xs">
            <?require_once $_SERVER['DOCUMENT_ROOT']."/include/banners.php";?>
        </div>
    </div>
</div>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/seoblock.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/footer.php";
?>