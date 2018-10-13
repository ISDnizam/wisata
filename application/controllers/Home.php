<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct(){
  parent::__construct();
  $this->id_user = $this->session->userdata('id');  
  }

  function index(){     
        $data['profil'] = $this->Webmodel->get_profil()->row();
        $data['kategori'] = $this->Webmodel->get_category()->result();
        $this->load->view('layout/header',$data);
        $this->load->view('home',$data);
  			$this->load->view('layout/footer',$data);
    	}
}

?>