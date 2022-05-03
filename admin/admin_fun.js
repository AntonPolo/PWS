
//Отправление данных в функцию deletePage(PHP)
function deletePage(file_url, Page_title) {
    let confirmation = confirm(`Вы уверены, что хотите удалить данную страницу (${Page_title})?`)

    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                file_url: file_url

            },
            beforeSend: function () {
                $(".delete").prop("disabled", true);
                $(".edit").prop("disabled", true);
                $(".add_page").prop("disabled", true);
                $(".edit_main_page").prop("disabled", true);
                $(".edit_works_page").prop("disabled", true);
                $(".admin_exit").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".delete").prop("disabled", true);
                    $(".edit").prop("disabled", true);
                    $(".add_page").prop("disabled", true);
                    $(".edit_main_page").prop("disabled", true);
                    $(".edit_works_page").prop("disabled", true);
                    $(".admin_exit").prop("disabled", true);
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

    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                menu_point_id: menu_point_id,
                page_title: page_title,
                page_content: page_content

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

    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                file_url: file_url,
                page_title_saving: page_title,
                page_content_saving: page_content

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
                        url = `./adminPanel.php?file_url=${file_url}&Page_title=${page_title_saving}`;
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
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                file_name: file_name

            },
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

$(".edit_works_page").on("click", function(){
    $("#Photo_url").css("display", "block");
    $("#Photo_title").css("display", "block");
    $(".add_new_photo").css("display", "block");
    $(".close_edit_works_page").css("display", "block");
    $(".edit_works_page").css("display", "none");
})
$(".close_edit_works_page").on("click", function(){
    $("#Photo_url").css("display", "none");
    $("#Photo_title").css("display", "none");
    $(".add_new_photo").css("display", "none");
    $(".close_edit_works_page").css("display", "none");
    $(".edit_works_page").css("display", "block");
})

$(".add_new_photo").on("click", function(){

    let photo_url = $('input[name="Photo_url"]').val();

    let photo_title = $('input[name="Photo_title"]').val();

    if(photo_url == "" || photo_title == ""){

        alert("Вы заполнили не все поля!");

    }else{

    let confirmation = confirm(`Вы уверены, что хотите добавить данное фото (${photo_url})?`)

    if (confirmation == true) {
        $.ajax({
            url: "./admin_fun.php",
            type: "POST",
            cache: false,
            data: {

                photo_url: photo_url,
                photo_title: photo_title

            },
            beforeSend: function () {
                $(".add_new_photo").prop("disabled", true);
            },
            success: function (data) {
                if (!data) {
                    alert("Операция не выполнена, попробуйте позже.");
                } else {
                    $(".add_new_photo").prop("disabled", true);
                    alert(data);

                    location.reload(true);
                    return false;
                }
                $(".add_new_photo").prop("disabled", false);
            }
        })
    } else {
        return;
    }
}
})