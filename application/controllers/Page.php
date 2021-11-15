<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['hasil']= $this->Model_page->tampil('tbl_produk')->result();
		$data['title'] = 'Produk';
		$this->load->view('header', $data);
    $this->load->view('produk');
    $this->load->view('footer');
	} 

	public function cetak(){
		$data['hasil']= $this->Model_page->tampil('tbl_produk')->result();
    $this->load->view('cetak', $data);
	}

	public function pengguna(){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$data['hasil']= $this->Model_page->tampil('tbl_pengguna')->result();
		$data['title'] = 'Pengguna';
		$this->load->view('header', $data);
    $this->load->view('pengguna');
    $this->load->view('footer');
	}

	public function tambah(){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$data['title'] = 'Tambah Produk';
		$this->load->view('header', $data);
    $this->load->view('tambah');
    $this->load->view('footer');
	}

	public function tambah_proses(){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$nama = $_POST['nama'];
		$gizi = $_POST['gizi'];
		$data = array(
			'nama_produk'=>$nama,
			'kadar_gizi'=>$gizi
			);
		$this->Model_page->tambah('tbl_produk',$data);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menambahkan produk
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page'));
	}

	function hapus_produk($id){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_produk',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus Produk
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page'));
	}

	function hapus_pengguna($id){
		if($this->session->userdata('level')!= "1"){
			redirect(base_url('page'));
		}
		$where = array('id'=>$id);
		$this->Model_page->hapus('tbl_pengguna',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil !!</strong> <br>Menghapus pengguna
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>'
		);
		redirect(base_url('page/pengguna'));
	}
}