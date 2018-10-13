<!-- page content -->
                <div class="dev-page-content" style="height: 1836px;">                    
                    <!-- page content container -->
                    <div class="container">
                     
                                
                                <div class="wrapper">
                                    <div class="page-title">
                                        <h2>Edit <?php echo $data->kategori;?></h2>
                                   <p></p>
                            
                          <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                
								<li><a href="<?php echo base_url();?>admin/sekolah">Data <?php echo $data->kategori;?></a></li><li>Edit <?php echo $data->kategori;?></li>
                        
                            </ul>
                        </div>                        

                                        
								   <div class="wrapper wrapper-white">	
                   <div id="mapp" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"></div></div></div></div><div></div>
                                

<style type="text/css">
#mapp {width:100%; height:340px; border:5px solid #DEEBF2;}

</style>  
<br><br>   <div class="row"> <div class="col-md-6">
			
                               

<input name="id_lokasi" type="hidden" value="<?php echo $data->id_lokasi; ?>">
	<div class="form-group">Nama <?php echo $data->kategori;?><br><input name="nama_lokasi" class="form-control" value="<?php echo $data->nama_lokasi; ?>">
	</div><div class="form-group">Alamat<br><input name="alamat" class="form-control"  value="<?php echo $data->alamat; ?>">
	</div><div class="form-group">Email<br><input name="email" class="form-control" value="<?php echo $data->email; ?>">

</div><div class="form-group">Lat<br><input name="lat" id="latclicked" class="form-control" value="<?php echo $data->lat; ?>">
	</div>

<div class="form-group">Deskripsi<br><textarea class="form-control" name="deskripsi"><?php echo $data->deskripsi; ?></textarea>
  </div>
  <div class="pull-left">
<?php echo form_open('admin/validasi/konfirmasi/'.$data->id_lokasi.'');?>
<input type="hidden" name="nama_lokasi" value="<?php echo $data->nama_lokasi; ?>">
<input type="hidden" name="nama" value="<?php echo $data->username; ?>">
<input type="hidden" name="alamat" value="<?php echo $data->alamat; ?>">
<input type="hidden" name="email" value="<?php echo $data->email; ?>">
<input type="hidden" name="telepon" value="<?php echo $data->telepon; ?>">
<input type="hidden" name="email_p" value="<?php echo $data->email_user; ?>">
<input type="hidden" name="website" value="<?php echo $data->website; ?>">
<input type="hidden" name="kode_pos" value="<?php echo $data->kode_pos; ?>"> 
<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Konfirmasi </button> 
<?php echo form_close();?>
</div>
  <div class="pull-left">
  <a  data-toggle="modal" data-target="#pesan<?php echo $data->id_lokasi; ?>" class="btn btn-info btn-sm"> <i class="fa fa-close"> Tolak</i></a>
</div>
					</div>
   <div class="col-md-6">
<div class="form-group">Kode Pos<br><input name="kode_pos" class="form-control" value="<?php echo $data->kode_pos; ?>">

</div><div class="form-group">Telepon<br><input name="telepon" class="form-control" value="<?php echo $data->telepon; ?>">
	</div><div class="form-group">Website<br><input name="website" class="form-control"  value="<?php echo $data->website; ?>">
</div>
  <div class="form-group">Lng<br><input name="lng" class="form-control" id="longclicked" value="<?php echo $data->lng; ?>">
  </div>
 <!-- <div class="form-group">Foto<br>
  <img src="<?php echo base_url();?>assets/gallery/<?php echo $data->kategori;?>/<?php echo $data->gambar;?>" width="250px" height="250px">
  <br>
  <input name="image_1" type="file">
  </div>
  -->
</div>




             <div class="modal fade" id="pesan<?php echo $data->id_lokasi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pesan</h4>
                    </div>
                    <div class="modal-body">
<div class="form-group">
<label>Alasan</label>
<?php echo form_open('admin/validasi/hapus/'.$data->id_lokasi.'');?>
<input type="hidden" name="nama_lokasi" value="<?php echo $data->nama_lokasi; ?>">
<input type="hidden" name="nama" value="username">
<input type="hidden" name="alamat" value="<?php echo $data->alamat; ?>">
<input type="hidden" name="email" value="<?php echo $data->email; ?>">
<input type="hidden" name="telepon" value="<?php echo $data->telepon; ?>">
<input type="hidden" name="email_p" value="<?php echo $data->email_user; ?>">
<input type="hidden" name="website" value="<?php echo $data->website; ?>">
<input type="hidden" name="kode_pos" value="<?php echo $data->kode_pos; ?>">
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
</div>

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