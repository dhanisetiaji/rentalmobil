<?php
    class Data_type extends CI_Controller{
        function index(){
            $data['type']   = $this->m_rental->get_data('type')->result();
            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/data_type', $data);
            $this->load->view('t_admin/footer');
        }
        function tambah_type(){
            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/form_tambah_type');
            $this->load->view('t_admin/footer');
        }
        function tambah_type_aksi(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->tambah_type();
            }else{
                $kode_type      = $this->input->post('kode_type');
                $nama_type      = $this->input->post('nama_type');

                $data   =   array(
                    'kode_type'          => $kode_type,
                    'nama_type'          => $nama_type,

                );
                $this->m_rental->insert_data($data, 'type');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_type');
            }
        }
        function update_type($id){
            $where          = array('id_type' => $id);
            $data['type']  = $this->db->query("SELECT * FROM type WHERE type.id_type = '$id'")->result();

            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/form_update_type', $data);
            $this->load->view('t_admin/footer');
        }
        function update_type_aksi(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->update_type();
            }else{
                $id         = $this->input->post("id_type");
                $kode_type  = $this->input->post('kode_type');
                $nama_type  = $this->input->post('nama_type');
                
                $data   =   array(
                    'kode_type'     => $kode_type,
                    'nama_type'     => $nama_type,


                );
                $where      = array('id_type' => $id);
                $this->m_rental->update_data('type', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Type Berhasil diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_type');
            }
        }
        function delete_type($id){
            $where = array('id_type'   =>  $id);
            $this->m_rental->delete_data($where, 'type');
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data type Berhasil dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_type');
        }

        function _rules(){
            $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
            $this->form_validation->set_rules('nama_type', 'Status', 'required');
        }
    }
?>