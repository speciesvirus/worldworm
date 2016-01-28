/**
 * Created by MIS02 on 21-Jan-16.
 */


$(function(){
    var $doc = $(document);

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
});
/*
$(document).on('click','.mobile-toggle',function(){

    $('html').toggleClass('panel-opened');
    $('.panel-overlay').toggleClass('active');
});*/
