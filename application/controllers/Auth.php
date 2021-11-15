<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>page";
			</script>
			<?php
		}
		
	}

  public function index()
	{
		redirect(base_url('auth/login'));
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

  function proses_login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		
		$where = array(
			'email'=>$email,
			'password'=>md5($pass)
		);
		$cek = $this->Model_login->cek_login('tbl_pengguna',$where)->num_rows();
		$hasil= $this->Model_login->cek_login('tbl_pengguna',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'email'=>$user,
					'nama'=>$data->nama,
					'level'=>$data->level,
					'status'=>"login"
					);
			};
			$this->session->set_userdata($sesi);
			redirect(base_url('page'));
		}else{
			$this->session->set_flashdata('msg',
			'<script>alert("GAGAL!!\n Email Atau Password yang anda masukan salah");</script>'
			);
			redirect(base_url('auth/login'));
		}
	}

	public function proses_daftar()
	{
		$tgl = $tgl = date("Y-m-d h:i:sa");
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$data = array(
			'tgl_daftar'=>$tgl,
			'nama'=>$nama,
			'email'=>$email,
			'password'=>$password,
			);
		$this->Model_login->tambah('tbl_pengguna',$data);
		$this->session->set_flashdata('msg',
		'<script>alert("Pendaftaran Berhasil !!");</script>'
		);
		redirect(base_url('auth/login'));
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		redirect(base_url('auth/login'));
	} 

}
