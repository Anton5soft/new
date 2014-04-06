$(document).ready(function(){
    $(".menunews").click(function() {
        $('#cont').hide(300);
        $( "body" ).addClass( "news" );
        $( ".news" ).animate({opacity: 0.7}, 'slow', function() {
            $(this).css({'background-image': 'url(/phil/themes/phil/css/img/Backgroundnews.jpg)'})
                .animate({opacity: 1}
            );
        });
        $.ajax({
            url: 'index.php/news',
            type: "GET",
            dataType: "html",
            success: function(data){
                    $('#ajaxcontmenu').html(data);
                }

        }).fail(function(){
                alert("Error");
            });
    });

    $(".menuvideo").click(function() {
        $('#cont').hide(300);
        $.ajax({
            url: 'index.php/video',
            type: "GET",
            dataType: "html",
            success: function(data){
                    $('#ajaxcontmenu').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".menutour").click(function() {
        $('#cont').hide(300);
        $.ajax({
            url: 'index.php/tour',
            type: "GET",
            dataType: "html",
            success: function(data){
                    $('#ajaxcontmenu').html(data);
                }

        }).fail(function(){
                alert("Error");
            });
    });
    $(".menu").click(function() {
        $('#cont').hide(300);
        $.ajax({
            url: 'index.php/tour',
            type: "GET",
            dataType: "html",
            success: function(data){
                $('#ajaxcontmenu').html(data);
            }

        }).fail(function(){
            alert("Error");
        });
    });
    $(".menugallery").click(function() {
        $('#cont').hide(300);
        $.ajax({
            url: 'index.php/document',
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
