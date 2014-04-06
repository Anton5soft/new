$(document).ready(function(){
   varl =  $(".view").attr('href','#');
linkAdmNewsView= $("#AdmNewsView").data('url');
    $(".view").click(function() {
        $.ajax({
            url: linkAdmNewsView,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('#ajaxcontmenu').html(data);
            }

        }).fail(function(){
            alert("Error");
        });
    });


});