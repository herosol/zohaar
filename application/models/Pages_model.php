<?php 
 
 class Pages_model extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 		$this->table_name="sitecontent";
 	}
 	function savePageContent($vals,$page_slug=""){
 		$this->db->set($vals);
 		if($page_slug != ""){
 			//die("here");
 			$this->db->where("ckey",$page_slug);
 			$this->db->update($this->table_name);
 			return $page_slug;
 		}	 		
 		else{
 			$this->db->insert($this->table_name);
 			return $this->db->insert_id();
 		}
 	}
 	function saveMetaContent($vals,$page_slug=""){
 		$this->db->set($vals);
 		if($page_slug != ""){
 			//die("here");
 			$this->db->where("slug",$page_slug);
 			$this->db->update('meta_info');
 			return $page_slug;
 		}	 		
 		else{
 			$this->db->insert('meta_info');
 			return $this->db->insert_id();
 		}
 	}
 	function getPageContent($page_slug=""){
 		if($page_slug != ""){
 			$this->db->where("ckey",$page_slug);
 			return $this->db->get($this->table_name)->row();
 		}
 		else{
 			 return $this->db->get($this->table_name)->result();
 		}
 	}
 	 function getMetaContent($page_slug=""){
 		if($page_slug != ""){
 			$this->db->where("slug",$page_slug);
 			return $this->db->get('meta_info')->row();
 		}
 		else{
 			 return $this->db->get('meta_info')->result();
 		}
 	}
 	function deletePage($page_slug=""){
 		$this->where("ckey",$page_slug);
 		$this->db->delete($this->table_name);
 		return $page_slug;	
 	}

	function get_products($post)
	{
		$this->db->select('*, (price - discount) as final_price');
		$this->db->from('products');
		$this->db->where('category_id', $post['category']);

		if(isset($post['price']) && !empty(trim($post['price'])))
		{
		  $priceIndex = explode(';', $post['price']);
		  $this->db->where(['(price - discount) >='=> $priceIndex[0], '(price - discount) <='=> $priceIndex[1]]);
		}

		if(isset($post['types']) && !empty($post['types']))
		{
			$this->db->group_start();
			foreach($post['types'] as $key => $value)
			{
				if($key == 0)
					$this->db->where('phone_type', $value);
				else
					$this->db->or_where('phone_type', $value);
			}
			$this->db->group_end();
		}

		if(isset($post['brands']) && !empty($post['brands']))
		{
			$this->db->group_start();
			foreach($post['brands'] as $key => $value)
			{
				if($key == 0)
					$this->db->where('brand_id', $value);
				else
					$this->db->or_where('brand_id', $value);
			}
			$this->db->group_end();
		}

		$this->db->where(['status'=> 1]);
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result();
		// pr($this->db->last_query());

	}
 }



?>