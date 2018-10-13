<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validasi extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('access')!='admin'){
      redirect('pages/login', 'refresh');
    }
  }

    public function index($id=NULL, $page=NULL){
    $id_category = $this->uri->segment(4);
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['data'] = $this->Admin_model->get_lokasi($id_category, '','draft')->result();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('admin/lokasi/list_validasi',$data);
    $this->load->view('layout/admin/footer', $data);
    }
    

	function set_status($id_wisata){
    $status = $this->uri->segment(5);
    $data_wisata = $this->Admin_model->get_lokasi('','','', $id_wisata)->row();
        if($data_wisata){
        	$data['status'] = $status;
        	$this->db->where('id', $id_wisata);
        	$this->db->update('module_wisata',$data);
            $email = $data_wisata->email;
            if($status=='publish'){
            $notif_message =  '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Lokasi telah berhasil dikonfirmasi</div>';
            $msg = $this->load->view('email/konfirmasilokasi',null,TRUE);
            }elseif($status=='decline'){
            $notif_message =  '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Lokasi telah berhasil ditolak</div>';
            $msg = $this->load->view('email/tolaklokasi',null,TRUE);
            }
            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'Codeigniter';
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "400";
            $config['smtp_user']= "nizamxmodifier@gmail.com";  
            $config['smtp_pass']= "modifier1";  
            $config['crlf']="\r\n"; 
            $config['newline']="\r\n"; 
            $config['wordwrap'] = TRUE;    
            $this->email->initialize($config);
            $this->email->from($config['smtp_user']);
            $this->email->set_mailtype('html');
            $this->email->to($email);

            if($status=='publish'){
            $this->email->subject("Lokasi Terverifikasi !");
            }elseif($status=='decline'){
            $this->email->subject("Lokasi Ditolak !");
            }
            $this->email->message($msg);
              $this->session->set_flashdata('message', $notif_message);
            redirect('admin/validasi', 'refresh');     
    	}
    }
  }
?>