<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
  function __construct(){
    parent::__construct();
    if($this->session->userdata('access')!='user'){
      redirect('pages/login', 'refresh');
    }
  }

    
	
   public function index()  {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/profil/index',$data);   
    $this->load->view('layout/admin/footer', $data);
  }     
	
  public function update()  {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/profil/update',$data);   
    $this->load->view('layout/admin/footer', $data);
  }    


public function update_profil()  {         
      $session_data = $this->session->userdata('logged_in');
      $id = $this->input->post('id');               
      $data = array('address' => $this->input->post('address'),
      'name' => $this->input->post('name'), 
      'username' => $this->input->post('username'),
      'email' => $this->input->post('email'));  
       $this->session->set_userdata('logged_in',$data);				   
       $this->db->where('id', $id);
       $this->db->update('module_users', $data);
        echo "<script type='text/javascript'>
          alert('Profil berhasil di ubah !');
        </script>
       <meta http-equiv='refresh' content='0; url=".base_url()."user/profil'>"; 
	}


  public function password()  {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/profil/password',$data);   
    $this->load->view('layout/admin/footer', $data);
  }    

  
  function updatepassword(){
    $data = array();
    $id = $this->session->userdata('id');               
    $pass = $this->input->post('password');
    $user='user';
    $passlama = $this->input->post('passwordlama');
      $hasil = $this->Admin_model->Data_Login($user,$passlama);
      if(count($hasil->result()) <= 0)
      {
        ?>
        <script type="text/javascript">
          alert('Password lama yang anda masukkan SALAH..!!!');
        </script>
        <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."user/profil/password'>";
      }else if($pass!=""){
        $this->Admin_model->Update_Password($id,$pass);
        ?>
        <script type="text/javascript">
          alert('Berhasil mengubah password..!!!');
        </script>
        <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."user/profil/password'>";
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."user/profil'>";
      }
      else
      {
        ?>
        <script type="text/javascript">
          alert('Gagal mengubah password..!!!');
        </script>
        <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."user/profil/password'>";
      }
  }

  function prosesupload(){
        $config['upload_path'] = 'assets/gallery';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '10000';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
        }else{
           $datas      = $this->upload->data();
           $id = $this->session->userdata('id');
            $data = array(
                'foto' => $datas['file_name']
                );
            $this->db->where('id',$id);
            $this->db->update('module_users',$data);
          redirect('user/profil', 'refresh');

        }
    }
  
	}

?>