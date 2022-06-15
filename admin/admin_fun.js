
//Отправление данных в функцию deletePage(PHP)
function deletePage(file_url, Page_title) {
    let confirmation = confirm(`Вы уверены, что хотите удалить данную страницу (${Page_title})?`)
    let action = "deletePage";
    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                file_url: file_url,
                action: action
            },
            beforeSend: function () {
                $(".delete").prop("disabled", true);
                $(".prew").prop("disabled", true);
                $(".edit").prop("disabled", true);
                $(".edit_main_page").prop("disabled", true);
                $(".edit_works_page").prop("disabled", true);
                $(".admin_exit").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".delete").prop("disabled", false);
                    $(".prew").prop("disabled", false);
                    $(".edit").prop("disabled", false);
                    $(".edit_main_page").prop("disabled", false);
                    $(".edit_works_page").prop("disabled", false);
                    $(".admin_exit").prop("disabled", false);
                    alert(data);

                    location.reload();
                    return false;
                }

            }
        })
    } else {
        return;
    }

}

//Отправление данных в admin_fun.php для добавления новой страницы
function add_new_page(menu_point_id, page_title, page_content) {



    let confirmation = confirm(`Вы уверены, что хотите Добавить новую страницу (${page_title})?`)
    let action = "add_new_page";
    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                menu_point_id: menu_point_id,
                page_title: page_title,
                page_content: page_content,
                action: action
            },
            beforeSend: function () {
                $("#saving_page").prop("disabled", true);
                $("#back").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    alert(data);
                    if (data == "Страница успешно добавлена") {

                        url = "./adminPanel.php";
                        setTimeout('location.href=url', 100);
                        this.href = 'javascript:void(0)';
                    } else {
                        $("#add_page").prop("disabled", false);
                    }
                }

            }
        })
    } else {
        return;
    }
}

//Отправление данных в admin_fun.php для сохранения отредактированной страницы
function saving_page(page_title, page_content, file_url) {

    let confirmation = confirm(`Вы уверены, что хотите сохранить страницу "${page_title}" в таком виде?`)
    let action = "saving_page";
    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {
                file_url: file_url,
                page_title_saving: page_title,
                page_content_saving: page_content,
                action: action
            },
            beforeSend: function () {
                $("#saving_page").prop("disabled", true);
                $("#back").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {

                    $("#saving_page").prop("disabled", true);
                    $("#back").prop("disabled", true);
                    alert(data);


                    if (data == "Вы заполнили не все поля! Попробуйте снова") {
                        url = `./adminPanel.php`;
                        setTimeout('location.href=url', 100);
                        this.href = 'javascript:void(0)';
                    } else {
                        url = `./adminPanel.php`;
                        setTimeout('location.href=url', 100);
                        this.href = 'javascript:void(0)';
                    }


                }
                $("#saving_page").prop("disabled", false);
                $("#back").prop("disabled", false);
            }
        })
    } else {
        return;
    }
}


//Отправление данных в функцию deleteSlide(PHP)
function deleteSlide(file_name) {
    let confirmation = confirm(`Вы уверены, что хотите удалить слайд?`)

    if (confirmation == true) {
        let data = new FormData();
        data.append("action", "deleteSlide");
        data.append("file_name", file_name);
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: data,
            processData: false,
            contentType: false,
            dataType: "text",
            beforeSend: function () {
                $(".deleteSlide").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".deleteSlide").prop("disabled", true);
                    alert(data);

                    location.reload(true);
                    return false;
                }
                $(".deleteSlide").prop("disabled", false);
            }
        })
    } else {
        return;
    }

}

//Отправление данных в preview.php для предпосмотра страницы
function preview_page(page_title, file_url, page_id) {
    $.ajax({
        url: "./preview.php",
        type: "POST",
        cache: false,
        data: {

            page_title: page_title,
            file_url: file_url,
            page_id: page_id

        },
        beforeSend: function () {
            $(".preview").prop("disabled", true);
        },
        success: function (data) {
            if (!data) {
                alert("Операция не выполнена, попробуйте позже.");
            } else {
                $(".preview").prop("disabled", true);
                url = `./preview.php`;
                setTimeout('location.href=url', 100);
                this.href = 'javascript:void(0)';

            }
            $(".preview").prop("disabled", false);
        }
    })
}

$('#add_new_slide').click(function (event) {
    event.preventDefault();
    let file = $('#slide-img')[0].files[0];
    let data = new FormData();
    let error = 0;
    if (typeof file !== "undefined") {
        $('#add_new_slide_message').css("color", "");
        $('#add_new_slide_message').html("");
        data.append('file', file);
    } else {
        $('#add_new_slide_message').css("color", "red");
        $('#add_new_slide_message').html("*Вы не выбрали файл!");
        error++;
    }
    if (error == 0) {
        data.append('action', "add_new_slider_file");
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: data,
            processData: false,
            contentType: false,
            dataType: "text",
            beforeSend: function () {
                $("#add_new_slide").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                    $("#add_new_slide").prop("disabled", false);
                } else {
                    $('#add_new_slide_message').css("color", "green");
                    $('#add_new_slide_message').html(data);
                    location.reload(true);
                    return false;
                }

            }
        })
    }

})
$('#add_new_work').click(function (event) {
    event.preventDefault();

    let works_text = $('#works_text').val().trim();
    console.log(works_text)
    let file = $('#works-img')[0].files[0];
    let data = new FormData();
    let error = 0;
    if (typeof file !== "undefined") {
        $('#works_img_message').css("color", "");
        $('#works_img_message').html("");
        data.append('file', file);
    } else {
        $('#works_img_message').css("color", "red");
        $('#works_img_message').html("*Вы не выбрали файл!");
        error++;
    }

    if (works_text == "") {
        $('#works_text').css("border-color", "red");
        error++;
    } else if (works_text.length > 100) {
        $('#works_text').css("border-color", "red");
        $('#works_text_message').css("color", "red");
        $('#works_text_message').html("*Описание не может содержать больше 100 символов!");
        error++;
    } else {
        $('#works_text').css("border-color", "");
        $('#works_text_message').css("color", "");
        $('#works_text_message').html("");
        data.append('works_title', works_text);
    }

    if (error == 0) {
        data.append('action', "add_new_work");
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: data,
            processData: false,
            contentType: false,
            dataType: "text",
            beforeSend: function () {
                $("#add_new_work").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                    $("#add_new_work").prop("disabled", false);
                } else {
                    $('#add_new_work_message').css("color", "green");
                    $('#add_new_work_message').html(data);
                    location.reload(true);
                    return false;
                }
            }
        })
    }
})
function W_delete(file_url) {
    let confirmation = confirm(`Вы уверены, что хотите удалить слайд?`)

    if (confirmation == true) {
        let data = new FormData();
        data.append('action', "W_delete");
        data.append('file_url', file_url);
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: data,
            processData: false,
            contentType: false,
            dataType: "text",
            beforeSend: function () {
                $(".delete_work").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                    $(".delete_work").prop("disabled", false);
                } else {
                    alert(data);
                    location.reload(true);
                    return false;
                }
            }
        })
    }
}