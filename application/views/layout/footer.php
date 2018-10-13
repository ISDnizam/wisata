<?php if($this->uri->segment(1)!=''){ ?><footer>

<div class="copyright_container">
<div class="container">
<div class="row">
<div class="col-md-12">
<br>
<a href="#">© 2018 Sistem Informasi Wisata Kabupaten Klaten</a> 
<br></div>
</div></div>
</div>
</div>
</footer>
<?php }?>

  <div style="display: none;" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal fade" id="gabung">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
        <h4 id="myModalLabel" class="modal-title">Informasi Tentang Anda</h4>
      </div>
      <?php echo form_open('pages/daftar');?>
      <div class="modal-body">
        <div class="form-group"><label> Nama Anda</label>
          <input type="text" style=" width: 350px;" name="nama" class="form-control">    
        </div>
        <div class="form-group"><label> Username</label>
          <input type="text" style=" width: 350px;" name="username" class="form-control">    
        </div>
        <div class="form-group"><label> Password</label>
          <input type="password" style=" width: 350px;" name="password" class="form-control">    
        </div>

        <div class="form-group"><label> Email </label>
          <input type="email" style=" width: 350px;" name="email" class="form-control">    
        </div>

        <div class="form-group"><label> Alamat</label>
          <input type="text" style=" width: 350px;" name="alamat" class="form-control">    
        </div>
        Sudah punya akun ? <a href="<?php echo base_url();?>pages/login">Login</a>
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Daftar">
        <?php echo form_close();?>                      </div>
      </div>
    </div>
  </div>
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/depan/jquery.min.js"></script>
<!--scroll animate block-->
<script src="<?php echo base_url();?>assets/depan/wow.min.js"></script>
<!--Other main scripts-->
<script src="<?php echo base_url();?>assets/depan/all_scr.js"></script>
<!--Bootstrap js-->  
<script src="<?php echo base_url();?>assets/depan/bootstrap.min.js"></script>
<!--Map js-->

<script type="text/javascript" src="<?php echo base_url();?>assets/depan/infobox.js"></script>
<!--Slider Revolution-->
<script type="text/javascript" src="<?php echo base_url();?>assets/depan/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/depan/jquery.themepunch.revolution.min.js"></script>
<!--Parallax-->
<script type="text/javascript" src="<?php echo base_url();?>assets/depan/jquery.parallax-0.2-min.js"></script>
 <script src="<?php echo base_url();?>assets/js/jquery.barrating.js"></script>
    <script src="<?php echo base_url();?>assets/js/examples.js"></script>
<!--scroll animation-->
<script>
new WOW().init();
</script>

<!--Parallax house-->
<script type="text/javascript">
   "use strict";
$('.categori_block').parallax({

  'elements': [
  {
    'selector': '.categori_block',
    'properties': {
      'x': {
        'background-position-x': {
          'initial': 0,
          'multiplier': 0.1,
          'invert': true
        }
      },
      'y': {
        'background-position-y': {
          'initial': -780,
          'multiplier': 0.1,
          'invert': true
        }
      }
    }
  }
  ]
});
</script>

<script type="text/javascript">
 "use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>
</body>
</html>
