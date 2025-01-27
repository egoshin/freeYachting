<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/config.php.inc";
require_once $_SERVER['DOCUMENT_ROOT']."/include/define.php.inc";
$namePage = "Создание путешествия";
$title = SITE_TITLE." | ".$namePage;
require_once $_SERVER['DOCUMENT_ROOT']."/include/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/breadcrumbs.php";
?>
    <div class="container content form-common">
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
                            <a href="<?=SITE_DIR?>skipper-profile.php" class="btn btn-9">Профиль</a>
                            <a href="<?=SITE_DIR?>travel-list.php" class="btn btn-9">Текущие путешествия</a>
                            <a href="<?=SITE_DIR?>travel-archives.php" class="btn btn-9">Архив путешествий</a>
                        </div>
                    </div>
                </div>
                <form action="" method="post" role="form">
                    <div class="deliver"></div>
                    <div class="row profile-top">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputNameTravel">Название путешествия <span>*</span></label>
                                <input type="text" class="form-control" name="inputNameTravel" id="inputNameTravel">
                            </div>
                            <div class="form-group">
                                <label for="inputLevelTraining">Уровень подготовки участников <span>*</span></label>
                                <select name="name" id="inputLevelTraining" class="form-control">
                                    <option value="advancedLevel">Продвинутый уровень</option>
                                    <option value="averagedLevel">Средний уровень</option>
                                    <option value="firstLevel">Начальный уровень</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputParticipationChildren">Участие детей</label>
                                        <select name="inputParticipationChildren" id="inputParticipationChildren" class="form-control">
                                            <option value="yes">Да</option>
                                            <option value="no">Нет</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="ageChild">Мин. возраст детей</label>
                                        <select name="ageChild" id="ageChild" class="form-control">
                                            <?for($i=1; $i <= 21; $i++):?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                            <?endfor;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputTypeTraining">Тип путешествия <span>*</span></label>
                                <select name="inputTypeTraining" id="inputTypeTraining" class="form-control">
                                    <option value="TypeTraining1">Участие в регате</option>
                                    <option value="TypeTraining2">Тип путешествия 2</option>
                                    <option value="TypeTraining3">Тип путешествия 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputPriceWeek">Стоимость за место на яхте в неделю <span>*</span></label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="inputPriceWeek" id="inputPriceWeek">
                                    </div>
                                    <div class="col-xs-6">
                                        <select name="inputCurrencyPriceWeek" id="inputCurrencyPriceWeek" class="form-control">
                                            <option value="EURO">EURO</option>
                                            <option value="DOLLAR">DOLLAR</option>
                                            <option value="RUBLE">РУБЛЬ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPriceDay">Стоимость за место на яхте в сутки <span>*</span></label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="inputPriceDay" id="inputPriceDay">
                                    </div>
                                    <div class="col-xs-6">
                                        <select name="inputCurrencyPriceDay" id="inputCurrencyPriceDay" class="form-control">
                                            <option value="EURO">EURO</option>
                                            <option value="DOLLAR">DOLLAR</option>
                                            <option value="RUBLE">РУБЛЬ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputDiscountHot">Скидка для Горящих предложений</label>
                                <select name="inputDiscountHot" id="inputDiscountHot" class="form-control">
                                    <option value="yes">Да</option>
                                    <option value="no" selected>Нет</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="inputDiscountHotPercent">Укажите % скидки</label>
                                        <select name="inputDiscountHotPercent" id="inputDiscountHotPercent" class="form-control" disabled="disabled">
                                            <?for($i=5; $i <= 100; $i += 5):?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                            <?endfor;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="inputDiscountHotDate">Срок активации скидки</label>
                                        <select name="inputDiscountHotPercent" id="inputDiscountHotDate" class="form-control" disabled="disabled">
                                            <?for($i=1; $i <= 12; $i++):?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                            <?endfor;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputMinNumberTravellers">Минимальное количество заполненных мест на яхте, <br>
                                    при котором путешествие состоится <span>*</span></label>
                                <select name="inputMinNumberTravellers" id="inputMinNumberTravellers" class="form-control">
                                    <?for($i=1; $i <= 10; $i++):?>
                                        <option value="<?=$i?>"><?=$i?></option>
                                    <?endfor;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDateBeginTravel">Дата начала путешествия <span>*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDateBeginTravel" id="inputDateBeginTravel" aria-describedby="addonDateBeginIcon">
                                    <span class="input-group-addon" id="addonDateBeginIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDateEndTravel">Дата окончания путешествия <span>*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="inputDateEndTravel" id="inputDateEndTravel" aria-describedby="addonDateEndIcon">
                                    <span class="input-group-addon" id="addonDateEndIcon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputConfirmSkipper"><br class="hidden-xs">Подтверждение участия со стороны шкипера</label>
                                <select name="inputConfirmSkipper" id="inputConfirmSkipper" class="form-control">
                                    <option value="yes">Да</option>
                                    <option value="no">Нет</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputDays">Количество дней путешествия</label>
                                <select name="inputDays" id="inputDays" class="form-control">
                                    <?for($i=1; $i <= 30; $i++):?>
                                        <option value="<?=$i?>"><?=$i?></option>
                                    <?endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputCountryTravel">Страна путешествия <span>*</span></label>
                                <input type="text" class="form-control" name="inputCountryTravel" id="inputCountryTravel">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputWaterareaTravel">Акватория путешествия <span>*</span></label>
                                <input type="text" class="form-control" name="inputWaterareaTravel" id="inputWaterareaTravel">
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><b>Информация о яхте</b></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputTypeBoat">Тип судна</label>
                                        <select name="inputTypeBoat" id="inputTypeBoat" class="form-control">
                                            <option value="yacht">Яхта</option>
                                            <option value="catamaran">Катамаран</option>
                                            <option value="other">Другой тип судна</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputTypeYacht">Тип Яхты</label>
                                        <select name="inputTypeYacht" id="inputTypeYacht" class="form-control">
                                            <option value="yachtAndEngine">Парус / Мотор</option>
                                            <option value="velum">Парус</option>
                                            <option value="engine">Мотор</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputManufacturer">Производитель</label>
                                        <select name="inputManufacturer" id="inputManufacturer" class="form-control">
                                            <option value="yachtAndEngine">Bavaria 38</option>
                                            <option value="velum">Bavaria 38</option>
                                            <option value="engine">Bavaria 38</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputYearManufacture">Год выпуска</label>
                                        <input type="text" class="form-control" name="inputYearManufacture" id="inputYearManufacture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Длина яхты <span>*</span></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="inputLengthBoatsFT" id="inputLengthBoatsFT" aria-describedby="addonLengthBoatsFT">
                                            <span class="input-group-addon addon2" id="addonLengthBoatsFT">FT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="inputLengthBoatsM" id="inputLengthBoatsM" aria-describedby="addonLengthBoatsM">
                                            <span class="input-group-addon addon2" id="addonLengthBoatsM">M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputWсСount">Количество санузлов</label>
                                <input type="text" class="form-control" name="inputWсСount" id="inputWсСount">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputDoubleCabinСount">Количество свободных двухместных кают <span>*</span></label>
                                <input type="text" class="form-control" name="inputDoubleCabinСount" id="inputDoubleCabinСount">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSingleCabinСount">Количество свободных одноместных кают <span>*</span></label>
                                <input type="text" class="form-control" name="inputSingleCabinСount" id="inputSingleCabinСount">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaDescription">Краткое описание яхты</label>
                                <textarea class="form-control" rows="7" name="textareaDescription" id="textareaDescription"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaFeatures">Особенности</label>
                                <textarea class="form-control" rows="7" name="textareaFeatures" id="textareaFeatures"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><b>Выберете типовую яхту из списка <br class="visible-xs">или загрузите схему</b></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="/images/yachts/yacht.jpg" alt="Яхта..." class="img-responsive yachta-foto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <div class="form-group">
                                <label for="inputSelectYacht">Выберете яхту</label>
                                <select name="inputSelectYacht" id="inputSelectYacht" class="form-control">
                                    <option value="yacht1">Яхта такая то</option>
                                    <option value="yacht2">Яхта сякая то</option>
                                    <option value="yacht3">Яхта не такая, не сякая</option>
                                    <option value="yacht4">Яхта такая, сякая</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <a href="#" class="btn btn-3 btn-middle">Выбрать</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-right">
                            <a href="#" class="btn btn-4 btn-middle">Загрузить схему яхты</a>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputMethodPayment">Способ оплаты услуг Капитана</label>
                                <select name="inputMethodPayment" id="inputMethodPayment" class="form-control">
                                    <option value="yacht1">Оплата через сайт</option>
                                    <option value="yacht2">Оплата наличными капитану</option>
                                    <option value="yacht3">Другой способ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputSitePercent">Процент коммисии сайта</label>
                                <select name="inputSitePercent" id="inputSitePercent" class="form-control">
                                    <?for($i=0; $i <= 30; $i += 5):?>
                                        <option value="<?=$i?>"><?=$i?>%</option>
                                    <?endfor;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputArrival">Место прилета (аэропорт) <span>*</span></label>
                                <input type="text" class="form-control" name="inputArrival" id="inputArrival">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputDeparture">Место вылета (аэропорт) <span>*</span></label>
                                <input type="text" class="form-control" name="inputDeparture" id="inputDeparture">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputTransfer">Трансфер от аэропорта до места отплытия:</label>
                                <select name="inputTransfer" id="inputTransfer" class="form-control">
                                    <option value="group">Групповой</option>
                                    <option value="individual">Индивидуальный</option>
                                    <option value="none">Нет трансфера</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="inputPriceWeek">Стоимость</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="inputPriceTransfer" id="inputPriceTransfer">
                                    </div>
                                    <div class="col-xs-6">
                                        <select name="inputCurrencyPriceTransfer" id="inputCurrencyPriceTransfer" class="form-control">
                                            <option value="EURO">EURO</option>
                                            <option value="DOLLAR">DOLLAR</option>
                                            <option value="RUBLE">РУБЛЬ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaAddressCollection">Адрес места сбора команды</label>
                                <textarea class="form-control" rows="5" name="textareaAddressCollection" id="textareaAddressCollection"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Географические координаты <span>*</span></label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="input-group left-addon">
                                            <span class="input-group-addon addon2" id="addonCoordinateN">N</span>
                                            <input type="text" class="form-control" name="inputCoordinateN" id="inputCoordinateN" aria-describedby="addonCoordinateN">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="input-group left-addon">
                                            <span class="input-group-addon addon2" id="addonCoordinateE">E</span>
                                            <input type="text" class="form-control" name="inputCoordinateE" id="inputCoordinateE" aria-describedby="addonCoordinateE">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Время сбора команды <span>*</span></label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="inputTimeHour" id="inputTimeHour" aria-describedby="addonCoordinateN">
                                        <div class="points">:</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="inputTimeMinute" id="inputTimeMinute" aria-describedby="addonCoordinateE">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaListIncluded">Перечень того, что входит в стоимость путешествия <span>*</span></label>
                                <textarea class="form-control" rows="7" name="textareaListIncluded" id="textareaListIncluded"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="textareaListNotIncluded">Перечень того, что не входит в стоимость путешествия <span>*</span></label>
                                <textarea class="form-control" rows="7" name="textareaListNotIncluded" id="textareaListNotIncluded"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><b>Фотографии путешествий</b></p>
                            <p>Основное фото</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 main-foto-block">
                            <img src="/images/travels/foto1.jpg" alt="Основное фото" class="img-responsive main-foto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Дополнительное фото</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <img src="/images/travels/foto2.jpg" alt="Дополнительное фото" class="img-responsive addinitional-foto">
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <img src="/images/travels/foto3.jpg" alt="Дополнительное фото" class="img-responsive addinitional-foto">
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <img src="/images/travels/foto2.jpg" alt="Дополнительное фото" class="img-responsive addinitional-foto">
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <img src="/images/travels/foto3.jpg" alt="Дополнительное фото" class="img-responsive addinitional-foto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p>Не более 10 фотографий. Формат jpeg. Размер не более 4 мб <span class="red">*</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="#" class="btn btn-4 btn-long">Загрузить фото</a>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p><b>Описание путешествия по дням</b></p>
                        </div>
                    </div>
                    <div class="one-day">
                        <div class="row">
                            <div class="col-xs-12">
                                <p><b>День 1</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputCityDeparture1">Город отправления <span>*</span></label>
                                    <input type="text" class="form-control" name="inputCityDeparture1" id="inputCityDeparture1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Географические координаты <span>*</span></label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityDepartureN1">N</span>
                                                <input type="text" class="form-control" name="inputCityDepartureN1" id="inputCityDepartureN1" aria-describedby="addonCityDepartureN1">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityDepartureE1">E</span>
                                                <input type="text" class="form-control" name="inputCityDepartureE1" id="inputCityDepartureE1" aria-describedby="addonCityDepartureE1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputCityArrival1">Город прибытия <span>*</span></label>
                                    <input type="text" class="form-control" name="inputCityArrival1" id="inputCityArrival1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Географические координаты <span>*</span></label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityArrivalN1">N</span>
                                                <input type="text" class="form-control" name="inputCityArrivalN1" id="inputCityArrivalN1" aria-describedby="addonCityArrivalN1">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityArrivalE1">E</span>
                                                <input type="text" class="form-control" name="inputCityArrivalE1" id="inputCityArrivalE1" aria-describedby="addonCityArrivalE1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputLength1">Протяженность маршрута <span>*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="inputLength1" id="inputLength1" aria-describedby="addonLength1">
                                        <span class="input-group-addon addon2" id="addonLength1">Миль</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-3 btn-middle margin-left0">Добавить точку</a>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="textareaDetailed1">Подробное описание</label>
                                    <textarea class="form-control" rows="7" name="textareaDetailed1" id="textareaDetailed1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deliver"></div>
                    <div class="one-day">
                        <div class="row">
                            <div class="col-xs-12">
                                <p><b>День 2</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputCityDeparture2">Город отправления <span>*</span></label>
                                    <input type="text" class="form-control" name="inputCityDeparture2" id="inputCityDeparture2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Географические координаты <span>*</span></label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityDepartureN2">N</span>
                                                <input type="text" class="form-control" name="inputCityDepartureN2" id="inputCityDepartureN2" aria-describedby="addonCityDepartureN2">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityDepartureE2">E</span>
                                                <input type="text" class="form-control" name="inputCityDepartureE2" id="inputCityDepartureE2" aria-describedby="addonCityDepartureE2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputCityArrival2">Город прибытия <span>*</span></label>
                                    <input type="text" class="form-control" name="inputCityArrival2" id="inputCityArrival2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label>Географические координаты <span>*</span></label>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityArrivalN2">N</span>
                                                <input type="text" class="form-control" name="inputCityArrivalN2" id="inputCityArrivalN2" aria-describedby="addonCityArrivalN2">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="input-group left-addon">
                                                <span class="input-group-addon addon2" id="addonCityArrivalE2">E</span>
                                                <input type="text" class="form-control" name="inputCityArrivalE2" id="inputCityArrivalE2" aria-describedby="addonCityArrivalE2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputLength2">Протяженность маршрута <span>*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="inputLength2" id="inputLength2" aria-describedby="addonLength2">
                                        <span class="input-group-addon addon2" id="addonLength2">Миль</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-3 btn-middle margin-left0">Добавить точку</a>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="textareaDetailed2">Подробное описание</label>
                                    <textarea class="form-control" rows="7" name="textareaDetailed2" id="textareaDetailed2"></textarea>
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
                        <div class="col-xs-12 col-sm-6 text-right">
                            <button type="submit" class="btn btn-5">Вернуться к списку без сохранения</button>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-left">
                            <button type="submit" class="btn btn-4">Сохранить путешествие</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 banner-xs">
                <?require_once $_SERVER['DOCUMENT_ROOT']."/include/banners.php";?>
            </div>
        </div>
    </div>
<?
require_once $_SERVER['DOCUMENT_ROOT']."/include/inhelp.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/seoblock.php";
require_once $_SERVER['DOCUMENT_ROOT']."/include/footer.php";
?>