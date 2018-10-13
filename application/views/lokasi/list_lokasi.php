
<div id="content">
<div class="places_index_block container-fluid">
  <div class="fixed_w">
    <h2><?php echo $title;?></h2>
    <div class="row">
    <?php foreach ($list as $row) { ?>
      <div class="col-md-4 place_index_item  wow bounceInLeft">
        <div class="place_inn">
          <img src="<?php echo base_url();?>assets/gallery/<?php echo $row->foto;?>" alt="#" style="min-height:200px; max-height:200px">
          <div class="pl_descr">
             <a href="<?php echo base_url();?>lokasi/detail/<?php echo $row->id_wisata;?>"><?php echo $row->name;?> </a>
            <div style="margin-top: -10px; margin-bottom:10px;"><i class="fa fa-globe"></i> <?php $address = substr($row->address, 0, 70); echo $address; ?> </div>
            <span><?php $description = substr($row->description, 0, 100); echo $description; ?></span>
       <!--   <ul class="rate">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
        -->
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
     <div class="pull-right"><?php echo $halaman;?>   </div>
    <!-- <a href="<?php echo base_url();?>data/list_lokasi" class="btn btn-success va">View all places</a> -->
  </div>
</div>
</div>
</div>

  