<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Desc extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
    }

    public function index()
    {
        return $this->template->load('template', 'desc/index');
    }

    public function create()
    {
        return $this->template->load('template', 'desc/create');
    }

    public function edit()
    {
        return $this->template->load('template', 'desc/edit');
    }

}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Karyawan.php */