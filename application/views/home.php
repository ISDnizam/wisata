
<div id="content">
<div class="places_index_block container-fluid">
  <div class="fixed_w">
    <h2>Lokasi Wisata</h2>
    <div class="row">
    <?php foreach ($list_lokasi as $row) { ?>
      <div class="col-md-4 place_index_item  wow bounceInLeft">
        <div class="place_inn">
          <img src="<?php echo base_url();?>assets/gallery/<?php echo $row->foto;?>" alt="#" style="min-height:200px; max-height:200px">
          <div class="pl_descr">
             <a href="<?php echo base_url();?>lokasi/detail/<?php echo $row->id_wisata;?>"><?php echo $row->name;?> </a>
            <div style="margin-top: -10px; margin-bottom:10px;"><i class="fa fa-globe"></i> <?php $address = substr($row->address, 0, 70); echo $address; ?> </div>
            <span><?php $description = substr($row->description, 0, 100); echo $description; ?></span>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
    <a href="<?php echo base_url();?>lokasi" class="btn btn-success va">Lihat Semua Lokasi</a>
  </div>
</div>
</div>
</div>

  