<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Регистрация шкипера";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/carousel.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content traveller-registration">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?=$namePage;?></h1>
                    </div>
                </div>
                <form action="" method="post" role="form">
                    <div class="row profile-top">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center foto">
                            <img src="/images/avatar.png" alt="Загрузить фото"><br>
                            <button type="button" name="fileImg" accept="image/jpeg,image/png" class="btn btn-2">Загрузить фото</button>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="inputFamily">Фамилия <span>*</span></label>
                                <input type="text" class="form-control" name="inputFamily" id="inputFamily">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Имя <span>*</span></label>
                                <input type="text" class="form-control" name="inputName" id="inputName">
                            </div>
                            <div class="form-group">
                                <label for="inputName2">Отчество</label>
                                <input type="text" class="form-control" name="inputName2" id="inputName2">
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Дата рождения</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDate" id="inputDate" aria-describedby="addonDateIcon">
                                    <span class="input-group-addon" id="addonDateIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 col-sm-6 col-sm-push-6">
                            <div class="btn-group buttons-gender" data-toggle="buttons">
                                <label>Пол</label><br>
                                <label class="btn btn-9 active">
                                    <input type="radio" name="gender" id="inputMan" autocomplete="off" checked> Мужской
                                </label>
                                <label class="btn btn-9">
                                    <input type="radio" name="gender" id="inputWoman" autocomplete="off"> Женский
                                </label>
                            </div>
                    	</div>
                        <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputRepeatEmail">Повторите Email</label>
                                <input type="email" class="form-control" name="inputRepeatEmail" id="inputRepeatEmail">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputSkype">Skype</label>
                                        <input type="text" class="form-control" name="inputSkype" id="inputSkype">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputPhone">Телефон</label>
                                        <input type="text" class="form-control" name="inputPhone" id="inputPhone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Знание языков</label><br>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxRus" value="rus"> Русский язык
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxEng" value="eng"> Английский язык
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSelect" class="control-label">Другой язык</label>
                                <select name="name" id="inputSelectLang1" class="form-control">
                                    <option value="no"></option>
                                    <option value="fra">Французкий язык</option>
                                    <option value="esp">Испанский язык</option>
                                    <option value="por">Португальский язык</option>
                                    <option value="nid">Голландский язык</option>
                                    <option value="ita">Итальянский язык</option>
                                    <option value="jpn">Японский язык</option>
                                    <option value="chi">Китайский язык</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="name" id="inputSelectLang2" class="form-control">
                                    <option value="no"></option>
                                    <option value="fra">Французкий язык</option>
                                    <option value="esp">Испанский язык</option>
                                    <option value="por">Португальский язык</option>
                                    <option value="nid">Голландский язык</option>
                                    <option value="ita">Итальянский язык</option>
                                    <option value="jpn">Японский язык</option>
                                    <option value="chi">Китайский язык</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Капитанская лицензия</h4>
                            <div class="form-group">
                                <label class="label-margin-right">Тип сертификата <span>*</span></label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxIYT" value="IYT"> IYT
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxRYA" value="RYA"> RYA
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputNumberSertificate">Номер сертификата <span>*</span></label>
                                <input type="text" class="form-control" name="inputNumberSertificate" id="inputNumberSertificate">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputDateIssue">Дата выдачи <span>*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDateIssue" id="inputDateIssue" aria-describedby="addonDateIcon">
                                    <span class="input-group-addon" id="addonDateIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Капитанский опыт</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputYears">Количество лет <span>*</span></label>
                                <input type="text" class="form-control" name="inputYears" id="inputYears">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputMile">Количество пройденных миль <span>*</span></label>
                                <input type="text" class="form-control" name="inputMile" id="inputMile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 header-small">
                            <label><b>Опыт хождения по акваториям <span>*</span></b></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSelectCountry" class="control-label">Регион хождения №1</label>
                                <select name="name" id="inputSelectCountry" class="form-control">
                                    <option value="no"></option>
                                    <option value="country-fra">Франция</option>
                                    <option value="country-esp">Испания</option>
                                    <option value="country-por">Португалия</option>
                                    <option value="country-nid">Нидерланды</option>
                                    <option value="country-ita">Италия</option>
                                    <option value="country-jpn">Япония</option>
                                    <option value="country-chi">Китай</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputWaterArea" class="control-label">Выбор акватории</label>
                                <select name="name" id="inputWaterArea" class="form-control">
                                    <option value="wa1">Акватория похода 1</option>
                                    <option value="wa2">Акватория похода 2</option>
                                    <option value="wa3">Акватория похода 3</option>
                                    <option value="wa4">Акватория похода 4</option>
                                    <option value="wa5">Акватория похода 5</option>
                                    <option value="wa6">Акватория похода 6</option>
                                    <option value="wa7">Акватория похода 7</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row button-block">
                        <div class="col-xs-12 col-sm-offset-2 col-sm-4 text-center">
                            <button type="submit" class="btn btn-5">Добавить еще регион</button>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <button type="submit" class="btn btn-4">Сохранить</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 header-small">
                            <label><b>Желаемый опыт хождения по акваториям <span>*</span></b></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSelectCountry2" class="control-label">Регион хождения №1</label>
                                <select name="name" id="inputSelectCountry2" class="form-control">
                                    <option value="no"></option>
                                    <option value="country-fra2">Франция</option>
                                    <option value="country-esp2">Испания</option>
                                    <option value="country-por2">Португалия</option>
                                    <option value="country-nid2">Нидерланды</option>
                                    <option value="country-ita2">Италия</option>
                                    <option value="country-jpn2">Япония</option>
                                    <option value="country-chi2">Китай</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputWaterArea2" class="control-label">Выбор акватории</label>
                                <select name="name" id="inputWaterArea2" class="form-control">
                                    <option value="wa21">Акватория похода 1</option>
                                    <option value="wa22">Акватория похода 2</option>
                                    <option value="wa23">Акватория похода 3</option>
                                    <option value="wa24">Акватория похода 4</option>
                                    <option value="wa25">Акватория похода 5</option>
                                    <option value="wa26">Акватория похода 6</option>
                                    <option value="wa27">Акватория похода 7</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row button-block">
                        <div class="col-xs-12 col-sm-offset-2 col-sm-4 text-center">
                            <button type="submit" class="btn btn-5">Добавить еще регион</button>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <button type="submit" class="btn btn-4">Сохранить</button>
                        </div>
                    </div>

                    <div class="row profile-bottom">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputLogin">Логин <span>*</span></label>
                                <input type="text" class="form-control" name="inputLogin" id="inputLogin">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Пароль <span>*</span></label>
                                <input type="password" class="form-control" name="inputPassword" id="inputPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword2">Повторите пароль <span>*</span></label>
                                <input type="password" class="form-control" name="inputPassword2" id="inputPassword2">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group checkbox-margin-top">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxOpen" value="checkboxOpen">
                                    Открыт для предложений по работе
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="checkboxRSS" value="checkboxRSS">
                                    Я хотел бы получать рассылку по специальным<br>
                                    предложениям для шкиперов
                                </label>
                            </div>
                            <div class="row captcha-block captcha-margin-top">
                                <div class="col-xs-12 col-sm-7 captcha text-right">
                                    <img src="/img/captcha.png" alt="Капча">
                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                </div>
                                <div class="col-xs-12 col-sm-5 text-left">
                                    <label for="inputCaptcha">Введите код <span>*</span></label>
                                    <input type="text" class="form-control" name="inputCaptcha" id="inputCaptcha">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bottom-form">
                        <div class="col-xs-12 text-center">
                            <p>Поля, отмеченные <span>*</span>, обязательны к заполнению</p>
                        </div>
                    </div>
                    <div class="row button-block">
                        <div class="col-xs-12 col-sm-offset-2 col-sm-4 text-center">
                            <button type="submit" class="btn btn-5">Отменить регистрацию</button>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <button type="submit" class="btn btn-4">Сохранить</button>
                        </div>
                    </div>
                </form>
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