const readMore = (card = '.js-card', btn = '.js-card-button', content = '.js-card-content') => {

    function setDefaultHeight(){
        $(card).each(function (i, el) {
            $(el).css('height', $(el).height());
        });
    }

    function openCard(currentCard){
        $(card).each(function (i, el) {
            if(currentCard.is(el)){
                setTimeout(function(){
                $(el).find(content).slideDown(600);
                $(el).addClass("open");
                }, 300)
            }  else {
                $(el).find(content).slideUp(400, function(){
                    $(el).removeClass("open");
                });
            }
        })
    }

    function closeCard(currentCard){
        $(currentCard).find(content).slideUp(400, function(){
            $(currentCard).removeClass("open");
            console.log('close card')
        });
    }

        setDefaultHeight();

        $(btn).on('click',(ev) => {
            ev.preventDefault();
            const currentCard = $(ev.currentTarget).closest('.js-card');
            if(!currentCard.hasClass('open')){
                openCard(currentCard)
            } else{
                closeCard(currentCard)
            }
        })
}
export default readMore;