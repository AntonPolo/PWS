$("#measuring").on("click", function(){

    let measuring_form_name = $('input[name="measuring_form_name"]').val();

    let measuring_form_phone = $('input[name="measuring_form_phone"]').val();

    if(measuring_form_name == "" || measuring_form_phone == ""){

        alert("Вы заполнили не все поля!");

    }else{

    
        $.ajax({
            url: "./mail.php",
            type: "POST",
            cache: false,
            data: {

                measuring_form_name: measuring_form_name,
                measuring_form_phone: measuring_form_phone

            },
            beforeSend: function () {
                $(".measuring").prop("disabled", true);
                $(".btn-primary").css("background-color", "#a09c9c");
            },
            success: function (data) {
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