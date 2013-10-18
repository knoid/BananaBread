<?php

class Auth extends MY_Controller {

	/**
	 * This is here just because it's the default route.
	 */
	public function login($provider)
	{
		$this->config->load('oauth2');
		$config = $this->config->item($provider);
		if ($config)
		{
			$this->load->library('session');
			$this->load->library('OAuth2');
			$provider = $this->oauth2->provider($provider, $config);

			if ( ! $this->input->get('code'))
			{
				// By sending no options it'll come back here
				$provider->authorize();
			}
			else
			{
				// Howzit?
				try
				{
					$token = $provider->access($_GET['code']);
					$user = $provider->get_user_info($token);

					$this->load->model('band_model');
					$band = $this->band_model->update_by_gid($user);
					$this->session->set_userdata('band', $band);
					redirect('band/' . $band->band_id);
				}
				catch (OAuth2_Exception $e)
				{
					show_error('That didnt work: '.$e);
				}
			}
		}
	}

}
