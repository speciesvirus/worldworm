/**
 * Created by MIS02 on 21-Jan-16.
 */


$(function(){
    var $doc = $(document);

    $(window).scroll(function() {

        var $top_button = $('#main');
        if($top_button.position())
        {

            if(parseFloat($top_button.position().top) <= parseFloat($(window).scrollTop()))
            {

                $('#header').addClass('sticky-header');
                //$(floatingbar).css({height: 0}).animate({ height: '55'}, 0);
            }
            else
            {
                $('#header').removeClass('sticky-header');
                //$('#main').html($top_button.position().top);
                //if(parseFloat($('#main').position().top) >= parseFloat($(window).scrollTop())){
                //
                //
                //}
                //$(floatingbar).animate({ height: 0}, 0);
            }
        }
    });

    $('.mobile-toggle').click(function() {
        $('html').toggleClass('panel-opened');
        $('.panel-overlay').toggleClass('active');
    });

    $doc.on('click','.panel-overlay.active, a#nav-panel-close',function(){
        $('html').toggleClass('panel-opened');
        $('.panel-overlay').toggleClass('active');
    });

    $('#nav-panel ul li.has-sub span.arrow').click(function(){
        var $this = $(this),
            $sub = $this.nextAll('ul.sub-menu');
        //$this.parent().toggleClass('open');
        //
        //$sub.slideToggle();

        if ($this.hasClass("open")) {

            $sub.slideUp(function(){
                $this.removeClass("open");
                $this.parent().removeClass('open');
            });

        }
        else {

            $sub.slideDown(function(){
                $this.addClass("open");
                $this.parent().addClass('open');
            });

        }

    });



    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        //navigation: true,
        //pagination:false,
        responsive:{
            0:{
                items:1,
                stagePadding: 0,
                margin:10
            },
            800:{
                items:1,
                stagePadding: 80,
                margin:10
            }
        }
    });

});
/*
$(document).on('click','.mobile-toggle',function(){

    $('html').toggleClass('panel-opened');
    $('.panel-overlay').toggleClass('active');
});*/
