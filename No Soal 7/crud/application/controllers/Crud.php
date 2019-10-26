<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_data');
	}

	public function index()
	{
		$data['menu']			= "Data Buku";
		$data['query_kategori']	= $this->M_data->kategori();
		$data['query_buku'] 	= $this->db->query('SELECT books.id as id, stok, image, books.name as judul, categories.name as kategori FROM books JOIN categories ON books.category_id = categories.id ');

		$data['konten']  		= $this->load->view('lihat', $data, TRUE);

		$this->load->view('master', $data, FALSE);
	}

	public function bukuKat($id)
	{
		$data['menu'] 			= "buku per kategori";	
		$data['query_kategori'] = $this->M_data->kategori();
		$data['query_buku'] 	= $this->db->query('SELECT books.id as id, stok, image, books.name as judul, categories.name as kategori FROM books JOIN categories ON books.category_id = categories.id WHERE books.category_id='.$id);
		$data['konten'] 		= $this->load->view('bukuKat', $data, TRUE);	

		$this->load->view('master', $data, FALSE);	
	}

	public function tambahKategori()
	{
		$data['menu'] 			= "Tambah Kategori";	
		$data['query_kategori'] = $this->M_data->kategori();
		$data['konten'] 		= $this->load->view('tambahKategori', $data, TRUE);	

		$this->load->view('master', $data, FALSE);	
	}

	public function tambahBuku()
	{
		$data['menu'] 			= "Tambah Buku";	
		$data['query_kategori'] = $this->M_data->kategori();
		$data['query_kat']		= $this->db->get('categories');
		$data['konten'] 		= $this->load->view('tambahBuku', $data, TRUE);	

		$this->load->view('master', $data, FALSE);	
	}

	public function addKategori()
	{
		$data = array( 'name' => $this->input->post('kategori'));

		$this->db->insert('categories', $data);
		
		redirect(base_url('crud'));		
	}

	public function addBuku()
	{
		$data = array( 
			'name' 			=> $this->input->post('buku'),
			'category_id' 	=> $this->input->post('kategori'),
			'stok' 			=> $this->input->post('stok'),
			'deskripsi' 	=> $this->input->post('deskripsi'),
			'image' => 'default.jpg',					
		);

		$this->db->insert('books', $data);
		
		redirect(base_url('crud'));		
	}

	public function detail($id)
	{
		$data['menu'] 			= "Detail Buku";	
		$data['query_kategori'] = $this->M_data->kategori();
		$data['query_buku'] 	= $this->db->query('SELECT books.id as id, deskripsi, stok, image, books.name as judul, categories.name as kategori FROM books JOIN categories ON books.category_id = categories.id WHERE books.id='.$id);
		$data['konten'] 		= $this->load->view('detail', $data, TRUE);	

		$this->load->view('master', $data, FALSE);	
	}
}
