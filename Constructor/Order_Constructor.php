<div class="container Order_Constructor">

    <h1 style="    font-size: 28px; margin-bottom: 10px; font-weight: 600;">Конструктор заказа (Консультация):</h1>

    <form action="#" method="post" id="constructor_form" style="display: flex;">
        <!-- *************************************** Step 1 *************************************** -->

        <div class="Step_1">
            <div class="undtitle" style="display: inline-flex;">
                <p style="font-size: 24px; color: #999999">01</p>
                <p style="font-size: 24px; margin-left: 20px;">Тип конструкции:</p>
            </div>

            <div class="glass">
                <label class="label__constr">

                    <input type="radio" name="type__img" id="win__img1" value="win1" onclick="radio_data()" checked>

                    <img src="./img/win/win_1.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="win__img2" value="win2" onclick="radio_data()"> <img src="./img/win/win_2.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="win__img3" value="win3" onclick="radio_data()"> <img src="./img/win/win_3.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="win__img4" value="win4" onclick="radio_data()"> <img src="./img/win/win_4.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img1" value="BB1" onclick="radio_data()"> <img src="./img/win/BB_1.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img2" value="BB2" onclick="radio_data()"> <img src="./img/win/BB_2z.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img3" value="BB3" onclick="radio_data()"> <img src="./img/win/BB_3z.png">

                </label>
                <!--</div>

        <div class="glass">-->
                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img4" value="BB4" onclick="radio_data()"> <img src="./img/win/BB_4z.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img5" value="BB5" onclick="radio_data()"> <img src="./img/win/BB_2.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img6" value="BB6" onclick="radio_data()"> <img src="./img/win/BB_3.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img7" value="BB7" onclick="radio_data()"> <img src="./img/win/BB_4.png">

                </label>

                <label class="label__constr">

                    <input type="radio" name="type__img" id="BB__img8" value="BB8" onclick="radio_data()"> <img src="./img/win/WBW.png">

                </label>
            </div>


            <div class="button-const">
                <button class="button_next" id="next">Далее</button>

            </div>
        </div>

        <!-- *************************************** Step 2 *************************************** -->
        <div class="Step_2" style="display: none;" id="const">
            <div class="undtitle">
                <p style="font-size: 24px; color: #999999">02</p>
                <p style="font-size: 24px; margin-left: 20px;">Параметры конструкции:</p>
            </div>


            <div class="media" style="position: relative; margin: 40px auto;">

                <div class="Constructor_img"></div>

                <div id="width_const" class="sizer-up" style="display: none;">
                    <input type="number" maxlength="4" value="2200"></input>
                </div>

                <div id="hiegth_win" class="sizer-left" style="display: none;">
                    <input type="number" maxlength="4" value="1500"></input>
                </div>

                <div id="width_win" class="sizer-bottom-win" style="display: none;">
                    <input type="number" maxlength="4" value="750"></input>
                </div>

                <div id="width_door" class="sizer-bottom-door" style="display: none;">
                    <input type="number" maxlength="4" value="700"></input>
                </div>

                <div id="hiegth_door" class="sizer-right" style="display: none;">
                    <input type="number" maxlength="4" value="2200"></input>
                </div>


            </div>
            <div class="button-const">
                <button class="button_prev" id="back_1">Назад</button>
                <button id="next_2" class="button_next">Далее</button>
                <div id="error"></div>
            </div>
        </div>
        <!-- *************************************** Step 3 ***************************************-->
        <div class="Step_3" style="display: none;">
            <div class="undtitle">
                <p style="font-size: 24px; color: #999999">03</p>
                <p style="font-size: 24px; margin-left: 20px;">Дополнительные функции:</p>
            </div>


            <div class="step3-item">
                <div class="sel">
                    <p style="font-size: 12px; margin-bottom: 5px;">Профиль:</p>
                    <select class="selcts" name="Profile_type">
                        <option value="REHAU Blitz">REHAU Blitz</option>
                        <option value="REHAU Thermo">REHAU Thermo</option>
                        <option value="REHAU Grazio">REHAU Grazio</option>
                        <option value="REHAU Delight">REHAU Delight</option>
                        <option value="REHAU Delight Decor">REHAU Delight Decor</option>
                        <option value="REHAU Brilliant">REHAU Brilliant</option>
                        <option value="REHAU Geneo">REHAU Geneo</option>
                    </select>
                </div>
                <div class="sel">
                    <p style="font-size: 12px; margin-bottom: 5px;">Стеклопакет:</p>
                    <select class="selcts" name="Double_glazed_windows">
                        <option value="Однокамерный 24мм">Однокамерный 24мм</option>
                        <option value="Двухкамерный 32мм">Двухкамерный 32мм</option>
                    </select>
                </div>
            </div>

            <div class="sel check step3-item" style="grid-column-gap: 40px;">
                <p style="font-size: 12px;">Стекло <i style="color: red;">Не обязательно*</i></p>
                <div></div>
                <div>
                    <input type="checkbox" id="glassOption_1" name="chk">
                    <label for="glassOption_1">Энергосберегающее</label>
                </div>
                <div>
                    <input type="checkbox" id="glassOption_2" name="chk">
                    <label for="glassOption_2">Солнцезащитное</label>
                </div>
            </div>
            <div class="step3-item">
                <div class="sel">
                    <p style="font-size: 12px; margin-bottom: 5px;">Цвета сторон:</p>
                    <select class="selcts" name="Profile_color">
                        <option value="Белый/Белый">Белый/Белый</option>
                        <option value="Белый/Цвет">Белый/Цвет</option>
                        <option value="Цвет/Белый">Цвет/Белый</option>
                        <option value="Цвет/Цвет">Цвет/Цвет</option>
                    </select>
                </div>
                <div class="sel">
                    <p style="font-size: 12px; margin-bottom: 5px;">Отлив:</p>
                    <select class="selcts" name="Otliv_Size">
                        <option value="нет">нет</option>
                        <option value="менее 100мм">менее 100мм</option>
                        <option value="100-200мм">100-200мм</option>
                        <option value="200-300мм">200-300мм</option>
                        <option value="300-400мм">300-400мм</option>
                    </select>
                </div>
            </div>
            <div class="step3-item">
                <div class="sel">
                    <p style="font-size: 12px; margin-bottom: 5px;">Подоконник:</p>
                    <select class="selcts" name="Windowsill_Size">
                        <option value="нет">нет</option>
                        <option value="150мм">150мм</option>
                        <option value="200мм">200мм</option>
                        <option value="250мм">250мм</option>
                        <option value="300мм">300мм</option>
                        <option value="350мм">350мм</option>
                        <option value="400мм">400мм</option>
                        <option value="450мм">450мм</option>
                        <option value="500мм">500мм</option>

                    </select>
                </div>
            </div>
            <div style="margin: 20px;">
                <div class="sell">
                    <div>
                        <input type="checkbox" id="addOption_1" style="font-size: 14px;"><label>Отделка откосов</label>
                    </div>
                    <div>
                        <input type="checkbox" id="addOption_2" style="font-size: 14px;"><label>Микропроветривание</label>
                    </div>
                </div>
                <div class="sell">
                    <div>
                        <input type="checkbox" id="addOption_3" style="font-size: 14px;"><label>Штапик фигурный</label>
                    </div>
                    <div>
                        <input type="checkbox" id="addOption_4" style="font-size: 14px;"><label>Детский замок</label>
                    </div>
                </div>
            </div>



            <div class="button-const">
                <button class="button_prev" id="back_2">Назад</button>
                <button id="next_3" class="button_next">Далее</button>
                <div id="error"></div>
            </div>
        </div>

        <!--*************************************** All info ***************************************-->
        <div class="End" style="display: none;">
            <div class="undtitle">
                <p style="font-size: 24px; color: #999999">04</p>
                <p style="font-size: 24px; margin-left: 20px;">Итог:</p>
            </div>

            <div class="allInfo" id="allInfo">
                <div class="Constructor_result_img"></div>

                <div class="Constructor_result_form_1"></div>
                <div class="Constructor_result_form_2"></div>
                <div class="Constructor_result_form_3"></div>
                <div class="Constructor_result_form_4"></div>
                <div class="Constructor_result_form_5"></div>
                <div class="Constructor_result_form_6"></div>
                <div class="Constructor_result_form_7"></div>
                <fieldset>
                    <legend><b>Отправить на расчёт:</b></legend>
                    <div class="const-send">
                        <div>
                            <div class="input-group">
                                <!--<label><b>Номер телефона:</b></label>-->
                                <input type="tel" class="form-control user_phone" pattern="[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" placeholder="Номер Телефона" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-group">
                                <!--<label><b>Имя:</b></label>-->
                                <input type="text" class="form-control user_name" placeholder="Ваше Имя" required>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="button-const">
                <button class="button_prev" id="back_3">Назад</button>
                <input type="button" value="Отправить" id="sendFormBTN" class="const-b-send">
            </div>
        </div>
    </form>
</div>