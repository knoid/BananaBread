<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Band extends MY_Controller {

	public function show($band_id)
	{
		$this->load->model('band_model');
		$this->load_view('band', array(
			'band' => $this->band_model->get_by_id($band_id, TRUE),
			'edit' => count($this->session->userdata('band')) > 0
		));
	}

	public function upload($to_service)
	{
		if ($to_service == 'youtube')
		{
			if (isset($_FILES['file']))
			{
				$tmp_name = tempnam('/tmp/', 'vfu');
				if (move_uploaded_file($_FILES['file']['tmp_name'], $tmp_name))
				{
					$this->session->set_userdata('file_upload', array($tmp_name, $_FILES['file']['type']));
				}
			}

			$this->load->model('auth_model');
			list($token, $user) = $this->auth_model->login('google');
			$band = $this->session->userdata('band');

			$file_upload = $this->session->userdata('file_upload');
			if ($file_upload)
			{
				$this->load->model('band_model');
				$video_data = $this->band_model->add_youtube_upload($band, $token, $file_upload);
				$this->session->set_userdata('file_upload', FALSE);
			}

			redirect('band/' . $band->band_id);
		}
	}

}
