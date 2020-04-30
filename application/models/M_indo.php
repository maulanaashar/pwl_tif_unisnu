<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_indo extends CI_Model {
	public function getSe_indo()
	{
		return $this->db->get('se_indo')->result();
	}

	public function hapus($id_prov)
	{
    	$this->db->where('id_prov', $id_prov);
    	$this->db->delete('se_indo');
    }

    public function totalPositif()
    {
    	$this->db->select('SUM(Positif) AS totalpositif');
    	return $this->db->get('se_indo')->result();
    }

    public function totalSembuh()
    {
    	$this->db->select('SUM(Sembuh) AS totalsembuh');
    	return $this->db->get('se_indo')->result();
    }

    public function totalMeninggal()
    {
    	$this->db->select('SUM(Meninggal) AS totalmeninggal');
    	return $this->db->get('se_indo')->result();
    }
}
