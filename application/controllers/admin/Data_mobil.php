<?php
    class Data_mobil extends CI_Controller{
        function index(){
            if($this->session->userdata('nama')){
                $data['mobil']  = $this->m_rental->get_data('mobil')->result();
                $data['type']   = $this->m_rental->get_data('type')->result();
                $this->load->view('t_admin/header');
                $this->load->view('t_admin/navbar');
                $this->load->view('t_admin/sidebar');
                $this->load->view('admin/data_mobil', $data);
                $this->load->view('t_admin/footer');
            }else{
                redirect('');
			}
            
        }
        function tambah_mobil(){
            if($this->session->userdata('nama')){
                $data['type']   = $this->m_rental->get_data('type')->result();
                $this->load->view('t_admin/header');
                $this->load->view('t_admin/navbar');
                $this->load->view('t_admin/sidebar');
                $this->load->view('admin/form_tambah_mobil', $data);
                $this->load->view('t_admin/footer');
            }else{
                redirect('');
			}
            
        }
        function tambah_mobil_aksi(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->tambah_mobil();
            }else{
                $kode_type  = $this->input->post('kode_type');
                $merk       = $this->input->post('merk');
                $no_plat    = $this->input->post('no_plat');
                $warna      = $this->input->post('warna');
                $tahun      = $this->input->post('tahun');
                $status     = $this->input->post('status');
                $harga      = $this->input->post('harga');
                $denda      = $this->input->post('denda');
                $ac         = $this->input->post('ac');
                $supir      = $this->input->post('supir');
                $auto       = $this->input->post('auto');
                $diesel     = $this->input->post('diesel');
                $gambar     = $_FILES['gambar']['name'];
                if($gambar=''){

                }else{
                    $config['upload_path']      =   './assets/upload';
                    $config['allowed_types']    =   'gif|jpg|jpeg|png|tiff'; 

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('gambar')){
                        echo "Gambar Mobil gagal diupload";
                    }else{
                        $gambar     = $this->upload->data('file_name');

                    }
                }
                $data   =   array(
                    'kode_type'     => $kode_type,
                    'merk'          => $merk,
                    'no_plat'       => $no_plat,
                    'warna'         => $warna,
                    'tahun'         => $tahun,
                    'status'        => $status,
                    'harga'         => $harga,
                    'denda'         => $denda,
                    'ac'            => $ac,
                    'supir'         => $supir,
                    'auto'          => $auto,
                    'diesel'        => $diesel,
                    'gambar'        => $gambar,

                );
                $this->m_rental->insert_data($data, 'mobil');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_mobil');
            }
        }

        function update_mobil($id){
            // if($this->session->userdata('nama')){
                $where          = array('id_mobil' => $id);
                $data['mobil']  = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil = '$id'")->result();
                $data['type']   = $this->m_rental->get_data('type')->result();

                $this->load->view('t_admin/header');
                $this->load->view('t_admin/navbar');
                $this->load->view('t_admin/sidebar');
                $this->load->view('admin/form_update_mobil', $data);
                $this->load->view('t_admin/footer');
            // }else{
            //     redirect('');
			// }
            
        }

        function update_mobil_aksi(){
            $this->_rules();
            $id         = $this->input->post("id_mobil");

            if($this->form_validation->run() == FALSE){
                $this->update_mobil($id);
            }else{
                
                $kode_type  = $this->input->post('kode_type');
                $merk       = $this->input->post('merk');
                $no_plat    = $this->input->post('no_plat');
                $warna      = $this->input->post('warna');
                $tahun      = $this->input->post('tahun');
                $status     = $this->input->post('status');
                $harga      = $this->input->post('harga');
                $denda      = $this->input->post('denda');
                $ac         = $this->input->post('ac');
                $supir      = $this->input->post('supir');
                $auto       = $this->input->post('auto');
                $diesel     = $this->input->post('diesel');
                $gambar     = $_FILES['gambar']['name'];
                if($gambar){
                    $config['upload_path']      =   './assets/upload';
                    $config['allowed_types']    =   'gif|jpg|jpeg|png|tiff'; 

                    $this->load->library('upload', $config);

                    // if(!$this->upload->do_upload('gambar')){
                    //     echo "Gambar Mobil gagal diupload";
                    // }else{
                    //     $gambar     = $this->upload->data('file_name');
                    // }
                    if($this->upload->do_upload('gambar')){
                        $gambar=$this->upload->data('file_name');
                        $this->db->set('gambar', $gambar);
                    }else{
                        echo $this->upload->display_errors();
                    }
                }
                $data   =   array(
                    'kode_type'     => $kode_type,
                    'merk'          => $merk,
                    'no_plat'       => $no_plat,
                    'warna'         => $warna,
                    'tahun'         => $tahun,
                    'status'        => $status,
                    'harga'         => $harga,
                    'denda'         => $denda,
                    'ac'            => $ac,
                    'supir'         => $supir,
                    'auto'          => $auto,
                    'diesel'        => $diesel


                );
                $where      = array('id_mobil' => $id);
                $this->m_rental->update_data('mobil', $data, $where);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil Berhasil diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_mobil');
            }
        }

        function detail_mobil($id){
            $data['detail'] = $this->m_rental->ambil_id_mobil($id);
            $this->load->view('t_admin/header');
            $this->load->view('t_admin/navbar');
            $this->load->view('t_admin/sidebar');
            $this->load->view('admin/detail_mobil', $data);
            $this->load->view('t_admin/footer');
        }

        function delete_mobil($id){
            $where = array('id_mobil'   =>  $id);
            $this->m_rental->delete_data($where, 'mobil');
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Mobil Berhasil dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('admin/data_mobil');
        }
        
        function _rules(){
            $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
            $this->form_validation->set_rules('merk', 'Merk', 'required');
            $this->form_validation->set_rules('no_plat', 'No Plat', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun', 'required');
            $this->form_validation->set_rules('warna', 'Warna', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('ac', 'AC', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('denda', 'Denda', 'required');
            $this->form_validation->set_rules('supir', 'Supir', 'required');
            $this->form_validation->set_rules('diesel', 'Diesel', 'required');
            $this->form_validation->set_rules('auto', 'Transmisi', 'required');
        }

    }
?>