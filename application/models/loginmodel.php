<?php
class loginmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
		//$this->load->library('database');
		/*$q=$this->db->query("select * from where username=$usrename and password=$password");
		if(count($q->rows()))
		{
			return true
		}
		else
		{

		}*/
		$q=$this->db->where(['username'=>$username,'password'=>$password])
					->get('users');

					//echo "<pre>";
					//print_r($q);
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return false;
		}
	}
	
	public function articleList()
	{
		$id=$this->session->userdata('id');
		$q=$this->db->select('article_title')
				   ->from('article')
				   ->where(['user_id'=>$id])
				   ->get();
				   	return $q->result();
	}

}


?>