$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        navText:['<span class="dg-left"></span>','<span class="dg-right"></span>'],
        responsive: {
            0: {
                items: 3
            },
            750: {
                items: 5
            }
        }
    })
})