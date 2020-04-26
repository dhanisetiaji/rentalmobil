<?php
    class Transaksi extends CI_Controller{
        function index(){
            $data['transaksi']   = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer ORDER BY id_rental DESC")->result();
            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/data_transaksi', $data);
            $this->load->view('t_admin/footer');
        }
        function pembayaran($id){
            $where = array(
                'id_rental'     =>$id
            );
            $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();
            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/konfirmasi_pembayaran', $data);
            $this->load->view('t_admin/footer');
        }
        function cek_pembayaran(){
            $id     = $this->input->post('id_rental');
            $status_pembayaran     = $this->input->post('status_pembayaran');

            $data = array(
                'status_pembayaran' => $status_pembayaran,

            );
            $where = array('id_rental' => $id);
            $this->m_rental->update_data('transaksi', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/transaksi');
            
        }
        function download_pembayaran($id){
            $this->load->helper('download');
            $file_pembayaran = $this->m_rental->download_pembayaran($id);
            $file = './assets/bukti/'.$file_pembayaran['bukti_pembayaran'];
            force_download($file, NULL);
        }
    }
?>