$(function(){    
    $('#form-contato').on('submit', function(){
        if(validateForm($('#form-contato'))){ //forms.validate
            disableButton($(this).find('button'))
            
            var name = $("#user-name").val(),
                email = $("#user-email").val(),
                comments = $("#user-comments").val()
            
            $.ajax({
                url: 'ajax/register.php',
                type: 'POST',
                data: {
                    'name': name,
                    'email': email,
                    'comments': comments
                },
                success: function () {
                    $('.form-card-container').addClass('flipped')
                },
                error: function(jqXHR, status){
                    console.log(status)
                }
            })
        }
        return false;
    })
})