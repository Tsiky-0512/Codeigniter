<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {  // welcome no atao eo amn url

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
		$data['product'] = array();

		for ($i=0; $i <5 ; $i++) { 
			$data['product'][$i]['name'] = 'product'.$i;
			$data['product'][$i]['price'] = 100 + $i;
			$data['product'][$i]['comment'] = 'commentaire lorem' ;
		}

		$this->load->view('homepage/body.php'); 
		$this->load->view('homepage/content.php',$data); 
		$this->load->view('homepage/footer.php'); 
	}

}
