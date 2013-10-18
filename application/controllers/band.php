<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Band extends MY_Controller {

	public function index($band_id)
	{
		$this->load->model('band_model');
		$this->load_view('band', array(
			'band' => $this->band_model->get_by_id($band_id, TRUE)
		);
	}

}
