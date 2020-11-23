<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Employee extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("employee_model");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if(isset($_POST['passwordEmployee'])){
            $this->load->model('employee_model');
            $q = $this->employee_model->iniciarSesion($_POST['mailEmployee'],$_POST['passwordEmployee']);
            if($q->num_rows()>0){
                $resultado = $q->result();
                foreach($resultado as $emp){
                    echo $emp->idAccountEmployee;
                    redirect('employee/indexDash/'.$emp->idAccountEmployee);

                }  
            }else{
                redirect('employee');
            }
        }
        
        $this->load->view('login');
    }

    public function indexReg()
    {
        $this->load->view('employee_form');
    }

    public function indexDash($id_usu)
    {
        //$result=$this->db->get('employee_view');
        //$data=array('consulta'=>$result);
        $employee=$this->employee_model->getPost($id_usu);
        $this->load->view('employee_dash',compact('employee'));
    }

    public function employee_form(){
        
        //Se configuran los datos de la imagen para la libreria
        $mi_archivo = 'photo';
        $config['upload_path'] = "uploads/";
        $config['file_path'] = "uploads/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data= "uploads/".$this->upload->data('file_name');

        $save=array(
            'name1Employee' =>  $this->input->post('name1Employee'),
            'lastname2Employee' =>  $this->input->post('lastname2Employee'),
            'name2Employee' =>  $this->input->post('name2Employee'),
            'lastname1Employee' =>  $this->input->post('lastname1Employee'),
            'phoneEmployee' =>  $this->input->post('phoneEmployee'),
            'adressEmployee' =>  $this->input->post('adressEmployee'),
            'mailEmployee' =>  $this->input->post('mailEmployee'),
            'photoEmployee' =>  $data,
            'passwordEmployee' =>  $this->input->post('passwordEmployee')
        );

        $this->employee_model->saveEmployee($save);

        redirect('employee/index');
    }

    public function login(){
        $correoF = $this->input->post('mailEmployee');
        $passF =  $this->input->post('passwordEmployee');
        $this->employee_model->consultarEmployee($correoF);
        $t=$this->employee_model->iniciarSesion($correoF, $passF);

        if($t==true){
            redirect('employee/indexDash');
            echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
        }else if($t==false){
            redirect('employee/index');
            echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
        }
        echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
    }
}
