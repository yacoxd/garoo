<?php

    if (! isset($landing)) {
        $this->load->view('header');    
    }
    
    $this->load->view("content/".$content);
    
    if (! isset($landing)) {
        $this->load->view('footer');    
    }

/* End of file template.php */
/* Location: ./application/views/templates/template.php */
