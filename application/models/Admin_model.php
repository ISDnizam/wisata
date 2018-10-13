<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Admin_model extends CI_Model{    

	

	function Data_Login($user,$pass)
	{
		$user_bersih=$user;
		$pass_bersih=$pass;
		$query=$this->db->query("select * from module_users where username='$user_bersih' and password=md5('$pass_bersih')");
		return $query;
	}
	
	public function get_lokasi($id_category=false, $id_users=false, $status=false, $id_wisata=false){
		$this->db->select('*, module_wisata.id as id_wisata, module_wisata.name as location_name,  module_wisata.address as address, module_wisata.status as location_status');
		$this->db->from('module_wisata');
		$this->db->join('module_category' , 'module_wisata.id_category=module_category.id');
		$this->db->join('module_users' , 'module_wisata.id_users=module_users.id');
		if($status){
		$this->db->where('module_wisata.status', $status);
		}
		if($id_category){
			$this->db->where('module_wisata.id_category', $id_category);
		}
		if($id_wisata){
			$this->db->where('module_wisata.id', $id_wisata);
		}
		if($id_users){
			$this->db->where('module_wisata.id_users', $id_users);
		}
		$this->db->order_by('module_wisata.id', 'DESC');
		$data = $this->db->get();
		return $data;
	}


	function Update_Password($id,$pwd)
	{
		$this->db->query("update module_users set password=md5('$pwd') where id=$id");
	}


	public function get_profil()
	{
		$id = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('module_users');
		$this->db->where('id', $id);
		$data = $this->db->get();
		return $data;   	
	}

	public function get_category_wisata($id_category=false)
	{
		$this->db->select('*');
		$this->db->from('module_category');
		if($id_category){
		$this->db->where('id', $id_category);
		}
		$data = $this->db->get();
		return $data;   	
	}

	public function delete_category($id_category=false){        
		if($id_category){
		$this->db->where('id', $id_category);        
		}
		$this->db->delete('module_category');     
	} 
	public function delete_lokasi($id_wisata=false, $id_category=false){        
		if($id_wisata){
		$this->db->where('id', $id_wisata);        
		}
		if($id_category){
		$this->db->where('id_category', $id_category);        
		}
		$this->db->delete('module_wisata');     
	}  

	public function delete_komentar($id_wisata){        
		$this->db->where('id_wisata', $id_wisata);        
		$this->db->delete('module_comments');     
	}  

	public function delete_image($id_wisata){        
		$this->db->where('id_wisata', $id_wisata);        
		$this->db->delete('module_images');     
	}  

	public function get_detail_lokasi($id_wisata){        
		$this->db->select('*');
		$this->db->select('module_wisata.id as id_wisata');
		$this->db->from('module_wisata');
		$this->db->join('module_category' , 'module_wisata.id_category = module_category.id');
		$this->db->where('module_wisata.id', $id_wisata);
		$query = $this->db->get();    
		return $query;
	}     

}