<!DOCTYPE html PUBLIC "" ""><HTML lang="en"><HEAD><META content="IE=11.0000" http-equiv="X-UA-Compatible">
<META charset="utf-8"> 
<META http-equiv="X-UA-Compatible" content="IE=edge"> 
<META name="viewport" content="width=device-width, initial-scale=1"> <TITLE>Lokasi Wisata Klaten</TITLE> 
<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/map/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<!--Adaptive styles-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!--animation css-->
<link rel="stylesheet" type="text/css" href="http://city1.wpmix.net/wp-content/themes/mycity/css/animate.css">
<!-- Slider Revolution -->
<link rel="stylesheet" type="text/css" href="http://city1.wpmix.net/wp-content/plugins/revslider5/public/assets/css/settings.css" media="screen" />

<META name="GENERATOR" content="MSHTML 11.00.9600.16476"></HEAD> 
<?php $uri1 = $this->uri->segment(1);
$name = $this->session->userdata('name');
$access = $this->session->userdata('access'); ?>
<body onload="initialize()" class="inner_page innerpage">
  <div class="bg_parallax">
    <div class="container-fluid header inner_head" style="box-shadow:0px 1px 0px rgba(154, 9, 9, 0.59); z-index: 999;">
      <div class="fixed_w">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav navbar-nav">
              <LI><A href="<?php echo base_url();?>" style="color:white">Home</A></LI>
              <li><A href="<?php echo base_url();?>map" style="color:white">Maps</A></LI>
                <LI><A class="animsition-link" href="<?php echo base_url();?>lokasi" style="color:white">Lokasi Wisata</A></LI>
              </UL>
              <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                  <?php if($name){  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white" > <I class="fa fa-user"></I> <?php echo $name;?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?><?php echo $access;?>" >Profil</a></li> 
                        <li><a href="<?php echo base_url();?>pages/logout">Logout</a></li>
                      </ul>
                    </li>
                  <?php }else{ ?>
                    <li><a   href="<?php echo base_url();?>pages/login" style="color:white" ><I class="fa fa-key"></I> Login</a></li>
                    <li><a  style="color:white"  data-backdrop="false" data-target="#gabung" data-toggle="modal"> <I class="fa fa-users"></I> Daftar</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<DIV class="map" id='map'></DIV>
<script>
(function(A) {

  if (!Array.prototype.forEach)
    A.forEach = A.forEach || function(action, that) {
      for (var i = 0, l = this.length; i < l; i++)
        if (i in this)
          action.call(that, this[i], i, this);
      };

    })(Array.prototype);

    var
    mapObject,
    markers = [],
    markersData = {
        <?php foreach ($category as $key) { ?>
   '<?php echo str_replace(' ', '', $key->category);?>': [
      <?php foreach ($lokasi[$key->id] as $value) { ?>
        {
        name: '<?php echo $value->name;?>',
        location_latitude: <?php echo $value->lat;?>, 
        location_longitude: <?php echo $value->lng;?>,
        map_image_url: './assets/gallery/<?php echo $value->foto;?>',
        name_point:'<?php echo $value->name;?>',
        description_point: '<?php echo $value->address;?> <?php echo $value->zip_code;?>',
        kota: 'Klaten',
        url_point: 'lokasi/detail/<?php echo $value->id_wisata;?>'
      },
    <?php } ?>

{
      
      }
      
      ],
        <?php } ?>
   
    };

    function initialize () {
    
          var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(-7.718889,110.605278),
        mapTypeId: google.maps.MapTypeId.ROADMAP,

        
        mapTypeControl: false,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.BOTTOM_CENTER
        },
        panControl: false,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        scaleControl: false,
        scaleControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
        },
        streetViewControl: true,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP
        },
        styles: [
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
]
      };
    var
      marker;
      mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);
      for (var key in markersData)
        markersData[key].forEach(function (item) {
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
            map: mapObject,
            icon: '<?php echo base_url();?>assets/icon/' + key + '.png',
          });

          if ('undefined' === typeof markers[key])
            markers[key] = [];
          markers[key].push(marker);
          google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));

          
        });
    };

    function hideAllMarkers () {
      for (var key in markers)
        markers[key].forEach(function (marker) {
          marker.setMap(null);
        });
    };

    function toggleMarkers (category) {
      hideAllMarkers();
      closeInfoBox();

      if ('undefined' === typeof markers[category])
        return false;
      markers[category].forEach(function (marker) {
        marker.setMap(mapObject);
        marker.setAnimation(google.maps.Animation.DROP);

      });
    };
    
    function closeInfoBox() {
      $('div.infoBox').remove();
    };

    function getInfoBox(item) {
      return new InfoBox({
        content:
        '<div class="marker_info none" id="marker_info">' +
        '<div class="info" id="info">'+
        '<img src="' + item.map_image_url + '" class="logotype" alt=""/>' +
        '<h2>'+ item.name_point +'<span></span></h2>' +
        '<span>'+ item.description_point +'</span>' +
        '<span>'+ item.kota +'</span>' +
        '<a href="'+ item.url_point + '" class="green_btn" target="_newtab">Detail Lokasi</a>' +
        '<span class="arrow"></span>' +
        '</div>' +
        '</div>',
        disableAutoPan: true,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(40, -210),
        closeBoxMargin: '50px 200px',
        closeBoxURL: '',
        isHidden: false,
        pane: 'floatPane',
        enableEventPropagation: true
      });


    };
</script>

<script type="text/javascript"  type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAiW32s7AljF00x76ToBNRz-0FkCglyYWQ&libraries=places"></script>

<DIV class="container-fluid menu mobile"  style="margin-bottom:-60px">
  <DIV class="row">
    <DIV class="col-md-12">
      <SPAN>Categori menu</SPAN> 
      <I class="fa fa-times" id="close_menu"></I> 
      <UL>
        <?php foreach ($category as $key) { ?>
        <li><a class="<?php echo str_replace(' ', '', $key->category);?>" href="javascript:toggleMarkers('<?php echo str_replace(' ', '', $key->category);?>');" title="<?php echo $key->category;?>"><i class="<?php if($key->icon){ echo $key->icon; }else{ echo 'fa fa-map'; }?>"></i></a></li>
        <?php } ?>
      </UL>
    </DIV>
  </DIV>
</div>

<script src="<?php echo base_url();?>assets/home/map/jquery.min.js"></script>
<!--scroll animate block-->
<script src="<?php echo base_url();?>assets/home/map/wow.min.js"></script>
<!--Other main scripts-->
<script src="<?php echo base_url();?>assets/home/map/all_scr.js"></script>
<!--Bootstrap js-->  
<script src="<?php echo base_url();?>assets/home/map/bootstrap.min.js"></script>
<!--Map js-->

<script type="text/javascript" src="<?php echo base_url();?>assets/home/map/infobox.js"></script>
<!--Slider Revolution-->
<script type="text/javascript" src="<?php echo base_url();?>assets/home/map/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/home/map/jquery.themepunch.revolution.min.js"></script>
<!--Parallax-->
<script type="text/javascript" src="<?php echo base_url();?>assets/home/map/jquery.parallax-0.2-min.js"></script>


</body>
</html>