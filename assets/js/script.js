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
    $('.input-file-exist > h4').click(function() {
        $(this).parent().parent().removeClass('file-exist');
        $(this).parent().parent().find('input[type="text"]').click();
    });
    $('.datepicker').datepicker();
    $('.spinner').spinner();
    
    //PANEL
    $('.panel-close').click(function() {
        $(this).parent().parent().parent().hide('fade', 200);
    });
    $('.panel-minimize').click(function() {
        $(this).parent().parent().parent().toggleClass('panel-minimized');
    });
    
    //BUTTON
    $('html').click(function() {
        $('.dropdown-toggle + ul').hide();
        $('.simple-confirm').hide();
        
    });
    $('.dropdown-toggle').click(function(event) {
        $(this).next('ul.dropdown-menu').toggle();
        event.stopPropagation();
        $('.dropdown-toggle').not(this).next('ul.dropdown-menu').hide();
    });
    
    //ALERT
    $('.alert p i.fa').click(function() {
        $(this).parent().parent().hide('fade',200);
    });
    
    //POPUP
    $('.button-confirm').each(function() {
        var target = $(this).attr('href');
        $(this).removeAttr('href');
        var simpleConfirm = $("<div class='simple-confirm'><p>Are you sure?</p><a href='"+target+"' class='button button-red button-icon'><i class='fa fa-check'></i></a><a class='button button-red button-icon'><i class='fa fa-times'></i></a></div>");
        simpleConfirm.appendTo(this);
    });
    $('.button-confirm').click(function(event) {
        $('.button-confirm').not(this).find('.simple-confirm').hide();
        $(this).find('.simple-confirm').toggle();
        event.stopPropagation();
    });
    
//    $('.simple-confirm').on('click', 'a', function() {
//        alert('sfdsdf');
//    });
    
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
    
    //FORM VALIDATION
    $('.form-error').tooltip({
        tooltipClass: 'form-error',
        position: { my: 'left top', at: 'left bottom+6' }
    });
    $('input.form-error').keypress(function() {
        $(this).removeAttr('title');
        $(this).tooltip('destroy');
        $(this).removeClass('form-error');
    });
    
    //KHUSUS DEMO
    $('a.open-code').click(function() {
        var target= $(this).attr('data-target');
        $(this).parent().find('pre.show-code code').text($('.'+target).html());
        $(this).parent().find('pre.show-code').toggle();
//        $('.'+target).wrapInner("<pre><code></code></pre>");
//        $(this).addClass('close-code');
//        $(this).removeClass('open-code');
    });
//    $('a.close-code').click(function() {
//        var target= $(this).attr('data-target');
//        $('.'+target).html( $('.'+target).text() );
//        //$('.'+target).wrapInner("<pre><code></code></pre>");
//        $(this).removeClass('close-code');
//        $(this).addClass('open-code');
//    });
    
    //DATATABLES
    $('.datatable').DataTable({
        'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': ['nosort']
        }]
    });
    $('.datatable-nosort').DataTable({
        ordering: false
    });
});