function up(){
    var n=$('.select option:selected').val();

    $.ajax({
        url: "json_data.php",
        type: "get",
        data: { 
        id: n, 
        
        },
        success: function(data) {
        var obj = jQuery.parseJSON(data );
        
        $(".modal-body").empty()
        $('.modal-body').append('<p> id=' + obj.id +  '</p>');
        $('.modal-body').append('<p> date=' + obj.date +  '</p>');
        $('.modal-body').append('<p>title=' + obj.title +  '</p>');
           },
        
        });
        
}

$( "#target" ).click(function() {
 up();
                 });

