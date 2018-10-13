<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct(){
    parent::__construct();
  }

  function index()
    {
    if($this->session->userdata('access')=='admin')
    {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidebar', $data);
  	$this->load->view('admin/dashboard', $data);
		$this->load->view('layout/admin/footer', $data);
    }else{
      //Jika tidak ada session di kembalikan ke halaman login
      redirect('pages/login', 'refresh');
	   }
  }
  
   function logout(){
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home');
  } 


}

?>