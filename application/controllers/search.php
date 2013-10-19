<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	public function index()
	{
		$queries = array_filter(explode(' ', $this->input->get('query')));

		foreach ($queries as $term)
			foreach (array('description', 'name') as $field)
				$this->db->where("LOWER($field) LIKE", "%$term%");

		$res = $this->db->get('band');

		$this->load_view('search', array(
			'search_items' => $res->result(),
			'query_terms' => implode(' ', $queries)
		));
	}

}
