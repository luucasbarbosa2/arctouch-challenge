



$(document).ready(function (event) {
    const config = new Config();
    const carousel = new Carousel();
    carousel.initialize;

    $(document).on('click', ".search-menu", function () {  

        $(".search-box").focus();
    
    });
    
    
    $(document).scroll(function(){

        if(($('.carousel-upcoming').offset().top - 50) < $(window).scrollTop()){
            $(".menu").addClass('bg-dark')
        }else{
            $(".menu").removeClass('bg-dark')
        }

    });
    

    $(document).on('click', ".pagination-item", function () {       
        var ajax = {url: 'movies/findUpcoming/'+$(this).attr('data-page')};
        $(this).parent().parent().hide();
        $(".load-ajax-icon").show();
        
        $.ajax({
            url: ajax.url,
            type: 'POST',
            dataType: 'JSON',

        })
                .done(function (data) {
                    $(".carousel-upcoming").html(data);
                    carousel.initialize;

                })
                .fail(function (data) {

                })
                .always(function (data) {
                  
                });

    });

    $(document).on('keyup', ".reative-search", function () {
        $(".reative-search").val($(this).val());

    });

    search();
    function search() {
        let search = new Search();

        $(".search-box").stop().keyup(function () {
            $(".search-string").html($(this).val())

            if ($(this).val().length > 0) {
                if (!$(".menu").hasClass("bg-dark")) {
                    search.show();
                }
                if ($(this).val().length > 3) {
                    var ajax = {url: 'movies/findByName', query: $(this).val()};
                    $.ajax({
                        url: ajax.url,
                        type: 'POST',
                        dataType: 'JSON',
                        data: {data: ajax.query},
                    })
                            .done(function (data) {
                                $(".search-response").removeClass('hidden');
                                $('.response-movies').html(data);
                            })
                            .fail(function (data) {

                            })
                            .always(function (data) {

                            });
                }
            } else if ($(this).val().length === 0) {

                search.hide();
                $(".search-response").addClass('hidden');

            }
        });
    }




    $(window).resize(function () {
        carousel.initialize;
    });



    $(document).on('mouseover', ".carousel-cell", function () {
        $(this).find('.carousel-transparency').find('.carousel-info').stop().fadeIn(500);
        $(this).find('.carousel-transparency').stop().animate({
            opacity: 0.9,
//            backgroundColor: '#ff4'

        }, 300, function () {
//            $(this).find('p').fadeIn(500);;
        });
    });

    $(document).on('mouseout', ".carousel-cell", function () {
        $(this).find('.carousel-transparency .carousel-info').stop().fadeOut(500);
        $(this).find('.carousel-transparency').stop().animate({
            opacity: 0.3,
//            backgroundColor: '#ff4'

        }, 300, function () {


        });
    });


    $(".show-all").click(function () {
        $(".not").toggleClass('hidden', "show")
    });


});

