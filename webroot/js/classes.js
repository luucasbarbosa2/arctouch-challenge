class Modal {
    constructor(name) {
        this.modalName = name;
    }

    get show() {
        $('#' + this.modalName).modal();
    }
    get hide() {
        $('#' + this.modalName).modal('hide');
    }
}


class Carousel {
    constructor() {

        this.documentWidth = $(document).width();
    }
    get initialize() {

        this.cellWidth;
        $('.main-carousel').flickity({
            pageDots: false,
            cellAlign: 'left',
            contain: true
        });
        
        $('.upcoming-carousel').flickity({
            pageDots: false,
            cellAlign: 'left',
            contain: true
        });

    }
    get cellWidth() {
        $(".carousel-cell-upcoming").css('width', Math.round((100 / ($(document).width() / 250))/ 2) + '%');
        $(".carousel-cell").css('width', Math.round(100 / ($(document).width() / 250)) + '%');


    }
}




class Search {

    construct() {

    }

    show() {
        $(".menu").removeClass("fixed-top").fadeIn(300);
        $(".menu").addClass("bg-dark").fadeIn(300);
        ;
        $('#main-slider').stop().animate({
            height: 'toggle'
        }, 'slow', function () {
        });
    }

    hide() {
        $('#main-slider').stop().animate({height: 'toggle'}, 'slow');
        $(".menu").addClass("fixed-top");
        $(".menu").removeClass("bg-dark");

    }

}
