<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('mahasiswa_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index(){
		$this->ceklogin();
		$data = array(
			'mhs' => $this->mahasiswa_model->Ambil('order by id_mhs desc')->result_array(),
		);
		$this->load->view('mahasiswa/index', $data);
	}	

	public function create(){
		$this->ceklogin();
		$this->load->view('mahasiswa/create');
	}

	public function insert(){
		$config =array(
			'upload_path' => './images',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('file_upload');
			$upload_data = $this->upload->data();
		$this->ceklogin();
		$id_mhs = '';
		$nis = $_POST['nis'];
		$no_reg = $_POST['no_reg'];
		$nama = $_POST['nama'];
		$ttl = $_POST['ttl'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$alamat = $_POST['alamat'];
		$asal = $_POST['asal'];
		$jurusan = $_POST['jurusan'];
		$prestasi = $_POST['prestasi'];
		$prestasi_khusus = $_POST['prestasi_khusus'];
		$nama_ortu = $_POST['nama_ortu'];
		$pek_ortu = $_POST['pek_ortu'];
		$peng_ortu = $_POST['peng_ortu'];
		$pil_prodi = $_POST['pil_prodi'];
		$alasan = $_POST['alasan'];
		$file_name = $upload_data['file_name'];
		

		$data = array(
			'id_mhs' => $id_mhs,
			'nis' => $nis,
			'no_reg' => $no_reg,
			'nama' => $nama,
			'ttl' => $ttl,
			'jk' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'asal' => $asal,
			'jurusan' => $jurusan,
			'prestasi' => $prestasi,
			'prestasi_khusus' => $prestasi_khusus,
			'nama_ortu' => $nama_ortu,
			'pek_ortu' => $pek_ortu,
			'peng_ortu' => $peng_ortu,
			'pil_prodi' => $pil_prodi,
			'alasan' => $alasan,
			'foto' =>$file_name,
			
			);

		$hasil = $this->mahasiswa_model->Simpan('mahasiswa', $data);

		if($hasil>=1){
			redirect('mahasiswa');
		}
	}

	public function cetak($kode = 0)
	{
		$this->ceklogin();
			$mhs = $this->mahasiswa_model->Ambil("where id_mhs='$kode'")->result_array();
			
			$data = array(
			'id_mhs' => $mhs[0]['id_mhs'],
			'nis' => $mhs[0]['nis'],
			'no_reg' => $mhs[0]['no_reg'],
			'nama' => $mhs[0]['nama'],
			'ttl' => $mhs[0]['ttl'],
			'jk' => $mhs[0]['jk'],
			'agama' => $mhs[0]['agama'],
			'alamat' => $mhs[0]['alamat'],
			'asal' => $mhs[0]['asal'],
			'jurusan' => $mhs[0]['jurusan'],
			'prestasi' => $mhs[0]['prestasi'],
			'prestasi_khusus' => $mhs[0]['prestasi_khusus'],
			'nama_ortu' => $mhs[0]['nama_ortu'],
			'pek_ortu' => $mhs[0]['pek_ortu'],
			'peng_ortu' => $mhs[0]['peng_ortu'],
			'pil_prodi' => $mhs[0]['pil_prodi'],
			'alasan' => $mhs[0]['alasan'],
			'foto' => $mhs[0]['foto'],
		);		
		$this->load->library('fpdf');	
		$this->load->view('mahasiswa/cetak', $data);
	}

	public function lihat($kode = 0){
		$this->ceklogin();
		$data_soal = $this->mahasiswa_model->Ambil("where id_mhs = '$kode'")->result_array();

		$data = array(
			'id_mhs' => $data_soal[0]['id_mhs'],
			'nis' => $data_soal[0]['nis'],
			'no_reg' => $data_soal[0]['no_reg'],
			'nama' => $data_soal[0]['nama'],
			'ttl' => $data_soal[0]['ttl'],
			'jk' => $data_soal[0]['jk'],
			'agama' => $data_soal[0]['agama'],
			'alamat' => $data_soal[0]['alamat'],
			'asal' => $data_soal[0]['asal'],
			'jurusan' => $data_soal[0]['jurusan'],
			'prestasi' => $data_soal[0]['prestasi'],
			'prestasi_khusus' => $data_soal[0]['prestasi_khusus'],
			'nama_ortu' => $data_soal[0]['nama_ortu'],
			'pek_ortu' => $data_soal[0]['pek_ortu'],
			'peng_ortu' => $data_soal[0]['peng_ortu'],
			'pil_prodi' => $data_soal[0]['pil_prodi'],
			'alasan' => $data_soal[0]['alasan'],
			'foto' => $data_soal[0]['foto'],
		);
		$this->load->view('mahasiswa/lihat', $data);
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->mahasiswa_model->Ambil("where id_mhs = '$kode'")->result_array();

		$data = array(
			'id_mhs' => $data_soal[0]['id_mhs'],
			'nis' => $data_soal[0]['nis'],
			'no_reg' => $data_soal[0]['no_reg'],
			'nama' => $data_soal[0]['nama'],
			'ttl' => $data_soal[0]['ttl'],
			'jk' => $data_soal[0]['jk'],
			'agama' => $data_soal[0]['agama'],
			'alamat' => $data_soal[0]['alamat'],
			'asal' => $data_soal[0]['asal'],
			'jurusan' => $data_soal[0]['jurusan'],
			'prestasi' => $data_soal[0]['prestasi'],
			'prestasi_khusus' => $data_soal[0]['prestasi_khusus'],
			'nama_ortu' => $data_soal[0]['nama_ortu'],
			'pek_ortu' => $data_soal[0]['pek_ortu'],
			'peng_ortu' => $data_soal[0]['peng_ortu'],
			'pil_prodi' => $data_soal[0]['pil_prodi'],
			'alasan' => $data_soal[0]['alasan'],
			'foto' => $data_soal[0]['foto'],
		);
		$this->load->view('mahasiswa/edit', $data);
	}

	public function update(){
		$config=array(
			'upload_path' =>'./images',
			'allowed_types' =>'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_upload');
		$upload_data=$this->upload->data();
		$file_name=$upload_data['file_name'];
		$this->ceklogin();
		 $data = array(
		 	'id_mhs' => $this->input->post('id_mhs'),
            'nis' => $this->input->post('nis'),
            'no_reg' => $this->input->post('no_reg'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'jk' => $this->input->post('jk'),
          	'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'asal' => $this->input->post('asal'),
            'jurusan' => $this->input->post('jurusan'),
            'prestasi' => $this->input->post('prestasi'), 
            'prestasi_khusus' => $this->input->post('prestasi_khusus'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'pek_ortu' => $this->input->post('pek_ortu'),
            'peng_ortu' => $this->input->post('peng_ortu'),
            'pil_prodi' => $this->input->post('pil_prodi'), 
            'alasan' => $this->input->post('alasan'),
            'foto' => $file_name,      
        );

      	$this->mahasiswa_model->Rubah($data);
      	if($res>=1){
      		header('location:'.base_url().'mahasiswa/mahasiswa/edit/1');
      	}else{
      		header('location:'.base_url().'mahasiswa/mahasiswa/edit/0');
      	
      }		
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->mahasiswa_model->Hapus('mahasiswa',array('id_mhs' => $kode));
		if($hasil == 1){
			redirect('mahasiswa');
		}else{
			echo "ada yang salah broo";
		}
	}
}