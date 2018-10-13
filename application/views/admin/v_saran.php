<!-- page content -->
                <div class="dev-page-content" style="height: 1836px;">                    
                    <!-- page content container -->
                    <div class="container">
                        
                    <div class="row row-condensed">
                            <div class="col-lg-12 col-md-12">
                                
                                <div class="wrapper">
                                    <div class="page-title">
                                        <h1>Data Kritik dan Saran</h1>
                                  <p></p>
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                          
								<li>Data Kritik dan Saran</li>
                        
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                               
									
                              
                  
<div class="pull-right">   <br><br>                

</div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                         
                 <th>Pesan</th> <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
 <?php $no=0;   ?> 
                                           
      <?php foreach($data as $row) :?>
 <?php $no++; ?> 

     <tr>    <td> <?php echo $no;?></td>
         <td> <?php echo $row->nama; ?></td>
         <td> <?php echo $row->email; ?></td>
         <td> <?php echo $row->komentar; ?></td>
        
        <td> <?php echo $row->tgl; ?></td>
		 <td>
		 <a href="<?php echo base_url();?>admin/saran/delete/<?php echo $row->id; ?>" class="btn btn-danger btn-sm" onclick="return konfirmasi()">Hapus</a> </tr>
		 <?php endforeach; ?>
       
                                    </tbody>
                                </table>
                            </div><br> <div class="pull-right"><?php echo $halaman;?>   </div>
  </div>
                        
                        </div>
                        
  <!-- modal form -->
        </div>
        <!-- /.modal form --><script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>