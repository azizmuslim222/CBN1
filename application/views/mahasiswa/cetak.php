<?php	
	$this->fpdf->FPDF('P','cm','A4');
	$this->fpdf->AliasNbPages();
	$this->fpdf->AddPage();

	$this->fpdf->Image('assets/img/logo1.png',18,0.7,2);

	$this->fpdf->SetFont('courier','B',11);
	$this->fpdf->Cell(1,1,'POLITEKNIK NEGERI TANAH LAUT');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(1,1,'Jl. A. Yani Km.06 Desa Panggung');
	
	$this->fpdf->Ln(0.5);	
	$this->fpdf->Cell(1,1,'(0512) 21537');

	$this->fpdf->SetFont('courier','B',10);
	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(0,1,'DATA MAHASISWA',0,0,'C');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(1);
	
	$this->fpdf->Cell(6,0.5,'NO REGISTRASI',0,0,'L');				
	$this->fpdf->Cell(6,0.5,' : '.$no_reg,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NIS',0,0,'L');		
	$this->fpdf->Cell(6,0.5,' : '.$nis,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NAMA LENGKAP',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$nama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'TEMPAT TANGGAL LAHIR',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$ttl,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'JENIS KELAMIN',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$jk,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'AGAMA',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$agama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'ALAMAT',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$alamat,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'ASAL SEKOLAH',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$asal,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'JURUSAN DI SEKOLAH',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$jurusan,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'PRESTASI',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$prestasi,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'PRESTASI KHUSUS',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$prestasi_khusus,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'NAMA ORANG TUA',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$nama_ortu,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'PEKERJAAN ORANG TUA',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$pek_ortu,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'PENGHASILAN ORANG TUA',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$peng_ortu,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'PILIHAN PROGRAM STUDI',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$pil_prodi,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'ALASAN',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$alasan,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->cell(6,0.5,'FOTO',0,0,'L'); 
	$this->fpdf->Image('images/'.$foto,8,12,3,4);

	$this->fpdf->Output();
?>