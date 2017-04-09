<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}
	public function login()
	{
		$method = $_POST['txt_method'];
		$username = $_POST['txt_username'];
		$password = $_POST['txt_password'];

		$this->load->model('M_login');
		$data_login = $this->M_login->do_login($username,$password);
		$varcontent['data_login'] = $data_login; 

		$row = count($data_login);

		if ($row > 0) 
		{

			foreach ($data_login as $key => $value) {
				$id_user = $value['id_user'];
				$username = $value['username'];
				$email = $value['email'];
				$full_name = $value['fullname'];
				$picture = $value['picture'];
			}

			$newdata = array(
		        'id_user'  => $id_user,
		        'username'     => $username,
		        'email' => $email,
		        'full_name' => $full_name,
		        'picture' => $picture
			);

			$this->session->set_userdata($newdata);

			if ($method == 'login_before') 
			{
				$varcontent['content'] = "pages/metode_pembayaran";
				$this->load->view('layout/header_booking',$varcontent);
			}
			else
			{

			}

		}
		else
		{
			$this->session->set_flashdata('pesan', 'Login Gagal');
			echo "gagal";
		}

		
	}
}
