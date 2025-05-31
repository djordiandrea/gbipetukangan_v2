console.log("global js");
var base_url = window.location.origin;
var path = document.location.pathname;
console.log(base_url);
console.log(path);

id = $('#idUser').val();

$( ".side-menu" ).each(function( index ) {
    // console.log($(this).data('link'));
    if(path == $(this).data('link')){
        $(this).addClass('active');
    }
  });

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var ajax = {
    ajaxTest:function(json){
        console.log("Test ajax");
        console.log(json);
    },
    ajaxGet:function (url, next){
        // console.log(base_url+url);
        $.ajax({
            // method : "GET",
            type: "GET",
            url: base_url + url,
            dataType: "json",
            success: function (result) {
                next(result);
            },
            error: function(err){
                var msg = "Error, Please contact the Administrator";
                var data = {
                    err : err,
                    msgErr : msg
                }
                next(data);
            }
        });
    },
    ajaxGet2:function (url, data, next){
        console.log(base_url+url);
        $.ajax({
            // method : "GET",
            type: "GET",
            data: data,
            url: base_url + url,
            dataType: "json",
            success: function (result) {
                next(result);
            },
            error: function(err){
                var msg = "Error, Please contact the Administrator";
                var data = {
                    err : err,
                    msgErr : msg
                }
                next(data);
            }
        });
    },
    ajaxPost:function (url, data, next){
        console.log(base_url+url);
        $.ajax({
            // method : "GET",
            type: "POST",
            url: base_url + url,
            data: data,
            dataType: "json",
            success: function (result) {
                next(result);
            },
            error: function(err){
                var msg = "Error, Please contact the Administrator";
                var data = {
                    err : err,
                    msgErr : msg
                }
                next(data);
            }
        });
    },
    ajaxPostWithFile:function (url, data, next){
        $.ajax({
            method: "POST",
            url: base_url + url,
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (result) {
                next(result);
            },
            error: function(err){
                var msg = "Error, Please contact the Administrator";
                var data = {
                    err : err,
                    msgErr : msg
                }
                next(data);
            }
        });
    },
    loadingModal:function(flag){
        if(flag == 1){
            $("#loading2").removeClass("overlay");
            $("#loadingOverlay").hide();
        }else{
            $("#loading2").addClass("overlay");
            $("#loadingOverlay").show();
        }
    },
    loadingContent:function(type){
        if(type == 0){
            $('#overlay').fadeIn();
        }else{
            $('#overlay').fadeOut();
        }
    },
    loading:function(next){
        var ld = "";
        ld += "<div class='overlay-wrapper' id='loadingOverlay'>";
        ld += "<div class='overlay' id='loading2'>";
        ld += "<i class='fas fa-3x fa-sync-alt fa-spin'></i></div></div>"
        ld += "<div id='content'></div>";
        next(ld);
    },
    alert:function(type, detail){
        Toast.fire({
            icon: type,
            title: detail
          });
    },
    getpicture:function(userId){
        console.log(id);
        var json = {
            id:userId
        }
        var url = '/getprofile';
        ajax.ajaxGet2(url,json,function(response){
            console.log(response);
            console.log(response[0].mspc_picture_name);
            if(response[0].mspc_picture_name != null 
                && response[0].mspc_picture_name != "" 
                && response[0].mspc_picture_name != "null"){
                var picture = base_url + '/assets/img/' +  response[0].mspc_picture_name;
                $('#fotoProfile').attr("src", picture);
                $('#fotoProfile2').attr("src", picture);
            }
            
        });
    }
}

$(document).ready(function(){

    $("#logout").click(function(){
        window.location.href = base_url+"/logout";
    });
    

});