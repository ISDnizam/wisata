
                              <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <div class="page-profile" style="background-image: url(<?php echo base_url(); ?>assets/img/user_image_2.jpg);">
                            
                            <div class="profile profile-transparent">
                                <div class="profile-image">
                                    <img src="<?php echo base_url(); ?>assets/gallery/<?php echo $profil->foto;?>">
                                    <div class="profile-badges">
                                        <a href="<?php echo base_url();?>user/profil/update" class="profile-badges-left"><i class="fa fa-edit"></i> </a>
                                <a class="profile-badges-right" data-toggle="modal" data-target="#modal_foto"><i class="fa fa-camera"></i></a>
                              
                                    </div>
                                    <div class="profile-status online"></div>
                                </div>
                         <div class="profile-info">
                            <h4><?php echo $profil->name;?></h4>
                            <span><?php echo $profil->address;?></span>
                        </div>   </div>
                            
                            <div class="page-profile-stats">
                                <div class="page-profile-stats-left">
                                  
                                </div>
                                <div class="page-profile-stats-right">
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="list-group">
                                        <a class="list-group-item active"><i class="fa fa-star"></i> Profil</a>
                                        <a href="<?php echo base_url(); ?>user/profil/update" class="list-group-item"><i class="fa fa-users"></i> Edit Profil</a>
                                   <a href="<?php echo base_url(); ?>user/profil/password" class="list-group-item"><i class="fa fa-key"></i> Ganti Password</a>
                                 
                                       </div></div>
                                        <div class="col-md-9">  <div class="timeline">                            
                                        <div class="timeline-item">   
                                  
                                        
                                
                                            <div class="timeline-item-image"><img src="<?php echo base_url(); ?>assets/img/user_image_2.jpg"></div>
                                            <div class="timeline-item-data">
                                                <h4>Profil</h4>
                                                <p class="text-muted">Informasi Umum</p>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><i class="fa fa-male"></i> Username<span class="badge badge-success"><?php echo $profil->username;?></span></li>
                                                    <li class="list-group-item"><i class="fa fa-male"></i> Nama<span class="badge badge-success"><?php echo $profil->name;?></span></li>
                                                    <li class="list-group-item"><i class="fa fa-envelope"></i> Email<span class="badge badge-success"><?php echo $profil->email;?></span></li>
                                                    <li class="list-group-item"><i class="fa fa-check-square-o"></i> Status<span class="badge badge-success"><?php echo $profil->access;?></span></li>
                                                    <li class="list-group-item"><i class="fa fa-map-pin"></i> Alamat<span class="badge badge-success"><?php echo $profil->address;?></span></li>
                                                </ul>
                                                <div class="pull-right">
                             
                                                </div>

                                        
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                     </div>