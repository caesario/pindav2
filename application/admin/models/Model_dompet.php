<?php 

class Model_dompet extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    /* get the brand data */
    public function getDompetData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_dompet WHERE id_dompet = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_dompet";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function updatedompet($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_dompet', $id);
            $update = $this->db->update('pinda_dompet', $data);
            return ($update == true) ? true : false;
        }
    }
    public function getDompetDetailData($id) {


        $this->db->select('*');
        $this->db->from('pinda_dompet');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_dompet.id_user');
        $this->db->where('id_dompet', $id);
        $result = $this->db->get();
        return $result->result();
    }

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('pinda_kategori', $data);
			return ($insert == true) ? true : false;
		}
	}

    public function createdompet($data)
    {
        if($data) {
            $insert = $this->db->insert('pinda_dompet', $data);
            return ($insert == true) ? true : false;
        }
    }



	public function remove($id)
	{
		if($id) {
			$this->db->where('id_user', $id);
			$delete = $this->db->delete('pinda_user');
			return ($delete == true) ? true : false;
		}
	}

}