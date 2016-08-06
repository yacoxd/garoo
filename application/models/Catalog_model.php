<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Catalog_model extends MY_Model {

    /**
     * Overloads default parameters
     */
    public $_table = 'go_catalog';
    public $primary_key = 'ca_id';
    public $return_type = 'array';

    public function __construct() {

        parent::__construct();
    }
    
   

}

/* End of file catalog_model.php */
/* Location: ./application/models/catalog_model.php */
