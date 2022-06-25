// Hello!

import * as JQuery from "jquery";
import readMore from "./components/read-more";
import navMobile from './components/header-nav.js'
import fixedHeader from './components/headerOnScroll';

window.$ = JQuery.default;

$(document).ready(() => {
    $('.js-card').each((i, el) => {
        let height = $(el).height();
        $(el).css('height', height);
    })
    readMore();
    navMobile();
    fixedHeader();
})
