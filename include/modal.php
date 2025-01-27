<!-- Вход в личный кабинет -->
<div class="modal fade" id="modal-login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Вход в личный кабинет</h4>
			</div>
            <form action="" method="post" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserLogin">Логин</label>
                        <input type="text" class="form-control" name="" id="inputUserLogin">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordLogin">Пароль</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="" id="inputPasswordLogin"
                                   aria-describedby="addonPasswordLogin">
                            <span class="input-group-addon" id="addonPasswordLogin">
                                <a href="#"  data-toggle="modal" data-target="#modal-password"
                                   data-dismiss="modal">
                                    Забыли пароль?
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                            <button type="button" class="btn btn-5 facebook" data-dismiss="modal" aria-hidden="true">
                                Зайти с помощью <span>f</span>
                            </button>
                    	</div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                            <button type="submit" class="btn btn-4">Войти</button>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a href="#" class="no-registration-href" data-toggle="modal"
                               data-target="#modal-login-quality" data-dismiss="modal" aria-hidden="true">
                                Я еще не зарегистрирован
                            </a>
                    	</div>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>

<!-- В каком качестве Вы хотите зарегистрироваться на сайте? -->
<div class="modal fade" id="modal-login-quality">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">
                    В каком качестве<br>
                    Вы хотите<br>
                    зарегистрироваться<br>
                    на сайте?
                </h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <a href="<?=SITE_DIR?>traveller-registration.php" type="button" class="btn btn-5">
                            Путешественник
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <a href="<?=SITE_DIR?>skipper-registration.php" type="submit" class="btn btn-4">
                            Капитан
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Восстановление пароля -->
<div class="modal fade" id="modal-password">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Восстановление пароля</h4>
            </div>
            <form action="" method="post" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserPassword">Логин</label>
                        <input type="text" class="form-control" name="" id="inputUserPassword">
                    </div>
                    <div class="row">
                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center modal-or">
                    		или
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Email</label>
                        <input type="text" class="form-control" name="" id="inputPassword">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                            <button type="submit" class="btn btn-4">Ввыслать</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Войти в каюту капитана -->
<div class="modal fade" id="modal-login-captain">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Войти в каюту капитана</h4>
            </div>
            <form action="" method="post" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserLoginCaptain">Логин</label>
                        <input type="text" class="form-control" name="" id="inputUserLoginCaptain">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordLoginCaptain">Пароль</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="" id="inputPasswordLoginCaptain"
                                   aria-describedby="addonPasswordLogin">
                            <span class="input-group-addon" id="addonPasswordLogin">
                                <a href="#"  data-toggle="modal" data-target="#modal-password"
                                   data-dismiss="modal">
                                    Забыли пароль?
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                            <button type="submit" class="btn btn-4">Войти</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Задать вопрос -->
<div class="modal fade" id="modal-askQuestion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Задать вопрос</h4>
            </div>
            <form action="" method="post" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserAskQuestion">Ваше имя</label>
                        <input type="text" class="form-control" name="" id="inputUserAskQuestion">
                    </div>
                    <div class="form-group">
                        <label for="inputEmailAskQuestion">Email</label>
                        <input type="email" class="form-control" name="" id="inputEmailAskQuestion">
                    </div>
                    <div class="form-group">
                        <label for="textareaAskQuestion">Ваш вопрос</label>
                        <textarea class="form-control" rows="7" id="textareaAskQuestion"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                            <button type="submit" class="btn btn-4" data-toggle="modal" data-target="#modal-question"
                                    data-dismiss="modal" aria-hidden="true">
                                Спросить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Ваш вопрос отправлен -->
<div class="modal fade" id="modal-question">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Ваш вопрос отправлен</h4>
            </div>
            <div class="modal-body text-center">
                <p class="p-question">В скором времени наши специалисты ответят Вам.</p>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <button type="button" class="btn btn-4" data-dismiss="modal" aria-hidden="true">
                            Закрыть
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 12 декабря 2015 года -->
<div class="modal fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">12 декабря 2015 года</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                		<p>
                            Место отправления<br>
                            <strong>Москва</strong>
                        </p>
                	</div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>
                            Место прибытия<br>
                            <strong>Саратов</strong>
                        </p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>
                            Протяженность<br>
                            <strong>70 миль</strong>
                        </p>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                		<p>
                            <strong>Описание:</strong><br>
                            Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории, обойти
                            все острова и заливы, насладиться уединенными гаванями и пляжами, а также получить
                            удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это включено в
                            круизную программу. Наша база находится в трех километрах от международного аэропорта Тиват
                            (марина MarinaSolila) и оснащена всем необходимым для обслуживания яхт.
                        </p>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Потверждение участия в путешествии -->
