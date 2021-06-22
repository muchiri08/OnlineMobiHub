$(document).ready(function(){
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotope
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
    //filtering items on button click
    $(".btn-group").on("click", "button", function(){
        var filtervalue = $(this).attr('data-filter');
        $grid.isotope({filter: filtervalue});
    });

    //New phones owl-carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    //product qty
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    //let $input = $(".qty .qty_input");

    //click event
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val()>=1 && $input.val()<=9) {
            $input.val(function(i,oldval){
                return ++oldval;
            });
        }
    });
    $qty_down.click(function(event){
        
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val()>1 && $input.val()<=10) {
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });
  });