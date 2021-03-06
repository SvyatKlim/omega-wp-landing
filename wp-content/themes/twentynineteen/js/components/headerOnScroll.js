const headerOnScroll = () => {
    const header = $('.header');
        const offsetScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (offsetScroll > 0) {
            header.addClass('header-fixed');
        } else {
            header.removeClass('header-fixed');
        }
};

const fixedHeader = () => {
    headerOnScroll();
    $(window).on('scroll', () => {
        headerOnScroll();
    });

    $(window).on('resize', function () {
        headerOnScroll();
    })
};

export default fixedHeader;