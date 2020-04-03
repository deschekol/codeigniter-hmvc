<?php

/* Parent Controller for our moduler based controller */

class MY_Controller extends MX_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->module(array("school","mystring"));
    }

}
?>