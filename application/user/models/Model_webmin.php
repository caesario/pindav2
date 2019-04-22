<?php 

class Model_webmin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getAboutData($id = 'aboutpinda001')
    {
        if($id) {
            $sql = "SELECT * FROM pinda_tentang WHERE id_tentang= ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_artikel";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getFAQData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_faq WHERE id_faq= ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_faq";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

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

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('pinda_artikel', $data);
			return ($insert == true) ? true : false;
		}
	}

    public function createicon($data)
    {
        if($data) {
            $insert = $this->db->insert('pinda_iconkategori', $data);
            return ($insert == true) ? true : false;
        }
    }

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_artikel', $id);
			$update = $this->db->update('pinda_artikel', $data);
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