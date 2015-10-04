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
                            <button class="btn btn-9">1. Обзор путешествия</button><br class="visible-xs">
                            <button class="btn btn-9 active">2. Бронирование мест</button><br class="visible-xs">
                            <button  class="btn btn-9">3. Оплата</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel2.php";?>
                    </div>
                </div>
                <div class="choice-place">
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
                <div class="important-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>
                                Введите регистрационные <br>
                                данные путешественников
                            </h1>
                        </div>
                    </div>
                    <form action="" method="post" role="form">
                        <div class="row">
                            <div class="col-xs-12 visible-xs text-center">
                                <h4>Путешественник 1</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 text-center foto">
                                <img src="/images/foto5.png" alt="Василий Петрович Махмудов"><br>
                                <button type="button" name="fileImg" accept="image/jpeg,image/png" class="btn btn-2">Загрузить фото</button>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="hidden-xs">Путешественник 1</h4>
                                <div class="form-group">
                                    <label for="inputFIO1">ФИО</label>
                                    <input type="text" class="form-control" name="inputFIO1" id="inputFIO1">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1">Email</label>
                                    <input type="email" class="form-control" name="inputEmail1" id="inputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone1">Телефон</label>
                                    <input type="text" class="form-control" name="inputPhone1" id="inputPhone1">
                                </div>
                                <div class="form-group">
                                    <label for="inputAge1">Возраст</label>
                                    <input type="text" class="form-control" name="inputAge1" id="inputAge1">
                                </div>
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label><br class="visible-sm">Пол</label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputMan1" autocomplete="off" checked> Мужской
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputWoman1" autocomplete="off"> Женский
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="hidden-xs">&nbsp;</h4>
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label>Инициатр путешествия</label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputIni1" autocomplete="off" checked> Да
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputIni2" autocomplete="off"> Нет
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="inputLogin1">Логин <span>*</span></label>
                                    <input type="text" class="form-control" name="inputLogin1" id="inputLogin1">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1">Пароль <span>*</span></label>
                                    <input type="text" class="form-control" name="inputPassword1" id="inputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordRepeat1">Повторить пароль <span>*</span></label>
                                    <input type="text" class="form-control" name="inputPasswordRepeat1" id="inputPasswordRepeat1">
                                </div>
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label>Проживание с противополжным полом <span>*</span></label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputPPP1" autocomplete="off" checked> Да
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputPPP2" autocomplete="off"> Нет
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <h4 class="visible-md visible-lg">&nbsp;</h4>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-12">
                                        <div class="form-group">
                                            <label for="inputChild1" class="control-label">Участие детей</label>
                                            <select name="name" id="inputChild1" class="form-control">
                                                <option value="yesChild">Да</option>
                                                <option value="noChild" selected>Нет</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNumberChild1" class="control-label"><br class="visible-sm">Количество детей</label>
                                            <select name="name" id="inputNumberChild1" class="form-control" disabled>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-12">
                                        <div class="form-group">
                                            <label for="inputAgeChild1" class="control-label">Минимальный возраст детей</label>
                                            <select name="name" id="inputAgeChild1" class="form-control" disabled>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                            </select>
                                        </div>
                                        <div class="btn-group buttons-gender" data-toggle="buttons">
                                            <label>Проживание в каюте с родителями?</label><br>
                                            <label class="btn btn-9 active">
                                                <input type="radio" name="gender" id="inputParent1" autocomplete="off" checked> Да
                                            </label>
                                            <label class="btn btn-9">
                                                <input type="radio" name="gender" id="inputParent2" autocomplete="off"> Нет
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deliver"></div>
                        <div class="row">
                            <div class="col-xs-12 visible-xs text-center">
                                <h4>Путешественник / Ребенок</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 text-center foto">
                                <img src="/images/avatar.png" alt="Аватар"><br>
                                <button type="button" name="fileImg" accept="image/jpeg,image/png" class="btn btn-2">Загрузить фото</button>
                            </div>
                            <div class="col-sm-8 visible-sm visible-md">
                                <h4>Путешественник / Ребенок</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="visible-lg">Путешественник / Ребенок</h4>
                                <div class="form-group">
                                    <label for="inputFIO2">ФИО</label>
                                    <input type="text" class="form-control" name="inputFIO2" id="inputFIO2">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail2">Email</label>
                                    <input type="email" class="form-control" name="inputEmail2" id="inputEmail2">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone2">Телефон</label>
                                    <input type="text" class="form-control" name="inputPhone2" id="inputPhone2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="hidden-xs hidden-sm hidden-md">&nbsp;</h4>
                                <div class="form-group">
                                    <label for="inputAge2">Возраст</label>
                                    <input type="text" class="form-control" name="inputAge2" id="inputAge2">
                                </div>
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label>Пол</label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputMan2" autocomplete="off" checked> Мужской
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputWoman2" autocomplete="off"> Женский
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="deliver"></div>
                        <div class="row">
                            <div class="col-xs-12 visible-xs text-center">
                                <h4>Путешественник 2</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3 text-center foto">
                                <img src="/images/avatar2.png" alt="Аватар"><br>
                                <button type="button" name="fileImg" accept="image/jpeg,image/png" class="btn btn-2">Загрузить фото</button>
                            </div>
                            <div class="col-sm-8 visible-sm visible-md">
                                <h4>Путешественник 2</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="visible-lg">Путешественник 2</h4>
                                <div class="form-group">
                                    <label for="inputFIO2">ФИО</label>
                                    <input type="text" class="form-control" name="inputFIO2" id="inputFIO2">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail2">Email</label>
                                    <input type="email" class="form-control" name="inputEmail2" id="inputEmail2">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone2"><br class="visible-sm">Телефон</label>
                                    <input type="text" class="form-control" name="inputPhone2" id="inputPhone2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <h4 class="hidden-xs hidden-sm hidden-md">&nbsp;</h4>
                                <div class="form-group">
                                    <label for="inputAge2">Возраст</label>
                                    <input type="text" class="form-control" name="inputAge2" id="inputAge2">
                                </div>
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label>Пол</label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputMan2" autocomplete="off" checked> Мужской
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputWoman2" autocomplete="off"> Женский
                                    </label>
                                </div>
                                <br class="visible-xs">
                                <div class="btn-group buttons-gender" data-toggle="buttons">
                                    <label>Проживание с противополжным полом <span>*</span></label><br>
                                    <label class="btn btn-9 active">
                                        <input type="radio" name="gender" id="inputPPP21" autocomplete="off" checked> Да
                                    </label>
                                    <label class="btn btn-9">
                                        <input type="radio" name="gender" id="inputPPP22" autocomplete="off"> Нет
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <h4 class="visible-lg">&nbsp;</h4>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-12">
                                        <div class="form-group">
                                            <label for="inputChild2" class="control-label">Участие детей</label>
                                            <select name="name" id="inputChild2" class="form-control">
                                                <option value="yesChild">Да</option>
                                                <option value="noChild" selected>Нет</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deliver"></div>
                        <div class="row">
                            <div class="col-xs-12 text-center btn-block-form">
                                <button type="submit" class="btn btn-5">Сохранить инфо</button><br class="visible-xs">
                                <button type="submit" class="btn btn-5">Добавить участника</button><br class="visible-xs">
                                <button type="submit" class="btn btn-4">Продолжить</button>
                            </div>
                        </div>
                    </form>
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