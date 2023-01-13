function reloadSections()
{
    // TODO очистка списка отделов и всех селектов отделов
    $.post('/ajax/section/load', {
        'id':'',
        'type':'tree',
    }, function(response){
        // Очистка селектов и блока отделов
        $('#section-main-field').empty();
        $('#user-section-field').empty();
        $('.main-body').empty();
        $.each(response, function(key, val){
            // Добавление главного отдела в селект
            $('#section-main-field').append('<option value="'+key+'">'+val.title+'</option>');
            $('#user-section-field').append('<option value="'+key+'">'+val.title+'</option>');
            $('.main-body').append(renderSection(val));

            // Перебор подотделов
            $.each(val.subsections, function (key1, val1){
                $('#user-section-field').append('<option value="'+key1+'">&nbsp;-&nbsp;'+val1.title+'</option>');
            });
        });
        initButtons();
    }, "json"); //
}

function renderSection(data)
{
    let wrapper = $('<div class="section"></div>');
    let header = $('<div class="section-header"></div>');
    let title = $('<div class="section-title"></div>');
    title.append('<h5>'+data.title+'</h5>');
    let director = '';
    if(data.director) {
        director = $('<a href="#" class="user-info-button"></a>');
        director.data('id', data.director.id).append(data.director.sname+' '+data.director.fname);
    } else {
        director = 'Руководитель не назначен';
    }
    title.append(director);
    let controls = $('<div class="section-control"></div>');
    let sectionUpdate = $('<a href="#" class="section-control-update"></a>');
    sectionUpdate.data('id', data.id).append('<i class="fa fa-pencil"></i>');
    controls.append(sectionUpdate);
    header.append(title).append(controls);

    let users = $('<div class="section-users"></div>');
    $.each(data.users, function(key, val){
        console.log(data.id, val);
        if (!data.director || data.director.id !== val.id) users.append(renderUser(val));
    });

    let subs = $('<div class="section-subs"></div>');
    $.each(data.subsections, function(key, val){
        subs.append(renderSection(val));
    });

    wrapper.append(header).append(users).append(subs);
    return wrapper;
}

function renderUser(data)
{
    let wrapper = $('<div class="section-user row"></div>');
    let title = $('<div class="section-user-title col-2"></div>');
    let a = $('<a href="#" class="user-info-button"></a>');
    a.data('id', data.id).append(data.sname+' '+data.fname);
    title.append(a);
    let position = $('<div class="section-user-position col-2">'+data.position+'</div>');
    wrapper.append(title).append(position);

    return wrapper;
}


function initButtons()
{
    // Открытие модали редактирования отдела
    $('.section-control-update').click(function(){
        $.post('/ajax/section/load', {
            'id':$(this).data('id'),
            'type':'single'
        }, function(response){
            $('#section-id-field').val(response.id);
            $('#section-title-field').val(response.title);
            if(response.parent) {
                $('#section-sub-field').prop('checked', 1);
            } else {
                $('#section-sub-field').prop('checked', 0);
            }
            $('#section-modal').modal('show');
        }, "json");
        return false;
    });

    $('.user-info-button').click(function(){
        $.post('/ajax/user/load', {
            'id':$(this).data('id')
        }, function(response) {
            $('.user-update-button').data('id', response.id);
            $('.user-info-name').html(response.sname+' '+response.fname);
            if(response.image) {
                $('.user-info-image').attr('src', '/images/upload/'+response.image).show();
            } else {
                $('.user-info-image').hide();
            }
            $('.user-info-birth').html(response.birth);
            $('.user-info-position').html(response.position);
            $('.user-info-section').html(response.section.title);
            if(response.director) $('.user-info-section').append(' <span class="remark">(Руководитель отдела)</span>');
            $('.user-info-work-begin').html(response.work_begin);
            $('.user-info-email').html(response.email);
            $('.user-info-phone-work').html(response.phone_work);
            $('.user-info-phone-private').html(response.phone_private);
            $('.user-info-socials').html('');
            $.each(response.socials, function (key, val){
                $('.user-info-socials').append(val.value+'<br />');
            });

            $('#sidebar-right').offcanvas('show');
        }, "json"); //
        return false;
    });
}

