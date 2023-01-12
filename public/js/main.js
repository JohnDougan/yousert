$(document).ready(function(){
    // Управление формой управления отделами
    $('#section-title-field').change(function(){
        console.log($(this).val());
        if (!$(this).val()) $('#section-form-submit').attr('disabled','disabled');
        else $('#section-form-submit').removeAttr('disabled');
    });
    $('#section-sub-field').change(function(){
        if($(this).prop('checked')) {
            $('.section-main-block').show();
            $('.section-main-field').removeAttr('disabled');
        } else {
            $('.section-main-block').hide();
            $('.section-main-field').attr('disabled','disabled');
        }
    });
});