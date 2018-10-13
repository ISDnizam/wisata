"use strict";
    
    var timeout = {
        settings: {time: 60000},
        session: false,
        init: function(){
            var self = this;
            
            document.onmousemove = function(){
                clearTimeout(self.session);
                self.session = setTimeout(function(){
                    document.location.href = "http://localhost/wisata2/admin/home/sleep";
                }, self.settings.time);
            }
        }
    };
    
$(function(){
    timeout.init();
});      