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
                $('#user-section-field').append('<option value="'+key1+'">&nbsp;--'+val1.title+'</option>');
            });
            initButtons();
        });
    }, "json"); //
}

function renderSection(data)
{
    let wrapper = $('<div class="section"></div>');
    let header = $('<div class="section-header"></div>');
    let title = $('<div class="section-title"></div>');
    title.append('<h5>'+data.title+'</h5>');
    let director;
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
        users.append(renderUser(val));
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
    let title = $('<div className="section-user-title col-2"></div>');
    let a = $('<a href="#" class="user-info-button"></a>');
    a.data('id', data.id).append(data.sname+' '+data.fname);
    title.append(a);
    let position = $('<div className="section-user-position col-2">'+data.position+'</div>');
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
            console.log(response);
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

});
