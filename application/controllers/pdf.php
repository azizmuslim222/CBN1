<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {

 	function __construct(){
	parent::__construct();
	$this->load->model('modeladmin','',TRUE);
	$this->load->library('fpdf/fpdf'); // load librari fpdf di folder aplication fpdf
	}
	


	public function kartu($no_induk){
	// ambil data anggota
		$mahasiswa=$this->modeladmin->detail($this->uri->segment(3));
	// buat file pdf
		$pdf = new FPDF();
	//buka file
		$pdf->Open();
	// disable oto page break
		$pdf->SetAutoPageBreak(false);
		$pdf->AddPage();


		$i=0;

		$max=25;

		$row_height=5;

		$pdf->Image(base_url().'images/ktm_depan.jpg',9.75,4.0,90,75);
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','',10);
		$pdf->Rect(9.75, 4.0, 90, 75 , 'D') ;
		$pdf->Rect(105, 4.0, 90, 75 , 'D') ;

		
		$pdf->Cell(35,5,'No. Registrasi',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['no_reg'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'NIS',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['nis'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Nama Lengkap',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['nama'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Tempat Tanggal Lahir',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['ttl'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Jenis Kelamin',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['jk'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Agama',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['agama'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Alamat',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['alamat'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Asal Sekolah',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['asal'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Jurusan Di sekolah',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['jurusan'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Prestasi',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['prestasi'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Pretasi Khusus',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['prestasi_khusus'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Nama Oran Tua',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['nama_ortu'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Pekerjaan Orang Tua',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['pek_ortu'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Penghasilan Orang Tua',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['peng_ortu'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Pilihan Prodi',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['pil_prodi'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Alasan',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['alasan'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Foto',0,0,'l',0);$pdf->Cell(65,5,': '.$mahasiswa['foto'],0,0,'l',0);
		$pdf->Ln();

		$pdf->SetFont('Arial','',10);


		$pdf->Output();	


	}

}
