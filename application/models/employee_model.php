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

    public function getPost(){
        $this->db->where('idAccountEmployee',26);
        $query= $this->db->get('employee_view');
        return $query->result();
    }


    public function iniciarSesion($correoF, $passF)
    {
        session_start();

        $this->db->where('mailEmployee',$correoF);
        $this->db->where('passwordEmployee',$passF);
        $q=$this->db->get('employee_accounts');
        $resultado=$q->result();
        foreach($resultado as $ide){
            $ide->idAccountEmployee;
        }

        //$this->employee->getPost($ide);

        if($q->num_rows()>0){
            return $q;
        }else{
            return false;
        }
    }
}
