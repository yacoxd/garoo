<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Town_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_town';
    public $primary_key = 'to_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file town_model.php */
/* Location: ./application/models/town_model.php */
