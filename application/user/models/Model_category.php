<?php 

class Model_category extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getCategoryData()
    {
       $this->db->select('*');
       $this->db->from('pinda_kategori');
        $this->db->order_by('CreateTime', 'asc');
       $this->db->join('pinda_iconkategori', 'pinda_iconkategori.id_icon = pinda_kategori.icon');
       $this->db->limit(8);


       $result = $this->db->get();

       return $result->result();
    }


    public function getCategoryDataAll() {
        $this->db->select('*');
        $this->db->from('pinda_kategori');
        $this->db->order_by('CreateTime', 'asc');
        $this->db->join('pinda_iconkategori', 'pinda_iconkategori.id_icon = pinda_kategori.icon');


        $result = $this->db->get();

        return $result->result();
    }


}