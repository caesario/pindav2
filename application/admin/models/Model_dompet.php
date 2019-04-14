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

    /* get the brand data */
    public function getDompetTopUpDatalist($id)
    {
//        $datetime = date('Y-m-d 00:00:00');
//        $datetrans = date('Y-m-d H:i:s', strtotime('-3 days', strtotime($datetime)));
        $array = array(
            'status_trx ' => $id,
            'trx_type' => 1,
//            'CreateTime >=' => $datetrans
        );
        $this->db->select('*');
        $this->db->from('pinda_dompettrx');
        $this->db->where($array);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getDompetWithdrawDatalist($id)
    {
        $array = array(
            'status_trx' => $id,
            'trx_type' => 2
        );
        $this->db->select('*');
        $this->db->from('pinda_dompettrx');
        $this->db->where($array);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getDompetTrxDetailData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_dompettrx');
        $this->db->join('pinda_dompet', 'pinda_dompet.id_dompet = pinda_dompettrx.id_dompet');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_dompet.id_user');
        $this->db->where('id_dompet_trx', $id);
        $result = $this->db->get();
        return $result->result_array();
    }


    public function getDompetKonfDetailData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_dompetkonf');
        $this->db->where('id_dompet_trx', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getDompetKonfbyDetailData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_dompetkonf');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_dompetkonf.id_user');
        $this->db->join('pinda_dompet', 'pinda_dompet.id_user = pinda_user.id_user');
        $this->db->where('id_dompet_trx', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function updatetrx($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_dompet_trx', $id);
            $update = $this->db->update('pinda_dompettrx', $data);
            return ($update == true) ? true : false;
        }
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