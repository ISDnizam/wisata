
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
<?php $uri1 = $this->uri->segment(1);
$uri3 = $this->uri->segment(3);
$name = $this->session->userdata('name');
$access = $this->session->userdata('access'); ?>
<body onload="initialize()" class="promo">
  <!--autorization-->
  <div class="bg_parallax">
    <div class="container-fluid header inner_head" style="box-shadow:0px 1px 0px rgba(154, 9, 9, 0.59); z-index: 999;">
      <div class="fixed_w">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav navbar-nav">
              <LI><A href="<?php echo base_url();?>" style="color:white">Home</A></LI>
              <li><A href="<?php echo base_url();?>map" style="color:white">Maps</A></LI>
                <LI><A class="animsition-link" href="<?php echo base_url();?>lokasi" style="color:white">Lokasi Wisata</A></LI>
              </UL>
              <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                  <?php if($name){  ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white" > <I class="fa fa-user"></I> <?php echo $name;?> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?><?php echo $access;?>" >Profil</a></li> 
                        <li><a href="<?php echo base_url();?>pages/logout">Logout</a></li>
                      </ul>
                    </li>
                  <?php }else{ ?>
                    <li><a   href="<?php echo base_url();?>pages/login" style="color:white" ><I class="fa fa-key"></I> Login</a></li>
                    <li><a  style="color:white"  data-backdrop="false" data-target="#gabung" data-toggle="modal"> <I class="fa fa-users"></I> Daftar</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <div id="container" style="width:100%">
      <div class="top_promo_block" id="promo_head" >
        <?php if($this->uri->segment(2)=='detail') { ?>
          <img src="<?php echo base_url();?>assets/gallery/<?php echo $detail->foto;?>" style="width:100%;height: 100%">
        <?php } ?>
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
