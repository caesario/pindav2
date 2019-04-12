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


    // Model Testimoni

    public function getTestimoniData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_testimoni WHERE id_testimoni= ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_testimoni";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function removetesti($id)
    {
        if($id) {
            $this->db->where('id_testimoni', $id);
            $delete = $this->db->delete('pinda_testimoni');
            return ($delete == true) ? true : false;
        }
    }

    public function updatetesti($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_testimoni', $id);
            $update = $this->db->update('pinda_testimoni', $data);
            return ($update == true) ? true : false;
        }
    }

    // End Model testimoni


    // Start FAQ
    public function getfaqData($id = null)
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

    public function removefaq($id)
    {
        if($id) {
            $this->db->where('id_faq', $id);
            $delete = $this->db->delete('pinda_faq');
            return ($delete == true) ? true : false;
        }
    }

    public function createfaq($data)
    {
        if($data) {
            $insert = $this->db->insert('pinda_faq', $data);
            return ($insert == true) ? true : false;
        }
    }

    public function updatefaq($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_faq', $id);
            $update = $this->db->update('pinda_faq', $data);
            return ($update == true) ? true : false;
        }
    }
    // END FAQ


    // Start Kontak
    public function getKontakData($id = null)
    {
        if($id) {
            $sql = "SELECT * FROM pinda_kontak WHERE id_kontak= ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }

        $sql = "SELECT * FROM pinda_kontak";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function updatekontak($data, $id)
    {
        if($data && $id) {
            $this->db->where('id_kontak', $id);
            $update = $this->db->update('pinda_kontak', $data);
            return ($update == true) ? true : false;
        }
    }
    // END Kontak

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






	public function remove($id)
	{
		if($id) {
			$this->db->where('id_artikel', $id);
			$delete = $this->db->delete('pinda_artikel');
			return ($delete == true) ? true : false;
		}
	}

}