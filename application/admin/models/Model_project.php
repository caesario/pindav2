<?php 

class Model_project extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    /* get the brand data */
    public function getProjectData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_proyek WHERE id_proyek = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_proyek";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function getSubmitData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_trx_submit');
        $this->db->join('pinda_trx_submitdetail', 'pinda_trx_submitdetail.id_detail_submit = pinda_trx_submit.id_detail_submit');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_trx_submitdetail.id_user');
        $this->db->where('id_proyek', $id);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getApplyData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_trx_lamar');
        $this->db->join('pinda_trx_lamardetail', 'pinda_trx_lamardetail.id_detail_lamar = pinda_trx_lamar.id_detail_lamar');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_trx_lamardetail.id_user');
        $this->db->where('id_proyek', $id);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getIdeData($id)
    {
        $this->db->select('*');
        $this->db->from('pinda_trx_ide');
        $this->db->join('pinda_trx_idedetail', 'pinda_trx_idedetail.id_detail_ide = pinda_trx_ide.id_detail_ide');
        $this->db->join('pinda_user', 'pinda_user.id_user = pinda_trx_idedetail.id_user');
        $this->db->where('id_proyek', $id);
        $result = $this->db->get();
        return $result->result_array();
    }


	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_kategori', $id);
			$update = $this->db->update('pinda_kategori', $data);
			return ($update == true) ? true : false;
		}
	}

	public function removeSubmit($id)
	{
		if($id) {
			$this->db->where('id_submit', $id);
			$delete = $this->db->delete('pinda_trx_submit');
			return ($delete == true) ? true : false;
		}
	}

    public function removeApply($id)
    {
        if($id) {
            $this->db->where('id_lamar', $id);
            $delete = $this->db->delete('pinda_trx_lamar');
            return ($delete == true) ? true : false;
        }
    }

    public function removeIde($id)
    {
        if($id) {
            $this->db->where('id_ide', $id);
            $delete = $this->db->delete('pinda_trx_ide');
            return ($delete == true) ? true : false;
        }
    }

}