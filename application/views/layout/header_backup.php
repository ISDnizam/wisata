
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lokasi wisata di Kabuaten Klaten</title>

  <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet"> 
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/bootstrap.css">
  <!--Main styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/main.css?v=1.2">
  <!--Adaptive styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/adaptive.css">
  <!--Swipe menu-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/pushy.css">
  <!--fonts-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--animation css-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/animate.css">
  <!-- Slider Revolution -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/depan/settings.css" media="screen" />

</head>
<?php $uri1 = $this->uri->segment(1);?>
<body onload="initialize()" class="promo">
  <!--autorization-->
  <NAV class="pushy pushy-left">
    <DIV class="profile">
      <?php 
      $name = $this->session->userdata('name');
      $access = $this->session->userdata('access');
      if($this->session->userdata('name'))
      { 
        if($profil->foto==''){
          echo '<DIV class="avatar"><img src="'.base_url().'assets/gallery/user11.png"><SPAN> <a href="'.base_url().'pages/logout"><i class="fa fa-power-off"></i></a></SPAN></DIV>
          <A class="log_btn" href="'.base_url().''.$access.'">'.$name.'</A></DIV>';
        }else{
          echo '<DIV class="avatar"><img src="'.base_url().'assets/gallery/'.$profil->foto.'"><SPAN> <a href="'.base_url().'pages/logout"><i class="fa fa-power-off"></i></a></SPAN></DIV>
          <A class="log_btn" href="'.base_url().''.$access.'">'.$name.'</A></DIV>';
        }
      }
      else
      {
        echo '<DIV class="avatar"><img src="'.base_url().'assets/gallery/user11.png" alt="#""></DIV>
        <A class="log_btn" href="" data-backdrop="false" data-target="#gabung" data-toggle="modal">Daftar</A></DIV>';
      } 
      ?>
      <UL class="side_menu">
        <LI><A href="<?php echo base_url();?>"><I class="fa fa-bookmark"></I>Home</A></LI>
        <li><A href="<?php echo base_url();?>map"><I class="fa fa-map-marker"></I>Maps</A></LI>
          <LI><A class="animsition-link" href="<?php echo base_url();?>lokasi"><I class="fa fa-road"></I>Lokasi Wisata</A></LI>
        </UL>
      </NAV>

      <!-- Site Overlay -->
      <div class="site-overlay"></div>
      <div id="container" style="width:100%">
        <div class="top_promo_block" id="promo_head" >
          <?php if($this->uri->segment(2)=='detail') { ?>
          <img src="<?php echo base_url();?>assets/gallery/<?php echo $detail->foto;?>" style="width:100%;height: 100%">
          <?php } ?>
          <div class="menu-btn">&#9776;</div>
          <div class="start_descrition">
            <h1 style="margin-bottom: -30px ">
              <b><?php if($this->uri->segment(2)=='detail') { 
                echo $detail->title;
                }else{
                echo 'Sistem informasi geografis';} ?></b>
                <span></span></h1>
                <?php if($this->uri->segment(2)=='detail'){?>
                  <span>
                    <?php echo $detail->category;?></span>
                  <?php }else{?>
                    <span>
                    Lokasi-Lokasi obyek wisata yang ada di Kabupaten Klaten</span>
                    <div class="search_promo">
                      <div class="input-group">
                       <div class="input-group-btn btn_cat">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span>Kategori Wisata<span class="caret"></span></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right place_dd">
                          <?php foreach ($kategori as $ro) {?>
                            <li><a href="<?php echo base_url();?>lokasi/index/<?php echo $ro->id;?>" ><i class="fa fa-play"></i><?php echo $ro->category;?></a></li>
                          <? } ?>
                          <li><a href="<?php echo base_url();?>lokasi"><i class="fa fa-play"></i>Semua Kategori</a></li>
                        </ul>
                      </div>
                      <div class="input-group-btn btn_promo_search">
                        <button type="button" class="btn btn-success" onclick="window.location.href">Search</button>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="scroll_block">
                <?php if($uri1){ ?>
                  <a href="#content">
                    <img src="<?php echo site_url();?>assets/icon/scroll.png" class="animated infinite bounce" alt="#">
                  </a>
                <?php } ?>
              </div>
            </div>
