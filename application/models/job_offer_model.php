<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Job_offer_model extends CI_Model
{
    public function getJobOffers(){
        $query= $this->db->query("select a.titleJob, a.descriptionJob,a.payForJob, b.nameCategory from job_offers a inner join categories b");
        return $query->result();
    }
}