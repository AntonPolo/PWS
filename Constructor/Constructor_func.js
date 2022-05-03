//Задаём начальное значение для типа конструкции
var type_win_Value = "win1";

//Функция для получения типа констркции
function radio_data() {
    type_win_Value = $('input[name="type__img"]:checked').val();
    if(type_win_Value == "BB5" || type_win_Value == "BB6" || type_win_Value == "BB7"){

        $('#hiegth_win').removeClass("sizer-left");
        $('#hiegth_win').addClass("sizer-right-mirror");

        $('#width_win').removeClass("sizer-bottom-win");
        $('#width_win').addClass("sizer-bottom-win-mirror");

        $('#width_door').removeClass("sizer-bottom-door");
        $('#width_door').removeClass("sizer-bottom-door-chebu");
        $('#width_door').addClass("sizer-bottom-door-mirror");

        $('#hiegth_door').removeClass("sizer-right");
        $('#hiegth_door').addClass("sizer-left-mirror");

    }else if(type_win_Value == "BB8"){

        $('#width_door').removeClass("sizer-bottom-door");
        $('#width_door').removeClass("sizer-bottom-door-mirror");
        $('#width_door').addClass("sizer-bottom-door-chebu");

    }else{

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
    "https://i.yapx.cc/RyIMU.png",
    "https://i.yapx.cc/RyIMX.png",
    "https://i.yapx.cc/RyIMZ.png",
    "https://i.yapx.cc/RyIMV.png",
    "https://i.yapx.cc/RyIMW.png",
];

var imgs_changed_door = ["https://i.yapx.cc/RyIMR.png", "https://i.yapx.cc/RyIMT.png"];

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
    var constructor_img_win = "https://i.yapx.cc/RyIMU.png"; //Глухое окно
    var constructor_img_door = "https://i.yapx.cc/RyIMR.png"; //Дверь

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
        document.getElementById("width_win").style.display = "none";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        document.getElementById("hiegth_door").style.display = "none";
    } else if (type_win_Value == "win2") {
        for (i = 0; i < 2; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;
        document.getElementById("width_win").style.display = "none";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        document.getElementById("hiegth_door").style.display = "none";
    } else if (type_win_Value == "win3") {
        for (i = 0; i < 3; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;
        document.getElementById("width_win").style.display = "none";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        document.getElementById("hiegth_door").style.display = "none";
    } else if (type_win_Value == "win4") {
        for (i = 0; i < 4; i++) {
            img += `<img src=\"${constructor_img_win}\" onclick=\"changeIMG_win(${i})\" id=\"${i}\" alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;
        document.getElementById("width_win").style.display = "none";
        document.getElementById("width_const").style.display = "flex";
        document.getElementById("hiegth_win").style.display = "flex";
        document.getElementById("width_door").style.display = "none";
        document.getElementById("hiegth_door").style.display = "none";
    } else if (type_win_Value == "BB1") {
        for (i = 0; i < 1; i++) {
            img += `<img src=\"${constructor_img_door}\" onclick=\"changeIMG_door(${i})\" id=\"${i}\"  alt=\"\">`;
        }
        count_1 = 1;
        count_2 = 1;
        count_3 = 1;
        count_4 = 1;
        count_door = 1;
        document.getElementById("width_win").style.display = "none";
        document.getElementById("width_const").style.display = "none";
        document.getElementById("hiegth_win").style.display = "none";
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



        var imgLenght = $(".Constructor_result_img img").length;
        var lastImg = [];
        for (let i = 0; i < imgLenght; i++) {
            lastImg[i] = $(`#imgLast${i}`).attr('src');
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

        let user_phone = $(".user_phone").val();
        let user_name = $(".user_name").val();


        $.ajax({
            url: "./mail.php",
            type: "POST",
            cache: false,
            data: {
                lastImg: lastImg,
                user_phone: user_phone,
                user_name: user_name,
                Profile: Profile_type,
                Double_glazed_windows: Double_glazed_windows,
                glassOption_1: glassOption_1,
                glassOption_2: glassOption_2,
                Profile_color: Profile_color,
                Otliv_Size: Otliv_Size,
                Windowsill_Size: Windowsill_Size,
                addOption_text: addOption_text
            },
            beforeSend: function() {
                $("#sendFormBTN").prop("disabled", true);
            },
            success: function(data) {
                if (!data) {
                    alert("Ошибка");
                } else {
                    alert("Сообщение отправленно администратору. Ожидайте звонка.");
                    location.reload(true);
                    return false;
                }
                $("#sendFormBTN").prop("disabled", false);
            }
        })



    })
});