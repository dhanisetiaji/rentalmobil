<?php
    class M_rental extends CI_Model{
        function get_data($table){
            return $this->db->get($table);
        }
        function get_data_customer($table){
            return $this->db->where('role_id', 2)->get($table);
        }
        function insert_data($data, $table){
            $this->db->insert($table, $data);
        }
        function update_data($table,$data,$where){
            $this->db->update($table,$data,$where);
        }
        // function get_data_mobil_1($table){
        //     return $this->db->where('status', 1)->get($table);
        // }
        function ambil_id_mobil($id){
            $hasil = $this->db->where('id_mobil', $id)->get('mobil');
            if($hasil->num_rows() > 0){
                return $hasil->result();
            }else{
                return false;
            }
        }
        function delete_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        function check_login(){
            $username   = set_value('username');
            $password   = set_value('password');

            $result     = $this->db
                                ->where('username', $username)
                                ->where('password', md5($password))
                                ->limit(1)
                                ->get('customer');

            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return FALSE;
            }
        }
        function update_password($table,$data,$where){
            $this->db->update($table,$data,$where);
        }
        // function update_password($where, $data, $table){
        //     $this->db->where($where);
        //     $this->db->update($table, $data);
        // }

        function download_pembayaran($id){
            $query = $this->db->get_where('transaksi', array('id_rental' => $id));
            return $query->row_array();
        }
    }
?>
