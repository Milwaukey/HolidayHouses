$('#frmCreateHouse').submit(function(){

    console.log("test")
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
            // jData = JSON.parse(sjData);

            // console.log(jData.status)
    

                window.location.href = 'profile'

    
    
    
        }).
        fail(function(){
            console.loh('error')

        })
    
    
    return false;



})


