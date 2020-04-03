<?php

/* Parent Controller for our moduler based controller */

class Message extends MY_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->module("school");
    }

    public function show_message(){
        echo "<h3>This is my simple message for this first module</h3>";
        $this->school->get_school_name();
        $this->school->get_school_address();

        $string = "online web tutor";
echo "<br><br>";
        echo $this->mystring->my_strlen($string);
echo "<br><br>";
        echo $this->mystring->my_uppercase($string);
    }

    public function simpleMessage(){
        $content['message'] = "Simple view messsage I am writing";
        $this->load->view("message/simple-message", $content);
    }

}
?>