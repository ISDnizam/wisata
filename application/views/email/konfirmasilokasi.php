<?php
$nama_lokasi = $this->input->post('nama_lokasi');                    
$alamat = $this->input->post('alamat');                                     
$email = $this->input->post('email');                   
$telepon = $this->input->post('telepon');                   
$website = $this->input->post('website');                   
$kode_pos = $this->input->post('kode_pos');
$nama = $this->session->userdata('nama');
$status = 'Terverifikasi';
?>

Hallo <b><?php echo $nama;?></b>
<br><br>
Selamat, Lokasi baru yang anda tambahkan di...., telah berhasil kami verifikasi. 
<br><br>Berikut detail lokasi yang anda tambahkan <br>
<table>
<tr><td>Nama Lokasi </td>:<td> <?php echo $nama_lokasi;?></td></tr>
<tr><td>Alamat </td>:<td> <?php echo $alamat;?></td></tr>
<tr><td>Email </td>:<td> <?php echo $email;?></td></tr>
<tr><td>Telepon </td>:<td> <?php echo $telepon;?></td></tr>
<tr><td>Website </td>:<td> <?php echo $website;?></td></tr>
<tr><td>Kode Pos </td>:<td> <?php echo $kode_pos;?></td></tr>
<tr><td>Status </td>:<td><b><font color="green"> <?php echo $status;?></font></b></td></tr>
</table>
<br>
Untuk melihat denah lokasi anda silahkan klik <a href="">Disini</a>
