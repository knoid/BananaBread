<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	/**
	 * This is here just because it's the default route.
	 */
	public function login($provider)
	{
		$this->load->model('auth_model');
		list($token, $user) = $this->auth_model->login($provider);
		if ($user)
		{
			$this->load->model('band_model');
			$band = $this->band_model->update_by_gid($user);
			$this->band_model->fetch_youtube_videos($band, $token);
			$this->session->set_userdata('band', $band);
			redirect('band/' . $band->band_id);
		}
	}

}
