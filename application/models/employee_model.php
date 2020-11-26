<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Employee_model extends CI_Model
{

    public function saveEmployee($data)
    {
        $this->db->insert('employee_accounts', $data);

        $idEmployee = $this->db->insert_id();
        return $idEmployee;
    }

    public function getEmployee($id)
    {
        $this->db->where('idAccountEmployee', $id);
        $query = $this->db->get('employee_view');
        return $query->result();
    }

    public function getJobsDoneUser($id)
    {
        $query = $this->db->query("select count(*) as cuenta from jobs_done jd, postulations p where jd.idPostulationf=p.idPostulation and p.checkPostulation=2 and p.idAccountEmployeef=".$id);
        return $query->row()->cuenta;
    }


    public function getAllEmployee()
    {
        $query = $this->db->get('employee_view');
        return $query->result();
    }

    public function getAcceptAllEmployee()
    {
        $this->db->where('checkEmployee', 1);
        $query = $this->db->get('employee_view');
        return $query->result();
    }

    public function getNoAcceptAllEmployee()
    {
        $this->db->where('checkEmployee', 0);
        $query = $this->db->get('employee_view');
        return $query->result();
    }

    public function iniciarSesion($correoF, $passF)
    {
        session_start();

        $this->db->where('mailEmployee', $correoF);
        $this->db->where('passwordEmployee', $passF);
        $this->db->where('checkEmployee', 1);
        $q = $this->db->get('employee_accounts');

        if ($q->num_rows() > 0) {
            return $q;
        } else {
            return $q;
        }
    }

    public function modificarEmployee($idEmployee, $data)
    {
        $name1Employee = $data['name1Employee'];
        $name2Employee = $data['name2Employee'];
        $lastname1Employee = $data['lastname1Employee'];
        $lastname2Employee = $data['lastname2Employee'];
        $phoneEmployee = $data['phoneEmployee'];
        $adressEmployee = $data['adressEmployee'];
        $mailEmployee = $data['mailEmployee'];
        $query = "UPDATE employee_accounts SET name1Employee = '$name1Employee', name2Employee = '$name2Employee', lastname1Employee = '$lastname1Employee',
                                               lastname2Employee = '$lastname2Employee',phoneEmployee = '$phoneEmployee',adressEmployee = '$adressEmployee', mailEmployee= '$mailEmployee'
                                               WHERE idAccountEmployee = $idEmployee";
        $this->db->query($query);
    }
}
