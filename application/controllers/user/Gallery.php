<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->id_users = $this->session->userdata('id');
        if($this->session->userdata('access')!='user'){
        redirect('pages/login', 'refresh');
        }
    }

	public function index($id=false){
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category'] = $this->Admin_model->get_category_wisata($id)->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $data['list_gallery'] = $this->Webmodel->get_gallery('',$id,'', $this->id_users)->result();
    $data['id_category'] = $id;
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/gallery/list_gallery',$data);   
    $this->load->view('layout/admin/footer', $data);
  } 
  public function add($id_category){  
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['lokasi'] = $this->Admin_model->get_lokasi($id_category,$this->id_users)->result();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $id_wisata = $this->input->post('id_wisata');
    if($this->input->post()){
        $config['upload_path'] = 'assets/gallery';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '10000';
        $config['max_width']  = '5000';
        $config['max_height']  = '5000';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image_1')){
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
        }else{
           $datas      = $this->upload->data();
            $images['id_wisata'] = $id_wisata;
            $images['foto'] = $datas['file_name'];
            $this->db->insert('module_images',$images);
          redirect('user/gallery/index/'.$id_category, 'refresh');

        }
    }
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/gallery/add_gallery',$data);
    $this->load->view('layout/admin/footer', $data);
}  
 
public function delete($id){
  $data['profil'] = $this->Admin_model->get_profil()->row();
  $images  = $this->Webmodel->get_gallery('','',$id)->row();
  $this->Webmodel->delete_images($id);        
  unlink('assets/gallery/'.$images->foto);
  redirect('user/gallery/index/'.$images->id_category,'refresh');   
  }
}
?>