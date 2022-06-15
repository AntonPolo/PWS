function validatePhone(phone) {
    let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
    return regex.test(phone);
}
$("#measuring").on("click", function() {
    let errors = 0;

    let measuring_form_name = $('input[name="measuring_form_name"]').val();

    let measuring_form_phone = $('input[name="measuring_form_phone"]').val();

    if (measuring_form_name == "") {
        $('input[name="measuring_form_name"]').css("border-color", "red");
        errors++;
    } else {
        $('input[name="measuring_form_name"]').css("border-color", "");
    }

    if (!validatePhone(measuring_form_phone)) {
        $('input[name="measuring_form_phone"]').css("border-color", "red");
        $('#measuring_form_phone_err').html("*Номер введён некорректно! Пример: (+7)(8)()9876543210")
        errors++;
    } else {
        $('input[name="measuring_form_phone"]').css("border-color", "");
        $('#measuring_form_phone_err').html("")
    }

    if (errors == 0) {
        $.ajax({
            url: "./mail.php",
            type: "POST",
            cache: false,
            data: {

                measuring_form_name: measuring_form_name,
                measuring_form_phone: measuring_form_phone

            },
            beforeSend: function() {
                $(".measuring").prop("disabled", true);
                $(".btn-primary").css("background-color", "#a09c9c");
            },
            success: function(data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".measuring").prop("disabled", true);
                    $(".btn-primary").css("background-color", "#0d6efd");
                    //alert(data);
                    alert("Сообщение отправленно, ожидайте звонка на указанный номер.");

                }
                $(".measuring").prop("disabled", false);
            }
        })
    }
})
$("#measuring_1").on("click", function() {

    let errors = 0;

    let measuring_form_name = $('input[name="measuring_form_name_1"]').val();

    let measuring_form_phone = $('input[name="measuring_form_phone_1"]').val();

    if (measuring_form_name == "") {
        $('input[name="measuring_form_name_1"]').css("border-color", "red");
        errors++;
    } else {
        $('input[name="measuring_form_name_1"]').css("border-color", "");
    }

    if (!validatePhone(measuring_form_phone)) {
        $('input[name="measuring_form_phone_1"]').css("border-color", "red");
        $('#measuring_form_phone_1_err').html("*Номер введён некорректно! Пример: (+7)(8)()9876543210")
        errors++;
    } else {
        $('input[name="measuring_form_phone_1"]').css("border-color", "");
        $('#measuring_form_phone_1_err').html("")
    }


    if (errors == 0) {

        $.ajax({
            url: "./mail.php",
            type: "POST",
            cache: false,
            data: {

                measuring_form_name: measuring_form_name,
                measuring_form_phone: measuring_form_phone

            },
            beforeSend: function() {
                $(".measuring").prop("disabled", true);
                $(".btn-primary").css("background-color", "#a09c9c");
            },
            success: function(data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".measuring").prop("disabled", true);
                    $(".btn-primary").css("background-color", "#0d6efd");
                    //alert(data);
                    alert("Сообщение отправленно, ожидайте звонка на указанный номер.");

                }
                $(".measuring").prop("disabled", false);
            }
        })
    }
})