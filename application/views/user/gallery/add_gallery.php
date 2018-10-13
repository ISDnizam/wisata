<!-- page content -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js" ></script>
<div class="dev-page-content" style="height: 1836px;">                    
  <!-- page content container -->
  <div class="container">

    <div class="row row-condensed">
      <div class="col-lg-12 col-md-12">

        <div class="wrapper">
          <div class="page-title">
            <h1>Upload Foto</h1>
            <p></p>

            <ul class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
              <li>Gallery</li>
            </ul>
          </div>                        
          <!-- ./page title -->
          <div class="wrapper wrapper-white">
           <?php if($this->session->flashdata('warning')) : ?>
            <h1><?php echo $this->session->flashdata('warning'); ?></h1>
          <?php endif; ?>
          <?php echo form_open_multipart() ?>
          <div class="form-group">
       <!--      <div class="copy">
             <a href="javascript:void(1);" class="btn btn-info btn-sm" id="add"><i class="glyphicon glyphicon-plus"></i>Tambah Foto</a>
           </div> -->
         </div>
         <div class="count" id="1"></div>
         <div class="form-group">  <label>Nama Tempat</span></label>
          <select name="id_wisata" class="form-control selectpicker" data-live-search="true">        
          <?php foreach($lokasi as $row) :?>
          <option value=" <?php echo $row->id_wisata; ?>">
            <?php echo $row->location_name; ?> </option> 	 <?php endforeach; ?> </select>  
          </div>
          <div class="form-group">
           <label>Upload Foto</span></label><br>
           <input class="file btn-default" type="file" name="image_1" required > 
         </div>
         <div class="paste" >
         </div>              
         <br>
         <div class="form-group"><br>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
        <?php echo form_close(); ?>
  <!--       <script>
          $(document).ready(function(){
            $( "#add" ).click(function() {
              var count = $('.count').attr('id');
              count = parseInt(count) + 1;
              $('.count').attr('id',count)
              var html   =  ' <div class="col-md-3"> <label>Upload Foto '+count+'</span></label><br>';
              html  +=   ' <input class="file btn-default" type="file" name="image_'+count+'" >';
              html  += '</div><br><br>';
              $('.paste').append(html);
            });

          })
        </script>  -->
         </div>                                
      </div>
    </div>