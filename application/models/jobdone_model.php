<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Jobdone_model extends CI_Model{

    public function getJobsDone($id){;
        $query= $this->db->query("select distinct a.titleJob,a.descriptionJob,a.payForJob,b.nameCategory from job_offers a inner join categories b on b.idCategory=a.idCategoryf, postulations p, employee_accounts ea, jobs_done jd
         where p.idPostulation=jd.idPostulationf and a.idJob=p.idJobf and ea.idAccountEmployee=p.idAccountEmployeeF and p.checkPostulation=2 and ea.idAccountEmployee=".$id);
        return $query->result();
    }
}