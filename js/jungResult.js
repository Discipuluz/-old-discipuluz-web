$(function(){
    
    $('#form-feedback').on('submit', function(){
        var feedback = $("#user-feedback").val();
        var indication = $("#user-indication").val();
        var id = location.search.split('id=')[1];
        
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
            }
        });
        
        return false;  
    })
})