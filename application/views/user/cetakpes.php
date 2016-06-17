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
	$this->fpdf->Cell(0,1,'KARTY UJIAN MAHASISWA',0,0,'C');	
	
	$this->fpdf->SetFont('courier','',9);
	$this->fpdf->Ln(1);
	
	// $this->fpdf->Cell(6,0.5,'NO REGISTRASI',0,0,'L');				
	// $this->fpdf->Cell(6,0.5,' : '.$no_reg,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NIS',0,0,'L');		
	$this->fpdf->Cell(6,0.5,' : '.$nis,0,0,'L');		

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'NAMA LENGKAP',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$nama,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'USERNAME',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$username,0,0,'L');

	$this->fpdf->Ln(0.5);
	$this->fpdf->Cell(6,0.5,'PASSWORD',0,0,'L');
	$this->fpdf->Cell(6,0.5,' : '.$pass,0,0,'L');


	$this->fpdf->Output();
?>