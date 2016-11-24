// $(window).scroll(function () {
//     console.log('scrollTop ' + $(window).scrollTop());
//     console.log('document).height' + $(document).height());
//     console.log('window).height ' + $(window).height());
//     if ($(window).scrollTop() >= $(document).height() - $(window).height() ) {
//         //Add something at the end of the page
//     alert('baba');
//     }
// });


var scrollListener = function () {
    $(window).one("scroll", function () { //unbinds itself every time it fires
        console.log('scrollTop ' + $(window).scrollTop());
        console.log('document).height' + $(document).height());
        console.log('window).height ' + $(window).height());
        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 100) {
            //Add something at the end of the page
            // alert('baba');
            var html = '<article class="white-panel r5 c3" style="width: 389.5px; left: 1198.5px; top: 4353px;"><img src="https://s-media-cache-ak0.pinimg.com/236x/0b/6a/f5/0b6af5ab8c650875f201edfef163aace.jpg" alt="Andrea Hollan">' +
                '<h1><a href="http://candiabetesbecured4u.blogspot.com/">Andrea Hollan</a></h1>' +
            '<p>Type 1 Diabetes - All the diabetic care products you need are available to you @EP Medical Equipment Pharmacy - Free delivery in Miami</p>' +
            '</article>';
            $('#blog-landing').append(html);
        }
        setTimeout(scrollListener, 200); //rebinds itself after 200ms
    });
};
$(document).ready(function () {
    scrollListener();
});