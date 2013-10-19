<?php

class Auth_model extends CI_Model {

	public function login($provider)
	{
		$this->config->load('oauth2');
		$config = $this->config->item($provider);
		if ($config)
		{
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

					return array($token, $user);
				}
				catch (OAuth2_Exception $e)
				{
					show_error('That didnt work: '.$e);
				}
			}
		}
	}

	public function is_logged()
	{
		return !!$this->session->userdata('band');
	}

}
