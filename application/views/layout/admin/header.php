<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>Admin Panel - Sistem Informasi Geografis</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- ./meta section -->
           <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/default-blue-white.css" id="dev-css">
        <!-- ./css styles -->                               
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css?v=2.1">
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>       


        <!-- javascripts -->
      <?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
<style type="text/css">.fancybox-margin{margin-right:15px;}
.marker_info .info {
    background: rgba(0, 127, 237, 0.8); border-radius: 5px; width: 300px; height: 320px; position: relative; z-index: 9999999;
}
.marker_info .info img {
    background: rgb(255, 255, 255); border-radius: 100px; border: 7px solid rgb(233, 229, 219); border-image: none; left: 90px; top: -53px; width: 110px; display: block; position: absolute;
}
.marker_info .info a {
    background: rgb(255, 255, 255); border: 0px currentColor; transition:0.3s; border-image: none; color: rgb(33, 141, 234);
}
.marker_info .info a:hover {
    background: rgb(36, 42, 51); border: 0px currentColor; transition:0.3s; border-image: none; color: rgb(33, 141, 234);
}
.marker_info .info h2 {
    text-align: center; color: rgb(255, 255, 255); padding-top: 70px; font-family: "Roboto", sans-serif; font-weight: 300;
}
.marker_info .info h2 span {
    background: rgb(255, 255, 255); margin: 15px auto; width: 70px; height: 1px; display: block;
}
.marker_info .info span {
    padding: 0px 30px; text-align: center; color: rgb(255, 255, 255); line-height: 22px; font-family: "Roboto", sans-serif; font-size: 14px; font-weight: 300; display: block;
}
.marker_info .info a {
    
}
a.green_btn {
    background: rgb(231, 57, 49); padding: 10px 50px; border-radius: 4px; border: 1px solid rgb(0, 0, 0); transition:0.3s; border-image: none; left: 60px; width: 180px; text-align: center; bottom: 40px; color: rgb(255, 255, 255); font-size: 14px; display: block; position: absolute;
}
a.green_btn:hover {
    background: rgb(255, 255, 255); padding: 10px 50px; border-radius: 4px; border: 1px solid rgb(0, 0, 0); border-image: none; left: 60px; width: 180px; text-align: center; bottom: 40px; color: rgb(231, 57, 49); font-size: 14px; text-decoration: none; display: block; position: absolute; box-shadow: none;
}
.marker_info .arrow {
    border-width: 14px; border-style: solid; border-color: rgba(255, 0, 0, 0) rgba(33, 141, 234, 0.9) rgba(255, 0, 0, 0) rgba(255, 0, 0, 0); padding: 0px !important; border-image: none; left: -28px; top: 150px !important; width: 0px; height: 0px; position: absolute;
}
.map_place {
width:100%;
height:300px;}

.map {
width:100%;
height:300px;}
</style>

    </head>
<body>
 
        <!-- set loading layer -->
        <div class="dev-page-loading preloader"></div>
        <!-- ./set loading layer -->       
        
        <!-- page wrapper -->
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                   <h1><font color=white>Admin Panel</font></h1>
                </div>
 <ul class="dph-buttons pull-right">                    
                                 
             
                </ul>                                                
                
               
            </div>
            <!-- ./page header -->