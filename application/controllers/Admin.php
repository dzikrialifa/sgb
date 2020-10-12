<?php 

class Admin extends CI_Controller { 

    public function __construct() 
    { 
        parent::__construct();      
        $this->load->library("form_validation");
        $this->load->helper(['form', 'url']);

        if (!$this->session->userdata('email')) {
            // jika tidak ada session maka disuruh login
            redirect(base_url('Auth'));
        }
    }

    // 1. Halaman dashboard admin
    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Dashboard');
        $this->load->view('template/footer');
    }

    // 2. Halaman Profilpanti admin
    public function Profilpanti(){
        $data['listpanti'] = $this->db->get("profil")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Profilpanti', $data);
        $this->load->view('template/footer');
    }

    private function _upload(){
        // fungsi untuk upload gambar
        $config['upload_path']          = './assets/img/'; // path upload gambar
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}
    }

    public function insert_panti(){
        $data = [
            'nama'          => $this->input->post("nama_panti"),
            'alamat'        => $this->input->post("alamat"),
            'deskripsi'     => $this->input->post("deskripsi"),
            'telepon'       => $this->input->post("telepon"),
            'gambar'        => $this->_upload()
        ];
        $this->db->insert("profil",$data);
        redirect(base_url('Admin/Profilpanti'));
    }

    public function read_panti($id){
        $data['panti']      = $this->db->get_where("profil",['id_profil' => $id])->result_array();
        $data['listpanti']  = $this->db->get("profil")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Editpanti', $data);
        $this->load->view('template/footer');
    }

    public function update_panti($id){
        $this->db->set('nama', $this->input->post("nama_panti"));
        $this->db->set('alamat', $this->input->post("alamat"));
        if (empty($_FILES['gambar']['name'])) {
            // jika gambar kosong, maka gambar ikut foto lama
            $this->db->set('gambar', $this->input->post("oldimage"));
        }else{
            $this->db->set('gambar', $this->_upload());
            $this->delete_image($id); // hapus foto lama jika upload foto bar
        }
        $this->db->where('id_profil',$id);
        $this->db->update('profil');

        redirect(base_url('Admin/Profilpanti'));
    }

    public function delete_panti($id){
        $this->delete_image($id);
        $this->db->delete("profil",['id_profil' => $id]);
        redirect(base_url('Admin/Profilpanti'));
    }

    public function delete_image($id){
        // untuk menghapus gambar
        $gambar = $this->db->get_where("profil",['id_profil' => $id])->result_array();
        unlink('./assets/img/'.$gambar[0]["gambar"]); // jika data dihapus gambar juga terhapus
    }

    // 3. Halaman display Lokasi admin
    public function Lokasi(){
        $data['listlokasi'] = $this->db->get("lokasi")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Lokasi', $data);
        $this->load->view('template/footer');
    }

    public function create_lokasi(){
        $data = [
                'nama_lokasi'   => $this->input->post("nama_lokasi"),
                'koordinat'     => $this->input->post("koordinat"),
                'alamat'        => $this->input->post("alamat")
                ];
        $this->db->insert("lokasi",$data);
        redirect(base_url('Admin/Lokasi'));
    }

    public function read_lokasi($id){
        $data['lokasi'] = $this->db->get_where("lokasi",['id_lokasi' => $id])->result_array();
        $data['listlokasi'] = $this->db->get("lokasi")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Editlokasi', $data);
        $this->load->view('template/footer');
    }

    public function update_lokasi($id){
        $this->db->set('nama_lokasi', $this->input->post("nama_lokasi"));
        $this->db->set('koordinat', $this->input->post("koordinat"));
        $this->db->set('alamat', $this->input->post("alamat"));
        $this->db->where('id_lokasi',$id);
        $this->db->update('lokasi');

        redirect(base_url('Admin/Lokasi'));
    }

    public function delete_lokasi($id){
        $this->db->delete("lokasi",['id_lokasi' => $id]);
        redirect(base_url('Admin/Lokasi'));
    }

    // 4. Halaman display Saran admin
    public function Kritiksaran(){
        // menampilkan kritiksaran dari database
        $data['data'] = $this->db->get("saran")->result_array();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('admin/Kritiksaran', $data);
        $this->load->view('template/footer');
    }

}
