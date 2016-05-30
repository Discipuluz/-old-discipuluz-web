$(function(){
    
    $('input, textarea').each(inputClass)
    $('input, textarea').on('input', inputClass)
    
    function inputClass(){
        //filled
        if($(this).val()){
            $(this).addClass('filled')
        }else{
            $(this).removeClass('filled')
        }
        
        //required
        if($(this).prop('required')){
            if($(this).val()){
                $(this).addClass('valid')
                $(this).removeClass('invalid')
            }else{
                $(this).addClass('invalid')
                $(this).removeClass('valid')
            }
        }
        
        //email
        if($(this).prop('type') === 'email'){
            if(/^[^@]+@.+\.[^.]+$/i.test($(this).val())){
                $(this).addClass('valid')
                $(this).removeClass('invalid')
            }else{
                $(this).addClass('invalid')
                $(this).removeClass('valid')
            }
        }
    }
    
    /**
     * Resize Text areas
     */
    $('textarea').on('input', resizeTextArea)
    $('textarea').each(resizeTextArea)
    
    function resizeTextArea(){
        $(this).css('height', 'auto')
        $(this).css('height', $(this).prop('scrollHeight') + 1 + 'px')
    }
    
    /**
     * Update ranges meters
     */
    $('.form-range').on('input', updateRangeMeters)
    $('.form-range').on('change', updateRangeMeters)
    $('.form-range').each(updateRangeMeters)
    
    function updateRangeMeters(){
        console.log($(this).val())
        $(this).parent().parent().find('.form-range-meter').text($(this).val())
    }
})

function validate($form){
    var result = true
    $form.find('input, textarea').each(function(){
        if($(this).hasClass('invalid')){
            result = false;
        }
    })
    return result
}