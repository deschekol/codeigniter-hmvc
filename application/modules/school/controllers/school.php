<?php

class School extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function get_school_name(){
        echo "<h4>K V No 1 </h4>";
    }

    public function get_school_address(){
       echo "XYZ, sample location, somewhere city, Test Country";
    }

}
?>