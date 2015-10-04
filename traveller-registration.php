<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Регистрация путешественника";
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
                    <div class="row profile-bottom">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="inputDate">Дата рождения</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDate" id="inputDate" aria-describedby="addonDateIcon">
                                    <span class="input-group-addon" id="addonDateIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email <span>*</span></label>
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Телефон</label>
                                <input type="text" class="form-control" name="inputPhone" id="inputPhone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label for="textareaInterests">Интересы</label>
                            <textarea class="form-control" rows="10" name="textareaInterests" id="textareaInterests"></textarea>
                        </div>
                    </div>
                    <div class="row captcha-block">
                        <div class="col-xs-12 col-sm-6 captcha text-right">
                            <img src="/img/captcha.png" alt="Капча">
                            <a href="#"><i class="fa fa-refresh"></i></a>
                        </div>
                        <div class="col-xs-12 col-sm-3 text-left">
                            <label for="inputCaptcha">Введите код <span>*</span></label>
                            <input type="text" class="form-control" name="inputCaptcha" id="inputCaptcha">
                        </div>
                    </div>
                    <div class="row bottom-form">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <p>Поля, отмеченные <span>*</span>, обязательны к заполнению</p>
                            <button type="submit" class="btn btn-1">Сохранить</button>
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