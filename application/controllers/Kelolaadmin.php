<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelolaadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */


    public function index()
    {
        $data['title_header'] = "Kelola Admin";
        $data['title'] = "Tambah Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->get('user')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('kelolaadmin/daftar', $data);
        $this->load->view('template/footer');
    }

    public function detailadmin($id_user)
    {
        $data['title_header'] = "Profile";
        $data['title'] = "User Profile";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->where('id_user =', $id_user);
        $data['admin'] = $this->db->get('user')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('template/footer');
    }

    public function kelolaadmin()
    {

        $data['title_header'] = "Kelola Admin";
        $data['title'] = "Kelola Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->where('id_user !=', 1);
        $data['admin'] = $this->db->get('user')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('kelolaadmin/kelolaadmin', $data);
        $this->load->view('template/footer');
    }

    public function matikanakun($id_user)
    {
        $data = [
            'is_active' => '0'
        ];

        $this->db->where('id_user =', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun telah dinonaktifkan!</div>');
        redirect('kelolaadmin/kelolaadmin');
    }

    public function aktifkanakun($id_user)
    {
        $data = [
            'is_active' => '1'
        ];

        $this->db->where('id_user =', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun telah diaktifkan kembali!</div>');
        redirect('kelolaadmin/kelolaadmin');
    }

    public function roleadmin($id_user)
    {
        $data['title_header'] = "Kelola Admin";
        $data['title'] = "Kelola Admin";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->where('id_user =', $id_user);
        $data['admin'] = $this->db->get('user')->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('kelolaadmin/roleadmin', $data);
        $this->load->view('template/footer');
    }

    public function ubahrole($id_user)
    {
        $input = $this->input->post(NULL, TRUE);
        $roletitle = $input['role_title'];
        $roleid = $this->db->where('role_title =', $roletitle);
        $roleid = $this->db->get('user_role')->row_array();

        $data = [
            'role_id' => $roleid['id']
        ];

        $this->db->where('id_user =', $id_user);
        $this->db->update('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Admin telah diganti!</div>');
        redirect('kelolaadmin/kelolaadmin');
    }

    public function hapusadmin($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Admin berhasil di hapus!</div>');
        redirect('kelolaadmin/kelolaadmin');
    }
}
