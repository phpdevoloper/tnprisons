$(document).ready(function(e){
    $(".lang-item a").on("click",function(e){
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

    //Keyboard accessing functions

    function addFocusClass() {

        jQuery('#accessibility').find('li').each(function (index, element) {
            jQuery(this).children('a').focus(function (e) {

                jQuery(this).parent('li').addClass('mFocus');
            });


        });
        jQuery('#accessibilityMenu>li>a').focusin(function (e) {
            jQuery('#accessibilityMenu').find('li').each(function (index, element) {
                jQuery(this).removeClass('mFocus');
            });
            jQuery(this).addClass('mFocus');

        });

        jQuery('#accessibilityMenu>li>a').click(function (e) {
            jQuery(this).addClass('focus');
            jQuery(this).next('ul').addClass('visible');
        });

        jQuery("#accessibilityMenu>li:last-child ul li:last-child").focusout(function (e) {
            jQuery("#accessibilityMenu>li:last-child").removeClass("mFocus")
        });

        jQuery('html').click(function (e) {
            if (e.target.id == 'accessibilityMenu' || jQuery(e.target).parents('#accessibilityMenu').length > 0) { } else {
                jQuery('.goiSearch').removeClass('visible').attr('style', '');
                jQuery('#accessibilityMenu>li').each(function (index, element) {
                    jQuery(this).removeClass('mFocus');
                    jQuery(this).children('a').removeClass('focus');
                });
            }
        });


        document.addEventListener('keydown', function (e) {
            if (e.keyCode === 9) {
                jQuery('body').addClass('show-focus-outlines');
            }
        });

        document.addEventListener('mousedown', function (e) {
            jQuery('body').removeClass('show-focus-outlines');
        });

    }
    addFocusClass();
});
jQuery('.accessiblelinks').removeAttr('style');
if (jQuery(window).innerWidth() <= 940) {
    jQuery('.accessible-icon').click(function () {
        jQuery('.accessiblelinks').show();
    });

    jQuery(document).on('click', function (e) {
        if (jQuery(window).innerWidth() <= 940) {
            if (jQuery(e.target).closest(".accessible-icon").length === 0) {
                jQuery('.accessiblelinks').hide();
            }
        }
    });

    jQuery(".accessible-icon").on("keyup", function (e) {

        if (e.keyCode == 9) {
            if (e.shiftKey) {

            }
            else {
                jQuery('.accessiblelinks').show();
            }
        }
    });

    jQuery(".accessiblelinks ul a:last").on("keydown", function (e) {

        if (e.keyCode == 9) {
            if (e.shiftKey) {

            }
            else {
                jQuery('.accessiblelinks').hide();
            }
        }
    });
}


