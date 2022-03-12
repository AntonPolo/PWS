function pageContent(Num) {
    var num = Num;
console.log(num);

$.ajax({
    type: "post",
    url: "./menu_page/content.php",
    data: {num: num},
    dataType: "text",
    success: function (response) {
        if (!response) {
           console.log('not')
        }else {
            $("#pp").html(response)
        }
    }
});
}