
<div class="dev-page-content">                    
    <!-- page content container -->
    <div class="container">

        <!-- page title -->
        <div class="page-title">
            <h1><?php echo $profil->name;?></h1>
            <p><?php echo $profil->access;?></p>

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>user">Dashboard</a></li>
                <li><a href="<?php echo base_url(); ?>user/profil">Profil</a></li>
                <li>Edit Profil</li>
            </ul>
        </div>                        
        <!-- ./page title -->

        <div class="wrapper">                   
            <div class="row row-wider">
                <div class="col-md-3">
                    <div class="profile margin-bottom-0">
                        <div class="profile-image">
                            <img src="<?php echo base_url(); ?>assets/gallery/<?php echo $profil->foto;?>">
                            <div class="profile-badges">
                                <a href="#" class="profile-badges-left"><i class="fa fa-plus"></i></a>
                                <a href="#" class="profile-badges-right"><i class="fa fa-camera"></i></a>
                            </div>
                            <div class="profile-status online"></div>
                        </div>
                        <div class="profile-info">
                            <h4><?php echo $profil->username;?></h4>
                            <span><i class="fa fa-map-marker"></i> <?php echo $profil->address;?></span>
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
                        <a class="list-group-item active" href="<?php echo base_url(); ?>user/profil/update" class="list-group-item"><i class="fa fa-users"></i> Edit Profil</a>
                        <a href="<?php echo base_url(); ?>user/profil/password" class="list-group-item"><i class="fa fa-key"></i> Ganti Password</a>
                    </div>
                </div>


                <div class="col-md-9">

                    <div class="page-subtitle margin-bottom-0">
                        <h3>Edit Profil</h3>

                    </div>
                    <div class="form-group-one-unit margin-bottom-40">
                      <?php echo form_open('user/profil/update_profil');?>  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-custom">
                               <input type="hidden" name="foto" class="form-control" value="<?php echo $profil->foto;?>" />                           
                               <input type="hidden" name="id" class="form-control" value="<?php echo $profil->id;?>" />                           
                               <input type="hidden" name="username" class="form-control" value="<?php echo $profil->username;?>" />                           
                               <label>Nama Lengkap</label>
                               <input type="text" name="name" class="form-control" value="<?php echo $profil->name;?>" />                                            
                           </div>                        
                       </div>
                       <div class="col-md-6">
                        <div class="form-group form-group-custom">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $profil->email;?>"/>
                        </div>
                    </div> <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-custom">
                                <label>Status</label>
                                <input type="text" class="form-control" name="access" value="<?php echo $profil->access;?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-custom">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="address" value="<?php echo $profil->address;?>"/>
                            </div>
                        </div>
                    </div>                                                              
                </div>                                                              
            </div>                                                              

            <div class="row">
                <div class="col-md-12">                                            
                    <button class="btn btn-danger pull-right">Update Profil</button>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>