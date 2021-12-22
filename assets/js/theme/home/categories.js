$('.highlight_categories__row__card').click(function (){
    var css = "highlight_categories__row__card--active";
    var item = $(this);
    var items = $('.highlight_categories__row__card');
    var background = $('.highlight_categories__background img');

    if(!item.hasClass(css)){
        items.removeClass(css);
        item.addClass(css);

        background.fadeTo(200, 0.1, function (){
            $(this).attr('src', item.find('img').attr('src'));
            $(this).fadeTo(200, 1);
        });
    }
})