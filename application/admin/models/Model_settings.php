<?php 

class Model_settings extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	//  Tentang Model
    public function getAboutData($id = null)
    {
            $sql = "SELECT * FROM pinda_tentang WHERE id_tentang= ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
    }

    public function updateabout($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_tentang', $id);
            $update = $this->db->update('pinda_tentang', $data);
            return ($update == true) ? true : false;
        }
    }

    // End Tentang Model

    public function getArtikelDataDetail($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_admin');
        $this->db->where('id_artikel', $id);
        $this->db->join('pinda_artikel', 'pinda_artikel.id_admin = pinda_admin.id_admin');
        $query = $this->db->get();
        return $query->result_array();
    }



	public function getAllArtikel() {

        $this->db->select('*');
        $this->db->from('pinda_admin');
        $this->db->join('pinda_artikel', 'pinda_artikel.id_admin = pinda_admin.id_admin');
        $query = $this->db->get();
        return $query->result_array();
    }




	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_pesan', $id);
			$update = $this->db->update('pinda_pesan', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id_artikel', $id);
			$delete = $this->db->delete('pinda_artikel');
			return ($delete == true) ? true : false;
		}
	}

}