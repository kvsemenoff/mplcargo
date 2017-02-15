$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
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