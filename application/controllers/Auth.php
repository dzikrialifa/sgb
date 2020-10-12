<?php
class Auth extends CI_Controller { 

    public function __construct() 
    { 
        parent::__construct();
        $this->load->model('Model_Login');
        $this->load->library('form_validation');
    }

    public function index(){
        if ($this->session->userdata('email')) {
            // jika ada session user langsung ke admin
            // user tidak bisa akses hal login stlh login 
            redirect(base_url('Admin/index'));
        }

        $this->form_validation->set_rules('emailadmin', 'Email', 'trim|required');
        $this->form_validation->set_rules('passwordadmin', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul']  =   'Login Page';
            $this->load->view('auth/Login', $data);
        }else{
            $username	=	$this->input->post('emailadmin');
			$password	=	$this->input->post('passwordadmin');
			$where 		=	"email";
			$cek		= 	$this->Model_Login->cek_login("admin", $where, $username, $password);

			if ($cek) { // jika email ada
				foreach ($cek as $row) {
					$this->session->set_userdata('email', $row['email']);
					redirect(base_url("admin"));
				}
			} else {
                   $this->session->set_flashdata('message', '<div class="alert alert-danger"> username Password salah</div>');
                   $this->load->view('auth/Login');
			}
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}