$(document).ready(function(){
    reloadSections();

    // Управление формой управления отделами
    // Проверка поля наименование
    $('#section-title-field').keyup(function(){
        if (!$(this).val()) $('#section-form-submit').attr('disabled','disabled');
        else $('#section-form-submit').removeAttr('disabled');
    });
    // Открытие/сокрытие поля выбора подотдела
    $('#section-sub-field').change(function(){
        if($(this).prop('checked')) {
            $('.section-main-block').show();
            $('.section-main-field').removeAttr('disabled');
        } else {
            $('.section-main-block').hide();
            $('.section-main-field').attr('disabled','disabled');
        }
    });
    // Открытие модали добавления нового отдела
    $('.add-section').click(function(){
        $('#section-id-field').val('new');
        $('#section-title-field').val('');
        $('#section-sub-field').removeAttr('checked');
        $('#section-modal').modal('show');
        return false;
    });
    // Сабмит формы управления отделом
    $('#section-update-form').submit(function(){
        let sub = 0;
        if($('#section-sub-field').prop('checked')) sub = 1;
        $('#section-modal').modal('hide');
        $.post('/ajax/section/update', {
            'id':$('#section-id-field').val(),
            'title': $('#section-title-field').val(),
            'sub': sub,
            'parent': $('#section-main-field').val()
        }, function(response){
            //console.log(response);
            if(response) reloadSections();
        }, "json"); //
        return false;
    });

    // Форма управления пользователями
    $('.add-user').click(function(){
        $('#user-update-form').trigger('reset');
        $('.user-social-field').remove();
        $('.user-socials-fields').append('<input type="text" class="form-control user-social-field">');
        $('#user-id-field').val('new');
        $('.make-director').show();

        $('#user-modal').modal('show');
        return false;
    });

    // Добавление поля соцсетей
    $('.add-socials-field').click(function(){
        let field = $('<input type="text" class="form-control user-social-field">');
        $('.user-socials-fields').append(field);
        field.focus();
        return false;
    });

    // Сабмит формы управления пользователем
    $('#user-update-form').submit(function(){
        let director = 0;
        if($('#user-director-field').prop('checked')) director = 1;
        let formData = new FormData();
        formData.append('id', $('#user-id-field').val());
        formData.append('fname', $('#user-fname-field').val());
        formData.append('sname', $('#user-sname-field').val());
        formData.append('tname', $('#user-tname-field').val());
        formData.append('birth', $('#user-birth-field').val());
        formData.append('director', director);
        formData.append('section', $('#user-section-field').val());
        formData.append('position', $('#user-position-field').val());
        formData.append('work_begin', $('#user-work-begin-field').val());
        formData.append('email', $('#user-email-field').val());
        formData.append('phone_work', $('#user-phone-work-field').val());
        formData.append('phone_private', $('#user-phone-private-field').val());
        $('.user-social-field').each(function(key, val){
            formData.append('socials[]', $(val).val());
        });
        formData.append('file', $('#user-ava-field')[0].files[0]);

        $('#user-modal').modal('hide');

        $.ajax({
            type: "POST",
            url: '/ajax/user/update',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            //dataType : 'json',
            success: function(msg){
                reloadSections();
            }
        });
        return false;
    });

    $('.user-update-button').click(function(){
        $('#sidebar-right').offcanvas('hide');
        $.post('/ajax/user/load', {'id':$(this).data('id')}, function(response){
            $('#user-id-field').val(response.id);
            $('#user-fname-field').val(response.fname);
            $('#user-sname-field').val(response.sname);
            $('#user-tname-field').val(response.tname);
            $('#user-birth-field').val(response.birth);

            $('#user-section-field').val(response.section.id);
            $('#user-position-field').val(response.position);
            $('#user-work-begin-field').val(response.work_begin);
            $('#user-email-field').val(response.email);
            $('#user-phone-work-field').val(response.phone_work);
            $('#user-phone-private-field').val(response.phone_private);

            $('.user-social-field').remove();
            $.each(response.socials, function(key, val){
                $('.user-socials-fields').append('<input type="text" class="form-control user-social-field" value="'+val.value+'">');
            });
            $('.user-socials-fields').append('<input type="text" class="form-control user-social-field">');

            if(response.director) {
                $('.make-director').hide();
            } else {
                $('.make-director').show();
            }

            $('#user-modal').modal('show');
        }, "json");
        return false;
    });
});
