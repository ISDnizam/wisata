var dev_settings = '<div class="dev-settings-button">'
        +'<span class="fa fa-tint"></span>'
    +'</div>'
    +'<div class="dev-settings-body">'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-default.css"><img src="http://localhost/wisata/assets/img/default.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-dark.css"><img src="http://localhost/wisata/assets/img/dark.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-blue.css"><img src="http://localhost/wisata/assets/img/blue.jpg"></a>'                        
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-lightblue.css"><img src="http://localhost/wisata/assets/img/lightblue.jpg"></a>'            
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-light.css"><img src="http://localhost/wisata/assets/img/light.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-green.css"><img src="http://localhost/wisata/assets/img/green.jpg"></a>'

        +'<a href="#" class="active" data-theme="http://localhost/wisata/assets/css/default-default-white.css"><img src="http://localhost/wisata/assets/img/default-white.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-dark-white.css"><img src="http://localhost/wisata/assets/img/dark-white.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-blue-white.css"><img src="http://localhost/wisata/assets/img/blue-white.jpg"></a>'                        
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-lightblue-white.css"><img src="http://localhost/wisata/assets/img/lightblue-white.jpg"></a>'            
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-light-white.css"><img src="http://localhost/wisata/assets/img/light-white.jpg"></a>'
        +'<a href="#" data-theme="http://localhost/wisata/assets/css/default-green-white.css"><img src="http://localhost/wisata/assets/img/green-white.jpg"></a>'
    +'</div>';

var settings_block = document.createElement('div');
    settings_block.className = "dev-settings";
    settings_block.innerHTML = dev_settings;
    document.body.appendChild(settings_block);

$(document).ready(function(){
    
    /* Change Theme */
    $(".dev-settings-body a[data-theme]").click(function(){
        $(".dev-settings-body a[data-theme]").removeClass("active");
        $(this).addClass("active");
        $("#dev-css").attr("href",$(this).data("theme"));
        
        return false;
    });
    /* END Change Theme */
    
    /* Open/Hide Settings */
    $(".dev-settings-button").on("click",function(){
        $(".dev-settings").toggleClass("active");
    });
    /* End open/hide settings */
    
});