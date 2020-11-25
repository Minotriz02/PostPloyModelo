<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Postulation_model extends CI_Model{
    public function getWaitJobCheck($id){;
        $query= $this->db->query("select a.titleJob, a.descriptionJob, b.name1Employer, b.lastname1Employer from job_offers a inner join employer_accounts b on b.idCEmployerAccount=a.idCEmployerAccountf, postulations p, employee_accounts ea 
        where a.idJob=p.idJobf and ea.idAccountEmployee=p.idAccountEmployeeF and p.checkPostulation=1 and ea.idAccountEmployee=".$id);
        return $query->result();
    } 
    
    public function getWaitJobUnChecked($id){;
        $query= $this->db->query("select a.titleJob, a.descriptionJob, b.name1Employer, b.lastname1Employer from job_offers a inner join employer_accounts b on b.idCEmployerAccount=a.idCEmployerAccountf, postulations p, employee_accounts ea 
        where a.idJob=p.idJobf and ea.idAccountEmployee=p.idAccountEmployeeF and p.checkPostulation=0 and ea.idAccountEmployee=".$id);
        return $query->result();
    }  
    
    
}