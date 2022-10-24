<?php
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        // var_dump($data);
        $this->load->view('Data_mahasiswa_view', $data);
    }

    function hapus($mhs_id)
    {
        // echo 'hapus';
        // $mhs_id = $this->uri->segment(3);
        $this->mahasiswa->delete($mhs_id);
        redirect('Mahasiswa');
    }
}
