<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function load_view($view, $data)
	{
		$this->load->view('layout', array(
			'tpl_view' => $view,
			'tpl_data' => $data
		));
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
