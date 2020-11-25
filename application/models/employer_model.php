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

    public function getEmployer($id)
    {
        $this->db->where('idCEmployerAccount', $id);
        $query = $this->db->get('employer_view');
        return $query->result();
    }

    public function modificarEmployer($idEmployer, $data)
    {
        $name1Employer = $data['name1Employer'];
        $name2Employer = $data['name2Employer'];
        $lastname1Employer = $data['lastname1Employer'];
        $lastname2Employer = $data['lastname2Employer'];
        $phoneEmployer = $data['phoneEmployer'];
        $adressEmployer = $data['adressEmployer'];
        $mailEmployer = $data['mailEmployer'];
        $query = "UPDATE employer_accounts SET name1Employer = '$name1Employer', name2Employer = '$name2Employer', lastname1Employer = '$lastname1Employer',
                                               lastname2Employer = '$lastname2Employer',phoneEmployer = '$phoneEmployer',adressEmployer = '$adressEmployer', mailEmployer= '$mailEmployer'
                                               WHERE idCEmployerAccount = $idEmployer";
        $this->db->query($query);
    }
}
