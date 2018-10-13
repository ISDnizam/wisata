<div id="mapp" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"></div></div></div></div><div></div>
</div></div></div>
                                

<style type="text/css">
#mapp {width:100%; height:340px; border:5px solid #DEEBF2;}

</style>
                <!-- Include Google Maps JS API --><script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAgrj58PbXr2YriiRDqbnL1RSqrCjdkglBijPNIIYrqkVvD1R4QxRl47Yh2D_0C1l5KXQJGrbkSDvXFA" type="text/javascript"></script>


<script type="text/javascript">
  if (GBrowserIsCompatible()) 
  {
    map = new GMap2(document.getElementById("mapp"));
    map.addControl(new GLargeMapControl());
    map.addControl(new GMapTypeControl(3)); 
    map.setCenter( new GLatLng(-7.726984268722569, 110.62744662165642), 13);
    
    
    GEvent.addListener(map,'click',function(overlay,point)
    {
      document.getElementById('latclicked').value = point.lat()
      document.getElementById('longclicked').value = point.lng()
    });
  }
</script>
              </div>
                        </div>           </div>
                        </div>