<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Профиль шкипера";
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
                <div class="row btn-block">
                    <div class="col-xs-12 col-sm-8">
                        <div class="search-filter">
                            <a href="<?=SITE_DIR?>skipper-profile.php" class="btn btn-9 active">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-list.php" class="btn btn-9">Текущие путешествия</a>
                            <a href="<?=SITE_DIR?>travel-archives.php" class="btn btn-9">Архив путешествий</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 text-right">
                        <a href="<?=SITE_DIR?>new-travel.php" type="button" class="btn btn-4">Создать новое путешествие</a>
                    </div>
                </div>
                <form action="" method="post" role="form">
                    <div class="row profile-top">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center foto">
                            <img src="/images/foto5.png" alt="Василий Петрович Махмудов"><br>
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
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputDate">Дата рождения</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDate" id="inputDate" aria-describedby="addonDateIcon">
                                    <span class="input-group-addon" id="addonDateIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail">
                            </div>
                    	</div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSkype">Skype</label>
                                <input type="text" class="form-control" name="inputSkype" id="inputSkype">
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Телефон</label>
                                <input type="text" class="form-control" name="inputPhone" id="inputPhone">
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
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaExperience">Опыт хождения по акваториям <span>*</span></label>
                                <textarea class="form-control" rows="8" name="textareaExperience" id="textareaExperience">Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории, обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также получить удовольствие от морских развлечений, как рыбалка, снорклинг и др.</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaExperience2">Желаемый опыт хождения по акваториям <span>*</span></label>
                                <textarea class="form-control" rows="8" name="textareaExperience2" id="textareaExperience2">Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории, обойти все острова и заливы, насладиться уединенными гаванями и пляжами, а также получить удовольствие от морских развлечений, как рыбалка, снорклинг и др.</textarea>
                            </div>
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
                            <div class="row bottom-form2">
                                <div class="col-xs-12">
                                    <p>Поля, отмеченные <span>*</span>, обязательны к заполнению</p>
                                </div>
                            </div>
                            <div class="row button-block">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-4">Сохранить</button>
                                </div>
                            </div>
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