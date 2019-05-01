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

   public function getAllProyekData() {

	    $this->db->select('*');
	    $this->db->from('pinda_proyek');
	    $this->db->join('pinda_kategori', 'pinda_kategori.id_kategori = pinda_proyek.id_kategori');
	    $this->db->join('pinda_user', 'pinda_user.id_user=pinda_proyek.id_user');
        $result = $this->db->get();

       return $result->result_array();

   }


   public function getTotalLamarProyek($id)
   {
       $this->db->select('*');
       $this->db->from('pinda_trx_lamar');
       $this->db->where('id_proyek', $id);
       $result = $this->db->get();

       return $result->num_rows();
   }

   public function getTotalIdeProyek($id)
   {
       $this->db->select('*');
       $this->db->from('pinda_trx_ide');
       $this->db->where('id_proyek', $id);
       $result = $this->db->get();

       return $result->num_rows();
   }

   public function getTotalDesainProyek($id)
   {
       $this->db->select('*');
       $this->db->from('pinda_trx_submit');
       $this->db->where('id_proyek', $id);
       $result = $this->db->get();

       return $result->num_rows();
   }


   public function getDetailProyek($id)
   {
       $this->db->select('*');
       $this->db->from('pinda_proyek');
       $this->db->where('id_proyek', $id);
       $result = $this->db->get();


       return $result->result();
   }

   public function getTotalTerimaUser($id)
   {
       $this->db->select('*');
       $this->db->from('pinda_trx_lamar');
       $this->db->where('id_proyek', $id);
       $this->db->where('status', 2);
       $result = $this->db->get();


       return $result->num_rows();
   }

}