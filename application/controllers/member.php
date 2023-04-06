<?php 

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['member']=$this-> Mcrud ->get_member();
		$this->template->load('layout_admin', 'admin/member/index', $data);
	}

	public function getid($id)
	{
		$dataWhere = array('idBiayaKirim'=>$id);
		$data['member'] = $this-> Mcrud ->get_member_by_id($dataWhere)->row_object();
		$data['kota']=$this-> Mcrud ->get_all_data('tbl_kota')->result();
		$data['kurir']=$this-> Mcrud ->get_all_data('tbl_kurir')->result();
		$this -> template ->load('layout_admin', 'admin/member/form_edit', $data);
	}
}