<div class="modal fade" id="modal-confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">
                    Потверждение участия<br>
                    в путешествии
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>В путешествии примут участие</p>
                    </div>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img src="/images/foto1.png" alt="Александр Сергеевич" class="img-circle">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <p>
                                    1 участник<br>
                                    <span class="fio">Александр Сергеевич</span><br>
                                    <span class="cost">600 Евро</span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <img src="/images/foto2.png" alt="Наталья Семеновна" class="img-circle">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <p>
                                    2 участник<br>
                                    <span class="fio">Наталья Семеновна</span><br>
                                    <span class="cost">600 Евро</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>
                            Общая стоимость путешествия:<br>
                            <span class="costB">1 200 Евро</span> (оплачивается Капитану на месте)
                        </p>
                        <p>
                            Комиссия сайта (10%)<br>
                            <span class="costB">120 Евро</span> (оплачивается при бронировании)
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <p><span class="costB">Полная стоимость: 1320 Евро</span></p>
                	</div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <button type="button" class="btn btn-4" data-dismiss="modal" aria-hidden="true">
                            Подтвердить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Вы согласны с условиями работы сайта? -->
<div class="modal fade" id="modal-lic">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">
                    Вы согласны с условиями<br>
                    работы сайта?
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>
                            Аренда катамарана в Черногории позволит вам свободно перемещаться по всей акватории, обойти
                            все острова и заливы, насладиться уединенными гаванями и пляжами, а также получить
                            удовольствие от морских развлечений, как рыбалка, снорклинг и др. – все это включено в
                            круизную программу. Наша база находится в трех километрах от международного аэропорта Тиват
                            (марина MarinaSolila) и оснащена всем необходимым для обслуживания яхт.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <button type="button" class="btn btn-5" data-dismiss="modal" aria-hidden="true">
                            Да
                        </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                        <button type="submit" class="btn btn-4" data-dismiss="modal" aria-hidden="true">
                            Нет
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Потверждено участие путешественника -->
<div class="modal fade" id="modal-confirmOne">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">
                    Потверждено участие<br>
                    путешественника
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="/images/foto1.png" alt="Александр Сергеевич" class="img-circle">
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <p>
                            Забранированное место 5<br>
                            <span class="fio">Александр Сергеевич</span><br>
                            Мужчина 32 года
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <button type="button" class="btn btn-4" data-dismiss="modal" aria-hidden="true">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3 Место -->
<div class="modal fade" id="modal-thirdPlace">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <div class="text-center">
                    <img src="/images/foto5.png" alt="Александр Сергеевич" class="img-circle">
                    <h4 class="modal-title">3 Место</h4>
                </div>
            </div>
            <div class="modal-body text-center">
                <p>
                    Мужчина 32 года<br>
                    <span class="fio">Александр Сергеевич</span><br>
                    Согласен жить с противополжным полом
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Выберите способ оплаты -->
<div class="modal fade" id="modal-pay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Выберите способ оплаты</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="visa"></div>
                        <div class="radio text-center">
                            <label>
                                <p><input type="radio" name="payment" id="IDvisa" value="visa" checked></p>
                                <p>
                                    Картой <br>
                                    VISA
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="mastercard"></div>
                        <div class="radio text-center">
                            <label>
                                <p><input type="radio" name="payment" id="IDmastercard" value="mastercard"></p>
                                <p>
                                    Картой <br>
                                    MasterCard
                                </p>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="cash"></div>
                        <div class="radio text-center">
                            <label>
                                <p><input type="radio" name="payment" id="IDcash" value="cash"></p>
                                <p>
                                    Наличными <br>
                                    Шкиперу
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="ccol-xs-12 col-sm-offset-3 col-sm-6 text-center">
                        <button type="button" class="btn btn-4" data-dismiss="modal" aria-hidden="true">
                            Оплатить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>