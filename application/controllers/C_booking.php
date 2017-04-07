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
		$varcontent['daerah'] = $_POST['txt_daerah'];
		$varcontent['tanggal'] = $_POST['txt_tanggal'];
		$varcontent['jam'] = $_POST['txt_jam'];
		$varcontent['durasi'] = $_POST['txt_durasi'];
		
		$this->load->view('layout/header_booking',$varcontent);
	}

	function load_lapangan()
	{
		$this->load->model('M_booking');

		$daerah = $_POST['daerah'];
		$tanggal = $_POST['tanggal'];
		$jam = $_POST['jam'];
		$durasi = $_POST['durasi'];

		$sort = $_POST['sort'];

		if ($sort == '') 
		{
			$sort_column = "harga_mulai";
			$sort_mode = "asc";
		}
		else if ($sort == 'tinggi') 
		{
			$sort_column = "harga_mulai";
			$sort_mode = "desc";
		}
		else if ($sort == 'rating') 
		{
			$sort_column = "rating";
			$sort_mode = "desc";
		}



		$params = $columns = $totalRecords = $data = array();

			$params = $_REQUEST;

			//define index of column
			
				$columns = array( 
					0 =>'nama',
					1 =>'daerah', 
					2 => 'picture',
					3 => 'id_tipe',
					4 => 'rating',
					5 => 'harga_mulai'
				);

				$where = "";

				// check search value exist
				if( !empty($params['search']['value']) ) {   
					
					$where .="and a.nama LIKE '".$params['search']['value']."%'";   
				}
			
			
			$queryTot = $this->M_booking->total_hasil_lapangan($daerah,$tanggal,$jam,$durasi);
		 	foreach( $queryTot->result_array() as $row ) { 
				$totalRecords = $row['value'];
			}

				$queryRecords = $this->M_booking->search_lapangan($daerah,$tanggal,$jam,$durasi,$where, $sort_column, $sort_mode,$params['start'],$params['length']);
				

				//iterate on results row and create new index array of data
				$i=0;
				foreach( $queryRecords->result_array() as $row) { 
					$data[$i]['nama']['first'] = $row['nama']; 
					$data[$i]['daerah']['first']= $row['daerah']; 
					$data[$i]['picture']['first']= $row['picture']; 
					$data[$i]['id_tipe']['first']= $row['id_tipe'];
					$data[$i]['rating']['first']= $row['rating'];
					$data[$i]['harga_mulai']['first']= $row['harga_mulai'];
					$i++;
				}	

			$json_data = array(
					"draw"            => intval( $params['draw'] ),   
					"recordsTotal"    => intval( $totalRecords ),  
					"recordsFiltered" => intval($totalRecords),
					"data"            => $data   // total data array
					);

			echo json_encode($json_data);

		
		
	}
}
