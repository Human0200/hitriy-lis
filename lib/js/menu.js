$(document).ready(function () {
    var $toggleButton = $('.toggle-button'),
        $menuWrap = $('.menu-wrap');
    $toggleButton.on('click', function () {
        $(this).toggleClass('button-open');
        $menuWrap.toggleClass('menu-show');
    });
});

$(document).ready(function () {
    var $menuLink = $('.mmenu-link'),
        $menuWrap = $('.menu-wrap');
        $toggleButton = $('.toggle-button');
    $menuLink.on('click', function () {
        $menuWrap.toggleClass('menu-show');
        $toggleButton.removeClass('button-open');
    });
});

// $(document).ready(function () {
//     var $sidebarArrow = $('.sidebar-menu-arrow');
//     $sidebarArrow.click(function () {
//         $(this).next().slideToggle(300);
//     });
// });

// $(document).ready(function () {
//     $('.panel-heading').click(function () {
//         $(this).toggleClass('in').next().slideToggle();
//         $('.panel-heading').not(this).removeClass('in').next().slideUp();
//     });
// });
