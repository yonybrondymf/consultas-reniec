<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search(){

		require_once( FCPATH. "/vendor/jossmp/datos-peru/src/autoload.php" );
	
		$essalud = new \EsSalud\EsSalud();
		//$mintra = new \MinTra\mintra();
		//$reniec = new \Reniec\Reniec();
		
		$dni = $this->input->post("search");
		
	    $resultado = $essalud->search( $dni );
		//$search2 = $mintra->search( $dni );

		echo json_encode($resultado);
	}

	public function download(){
		$this->load->helper('download');
		$file = 'download/consultas-reniec.rar';
        force_download($file, NULL);
	}
}
