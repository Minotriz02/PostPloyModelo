<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Moderator_model extends CI_Model
{

    public function saveModerator($data)
    {
        $this->db->insert('moderators', $data);

        $idEmployee = $this->db->insert_id();
        return $idEmployee;
    }
    
    public function getModerator($id)
    {
        $this->db->where('idModerator', $id);
        $query = $this->db->get('moderator_view');
        return $query->result();
    }

    public function iniciarSesion($correoF, $passF)
    {
        session_start();

        $this->db->where('mailModerator', $correoF);
        $this->db->where('moderatorPassword', $passF);
        $q = $this->db->get('moderators');

        if ($q->num_rows() > 0) {
            return $q;
        } else {
            return $q;
        }
    }
}