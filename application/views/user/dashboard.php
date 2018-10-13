 <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        
                        <div class="row row-condensed">
                            <div class="col-lg-12 col-md-12">
                                
                                <div class="wrapper">
                                    <div class="page-subtitle">
                                        <h2>Denah Lokasi</h2>
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-rounded btn-icon"><i class="fa fa-calendar pull-left"></i> <?php echo date('d-m-20y');?></button>
                                            </div>
                                        </div>
                                    </div>                                                                        
            <div class="widget-news">
                                        <div class="widget-news-content padding-0">
<DIV class="map" style="height:400px;" id='map'>
 </DIV>

                                        </div>
                                        <div class="widget-news-footer">
                                            <div><strong><i class="fa fa-map-marker"></i> Klaten, Jawa Tengah</strong></div>
                                        </div>
                                    </div>                  
   
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
            'Sekolah': [
<?php echo $sekolah;?>      
{
            
            }
            
            ],
            'Rs': [

    <?php echo $rs;?>   
    {
                
            }
            ],
            'Pt': [
<?php echo $pt;?>
            {
                
            }
            ],

            'Terminal': [
<?php echo $terminal;?>
            {
                
            }
            ],

            'Stasiun': [
<?php echo $stasiun;?>
            {
                }
            ],

            'Masjid': [
<?php echo $masjid;?>
            {
                
            }
            ],


            'Gereja': [
<?php echo $gereja;?>
            {
                }
            ],


            'Wisata': [
<?php echo $wisata;?>
            {
                }
            ],

            'Hotel': [
<?php echo $hotel;?>
            {
                }
            ],

            'Pom': [
<?php echo $pom;?>
            {
                }
            ]
        };

        function initialize () {
        
                    var mapOptions = {
                zoom: 11,
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
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 13
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#144b53"
            },
            {
                "lightness": 14
            },
            {
                "weight": 1.4
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#08304b"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#0c4152"
            },
            {
                "lightness": 5
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#0b434f"
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#0b3d51"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "color": "#146474"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#021019"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "saturation": "-2"
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
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBR48eWLpcfyXoBH5YbJvBRfdvpRfDymxo&libraries=places&sensor=false"></script>

                                
                            </div>
                            </div>
                       <!--     <div class="col-lg-3 col-md-6">
                                <div class="widget-tabbed margin-top-30">
                                    <?php
    $banyak = count($validasi);

    if(count($validasi)>0)
    {   echo '                               <ul class="widget-tabs widget-tabs-three">
                                        <li class="active"><a href="#tasks">Notifikasi ( '.$banyak.')</a></li>                                        
                                        <li><a href="#activity">User </a></li>                                        
                                    </ul>                                    
                                    <div class="widget-tab list-tasks active" id="tasks">
                               
                                                      ';
        foreach($validasi as $nd)
    
        {
            ?>

                                           <div class="list-tasks-item primary">
                                           
                                            <div class="task">
                                                <a data-toggle="modal" data-target="#<?php echo $nd->id_lokasi;?>"><?php echo $nd->nama_lokasi;?> <?php echo $nd->kategori;?></a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#"><?php echo $nd->username;?></a></div>
                                                <div class="date"><?= date('d-m-y',strtotime($nd->tgl_input))?></div>
                                            </div>
                                            </div>
                        
                                         <div class="modal fade" id="<?php echo $nd->id_lokasi;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Lokasi</h4>
                    </div>
                    <div class="modal-body">
<?php echo form_open('admin/validasi/konfirmasi/'.$nd->id_lokasi.'');?>
<input type="hidden" name="nama_lokasi" value="<?php echo $nd->nama_lokasi; ?>">
<input type="hidden" name="nama" value="<?php echo $nd->username; ?>">
<input type="hidden" name="alamat" value="<?php echo $nd->alamat; ?>">
<input type="hidden" name="email" value="<?php echo $nd->email; ?>">
<input type="hidden" name="telepon" value="<?php echo $nd->telepon; ?>">
<input type="hidden" name="website" value="<?php echo $nd->website; ?>">
<input type="hidden" name="kode_pos" value="<?php echo $nd->kode_pos; ?>">
<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Konfirmasi</button>
<?php echo form_close();?>
         <a  data-toggle="modal" data-target="#pesan<?php echo $nd->id_lokasi; ?>" class="btn btn-info btn-sm"> <i class="fa fa-close"></i> Tolak</a>
<div class="pull-right">
</div>
         <div class="widget-tabbed margin-top-10">
                                    <ul class="widget-tabs widget-tabs-three">
                                        <li class="active"><a href="#<?php echo $nd->id_lokasi; ?>tasks">Detail</a></li>                                        
                                        <li><a href="#<?php echo $nd->id_lokasi; ?>activity">Peta 
                                        </a></li>                                        
                                    </ul>                                    
                                    <div class="widget-tab list-tasks active" id="<?php echo $nd->id_lokasi; ?>tasks">
                         
                                 <div class="col-md-6" style="margin-left:20px;">

         <div class="form-group"> <label>Nama Lokasi</label>
        <br>  <?php echo $nd->nama_lokasi; ?></div>
         <div class="form-group"> <label>Alamat</label>
          <br><?php echo $nd->alamat; ?></div>  

          <div class="form-group"> <label>Kode Pos</label>
          <br><?php echo $nd->kode_pos; ?></div>
        
          <div class="form-group"> <label>Telepon</label>
          <br><?php echo $nd->telepon; ?>
          </div>
         <div class="form-group"> <label>Website</label>
          <br><?php echo $nd->website; ?></div>
        </div>
        <div class="modal-footer">
        </div>
                                                       
                                    </div>
                                    <div class="widget-tab" id="<?php echo $nd->id_lokasi; ?>activity">
                                                                                
                                        <ul class="timeline-simple">
                                            <li class="success">
                                                <span class="timeline-simple-date">12 min ago</span>
                                                The standard Lorem Ipsum passage, used since the 1500s
                                            </li>                                        
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>                     
                </div>
                </div>
            


             <div class="modal fade" id="pesan<?php echo $nd->id_lokasi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pesan</h4>
                    </div>
                    <div class="modal-body">
<div class="form-group">
<label>Alasan</label>
<?php echo form_open('admin/validasi/hapus/'.$nd->id_lokasi.'');?>
<input type="hidden" name="nama_lokasi" value="<?php echo $nd->nama_lokasi; ?>">
<input type="hidden" name="nama" value="<?php echo $nd->username; ?>">
<input type="hidden" name="alamat" value="<?php echo $nd->alamat; ?>">
<input type="hidden" name="email" value="<?php echo $nd->email; ?>">
<input type="hidden" name="telepon" value="<?php echo $nd->telepon; ?>">
<input type="hidden" name="email_p" value="<?php echo $nd->email_user; ?>">
<input type="hidden" name="website" value="<?php echo $nd->website; ?>">
<input type="hidden" name="kode_pos" value="<?php echo $nd->kode_pos; ?>">
<textarea class="form-control" name="pesan"></textarea>
<div>
<div class="form-group">
<input type="submit" class="btn btn-primary btn-sm" value="Tolak">
</div>

<?php echo form_close();?>
</div>
</div>
                                </div>
                            </div>       
                            </div>       
                            </div>       
                            </div>       
<?php        }
    }
    else
    {
        echo '<ul class="widget-tabs widget-tabs-three">
                                        <li class="active"><a href="#tasks">Tasks</a></li>                                        
                                        <li><a href="#activity">Activity</a></li>                                        
                                    </ul>                                    
                                    <div class="widget-tab list-tasks active" id="tasks">
                               ';
    }
?>                                               
                                    </div>
                                    <div class="widget-tab" id="activity">
                                                                                
                                        <ul class="timeline-simple">
                                            <li class="success">
                                                <span class="timeline-simple-date">12 min ago</span>
                                                The standard Lorem Ipsum passage, used since the 1500s
                                            </li>                                        
                                         </ul>
                                    </div>
                                </div>
                            </div>
                            -->
            </div>  
            </div>  
<script type="text/javascript" src="<?php echo base_url();?>assets/home/map/infobox.js"></script>
