<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Industry_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_industry';
    public $primary_key = 'ind_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file catalog_model.php */
/* Location: ./application/models/catalog_model.php */
