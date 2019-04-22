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


    public function getKontakData($id = 'kontakpinda001')
    {
        $this->db->select('*');
        $this->db->from('pinda_kontak');
        $this->db->where('id_kontak', $id);
        $result = $this->db->get();

        return $result->result_array();
    }

}