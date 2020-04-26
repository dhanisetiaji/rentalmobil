<?php 
    class Dashboard extends CI_Controller{
        function index(){
            if($this->session->userdata('nama')){
                $this->load->view('t_admin/header');
                $this->load->view('t_admin/navbar');
                $this->load->view('t_admin/sidebar');
                $this->load->view('admin/dashboard');
                $this->load->view('t_admin/footer');
            }else{
                redirect('');
			}
            
        }
    }
?>