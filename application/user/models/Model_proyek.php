<?php 

class Model_proyek extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getProyekBerhasil() {
        $this->db->select('*');
        $this->db->from('pinda_proyek');
        $this->db->where('status_proyek',2 );
        $result = $this->db->get();

        return $result->num_rows();
    }

   public function getTotalSubmitIde() {
	    $this->db->select('*');
	    $this->db->from('pinda_trx_ide');
       $result = $this->db->get();

       return $result->num_rows();
   }

   public function getTotalLamar()
   {
       $this->db->select('*');
       $this->db->from('pinda_trx_lamar');
       $result = $this->db->get();

       return $result->num_rows();
   }

   public function getTotalSubmitDesain(){

	    $this->db->select('*');
	    $this->db->from('pinda_trx_submit');
       $result = $this->db->get();

       return $result->num_rows();

   }

}