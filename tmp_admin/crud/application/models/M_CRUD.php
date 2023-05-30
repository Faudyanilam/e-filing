<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_CRUD extends CI_Model{
    public function getData(){
        $this->db->select('*');
        $this->db->from('tb_registrasi_akun');
        $query = $this->db->get();
        return $query->result();
    }
    public function insertData($data){
        $this->db->insert('tb_daftarnpwp',$data);
    }
    public function insertData2($data){
        $this->db->insert('tb_registrasi_akun',$data);
    }
    public function editData($data, $id){
        $this->db->where('id_regis', $id);
        $this->db->update('tb_registrasi_akun', $data);
    }
    public function getDataEdit($id){
        $this->db->where('id_regis', $id);
        $query = $this->db->get('tb_registrasi_akun');
        return $query->row();
    }
    public function deleteData($id){
        $this->db->where('id_regis', $id);
        $this->db->delete('tb_registrasi_akun');
    }
    public function deleteData2($npwp, $efin){
        $this->db->where('id_daftar_npwp', $npwp);
        $this->db->where('efin', $efin);
        $this->db->delete('tb_daftarnpwp');
    }
}