<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['landing'] = TRUE;
        $data['content'] = 'home'; 
		$this->load->view('template', $data);
	}
    
    public function form()
	{
        $data['content'] = 'form'; 
        $data['countries'] = $this->country->dropdown('co_name');
        $data['towns'] = $this->town->dropdown('to_name');
        $data['grade_school'] = $this->grade_school->dropdown('sg_name');
        $data['area'] = $this->job->dropdown('job_name');
        $data['job_level'] = $this->job_level->dropdown('jl_name');
        $data['industry'] = $this->industry->dropdown('ind_name');
        
        if ($this->input->post()) {
            
            $values = $this->input->post();
            
            $instance = array(
                'in_time_created' => date('Y-m-d H:i:s'),  
            );
            
            $instance_id = $this->instance->insert($instance);
            
            $user_data = array (
                'us_email' => $this->input->post('email'),
                'us_age' => $this->input->post('age'),
            );
            
            $user_id = $this->user->insert($user_data);
            
            foreach ($values as $key => $value){
                
                if ($key != 'email') {
                    $val = array(
                        'va_key' => $key,
                        'va_value' => $value,
                        'va_instance' => $instance_id,  
                    );    
                }
                $this->values->insert($val);
            }
            
        }
        
		$this->load->view('template', $data);
	}
    
    public function load_select(){
        $catalog = $_GET['catalog'];
        $category = $_GET['category'];
        
        $table = $this->category->get_by(array ('tb_reference' => $catalog, 'tb_category' => $category));
        $data = $this->catalog->get_many_by(array('ca_table' => $table['tb_id']));
        
        echo '<option value="0">Seleccionar</option>';
        foreach ($data as $value) {
            echo '<option value="' . $value['ca_id'] . '"> ' . $value['ca_name'] . '</option>'; 
        }
    }

    public function stats()
    {
        $data['content'] = 'stats'; 
        $this->load->view('template', $data);
    }
}
