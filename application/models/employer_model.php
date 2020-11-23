<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Employer_model extends CI_Model
{

    public function saveEmployer($data)
    {
        $this->db->insert('employer_accounts', $data);

        $idEmployer = $this->db->insert_id();
        return $idEmployer;
    }

    public function getPost($id)
    {
        $this->db->where('idCEmployerAccount', $id);
        $query = $this->db->get('employer_view');
        return $query->result();
    }

    public function iniciarSesion($correoF, $passF)
    {
        session_start();

        $this->db->where('mailEmployer', $correoF);
        $this->db->where('passwordEmployer', $passF);
        $q = $this->db->get('employer_accounts');

        if ($q->num_rows() > 0) {
            return $q;
        } else {
            return $q;
        }
    }
}
