<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('jawaban_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index()
	{
		$this->ceklogin();
		$data = array(
			'nilai'=>$this->jawaban_model->Ambil()->result_array(),			
		);  

		$this->load->view('jawaban/index', $data);
	}	

	public function cetak()
	{
		$this->ceklogin();
		$data = array(
			'nilai'=>$this->jawaban_model->Ambil()->result_array(),			
		);		
		$this->load->library('fpdf');	
		$this->load->view('jawaban/cetak', $data);
	}

	public function nilai()
	{
		$this->ceklogin();	
		$this->load->model('user_model');	
		$this->load->model('mahasiswa_model');	
		$user = $this->session->userdata('username');		
		$user = $this->user_model->userData($user);	

		$user2 = $this->session->userdata('username');	
        $nis = $this->user_model->AmbilNis($user2);
        $idMhs = $this->mahasiswa_model->AmbilIdMhs($nis);

		$data = array(
			'nilai'=>$this->jawaban_model->AmbilNilai2($idMhs)->result_array(),
			'user' =>$user,			
		);  

		$this->load->view('jawaban/nilai', $data);
	}

	public function dnilai($kode = 0){
		//$this->ceklogin();		

		$data = array(
			'nilai'=>$this->modeladmin->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai', $data);
	}

	public function dnilai2($kode = 0){
		//$this->ceklogin();		

		$data = array(
			'nilai'=>$this->modeladmin->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai2', $data);
	}

	public function daftar(){
		$this->ceklogin();
		$this->load->model('user_model');
		$this->load->model('mahasiswa_model');

		$user = $this->session->userdata('username');
        $nis = $this->user_model->AmbilNis($user);
        $idMhs = $this->mahasiswa_model->AmbilIdMhs($nis);

		$data = array(			
			'id_mhs' => $idMhs,
			'tgl_tes' =>date("Y-m-d"),			
		);

		$this->jawaban_model->Simpan('jawaban', $data);
		$id=mysql_insert_id();		

		redirect('jawaban/soal/'.$id);
	}

	public function soal($id = 0){		
    	$this->ceklogin();    	
    	$this->load->model('soal_model');	

    	$soal = $this->soal_model->Ambil("where soal.status = 'tampil' order by RAND()");
    	        
        $data = array(
			"soal" => $soal->result_array(),
			"total_soal" =>$soal->num_rows(),
			"id_jawaban" => $id,
		);

        $this->load->view('jawaban/soal', $data);       
    }

    public function jawab(){
        $this->ceklogin();   
        $this->load->model('soal_model');    
        $this->load->model('user_model');    
        $this->load->model('jawaban_detail_model');    
        $id_jawaban = $this->input->post('id_jawaban'); 
        
        $jawaban=$_POST["jawaban"];
		$id_soal=$_POST["soal"];
		$jumlah=$_POST['jumlah_soal'];

        for ($i=0;$i<$jumlah;$i++){   		

        	$nomor=$id_soal[$i];
        	$jawaban[$nomor];		    

        	$data = array(
				'id_jawaban' => $id_jawaban,						
				'id_soal' => $nomor,						
				'id_paket' => $this->soal_model->AmbilPaket2($nomor),						
				'jawaban' => $jawaban[$nomor],						
				'kunci' =>$this->soal_model->AmbilJawaban($nomor),						
			);
		    //echo "<p>ID SOAL ".$nomor." Jawaban = ".$jawaban[$nomor]." Kunci = ".$this->modeladmin->AmbilJawaban($nomor)."</p>";
			$this->jawaban_detail_model->Simpan('jawaban_detail', $data);
		}

        $sql = $this->jawaban_detail_model->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['id_paket']==1 OR $data['id_paket']==2){
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 1,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}
			}
			else {
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 5,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}
				else {
					$data = array(
						'nilai' => 1,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}

			}
		}
     	     			
	    $benar=0;
		$salah=0;
		$total_nilai=0;
	
		$sql = $this->jawaban_detail_model->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['jawaban']==$data['kunci']){
				$benar++;
			}
			else {
				$salah++;
			}
			$total_nilai += $data['nilai'];
		}		

		$data = array(
		 	'benar' => $benar,
            'salah' => $salah,
            'total_nilai' => $total_nilai,
    	);		
	
		$this->jawaban_model->UpdateTotalNilai($id_jawaban, $data);

		$data2 = array(
		 	'status' => 2,            
    	);		

    	$username = $this->session->userdata('username');

		$this->user_model->UpdateStatusUser($username, $data2);

		$this->session->sess_destroy();
		redirect('jawaban/dnilai/'.$id_jawaban);
    }
}