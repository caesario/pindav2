<?php 

class Model_admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    /* get the brand data */
    public function getAdminData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_admin WHERE id_admin = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_admin";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('pinda_kategori', $data);
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
			$this->db->where('id_kategori', $id);
			$update = $this->db->update('pinda_kategori', $data);
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