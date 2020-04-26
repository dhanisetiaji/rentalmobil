<?php
    class ErrorPage extends CI_Controller{
        public function index(){
            $this->output->set_status_header('404');
            $this->load->view('notfoundview');
        }
    }
?>