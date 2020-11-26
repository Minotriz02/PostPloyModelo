<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Ranking_model extends CI_Model
{
    public function getRanking($id)
    {
        $query = $this->db->query("select ROUND(AVG(Qualification) ,1) as rank from rankings ra where ra.idAccountEmployeef2=".$id);
        return $query->row()->rank;
    }
}