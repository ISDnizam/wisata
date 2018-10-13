<!-- page content -->
<div class="dev-page-content" style="height: 1836px;">                    
    <!-- page content container -->
    <div class="container">

        <div class="row row-condensed">
            <div class="col-lg-12 col-md-12">

                <div class="wrapper">
                    <div class="page-title">
                        <h1>Data Validasi</h1>
                        <p></p>
                        
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li>Data Validasi</li>
                        </ul>
                    </div>                        
                    <!-- ./page title -->
                <?php echo $this->session->flashdata('message'); ?>

                        <div class="">
                            <table class="table table-bordered table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Location Name</th>
                                        <th>Address</th>
                                        <th>Overview</th>
                                        <th>Category</th>
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
                                         $limited_string = limit_words($row->description, 3);
                                         echo $limited_string;
                                         ?>...</td>
                                         <td> <?php echo $row->category; ?></td>
                                         <td> <?php echo $row->username; ?></td>
                                         <td>
                                         <div class="dropdown"><br>
                                              <button class="btn btn-default active dropdown-toggle"  type="button" id="dropdownMenuButton" style="margin-top:-10px;" type="button" data-toggle="dropdown">
                                                Action
                                              </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <li><a class="dropdown-item" href="<?php echo base_url();?>lokasi/detail/<?php echo $row->id_wisata; ?>">View</a></li>
                                                  <li><a class="dropdown-item" href="<?php echo base_url();?>admin/validasi/set_status/<?php echo $row->id_wisata;?>/publish">Konfirmasi</a></li>
                                                  <li><a class="dropdown-item" href="<?php echo base_url();?>admin/validasi/set_status/<?php echo $row->id_wisata;?>/decline">Tolak</a></li>
                                                </div>
                                              </div>
                                          </td>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div><br> 
                    </div>

                </div>
