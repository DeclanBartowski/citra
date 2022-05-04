$(document).on('change', '[name="contacts"]', function (){
    $('[data-contacts]').hide();
    $('[data-contacts="'+$(this).val()+'"]').show();
});

$(document).on('click', '[data-news]', function (){

    Fancybox.close();
    let id = $(this).data('news');
    BX.ajax.runAction('tq:tools.news.getDetail', {
        data: {
            fields: {
                ID: id,
            }
        }
    }).then(function (response) {
        $('#infoNews').html(response.data.html);
        Fancybox.show([{ src: "#news-popup", type: "inline" }]);
    }, function (response) {
        console.log(response);
        alert('error');
    });
});

$(document).on('click', '[data-services]', function (){

    Fancybox.close();
    let id = $(this).data('services');
    BX.ajax.runAction('tq:tools.services.getDetail', {
        data: {
            fields: {
                ID: id,
            }
        }
    }).then(function (response) {
        $('#service-content').html(response.data.html);
        Fancybox.show([{ src: "#service-popup", type: "inline" }]);
    }, function (response) {
        console.log(response);
        alert('error');
    });
})

$(document).on('submit', '#sendServices', function () {

    let resultForm = $(this).serializeArray();
    Fancybox.close();
    BX.ajax.runAction('tq:tools.forms.sendForm', {
        data: {
            fields: {
                form: resultForm,
            }
        }
    }).then(function (response) {
        console.log(response);
        Fancybox.show([{ src: "#success", type: "inline" }]);
    }, function (response) {
        console.log(response);
        alert('error');
    });
    return false;
})