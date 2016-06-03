$(function(){
    
    $('#form-feedback').on('submit', function(){
        if(validateForm($('#form-contato'))){ //forms.validate
            
            var feedback = $("#user-feedback").val();
            var indication = $("#user-indication").val();
            var id = location.search.split('id=')[1];
            
            disableButton($(this).find('button'))
            
            $.ajax({
                url: 'ajax/saveFeedback.php',
                type: 'POST',
                data: {
                    'feedback': feedback, 
                    'indication': indication, 
                    'id': id
                },
                success: function (response){
                    $('.form-card-container').addClass('flipped')
                },
                error: function(jqXHR, status){
                    console.log(status)
                }
            });
        }
        
        return false;  
    })
})