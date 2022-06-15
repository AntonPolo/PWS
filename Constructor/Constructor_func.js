//Задаём начальное значение для типа конструкции
var type_win_Value = "win1";

//Функция для получения типа констркции
function radio_data() {
    type_win_Value = $('input[name="type__img"]:checked').val();
    if (type_win_Value == "BB5" || type_win_Value == "BB6" || type_win_Value == "BB7") {

        $('#hiegth_win').removeClass("sizer-left");
        $('#hiegth_win').addClass("sizer-right-mirror");

        $('#width_win').removeClass("sizer-bottom-win");
        $('#width_win').addClass("sizer-bottom-win-mirror");

        $('#width_door').removeClass("sizer-bottom-door");
        $('#width_door').removeClass("sizer-bottom-door-chebu");
        $('#width_door').addClass("sizer-bottom-door-mirror");

        $('#hiegth_door').removeClass("sizer-right");
        $('#hiegth_door').addClass("sizer-left-mirror");

    } else if (type_win_Value == "BB8") {

        $('#width_door').removeClass("sizer-bottom-door");
        $('#width_door').removeClass("sizer-bottom-door-mirror");
        $('#width_door').addClass("sizer-bottom-door-chebu");

    } else {

        $('#hiegth_win').removeClass("sizer-right-mirror");
        $('#hiegth_win').addClass("sizer-left");

        $('#width_win').removeClass("sizer-bottom-win-mirror");
        $('#width_win').addClass("sizer-bottom-win");

        $('#width_door').removeClass("sizer-bottom-door-mirror");
        $('#width_door').removeClass("sizer-bottom-door-chebu");
        $('#width_door').addClass("sizer-bottom-door");

        $('#hiegth_door').removeClass("sizer-left-mirror");
        $('#hiegth_door').addClass("sizer-right");

    }
}

//Массивы ссылок на изображения для функций замены изображений
var imgs_changed_win = [
    "img/changed_win/Wondow.webp",
    "img/changed_win/Wondow-3.webp",
    "img/changed_win/Wondow-4.webp",
    "img/changed_win/Wondow-1.webp",
    "img/changed_win/Wondow-2.webp",
];

var imgs_changed_door = ["img/changed_win/Door.webp", "img/changed_win/Door-1.webp"];

//Счётчики исполнения функций замены изображений для перебора массивов
var count_1;
var count_2;
var count_3;
var count_4;
var count_door;

//Функция замены изображений для окон
function changeIMG_win(id) {
    if (id == 0) {
        let image = document.getElementById(id);
        if (count_1 == 5) {
            count_1 = 0;
        }
        image.src = imgs_changed_win[count_1];

        count_1++;
    } else if (id == 1) {
        let image = document.getElementById(id);
        if (count_2 == 5) {
            count_2 = 0;
        }
        image.src = imgs_changed_win[count_2];

        count_2++;
    } else if (id == 2) {
        let image = document.getElementById(id);
        if (count_3 == 5) {
            count_3 = 0;
        }
        image.src = imgs_changed_win[count_3];

        count_3++;
    } else if (id == 3) {
        let image = document.getElementById(id);
        if (count_4 == 5) {
            count_4 = 0;
        }
        image.src = imgs_changed_win[count_4];

        count_4++;
    }
}

//Функция замены изображений для двери
function changeIMG_door(id) {
    let image = document.getElementById(id);
    if (count_door == 2) {
        count_door = 0;
    }
    image.src = imgs_changed_door[count_door];

    count_door++;
}

//Реализация 2 шага
$("#back_1").on("click", function() {
    $(".Step_2").css("display", "none")
    $(".Step_1").css("display", "flex")
})

