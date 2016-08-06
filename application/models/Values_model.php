<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Values_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_values';
    public $primary_key = 'va_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file Values_model.php */
/* Location: ./application/models/Values_model.php */
