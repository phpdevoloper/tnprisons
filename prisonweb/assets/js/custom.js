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


// function menu_re_position() {
//     if (jQuery(window).innerWidth() >= 640) {
//         var e = jQuery(".menuWrapper .container").width(),
//             t = 0;
//         jQuery(".navbar>ul>li").each(function (s, a) {
//             var cl = jQuery(this).attr('class');
//             if (t += jQuery(this).width(), t > e - 130 && (jQuery(this).hasClass("moreNav") || (jQuery(this).remove(), jQuery("#overflowMenu .ofMenu>ul").append("<li class='" + cl + "'>" + jQuery(this).html() + "</li>")), !(jQuery(".menu ul .moreNav").length > 0))) {
//                 var n = jQuery('<li class="moreNav"><a href="#" aria-label="More Menu" title="More Menu"><span class="icon-menu" aria-hidden="true"></span>' + jQuery('.menuMoreText').html() + ' </a></li>');
//                 jQuery('.menuMoreText').html('');
//                 jQuery(".menu>ul").append(n), n.click(openMenu)
//             }
//         })
//     }
// }

// function menu_toggle() {
//     jQuery(".showhide").click(function (e) {
//         jQuery(".main-menu").stop().slideToggle("slow")
//     }), jQuery(document).innerWidth() < 940 && jQuery(".main-menu .nav-item a").click(function (e) {
//         jQuery(this).next("div").stop().slideToggle("slow")
//     })
// }

function openMenu() {
    if (jQuery('body').hasClass('rtl')) {
        jQuery("#overflowMenu").animate({
            left: "0px"
        })
    } else {
        jQuery("#overflowMenu").animate({
            right: "0px"
        })
    }
}


function responsiveAccordion() {
    if (jQuery(document).width() < 640) {
        jQuery('.menu li:has(ul) ul').slideUp();
    }
}


jQuery(document).ready(function () {
    // menu_re_position();
    responsiveAccordion();
    // menuMaxheight();
    jQuery(".moreNav a").on("click", function (e) {
        e.preventDefault(), e.stopPropagation(), openMenu()
    });
    jQuery('#overflowMenu a:first').on("keydown", function (e) {
        if (e.keyCode == 9) {
            if (e.shiftKey) {

                var t = jQuery("#overflowMenu").width();
                if (jQuery('body').hasClass('rtl')) {
                    jQuery("#overflowMenu").stop().animate({
                        left: -t
                    })
                } else {
                    jQuery("#overflowMenu").stop().animate({
                        right: -t
                    })
                }
            }
            else {

            }
        }
    });
    jQuery(".closeMenu").on("click", function (e) {
        e.preventDefault();
        var t = jQuery("#overflowMenu").width();
        if (jQuery('body').hasClass('rtl')) {
            jQuery(this).parent("#overflowMenu").stop().animate({
                left: -t
            })
        } else {
            jQuery(this).parent("#overflowMenu").stop().animate({
                right: -t
            })
        }
    });
});

$(document).ready(function(){
    $(".dropdown li a").on("click", function (e) {
        var menu_id = $(this).attr("data-menu_id");
        console.log(menu_id);
        $.ajax({
            method: "POST",
            url: "menu_session.php",
            data: { 
                menu_id:menu_id,
            },
            dataType:"json",
            success: function (response) {
                location.reload(); 
            },
        });
    });
});


