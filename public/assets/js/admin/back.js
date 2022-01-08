jQuery(document).ready(function($){

    //ACTIVATION OU DESACTIVATION DE LA PUBLICATION
    var activateSlider = $(".slider-active[type=checkbox]");

    activateSlider.on( "click", function() {

        if($(this).attr('id', 'switch-activate-slider')){
            var type = "slider";
        }else if($(this).attr('id','switch-activate-post')){
            var type = "posts";
        }

        var dataId = $(this).attr("data-id");
        var xmlhttp = new XMLHttpRequest;

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
           }
        };
        
        xmlhttp.open("get", `/admin/`+type+`/activate/`+dataId);
        xmlhttp.send();
    });


    var activateImageMobile = $(".image-active-mobile[type=checkbox]");

    activateImageMobile.on( "click", function() {


        var dataId = $(this).attr("data-id");
        var xmlhttp = new XMLHttpRequest;

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText)
           }
        };
        
        xmlhttp.open("get", `/admin/slider/activate-on-mobile/`+dataId);
        xmlhttp.send();
    });

    //SUPPRESSION DE LA PUBLICATION
    var delete_post = $(".modal-trigger-post");

    delete_post.on('click', function(){

        var post_title = $(this).attr("data-title");
        var post_id = $(this).attr("data-id");
      
        $(".modal-footer .btn-danger a").attr("href", "/admin/posts/delete/"+post_id);
        $(".modal-body").text("Êtes-vous sûr(e) de vouloir supprimer l'annonce "+post_title);

    });

    //SUPPRESSION DE LA PUBLICATION
    var delete_slider = $(".modal-trigger-slider");

    delete_slider.on('click', function(){

        var slider_title = $(this).attr("data-title");
        var slider_id = $(this).attr("data-id");
      
        $(".modal-footer .btn-danger a").attr("href", "/admin/slider/delete/"+slider_id);
        $(".modal-body").text("Êtes-vous sûr(e) de vouloir supprimer l'annonce "+slider_title);

    })



})
