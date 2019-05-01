<?php 

class Model_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getUserTotal() {
        $this->db->select('*');
        $this->db->from('pinda_user');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getPointTotal() {

        $this->db->select_sum('point_reputasi');
	    $result = $this->db->get('pinda_user');

	    return $result->result();
    }

    public function getUserDetail($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_user');
        $this->db->where('id_user', $id);
        $result = $this->db->get();


        return $result->result_array();
    }

}