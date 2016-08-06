<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Grade_school_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_school_grade';
    public $primary_key = 'sg_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file role_model.php */
/* Location: ./application/models/user_model.php */
