$(function(){
    var stringResult = '';

    /**
     * On questionario form submit 
     */
    $('#questionario').on('submit', function() {
        var size = $("#questionario > fieldset").length;
        var results = new Array();
        var pos = 0;
        results = [0,0,0,0,0,0,0,0];
        
        for (var i = 1; i <= 4; i++) {
            for(var j = i; j<=28; j+=4){
                if($('input[name=question'+j+']:checked').val() == 'A'){
                    results[pos]++;
                }else{
                    results[pos + 1]++;
                }
            }
            pos += 2;
        }
        var charsResult = ['E', 'I', 'S', 'N', 'T', 'F', 'J', 'P']
        for(var i = 0; i <= 3; i++){
            if(results[i*2] > results[i*2 + 1]){
                stringResult += charsResult[i*2]
            }else{
                stringResult += charsResult[i*2 + 1]
            }
        }

        $.ajax({
            url: 'saveAnswer.php',
            type: 'POST',
            data: { 'numbersResult': results, 'stringResult': stringResult},
            success: function (response) {
                showFormUser()
                window.location = "http://www.discipuluz.com/jungResult.php?resultado="+stringResult
            }
        })
        
        return false;
    })
    
    /**
     * Shows 2nd form (user) - with animation
     */
    function showFormUser(){
        
    }
})