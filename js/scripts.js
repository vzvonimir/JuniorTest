$(document).ready(function(){

    
    $("#productType").click(function(){
        var type = $("#productType").val();
        if(type == 1){
            $("#DVD").css("display", "block");
            $("#Furniture").css("display", "none");
            $("#Book").css("display", "none");
        }else if(type == 2){
            $("#Furniture").css("display", "block");
            $("#Book").css("display", "none");
            $("#DVD").css("display", "none");
        }else if(type == 3){
            $("#Book").css("display", "block");
            $("#DVD").css("display", "none");
            $("#Furniture").css("display", "none");
        }else{
            $("#DVD").css("display", "none");
            $("#Furniture").css("display", "none");
            $("#Book").css("display", "none");
        }
    });

    
    $("#save").click(function(){
        var SKU = $("#sku").val();
        var name = $("#name").val();
        var price = Number($("#price").val());
        var type = $("#productType").val();
        var dvd_size = Number($("#size").val());
        var furniture_height = Number($("#height").val());
        var furniture_width = Number($("#width").val());
        var furniture_length = Number($("#length").val());
        var book_weight = Number($("#weight").val());
        var dimensions = "";
        var error = 0;


       $.ajax({
            url: "controllers/ajax_code.php",
            data: {SKU: SKU},
            type: "POST",
            success:function(data){
                if(data != "0"){
                    $("#sku_warning2").css("display", "block");
                    error += 1;
                }else{
                    $("#sku_warning2").css("display", "none");
                }
            }
        });

        if(SKU == ""){
            $("#sku_warning").css("display", "block");
            error += 1;
        }else{
            $("#sku_warning").css("display", "none");
        }

        if(name == ""){
            $("#name_warning").css("display", "block");
            error += 1;
        }else{
            $("#name_warning").css("display", "none");
        }

        if(price == "" || typeof price != 'number'){
            $("#price_warning").css("display", "block");
            error += 1;
        }else{
            $("#price_warning").css("display", "none");
        }



        if(type == "0"){
            $("#type_warning").css("display", "block");
            error += 1;
        }else{
            $("#type_warning").css("display", "none");
        }
        
        if(type == "1"){
           error = dvdValidation(error, dvd_size);
           $.when(error == 0).then(function(){
               ajaxCode("controllers/dvdSave.php", error, SKU, name, price, dvd_size);
           });
        }else if(type == "2"){
            error = furnitureValidation(error, furniture_height, furniture_width, furniture_length);
            $.when(error == 0).then(function(){
                dimensions += furniture_height + "x" + furniture_width + "x" + furniture_length;
                ajaxCode("controllers/furnitureSave.php", error, SKU, name, price, dimensions);
            });
        }else if(type == "3"){
            error = bookValidation(error, book_weight);
            ajaxCode("controllers/bookSave.php", error, SKU, name, price, book_weight);
        }



    });

        
    $("#cancel_btn").click(function(){
        $("#sku").val("");
        $("#name").val("");
        $("#price").val("");
        $("#productType").val("0");
        $("#DVD").css("display", "none");
        $("#Furniture").css("display", "none");
        $("#Book").css("display", "none");
        $("#size").val("");
        $("#height").val("");
        $("#width").val("");
        $("#length").val("");
        $("#weight").val("");
        $(location).prop("href", "index.php");
    });
          




});







function dvdValidation(error, dvd_size){
    if(dvd_size == "" || typeof dvd_size != 'number'){
        $("#dvd_warning").css("display", "block");
        error += 1;
    }else{
        $("#dvd_warning").css("display", "none");
    }
    return error;
}

function furnitureValidation(error, furniture_height, furniture_width, furniture_length){
    if(furniture_height == "" || typeof furniture_height != 'number'){
        $("#height_warning").css("display", "block");
        error += 1;
    }else{
        $("#height_warning").css("display", "none");
    }

    if(furniture_width == "" || typeof furniture_width != 'number'){
        $("#width_warning").css("display", "block");
        error += 1;
    }else{
        $("#width_warning").css("display", "none");
    }

    if(furniture_length == "" || typeof furniture_length != 'number'){
        $("#length_warning").css("display", "block");
        error += 1;
    }else{
        $("#length_warning").css("display", "none");
    }
    return error;
}

function bookValidation(error, book_weight){
    if(book_weight == "" || typeof book_weight != 'number'){
        $("#book_warning").css("display", "block");
        error += 1;
    }else{
        $("#book_warning").css("display", "none");
    }
    return error;
}



function ajaxCode(url, error, SKU, name, price, spec){
    $.ajax({
        url: url,
        data: {
            error: error,
            sku: SKU,
            name: name,
            price: price,
            product_spec: spec
        },
        type: "POST",
        success:function(data){
         if(data == "1"){
            $(location).prop("href", "index.php");
        }
        }  
    });
}