<!-- page container -->
<div class="dev-page-container">

  <!-- page sidebar -->
  <div class="dev-page-sidebar">

    <div class="profile profile-transparent">
      <div class="profile-image">
        <img src="<?php echo base_url();?>assets/gallery/<?php echo $profil->foto;?>" class="mCS_img_loaded">
        <div class="profile-badges">
          <a href="<?php echo base_url();?>admin/profil/update" class="profile-badges-left"><i class="fa fa-edit"></i></a>
          <a class="profile-badges-right" data-toggle="modal" data-target="#modal_foto"><i class="fa fa-camera"></i></a>
        </div>

        <div class="modal fade" id="modal_foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ganti Foto</h4>
              </div>
  <?php  $user = $this->session->userdata('access'); ?>

              <div class="modal-body"> <?php echo form_open_multipart(''.$user.'/profil/prosesupload');?>
                <p align="left">
                 <input type="file" class="file btn-primary" name="userfile"/>
                 <br>               <input type="submit" value="upload" class="btn btn-info btn-sm" />
               </form></div>

             </div>
           </div>
         </div>
         <!-- /.modal default -->
         <div class="profile-status online"></div>
       </div>
       <div class="profile-info">
        <h4>
         <?php echo $profil->username;?></h4>
       </div>                        
     </div>

     <ul class="dev-page-navigation">
      <li class="title">Navigation</li>
  <?php   if($this->session->userdata('access')=='user'){ ?>
      <li class="active">
        <a href="<?php echo base_url();?>user"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
      </li>      
      <li>
        <a href="<?php echo base_url();?>user/profil"><i class="fa fa-user"></i> <span>Profil</span></a>
      </li>                   


      <li class="has-child">
      <a href="#"><i class="fa fa-picture-o"></i> <span>Lokasi Wisata</span> </a>
        <ul>                                
        <?php foreach ($category_wisata as $key) { ?>
          <li><a href="<?php echo base_url();?>user/wisata/index/<?php echo $key->id;?>"><?php echo $key->category;?></a></li>
        <?php } ?>
        </ul>
      </li>      

      <li class="has-child">
      <a href="#"><i class="fa fa-picture-o"></i> <span>Gallery</span> </a>
        <ul>                                
        <?php foreach ($category_wisata as $key) { ?>
          <li><a href="<?php echo base_url();?>user/gallery/index/<?php echo $key->id;?>"><?php echo $key->category;?></a></li>
        <?php } ?>
        </ul>
      </li>                       
  <?php }elseif($this->session->userdata('access')=='admin'){ ?>
 <li class="active">
        <a href="<?php echo base_url();?>admin"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
      </li>      
      <li>
        <a href="<?php echo base_url();?>admin/profil"><i class="fa fa-user"></i> <span>Profil</span></a>
      </li>                   

   <li>
       <a href="<?php echo base_url();?>admin/wisata/category"><i class="fa fa-book"></i> <span>Kategori Wisata</span></a>
     </li>
      <li class="has-child">
      <a href="#"><i class="fa fa-map"></i> <span>Lokasi Wisata</span> </a>
        <ul>                                
        <?php foreach ($category_wisata as $key) { ?>
          <li><a href="<?php echo base_url();?>admin/wisata/index/<?php echo $key->id;?>"><?php echo $key->category;?></a></li>
        <?php } ?>
        </ul>
      </li>   


      <li class="has-child">
      <a href="#"><i class="fa fa-picture-o"></i> <span>Gallery</span> </a>
        <ul>                                
        <?php foreach ($category_wisata as $key) { ?>
          <li><a href="<?php echo base_url();?>admin/gallery/index/<?php echo $key->id;?>"><?php echo $key->category;?></a></li>
        <?php } ?>
        </ul>
      </li>                      
      <li>
       <a href="<?php echo base_url();?>admin/validasi"><i class="fa fa-edit"></i> <span>Validasi Lokasi</span></a>
     </li>
  <?php } ?>
     
   </ul>

 </div>
                <!-- ./page sidebar -->