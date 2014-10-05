$(window).on('scroll', function() {
    if($(window).scrollTop() > 0) {
        $('nav').css({
            boxShadow: '0 0 10px rgba(44,44,44,.3)'
        });
    } else {
        $('nav').css({
            boxShadow: '0 0 10px transparent'
        });
    }
});

$(window).on('load resize', function() {
    //NAV
    $('nav').width($(window).width());
    
    //GALLERY
    $('.gallery-image').each(function() {
        $(this).height(3/4*$(this).width());
    });
});

$(document).ready(function() {
    //SIDEBAR
    $('.side-toggle').click(function() {
        $('main, aside').toggleClass('hide');
    });
    $('.nav li.second a').click(function() {
        $(this).parent().find('.nav-second').toggleClass('nav-show', 200);
        $(this).toggleClass('selected');
    });
    
    //FORM
    $('.input-file input:text, .input-file h4').click(function() {
        $(this).parent().find('input:file').click();
        $(this).parent().find('input:file').change(function() {
            var isi = $(this).val();
            $(this).parent().find('input:text').val(isi);
        });
    });
    $('.datepicker').datepicker();
    $('.spinner').spinner();

    //HIDDEN-FORM
    $('.reveal').click(function() {
        var elemen = $(this).attr('data-id');
        var col = $(this).attr('data-pushed');
        $(elemen+' .hide').toggle({
            effect: 'slide',
            direction: 'right'
        });
        $(elemen+' .pushed').toggleClass('col-4');
        $(elemen+' .pushed').toggleClass(col);
    });
    
    //PANEL
    $('.panel-close').click(function() {
        $(this).parent().parent().parent().hide('fade', 200);
    });
    $('.panel-minimize').click(function() {
        $(this).parent().parent().parent().toggleClass('panel-minimized');
    });
    
    //DATATABLES
//    S('#datatables').DataTable();
    
    //BUTTON
    $('.button-dropdown').click(function() {
        $(this).find('ul').toggle();
    });
    
    //ALERT
    $('.alert p i.fa').click(function() {
        $(this).parent().parent().hide('fade',200);
    });
    
    //TOOLTIP
    $('.tipt').tooltip({
        tooltipClass: 'tipt',
        position: { my: 'center bottom', at: 'center top-6' }
    });
    $('.tipr').tooltip({
        tooltipClass: 'tipr',
        position: { my: 'left center', at: 'right+6 center' }
    });
    $('.tipb').tooltip({
        tooltipClass: 'tipb',
        position: { my: 'center top', at: 'center bottom+6' }
    });
    $('.tipl').tooltip({
        tooltipClass: 'tipl',
        position: { my: 'right center', at: 'left-6 center' }
    });
});