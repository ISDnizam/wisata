<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

  function index(){
  $data['profil'] = $this->Webmodel->get_profil()->row();
  $data['category'] = $this->Webmodel->get_category()->result();
  foreach ($data['category'] as $key) {
    $data['lokasi'][$key->id] = $this->Webmodel->get_listlokasi($key->id)->result();
  }
  $this->load->view('maps', $data);
  }
 }

?>

