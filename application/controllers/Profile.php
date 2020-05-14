<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $data['title_header'] = "Profile";
        $data['title'] = "User Profile";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('template/footer');
    }

    public function ubahprofile()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tolong jangan kosongi form yang ada!</div>');
            redirect('profile/');
        } else {
            $input = $this->input->post(NULL, TRUE);
            $email = $input['email'];

            $data = [
                'username' => $input['username'],
                'alamat' => $input['alamat'],
                'kota' => $input['kota'],
                'telp' => $input['telp']
            ];

            $this->db->where('email =', $email);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dirubah!</div>');
            redirect('profile');
        }
    }

    public function ubahfotoprofile()
    {
        $data['title_header'] = "Profile";
        $data['title'] = "Ubah Foto Profile";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('profile/ubahfotoprofile', $data);
        $this->load->view('template/footer');
    }

    public function editfoto()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        // cek jika ada gambar
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path']   = './assets/image/user_profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/user_profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->where('email', $email);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has ben updated!</div>');
        redirect('profile');
    }

    public function ubahpassword()
    {
        $data['title_header'] = "Profile";
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newpassword1', 'New Password', 'required|trim|min_length[3]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', ' Confirm New Password', 'required|trim|min_length[3]|matches[newpassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('profile/ubahpassword', $data);
            $this->load->view('template/footer');
        } else {
            $curent_password = $this->input->post('currentpassword');
            $new_password = $this->input->post('newpassword1');
            if (!password_verify($curent_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
                redirect('profile/ubahpassword');
            } else {
                if ($curent_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password!</div>');
                    redirect('profile/ubahpassword');
                } else {
                    // pasword oke
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pasword Change!</div>');
                    redirect('profile');
                }
            }
        }
    }
}
