<?php 

class ongkir extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['ongkir']=$this-> Mcrud ->get_ongkir();
		$this->template->load('layout_admin', 'admin/ongkir/index', $data);
	}

	public function add()
	{
		$data['kota']=$this-> Mcrud ->get_all_data('tbl_kota')->result();
		$data['kurir']=$this-> Mcrud ->get_all_data('tbl_kurir')->result();
		$this->template->load('layout_admin', 'admin/ongkir/form_add',$data);
	}

	public function save()
	{
		$namaKurir = $this->input->post('namaKurir');
		$biaya=$this->input->post('biaya');
		$kotaAsal=$this->input->post('kotaAsal');
		$kotaTujuan=$this->input->post('kotaTujuan');
		$dataInsert = array('idKurir'=>$namaKurir,
							'idKotaAsal'=>$kotaAsal,
							'idKotaTujuan'=>$kotaTujuan,
							'idKurir'=>$namaKurir,
							'biaya'=>$biaya	);
		$this -> Mcrud -> insert('tbl_biaya_kirim', $dataInsert);
		redirect('ongkir');
	}

	public function getid($id)
	{
		$dataWhere = array('idBiayaKirim'=>$id);
		$data['ongkir'] = $this-> Mcrud ->get_ongkir_by_id($dataWhere)->row_object();
		$data['kota']=$this-> Mcrud ->get_all_data('tbl_kota')->result();
		$data['kurir']=$this-> Mcrud ->get_all_data('tbl_kurir')->result();
		$this -> template ->load('layout_admin', 'admin/ongkir/form_edit', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKurir = $this->input->post('namaKurir');
		$biaya=$this->input->post('biaya');
		$kotaAsal=$this->input->post('kotaAsal');
		$kotaTujuan=$this->input->post('kotaTujuan');
		$dataUpdate = array('idKurir'=>$namaKurir,
							'idKotaAsal'=>$kotaAsal,
							'idKotaTujuan'=>$kotaTujuan,
							'idKurir'=>$namaKurir,
							'biaya'=>$biaya	);
		$this -> Mcrud -> update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
		redirect('ongkir');
	}

	public function delete ($id)
		{
			$this -> Mcrud -> deleteong($id);
			if ($this -> db -> affected_rows())
			{
				redirect('ongkir');
			}
			else
			{
				echo "Data gagal dihapus";
			}
		}
}