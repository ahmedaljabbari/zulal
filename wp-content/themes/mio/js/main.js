var burger = jQuery('.buger');
var expaner = jQuery('.expander');


jQuery('.burger').on('click', ()=>{
    jQuery('.expander').slideToggle();
});

jQuery(window).on('resize', function(){
    if (jQuery(window).width() > 500) {
        expaner.slideUp();
    }
})



