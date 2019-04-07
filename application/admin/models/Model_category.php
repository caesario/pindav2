<?php 

class Model_category extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get active brand infromation */
	public function getActiveCategroy()
	{
		$sql = "SELECT * FROM categories WHERE active = ?";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function getAllKategoriDataIcon($id) {
	    $this->db->select('*');
	    $this->db->from('pinda_kategori');
	    $this->db->join('pinda_iconkategori', 'pinda_iconkategori.id_icon = pinda_kategori.icon');
        $this->db->where('id_kategori', $id);
        $query = $this->db->get();
	    return  $query->result();
    }

    public function getAllIcon()
    {
        $sql = "SELECT * FROM pinda_iconkategori";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

	/* get the brand data */
	public function getCategoryData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM pinda_kategori WHERE id_kategori = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM pinda_kategori";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

    public function getIconCategoryData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_iconkategori WHERE id_icon = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_iconkategori";
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
			$this->db->where('id_cat', $id);
			$update = $this->db->update('categories', $data);
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