$("#next").on("click", function(e) {
    e.preventDefault();

    $(".Step_2").css("display", "flex")
    $(".Step_1").css("display", "none")
    var constructor_img_win = "./img/changed_win/Wondow.webp"; //Глухое окно
    var constructor_img_door = "./img/changed_win/Door.webp"; //Дверь

    var img = "";
    var input = "";
    var i, j, g;

    //Условия для постройки изображений исходя из типа конструкции
    if (type_win_Value == "win1") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "none";
        $('#width_win input').attr("value", "0");
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        $('#width_door input').attr("value", "0");
        document.getElementById("hiegth_door").style.display = "none";
        $('#hiegth_door input').attr("value", "0");
    } else if (type_win_Value == "win2") {
        for (i = 0; i < 2; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "none";
        $('#width_win input').attr("value", "0");
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        $('#width_door input').attr("value", "0");
        document.getElementById("hiegth_door").style.display = "none";
        $('#hiegth_door input').attr("value", "0");
    } else if (type_win_Value == "win3") {
        for (i = 0; i < 3; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "none";
        $('#width_win input').attr("value", "0");
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        $('#width_door input').attr("value", "0");
        document.getElementById("hiegth_door").style.display = "none";
        $('#hiegth_door input').attr("value", "0");
    } else if (type_win_Value == "win4") {
        for (i = 0; i < 4; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "none";
        $('#width_win input').attr("value", "0");
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        $('#width_door input').attr("value", "0");
        document.getElementById("hiegth_door").style.display = "none";
        $('#hiegth_door input').attr("value", "0");
    } else if (type_win_Value == "BB1") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i})\" id=\"${i}\"  alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "none";
        $('#width_win input').attr("value", "0");
        document.getElementById("width_const").style.display = "none";
        $('#width_const input').attr("value", "0");
        document.getElementById("hiegth_win").style.display = "none";
        $('#hiegth_win input').attr("value", "0");
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB2") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        for (j = 0; j < 1; j++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i + j
                })\" id=\"${i + j}\"  alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB3") {
        for (i = 0; i < 2; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        for (j = 0; j < 1; j++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i + j
                })\" id=\"${i + j}\"  alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB4") {
        for (i = 0; i < 3; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        for (j = 0; j < 1; j++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i + j
                })\" id=\"${i + j}\"  alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB5") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i})\" id=\"${i}\"  alt=\"\">`;
        }
        for (j = 0; j < 1; j++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i + j
                })\" id=\"${i + j}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB6") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i})\" id=\"${i}\"  alt=\"\">`;
        }
        for (j = 0; j < 2; j++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i + j
                })\" id=\"${i + j}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB7") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i})\" id=\"${i}\"  alt=\"\">`;
        }
        for (j = 0; j < 3; j++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i + j
                })\" id=\"${i + j}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    } else if (type_win_Value == "BB8") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        for (j = 0; j < 1; j++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i + j
                })\" id=\"${i + j}\"  alt=\"\">`;
        }
        for (g = 0; g < 1; g++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i + j + g
                })\" id=\"${i + j + g}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;

        $('#width_const input').attr("value", "2200");
        $('#hiegth_win input').attr("value", "1500");
        $('#width_win input').attr("value", "750");
        $('#width_door input').attr("value", "700");
        $('#hiegth_door input').attr("value", "2200");

        document.getElementById("width_win").style.display = "flex";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "flex";
        document.getElementById("hiegth_door").style.display = "flex";
    }

    $(".Constructor_img").html(img);

    $("#size_info").html(input);
});

//Отправка изображения из 2 шага в последний

$("#back_2").on("click", function() {
    $(".Step_3").css("display", "none")
    $(".Step_2").css("display", "flex")
})

