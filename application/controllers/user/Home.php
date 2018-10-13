<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct(){
    parent::__construct();
  }

  function index()
    {
    if($this->session->userdata('access')=='user')
    {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
		$this->load->view('layout/admin/sidebar', $data);
  	$this->load->view('user/dashboard', $data);
		$this->load->view('layout/admin/footer', $data);
    }else{
      //Jika tidak ada session di kembalikan ke halaman login
      redirect('pages/login', 'refresh');
	   }
  }
}

?>