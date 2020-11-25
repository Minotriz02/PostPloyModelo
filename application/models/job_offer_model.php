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

    public function getApplicants($id_usu,$id_job){
        $query= $this->db->query("select name1Employee, lastname1Employee from employee_accounts ea, employer_accounts ra, postulations p, job_offers jo
        where ea.idAccountEmployee=p.idAccountEmployeef and ra.idCEmployerAccount=p.idCEmployerAccountf2 and jo.idJob=p.idJobf and idCEmployerAccount=".$id_usu." and jo.idJob=".$id_job);
        return $query->result();
    }
}