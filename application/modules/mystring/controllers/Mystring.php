<?php

/* Parent Controller for our moduler based controller */

class Mystring extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function my_strlen($string){
        return strlen($string);
    }

    public function my_uppercase($string){
        return strtoupper($string);
    }

}
?>