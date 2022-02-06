<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Fabrication extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
    }

    public function index()
    {
        return $this->template->load('template', 'fabrication/index');
    }

    public function create()
    {
        return $this->template->load('template', 'fabrication/create');
    }

    public function edit()
    {
        return $this->template->load('template', 'fabrication/edit');
    }

}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Karyawan.php */