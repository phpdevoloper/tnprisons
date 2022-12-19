$(document).ready(function(){
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000
      });

      $(".logout").on("click", function () {
        $.ajax({
          method: "POST",
          url: "logoutAjax.php", // <-- point to server-side PHP script
          contentType: false,
          processData: false,
          success: function (response) {
            window.location = "index.php";
          },
        });
      });
  

    $('#sliderFile').change(function(){
        const file = this.files[0];
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
              console.log(event.target.result);
              $('#slider_preview').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    /*      LOGIN AJAX      */
    $("#login_form").submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            method: "POST",
            url: "Login.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.code == 200) {
                    location.href = 'dashboard.php';
                }
            },
        });
    });

    $(".menu_a").on("click",function(e){
        e.preventDefault();
        var prison_code = $(this).attr("data-prison_code");
        var page_title = $(this).attr("data-page_title");
        if (typeof prison_code != "undefined") {
            $.ajax({
                method: "POST",
                url: "prison_tamilnadu.php",
                dataType:"json",
                data: { 
                    prison_code : prison_code,
                    page_title : page_title
                 },
                success: function (response) {
                    if(response.code == 200){
                        location.href="prisons.php";
                    }else if(response.code == 500){

                    }
                },
            });
        }
    });

    // GET PRISON EDIT DETAILS
    $(".prison_edit").on("click",function(e){
        var prison_id = $(this).attr("data-prison_id");
        var prison_name = $(this).attr("data-prison_name");
        var prison_locan = $(this).attr("data-prison_locan");
        var prison_dist = $(this).attr("data-prison_dist");
        var prison_type = $(this).attr("data-prison_type");
        var prison_jurisd = $(this).attr("data-prison_jurisd");
        var prison_addr = $(this).attr("data-prison_addr");

        $("#Prison_id").val(prison_id);
        $("#Prison_name").val(prison_name);
        $("#Prison_location").val(prison_locan);
        $("#Prison_district").val(prison_dist);
        $("#Prison_type").val(prison_type);
        $("#Prison_juri").val(prison_jurisd);
        $("#Prison_address").val(prison_addr);
    });

    $("#prison_edit_form").submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            method: "POST",
            url: "editPrisonAjax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.code == 200) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Prison details Updated sucessfully',
                        onHidden : function() { location.reload(); }
                        
                    })
                }
            },
        });

    });

    $("#addPrison_form").submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            method: "POST",
            url: "addPrisonAjax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.code == 200) {
                    Toast.fire({
                        icon: 'success',
                        title: 'Prison details Registered sucessfully',
                        
                    })
                    location.reload();
                }
            },
        });
    });

    // GET Menu name 
    $(".editMenu").on("click",function(e){
        var menu_id = $(this).attr("data-menu_id");
        var menu_name_en = $(this).attr("data-menu_name_en");
        $("#menu_id").val(menu_id);
        $("#menu_name_en").val(menu_name_en);      
    });


    $("#edit_Menu_en").submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        // console.log(formData);
        $.ajax({
            method: "POST",
            url: "MenuAjax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.code == 200) {
                    Toast.fire({
                        icon: 'success',
                        title: data.msg,
                        
                    });
                    window.setTimeout(function(){location.reload(true)},2000);
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: data.msg,
                        
                    });
                }
            },
        });
    });

});