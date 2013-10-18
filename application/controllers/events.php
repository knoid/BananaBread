<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->model('event_model');

		$this->load->view('events', array(
			'events' => $this->event_model->find_near(-34.6033, -58.3817)
		));
	}
}

/* End of file events.php */
/* Location: ./application/controllers/events.php */
