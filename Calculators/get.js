function deleteItems_mn(id) {
    var deleteElement = document.getElementById(`${id}`);
    for (let i = 0; i < deleteElement.length; i++) {
        deleteElement[i].remove();
    }
}

$("#mn_calc").on("click", function mn_data() {

    var index_calc_mn = 1;

    if ($("#Height_mn").val().trim() == "") {
        var Height_mn_Value = 0;
    } else {
        Height_mn_Value = $("#Height_mn").val().trim();
    }

    if ($("#Width_mn").val().trim() == "") {
        var Width_mn_Value = 0;
    } else {
        Width_mn_Value = $("#Width_mn").val().trim();
    }

    var type_mn_Value = $('input[name="type_mn"]:checked').val();

    if ($('#checkbox_mn').is(':checked')) {
        var checkbox_mn_Value = "Checked";
    } else {
        checkbox_mn_Value = "noChecked";
    }



    $.ajax({
        url: "./Calculators/calc.php",
        type: "POST",
        cache: false,
        data: {
            index_1: index_calc_mn,
            Height_mn: Height_mn_Value,
            Width_mn: Width_mn_Value,
            type_mn: type_mn_Value,
            checkbox_mn: checkbox_mn_Value
        },
        beforeSend: function() {
            $("#mn_calc").prop("disabled", true);
            $("#mn_calc").css("background-color", "gray");
        },
        success: function(data) {
            if (!data) {
                alert("Ошибка");
            } else {
                $("#sum_mn").html(data, '\n');
            }
            $("#mn_calc").prop("disabled", false);
            $("#mn_calc").css("background-color", "#0075FF");
        }
    })

    index_calc_mn = 0;
})

$("#dgw_calc").on("click", function dgw_data() {

    var index_calc_dgw = 1;

    if ($("#Height_dgw").val().trim() == "") {
        var Height_dgw_Value = 0;
    } else {
        Height_dgw_Value = $("#Height_dgw").val().trim();
    }

    if ($("#Width_dgw").val().trim() == "") {
        var Width_dgw_Value = 0;
    } else {
        Width_dgw_Value = $("#Width_dgw").val().trim();
    }

    var type_dgw_Value = $('input[name="type_dgw"]:checked').val();

    if ($('#checkbox_1_dgw').is(':checked')) {
        var checkbox_1_dgw_Value = "Checked";
    } else {
        checkbox_1_dgw_Value = "noChecked";
    }

    if ($('#checkbox_2_dgw').is(':checked')) {
        var checkbox_2_dgw_Value = "Checked";
    } else {
        checkbox_2_dgw_Value = "noChecked";
    }

    $.ajax({
        url: "./Calculators/calc.php",
        type: "POST",
        cache: false,
        data: {
            index_2: index_calc_dgw,
            Height_dgw: Height_dgw_Value,
            Width_dgw: Width_dgw_Value,
            type_dgw: type_dgw_Value,
            checkbox_1_dgw: checkbox_1_dgw_Value,
            checkbox_2_dgw: checkbox_2_dgw_Value
        },
        beforeSend: function() {
            $("#dgw_calc").prop("disabled", true);
            $("#dgw_calc").css("background-color", "gray");
        },
        success: function(data) {
            if (!data) {
                alert("Ошибка");
            } else {
                $("#sum_dgw").html(data, '\n');
            }
            $("#dgw_calc").prop("disabled", false);
            $("#dgw_calc").css("background-color", "#50a0ff");
        }
    })
    index_calc_dgw = 0;
})