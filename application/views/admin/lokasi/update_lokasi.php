<!-- page content -->
<div class="dev-page-content" style="height: 1836px;">                    
  <!-- page content container -->
  <div class="container">


    <div class="wrapper">
      <div class="page-title">
        <h2>Edit <?php echo $data->category;?></h2>
        <p></p>

        <ul class="breadcrumb">
          <li><a href="#">Dashboard</a></li>

          <li><a href="#">Data <?php echo $data->category;?></a></li><li>Edit <?php echo $data->category;?></li>

        </ul>
      </div>                        


      <div class="wrapper wrapper-white">	
         <div id="mapp" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"></div></div></div></div><div></div>


       <style type="text/css">
       #mapp {width:100%; height:340px; border:5px solid #DEEBF2;}

     </style>  
     <br><br>   <div class="row"> <div class="col-md-6">


      <?php echo form_open_multipart('admin/wisata/proses_update'); ?>
      <input name="id_wisata" type="hidden" value="<?php echo $data->id_wisata; ?>">
      <input name="wisata[id_category]" type="hidden" value="<?php echo $data->id_category; ?>">
      <div class="form-group">Nama <?php echo $data->category;?><br>
        <input name="wisata[name]" class="form-control" value="<?php echo $data->name; ?>">
      </div><div class="form-group">Alamat<br>
        <input name="wisata[address]" class="form-control"  value="<?php echo $data->address; ?>">

      </div>


      <div class="form-group">Deskripsi<br><textarea class="form-control" name="wisata[description]"><?php echo $data->description; ?></textarea>
      </div>
      <div class="form-group">Foto<br>
       <img src="<?Php echo site_url();?>assets/gallery/<?php echo $data->foto;?>" width="250px"  height="250px">
       <input name="image_1"  class="form-control" type="file">
     </div>



     <button type="submit" class="btn btn-info btn-sm">Update</button>
   </div>
   <div class="col-md-6">
    <div class="form-group">Kode Pos<br><input name="wisata[zip_code]" class="form-control" value="<?php echo $data->zip_code; ?>"></div>

    <div class="form-group">Lat<br><input name="wisata[lat]" id="latclicked" class="form-control" value="<?php echo $data->lat; ?>">
    </div>
    <div class="form-group">Lng<br><input name="wisata[lng]" class="form-control" id="longclicked" value="<?php echo $data->lng; ?>">
    </div>
 <!-- <div class="form-group">Foto<br>
  <img src="<?php echo base_url();?>assets/gallery/<?php echo $data->kategori;?>/<?php echo $data->gambar;?>" width="250px" height="250px">
  <br>
  <input name="image_1" type="file">
  </div>
-->
</div>

<?php echo form_close(); ?>

</div>
</div>
</div>
  <script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyAiW32s7AljF00x76ToBNRz-0FkCglyYWQ" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

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