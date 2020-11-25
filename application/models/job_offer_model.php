<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Job_offer_model extends CI_Model
{
    public function getJobOffers()
    {
        $query= $this->db->query("select a.idJob, a.idModeratorf, a.idCEmployerAccountf, a.idCategoryf, a.titleJob, a.descriptionJob,a.payForJob, b.idCategory, b.nameCategory 
        from job_offers a inner join categories b on a.idCategoryf=b.idCategory");
        return $query->result();
    }

    public function getAcceptJobOffers()
    {
        $query= $this->db->query("select a.idJob, a.idModeratorf, a.idCEmployerAccountf, a.idCategoryf, a.titleJob, a.descriptionJob,a.payForJob, b.idCategory, b.nameCategory 
        from job_offers a inner join categories b on a.idCategoryf=b.idCategory where a.checkJob=1");
        return $query->result();
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
