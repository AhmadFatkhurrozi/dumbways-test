<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function kategori()
	{
		$query = $this->db->query
		(
			'SELECT categories.id, books.category_id, categories.name, 
				COUNT(books.category_id) as total FROM categories

				LEFT JOIN books ON books.category_id = categories.id

				GROUP BY categories.name 
				ORDER BY categories.id ASC 
              '
		);

		return $query;
	}

}
