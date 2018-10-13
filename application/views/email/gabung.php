<?php
                                  
$email = $this->input->post('email');                   
$nama = $this->session->userdata('nama');
$password = md5($this->input->post('password'));

?>

Hallo <b><?php echo $nama;?></b>
<br><br>
Terima Kasih sudah bergabung di sistem kami. untuk men-verifikasi akun anda silahkan klik  <a href="<?php echo base_url();?>pages/verification/<?php echo $password;?>">Disini</a>
