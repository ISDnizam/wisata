<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi extends CI_Controller {
  function __construct(){
    parent::__construct();
  }



  public function index($id_category=false, $page=NULL){
    $data['kategori'] = $this->Webmodel->get_category()->result();
    $data['profil'] = $this->Webmodel->get_profil()->row();
    if($id_category){
    $category = $this->Webmodel->get_detailcategory($id_category)->row();
    $data['title'] = $category->category;
    $jml = $this->Webmodel->get_listlokasi($id_category)->num_rows();
    }else{
    $jml = $this->Webmodel->get_listlokasi()->num_rows();
    $data['title'] = 'Semua Lokasi Wisata';
    }

    $config['base_url'] = base_url().'lokasi/index'.$id_category.'/';
    $config['total_rows'] = $jml;
    $config['per_page'] = 12;
    $config['uri_segment'] = 4;
    $config['num_links'] = 1;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul><!--pagination-->';
    $config['next_link'] = '>';
    $config['cur_tag_open'] = ' <li><a href="">';
    $config['cur_tag_close'] = '</li></a>';
    $config['prev_link'] = '<';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['anchor_class'] = '';
    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links(); 
    if($id_category){
    $data['list'] = $this->Webmodel->get_paginglokasi($config['per_page'], $id_category, $page);
    }else{
    $data['list'] = $this->Webmodel->get_paginglokasi($config['per_page'], '', $page);
    }
    $this->load->view('layout/header',$data);
    $this->load->view('lokasi/list_lokasi', $data);
    $this->load->view('layout/footer',$data);
  }



  public function detail($id){
  	$data['profil'] = $this->Webmodel->get_profil()->row();
    $data['kategori'] = $this->Webmodel->get_category()->result();
    $data['detail'] = $this->Webmodel->get_detaillokasi($id)->row();
    $data['viewers']     = $this->Webmodel->Update_Viewers($id);
    $data['comments']     = $this->Webmodel->get_comments($id)->result();
    $data['reviews']     = $this->Webmodel->get_ratings($id)->result();
    $id_wisata= $this->input->post('id_wisata');
    if($id_wisata){
      $comments = array('id_wisata'=> $id_wisata,
      'name'=> $this->input->post('name'),
      'email'=> $this->input->post('email'),
      'comments'=> $this->input->post('comments'),
      );
      $this->db->insert('module_comments', $comments);
      $message =  '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Your comment has been sent
      </div>';
      $this->session->set_flashdata('message', $message);
      redirect('lokasi/detail/'.$id_wisata);
    }
    $this->load->view('layout/header',$data);
    $this->load->view('lokasi/detail_lokasi', $data);
    $this->load->view('layout/footer',$data);
  }


  function send_review(){
    $id_wisata= $this->input->post('id_wisata');
    if($id_wisata){
      $review = array('id_wisata'=> $id_wisata,
      'name'=> $this->input->post('name'),
      'review'=> $this->input->post('review'),
      'rating'=> $this->input->post('rating'),
      );
      $this->db->insert('module_ratings', $review);
      $message =  '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Your review has been submit
      </div>';
      $this->session->set_flashdata('message', $message);
      redirect('lokasi/detail/'.$id_wisata);
    }
  }
  public function send_comment(){
    $id_wisata= $this->input->post('id_wisata');
    $data = array('id_wisata'=> $id_wisata,
      'name'=> $this->input->post('name'),
      'email'=> $this->input->post('email'),
      'comments'=> $this->input->post('comments'),
      );
    $this->db->insert('module_comments', $data);
      $message =  '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Your comment has been sent
      </div>';

      $this->session->set_flashdata('message', $message);
    redirect('data/detail/'.$id_wisata);
  }

}
?>