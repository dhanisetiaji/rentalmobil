<?php 
    class Data_mobil extends CI_Controller{
        function index(){
            $data['mobil'] = $this->m_rental->get_data('mobil')->result();
            $this->load->view('t_customer/header');
            $this->load->view('customer/data_mobil', $data);
            $this->load->view('t_customer/footer');
            
        }
        function detail_mobil($id){
            $data['detail'] = $this->m_rental->ambil_id_mobil($id);
            $this->load->view('t_customer/header');
            $this->load->view('customer/detail_mobil', $data);
            $this->load->view('t_customer/footer');
        }
    }
?>