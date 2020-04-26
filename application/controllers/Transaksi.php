<?php
    class Transaksi extends CI_Controller{
        function index(){
            $customer = $this->session->userdata('id_customer');
            $data['transaksi']   = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_customer='$customer' ORDER BY id_rental ASC")->result();
            $this->load->view('t_customer/header');
            $this->load->view('customer/transaksi', $data);
            $this->load->view('t_customer/footer');
        }
        function pembayaran($id){

            $data['transaksi']   = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id' ORDER BY id_rental ASC")->result();
            $this->load->view('t_customer/header');
            $this->load->view('customer/pembayaran', $data);
            $this->load->view('t_customer/footer');
        }
        function pembayaran_aksi(){
            $id                 = $this->input->post('id_rental');
            $bukti_pembayaran     = $_FILES['bukti_pembayaran']['name'];
                if($bukti_pembayaran){
                    $config['upload_path']      =   './assets/bukti';
                    $config['allowed_types']    =   'gif|jpg|jpeg|png|tiff'; 

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('bukti_pembayaran')){
                        $bukti_pembayaran=$this->upload->data('file_name');
                        $this->db->set('bukti_pembayaran', $bukti_pembayaran);
                    }else{
                        echo $this->upload->display_errors();
                    }
                }
            $data = array(
                'bukti_pembayaran'  => $bukti_pembayaran,
                
            );
            $where = array(
                'id_rental' => $id,
            );
            $this->m_rental->update_data('transaksi', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Bukti Pembayaran Anda berhasil diupload!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('transaksi');
        }
        function cetak_invoice($id){
            $data['transaksi']   = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND tr.id_rental='$id' ORDER BY id_rental ASC")->result();
            $this->load->view('customer/cetak_invoice', $data);
        }
        
    }
?>