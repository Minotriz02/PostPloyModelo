<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Category_model extends CI_Model{

    public function agregarCategoria($data)
    {
        $this->db->insert('categories', $data);
    }

}