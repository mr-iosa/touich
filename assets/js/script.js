
// var needle = $('#animateNeedle'),
//     tape = $('#animateTape');
//     btn = $('#muhBtn');

// btn.on('mouseEnter', function(){
//     needle[0].beginElement();
//     tape[0].beginElement();
// });
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(
        {
            trigger: "hover",
            delay: { "show": 200, "hide": 0 }
        }
    );

    $('[data-toggle="tooltip"]').click(function () {
       $('[data-toggle="tooltip"]').tooltip("hide");
    });

    $('[data-dropdown]').click(function () {
        let targetDropdown = $(this).data('dropdown')
        $('.dropdown-big-full').each(function () {
            if(this.id === targetDropdown) {
                if($(this).hasClass('visible')) $(this).removeClass('visible');
                else $(this).addClass('visible');
            } else if($(this).hasClass('visible')) $(this).removeClass('visible');
        });
        $('[data-dropdown]').each(function () {
            if($(this).data('dropdown') === targetDropdown) {
                if($(this).hasClass('toggle')) $(this).removeClass('toggle');
                else $(this).addClass('toggle');
            } else if($(this).hasClass('toggle')) $(this).removeClass('toggle');
        });
    });
    $('.btn-close').click(function() {
        $(this).parents('.dropdown-menu').dropdown('toggle')
        // alert('close')
    });
});