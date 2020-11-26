<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Job_offer_model extends CI_Model
{
    public function getJobOffers(){
        $query= $this->db->query("select a.idJob, a.idModeratorf, a.idCEmployerAccountf, a.idCategoryf, a.titleJob, a.descriptionJob,a.payForJob, b.idCategory, b.nameCategory 
        from job_offers a inner join categories b on a.idCategoryf=b.idCategory");
        return $query->result();
    }

    public function myJobsEmployer($id_usu){
        $query= $this->db->query("select titleJob, descriptionJob, payForJob from job_offers jo, employer_accounts ea 
        where jo.idCEmployerAccountf=ea.idCEmployerAccount and ea.idCEmployerAccount=".$id_usu);
        return $query->result();
    }

    public function getApplicants($id_usu){
<<<<<<< HEAD
        //$query= $this->db->query("select name1Employee, lastname1Employee from employee_accounts ea, employer_accounts ra, postulations p, job_offers jo
        //where ea.idAccountEmployee=p.idAccountEmployeef and ra.idCEmployerAccount=p.idCEmployerAccountf2 and jo.idJob=p.idJobf and idCEmployerAccount=".$id_usu." and jo.idJob=".$id_job);
        $query=$this->db->query("select jo.titleJob, jo.descriptionJob, jo.payForJob, yee.name1Employee, yee.lastname1Employee from employer_accounts ea, job_offers jo , postulations p RIGHT JOIN employee_accounts yee on yee.idAccountEmployee=p.idAccountEmployeef 
=======
        $query= $this->db->query("select jo.titleJob, jo.descriptionJob, jo.payForJob, yee.idAccountEmployee, yee.name1Employee, yee.name2Employee, yee.lastname1Employee, yee.lastname2Employee, yee.photoEmployee from employer_accounts ea, job_offers jo , postulations p RIGHT JOIN employee_accounts yee on yee.idAccountEmployee=p.idAccountEmployeef 
>>>>>>> 03b71aba69bb0856845b5b2ed0b92a14d20ea670
        where jo.idJob=p.idJobf and ea.idCEmployerAccount=p.idCEmployerAccountf2 and ea.idCEmployerAccount=".$id_usu);
        return $query->result();
    }

    public function getAcceptJobOffers()
    {
        $query= $this->db->query("select a.idJob, a.idModeratorf, a.idCEmployerAccountf, a.idCategoryf, a.titleJob, a.descriptionJob,a.payForJob, b.idCategory, b.nameCategory 
        from job_offers a inner join categories b on a.idCategoryf=b.idCategory where a.checkJob=1");
        return $query->result();
    }

    public function getAcceptNoApplyJobOffers()
    {
        $query= $this->db->query("CALL acceptNoAplyJobs()");
        $q=$query->result();
        $query->next_result(); 
        $query->free_result();   
        return $q;
    }

    public function getNoAcceptJobOffers()
    {
        $query= $this->db->query("select a.idJob, a.idModeratorf, a.idCEmployerAccountf, a.idCategoryf, a.titleJob, a.descriptionJob,a.payForJob, b.idCategory, b.nameCategory 
        from job_offers a inner join categories b on a.idCategoryf=b.idCategory where a.checkJob=0");
        return $query->result();
    }

    public function agregarTrabajo($data)
    {
        $this->db->insert('job_offers', $data);
    }
}
