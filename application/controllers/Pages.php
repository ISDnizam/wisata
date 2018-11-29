<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

  function __construct()
  {
    parent::__construct();
      $this->load->library('session');
  }


  function daftar(){
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $email = $this->input->post('email');
    $alamat = $this->input->post('alamat');
    $data = array (
      'name' => $nama,
      'username' => $username,
      'password' => $password,
      'email' => $email,
      'address' => $alamat,
      'access' => 'user'
      );
    $this->db->insert('module_users', $data);

    $msg = $this->load->view('email/gabung',null,TRUE);
    $config = array();
    $config['charset'] = 'utf-8';
    $config['useragent'] = 'Codeigniter';
    $config['protocol']= "smtp";
    $config['mailtype']= "html";
    $config['smtp_host']= "ssl://smtp.gmail.com";
    $config['smtp_port']= "465";
    $config['smtp_timeout']= "400";
    $config['smtp_user']= "isdnizam1@gmail.com";  
    $config['smtp_pass']= "modifier1";  
    $config['crlf']="\r\n"; 
    $config['newline']="\r\n"; 
    $config['wordwrap'] = TRUE;    
    $this->email->initialize($config);
    $this->email->from($config['smtp_user']);
    $this->email->set_mailtype('html');
    $this->email->to($email);
    $this->email->subject("Verifikasi Akun ");
    $this->email->message($msg);
    $send = $this->email->send();
    $message =  '<div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      Pendaftaran anda berhasil. silahkan cek email anda untuk men verifikasi akun anda !
    </div>';
    $this->session->set_flashdata('message', $message);
    redirect('pages/login');
  }


  function login(){
    if($this->session->userdata('logged_in')){
        // redirect('admin/home', 'refresh');
    }else{
        $this->load->view('login_view');
    }

  }

   function verify_login(){

     $username = $this->input->post('username');  //get username
     $password = $this->input->post('password');  //get password
     $password = md5($password);
     $q = $this->db->query("SELECT *  FROM module_users WHERE username='$username' AND password='$password'");
     if ($q->num_rows() == 1){
        if($q ->row()->status ==0){
           $message =  '<div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          Akun anda belum di verifikasi. silahkan cek email anda verifikasi akun anda
          </div>';
          $this->session->set_flashdata('message', $message);
          redirect('pages/login');
        }else{
         $username =$q->row()->username;
         $id =$q->row()->id;
         $status =$q->row()->status;
         $nama =$q->row()->name;
         $access = $q ->row()->access;
         $email = $q ->row()->email;
            //if the query is TRUE, then save the username into session and load the welcome view
         $data_session = array(
                   'username'  => $username,
                   'id'  => $id,
                    'name'  => $nama,
                    'email'  => $email,
                    'access' => $access,
                    'status' => $status,
                    'logged_in' => TRUE
            );

          $session=$this->session->set_userdata($data_session);
          if($this->session->userdata('access')=='admin'){
          redirect('admin/home');
          }else if($this->session->userdata('access')=='user'){
          redirect('home');
          }
        }
    }else{
         $message =  '<div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
         Username atau password yang anda masukan salah
          </div>';
          $this->session->set_flashdata('message', $message);
          redirect('pages/login');
    }
  }

public function verification($key){
 $this->load->helper('url');
 $this->Webmodel->changeActiveState($key);
  $message =  '<div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    Akun anda telah berhasil di verifikasi. silahkan masukan username dan password anda
      </div>';
      $this->session->set_flashdata('message', $message);
      redirect('pages/login');
}
  public function password()    {
    if($this->session->userdata('access')=='user')
    {
      $data['profil'] = $this->Webmodel->get_profil()->row();  
      $this->load->view('data/v_atas');
      $this->load->view('data/v_samping', $data);
      $this->load->view('member/v_password',$data);    
      $this->load->view('data/v_bawah');
    }else{
      redirect('login');
    }
  }


  function logout(){
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('', 'refresh');
  }
}
?>