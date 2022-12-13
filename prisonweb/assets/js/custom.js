$(document).ready(function(e){
    $("#navbar1 li a").on("click",function(e){
        var title = $(this).attr("data-page_title");
        $.ajax({
        method: "POST",
        url: "languageAjax.php",
        data: { title:title },
        dataType: "json",
        success: function (response) {
            if(response.code == 200){
                location.reload();
            }
        },
        });

    });
});