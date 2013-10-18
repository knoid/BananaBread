<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'google' => array(
        'id'     => '265230816115.apps.googleusercontent.com',
        'secret' => 'pepepepepe',
        'scope'  => implode(' ', array(
        	'https://www.googleapis.com/auth/userinfo.email',
        	'https://www.googleapis.com/auth/userinfo.profile',
        	'https://www.googleapis.com/auth/youtube.upload'
        ))
	)
);

/* End of file oauth2.php */
/* Location: ./application/config/oauth2.php */
