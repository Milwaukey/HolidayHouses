$('#frmSignup').submit(function(){


    var frmSignup = document.querySelector('#frmSignup')
    
    var data = new FormData(frmSignup); // <-- 'this' is your form element
    
        $.ajax({
    
            method: 'POST',
            url: 'apis/api-signup.php',
            data: data,
            contentType: false,
            processData: false, 
            
        }).
        done(function(sjData){
    
            jData = JSON.parse(sjData);

            console.log(jData.status)
    
            if(jData.status == 1){

                console.log('message')

                window.location.href = 'profile'

            }
    
    
        }).
        fail(function(){


        })
    
    
    return false;



})


