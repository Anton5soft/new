$(document).ready(function(){
linkCnews = $("#newscreate").data('url');
linkAnews = $("#newsadmin").data('url');
linkCvideo = $("#videoadd").data('url');
linkAvideo = $("#videoadmin").data('url');
linkCtour = $("#touradd").data('url');
linkAtour = $("#touradmin").data('url');
linkCimage = $("#imageadd").data('url');
linkAimage = $("#imageadmin").data('url');
    $(".createnews").click(function() {
        $.ajax({
            url: linkCnews,
            type: "GET",
            dataType: "html",
            success: function(data){
                    $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".adminnews").click(function() {
        $.ajax({
            url: linkAnews,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".videoadd").click(function() {
        $.ajax({
            url: linkCvideo,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".videoadmin").click(function() {
        $.ajax({
            url: linkAvideo,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".touradd").click(function() {
        $.ajax({
            url: linkCtour,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".touradmin").click(function() {
        $.ajax({
            url: linkAtour,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
                alert("Error");
            });
    });
    $(".imageadd").click(function() {
        $.ajax({
            url: linkCimage,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
            alert("Error");
        });
    });
    $(".imageadmin").click(function() {
        $.ajax({
            url: linkAimage,
            type: "GET",
            dataType: "html",
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
            alert("Error");
        });
    });


});
