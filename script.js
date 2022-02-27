$(document).ready(function(){

    $("#products").on("click", ".add-to-cart", function(e){
        e.preventDefault();
        $.ajax({
            "url": "index.php",
            "method": "get",
            "data":{
                "id": $(this).data("id"),
                "action": "add"
            }
            //"dataType": "json"
        }).done(function(data){
            console.log(data);
        });
    });

});