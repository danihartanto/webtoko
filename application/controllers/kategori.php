<?php 

class kategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin', 'admin/kategori/index', $data);
	}

	public function add()
	{
		$this->template->load('layout_admin', 'admin/kategori/form_add');
	}

	public function save()
	{
		$namaKategori = $this -> input -> post('namaKategori');
		$dataInsert = array('namakat' => $namaKategori);
		$this -> Mcrud -> insert('tbl_kategori', $dataInsert);
		redirect('kategori');
	}

	public function getid($id)
	{
		$dataWhere = array('idkat'=>$id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$this -> template ->load('layout_admin', 'admin/kategori/form_edit', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array('namakat' => $namaKategori);
		$this -> Mcrud -> update('tbl_kategori', $dataUpdate, 'idkat', $id);
		redirect('kategori');
	}

	public function delete ($id)
		{
			$this -> Mcrud -> deletekat($id);
			if ($this -> db -> affected_rows())
			{
				redirect('kategori');
			}
			else
			{
				echo "Data gagal dihapus";
			}
		}
}