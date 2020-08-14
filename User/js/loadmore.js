// load-more  

$(function () {
    $(".media").slice(0, 7).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".media:hidden").slice(0, 4).slideDown();
        if ($(".media:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        
    });
});



