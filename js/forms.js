$(function(){
    
    $('input').each(inputClass)
    $('input').on('input', inputClass)
    
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
})
    
function validate($form){
    var result = true
    $form.find('input').each(function(){
        if($(this).hasClass('invalid')){
            result = false;
        }
    })
    return result
}