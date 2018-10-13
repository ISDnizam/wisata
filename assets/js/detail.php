<!-- page content -->
                <div class="dev-page-content" style="height: 1836px;">                    
                    <!-- page content container -->
                    <div class="container">
                     
                                
                                <div class="wrapper">
                                    <div class="page-title">
                                        <h2>Edit Sekolah</h2>
                                   <p></p>
                            
                          <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li>Data Peta</li>
								<li>Data Sekolah</li><li>Edit Sekolah</li>
                        
                            </ul>
                        </div>                        

                                        
								   <div class="wrapper wrapper-white">	     <div class="row"> <div class="col-md-6">
			
                               

<?php echo form_open('admin/sekolah/proses_update'); ?>
<input name="id_lokasi" type="hidden" value="<?php echo $barang->id_lokasi; ?>">
	<div class="form-group">Nama<br><input name="nama_lokasi" class="form-control" value="<?php echo $barang->nama_lokasi; ?>">
	</div><div class="form-group">Alamat<br><input name="alamat" class="form-control"  value="<?php echo $barang->alamat; ?>">
	</div><div class="form-group">Email<br><input name="email" class="form-control" value="<?php echo $barang->email; ?>">

</div><div class="form-group">Lat<br><input name="lat" class="form-control" value="<?php echo $barang->lat; ?>">
	</div></div>
   <div class="col-md-6">
	<div class="form-group">Lng<br><input name="lng" class="form-control"  value="<?php echo $barang->lng; ?>">
	</div><div class="form-group">Kode Pos<br><input name="kode_pos" class="form-control" value="<?php echo $barang->kode_pos; ?>">

</div><div class="form-group">Telepon<br><input name="telepon" class="form-control" value="<?php echo $barang->telepon; ?>">
	</div><div class="form-group">Website<br><input name="website" class="form-control"  value="<?php echo $barang->website; ?>">
	

</div>
<br>

<button type="submit" class="btn btn-info btn-sm">Update</button>
<?php echo form_close(); ?>

              </div>
                        </div>           </div>
                        </div>