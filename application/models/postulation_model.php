<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Postulation_model extends CI_Model{
    public function getWaitJobCheck($id){;
        $query= $this->db->query("select a.titleJob, a.descriptionJob, b.name1Employer, b.lastname1Employer from job_offers a right join employer_accounts b on b.idCEmployerAccount=a.idCEmployerAccountf, postulations p, employee_accounts ea 
        where a.idJob=p.idJobf and ea.idAccountEmployee=p.idAccountEmployeeF and p.checkPostulation=1 and ea.idAccountEmployee=".$id);
        return $query->result();
    } 
    
    public function getWaitJobUnChecked($id){;
        $query= $this->db->query("select a.titleJob, a.descriptionJob, b.name1Employer, b.lastname1Employer from job_offers a right join employer_accounts b on b.idCEmployerAccount=a.idCEmployerAccountf, postulations p, employee_accounts ea 
        where a.idJob=p.idJobf and ea.idAccountEmployee=p.idAccountEmployeeF and p.checkPostulation=0 and ea.idAccountEmployee=".$id);
        return $query->result();
    }  
    
    public function createPostulation($idemployee,$data){
        $idJob = $data['idJob'];
        $idCEmployerAccountf = $data['idCEmployerAccountf'];
        //$insert = array(
            //'idAccountEmployeef' => $idemployee,
            //'idJobf' => $data['idJob'],
            //'idCEmployerAccountf2' => $data['idCEmployerAccountf'],
            //'checkPostulation' => 0
        //);
        //$this->db->insert('postulations', $insert);
        $query = $this->db->query("insert into postulations (idAccountEmployeef,idJobf,idCEmployerAccountf2,textPostulation,dateEnd,checkPostulation) 
        values (".$idemployee.",".$idJob.",".$idCEmployerAccountf.",'test','2020-11-24 12:34:12',0)");
        return $query->result();

    }
}