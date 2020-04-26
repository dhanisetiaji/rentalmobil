<?php 
    class Welcome extends CI_Controller{
        function index(){
            // if($this->session->userdata('nama')){
            //     redirect('customer/dashboard');
            // }else{
            //     redirect('');
			// }
			$this->load->view('welcome_message');
        }
    }
?>