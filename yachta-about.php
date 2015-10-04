<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Летний тур по Черногории";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content yachta">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?=$namePage;?></h1>
                    </div>
                </div>
                <div class="row btn-block">
                    <div class="col-xs-12">
                        <div class="search-filter">
                            <button class="btn btn-9 active">1. Обзор путешествия</button><br class="visible-xs">
                            <button class="btn btn-9">2. Бронирование мест</button><br class="visible-xs">
                            <button  class="btn btn-9">3. Оплата</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel2.php";?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 hidden-sm col-md-3">
                        <div class="deliver-small">
                            <p>Дата:</p>
                            <p class="h4">12 апреля — 25 мая 2015</p>
                        </div>
                        <div class="deliver-small">
                            <p>Страна путешествия:</p>
                            <p class="h4">Черногорье</p>
                        </div>
                        <div class="deliver-small">
                            <p>Акватория путешествия:</p>
                            <p class="h4">Акватория путешествия 1</p>
                        </div>
                        <div class="deliver-small">
                            <p>Тип путешествия:</p>
                            <p class="h4">Отдых</p>
                        </div>
                    </div>
                    <div class="col-xs-12 hidden-sm col-md-3">
                        <div class="deliver-small">
                            <p>Рейтинг капитана:</p>
                            <p class="h4">5</p>
                        </div>
                        <div class="deliver-small">
                            <p>В день на участника:</p>
                            <p class="h4">60 Euro</p>
                        </div>
                        <div class="deliver-small">
                            <p>Стоимость за всех участников:</p>
                            <p class="h4">7560 Euro</p>
                        </div>
                    </div>
                    <div class="col-sm-4 visible-sm">
                        <div class="deliver-small">
                            <p>Дата:</p>
                            <p class="h4">12 апреля — 25 мая 2015</p>
                        </div>
                        <div class="deliver-small">
                            <p>Страна путешествия:</p>
                            <p class="h4">Черногорье</p>
                        </div>
                        <div class="deliver-small">
                            <p>Акватория путешествия:</p>
                            <p class="h4">Акватория путешествия 1</p>
                        </div>
                    </div>
                    <div class="col-sm-4 visible-sm">
                        <div class="deliver-small">
                            <p>Тип путешествия:</p>
                            <p class="h4">Отдых</p>
                        </div>
                        <div class="deliver-small">
                            <p>Рейтинг капитана:</p>
                            <p class="h4">5</p>
                        </div>
                    </div>
                    <div class="col-sm-4 visible-sm">
                        <div class="deliver-small">
                            <p>В день на участника:</p>
                            <p class="h4">60 Euro</p>
                        </div>
                        <div class="deliver-small">
                            <p>Стоимость за всех участников:</p>
                            <p class="h4">7560 Euro</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 table-block">
                        <div class="deliver hidden-md hidden-lg"></div>
                        <h4>Расписание путешествий</h4>
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>12 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>13 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>14 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>15 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>16 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>17 апреля</td>
                                <td>Москва - Питер</td>
                                <td>70 миль</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-info">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <a href="#" class="btn btn-5">Отправить ссылку другу</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="choice-place">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>
                                Выберете места <br>
                                и забронируйте путешествия
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-7 yachta-block">
                            <ul class="list-unstyled list-inline">
                                <li><div class="round-green"></div> Свободно мест: <b>3</b></li>
                                <li><div class="round-red"></div> Занято мест: <b>5</b></li>
                            </ul>
                            <img src="/images/yachts/yacht2.jpg" alt="Яхта" class="img-responsive">
                            <div class="row">
                                <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-0 col-md-5 text-center">
                                    <p>Вами выбрано: <span class="h4">3 места</span></p>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 text-center">
                                    <p>Общая сумма: <span class="h4">960 Euro</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-10 text-center">
                                    <button  class="btn btn-1">Забронировать</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4>Участники путешествия:</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="spisok">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3">
                                                        <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                                            <img src="/images/foto/foto1.jpg" alt="Александр Сергеевич">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 text-block">
                                                        <p><b>1 место</b></p>
                                                        <p>Мужчина, 32 года</p>
                                                        <h4>Александр Сергеевич</h4>
                                                        <p>Согласен жить с противоположным полом</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3">
                                                        <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                                            <img src="/images/foto/foto2.jpg" alt="Александр Сергеевич">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 text-block">
                                                        <p><b>1 место</b></p>
                                                        <p>Мужчина, 32 года</p>
                                                        <h4>Григорий Семенович</h4>
                                                        <p>Согласен жить с противоположным полом</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3">
                                                        <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                                            <img src="/images/foto/foto3.jpg" alt="Александр Сергеевич">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 text-block">
                                                        <p><b>1 место</b></p>
                                                        <p>Женщина, 32 года</p>
                                                        <h4>Наталья Семеновна</h4>
                                                        <p>Согласна жить с противоположным полом</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="spisok">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3">
                                                        <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                                            <img src="/images/foto/foto1.jpg" alt="Александр Сергеевич">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 text-block">
                                                        <p><b>1 место</b></p>
                                                        <p>Мужчина, 32 года</p>
                                                        <h4>Александр Сергеевич</h4>
                                                        <p>Согласен жить с противоположным полом</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3 col-sm-3">
                                                        <a href="#" data-toggle="modal" data-target="#modal-thirdPlace">
                                                            <img src="/images/foto/foto2.jpg" alt="Александр Сергеевич">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-9 col-sm-9 text-block">
                                                        <p><b>1 место</b></p>
                                                        <p>Мужчина, 32 года</p>
                                                        <h4>Григорий Семенович</h4>
                                                        <p>Согласен жить с противоположным полом</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="important-info">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>
                                Важная информация <br>
                                для путешественников
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="important-info-text">
                                <p class="h4">Что входит и что не входит в стоимость за место/участника:</p>
                                <p>
                                    Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории,
                                    обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также
                                    получить удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это
                                    включено в круизную программу. Наша база находится в трех километрах от
                                    международного аэропорта Тиват (марина MarinaSolila) и оснащена всем необходимым для
                                    обслуживания яхт.
                                </p>
                            </div>
                            <div class="important-info-text">
                                <p class="h4">Дополнительные платежи на одного участника:</p>
                                <p>
                                    Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории,
                                    обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также
                                    получить удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это
                                    включено в круизную программу. Наша база находится в трех километрах от
                                    международного аэропорта Тиват (марина MarinaSolila) и оснащена всем необходимым для
                                    обслуживания яхт.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-4">
                            <div>
                                <p>Место сбора участников:</p>
                                <p class="h4">г.Актюбинск, республика Коми</p>
                            </div>
                            <div class="deliver-small">
                                <p>Время сбора участников:</p>
                                <p class="h4">17.00 — 17.30</p>
                            </div>
                            <div class="deliver-small">
                                <p>Ближаийший аэропорт к месту сбора участников:</p>
                                <p class="h4">Аэропорт Хитроу</p>
                            </div>
                            <div class="deliver-small">
                                <p>Трансфер:</p>
                                <p class="h4">Группа, 100 руб./место</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="short-description">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Краткое описание</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-7">
                            <?require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel3.php";?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-4">
                            <div>
                                <p>Тип судна:</p>
                                <p class="h4">Катамаран</p>
                            </div>
                            <div class="deliver-small">
                                <p>Тип яхты:</p>
                                <p class="h4">Парус + Мотор</p>
                            </div>
                            <div class="deliver-small">
                                <p>Производитель / Год:</p>
                                <p class="h4">Bavaria Yachts / 2013год</p>
                            </div>
                            <div class="deliver-small">
                                <p>Длина яхты:</p>
                                <p class="h4">44 ft (13.4 м)</p>
                            </div>
                            <div class="deliver-small">
                                <p>Мест / Кают:</p>
                                <p class="h4">8 / 4</p>
                            </div>
                            <div class="deliver-small">
                                <p>Санузел (гальюн + душ):</p>
                                <p class="h4">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="row features">
                        <div class="col-xs-12">
                            <h4>Особенности:</h4>
                            <div class="column2">
                                <p>
                                    Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории,
                                    обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также
                                    получить удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это
                                    включено в круизную программу. Наша база находится в трех километрах от международного
                                    аэропорта Тиват (марина MarinaSolila) и оснащена всем необходимым для обслуживания яхт.
                                </p>
                                <p>
                                    Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории,
                                    обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также
                                    получить удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это
                                    включено в круизную программу. Наша база находится в трех километрах от международного
                                    аэропорта Тиват (марина MarinaSolila) и оснащена всем необходимым для обслуживания яхт.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row button-block">
                    <div class="col-xs-12">
                        <?require_once $_SERVER['DOCUMENT_ROOT']."/include/tabs.php";?>
                    </div>
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