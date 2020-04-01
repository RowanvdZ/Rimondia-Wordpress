/******************************************
    Version: 1.0
/****************************************** */

(function ($) {
    "use strict";



    /* ==============================================
    Fixed menu
    =============================================== */
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 1) {
            var bit = $('.top-navbar').outerHeight();
            $('.top-navbar').addClass('fixed-menu');
            $('body').css('margin-top', bit);

        } else {
            $('.top-navbar').removeClass('fixed-menu');
            $('body').css('margin-top', 0);
        }
    });

    /* ==============================================
    Back top
    =============================================== */
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('.dmtop').css({
                bottom: "10px"
            });
        } else {
            jQuery('.dmtop').css({
                bottom: "-100px"
            });
        }
    });




    /* ==============================================
	Loader -->
	=============================================== */

    $(window).load(function () {
        $("#preloader").on(500).fadeOut();
        $(".preloader").on(600).fadeOut("slow");
        $('.loader-container').addClass('done');
        $('.progress-br').addClass('done');
    });

    /* ==============================================
    	Scroll to top  
    ============================================== */


    if ($('#scroll-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#scroll-to-top').addClass('show');
                } else {
                    $('#scroll-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });

        $('#scroll-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });

        $("#home").on("click", function (e) {
            if (window.location.pathname.includes('vacatures')) {
                window.location.href = window.location.origin;
            }
            e.preventDefault();

            if (!$(window).scrollTop() == 0) {
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            }
        });
    }

    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight',
        progress = document.querySelector('.progress'),
        scroll;

    document.addEventListener('scroll', function () {
        scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
        progress.style.setProperty('--scroll', scroll + '%');
    });


    /* ==============================================
		Scroll and navigation functions
    ============================================== */
    var extraOffset;
    $(".nav-item").click(function (e) {
        e.preventDefault();
        $(".hamburger--collapse").toggleClass("is-active");
        $("#navbars-host").toggleClass("show");
        $('.nav-item').removeClass("active");
        $(this).addClass("active");

        if ($(window).scrollTop() < 100) {
            extraOffset = 100;
        } else {
            if (screen.width < 991) {

                extraOffset = 10;
            }
            extraOffset = 20;
        }

        var navbar = $("#navbars-host");
        // if (screen.width < 991) {
        //     navbar.removeClass("collapse");
        //     navbar.removeClass("show");
        //     navbar.addClass("collapsing");
        //     navbar.addClass("collapse");
        // }
        if ($(this).attr("id") != "home") {
            var section = "#" + $(this).attr('id') + "-section";
            $([document.documentElement, document.body]).animate({

                scrollTop: $(section).offset().top - extraOffset
            }, 700);
        }
    });

    $(".hamburger--collapse").click(function (e) {
        $(this).toggleClass("is-active");

    })

    $(function () {
        $('#section05').on('click', function (e) {
            e.preventDefault();
            $([document.documentElement, document.body]).animate({
                scrollTop: $('#over-ons-section').offset().top - 100
            }, 700);
        });
    });


    $('#over-ons-button').on('click', function (e) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $('#over-ons-section').offset().top - 100
        }, 700);
    });

    $('#werkwijze-button').on('click', function (e) {
        $([document.documentElement, document.body]).animate({
            scrollTop: $('#werkwijze-section').offset().top - 100
        }, 700);
    });


    $('#contact-button').on('click', function (e) {
        e.preventDefault();
        $([document.documentElement, document.body]).animate({
            scrollTop: $('#contact-section').offset().top - 100
        }, 700);
    });


    $(".hover-btn-new").click(function (e) {
        if (!$(this).hasClass('viewVacature')) {
            e.preventDefault();
        }

        if (100 < $(window).scrollTop()) {
            extraOffset = 100;
        } else {
            extraOffset = 60;
        }
        var section = "#" + $(this).attr('id') + "-section";

        $([document.documentElement, document.body]).animate({
            scrollTop: $(section).offset().top() - extraOffset
        }, 700);
    });

    $(".navbar-brand").on("click", function (e) {
        if (window.location.pathname.includes('vacatures')) {
            window.location.href = window.location.origin;
        }
        e.preventDefault();

        if (!$(window).scrollTop() == 0) {
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        }
    });

    var navItem = $(".nav-item");
    var overOnsSection = $("#over-ons-section").offset().top - 200;
    var monsternameSection = $("#monstername-section").offset().top - 200;
    var werkwijzeSection = $("#werkwijze-section").offset().top - 500;
    var vacaturesSection = $('#vacatures-section').offset().top - 300;
    $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var scrollPercent = ($(window).scrollTop() / docHeight) * 100;



        $('.scroll-progress').width(scrollPercent + '%');

        if (screen.width > 991) {
            if (scrollTop > 0) {
                navItem.removeClass("active");
                $("#home").addClass("active");
            }
            if (scrollTop > overOnsSection) {
                navItem.removeClass("active");
                $("#over-ons").addClass("active");
            }
            if (scrollTop > monsternameSection) {
                navItem.removeClass("active");
                $("#monstername").addClass("active");
            }
            if (scrollTop > werkwijzeSection) {
                navItem.removeClass("active");
                $("#werkwijze").addClass("active");
            }
            if (scrollTop > vacaturesSection) {
                navItem.removeClass("active");
                $("#vacatures").addClass("active");
            }
        }
    })


    /* ==============================================
     Fun Facts -->
     =============================================== */
    function count($this) {
        var current = parseInt($this.html(), 10);
        current = current + 5000; /* Where 50 is increment */
        $this.html(++current);
        if (current > $this.data('count')) {
            $this.html($this.data('count'));
        } else {
            setTimeout(function () {
                count($this)
            }, 30);
        }
    }
    $(".stat_count, .stat_count_download").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });



    /* ==============================================
     Bootstrap Touch Slider -->
     =============================================== */
    /* ==============================================
     Tooltip -->
     =============================================== */
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

    /* ==============================================
     Contact -->
     =============================================== */
    jQuery(document).ready(function () {
        $('#contactform').submit(function () {
            var action = $(this).attr('action');
            $("#message").slideUp(750, function () {
                $('#message').hide();
                $('#submit')
                    .after('<img src="images/ajax-loader.gif" class="loader" />')
                    .attr('disabled', 'disabled');
                $.post(action, {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    select_service: $('#select_service').val(),
                    select_price: $('#select_price').val(),
                    comments: $('#comments').val(),
                    verify: $('#verify').val()
                },
                    function (data) {
                        document.getElementById('message').innerHTML = data;
                        $('#message').slideDown('slow');
                        $('#contactform img.loader').fadeOut('slow', function () {
                            $(this).remove()
                        });
                        $('#submit').removeAttr('disabled');
                        if (data.match('success') != null) $('#contactform').slideUp('slow');
                    }
                );
            });
            return false;
        });
    });

    /* ==============================================
     Code Wrapper -->
     =============================================== */

    $('.code-wrapper').on("mousemove", function (e) {
        var offsets = $(this).offset();
        var fullWidth = $(this).width();
        var mouseX = e.pageX - offsets.left;

        if (mouseX < 0) {
            mouseX = 0;
        } else if (mouseX > fullWidth) {
            mouseX = fullWidth
        }

        $(this).parent().find('.divider-bar').css({
            left: mouseX,
            transition: 'none'
        });
        $(this).find('.design-wrapper').css({
            transform: 'translateX(' + (mouseX) + 'px)',
            transition: 'none'
        });
        $(this).find('.design-image').css({
            transform: 'translateX(' + (-1 * mouseX) + 'px)',
            transition: 'none'
        });
    });
    $('.divider-wrapper').on("mouseleave", function () {
        $(this).parent().find('.divider-bar').css({
            left: '50%',
            transition: 'all .3s'
        });
        $(this).find('.design-wrapper').css({
            transform: 'translateX(50%)',
            transition: 'all .3s'
        });
        $(this).find('.design-image').css({
            transform: 'translateX(-50%)',
            transition: 'all .3s'
        });
    });

})(jQuery);