$("#next_2").on("click", function() {

    var width_const = $("#width_const input").val().trim();
    var hiegth_win = $("#hiegth_win input").val().trim();
    var width_win = $("#width_win input").val().trim();
    var width_door = $("#width_door input").val().trim();
    var hiegth_door = $("#hiegth_door input").val().trim();

    let errors = 0;

    if (width_const > 10000 || width_const == "") {
        $("#width_const input").css("border-color", "red");
        errors++;
    } else {
        $("#width_const input").css("border-color", "");
    }
    if (hiegth_win > 10000 || hiegth_win == "") {
        $("#hiegth_win input").css("border-color", "red");
        errors++;
    } else {
        $("#hiegth_win input").css("border-color", "");
    }
    if (width_win > 10000 || width_win == "") {
        $("#width_win input").css("border-color", "red");
        errors++;
    } else {
        $("#width_win input").css("border-color", "");
    }
    if (width_door > 10000 || width_door == "") {
        $("#width_door input").css("border-color", "red");
        errors++;
    } else {
        $("#width_door input").css("border-color", "");
    }
    if (hiegth_door > 10000 || hiegth_door == "") {
        $("#hiegth_door input").css("border-color", "red");
        errors++;
    } else {
        $("#hiegth_door input").css("border-color", "");
    }

    if (errors > 0) {
        $(".Step_3").css("display", "none")
        $(".Step_2").css("display", "flex")
    } else {

        $(".Step_2").css("display", "none")
        $(".Step_3").css("display", "flex")

        let img_1 = "";
        var lastIMG = [];
        var Constructor_img = document.querySelectorAll(".Constructor_img img");
        var i = 0;
        Constructor_img.forEach((element) => {

            lastIMG.push(element.src);
            img_1 += `<img src=\"${element.src}\" id=\"imgLast${i}\" alt=\"\">`;

            i++;
        });

        $(".Constructor_result_img").html(img_1);
    }
});

var addOption = [];

//Получение и Отправка данных формы из 3 шага

$("#back_3").on("click", function() {
    $(".End").css("display", "none")
    $(".Step_3").css("display", "flex")
})

