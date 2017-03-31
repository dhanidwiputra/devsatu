<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_booking extends CI_Controller {

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

	public function search_lapangan()
	{
		$daerah = $_POST['txt_daerah'];
		$tanggal = $_POST['txt_tanggal'];
		$jam = $_POST['txt_jam'];
		$durasi = $_POST['txt_durasi'];
		$this->load->model('M_booking');
		$varcontent['hasil_lapangan'] = $this->M_booking->search_lapangan($daerah,$tanggal,$jam,$durasi);

		$this->load->view('layout/header_booking',$varcontent);
	}
}
