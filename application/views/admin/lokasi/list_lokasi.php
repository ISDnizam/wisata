<!-- page content -->
<div class="dev-page-content" style="height: 1836px;">                    
    <!-- page content container -->
    <div class="container">

        <div class="row row-condensed">
            <div class="col-lg-12 col-md-12">

                <div class="wrapper">
                    <div class="page-title">
                        <h1>Data <?php echo $category->category;?></h1>
                        <p></p>
                        
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>

                            <li>Data <?php echo $category->category;?></li>

                        </ul>
                    </div>                        
                    <!-- ./page title -->

                    <div class="pull-left">  <br><br> 
                        <a href="<?php echo base_url();?>admin/wisata/add/<?php echo $category->id;?>" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span> Tambah <?php echo $category->category;?></a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Location Name</th>
                                        <th>Address</th>
                                        <th>Overview</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no=0;   ?> 

                                    <?php foreach($data as $row) :?>
                                        <?php $no++; ?> 

                                        <tr>    
                                         <td> <?php echo $no;?></td>
                                         <td> <?php echo $row->location_name; ?></td>
                                         <td> <?php
                                         $address = limit_words($row->address, 3);
                                         echo $address;
                                         ?></td>
                                         <td><?php
                                         $limited_string = limit_words($row->description, 5);
                                         echo $limited_string;
                                         ?>...</td>
                                         <td> <?php echo $row->username; ?></td>
                                         <td><a href="<?php echo base_url();?>lokasi/detail/<?php echo $row->id_wisata; ?>"  class="btn btn-primary btn-sm" target="_newtab"><span class="fa fa-eye"></span> </a>

                                            <a href="<?php echo base_url();?>admin/wisata/update/<?php echo $row->id_wisata; ?>" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span> </a>
                                            <a href="<?php echo base_url();?>admin/wisata/delete/<?php echo $row->id_wisata; ?>" class="btn btn-danger btn-sm" onclick="return konfirmasi()"><span class="fa fa-trash"></span></a>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div><br> 
                    </div>

                </div>

