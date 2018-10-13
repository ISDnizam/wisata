<script src="https://code.jquery.com/jquery-1.11.1.min.js" ></script><div class="dev-page-content">                    
    <div class="container">
        <div class="page-title">
            <h1>Gallery  <?php echo $category->category;?></h1>
            <ul class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li>Gallery  <?php echo $category->category;?></li>
            </ul>
        </div>                        
        <!-- ./page title -->
        <div class="pull-right col-lg-2">
            <br><a href="<?php echo base_url();?>admin/gallery/add/<?php echo $id_category;?>" class="btn btn-primary btn-sm">Tambah Foto</a></div>
            <!-- gallery powered by isotope -->
            <div class="gallery isotope" id="gallery">
            <?php foreach ($list_gallery as $key) { ?>
            <div class="gallery-sizer"></div>
            <div class="gallery-gutter"></div>
            <a href="<?php echo base_url();?>assets/gallery/<?php echo $key->foto;?>" class="gallery-item">   
                <img src="<?php echo base_url();?>assets/gallery/<?php echo $key->foto;?>">
                <div class="gallery-item-info">
                   <i class="fa fa-bookmark-o"></i> <?php echo $key->location_name;?>
                   <span class="pull-right">
                    <form method="post" action="<?php echo base_url();?>admin/gallery/delete/<?php echo $key->id_images;?>">
                        <input type="submit" class="btn btn-danger btn-sm" style="z-index: 44;" value="Hapus">
                    </form>
                    </span>
                </div>
            </a>
            <?php } ?>
            </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script>
$(function(){                
    setTimeout(function(){
        $("img").unveil(200);
        $('.gallery.isotope').isotope({
            itemSelector: '.gallery-item',
            percentPosition: true,
            masonry: {                 
              columnWidth: '.gallery-sizer',
              gutter: '.gallery-gutter'
          }                
      });                
        $(".dev-page-sidebar-collapse, .dev-page-sidebar-minimize").on("click",function(){
            setTimeout(function(){
                $('.gallery.isotope').isotope('layout');
                dev_layout_alpha_content.init(dev_layout_alpha_settings);
            },300);                    
        });
        document.getElementById('gallery').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
            //link = target.src ? target.parent : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };

    },200);

});
</script>
        </div>