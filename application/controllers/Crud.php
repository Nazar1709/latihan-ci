<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['maha'] = $this->db->get('mahasiswa');

		$data['judul'] = 'Halaman Home';
		$this->load->view('template/header1', $data);
		$this->load->view('crud/index', $data);
		$this->load->view('template/footer1');

	}
	
	public function mahasiswa()
	{
        $keyword = $this->input->post('keyword');
        if (!empty($keyword)) {
            $this->db->like('nama', $keyword, 'both'); 
            $this->db->or_like('nim', $keyword, 'both'); 
            $this->db->or_like('jurusan', $keyword, 'both'); 
        }
        $mahasiswa = $this->db->get('mahasiswa');
        $data['maha'] = $mahasiswa->result_array();
        $data['num_rows'] = $mahasiswa->num_rows();

        $data['judul'] = 'Daftar Mahasiswa';
        $this->load->view('template/header', $data);
		$this->load->view('crud/mahasiswa', $data);
		$this->load->view('template/footer');

    }

	public function tambah()
	{
		$data['judul'] = 'Tambah Mahasiswa';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','Nim','required');
		$this->form_validation->set_rules('email','Email','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('crud/tambah' ,$data);
			$this->load->view('template/footer');
		} else{
			$data = array(
			'nama'		=> $this->input->post('nama'),
			'nim' 		=> $this->input->post('nim'),
			'jurusan'	=> $this->input->post('jurusan'),
			'email' 	=> $this->input->post('email'),
			'file' 		=> $this->input->post('file')
		);
			$this->db->insert('mahasiswa', $data);
			$this->session->set_flashdata('flash', 'Ditambahkan');

			redirect('crud/mahasiswa');
		}	
	}

	public function delete($id = NULL)
	{
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');

		$this->session->set_flashdata('hapus', 'Dihapus');
		redirect('crud/mahasiswa');
	}

	public function update($id = NULL)
	{
		$this->db->where('id', $id);
		$data['maha'] = $this->db->get('mahasiswa');
		$this->db->get('mahasiswa');

		$data['judul'] = 'Update Mahasiswa';
		$this->load->view('template/header', $data);
		$this->load->view('crud/update', $data);
		$this->load->view('template/footer');
	}

	public function aksi_update($id = '')
	{
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'nim' 		=> $this->input->post('nim'),
			'jurusan' 	=> $this->input->post('jurusan'),
			'email' 	=> $this->input->post('email'),
			'file' 		=> $this->input->post('file')
		);

		$this->db->where('id', $id);
		$this->db->update('mahasiswa', $data);
		$this->session->set_flashdata('ubah', 'Diubah');

		redirect('crud/mahasiswa');
	}

    public function do_upload()
    {
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

               	$this->form_validation->set_rules('nama','Nama','required');
				$this->form_validation->set_rules('nim','Nim','required');
				$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('file','File','required');

                if ( ! $this->upload->do_upload('file'))
                {
                       if ($this->form_validation->run() == FALSE) {
                       	$data['judul'] = 'Tambah Mahasiswa';
						$this->load->view('template/header', $data);
						$this->load->view('crud/tambah' ,$data);
						$this->load->view('template/footer');
					}
                }
                else
                {
                        $file = $this->upload->data();
                        $file = $file['file_name'];
                        $nama = $this->input->post('nama', );
                        $nim = $this->input->post('nim', );
                        $jurusan = $this->input->post('jurusan');
                        $email = $this->input->post('email');

                        $data = array(
						'nama'		=> $nama,
						'nim' 		=> $nim,
						'jurusan'	=> $jurusan,
						'email' => $email,
						'file' 	=> $file
				);
						$this->db->insert('mahasiswa', $data);
						$this->session->set_flashdata('flash', 'Ditambahkan');

						redirect('crud/mahasiswa');
                }
    }

	public function read($id = NULL)
	{
		$this->db->where('id', $id);
		$data['maha'] = $this->db->get('mahasiswa');
		
		$data['judul'] = 'Read Mahasiswa';
		$this->load->view('template/header', $data);
		$this->load->view('crud/read', $data);
		$this->load->view('template/footer');
	}

	public function about()
	{
		$data['judul'] = 'About';
		$this->load->view('template/header', $data);
		$this->load->view('crud/about');
		$this->load->view('template/footer');
	}

}
