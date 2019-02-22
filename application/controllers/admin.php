<?php
class admin extends my_controller
{
	public function index()
	{
		//$this->load->view('Users/articleList');$this->load->library('form_validation');
$this->form_validation->set_rules('uname','User Name','required|alpha');
$this->form_validation->set_rules('pass','Password','required|max_length[12]');
$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
if($this->form_validation->run())
{
	
	$uname=$this->input->post('uname');
	$pass=$this->input->post('pass');
	$this->load->model('loginmodel');
	$id=$this->loginmodel->isvalidate($uname,$pass);
	if($id)
	{
		$this->load->library('session');
		$this->session->set_userdata('id',$id);
		return redirect('admin/welcome');
		//$_SESSION['EMAIL']=$EMAIL;
	}
	
	/*
	if(isset($_POST['submit'])
	{
		$uname=$_POST['USERNAME'];
		$PASS=$_POST['pass'];
	}	
*/
//	echo "Username is  ".$uname."</br>"."Password is  ".$pass;

}
else
{
	$this->load->view('Admin/Login');
	echo "detailed not matched";
}
	}


public function welcome()
{
	$this->load->model('loginmodel');
	$articles=$this->loginmodel->articleList();
	$this->load->view('admin/dashboard',['articles'=>$articles]);
}
public function register()
{
	$this->load->view('admin/register');
}

public function logout()
{
	$this->session->unset_userdata('id');
	$this->load->view('Admin/Login');
}

public function register_validation()
	{
		//$this->load->view('Users/articleList');$this->load->library('form_validation');
$this->form_validation->set_rules('uname','User Name','required|alpha');
$this->form_validation->set_rules('pass','Password','required|max_length[12]');
$this->form_validation->set_rules('fname','Firstname','required|alpha');
$this->form_validation->set_rules('lname','Password','required|alpha');
$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
if($this->form_validation->run())
{
	
	echo "registered";
	
	/*
	if(isset($_POST['submit'])
	{
		$uname=$_POST['USERNAME'];
		$PASS=$_POST['pass'];
	}	
*/
//	echo "Username is  ".$uname."</br>"."Password is  ".$pass;

}
else
{
	$this->load->view('Admin/register');

}
}
}
?>