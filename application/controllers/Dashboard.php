<?php 
    class Dashboard extends CI_Controller{
        function index(){
            $data['mobil'] = $this->m_rental->get_data('mobil')->result();
            $this->load->view('t_customer/header');
            $this->load->view('customer/dashboard', $data);
            $this->load->view('t_customer/footer');
            
        }
    }
?>