$("#next_3").on("click", function() {

    $(".Step_3").css("display", "none")
    $(".End").css("display", "flex")

    var Profile_type = $("select[name=Profile_type]").val();

    var Double_glazed_windows = $("select[name=Double_glazed_windows]").val();

    if ($("#glassOption_1").is(":checked")) {
        var glassOption_1 = "Энергосберегающее";
    } else {
        glassOption_1 = "";
    }

    if ($("#glassOption_2").is(":checked")) {
        var glassOption_2 = "Солнцезащитное";
    } else {
        glassOption_2 = "";
    }

    var Profile_color = $("select[name=Profile_color]").val();

    var Otliv_Size = $("select[name=Otliv_Size]").val();

    var Windowsill_Size = $("select[name=Windowsill_Size]").val();

    addOption = [];


    if ($("#addOption_1").is(":checked")) {
        addOption[0] = "Отделка откосов";
    }

    if ($("#addOption_2").is(":checked")) {
        addOption[1] = "Микропроветривание";
    }

    if ($("#addOption_3").is(":checked")) {
        addOption[2] = "Штапик фигурный";
    }

    if ($("#addOption_4").is(":checked")) {
        addOption[3] = "Детский замок";
    }
    for (let i = 0; i < addOption.length; i++) {
        if (addOption[i] == undefined) {
            addOption[i] = "";
        }

    }



    $(".Constructor_result_form_1").html(`<b>Профиль:</b> ${Profile_type}`);
    $(".Constructor_result_form_2").html(`<b>Стеклопакет:</b> ${Double_glazed_windows}`);

    if (glassOption_1 == "" && glassOption_2 == "") {
        $(".Constructor_result_form_3").html("<b>Стекло:</b> Обычное");
    } else if (glassOption_1 == "") {
        $(".Constructor_result_form_3").html(`<b>Стекло:</b> ${glassOption_2}`);
    } else if (glassOption_2 == "") {
        $(".Constructor_result_form_3").html(`<b>Стекло:</b> ${glassOption_1}`);
    } else if (
        glassOption_1 == "Энергосберегающее" &&
        glassOption_2 == "Солнцезащитное"
    ) {
        $(".Constructor_result_form_3").html(
            `<b>Стекло:</b> ${glassOption_1}, ${glassOption_2}`
        );
    }
    $(".Constructor_result_form_4").html(`<b>Цвета сторон:</b> ${Profile_color}`);
    $(".Constructor_result_form_5").html(`<b>Отлив:</b> ${Otliv_Size}`);
    $(".Constructor_result_form_6").html(`<b>Подоконник:</b> ${Windowsill_Size}`);

    var addOption_text = "";
    for (let i = 0; i < addOption.length; i++) {
        if (i == addOption.length - 1) {
            addOption_text += addOption[i] + ".";
        } else if (addOption[i] != "") {
            addOption_text += addOption[i] + ", ";
        }
    }

    if (addOption_text == "") {
        $(".Constructor_result_form_7").html("");
    } else {
        $(".Constructor_result_form_7").html(
            `<b>Дополнительные услуги:</b> ${addOption_text}`
        );
    }



    $('#sendFormBTN').on('click', function() {
        let errors = 0;
        let user_phone = $(".user_phone").val().trim();
        let user_name = $("#user_name").val().trim();

        if (!validatePhone(user_phone)) {
            $(".user_phone").css("border-color", "red");
            $('#user_phone_error').html("*Номер введён некорректно! Пример: (+7)(8)()9876543210")
            errors++;
        } else {
            $(".user_phone").css("border-color", "");
            $('#user_phone_error').html("")
        }
        if (user_name == "") {
            $("#user_name").css("border-color", "red");
            errors++;
        } else if (user_name.length > 30) {
            $("#user_name").css("border-color", "red");
            $('#user_name_error').html("*Имя не может состоять больше чем из 30 символов!");
            errors++;
        } else {
            $("#user_name").css("border-color", "");
            $('#user_name_error').html("");
        }
        console.log(errors);
        if (errors == 0) {

            var imgLenght = $(".Constructor_result_img img").length;
            var lastImg = [];
            for (let i = 0; i < imgLenght; i++) {

                lastImg[i] = $(`#imgLast${i}`).attr('src') + "";

            }

            if (glassOption_1 == "") {
                glassOption_1 = "нет";
            } else {
                glassOption_1 = "да";
            }

            if (glassOption_2 == "") {
                glassOption_2 = "нет";
            } else {
                glassOption_2 = "да";
            }

            if (addOption_text == "") {
                addOption_text = "нет";
            }


            let data = new FormData();
            data.append("lastImg", lastImg);
            data.append("user_phone", user_phone);
            data.append("user_name", user_name);
            data.append("Profile", Profile_type);
            data.append("Double_glazed_windows", Double_glazed_windows);
            data.append("glassOption_1", glassOption_1);
            data.append("glassOption_2", glassOption_2);
            data.append("Profile_color", Profile_color);
            data.append("Otliv_Size", Otliv_Size);
            data.append("Windowsill_Size", Windowsill_Size);
            data.append("addOption_text", addOption_text);

            data.append("width_const", $("#width_const input").val().trim()); // ширина конструкции
            data.append("hiegth_win", $("#hiegth_win input").val().trim()); // высота окна
            data.append("width_win", $("#width_win input").val().trim()); // ширина окна
            data.append("width_door", $("#width_door input").val().trim()); // ширина двери
            data.append("hiegth_door", $("#hiegth_door input").val().trim()); // высота двери

            $.ajax({
                url: "./mail.php",
                type: "POST",
                cache: false,
                data: data,
                processData: false,
                contentType: false,
                dataType: "text",
                beforeSend: function() {
                    $("#sendFormBTN").prop("disabled", true);
                    $("#sendFormBTN").css("display", "none");
                    $("#sendFormBTNLoading").css("display", "initial");
                },
                success: function(data) {
                    $("#sendFormBTN").css("display", "initial");
                    $("#sendFormBTNLoading").css("display", "none");
                    if (data == "success") {
                        alert("Сообщение отправленно администратору. Ожидайте звонка.");
                        location.reload(true);
                        return false;
                    } else {
                        alert("*Ошибка. Попробуйте повторить позже");
                        //alert(data);
                        /* location.reload(true);
                        return false; */
                        $("#sendFormBTN").prop("disabled", false);
                    }
                    alert(data)
                }
            })
        }
    })
});