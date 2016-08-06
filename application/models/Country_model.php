<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Country_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_country';
    public $primary_key = 'co_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file role_model.php */
/* Location: ./application/models/user_model.php */
