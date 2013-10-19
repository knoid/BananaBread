<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends MY_Controller {

	public function index()
	{
		$this->load->model('event_model');

		$this->load_view('events/events', array(
			'events' => $this->event_model->find_near(-34.6033, -58.3817, 10000000)
		));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
