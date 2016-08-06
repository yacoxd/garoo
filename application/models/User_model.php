<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class User_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_user';
    public $primary_key = 'us_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
