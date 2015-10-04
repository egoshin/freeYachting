<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Каюта путешественника";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content traveller-cabin">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h1><?=$namePage;?></h1>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-right reg">
                        <a href="#" class="btn btn-8">Зарегистрироваться</a>
                    </div>
                </div>
                <div class="about">
                    <img src="/images/travellers.jpg" alt="" class="img-responsive">
                    <p>
                        В этот раздел мы публикуем наиболее интересные факты, советы для тех, кто хочет побольше узнать
                        о море и яхтинге. Для тех, кто готовится стать яхтсменом, мы готовим серию статей и
                        видеоматериалов на тему устройства яхт и судовождения. Пребывание на яхте или катамаране - это
                        целый мир со своими правилами и нюансами, поэтому те, кто впервые готовится взять в аренду яхту
                        или катамаран, найдут для себя много интересного.
                    </p>
                    <p>
                        В целом, этот каталог мы представляем в преддверии открытия собственной яхтенной школы.
                        Присылайте свои вопросы связанные с яхтингом, мореходством, устройством судов, и мы обязательно
                        постараемся ответить здесь на них.
                    </p>
                    <p>
                        Современные яхты совсем другие, строят их уже не из дерева, а из пластика. Деревянные яхты
                        конечно строят, но это уже редкость. Нынешние яхты разделяются по своему назначению: гоночные,
                        гоночно-круизные и круизные, по количеству корпусов на однокорпусные и многокорпусные
                        (катамараны, тримараны), а также по своему ареалу плаванья: морские (океанские) и для внутренних
                        водоемов. Яхты строят на верфи, потом их "спускают" они не плавают, а "ходят" по морям и
                        океанам. Стоянки для яхт происходят в маринах и яхт-клубах. Цены на стоянку зависят от размера
                        яхты, сезона и времени стоянки.

                    </p>
                </div>
                <!-- TAB NAVIGATION -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Наиболее часто задаваемые вопросы</a></li>
                    <div class="clearfix visible-xs"></div>
                    <li><a href="#tab2" role="tab" data-toggle="tab">Отзывы путешественников по работе сайта</a></li>
                </ul>
                <!-- TAB CONTENT -->
                <div class="tab-content">
                    <div class="active tab-pane fade in" id="tab1">
                        <ul class="list-unstyled question-answer-block">
                            <li>
                                <div class="question-block">
                                    <h4>Как арендовать яхту? Какие виды аренды яхт бывают?</h4>
                                    <p>
                                        Аренда катамарана не сложнее проката автомобиля и бывает с водителем и без. Если вы
                                        привыкли к комфорту, то, конечно, аренда судна с экипажем именно для вас. Вас
                                        окружат теплом и заботой, а ваша безопасность будет в самых надежных руках.
                                    </p>
                                    <div class="signature">
                                        <p>
                                            Спрашивает: <br>
                                            <span>Евгений Семенович</span>
                                        </p>
                                    </div>
                                    <div class="text-center question-button">
                                        <button type="button" class="btn btn-7 answer-show">Читать ответ</button>
                                    </div>
                                    <div class="question-triagle"></div>
                                </div>
                                <div class="answer-block">
                                    <div class="signature">
                                        <p>
                                            Отвечает: <br>
                                            <span>Ефграф Афиногенович</span>
                                        </p>
                                    </div>
                                    <p>
                                        Если у вас есть шкиперская лицензия, и вы хотите управлять катамараном
                                        самостоятельно, то вам необходимо учитывать тот факт, что флот наш собственный, и мы
                                        очень любим каждую свою яхту, и серьезно относимся к уровню знаний и навыков людей
                                        управляющих ими. Поэтому Вы должны прислать нам копию своей шкиперской лицензии, а
                                        так же сообщить, при необходимости, об опыте, который у вас есть и количестве
                                        пройденных миль.
                                    </p>
                                    <div class="text-center answer-button">
                                        <button type="button" class="btn btn-2 answer-hidden">Скрыть ответ</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="question-block">
                                    <h4>Сравнительные характеристики яхт?</h4>
                                    <p>
                                        Аренда катамарана не сложнее проката автомобиля и бывает с водителем и без. Если вы
                                        привыкли к комфорту, то, конечно, аренда судна с экипажем именно для вас. Вас
                                        окружат теплом и заботой, а ваша безопасность будет в самых надежных руках.
                                    </p>
                                    <div class="signature">
                                        <p>
                                            Спрашивает: <br>
                                            <span>Евгений Семенович</span>
                                        </p>
                                    </div>
                                    <div class="text-center question-button">
                                        <button type="button" class="btn btn-7 answer-show">Читать ответ</button>
                                    </div>
                                    <div class="question-triagle"></div>
                                </div>
                                <div class="answer-block">
                                    <div class="signature">
                                        <p>
                                            Отвечает: <br>
                                            <span>Ефграф Афиногенович</span>
                                        </p>
                                    </div>
                                    <p>
                                        Если у вас есть шкиперская лицензия, и вы хотите управлять катамараном
                                        самостоятельно, то вам необходимо учитывать тот факт, что флот наш собственный, и мы
                                        очень любим каждую свою яхту, и серьезно относимся к уровню знаний и навыков людей
                                        управляющих ими. Поэтому Вы должны прислать нам копию своей шкиперской лицензии, а
                                        так же сообщить, при необходимости, об опыте, который у вас есть и количестве
                                        пройденных миль.
                                    </p>
                                    <div class="text-center answer-button">
                                        <button type="button" class="btn btn-2 answer-hidden">Скрыть ответ</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="question-block">
                                    <h4>Можно ли арендовать яхту без капитана?</h4>
                                    <p>
                                        Аренда катамарана не сложнее проката автомобиля и бывает с водителем и без. Если вы
                                        привыкли к комфорту, то, конечно, аренда судна с экипажем именно для вас. Вас
                                        окружат теплом и заботой, а ваша безопасность будет в самых надежных руках.
                                    </p>
                                    <div class="signature">
                                        <p>
                                            Спрашивает: <br>
                                            <span>Евгений Семенович</span>
                                        </p>
                                    </div>
                                    <div class="text-center question-button">
                                        <button type="button" class="btn btn-7 answer-show">Читать ответ</button>
                                    </div>
                                    <div class="question-triagle"></div>
                                </div>
                                <div class="answer-block">
                                    <div class="signature">
                                        <p>
                                            Отвечает: <br>
                                            <span>Ефграф Афиногенович</span>
                                        </p>
                                    </div>
                                    <p>
                                        Если у вас есть шкиперская лицензия, и вы хотите управлять катамараном
                                        самостоятельно, то вам необходимо учитывать тот факт, что флот наш собственный, и мы
                                        очень любим каждую свою яхту, и серьезно относимся к уровню знаний и навыков людей
                                        управляющих ими. Поэтому Вы должны прислать нам копию своей шкиперской лицензии, а
                                        так же сообщить, при необходимости, об опыте, который у вас есть и количестве
                                        пройденных миль.
                                    </p>
                                    <div class="text-center answer-button">
                                        <button type="button" class="btn btn-2 answer-hidden">Скрыть ответ</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="no-answer text-center">
                            <p class="h1">
                                Вы не нашли нужный ответ? <br>
                                Задайте свой вопрос.
                            </p>
                            <button type="button" class="btn btn-2" data-toggle="modal" data-target="#modal-askQuestion">
                                Задать вопрос
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="left">
                                    <img src="<?=SITE_DIR?>images/foto1.png" alt="Александр Сергеевич" class="img-circle">
                                </div>
                                <div class="right">
                                    <p class="date">4 июля 2015</p>
                                    <h4>Александр Сергеевич</h4>
                                    <p>Оценка: <strong>5 баллов</strong></p>
                                </div>
                                <div class="clearfix"></div>
                                <p>
                                    Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории, обойти все
                                    острова и заливы, насладиться уединенными гаванями и пляжами, а также получить удовольствие от
                                    морских развлечений, как рыбалка, снорклинг и др. – все это включено в круизную программу. Наша
                                    база находится в трех километрах от международного аэропорта Тиват (марина MarinaSolila) и
                                    оснащена всем необходимым для обслуживания яхт. Аренда катамарана в Черногории позволит вам
                                    свободно перемещаться по всей акватории.
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="left">
                                    <img src="<?=SITE_DIR?>images/foto2.png" alt="Наталья Семеновна" class="img-circle">
                                </div>
                                <div class="right">
                                    <p class="date">4 июля 2015</p>
                                    <h4>Наталья Семеновна</h4>
                                    <p>Оценка: <strong>5 баллов</strong></p>
                                </div>
                                <div class="clearfix"></div>
                                <p>
                                    Все острова и заливы, насладиться уединенными гаванями и пляжами, а также получить удовольствие
                                    от морских развлечений, как рыбалка, снорклинг и др. – все это включено в круизную программу.
                                    Наша база находится в трех километрах от международного аэропорта Тиват (марина MarinaSolila) и
                                    оснащена всем необходимым для обслуживания яхт. Аренда катамарана в Черногории позволит вам
                                    свободно перемещаться по всей акватории.
                                </p>
                            </div>
                            <div class="col-xs-12 hidden-sm col-md-4 col-lg-4">
                                <div class="left">
                                    <img src="<?=SITE_DIR?>images/foto3.png" alt="Григорий Семенович" class="img-circle">
                                </div>
                                <div class="right">
                                    <p class="date">4 июля 2015</p>
                                    <h4>Григорий Семенович</h4>
                                    <p>Оценка: <strong>5 баллов</strong></p>
                                </div>
                                <div class="clearfix"></div>
                                <p>
                                    Наша база находится в трех километрах от международного аэропорта Тиват (марина MarinaSolila) и
                                    оснащена всем необходимым для обслуживания яхт. Аренда катамарана в Черногории позволит вам
                                    свободно перемещаться по всей акватории. Аренда катамарана в Черногории позволит вам свободно
                                    перемещаться по всей акватории, обойти все острова и заливы, насладиться уединенными гаванями и
                                    пляжами, а также получить удовольствие от морских развлечений.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <?require_once $_SERVER['DOCUMENT_ROOT']."/include/pagination.php";?>
                            </div>
                        </div>
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