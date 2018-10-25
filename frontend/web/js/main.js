$( ".bolashak-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/bolashak-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            if(response.OutADB) {
                $('.response').show();
                $('.number').val(response.number);
                $('.OutADB').val(response.OutADB);
                $('.OutATPD').val(response.OutATPD);
                $('.OutTT').val(response.OutTT);
                $('.OutCI').val(response.OutCI);
                $('.OutTD').val(response.OutTD);
                $('.OutHD').val(response.OutHD);
                $('.OutTPD').val(response.OutTPD);
                $('.OutDB').val(response.OutDB);
                $('.OutTTV').val(response.OutTTV);
                $('.errors').html('Готово!').css('color', 'green');
            }else{
                $('.errors').html(response);
            }
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$( ".kazina-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/kazina-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            if(response.number) {
                $('.response').show();
                $('.number').val(response.number);
                $('.OutADB').val(response.OutADB);
                $('.OutATPD').val(response.OutATPD);
                $('.OutTT').val(response.OutTT);
                $('.OutCI').val(response.OutCI);
                $('.OutTD').val(response.OutTD);
                $('.OutHD').val(response.OutHD);
                $('.OutTPD').val(response.OutTPD);
                $('.errors').html('Готово!').css('color', 'green');
            }else{
                $('.errors').html(response);
            }
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$( ".osrns-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/osrns-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            if(response.premKz) {
                $('.response').show();
                $('.premKz').val(response.premKz);
                $('.sumStrahKz').val(response.sumStrahKz);
                $('.errors').html('Готово!').css('color', 'green');
            }else{
                $('.errors').html(response);
            }
            // $('.err').val(response.err);
            // $('.result').val(response.result);
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$( ".mst-response" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/calculator/mst-response',
        dataType: 'json',
        data: $(this).serialize(),
        cache: false,
        success: function(response){
            if(response.premKz) {
                $('.result_mst').show();
                $('.response').show();
                $('.premKz').val(response.premKz);
                $('.kurs').val(response.kurs);
                $('.sumStrahKz').val(response.sumStrahKz);
                $('.premEur').val(response.premEur);
                $('.errors').html('Готово!').css('color', 'green');
            }else if(response.err){
                $('.errors').html(response.err);
            }else
                $('.errors').html(response);
        },
        error: function(){
            alert('Ошибка');
        }
    });
});
$(".insuranceProgramm").change(function(){
    if($(this).val()==2)
        $('.rprogSrok').removeAttr("disabled");
    else
        $('.rprogSrok').attr("disabled", "disabled");
});
$(".rprogSrok").change(function(){
    $('.rprogMaxDays1').hide();
    $('.rprogMaxDays2').hide();
    $('.rprogMaxDays3').hide();
    if($(this).val()==1) {
        $('.rprogMaxDays1').removeAttr("disabled").show();
        var val = $('.rprogMaxDays1').clone();
        $('.rprogMaxDays1').remove()
        val.appendTo(".rprogMaxDays");
    }
    if($(this).val()==2){
        $('.rprogMaxDays2').removeAttr("disabled").show();
        var val = $('.rprogMaxDays2').clone();
        $('.rprogMaxDays2').remove()
        val.appendTo(".rprogMaxDays");
    }
    if($(this).val()==3){
        $('.rprogMaxDays3').removeAttr("disabled").show();
        var val = $('.rprogMaxDays3').clone();
        $('.rprogMaxDays3').remove()
        val.appendTo(".rprogMaxDays");
    }
    if($(this).val()==0)
        $('.rprogMaxDays1').attr("disabled", "disabled").show();
});
$('select[name="Mst[country1]"]').change(function(){
    if($(this).val()==0)
        $('.sumStrah1').attr("disabled", "disabled").show();
    else
        $.ajax({
            type: 'GET',
            url: '/calculator/country-type',
            data: {id: $(this).val()},
            success: function(response){
                $('.sumStrah1').hide();
                $('.sumStrah2').hide();
                $('.sumStrah3').hide();
                if(response==1){
                    $('.sumStrah1').removeAttr("disabled").show();
                    var val = $('.sumStrah1').clone();
                    $('.sumStrah1').remove()
                    val.appendTo(".sumStrah");
                }
                if(response==2){
                    $('.sumStrah2').removeAttr("disabled").show();
                    var val = $('.sumStrah2').clone();
                    $('.sumStrah2').remove()
                    val.appendTo(".sumStrah");
                }
                if(response==3){
                    $('.sumStrah3').removeAttr("disabled").show();
                    var val = $('.sumStrah3').clone();
                    $('.sumStrah3').remove()
                    val.appendTo(".sumStrah");
                }
            },
            error: function(){
                alert('Ошибка');
            }
        });
});
$(".newsbut").click(function() {
    page++;
    newdata=$(this).data('page')+1;
    alert(page);
    $(this).data('page', newdata)
    $.ajax({
        type: "POST",
        url: "/news/page/",
        data: {page: page},
        success: function(html){
            $('.newsbut').hide();
            $(".about-stock").append(html);
        }
    });
    return false;
});
$('.block1-link.edit').click(function () {
    $('.message').text('');
    $('.block1__row2 .edit').show();
    $('.block1__row2 .password').hide();
    $('.block1__row2 .personal_data').hide();
});
$('.block1-link.password').click(function () {
    $('.message').text('');
    $('.block1__row2 .password').show();
    $('.block1__row2 .edit').hide();
    $('.block1__row2 .personal_data').hide();
});
$( ".edit-form" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: "/cabinet/edit",
        dataType: 'json',
        data: $(this).serialize(),
        success: function(response){
            if(response) {
                $('.block1__row2 .personal_data').show();
                $('.block1__row2 .edit').hide();
                $('.block1__row2 .password').hide();
                $('.message').text('Данные успешно изменены!').css('color', 'green');

                $('.personal_data .iin').text(response.iin);
                $('.personal_data .fio').text(response.fio);
                $('.personal_data .phone').text(response.phone);
                $('.personal_data .email').text(response.email);
            }else{
                $('.message').text('Что то пошло не так. Попробуйте снова.').css('color', 'red');
            }
        }
    });
});
$( ".password-form" ).on( "submit", function( event ) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: "/cabinet/password",
        dataType: 'json',
        data: $(this).serialize(),
        success: function(response){
            if(response.error == 0) {
                $('.block1__row2 .personal_data').show();
                $('.block1__row2 .edit').hide();
                $('.block1__row2 .password').hide();
                $('.message').text(response.message).css('color', 'green');
            }else{
                $('.message').text(response.message).css('color', 'red');
            }
        }
    });
});
// $('.callback').click(function(event){
//     event.preventDefault();
//     swal({
//             title: 'Обратный звонок',
//             html: '<input type="text" class="callback-name" placeholder="Ваше имя *" /><br /><input type="text" class="callback-phone" placeholder="Телефон *" /><div class="callback-error" style="color:red;"></div>',
//             showCancelButton: true,
//             closeOnConfirm: false,
//             confirmButtonText: 'Отправить',
//             confirmButtonColor: '#3cd3e3',
//             cancelButtonText: 'Отмена'
//         },
//         function(){
//             if ($('.callback-name').val() == '' || $('.callback-phone').val() == ''){
//                 var val = '';
//                 if($('.callback-name').val()=='')
//                     val = 'Пожалуйста, заполните Ваше имя.<br />';
//                 if($('.callback-phone').val()=='')
//                     val = val + 'Пожалуйста, заполните Ваш телефон.<br />';
//
//                 $('.callback-error').html(val);
//             } else {
//                 $.ajax({
//                     type: 'GET',
//                     url: "/site/contact-phone",
//                     data: {name: $('.callback-name').val(), phone: $('.callback-phone').val()},
//                     cache: false,
//                     success: function(responce){
//                         if (responce == 'done') {
//                             swal('Заявка успешно отправлена!', 'В ближайшее время мы свяжемся с вами.', 'success');
//                         }
//                     }
//                 });
//             }
//         });
//     $('.callback-phone').mask('+7 (999) 999-99-99');
// });
$('.callback').click(function(event){
    event.preventDefault();
    if ($('.callback-name').val() == '' || $('.callback-phone').val() == ''){
        var val = '';
        if($('.callback-name').val()=='')
            val = 'Пожалуйста, заполните Ваше имя.<br />';
        if($('.callback-phone').val()=='')
            val = val + 'Пожалуйста, заполните Ваш телефон.<br />';

        $('.callback-error').html(val);
    } else {
        $.ajax({
            type: 'GET',
            url: "/site/contact-phone",
            data: {name: $('.callback-name').val(), phone: $('.callback-phone').val()},
            cache: false,
            success: function(responce){
                if (responce == 'done') {
                    $('.close').click();
                    $('.callback-error').html('');
                    swal('Заявка успешно отправлена!', 'В ближайшее время мы свяжемся с вами.', 'success');
                }
            }
        });
    }
});
jQuery(function($){
    $("#phone").mask("+7(999)999 99 99");
    $("#phone2").mask("+7(999)999 99 99");
});
$(document).ready(function () {

    AOS.init({
        offset: 50,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
//            disable: window.innerWidth < 768
    });

    $('.accordion-heading2').click(function () {
        $('.accordion-heading2').toggleClass('accordion-opened');
    });

    $('.accordion-heading3').click(function () {
        $('.accordion-heading3').toggleClass('accordion-opened');
    })

    $('.accordion-heading4').click(function () {
        $('.accordion-heading4').toggleClass('accordion-opened');
    })

    $('.accordion-heading5').click(function () {
        $('.accordion-heading5').toggleClass('accordion-opened');
    })

});