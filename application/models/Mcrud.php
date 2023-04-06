<?php 

class Mcrud extends CI_Model
{
	public function get_ongkir()
	{
		$q = $this->db->query("SELECT b.idBiayaKirim, k.namaKota AS asal, j.namakota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota j ON b.idKotaTujuan=j.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir");
		return $q->result();
	}

	public function get_ongkir_by_id($id)
	{
		$q = $this->db->query("SELECT b.idBiayaKirim, k.namaKota AS asal, j.namakota AS tujuan, b.biaya, r.namaKurir FROM tbl_biaya_kirim b JOIN tbl_kota k ON b.idKotaAsal=k.idKota JOIN tbl_kota j ON b.idKotaTujuan=j.idKota JOIN tbl_kurir r ON b.idKurir=r.idKurir");
			return $q;
			$q = $this->db->get_where('tbl_biaya_kirim', $id);
			return $q->result;
	}

	public function get_member()
	{
		$q = $this->db->query("SELECT * FROM tbl_member JOIN tbl_kota ON tbl_member.idKota = tbl_kota.idKota");
		return $q->result();
	}

	public function get_member_by_id($id)
	{
		$q = $this->db->query("SELECT * FROM tbl_member JOIN tbl_kota ON tbl_member.idKota = tbl_kota.idKota");
			return $q;
		$q = $this->db->get_where('tbl_member', $id);
			return $q->result;
	}

	public function get_all_data($tabel)
	{
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id)
	{
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function deletekat($id)
		{
			$this -> db -> where('idkat', $id);
			$this -> db -> delete('tbl_kategori');
		}

	public function deletekot($id)
		{
			$this -> db -> where('idKota', $id);
			$this -> db -> delete('tbl_kota');
		}

	public function deletekur($id)
		{
			$this -> db -> where('idKurir', $id);
			$this -> db -> delete('tbl_kurir');
		}

	public function deleteong($id)
		{
			$this -> db -> where('idBiayaKirim', $id);
			$this -> db -> delete('tbl_biaya_kirim');
		}
}