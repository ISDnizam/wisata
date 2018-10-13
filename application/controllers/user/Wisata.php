<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wisata extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->id_users = $this->session->userdata('id');
    if($this->session->userdata('access')!='user'){
      redirect('pages/login', 'refresh');
    }
  }

   public function index($category, $id=NULL, $page=NULL)    {
    $id_category = $this->uri->segment(4);
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $data['category'] = $this->Webmodel->get_category($id_category)->row();
    $data['data'] = $this->Admin_model->get_lokasi($id_category, $this->id_users)->result();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/lokasi/list_lokasi',$data);
    $this->load->view('layout/admin/footer', $data);
	}
				
  public function add($id)    {
    $this->db->where('id', $id);
    $data['category'] = $this->db->get('module_category')->row(); 
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/lokasi/tambah_lokasi',$data);
    $this->load->view('layout/admin/footer', $data);
	}     
	public function proses_insert() {  
  $wisata = $this->input->post('wisata');
  if (empty($_FILES['image_1']['name'])) {
         $this->session->set_flashdata('warning', 'Setidaknya 1 file harus diupload');  
              redirect('user/wisata/add/'.$wisata['id_category']);
                } else {
                    $config['upload_path'] = "./assets/gallery/"; //lokasi folder yang akan digunakan untuk menyimpan file
                     //ekstensi file yang diperbolehkan
                    $config['allowed_types'] = 'jpg|png|JPEG|jpeg';
                    //melakukan fungsi upload secara berulang tergantung berapa banyak file yang diupload
                    $this->load->library('upload', $config);
                    foreach($_FILES as $row => $val ){
                      $config['file_name'] = url_title($this->input->post($row));
                      $config['id_lokasi'] = $this->input->post('id_lokasi');
                      $this->upload->initialize($config);
                         if (!$this->upload->do_upload($row)) {
                                        //jika error akan langsung dikembalikan kehalaman add 
                            $error = $this->upload->display_errors();
                            $this->session->set_flashdata('warning', $error);
                            redirect('user/wisata/add/'.$wisata['id_category']);
                        } else {
                            //simpan nama file yang di upload pada variable berikut
                            $wisata['status'] = 'draft';
                            $wisata['foto'] = $this->upload->file_name;
                            $wisata['id_users'] = $this->session->userdata('id');
                            $this->db->insert('module_wisata', $wisata);
                        }
                    }
                   redirect('user/wisata/index/'.$wisata['id_category'],'refresh');    
                }
	}     
			
  public function update($id_wisata)       {
    $data['profil'] = $this->Admin_model->get_profil()->row();
    $data['data'] = $this->Admin_model->get_detail_lokasi($id_wisata)->row(); 
    $data['category_wisata'] = $this->Admin_model->get_category_wisata()->result();
    $this->load->view('layout/admin/header');
    $this->load->view('layout/admin/sidebar', $data);
    $this->load->view('user/lokasi/update_lokasi',$data);
    $this->load->view('layout/admin/footer', $data);
  }     
			
	public function proses_update()    {       
  $wisata = $this->input->post('wisata');
  $id_wisata = $this->input->post('id_wisata');
  if($id_wisata){
     $config['upload_path'] = './assets/gallery';
        $config['allowed_types'] = 'jpg|png|JPEG|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image_1')){
            $error = array('error' => $this->upload->display_errors());
            $wisata['foto'] = $this->upload->file_name;
        }
    $this->db->where('id', $id_wisata);
    $this->db->update('module_wisata', $wisata);
  }
  redirect('user/wisata/index/'.$wisata['id_category'],'refresh');  
  }     
	

  public function delete($id_wisata){
    $id_category=$this->db->where('id', $id_wisata)->get('module_wisata')->row()->id_category;
    $this->Admin_model->delete_lokasi($id_wisata);        
    $this->Admin_model->delete_komentar($id_wisata);           
    $this->Admin_model->delete_image($id_wisata);           
    redirect('user/wisata/index/'.$id_category,'refresh');    
  }
}
?>