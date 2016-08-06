<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Instance_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_instance';
    public $primary_key = 'in_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file Instance_model.php */
/* Location: ./application/models/Instance_model.php */
