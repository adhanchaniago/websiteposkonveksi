<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title_header'] = "Dashboard";
        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
    }

    public function tambahadmin()
    {
        $data['title_header'] = "Dashboard";
        $data['title'] = "Tambah Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->get('user')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/daftar', $data);
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
        $data['title_header'] = "Dashboard";
        $data['title'] = "Kelola Admin";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['admin'] = $this->db->where('id_user !=', 1);
        $data['admin'] = $this->db->get('user')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/kelolaadmin', $data);
        $this->load->view('template/footer');
    }

    public function manajemensistem()
    {
        $data['title_header'] = "Dashboard";
        $data['title'] = "Manajemen Sistem";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/manajemensistem', $data);
        $this->load->view('template/footer');
    }

    public function kelolamenu($id)
    {
        $data['title_header'] = "Dashboard";
        $data['title'] = "Manajemen Sistem";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->where('id =', $id);
        $data['role'] = $this->db->get('user_role')->row_array();

        $data['menu'] = $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('dashboard/kelolamenu', $data);
        $this->load->view('template/footer');
    }

    public function ubahakses()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses telah berubah!</div>');
    }


    public function tambahrole()
    {
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $data['title_header'] = "Dashboard";
            $data['title'] = "Manajemen Sistem";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $data['admin'] = $this->db->get('user')->result_array();

            $this->load->view('template/header', $data);
            $this->load->view('dashboard/tambahrole', $data);
            $this->load->view('template/footer');
        } else {
            $input = $this->input->post(NULL, TRUE);

            $data = [
                'role_title' => $input['role']
            ];

            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Telah dibuat!</div>');
            redirect('dashboard/manajemensistem');
        }
    }
}
