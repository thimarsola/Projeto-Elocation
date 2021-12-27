$(function(){

    $('.single__content__container__row__image__list__item').click(function(){
        var item = $(this);
        var items = $('.single__content__container__row__image__list__item');
        var thumb = $('.single__content__container__row__image__cover__thumb__image');

        if(!item.hasClass('active')){
            items.removeClass('active');
            item.addClass('active');

            thumb.fadeTo(200, 0.1, function(){
                $(this).attr('src', item.find('img').attr('src'));
                $(this).fadeTo(200, 1);
            });
        }

    });
});