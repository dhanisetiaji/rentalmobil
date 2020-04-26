<?php 
    class Auth extends CI_Controller{
        function login(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->load->view('form_login');
            }else{
                $username       = $this->input->post('username');
                $password       = MD5($this->input->post('password'));

                $check          = $this->m_rental->check_login($username, $password);
                // var_dump($check);
                // die();
                if($check == FALSE){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Username/password salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('auth/login');
                }else{
                    $this->session->set_userdata('username', $check->username);
                    $this->session->set_userdata('role_id', $check->role_id);
                    $this->session->set_userdata('id_customer', $check->id_customer);
                    $this->session->set_userdata('nama', $check->nama);
                    
                    switch ($check->role_id){
                        case 1:
                            redirect('admin/dashboard');
                        break;
                        case 2:
                            redirect('/dashboard');
                        break;

                        default: break;
                    }
                }
            }
            
        }
        function ganti_password(){
            if($this->session->userdata('nama')){
                $this->load->view('ganti_password');
            }else{
                redirect('');
            }
            
        }

        

        function _rules(){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        }

        function logout(){
            $this->session->sess_destroy();
            redirect('/dashboard');
        }
        function ganti_password_aksi(){
            // $id             = $this->session->userdata('id_customer');
            $pass_baru      = $this->input->post('pass_baru');
            $ulang_pass     = $this->input->post('ulang_pass');

            $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
            $this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('ganti_password');
            }else{
                
                $data   = array('password'      => md5($ulang_pass));
                $where     = array('id_customer'   => $this->session->userdata('id_customer'));
                // var_dump($where);
                // die();

                
                $this->m_rental->update_password('customer', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Password berhasil diupdate, Silahkan Login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('auth/login');
            }
            
            
        }
    }
?>