<?php 

class Model_artikel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
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
			$this->db->where('id_kategori', $id);
			$delete = $this->db->delete('pinda_kategori');
			return ($delete == true) ? true : false;
		}
	}

}