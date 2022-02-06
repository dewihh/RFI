<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Role extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        $this->load->model('Role_model', 'role');
    }

    public function index()
    {
        $data['role'] = $this->role->get_all();
        return $this->template->load('template', 'role', $data);
    }

    public function store()
    {
        $nama_role = $this->input->post('nama_role');
        $result = $this->role->insert_data(['nama_role' => $nama_role]);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'role berhasil ditambahkan!',
                'data' => $result
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'role gagal ditambahkan!'
            ];
        }

        return $this->response_json($response);
    }

    public function update()
    {
        $id_role = $this->input->post('id_role');
        $nama_role = $this->input->post('nama_role');

        $result = $this->role->update_data($id_role, ['nama_role' => $nama_role]);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'role berhasil diupdate!',
                'data' => $result
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'role gagal diupdate!'
            ];
        }

        return $this->response_json($response);
    }

    public function destroy()
    {
        $id_role = $this->uri->segment(3);
        $result = $this->role->delete_data($id_role);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'role telah dihapus!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'role gagal dihapus!'
            ];
        }

        return $this->response_json($response);
    }

    private function response_json($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\role.php */