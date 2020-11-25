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

    public function modificarModerator($idModerator, $data)
    {
        $moderatorAccount = $data['moderatorAccount'];
        $moderatorPhoneNumber = $data['moderatorPhoneNumber'];
        $mailModerator = $data['mailModerator'];
        $query = "UPDATE moderators SET moderatorAccount = '$moderatorAccount', moderatorPhoneNumber = '$moderatorPhoneNumber', mailModerator = '$mailModerator'
                                               WHERE idModerator  = $idModerator";
        $this->db->query($query);
    }
}