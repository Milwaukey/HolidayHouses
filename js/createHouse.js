$('#frmCreateHouse').submit(function(){


    var frmCreateHouse = document.querySelector('#frmCreateHouse')
    
    var data = new FormData(frmCreateHouse);
    
        $.ajax({
    
            method: 'POST',
            url: 'apis/api-create-house.php',
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


