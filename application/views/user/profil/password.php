
 <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1><?php echo $profil->username;?></h1>
                            <p><?php echo $profil->access;?></p>
                            
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url(); ?>user">Dashboard</a></li>
                                <li><a href="<?php echo base_url(); ?>user/profil">Profil</a></li>
                                <li>Edit Prosil</li>
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                        
                        <div class="wrapper">                   
                            <div class="row row-wider">
                                <div class="col-md-3">
                                    <div class="profile margin-bottom-0">
                                        <div class="profile-image">
                                            <img src="<?php echo base_url(); ?>assets/img/user.png">
                                            <div class="profile-badges">
                                                <a href="#" class="profile-badges-left"><i class="fa fa-plus"></i></a>
                                                <a href="#" class="profile-badges-right"><i class="fa fa-camera"></i></a>
                                            </div>
                                            <div class="profile-status online"></div>
                                        </div>
                                        <div class="profile-info">
                                            <h4><?php echo $profil->username;?></h4>
                                        </div>
                                        <div class="profile-info text-left">
                                            Profile complete on <strong>100%</strong>
                                            <div class="progress progress-bar-xs">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="list-group">
                                        <a href="<?php echo base_url(); ?>user/profil" class="list-group-item"><i class="fa fa-star"></i> Profil</a>
                                        
                                        <a href="<?php echo base_url(); ?>user/profil/update" class="list-group-item"><i class="fa fa-users"></i> Edit Profil</a>
                                        <a class="list-group-item active" href="<?php echo base_url(); ?>admin/profil/password/<?php echo $profil->id;?>" class="list-group-item"><i class="fa fa-key"></i> Ganti Password</a>  
                                    </div>
                                    </div>
                                    
                                   
                                <div class="col-md-9">
                                    
                                    <div class="page-subtitle margin-bottom-0">
                                        <h3>Ganti Password</h3>
                                    </div>
                                    <div class="form-group-one-unit margin-bottom-40">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom">
												
												<?php echo form_open('user/profil/updatepassword');?>
                                                    <label>Login</label>
                                                                                    
                                                </div>                        
                                            </div>
                                            </div>
                                          
                                        <div class="row">
                                           
                                             <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Password lama:</label>
                                                    <?php echo form_error('password'); ?>
                                                    <input type="password" name="passwordlama" class="form-control" placeholder="password"/>                                            
                                                </div>                        
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-custom">
                                                    <label>Password baru:</label>
                                                     <input type="password" name="password" class="form-control" placeholder="password"/>                                            
                                                             
                                                </div>                        
                                            </div>
                                        </div>
                                                                                                 
                                    </div>
                                    
                                    
                                   
                                    <div class="row">
                                        <div class="col-md-12">                                            
                                            <button class="btn btn-danger pull-right">Update Password</button>
											<?php echo form_close(); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                 </div>
                        </div>
                        </div>