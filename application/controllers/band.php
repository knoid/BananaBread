<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Band extends MY_Controller {

	public function show($id)
	{
		$this->load->model('band_model');

		$this->load_view('events/show', array(
			'band' => $this->band_model->get_by_id($id),
		));
	}

	public function fetch_from_soundcloud()
	{
		$band = $this->session->userdata('band');
		if ($band)
		{
			list($token, $tracks) = $this->auth_model->login('soundcloud');
			$this->load->model('media_model');
			foreach ($tracks as $track)
			{
				$this->media_model->add($band->band_id, 'soundcloud', $track->id, $track->title);
			}
			redirect('band/' . $band->band_id);
		}

		show_404();
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
