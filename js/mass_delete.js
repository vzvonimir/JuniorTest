$(document).ready(function(){


    $("#delete-product-btn").click(function(){
        var id_arr = [];
        $('.delete-checkbox:checked').each(function() {
           id_arr.push(this.value); 
        });
       

        $.ajax({
            url: "controllers/delete.php",
            data: {id_arr: id_arr},
            type: "POST",
            success:function(data){
                if(data != "0"){
                    location.reload(true);
                }   
            }
        });
 

    });








});