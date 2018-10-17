<!DOCTYPE html PUBLIC "" ""><HTML lang="en"><HEAD><META content="IE=11.0000" http-equiv="X-UA-Compatible">
  <META charset="utf-8"> 
  <META http-equiv="X-UA-Compatible" content="IE=edge"> 
  <META name="viewport" content="width=device-width, initial-scale=1"> <TITLE>Lokasi Wisata Klaten</TITLE> 
  <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/map/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/map/bootstrap.css">
  <!--Adaptive styles-->
  <!--animation css-->
  <style type="text/css">
  table.directions th {
    background-color:#EEEEEE;
  }
  img {
    color: #000000;
  }
</style>

<META name="GENERATOR" content="MSHTML 11.00.9600.16476"></HEAD> 
<body onload="initialize()" class="inner_page innerpage">
  <div class="bg_parallax">
    <div class="container-fluid header inner_head">
      <div class="fixed_w">
        <div class="row">
          <div class="col-md-12">
            <div class="pull-right">
              <div class="dropdown"><br>
                <button class="btn btn-danger active dropdown-toggle"  type="button" id="dropdownMenuButton" style="margin-top:-10px;" type="button" data-toggle="dropdown">
                  Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="<?php echo base_url();?>">Home</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>map">Maps</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>lokasi">Lokasi Wisata</a></li>
                </div>
              </div>
            </DIV>              
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php if(!empty($_GET['from'])){
    $from=$_GET['from'];
  }else{
    $from ='Klaten';
  }
  if(!empty($_GET['to'])){
    $to=$_GET['to'];
  }else{
    $to ='Klaten';
  } ?>

  <div class="google-image"> 
    <div id="directions-panel"></div>
    <div id="map-canvas"></div>
  </div>



      <div class="row">
       <div class="col-sm-4">
        <form action="#" onsubmit="setDirections(this.from.value, this.to.value, this.locale.value); return false">
        <input type="hidden" name="to" id="toAddress" value="<?php echo $to;?>">
        <div class="form-group col-md-6"><label>Dari</label>   
        <input type="" name="from" class="form-control" id="fromAddress" value="<?php echo $from;?>">
      </div>

      <br><div class="form-group col-md-3">
        <input  type="submit" class="btn btn-primary btn-md"  style="margin-top: 7px" value="Petunjuk Jalan" />
      </div>  </form>

</DIV>




  <!-- <script type="text/javascript"  type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAiW32s7AljF00x76ToBNRz-0FkCglyYWQ&libraries=places"></script> -->
  <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;&v=2&key=AIzaSyAiW32s7AljF00x76ToBNRz-0FkCglyYWQ"></script>

  <script type="text/javascript">

    var map;
    var gdir;
    var geocoder = null;
    var addressMarker;

    

    function initialize() {
      if (GBrowserIsCompatible()) {      
        map = new GMap2(document.getElementById("map-canvas"));
        gdir = new GDirections(map, document.getElementById("directions-panel"));
        GEvent.addListener(gdir, "addoverlay", onGDirectionsLoad);
        GEvent.addListener(gdir, "error", handleErrors);

        setDirections("<?php echo $from;?>", "<?php echo $to;?>", "en_US");

      }
    }
    
    function setDirections(fromAddress, toAddress, locale) {
      gdir.load("from: " + fromAddress + " to: " + toAddress,
        { "locale": locale });
    }

    function handleErrors(){
     if (gdir.getStatus().code == G_GEO_UNKNOWN_ADDRESS)
       alert("No corresponding geographic location could be found for one of the specified addresses. This may be due to the fact that the address is relatively new, or it may be incorrect.\nError code: " + gdir.getStatus().code);
     else if (gdir.getStatus().code == G_GEO_SERVER_ERROR)
       alert("A geocoding or directions request could not be successfully processed, yet the exact reason for the failure is not known.\n Error code: " + gdir.getStatus().code);
     else if (gdir.getStatus().code == G_GEO_MISSING_QUERY)
       alert("The HTTP q parameter was either missing or had no value. For geocoder requests, this means that an empty address was specified as input. For directions requests, this means that no query was specified in the input.\n Error code: " + gdir.getStatus().code);
     else if (gdir.getStatus().code == G_GEO_BAD_KEY)
       alert("The given key is either invalid or does not match the domain for which it was given. \n Error code: " + gdir.getStatus().code);
     else if (gdir.getStatus().code == G_GEO_BAD_REQUEST)
       alert("A directions request could not be successfully parsed.\n Error code: " + gdir.getStatus().code);
     else alert("An unknown error occurred.");
   }

   function onGDirectionsLoad(){ 
     var poly = gdir.getPolyline();
     if (poly.getVertexCount() > 100) {
       alert("This route has too many vertices");
       return;
     }
     var baseUrl = "http://maps.google.com/staticmap?";

     var params = [];
     var markersArray = [];
     markersArray.push(poly.getVertex(0).toUrlValue(5) + ",greena");
     markersArray.push(poly.getVertex(poly.getVertexCount()-1).toUrlValue(5) + ",greenb");
     params.push("markers=" + markersArray.join("|"));

     var polyParams = "rgba:0x0000FF80,weight:5|";
     var polyLatLngs = [];
     for (var j = 0; j < poly.getVertexCount(); j++) {
       polyLatLngs.push(poly.getVertex(j).lat().toFixed(5) + "," + poly.getVertex(j).lng().toFixed(5));
     }
     params.push("path=" + polyParams + polyLatLngs.join("|"));
     params.push("size=300x300");
     params.push("key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw");

     baseUrl += params.join("&");

     var extraParams = [];
     extraParams.push("center=" + map.getCenter().lat().toFixed(6) + "," + map.getCenter().lng().toFixed(6));
     extraParams.push("zoom=" + map.getZoom());
     addImg(baseUrl + "&" + extraParams.join("&"), "staticMapOverviewIMG");

     var extraParams = [];
     extraParams.push("center=" + poly.getVertex(0).toUrlValue(5));
     extraParams.push("zoom=" + 15);
     addImg(baseUrl + "&" + extraParams.join("&"), "staticMapStartIMG");

     var extraParams = [];
     extraParams.push("center=" + poly.getVertex(poly.getVertexCount()-1).toUrlValue(5));
     extraParams.push("zoom=" + 15);
     addImg(baseUrl + "&" + extraParams.join("&"), "staticMapEndIMG");
   }

   function addImg(url, id) {
     var img = document.createElement("img");
     img.src = url;
     document.getElementById(id).innerHTML = "";
     document.getElementById(id).appendChild(img);
   }

 </script>


 <script src="<?php echo base_url();?>assets/home/map/jquery.min.js"></script>
 <!--scroll animate block-->
 <script src="<?php echo base_url();?>assets/home/map/bootstrap.min.js"></script>
 <!--Map js-->

</body>
</html>