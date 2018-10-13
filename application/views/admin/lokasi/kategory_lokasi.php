<!-- page content -->
<div class="dev-page-content" style="height: 1836px;">                    
    <!-- page content container -->
    <div class="container">

        <div class="row row-condensed">
            <div class="col-lg-12 col-md-12">

                <div class="wrapper">
                    <div class="page-title">
                        <h1>Data <?php echo $title;?></h1>
                        <p></p>
                        
                        <ul class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>

                            <li>Data  <?php echo $title;?></li>

                        </ul>
                    </div>                        
                    <!-- ./page title -->

                    <div class="pull-left">  <br><br> 
                        <button type="button"   class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#kategori_modal">
                            <span class="fa fa-plus"></span> Tambah  <?php echo $title;?></button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; 
                                    foreach($category_wisata as $key) :?>
                                        <?php $no++; ?> 

                                        <tr>    
                                           <td width="5%"> <?php echo $no;?></td>
                                           <td> <?php echo $key->category; ?></td>
                                           <td width="15%">
                                            <a href="#0" class="btn btn-info btn-xs" data-toggle="modal" data-target="#kategori_modal" data-id_category="<?php echo $key->id ?>"  data-category_name="<?php echo $key->category ?>"><span class="fa fa-edit"></span> </a>
                                            <a href="<?php echo base_url();?>admin/wisata/delete_category/<?php echo $key->id; ?>" class="btn btn-danger btn-sm" onclick="return konfirmasi()"><span class="fa fa-trash"></span></a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div><br> 
                    </div>

                </div>

     <!--modal -->
    <div id="kategori_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xs">
        <div class="modal-content c-square">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myLargeModalLabel"><?php echo $title;?></h4>
          </div>
          <div class="modal-body">
            <div class="row">
            <form class="c-form-login" align="center" method="post"  enctype="multipart/form-data" action="">
             <div class="form-group col-md-6">
              <label class="pull-left label">Nama Kategori</label>
              <input type="hidden" id="id_category" name="id_category">
              <input  type="text" name="category_name" class="form-control c-square c-theme input-lg" required="" id="category_name" required>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-sm" value="Save" />
              </div>
            </div>
          </form>
        </div>
      </div>
        <div class="modal-footer">
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>

  <script type="text/javascript">
       $('#kategori_modal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_category = button.data('id_category')
      var category_name = button.data('category_name')
      if(id_category){
      $('#category_name').val(category_name);
      $('#id_category').val(id_category);
      }
      var modal = $(this)
    })

function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus kategori ini ? semua lokasi yang berada di kategori ini akan terhapus");
 if (tanya == true) return true;
 else return false;
 }
  </script>
