<?php
Class Webmodel extends CI_Model
{
	public function get_profil()
	{
		$id = $this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('module_users');
		$this->db->where('id', $id);
		$data = $this->db->get();
		return $data;   	
	}

	public function get_category($id_category=false)
	{
		$this->db->select('*');
		$this->db->from('module_category');
		if($id_category){
		$this->db->where('id', $id_category);
		}
		$data = $this->db->get();
		return $data;   	
	}
	public function get_detailcategory($id)
	{
		$this->db->select('*');
		$this->db->from('module_category');
		$this->db->where('id', $id);
		$data = $this->db->get();
		return $data;   	
	}

	public function get_listlokasi($id_category=false)
	{
		$this->db->select('*');
		$this->db->select('module_wisata.id as id_wisata');
		$this->db->from('module_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		if($id_category){
			$this->db->where('module_wisata.id_category', $id_category);
		}
		$this->db->where('module_wisata.status', 'publish');

		$data = $this->db->get();
		return $data;   	
	}

	public function get_gallery($id_wisata=false, $id_category=false, $id=false, $id_users=false){
		$this->db->select('*, module_wisata.id as id_wisata,module_images.id as id_images,module_images.foto as foto,module_wisata.name as location_name');
		$this->db->from('module_images');
		$this->db->join('module_wisata', 'module_wisata.id=module_images.id_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		if($id_wisata){
		$this->db->where('module_wisata.id_wisata', $id_wisata);
		}
		if($id_users){
		$this->db->where('module_wisata.id_users', $id_users);
		}
		if($id_category){
		$this->db->where('module_wisata.id_category', $id_category);
		}
		if($id){
		$this->db->where('module_images.id', $id);
		}
		$data = $this->db->get();
		return $data;   	
	}

	public function get_alllokasi()
	{
		$this->db->select('*');
		$this->db->select('module_wisata.id as id_wisata');
		$this->db->from('module_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		$this->db->where('module_wisata.status', 'publish');

		$data = $this->db->get();
		return $data;   	
	}


	public function get_detaillokasi($id)
	{
		$this->db->select('*,module_wisata.id as id_wisata, module_wisata.foto as foto, module_wisata.name as title,module_wisata.address as address');
		$this->db->from('module_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		$this->db->join('module_users', 'module_wisata.id_users=module_users.id');
		$this->db->where('module_wisata.id', $id);

		$data = $this->db->get();
		return $data;   	
	}


	public function get_paginglokasi($num, $id=false, $offset){
		$this->db->select('*');
		$this->db->select('module_wisata.id as id_wisata');
		$this->db->from('module_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		if($id){
			$this->db->where('module_wisata.id_category', $id);
		}
		$this->db->where('module_wisata.status', 'publish');
		$this->db->limit($num, $offset);
		$data = $this->db->get();
		return $data->result();
	}

	public function get_pagingalllokasi($num,  $offset)
	{
		$this->db->select('*');
		$this->db->select('module_wisata.id as id_wisata');
		$this->db->from('module_wisata');
		$this->db->join('module_category', 'module_wisata.id_category=module_category.id');
		$this->db->where('module_wisata.status', 'publish');
		$this->db->limit($num, $offset);
		$data = $this->db->get();
		return $data->result();
	}


	public function Update_Viewers($id){
		
		$this->db->where('id', $id); 
		$this->db->set('counter', 'counter+1', FALSE);
		$this->db->update('module_wisata');
	}

	public function get_comments($id)
	{
		$this->db->select('*');
		$this->db->from('module_comments');
		$this->db->where('id_wisata', $id);
		$this->db->order_by('id', 'desc');
		$this->db->limit(7);
		$data = $this->db->get();
		return $data;   	
	}


		public function get_ratings($id=false, $limit=false){
		$this->db->select('*');
		$this->db->from('module_ratings');
		$this->db->where('module_ratings.id_wisata', $id);
		$this->db->order_by('module_ratings.id', 'desc');
		if($limit){
		$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data;   	
	}

	function changeActiveState($key){
		$this->load->database();
		$data = array(
			'status' => 1
		);
		$this->db->where('password', $key);
		$this->db->update('module_users', $data);
		return true;
	}


	function Update_Pengunjung($id_lokasi)
	{
		$this->db->where('id_lokasi', $id_lokasi); 
		$this->db->set('counter', 'counter+1', FALSE);
		$this->db->update('tbl_lokasi');
	}
	public function delete_images($id){        
	$this->db->where('id', $id);        
	$this->db->delete('module_images');     
	}  
	
}
?>